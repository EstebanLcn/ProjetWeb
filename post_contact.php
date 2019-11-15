


<?php
$errors=[];
$emails=['darkeste64@gmail.com','testwampmail@gmail.com','testwampmail@gmail.com'];

if(!isset($_POST['name'])||$_POST['name']==''){
    $errors['name']="Vous n'avez pas renseigné votre nom";

}
if(!isset($_POST['email'])||$_POST['email']==''|| filter_var($_POST['email'], FILTER_FLAG_EMAIL_UNICODE)){
    $errors['email']="Vous n'avez pas renseigné un email valide";
    
}
if(!isset($_POST['message'])||$_POST['message']==''){
    $errors['message']="Vous n'avez pas renseigné votre message";
    
}
if(!isset($_POST['prenom'])||$_POST['prenom']==''){
    $errors['prenom']="Vous n'avez pas renseigné votre prénom";
    
}
if(!isset($_POST['city'])||$_POST['city']==''){
    $errors['city']="Vous n'avez pas renseigné votre ville";
    
}
if(!isset($_POST['promo'])||$_POST['promo']==''){
    $errors['promo']="Vous n'avez pas renseigné votre message";
    
}
if(!array_key_exists('promo',$_POST) || !isset($emails[$_POST['promo']])){
$errors['promo']="Le service que vous demandez n'existe pas";
}
session_start();
if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs']=$_POST;
    header('Location: formulaireInscription.php');
    exit;
}else{
    $_SESSION['success'] = 1;
    $message=$_POST['message'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $prenom=$_POST['prenom'];
    $promo=$_POST['promo'];
    $test=$message."\r\n".$name."\r\n".$prenom."\r\n".$city."\r\n".$promo."\r\n".$email;
    
    $headers = 'FROM: ' . $_POST['email'];
    mail($emails[$_POST['promo']], 'Formulaire de contact', $test,$headers); 
    header('Location: pageLambda.php');
}