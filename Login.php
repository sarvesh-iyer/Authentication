<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َLogin</title>
    <link rel="icon" type="image/jpg" href="images/title.jpg" style="border-radius:100%">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet" >
      <script type="text/javascript">
          function signup(){
              window.open("Signup.php","_parent");
          }
          
          function notReg(){
             
          }
          
          
        </script>
  </head>
  <body>
    <video autoplay loop muted>
      <source src="bgm.mp4" type="video/mp4">
    </video>
<section class="flex flex-login">
    
      <form class="box" action="validation.php" method="post">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button class="sign" onclick="notReg()">Login</button>
        <input type="button" value="Signup" onclick="signup()" class="sign">
        
      </form>
    


</section>

</body>
</html>
