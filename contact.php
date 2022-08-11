<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css.map" />
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light navbar-expand-lg shadow-sm bg-white">
        <a href="index.html" class="navbar-brand"
          ><img src="file:///C:/xampp/htdocs/contact%20form/images/Logo1.png" alt="" class="logo"
        /></a>
        <button
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          class="navbar-toggler"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item">
              <a href="#" class="nav-link">Testimonials</a>
            </li>
          </ul>
          <div class="navbar-text ml-lg-3">
            <a href="login.php" class="btn btn-primary text-white shadow">Login</a>
          </div>
        </div>
      </nav>
    </header>
    <form action="processor.php" method="post">
    <div class="container-fluid">
      <div class="container">
        <div>
          <h2 class="text-center mb-5 p-3">Contact Us:</h2>
        </div>
        <div class="row">
          <div class="col"></div>
          <div class="col-7 shadow rounded p-5">
            <div class="row">
              <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="fname"
                  placeholder="First Name"
                />
              </div>
              <div class="col mb-3">
                <label class="form-label">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="lname"
                  placeholder="Last Name"
                />
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Email:</label>
              <input
                type="email"
                class="form-control"
                name="email"
                placeholder="name@email.com"
              />
            </div>

            <div class="mb-3">
              <label class="form-label">Subject</label>
              <input type="text"
              name="subject" class="form-control" placeholder="Subject" />
            </div>

            <div class="mb-3">
              <label class="form-label">Message:</label>
              <textarea
                name="message"
                class="form-control"
                placeholder="Write your message here"
                rows="3"
              ></textarea>
            </div>
            <button class="btn btn-primary" type="submit" class="form-control submit" value="submit">Send</button>
          </div>
          <div class="col"></div>
        </div>
      </div>
    </div>
    </form>
  </body>
</html>
