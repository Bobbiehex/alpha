<?php session_start();
// error_reporting(0);
$email_id = $_POST["email_id"];
$password_1 = $_POST["password_1"];
// echo md5($password_1); 
// exit ();
include_once "./database_connection.php";

$sql = "SELECT * FROM alpha_table WHERE email_id = :email_id AND password_1 = :password_1";
$stmt = $pdo->prepare($sql);
$stmt->execute(["email_id"=>$email_id, "password_1"=> md5($password_1)]);
$count = $stmt->rowCount();
$rows = $stmt->fetchAll();
if($count > 0){
    foreach ($rows as $row) {
        $_SESSION["email_id"] = $row->email_id;
        $_SESSION["user_id"] = $row->user_id;

    }
    echo "Welcome"; ?>
    <script>
        document.location="index.php";
    </script>
<?php
}
else{ ?>
<fieldset>
   <p><span> &times;</span> access denied.</p>
    <a href="login.php">try again</a>    
</fieldset>

<style>

    fieldset{
        margin: top 7em;

    font-size: 22px;
    color: tomato;
    <text-transform: capitalize;

 }
    fieldset span{
    dispay: inline-block;
    font-size: 37px;
    color: tomato;
  }

fieldset a{
    text-decoration: none;
    color:#444;

}
</style>
<?php } 