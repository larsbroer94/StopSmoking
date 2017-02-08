<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ThunderDrone</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">

      <script src="sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="sweetalert.css">

  </head>

  <body>

    <div class="site-wrapper" id="home"
         style="
                 background-repeat: no-repeat;
                 <?php
                 $random = rand(1,10);
                 if ($random <= 2) { ?>
                   background-image: url(https://images.unsplash.com/photo-1472750033574-16946775d458?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=);
                 <?php } else { ?>
                   background-image: url(https://images.unsplash.com/photo-1462331940025-496dfbfc7564?dpr=2&auto=format&fit=crop&w=1500&h=1425&q=80&cs=tinysrgb&crop=);
                 <?php
                 }
                 ?>
                 background-color: #333;
                 background-size: cover;
                ">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">

            <div class="inner" id="navbar">
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#home">Home</a>
                <a class="nav-link" href="#about">Over</a>
                <a class="nav-link" href="#team">Team</a>
                <a class="nav-link" href="#contact">Contact</a>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">ThunderDrone</h1>
<!--            <p class="lead">ThunderDrone is a b-e-a-utiful project. Thanks and goodbye.</p>-->
            <p class="lead">
                Voorbereid op klimaatverandering
                <br>
                De natuur bliksembestendig
            </p>
            <p class="lead">
              <a href="#about" class="btn btn-lg btn-secondary"><i class="fa fa-info-circle" aria-hidden="true"></i> Learn more</a>
            </p>
          </div>
          <div class="mastfoot">
            <div class="inner">
              <p>The Lightning Company, <a href="#">Thunderdrone</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-wrapper" id="about">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">
            <h1 class="cover-heading">Over</h1>
            <p class="lead">
                The Lightning company is het bedrijf achter het innovatieve concept van de Thunderdrone.
                <br><br>
                Een dynamisch systeem dat uw omgeving beter beveiligt en beschermt door middel van:
                <ul>
                  <li>Weersvoorspelling</li>
                  <li>Inslagdetectie</li>
                  <li>Brandcontrole</li>
                  <li>Hulpdienstmelding</li>
                </ul>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-wrapper" id="team"
         style="
                 background-repeat: no-repeat;
                 background-image: url(https://images.unsplash.com/photo-1441422454217-519d3ee81350?dpr=2&auto=format&fit=crop&w=1500&h=844&q=80&cs=tinysrgb&crop=);
                 background-color: #333;
                 background-size: cover;
                ">

      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">

            <div class="headercontact">
            <h1 class="cover-heading">Team</h1>
            </div>

            <table class="teamtable">
              <tr>
                <td><i class="fa fa-eye fa-5x" aria-hidden="true"></i></td>
                <td><i class="fa fa-pencil fa-5x" aria-hidden="true"></i></td>
                <td><i class="fa fa-users fa-5x" aria-hidden="true"></i></td>
                <td><i class="fa fa-cogs fa-5x" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <td>Lars</td>
                <td>Bas</td>
                <td>Joeri</td>
                <td>Jeroen</td>
              </tr>
            </table>

<!--            <div class="col-lg-3"><i class="fa fa-eye fa-5x" aria-hidden="true"></i></div>-->
<!--            <div class="col-lg-3"><i class="fa fa-pencil fa-5x" aria-hidden="true"></i></div>-->
<!--            <div class="col-lg-3"><i class="fa fa-users fa-5x" aria-hidden="true"></i></div>-->
<!--            <div class="col-lg-3"><i class="fa fa-cogs fa-5x" aria-hidden="true"></i></div>-->

          </div>
        </div>
      </div>
    </div>

    <div class="site-wrapper" id="contact">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">
            <div class="headercontact">
              <h1 class="cover-heading">Contact</h1>
            </div>
            <form action="#contact" autocomplete="off">

              <div class="name">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="name" class="customform" id="inputname" placeholder="Vul je naam in">
              </div>

              <div class="mail">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <input type="email" class="customform" id="inputmail" placeholder="Vul je email in">
              </div>

              <button type="submit" class="submitbutton" id="submitbutton">Contacteer mij!</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <script>
        var confirm = document.getElementById("submitbutton");
        confirm.onclick = function(){
            swal({
                title: "Successvol",
                type: "success",
                text: "We mailen je snel terug! <br><br> Dit veld sluit in <span id=\"timer\"></span> seconden",
                allowOutsideClick: true,
                showConfirmButton: true,
                timer: 3000,
                html: true,
                confirmButtonText: "Sluit"
            });
        }
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
    <script src="js/scripts.js"></script>
  </body>
</html>
