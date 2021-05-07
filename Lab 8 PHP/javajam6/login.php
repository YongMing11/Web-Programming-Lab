<?php
include_once('header.php');
?>
<main>
    <div class="container-fluid p-5 bg-coffee">
        <h1>Login</h1>
        <p>Please sign in</p>
        <div class="row">
            <form class="col-md-5" method="post" action="processLogin.php">
                <div class="form-group">
                    <label for="myEmail">*E-mail: </label> <br>
                    <input type="email" class="form-control col-sm-4" id="mEmail" name="mEmail" required="required"> <br>
                </div>
                <div class="form-group">
                    <label for="password">*Password:</label>
                    <input class="form-control col-sm-4" id="password" name="password" type="password" required><br>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
</main>

<?php
include_once('footer.php');
?>