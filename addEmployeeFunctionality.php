<?php ob_start(); ?>
<?php 
        include("classes/database.php");
        include("classes/userMaster.php");
        $newUser=new USERMASTER();
        foreach($_POST as $key=>$value){
            $newUser->$key=$_POST[$key];            
        }
        if($newUser->create()){
            echo 1;
        };
?>
<?php ob_flush(); ?>