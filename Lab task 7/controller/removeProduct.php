<?php 

require_once '../model/model.php';
if (deleteProduct($_GET['id']))
{
        header('Location: ../Book information.php');
}

require_once '../model/model.php';
if (deleteUser($_GET['user_name']))
{
        header('Location: ../User information.php');
}

 ?>