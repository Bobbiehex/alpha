<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <section class="deposit-section">
    <form action="depo.php" method="POST">
        <h2>Select Plan</h2>

        <!-- Plan Selection -->
        <div class="form-group">
            <label for="plan">Choose your plan:</label>
            <select id="plan" name="plan" class="form-control" required>
                <option value="standard">Standard Plan</option>
                <option value="plus">Plus Plan</option>
            </select>
        </div>

        <!-- Amount Input -->
        <div class="form-group">
            <label for="amount_dep">Enter Amount ($):</label>
            <input type="number" id="amount" name="amount" class="form-control" placeholder="Enter amount in dollars" required>
        </div>

        <!-- Payment Method Selection -->
        <div class="form-group">
            <label for="payment-method">Select Payment Method:</label>
            <select id="payment-method" name="payment-method" class="form-control" required>
                <option value="bank-transfer">USDT</option>
                <option value="bank-card">Bitcoin</option>
                <option value="bank-card">Ethereum</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button class="submit-button">Proceed</button>
    </section>
</body>
</html>
