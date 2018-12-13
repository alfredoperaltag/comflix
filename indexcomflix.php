<?php

 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ComFlix</title>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav>
        <a href="" class="logo">
          <img src="img/logo2.svg">

        </a>
        <a class="signin" href="php/logeo.php">
          Iniciar Sesion
        </a>
      </nav>

      <section class="pitch">
        <h1 class="pitch__title">Tu próxima historia, ahora.</h1>
        <p class="pitch__subtitle">DISFRUTA DONDE QUIERAS. CANCELA CUANDO QUIERAS.</p>

        <button onclick="location.href='php/registrate.php'" class="btn">UNETE AHORA ></button>
      </section>
    </header>

     <!-- <div id="features">
      <nav>
        <div class="center columns size-80">
          <a class="column is-selected" href="#" data-id="cancelanytime">
            <img alt="Cancel anytime" src="img/cancel.svg"/>
            <h2>
              Sin compromisos,
              <br/>
              cancela online cuando quieras
            </h2>
          </a>

          <a class="column" href="#" data-id="watchanywhere">
            <img alt="Watch anywhere" src="img/watchanywhere.svg"/>
            <h2>
              Ve desde donde quieras
            </h2>
          </a>

          <a class="column" href="#" data-id="pickprice">
            <img alt="Pick your price" src="img/pickprice.svg"/>
            <h2>
              Elige tu precio
            </h2>
          </a>
        </div>
      </nav>

      <article>
        <section class="is-selected center size-70" data-id="cancelanytime">
          <div class="columns">
            <div class="column">
              <h2>
                Si piensas que Netflix no es lo tuyo, no hay problema.  Sin compromisos. Cancela online cuando quieras.
              </h2>
              <button class="btn btn-large">UNETE AHORA</button>
            </div>

            <div class="column">
              <img src="img/cancelanytime_withdevice.png"/>
            </div>
          </div>
        </section>

        <section class="center size-80" id="watchanywhere" data-id="watchanywhere">
          <div class="columns">
            <h2 class="column">
              Ve películas y programas de TV cuando y donde quieras, personalizados para ti.
            </h2>
            <button class="btn btn-large column is-narrow">UNETE AHORA</button>
          </div>

          <div class="columns size-90 center">
            <div class="column text-center">
              <img src="img/asset_TV_UI.png"/>
              <h3>Ve Netflix en tu TV</h3>
              <p>Smart TV, PlayStation, Xbox, Chromecast, Apple TV, reproductores de Blu-ray y más.</p>
            </div>

            <div class="column text-center">
              <img src="img/asset_mobile_tablet_UI_2.png"/>
              <h3>Disfruta al instante o descarga videos para más tarde</h3>
              <p>Disponible en tu teléfono o tablet, vayas donde vayas.</p>
            </div>

            <div class="column text-center">
              <img src="img/asset_website_UI.png"/>
              <h3>Usa cualquier computadora</h3>
              <p>Ve directamente en Netflix.com.</p>
            </div>
          </div>
        </section>

        <section class="center size-70" id="pickprice" data-id="pickprice">
          <div class="text-center">
            <h2>
              Elige un plan y ve lo que quieras en Netflix.
            </h2>
            <button class="btn btn-large">UNETE AHORA</button>
          </div>

          <table>
            <thead>
              <tr>
                <th></th>
                <th>BASICO</th>
                <th>ESTANDAR</th>
                <th>PREMIUM</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Precio mensual</td>
                <td>$100</td>
                <td>$150</td>
                <td>$200</td>
              </tr>
              <tr>
                <td>HD disponible</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
              </tr>
              <tr>
                <td>Ultra HD disponible</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
              </tr>
              <tr>
                <td>Pantallas en las que puedes ver al mismo tiempo</td>
                <td>1</td>
                <td>2</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Ve en tu laptop, TV, teléfono y tablet</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
              </tr>
              <tr>
                <td>Películas y programas de TV ilimitados</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
              </tr>
              <tr>
                <td>Cancela en cualquier momento</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
              </tr>
            </tbody>
          </table>
        </section>
      </article>
    </div> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
