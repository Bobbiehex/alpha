<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdrawal page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <section method="POST" class="deposit-section">
        <form action="withdraw_processor.php" method="POST">
        <h2>Withdraw</h2>

        <!-- Amount Input -->
        <div class="form-group">
            <input type="hidden" name="email_id" value="<?php echo $_SESSION["email_id"];?>">

            <label for="amount_with">Enter Amount ($):</label>
            <input type="number" id="amount" name="amount_with" class="amount_with" placeholder="Enter amount in dollars" required>
        </div>

        <div class="form-group">
            <label for="wallet_add">Wallet address:</label>
            <input id="wallet_add" name="wallet_add" class="wallet_add" placeholder="Enter Wallet address" required>
        </div>

        <button class="submit-button">Proceed</button>
        </form>
    </section>
</body>
</html>
