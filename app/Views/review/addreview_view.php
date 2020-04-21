<form method="post" action="/review/">

<div class="container">
            <div class="row">
                <div class="col-lg-12"> 
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        try {
                            $db = new PDO('mysql:host=localhost;dbname=verkkokauppa_7;charset=utf8','root','');
                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                           
                            
                            $sql = "insert into review (name,subject,message) values "
                                    . "(:name,:subject,:message)";
                            
                            $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
                            $subject = filter_input(INPUT_POST,'subject',FILTER_SANITIZE_STRING);
                            $message = filter_input(INPUT_POST,'message',FILTER_SANITIZE_STRING);

                            $statement = $db->prepare($sql);
                            $statement->bindValue(':name', $name,PDO::PARAM_STR);
                            $statement->bindValue(':subject', $subject,PDO::PARAM_STR);
                            $statement->bindValue(':message', $message,PDO::PARAM_STR);
                            
                            $statement->execute();
                            
                            
                            header("location: index.php");
                        }
                        catch (Exception $ex) {
                            print "<p>Failure in database connection. " . $ex->getMessage() . "</p>";
                        }
                    }
                    ?>
                    <h3 class="title"><?= $title ?></h3>
                    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group col-4">
                            <label class="text-light">Name:</label>
                            <input name="name" placeholder="Enter Name" class="form-control" maxlength="100">
                        </div>
                        <div class="form-group col-5">
                            <label class="text-light">Product:</label>
                            <input name="subject" placeholder="Enter Product" class="form-control" maxlength="100">
                        </div>
                        <div class="form-group col-5">
                            <label class="text-light">Message:</label>
                            <textarea type="text" name="message" placeholder="&nbsp;&nbsp;Enter Review" rows="10" cols="85" maxlength="500"></textarea>
                            <button type="submit" class="btn btn-warning">Send</button>
                        </div>
                    </form>
                </div>
            </div>