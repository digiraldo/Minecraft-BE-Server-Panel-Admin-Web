<?php
    $jsonRoles = file_get_contents(__DIR__ . '../../../config/usradmin.json');
    $rolesJ = json_decode($jsonRoles, true);

    
?>