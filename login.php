<?php
$email=$_POST['email'];
$sifre=$_POST['psw'];


if($email=="b211210053@sakarya.edu.tr"&& $sifre=="b211210053"){
    header("location:http://localhost/h6/hakk%c4%b1nda.html");
    
}
else{
    header("location:http://localhost/h6/index.html");
}

?>