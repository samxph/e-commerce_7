<div class="container">
            <div class="row">
                <div class="col-lg-12 text-light">
                    <h3 class="title"><?= $title ?></h3>
                    <?php
                    try {
                        $db = new PDO('mysql:host=localhost;dbname=verkkokauppa_7;charset=utf8','root','');
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                        $sql = "select * from review order by saved";
                        $statement = $db->query($sql);
                        if ($statement) {
                            while ($record = $statement->fetch()) {
                                print "<div class='review'>";
                                print "<p>";
                                print $record['saved'] . " by " . $record['name'] . '<br />';
                                //print $record['message'];
                                print htmlspecialchars($record['review']);
                                print "</p>";
                                print "</div>";
                            }
                        }
                        else {
                            print "<p>There are no reviews.</p>";
                        }
                       
                    }
                    catch (Exception $ex) {
                        print "<p>Failure in database connection. " . $ex->getMessage() . "</p>";
                    }
                    ?>
                </div>
            </div>
        </div>