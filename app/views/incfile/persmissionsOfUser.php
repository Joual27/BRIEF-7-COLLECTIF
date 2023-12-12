<?php

  
require_once($_SERVER["DOCUMENT_ROOT"]."/bank-app/app/repositories/database.php");


function getPermissions($roleName){
    $db = new Database();
    $bringPermissionsOfRole = "select * from permissionsofrole where roleName = :roleName";
    $db->query($bringPermissionsOfRole);
    $db->bind(":roleName",$roleName);
    $res = $db->fetchOne();
    return $res->permissionName;


    
}
  
?>