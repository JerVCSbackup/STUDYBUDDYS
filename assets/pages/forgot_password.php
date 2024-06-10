<div class="login">
    <div class="col-lg-4 col-md-8 col-sm-12 bg-white border rounded p-4 shadow-sm">
        <?php
        if(isset($_SESSION['forgot_code']) && !isset($_SESSION['auth_temp'])){
            $action = 'verifycode';
        } elseif(isset($_SESSION['forgot_code']) && isset($_SESSION['auth_temp'])){
            $action = 'changepassword';
        } else {
            $action = 'forgotpassword';
        }
        ?>
        <form method="post" action="assets/php/actions.php?<?=$action?>">
            <div class="d-flex justify-content-center">
                <img class="mb-4" src="assets/images/studybuddy.png" alt="" height="45">
            </div>
            <h1 class="h5 mb-3 fw-normal text-center">Forgot Your Password?</h1>
            <?php
            if($action == 'forgotpassword'){
            ?>
            <div class="form-floating">
                <input type="email" name="email" class="form-control rounded-0" placeholder="Enter your email">
                <label for="floatingInput">Enter your email</label>
            </div>
            <?=showError('email')?>

            <button class="btn btn-primary mt-3 w-100" type="submit">Send Verification Code</button>
            <?php
            }
            ?>

            <?php
            if($action == 'verifycode'){
            ?>
            <p>Enter 6 Digit Code Sent to You - <?=$_SESSION['forgot_email']?></p>
            <div class="form-floating mt-1">
                <input type="text" name="code" class="form-control rounded-0" placeholder="######">
                <label for="floatingInput">######</label>
            </div>
            <?=showError('email_verify')?>

            <button class="btn btn-primary mt-3 w-100" type="submit">Verify Code</button>
            <?php
            }
            ?>

            <?php
            if($action == 'changepassword'){
            ?>
            <p>Enter your new password - <?=$_SESSION['forgot_email']?></p>
            <div class="form-floating mt-1">
                <input type="password" name="password" class="form-control rounded-0" placeholder="New password">
                <label for="floatingPassword">New password</label>
            </div>
            <?=showError('password')?>

            <button class="btn btn-primary mt-3 w-100" type="submit">Change Password</button>
            <?php
            }
            ?>

            <a href="?login" class="text-decoration-none mt-5 d-block text-center"><i class="bi bi-arrow-left-circle-fill"></i> Go Back To Login</a>
        </form>
    </div>
</div>
