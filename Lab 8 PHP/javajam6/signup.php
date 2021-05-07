<?php
include_once('header.php');
?>
<main>
    <div class="container-fluid p-5 bg-coffee">
        <h1>Sign Up as JavaJam Member</h1>
        <p>Please fill in this form to create an account. Required
            information is marked with an asterisk (*).</p>
        <div class="row">
            <form class="col-md-5" method="post" action="processSignup.php">
                <div class="form-group">
                    <label for="uName">*Name: </label> <br>
                    <input type="text" class="form-control col-sm-4" id="uName" name="uName" required="required"> <br>
                </div>
                <div class="form-group">
                    <label for="myEmail">*E-mail: </label> <br>
                    <input type="email" class="form-control col-sm-4" id="mEmail" name="email" required="required"> <br>
                </div>
                <div class="form-group">
                    <label for="password">*Password:</label>
                    <input class="form-control col-sm-4" id="password" name="password" type="password" required><br>
                </div>
                <div class="form-group">
                    <label for="rpassword">*Repeat Password:</label>
                    <input class="form-control col-sm-4" id="rpassword" name="rpassword" type="password" required><br>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>
</main>
<?php
include_once('footer.php');
?>