<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css.map" />
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="loginProcessor.php" method="post">
    <div class="container-fluid">
      <div class="container">
        <div>
          <h2 class="text-center mb-5 p-3">LOGIN</h2>
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
         <?php }?>
        </div>
        <div class="row">
          <div class="col"></div>
          <div class="col-7 shadow rounded p-5">
            <div class="mb-3">
              <label class="form-label">User Name</label>
              <input
                type="text"
                class="form-control"
                name="uname"
                placeholder="User Name"
              />
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                name="password"
                placeholder="Password"
              />
            </div>
            <button class="btn btn-primary" type="submit" class="form-control submit" value="submit">Login</button>
          </div>
          <div class="col"></div>
        </div>
      </div>
    </div>
    </form>
</body>
</html>