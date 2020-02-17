<?php 
   include 'db/dbfunction.php';

   $pages = scandir('pages/'); 
    if(isset($_GET['page']) && !empty($_GET['page'])){
        if(in_array($_GET['page'].'.php',$pages)){
            $page = $_GET['page'];
        }else{
            $page = "error";
        }
    }else{
        $page = "home";
    }
     
    $pages_functions = scandir('functions/');
    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head> 
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php include 'href/css.php'; ?>
    <?php include 'href/homecss.php'; ?>

</head>
<body>
<?php

   if($page!='recap'){
    include 'body/topbar.php';
   }
   
    include 'pages/'.$page.'.php';    
   
    include 'body/bottombar.php';
 ?>  

    <?php include 'href/js.php'; ?>
    <?php include 'href/homejs.php'; ?>
</body>

</html>