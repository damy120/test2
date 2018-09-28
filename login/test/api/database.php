<?php
session_start();
$user = $_SESSION['user'];
if($user == 'admin') {
    echo '{
        "message": "Benvenuto",
        "success": true   
    }';
} else {
    echo '{
        "message": "",
        "success": false
    }';
}
?>