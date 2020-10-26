<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<html>
<head>
<title>Home Page</title>
    
    <style type="text/css">
        
        body{background-image: url(css/bg.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            }
        
    
        
        a{color: white;
        margin-left: 92%;
        }
        
        a:hover{
            color:darkseagreen;
        }
        
        h1{color: #fff !important;
        margin-top: 20% !important;
        text-align: center;
        }
        
        
        
    </style>
</head>
<body>

    
    <a href="logout.php">LOGOUT</a>
    <div class="container">
    
    
<h1>WELCOME<br><br> <?php echo $_SESSION['username']; ?></h1> 
        </div>
  
</body>    

</html>