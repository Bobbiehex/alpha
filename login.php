<link rel="stylesheet" href="formstyle.css"/>

<fieldset>
        <legend>Login</legend>
        <form action="login_processor.php" method="POST">
        <div>
            <input type="text" name="email_id" required/>
            <span>Email ID</span>
        </div>

        <div>
            <input type="password" name="password_1" required/>
            <span>Password</span>
        </div>

        <button>Login</button>
        </form>
        <p>New here?<a href="signup.php"> Sign up</a></p>
</fieldset>


