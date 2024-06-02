<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <title> Register </title>
      
    </head>

    <body class="background-color: teal darken-2" class="border">
      <center><h1 style="font-family: arial black"> Capy Hour </h1></center>

      <div class="container">
        <center><h3>Register</h3></center>

        <!--Registration Form-->
        <form action="register.php" method="post">

        <label for="firstname" style="font-family: arial black">First Name: <label>
        <input type="text" name="first_name" id="firstname" placeholder="enter first name" style="text-align:center"><br>

        <label for="lastname">Last Name: <label>
        <input type="text" name="last_name" id="lastname" placeholder="enter last name" style="text-align:center;"><br>

        <label for="email">Email: <label>
        <input type="text" name="email_" id="email" placeholder="enter email" style="text-align:center"><br>

        <label for="username">Username: </label>
        <input autocomplete="off" type="text" name="user_name" id="username" placeholder="enter username" style="text-align:center"><br>

        <label for="password_">Password: </label>
        <input autocomplete="off" type="text" name="password" id="password_" placeholder="enter password" style="text-align:center"><br>

        <center><input type="submit" value ="Register" class="btn green accent-4"></center>
        </form>
        <!--End Registration Form-->

        <a href="loginPage.php" class="waves-effect waves-light btn"><i class="material-icons right">person</i>Login</a>

      </div>
  </html>