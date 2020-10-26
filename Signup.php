<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َRegister</title>
    <link rel="icon" type="image/jpg" href="images/title.jpg" style="border-radius:100%">
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
    <video autoplay loop muted>
        <source src="bgm.mp4" type="video/mp4">
      </video>
      <section class="flex flex-login">
        <form class="box" id="box1" action="registration.php" method="post">
          <h1>Sign-up</h1>

          <p>First Name</p><input type="text" name="fname" placeholder="Enter First Name" required><br><br><br>
            
            <p>Last Name</p><input type="text" name="lname" placeholder="Enter Last Name" required><br><br><br>
                       
          <p>Phone number</p>
          <input type="text" name="number" placeholder="Enter Phone number" required><br><br><br>

          <p>E-mail</p>
          <input type="email" name="email" placeholder="Enter Email" required><br><br><br>
            
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter Password" id="pass" required><br><br><br>
            
          <p>Confirm Password</p>
          <input type="password" name="confirm" placeholder="Confirm"   id="conpass" required><br><br><br>

          
          <input type="submit" name="" value="Register">
    
        </form>


  </section>
 
  </body>
