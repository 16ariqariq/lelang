<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title >Login Lelang</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <style>
    body{
        background-image: url(https://www.kibrispdr.org/data/doodle-wallpaper-for-laptop-6.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
        <main class="form-signin">
        <form action="proses_login.php" method="POST">
    <h1 style="color:white">Lelang</h1>
    <br>
    <h1 class="h3 mb-3 fw-normal" style="color:white">Please sign in</h1>

    <div class="form-floating">
      <input type="username" class="form-control" id="username" 
      name="username" placeholder="insert username" required>
      <label for="floatingInput">username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" 
      name="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
</main>
    </div>

    
  </body>
</html>