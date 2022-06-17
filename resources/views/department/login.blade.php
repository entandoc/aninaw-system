<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/jpg" href="/images/logo.png">
  
  <!-- CSS -->
  <link rel="stylesheet" href="/css/login.css">
  
  <title>Moderator Login</title>
</head>
<body>
  <div class="nav">
      <h1>Aninaw</h1>
  </div>

  <div class="login-form">
    <div class="container">
      <div class="main">
        <div class="content">
          <h3>MODERATOR LOGIN</h3>
          <form action="/department/authentication" method="get">
            @csrf
            <input type="text" name="user_id" placeholder="User I.D." required autofocus="">
            <input type="password" name="passkey" placeholder="Password" required autofocus="">

            <div class="login-btn">
              <button class="btn" type="submit">LOGIN</button>
            </div>
          </form>
        </div>

        <div class="form-img">
          <img src="/images/a1.svg">
        </div>
      </div>
    </div>
  </div>

</body>
</html>