<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"
    <link rel="stylesheet" href="font-awesome/css/font-awesome.crossorigin"
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatica+SC:400,700" rel="stylesheet">
  </head>
  <body>
      <section id="logo">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-xs-center">
                <img src="img/my-logo.png" class="img-fluid"/>
            </div>
          </div>
        </div>
      </section>

      <section id="intro">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <p>We're working hard. Ready to launch in...</p>
                </div>

            </div>
        </div>
      </section>

      <section id="counter">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="countdown"></div>
                </div>

            </div>
        </div>
      </section>

      <section id="icons">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                  <ul class="list-inline">
                    <a href="http://www.twitter.com" target="blank"><li class="list-inline-item"><i class="fa twitter fa-twitter-square fa-3x" aria-hidden="true"></i></li></a>
                    <a href="http://www.facebook.com" target="blank"><li class="list-inline-item"><i class="fa facebook fa-facebook-square fa-3x" aria-hidden="true"></i></li></a>
                    <a href="http://www.google.com" target="blank"><li class="list-inline-item"><i class="fa google fa-google-plus-square fa-3x" aria-hidden="true"></i></li></a>
                    <a href="http://www.instagram.com" target="blank"><li class="list-inline-item"><i class="fa instagram fa-instagram-square fa-3x" aria-hidden="true"></i></li></a>
                  </ul>
                </div>

            </div>
        </div>
      </section>

      <section id="signup">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <form class="form-inline" role="form" method="post" action="signup">
                      <input type="email" class="form-control form-control-sm" name="email" placeholder="email address">
                      <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">find out more</button>
                    </form>
                </div>

            </div>
        </div>
      </section>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script>
    $(function() {
  $('.countdown').countdown({
      date: "June 7, 2087 15:03:26"
  });
});
    </script>
  </body>
</html>
