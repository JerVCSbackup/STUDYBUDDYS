<div class="login">
    <div class="col-lg-4 col-md-8 col-sm-12 bg-white border rounded p-4 shadow-sm">
        <form method="post" action="assets/php/actions.php?signup">
            <div class="d-flex justify-content-center">
                <img class="mb-4" src="assets/images/studybuddy.png" alt="" height="45">
            </div>
            <h1 class="h5 mb-3 fw-normal text-center">Create new account</h1>
            <div class="d-flex">
                <div class="form-floating mt-1 col-6">
                    <input type="text" name="first_name" value="<?=showFormData('first_name')?>" class="form-control rounded-0" placeholder="First Name">
                    <label for="floatingInput">First Name</label>
                </div>
                <div class="form-floating mt-1 col-6">
                    <input type="text" name="last_name" value="<?=showFormData('last_name')?>" class="form-control rounded-0" placeholder="Last Name">
                    <label for="floatingInput">Last Name</label>
                </div>
            </div>
            <?=showError('first_name')?>
            <?=showError('last_name')?>

            <div class="d-flex gap-3 my-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>
                    <label class="form-check-label" for="exampleRadios1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="2" <?=showFormData('gender')==2?'checked':''?>>
                    <label class="form-check-label" for="exampleRadios3">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="0" <?=showFormData('gender')==0?'checked':''?>>
                    <label class="form-check-label" for="exampleRadios2">
                        Other
                    </label>
                </div>
            </div>
            <div class="form-floating mt-1">
                <input type="email" name="email" value="<?=showFormData('email')?>" class="form-control rounded-0" placeholder="Email">
                <label for="floatingInput">Email</label>
            </div>
            <?=showError('email')?>

            <div class="form-floating mt-1">
                <input type="text" name="username" value="<?=showFormData('username')?>" class="form-control rounded-0" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <?=showError('username')?>

            <div class="form-floating mt-1">
                <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <?=showError('password')?>

            <button class="btn btn-primary mt-3 w-100" type="submit">Sign Up</button>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="?login" class="text-decoration-none">Already have an account?</a>
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
.login .col-lg-4.col-md-8.col-sm-12 {
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