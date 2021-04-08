<?php
    require_once "MySql_connection.php";
    session_start();
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 'home.php';
      
    }
?>

<?php
    include 'header.html';
?>

<div class="container">
                    <?php 
                        include "$page";
                    ?>


</div>

<?php
    include 'footer.html';
?>
    
