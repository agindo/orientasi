
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
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form role="form" method="POST" action="daftar/save">
            <h1 style="margin-top:5px">Daftar</h1>
            <hr style="margin-top:0px" />
            <!--<div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                </div>
              </div>
            </div>-->
            <div class="form-group">
              <input type="text" name="namaLengkap" id="namaLengkap" class="form-control input-lg" placeholder="Nama Lengkap" tabindex="3">
            </div>
            <div class="form-group">
              <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="3">
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4">
            </div>
            <hr/>
            <div class="row">
              <div class="col-xs-6 col-md-12"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="<?= base_url() ?>assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
