<?php
require 'functions.php';

if(isset($_POST['subBtn'])){
    $korisnicko = $_POST['korisnicko'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    
    
 if(isset($_POST['jezici']))
    $jezici = $_POST['jezici'];
}else{
header("Location:index.php");
}

if(isset($jezici)){
echo "<h2>Dobrodosao $korisnicko</h2>";
foreach($jezici as $jezici){
    echo "<h4> Potreban je $jezici developer</h4>";
}
echo "<h5>Poslacemo email na <span style=\"text-decoration:underline\">$email</span></h5>";
}else{
    echo "<h2>Izvinjavamo se, potreban je jedan jezik</h2>";
}
?>