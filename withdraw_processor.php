<?php
session_start();

$email_id = $_POST["email_id"];
$amount_with = $_POST["amount_with"];
$wallet_add = $_POST["wallet_add"];

include_once "./database_connection.php";

// Fetch the user's current balance from the database
$sql = "SELECT balance FROM alpha_table WHERE email_id = :email_id";
$stmt = $pdo->prepare($sql);
$stmt->execute(["email_id" => $email_id]);

// Fetch the result as an associative array
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $current_balance = $user['balance'];

    if ($amount_with > $current_balance) {
        // If withdrawal amount exceeds the balance, show an alert and redirect back to the withdrawal page
        echo "<script>alert('Insufficient funds. Your balance is: $" . $current_balance . "'); window.history.back();</script>";
    } else {
        // Proceed with the withdrawal if funds are sufficient
        $sql = "INSERT INTO withdraw_table(email_id, amount_with, wallet_add, date_with) 
                VALUES(:email_id, :amount_with, :wallet_add, now())";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            "email_id" => $email_id,
            "amount_with" => $amount_with,
            "wallet_add" => $wallet_add
        ]);

        // Update the user's balance after withdrawal
        $new_balance = $current_balance - $amount_with;
        $update_sql = "UPDATE alpha_table SET balance = :new_balance WHERE email_id = :email_id";
        $update_stmt = $pdo->prepare($update_sql);
        $update_stmt->execute(["new_balance" => $new_balance, "email_id" => $email_id]);

        // Redirect to the homepage or another page after successful withdrawal
        echo "<script>alert('Withdrawal successful!'); document.location = 'indexx.php';</script>";
    }
} else {
    // Handle case where user is not found in the database
    echo "<script>alert('User not found!'); window.history.back();</script>";
}
?>
