
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sticky Footer Navbar Template for Bootstrap</title>
    <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/custom/sticky-footer-navbar.css" rel="stylesheet">
    <style type="text/css">
      body{padding-top:20px;}
    </style>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <?php
            if($alert == ""){
              echo 0;
            }else{
              echo 1;
            }
          ?>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Please sign in</h3>
            </div>
            <div class="panel-body">
              <form accept-charset="UTF-8" role="form" action="index.php/welcome/auth" method="POST">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" placeholder="E-mail" name="username" type="text">
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                  </div>
                  <!--<div class="checkbox">
                    <label>
                      <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                    </label>
                  </div>-->
                  <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                </fieldset>
                <div style="margin-top:4px; font-size:85%" > 
                  <a href="#">
                    Lupa Password ? 
                  </a>
                </div>
              </form>
            </div>
          </div>
          
          <div style="margin-top:-15px; font-size:85%" >
            <a href="<?= base_url() ?>index.php/daftar">
              Daftar 
            </a>
          </div>
        
        </div>
      </div>
    </div>

    <script src="<?= base_url() ?>assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
