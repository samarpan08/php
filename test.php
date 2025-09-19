<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
$firstname=htmlspecialchars($_POST["firstname"]);
$lastname=htmlspecialchars($_POST["lastname"]);
$pet=htmlspecialchars($_POST["pet"]);
echo("the data entered are");
echo("<br>");
echo($firstname);
echo("<br>");
echo ($lastname);
echo("<br>");
echo($pet);

}
?>