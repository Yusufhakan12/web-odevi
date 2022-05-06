<?php
$email=$_POST['email'];
$sifre=$_POST['psw'];


if($email=="b211210053@sakarya.edu.tr"&& $sifre=="b211210053"){
    echo "HOŞGELDİNİZ:"." ".$sifre;
}
else{
    header("location:http://localhost/H6/giris.html");
}

?>