<?php
require 'connect.php';
$nome=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);
$accedi="SELECT * FROM utente WHERE nome='$nome' and password='$password'";
if($conn->query($accedi)->num_rows>0){
    header("Location: sito.html");
    exit();
}else{
    echo "<br/>credenziali sbagliate<br/>";
}
$conn->close();
?>