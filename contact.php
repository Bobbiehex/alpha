<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Capitals</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400&family=Tomato+Grotesk:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400&family=Tomato+Grotesk:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="auth-container">
        <a href="signup.html" class="button">Sign Up</a>
        <a href="login.html" class="button">Login</a>
    </div>



    <section id="contact">
        <h2>Contact Us</h2>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </section>

</html>


<?php include_once "./bottom_component.php" ?>





<style>
   








</style>