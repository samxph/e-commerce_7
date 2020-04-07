<h3><?= $title ?></h3>
<form action="/login/registration">
    <div class="col-12">
        <?= \Config\Services::validation()->listErrors(); ?>
    </div>
    <div class="form-group col-6">
        <label>Username</label>
        <input class="form-control" name="user" placeholder="Enter username" maxlength="30">
        <label>First name</label>
        <input class="form-control" name="fname" placeholder="Enter First name" maxlength="30">
        <label>Last name</label>
        <input class="form-control" name="lname" placeholder="Enter Last name" maxlength="30">
        <label>Email</label>
        <input class="form-control" name="usermail" placeholder="Enter Email" maxlength="30">
        <label>Address</label>
        <input class="form-control" name="useraddress" placeholder="Enter Address" maxlength="30">
        <label>Postcode</label>
        <input class="form-control" name="userpostcode" placeholder="Enter Postcode" maxlength="30">
        <label>City</label>
        <input class="form-control" name="userpostoffice" placeholder="Enter city" maxlength="30">
        <label>Phone number</label>
        <input class="form-control" name="userphone" placeholder="Enter Phone number" maxlength="30">
        <label>Password</label>
        <input class="form-control" type="password" name="password" placeholder="Enter Password" maxlength="30">
        <label>Password again</label>
        <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm your password" maxlength="30">
    <hr>
    </div>
    <button class="btn btn-primary">Register</button>
    <div class="container signin">
    <p>Already have an account? <?= anchor ('login/', 'Sign in') ?>.</p>
  </div>
</form>