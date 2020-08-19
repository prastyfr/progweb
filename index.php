<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.1-web/css/all.min.css">


    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card my-5">
          <div class="card-header bg-dark text-white text-center">Login Sebagai Admin</div>
          <div class="card-body">
            
            <form method="post" action="aksi_login.php" id="login-form">
              <?php 
			if(isset($_GET["login_error"])){ ?>
			<h4 style="color: red; text-align: center;" class="animated shake">Maaf Password atau username salah</h4>
			<?php }	?>
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" class="form-control">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control">
              </div>

              <button class="btn btn-success btn-block">Login</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>



<script src="<?= base_url('bootstrap/js/bootstrap.min.js')?>"></script>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

