<?php
  //include "config.php";
  //session_start();
//if(!isset($_SESSION['username']))
 // {
//    header('location: login.php');
//  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>Welcome Page</title>

    <link href="bootstrap/css/w3.css" rel="stylesheet">
    
    
    
  </head>


  <body>
    <form action="" method="post">
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:13%">
  <h3 class="w3-bar-item">Menu</h3>
  <!-- <a href="#" class="w3-bar-item w3-button">Account</a>
  <a href="arts.php"  class="w3-bar-item w3-button">Artists List</a> -->
  <a href="users_list_highlight.php" class="w3-bar-item w3-button">Users list</a>
  <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
</div>
</form>

<!-- Page Content -->
<div style="margin-left:13%">


<div class="w3-container w3-teal">
  <h1>Project Leader Dashboard</h1>
</div>


<?php
?>
  </body>
</html>


  
    
  <!--
       
      <div id="wrapper">
        <div id="sidebar-wrapper>
          <ul class="sidebar-nav>
            <li class="sidebar-brand">
              <a href=" ">
                Start
              </a>
            </li>     

              <div class="dats">
                <?php
                if($_SESSION['type']=='ProjectLeader')
                {

                ?>
                <input type="submit" class="list-group-item" value="Account">            
                <input type="submit" class="list-group-item" value="Artist List">
                 <?php }
                 else {
                 ?>
                <a href="#" class="list-group-item">Account </a> 
                <a href="#" class="list-group-item">Notifications </a>
                <a href="#" class="list-group-item">Project Progress </a>
                <?php
               }
               ?>
                <a href="logout.php" class="list-group-item">Logout </a>
              </div>
           
         -->


