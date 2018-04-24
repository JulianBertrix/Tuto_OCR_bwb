<?php
    $passWord = "kangourou";

    if($_POST['mot_de_passe'] == $passWord){
        echo "Voici les codes d'accès : CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV";
    }
    else{
        echo "mot de passe incorrect";
    }
?>