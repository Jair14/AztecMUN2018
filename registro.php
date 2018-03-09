<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AZTECMUN</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/init.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
  <section class="content">
    <div class="header">
      <div class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <div class="row left-align section scrollspy" id="welcome">
              <img class="responsive-img hide-on-med-and-down" src="images/logo.png" alt="Logo aztecmum" width="200" height="200" />
              <img class="responsive-img hide-on-large-only" src="images/logo.png" alt="Logo aztecmum" width="100" height="100" />
            </div>
            <br><br>
          </div>
        </div>
        <div class="parallax"><img src="images/fondo.jpg" class="responsive-img"></div>
      </div>
      <nav class="nav-extended #2e7d32 green darken-2">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo hide-on-large-only">AZTECMUN</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <div class="row show-on-large-only hide-on-med-and-down">
               <ul>
               <div class="col s2"><li><a class="white-text" href="#welcome">Bienvenida</a></li></div>
               <div class="col s2"><li><a class="white-text" href="#about">Sobre nosotros</a></li></div>
               <div class="col s2"><li><a class="white-text" href="#comits">Comités</a></li></div>
               <div class="col s2"><li><a class="white-text" href="#documents">Comité Organizador</a></li></div>
               <div class="col s2"><li><a class="white-text" href="#know">Documentos</a></li></div>
               <div class="col s1"><li><a class="white-text" href="registro.html">Registrate</a></li></div>
               <div class="col s1"><li><a class="dropdown-button tooltipped" data-position="top" data-delay="50" data-tooltip="Contáctanos" href="#!"><i class="material-icons right">assignment</i></a></li></div>
             </ul>
               </div>
      <ul class="side-nav" id="mobile-demo">
          <li><a href="#!">Bienvenida</a></li>
          <li><a href="#!">Sobre nosotros</a></li>
          <li><a href="#!">Comité organizador</a></li>
          <li><a href="#!">Documentos</a></li>
          <li><a href="#!">Contáctanos</a></li>
          <li class="divider"></li>
          <li><a href="#!">Registrate</a></li>
      </ul>
    </div>
  </nav>
    </div>
    <div class="contenido">
        <div class="contenedor container">
          <div class="row">
            <div class="col s12">
              <div class="respuesta center">
                <p id="respuesta" class="flow-text"></p>
              </div>
              <div class="card z-depth-5" id="formulario">
                <div class="card-content">
                  <span class="card-title center">¡Registrate!</span>
                  <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#test1">Datos personales</a></li>
                    <li class="tab col s3"><a href="#test2">Comité</a></li>
                    <li class="tab col s3"><a href="#test4">Datos de contacto</a></li>
                  </ul>
                </div>

                <form method="post" onsubmit="return insertar();">
                  <div id="test1">
                    <div class="container">
                      <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="nombre" id="nombre" value="">
                        <label for="nombre">Nombre completo</label>
                      </div>
                      <div class="input-field">
                        <i class="material-icons prefix">assignment_turned_in</i>
                        <input type="number" name="matricula" id="matricula">
                        <label for="matricula">Matricula</label>
                      </div>
                      <div class="input-field">
                        <i class="material-icons prefix">group</i>
                        <select name="sel2" id="sel2" >
                          <option value="" disabled selected>Selecciona tú grupo</option>
                        </select>
                        <label>Grupos</label>
                      </div>
                      <br>
                    </div>
                  </div>
                  <div id="test2">
                    <div class="container">
                      <div class="input-field">
                        <i class="material-icons prefix">account_balance</i>
                        <select name="comite" id="comite" >
                          <option value="" disabled selected>Selecciona un comité</option>
                          <option value="OTAN">OTAN</option>
                          <option value="CIJ">CIJ</option>
                          <option value="CDE">CDE</option>
                        </select>
                        <label>Comités</label>
                      </div>
                      <div class="input-field">
                        <i class="material-icons prefix">group_add</i>
                        <select name="sel1" id="sel1" >
                          <option value="" disabled selected>Selecciona un país</option>
                        </select>
                        <label>Paises</label>
                      </div>
                      <br>
                    </div>
                    <br>
                  </div>
                  <div id="test4">
                    <div class="container">
                      <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="email" name="mail" id="mail" >
                        <label for="mail">Ingrese su correo electrónico</label>
                      </div>
                      <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input type="number" name="numero" id="numero" >
                        <label for="numero">Ingrese un número de contacto</label>
                      </div>
                      <div class="center">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Regitrarse
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                      <br>
                      <div class="center">
                        <b><p id="validacion" class="center"></p></b>
                      </div>
                      <br>
                    </div>
                  </div>
                </form>
                </div>
              </div>
        </div>
        </div>
    </div>
  </section>
</body>
<script type="text/javascript">
Paises = ["México", "Canadá", "Japón", "Australia", "China", "Estados Unidos", "Perú", "España", "Alemania"];
var s = document.getElementById('sel1');
  for (var i = 0; i < Paises.length ; i++) {
    s.options[i+1] = new Option(Paises[i], Paises[i]);
  }
  Grupos = [611, 612, 613, 411, 412, 413, 211, 212, 213];
  var s2 = document.getElementById('sel2');
    for (var i = 0; i < Grupos.length ; i++) {
      s2.options[i+1] = new Option(Grupos[i], Grupos[i]);
    }
</script>
<script>
    $(document).ready(function(){
       $('.carousel.carousel-slider').carousel({fullWidth: true});
       $(".button-collapse").sideNav();
       $('ul.tabs').tabs();
       $('select').material_select();
    });
</script>
</html>
