<form action="" method="get">
    Imie:<input type="text" name="name">
    Nazwisko:<input type="text" name="surname">
    Numer:<input type="text" name="number">
    <input name="sub" type="submit" value="wytnij">
</form>

<?php
$name=$_GET['name'];
$surname=$_GET['surname'];
$number=$_GET['number'];
$i;
$n;

$i=substr($name,$number);
$n=substr($surname,$number);

echo "$i <br> $n";
?>