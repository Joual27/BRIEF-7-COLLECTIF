<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/bank-app/datacnx.php");
include '../../incfile/navbar.php';
include '../../../models/distributeurClass.php';
require_once($_SERVER["DOCUMENT_ROOT"]."/bank-app/app/config/redirect.php");


if (isset($_GET['id'])) {
    $atmToDelete = $_GET['id'];

    $distributeur = new Distributeur();
 
    $distributeur->deleteDistributeur($atmToDelete);
    
    Redirect("distributeur.php",false);
} else {
    echo "Invalid request!";
    exit();
}

?>