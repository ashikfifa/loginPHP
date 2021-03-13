<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
    <div class="login-style"></div>
    <div class="row">
    <div class="col-md-6 left-style">

    <h2>LogIn Here</h2>
    
    <form action="validation.php" method="post">
    <div class="form-group">
        <label>Usrname</label>
     <input type="text" name="name" class="form-control" required>
   </div> 

   <div class="form-group">
        <label>Password</label>
     <input type="password" name="password" class="form-control"required>
   </div> 

   <button type="submit">Log In</button>
    
    </form>

    </div>


    <div class="col-md-6 right-style">
    <h2>Register Here</h2>
    
    <form action="registration.php" method="post">
    <div class="form-group">
        <label>Usrname</label>
     <input type="text" name="name" class="form-control" required>
   </div> 

   <div class="form-group">
        <label>Password</label>
     <input type="password" name="password" class="form-control"required>
   </div> 

   <button type="submit">Register</button>

   </form>
    </div>
    </div>
    </div>

    
</body>
</html>