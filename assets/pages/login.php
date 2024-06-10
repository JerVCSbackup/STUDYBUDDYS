<div class="login">
    <div class="col-sm-12 col-md-4 bg-white border rounded p-4 shadow-sm">
        <form method="post" action="assets/php/actions.php?login">
            <div class="d-flex justify-content-center">
                <img class="mb-4" src="assets/images/studybuddy.png" alt="" height="45">
            </div>
            <h1 class="h5 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
                <input type="text" name="username_email" value="<?=showFormData('username_email')?>" class="form-control rounded-0" placeholder="username/email">
                <label for="floatingInput">username/email</label>
            </div>
            <?=showError('username_email')?>
            <div class="form-floating mt-1">
                <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">password</label>
            </div>
            <?=showError('password')?>
            <?=showError('checkuser')?>
            <button class="btn btn-primary mt-3" type="submit">Sign in</button>
            <div class="additional-links">
                <a href="?signup" class="text-decoration-none">Create New Account</a>
                <a href="?forgotpassword&newfp" class="text-decoration-none">Forgot password?</a>
            </div>
        </form>
    </div>
</div>


<style>
    /* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #f06, #8f0);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Container styling */
.login {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

/* Form container styling */
.login .col-sm-12.col-md-4 {
    max-width: 400px;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.9);
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    padding: 2rem;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}

/* Centering the logo */
.login .d-flex.justify-content-center img {
    display: block;
}

/* Form heading styling */
.login h1.h5 {
    text-align: center;
    margin-bottom: 1rem;
    font-weight: 500;
    color: #333;
}

/* Form input styling */
.login .form-floating {
    position: relative;
    margin-bottom: 1rem;
}

.login .form-floating input {
    border-radius: 0;
    border: 1px solid #ccc;
    padding: 0.75rem;
}

.login .form-floating label {
    padding: 0.5rem 1rem;
    color: #555;
}

/* Error message styling */
.login .form-floating + span {
    color: red;
    font-size: 0.875rem;
    margin-top: 0.5rem;
    display: block;
}

/* Button and link styling */
.login .btn-primary {
    background-color: #007bff;
    border: none;
    padding: 0.5rem 1rem;
    color: #fff;
    border-radius: .25rem;
    width: 100%;
    margin-bottom: 1rem;
}

.login .btn-primary:hover {
    background-color: #0056b3;
}

.login .text-decoration-none {
    text-decoration: none;
    color: #007bff;
}

.login .text-decoration-none:hover {
    text-decoration: underline;
}

/* Footer link styling */
.login .d-flex.justify-content-between.align-items-center a {
    font-size: 0.875rem;
}

.login .d-flex.justify-content-between.align-items-center {
    margin-top: 1.5rem;
}

.login .additional-links {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1rem;
}

.login .additional-links a {
    font-size: 0.875rem;
}

</style>