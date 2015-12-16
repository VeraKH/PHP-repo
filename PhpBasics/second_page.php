 <html>
    <head>
        <title>JClass</title>
        <meta charset="UTF-8">
        <link href ="static/css/Style.css" rel="stylesheet" media="screen">
             
    </head>

    <body>

 <h3>Web pages</h3>    
                <?php    ?>
                   <a href="FirstPage.php">First Page</a>

 <h3>GET METHOD and URL</h3>   

<pre>
 
 <?php 
    // print_r($_GET);
        $id = $_GET['id'];
        echo $id;
 ?>

  <?php 
    // print_r($_GET);
        $companyName = $_GET['companyName'];
        echo $companyName;
 ?>

</pre>
    </body>
</html>