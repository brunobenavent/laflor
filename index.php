<!doctype html>
<html lang="en">

    <head>

    <!-- Required meta tags -->
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Menú Diario - Restaurante la flor</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">



        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        


    </head>

    <body>
        <?php
$file = fopen('https://docs.google.com/spreadsheets/d/e/2PACX-1vTgnkFBdp4bkVsJ7Zny6DyszsH0MeC81SsfD9EZql7viNWrXMtjRPol8valr5QSfcY5PxZrkL2wIX0d/pub?output=csv', 'r');              // Open the file
while (($line = fgetcsv($file)) !== FALSE) {    // Read one line
    $array[] =$line;                            // Add the line in the main array
}
// echo '<pre>';
// print_r($array);   //print it out
// echo '</pre>';
// fclose($file);
// echo $array[1][1];
?>


    <!-- Top menu -->
    <nav class="navbar navbar-dark fixed-top navbar-expand-md  navbar-no-bg">
      <div  class="container">
        <div style="display: flex; flex-direction: column;">
          <div ><a class="navbar-brand" href="index.php"><img src="assets/img/laflor-02.png"></a></div>
        <div><a class="navbar-brand" href="index.php"><img style="max-width: 300px;" src="assets/img/restaurante.png"></a></div>

        </div>

          <button class="navbar-toggler bg-info" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav  justify-content-center">
                  <li class="nav-item">

                      <a class="scroll-link nav-link" href="#top-content"><i style="font-size: 30px; color: black;" class="fas fa-chevron-up"></i></a>
                  </li>
                  <!-- <li class="nav-item bg-warning">
                      <a  style= "background-image: url(assets/img/icon/icon_info.svg) ;padding-left: 30px; background-repeat: no-repeat; background-size: 25px; background-position:center left;"  class="nav-link scroll-link" href="#proyecto">Sobre el proyecto</a>
                  </li> -->
                  <li class="nav-item bg-success" style="background-image:url(assets/img/icon_ag.svg); border-bottom-left-radius: 40px; border-bottom-right-radius: 40px">
                      <a style="background-image: url(assets/img/icon/ensalada.svg); padding-left: 35px; background-repeat: no-repeat; background-size: 30px; background-position:center left;  " class="nav-link scroll-link" href="#agroindustria">Primeros platos </a>
                  </li>
                  <li class="nav-item bg-danger" style="border-bottom-left-radius: 40px; border-bottom-right-radius: 40px">
                      <a  style= "background-image: url(assets/img/icon/carne.svg) ;padding-left: 35px; background-repeat: no-repeat; background-size: 25px; background-position:center left;"  class="nav-link scroll-link" href="#informatica">Segundos platos</a>
                  </li>
                  <li class="nav-item bg-info" style="border-bottom-left-radius: 40px; border-bottom-right-radius: 40px">
                      <a style="background-image: url(assets/img/icon/postre.svg) ;padding-left: 35px; background-repeat: no-repeat; background-size: 25px; background-position:center left;" class="nav-link scroll-link" href="#formacion">Postres</a>
                  </li>
                 <!--  <li class="nav-item">
                      <a class="nav-link scroll-link" href="#testimonials">Clients</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link scroll-link" href="#blog">Blog</a>
                  </li> -->
              </ul>
          </div>
        </div>
    </nav>
    <div id="faldon" class="bg-success fixed-top"></div>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">

                <div class="row justify-content-md-center">
                    <div class="col-md-8  text description wow fadeInLeftBig ">

                        <img style="width: 300px; padding-top: 100px; padding-bottom: 20px" src="assets/img/menudeldia.png">

                        <p>Hoy es <?php echo $array[3][1]; ?> </p>
                        <table class="table" style="background-color: rgba(0,0,0,0.4); border-bottom-left-radius: 40px; border-bottom-right-radius: 40px">
  <caption style="color: white; font-weight: bold; padding-left: 20px;"><i>Pan, bebida y postre o café incluidos</i></caption>
  <thead >
    <tr>
      <th scope="col">MENÚ</th>
      <th scope="col">ENTRE SEMANA</th>
      <th scope="col">FINES DE SEMANA Y FESTIVOS</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Entero</th>
      <td style="font-size: 1.2em"><b><?php echo $array[6][1];?></b></td>
      <td style="font-size: 1.2em"><b><?php echo $array[6][2];?></b></td>

    </tr>
    <tr>
      <th scope="row">Medio</th>
      <td style="font-size: 1.2em"><b><?php echo $array[7][1];?></b></td>
      <td style="font-size: 1.2em"><b><?php echo $array[7][2];?></b></td>

    </tr>

  </tbody>
</table>


                        <!-- <div class="top-big-link wow fadeInUp">
                          <a class="btn  btn-dark  launch-modal btn-link-1 informa" href="#" data-modal-id="modal-info">MÁS INFORMACIÓN</a>


                        </div> -->


                    </div>
                </div>

            </div>
        </div>



                          <!-- <div class="form-group">
                            <label class="sr-only" for="form-about-yourself">About yourself</label>
                            <textarea name="form-about-yourself" placeholder="About yourself..."
                                  class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                          </div> -->

                      </form>

              </div>

            </div>
          </div>
        </div>


        <!-- Agroindustria -->

        <div class="agroindustria-container section-container" >
          <div class="container">
            <div class="row">
                    <div class="col services section-description wow fadeIn" style="padding-top: 40px;">
                        <h2 class="display">PRIMEROS PLATOS</h2>
                        <p>Hoy <b><?php echo $array[3][1]; ?> </b><br>tenemos:</p>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                    <div class="col-12" style="font-size: 1.1em; font-weight: 400;">
                      
                            <p> <?php echo $array[10][0];?></p>
                            <p> <?php echo $array[11][0];?></p>
                            <p> <?php echo $array[12][0];?></p>
                            <p> <?php echo $array[13][0];?></p>
                            <p> <?php echo $array[14][0];?></p>
                            <p> <?php echo $array[15][0];?></p>
                            <p> <?php echo $array[16][0];?></p>
                            <p> <?php echo $array[17][0];?></p>
                            <p> <?php echo $array[21][0];?></p>


                    </div>
             </div>

          </div>
       </div>
       <div id="agro" class="agroindustria-container section-container">
          <div class="container">
            <div class="row">



            <div class="container-fluid" id="agro" style="height: 500px">
              <div class="row">
                      <div style="padding-top: 30px" class="col-md-8 offset-md-2 ">



                      </div>
                  </div>

              </div>
              </div>
          </div>
       </div>





        <!-- Informática -->
        <div class="informatica-container section-container" style="padding-top: 50px;">
          <div class="container">
            <div class="row">
                  <div class="col services section-description wow fadeIn">
                      <h2>SEGUNDOS PLATOS</h2>
                      <p>Hoy <b><?php echo $array[3][1]; ?> </b><br>tenemos:</p>
                      <div class="divider-1 wow fadeInUp"><span></span></div>
                  </div>
                  <div class="col-12" style="font-size: 1.1em; font-weight: 400;">
                      
                            <p> <?php echo $array[10][1];?></p>
                            <p> <?php echo $array[11][1];?></p>
                            <p> <?php echo $array[12][1];?></p>
                            <p> <?php echo $array[13][1];?></p>
                            <p> <?php echo $array[14][1];?></p>
                            <p> <?php echo $array[15][1];?></p>
                            <p> <?php echo $array[16][1];?></p>
                            <p> <?php echo $array[17][1];?></p>
                            <p> <?php echo $array[21][1];?></p>
                            

                    </div>
            </div>
          </div>
      </div>
        <div id="info" class="informatica-container section-container">
          <div class="container">
            <div class="row">



            <div class="container-fluid" id="info" style="height: 500px">
              <div class="row">
                      <div style="padding-top: 30px" class="col-md-8 offset-md-2 text">




                      </div>
                  </div>

              </div>
              </div>
          </div>
      </div>



        </div>
         <!-- Formación -->
        <div class="formacion-container section-container" style="padding-top: 50px;">
          <div class="container">
            <div class="row">
                  <div class="col services section-description wow fadeIn">
                      <h2>POSTRES</h2>
                      <p>Hoy <b><?php echo $array[3][1]; ?> </b><br>tenemos:</p>
                      <div class="divider-1 wow fadeInUp"><span></span></div>
                  </div>
                  <div class="col-12" style="font-size: 1.1em; font-weight: 400;">
                      
                            <p> <?php echo $array[10][2];?></p>
                            <p> <?php echo $array[11][2];?></p>
                            <p> <?php echo $array[12][2];?></p>
                            <p> <?php echo $array[13][2];?></p>
                            <p> <?php echo $array[14][2];?></p>
                            <p> <?php echo $array[15][2];?></p>
                            <p> <?php echo $array[16][2];?></p>
                            <p> <?php echo $array[17][2];?></p>
                            <p> <?php echo $array[21][2];?></p>
                            

                    </div>
            </div>

          </div>
        </div>
        <div id="forma" class="formacion-container section-container">
          <div class="container">
            <div class="row">



            <div class="container-fluid" id="forma" style="height: 500px">
              <div class="row">
                      <div style="padding-top: 30px" class="col-md-8 offset-md-2 text">




                      </div>
                  </div>

              </div>
              </div>
          </div>
      </div>

</div>

        <!-- Footer -->
        <footer>
          <div class="container">
            <div class="row">
                    <div class="col-md-5 footer-left">
                      <p>&copy; Restaurante la flor <!-- <a href="http://azmind.com">AZMIND</a> -->2020</p>
                    </div>

                    <div class="col-md-6 offset-md-1 footer-right">
                      <a href="https://es-es.facebook.com/viverosguzman.plantas"><i class="fab fa-facebook-f"></i></a>
            <!-- <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a> -->
                    </div>
                </div>
                <div class="row">
                  <div class="col footer-bottom">
                  <a class="scroll-link" href="#top-content"><i class="fas fa-chevron-up"></i></a>
                </div>
                </div>
          </div>
          <div class="alert alert-dismissible text-center cookiealert" role="alert">
  <div class="cookiealert-container">
    <b>¿Te gustan las cookies?</b> &#x1F36A; Utilizamos cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web. <a href="https://cookiesandyou.com/" target="_blank">Leer más</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies">
        Estoy de acuerdo
    </button>
</div>

  </div>
</div>
        </footer>


        <!-- Javascript -->


        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    <script type="text/javascript">
  $(document).ready(function(){
    $(".country_class").change(function(){
      $.get("get_states.php","country_class="+$(".country_class").val(), function(data){
        $(".state_class").html(data);
        console.log(data);
      });
    });

    $(".state_class").change(function(){
      $.get("get_cities.php","state_class="+$(".state_class").val(), function(data){
        $(".city_class").html(data);
        console.log(data);
      });
    });
  });
</script>
<!-- From Local -->
<script src="cookiealert.js"></script>
<!-- From CDN -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js">
</script>

    </body>

</html>
