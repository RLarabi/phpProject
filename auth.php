<?php
    $user = $_POST['ident'];
    $password = $_POST['pass'];
    if($_POST['submit']){
        if($user == 'SMI' && $password == 'SMI'){
            header('location:note.html');
        }else{
            echo('<script>alert("identifient ou mot de passe est incorrect")</script>');
        }
    }
?>