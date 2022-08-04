<?php

var_dump($_POST);
$example = $_POST['email'];
echo $example;
//$data = [
//    "email" => $_POST["email"],
//    "content" => $_POST["content"]
//];
//echo $_POST['email'];
//echo '<pre>';
//print_r($data);
//$connection = new PDO('mysql:host=localhost;dbname=php', 'root', 'root');
//$sql = 'INSERT INTO some (email, content) VALUES (:email, :content)';
//$statement = $connection->prepare($sql);
//$result = $statement->execute($data);
