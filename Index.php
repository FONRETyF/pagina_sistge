<html>
<head>
  <meta charset="utf-8">
  <title>SMSEM-FONRETIF</title>
  <link rel="shortcut icon" href="smsem_icono.png">
  <link rel="stylesheet" type="text/css" href="css/Estilos.css"/>
</head>

<body>

  <header>
    <div id="presentacion">
      <div class="escudo">
        <img class="imagen1" src="img/escudosmsem.png" width="110" height="150">
      </div>
      <div class="texto">
        <div class="texsmsem">SINDICATO DE MAESTROS AL SERVICIO DEL ESTADO DE MÉXICO</div>
        <br>
        <div class="texfonretif">FONRETyF - FONDO DE RETIRO PARA LA JUBILACION Y FALLECIMIENTO</div>
      </div>
      <div class="escudo" id="escudoDoble">
        <img id="Img70años" src="img/70años.png" alt="" width="110" height="60">
        <img class="imagen2" src="img/planilla2021-2024.png" width="80" height="50">
      </div>
    </div>
  </header>

  <section>
    <article>
      <div class="contenedor">
        <div class="frame">
          <div ng-app ng-init="checked = false">
  				      <form class="inicses" action="clases/logear.php" method="POST" name="formulario">
                  <label for="usuario">Usuario: </label>
                  <br>
                  <input class="inptIniSes" type="text" name="usuario" id="usuario" placeholder="Escriba su clave de usuario" required/>
                  <!--<input class="form-styling" type="text" name="username" placeholder=""/>-->
                  <br>
                  <br>
                  <label for="password">Contraseña: </label>
                  <input class="inptIniSes" type="password" name="contraseña" id="contraseña" placeholder="***" required/>
                  <!--<input class="form-styling" type="text" name="contrase" placeholder=""/>-->
                  <div class="boton">
                    <button id="BtnIniSes" name="BtnIniSes" class="BtnIniSes">ENTRAR</button>
                    <!--<a class="BtnIniSes">Entrar</a>-->
                  </div>
                  <div class="IniSesAdi">
                    <!--<button id="BtnIniSes" class="BtnIniSes">ENTRAR</button>-->
                    <a href="LocSMSEM.php">Solicita contraseña</a>
                  </div>
  				      </form>
          </div>
        </div>
      </div>
    </article>
  </section>


  <footer>
  	<div class="piepag">
    <!--  <div class="piepag1">
        <div class="columnaredes">
          <div class="columnaTitulo">Siguenos en:</div>
          <a href="https://www.facebook.com/SMSEMmx/"><img class="logo" src="img/fb_logo.png" alt="Facebook SMSEM" width="20" height="20"></a>
          <a href="https://twitter.com/SMSEMmx"><img class="logo" src="img/twitter_log.png" alt="Teitter @SMSEMmx" width="20" height="20"></a>
          <a href="https://www.youtube.com/channel/UC4pdHaYkJ45Mh08xZNKTnSw"><img class="logo" src="img/youtube_logo.png" alt="Youtube SMSEM" width="20" height="20"></a>
          <a href="https://www.instagram.com/smsem.mx/?hl=es"><img class="logo" src="img/insta_logo.png" alt="Instagram SMSEM.mx" width="20" height="20"></a>
        </div>
        <div class="columnacontacto">
          <div class="columnaTitulo">Contacto</div>
          <h3>Teléfono: 722-2772900</h3>
          <br>
          <a href="https://smsemedomex.org/aviso-de-privacidad">Aviso de Privacidad</a>
        </div>
        <div class="columnaUbicacion">
          <div class="columnaTitulo">Ubicacion</div>
          <a href="LocSMSEM.php">Mapa</a>
        </div>
      </div> -->
      <div class="textlema">"Por la Educación al Servicio del Pueblo"</div>
  	 </div>
  </footer>
</body>
</html>
