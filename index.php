<?php
ob_start();
include("classes/database.php");
include("classes/userMaster.php");
include("classes/leave.php");
include("classes/functions.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Jira Reports</title>

    <!-- Bootstrap -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jira.css" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="js/tinysort.js"></script>
  <!--
  <script src="js/jquery-1.7.2.min.js"></script>
  -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>   
   <div class="container">
     <ul class="nav nav-pills">
              <li role="presentation" class="active"><a href="index.php">Dashboard</a></li>            
              <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-expanded="false">Report&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                         <li><a href="index.php?page=report&option=allEmployee">All Employee</a></li>
                         <li class="divider"></li>
                         <li><a href="index.php?page=report&option=singleEmployee">Single Employee</a></li>
                         <li class="divider"></li>
                         <li><a href="index.php?page=report&option=defaulter">Defaulter</a></li>
                    </ul>
              </li>
              <li role="presentation"><a href="index.php?page=addEmployee">Add Employee</a></li>
              <li role="presentation"><a href="index.php?page=manageEmployee">Manage Employee</a></li>
         </ul>
   </div>
    <div class="container" style="padding: 10px;margin-top: 50px;">
          
          <?php if(isset($_GET)){
               
                     if(isset($_GET['page'])){
                        $pageRequested=$_GET['page'];
                        include($pageRequested.".php");
                     }else{
            
                     include("overallStats.php");
                  }
          } ?>
    </div>
  
  
     
       
       
    <script src="js/jira.js"></script>
    
    
    
    
    
    

  </body>
</html>
<?php

ob_flush();

?>