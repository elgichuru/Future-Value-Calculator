<?php
        //get the data from the request.
$first_name=$_GET['firstname'];
$last_name=$_GET['lastname'];
?>
<!doctype html>
<html>
    <head>
        <title>Name Test.</title>
        <link rel="stylesheet" type="text/css" href="main.css">
         </head>
         <body>
             <main>
                 <h1>Welcome.</h1>
             <p>Firstname:<?php echo $first_name?></p>
             <p>Lastname:<?php echo $last_name?></p> 
             </main>
                         
             
         </body>
</html>
