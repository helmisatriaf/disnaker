<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Manager Login || Data SP DISPERINAKER Kota Surabaya</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/logosby.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="assets/login.css" rel="stylesheet">
    <link href="assets/dashboard.css" rel="stylesheet">
    
  </head>
  
  <body class="text-center bg-dark">
    <main class="m-auto">
      <div class="box">
        <div class="logo">
          <img class="my-3" src="assets/logosby.png">
          <h3 class="page-title text-white">Dinas Perindustrian dan Tenaga Kerja <br>Kota Surabaya</h3>
        </div>
      </div>

      <form id="login-form" class="form-signin m-auto" method="post" action="">
        <div class="form-floating my-1">
          <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
          <label for="floatingInput" class="text-muted">Username</label>
        </div>
        <div class="form-floating my-1">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingInput" class="text-muted">Password</label>
        </div>
        <button id="login-form-submit" class="w-100 btn btn-lg btn-primary" type="submit" name="masuk">Masuk</button>
      </form>
      
    </main>
  </body>

  <script>
    const loginForm = document.getElementById("login-form");
    const loginButton = document.getElementById("login-form-submit");

    loginButton.addEventListener("click", (e) => {
        e.preventDefault();
        const username = loginForm.username.value;
        const password = loginForm.password.value;

        if (username === "adminsp" && password === "disperinakersby") {
            window.location.href = "dashboard.php";
        } else {
            alert("Username atau Password Salah");
            location.reload();
        }
    })
  </script>
</html>
