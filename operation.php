<?php
    $info = $_POST['info'];
    $math = $_POST['math'];
    $etudiant = $_POST['etudiant'];
    
    if($_POST['submit']){
        $moy = ($info + $math)/2 ;
        echo '<h1>le moyen de ',$etudiant,' est ' , $moy , '</h1>';
    }
?>