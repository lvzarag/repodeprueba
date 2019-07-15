<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale-1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Code-IT</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/faq.css">
  </head>

  <header>

    <nav class="navbar navbar-expand-lg navbar-dark backg-nav row">
<!-- boton -->
      <button type="button" class="btn btn-outline-light rounded-pill" data-target="#menu" data-toggle="collapse">
        <span><h3>CODE-IT</h3></span>
      </button>
    <!-- boton -->

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <button type="button" class="btn btn-outline-light rounded-pill">Inicio</button>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <button type="button" class="btn btn-outline-light rounded-pill">Perfil</button>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <button type="button" class="btn btn-outline-light rounded-pill">Desconectarse</button>
            </a>
          </li>
        </ul>

        <form class="form-inline">
          <input class="form-control rounded-pill border-0" type="search" placeholder="Buscar">
          <button class="btn btn-outline-light rounded-pill" type="submit">Buscar</button>
        </form>
      </div>
    </nav>

</header>

<body>

  <!-- FAQs -->
    <div class="wrapper">

      <section id="faqs" class="container special">
        <header>
          <h1>Preguntas Frecuentes</h1>
          <br><br><br>
        </header>
        <div class="row">
          <article class="col-4 col-12-mobile special">
            <header>
              <h3>Conocenos</h3>
            </header>
            <p><strong>De que se trata esta Red?</strong><br>
              CODE-IT fue creada  para acercar tus ideas a la realidad. Vos lo imaginas, nuestros developers lo crean.
            </p>
            <p><strong>Puedo acceder al contenido sin registrarme?</strong><br>
              El <a href="#">login</a> es requerido para acceder a la información de este sitio. Si aun no eres miembro, te invitamos a <a href="#">registrarte</a>!
            </p>
            <p><strong>Si tengo un problema, como consigo ayuda?</strong><br>
              Conta con nosotros: completa el formulario en el footer o envianos un email. Estamos aquí para ayudarte & We ❤ feedback!
            </p>

          </article>
          <article class="col-4 col-12-mobile special">
            <header>
              <h3>Developers FAQ</h3>
            </header>
            <p><strong>Como puedo publicar mis trabajos?</strong><br>
              ES SIMPLE! Completa el <a href="#">registro</a>, crea tu <a href="#">perfil</a> y ya nuestros usuarios podrán conocerte y ponerse en contacto con vos.
            </p>
            <p><strong>Quienes tendrán acceso a mi perfil?</strong><br>
              Para acceder al contenido de esta red el login requerido. Solo usuarios registrados podrán ver tus trabajos y todos tus datos disponibles en tu <a href="#">perfil</a>.</p>
            </p>
          </article>
          <article class="col-4 col-12-mobile special">
            <header>
              <h3>Customers FAQ</h3>
            </header>
            <p><strong>Como puedo ver proyectos?</strong><br>
              ES FACIL! Completa el <a href="#">registro</a>, accede al buscador y empezá a conocernos.
            </p>
            <p><strong>Como puedo contactar a un developer / diseñador?</strong><br>
              A través del buscador vas a poder acceder a nuestros proyectos. Cuando alguno llame tu atención podrás expandirlo y acceder al perfil del developer / diseñador que publico ese trabajo. Alli encontraras todos los datos que necesitas para ponerte en contacto, seguirlo en las redes o simplemente dejarle un comment y hacerle saber que te encanto su trabajo!</p>
            </p>
          </article>
        </div>
      </section>

    </div>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

  </body>


</html>

<?php
  require_once "footer.php";
?>
