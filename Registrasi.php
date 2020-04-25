<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" type="text/css" href="style_res.css">
  </head>
  <body>
            <form class="box" action="send-register.php" method="post">
            <h1 class="text-center title-login">REGISTRASI</h>
                    <input type="text" class="form-control" name="nickname" placeholder="Nama">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <input type="password" class="form-control" name="repassword" placeholder="Re-Password">

                <input type="submit" class="btn btn-block btn-custom-green" value="REGISTER" />
                
                    <p>Back To <a href="login.php"class="btn btn-success">Login</a></p>
                </div>
            </form>
        </div>
    </div>

  </body>
</html>