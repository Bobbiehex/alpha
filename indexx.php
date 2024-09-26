<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="scripts.js"></script>
</head>
<body>

  
    <header>
        <div class="hamburger-menu" id="hamburger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <h1 class="logo">Account Overview</h1>
    </header>

    <nav class="sidebar" id="sidebar">
        <ul>
        <li>
            <a href="alpha.php">Home</a></li>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="referral.php">Referral</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <main>
    <div class="indexx">Your withdrawal is being processed. You will get an email notification shortly</div>
        <section class="dashboard">
            <div class="balance-box">
                <p>Available Balance</p>
<h2>$<?php 
include_once "./database_connection.php";

// Prepare SQL statement to select user balance
$sql = "SELECT * FROM alpha_table WHERE user_id = :user_id";
$stmt = $pdo->prepare($sql);
$stmt->execute(["user_id" => $_SESSION["user_id"]]);

// Fetch the result
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// If no balance found, display 0
if ($row && isset($row['balance'])) {
    echo $row['balance'];
} else {
    echo "0.00";  // Default balance if not found
}
?></h2>


<div class="balance-and-deposit">
                
                <button id="deposit-button" class="deposit-button">
                    <span class="plus-sign">+</span> <a href="deposit.php" class="plan-link">Deposit </a>
                </button>

                <button id="withdraw-button" class="withdraw-button">
                    <span class="plus-sign">+</span> <a href="withdraw.php" class="plan-link">Withdraw </a>
                </button>
            </div>
               
            </div>
        </section>


           

        <section class="investment-plan-section">
            <h2>Pick an Investment Plan</h2>
            <div class="plan-container">
                <div class="plan-box">
                    <h3>Standard Plan</h3>
                    <p>Get started with our basic investment plan, ideal for new investors.</p>
                    <button class="plan-button">
                        <a href="deposit.php" class="plan-link">Start with our Standard Plan</a>
                    </button>
                </div>
                <div class="plan-box">
                    <h3>Plus Plan</h3>
                    <p>Unlock advanced features and higher returns with our Plus Plan.</p>
                    <button class="plan-button">
                        <a href="deposit.php" class="plan-link">Give our plus plan a try</a>
                    </button>
                </div>
            </div>
        </section>

    </main>
</body>
</html>


<style>
    .indexx{
        font-size:2em;
        text-align:center;
        margin-top:1em;
    }
</style>