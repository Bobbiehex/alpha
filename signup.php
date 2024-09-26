<link rel="stylesheet" href="formstyle.css">

<fieldset class="signup-form">
    <legend>Sign up</legend>
    <form action="signup_processor.php" method="POST">
        <div class="input-group">
            <input type="text" name="email_id" required/>
            <span>Email ID</span>
        </div>

        <div class="input-group">
            <input type="text" name="full_name" required/>
            <span>Name</span>
        </div>

        <div class="input-group">
            <input type="password" name="password_1" required/>
            <span>Create Password</span>
        </div>

        <div class="input-group">
            <input type="password" name="password_2" required/>
            <span>Confirm Password</span>
        </div>

        <button class="submit-btn">Submit</button>
    </form>
    <p>Already registered? <a href="login.php">Login</a></p>
</fieldset>
