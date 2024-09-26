<!-- <link rel="stylesheet" href="index.css"> -->
 <?php session_start(); ?>
<div class="steps">
    <h1>Steps to make your deposit</h1>
    <br>
    <div class="steps1">
    <p>1. Copy your preferred wallet address below</p>
    <p>2. Head to your wallet and make the exact amount to the wallet below</p>
    <p>3. Provide your transaction ID and click on save button below</p>
    </div>
<br>
<div class="step2">
    <p>NB: Please do not click the save button</p>
    <br>
    <p>BTC wallet: ye1hqdliqdqfwefwetfgkete</p>
    <p>ETH wallet: ye1hqdliqdqfwefwetfgkete</p>
    <p>USDT wallet: ye1hqdliqdqfwefwetfgkete</p>
</div>
    <br> 
<div class="steps3">
    <p>Standard Plan:30% in 35 days</p>
    <p>Plus Plan: 70% in 60 days</p>


<section class="deposit-section">
    <form action="depo_processor.php" method="POST">

    <input type="hidden" name="email_id" value="<?php echo $_SESSION["email_id"];?>">
    
    <div class="form-group">
            <label>Transaction ID</label>
            <input name="transaction_id" class="transaction_id" placeholder="Enter ID of your transaction" required>
        </div>

        <!-- Amount Input -->
        <div class="form-group">
            <label for="amount_dep">Enter Amount ($):</label>
            <input type="number" id="amount" name="amount_dep" class="amount_dep" placeholder="Enter amount in dollars" required>
        </div>

        
        <!-- Submit Button -->
        <button class="submit-button">Confirm</button>
    </section>


<style>
  body{
    background-color:#edf2fa;
  }
.steps{
     margin:3%;
}

.round-button{
  background-color: #3232ac; /* Blue background */
  color: white; /* White text color */
  border: none; /* Remove default border */
  padding: 15px 50px; /* Adjust padding for size */
  font-size: 16px; /* Font size */
  border-radius: 50px; /* Make the button round */
  cursor: pointer; /* Pointer cursor on hover */
  transition: background-color 0.3s ease; /* Smooth transition for hover effect */
}

.round-button:hover{
  background-color: #3232ac; /* Change to darker blue on hover */
}


  /* Deposit Section */
  .deposit-section {
    background-color: #edf2fa;
    width: 300px;
    margin-top:40px
  }
  
  /* Heading */
  .deposit-section h2 {
    margin-bottom: 30px;
    font-size: 28px;
    color: #333;
  }
  
  /* Form Group */
  .form-group {
    margin-bottom: 20px;
    text-align: left;
  }
  
  /* Form Label */
  .form-group label {
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    color: #333;
  }
  
  /* Form Control */
  .form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ccc;
    
  }
  
  .form-control:focus {
    outline: none;
    border-color: #1E90FF; /* Dodger Blue */
  }
  
  /* Submit Button */
  .submit-button {
    background-color: #040e30; /* Dodger Blue */
    color: white;
    border: none;
    border-radius: 5px;
    padding: 12px 20px;
    font-size: 18px;
    cursor: pointer;
    width: 100%;
    margin-top: 20px;
    transition: background-color 0.3s ease;
  }
  
  .submit-button:hover {
    background-color: #005BB5; /* Darker blue */
  }

</style>