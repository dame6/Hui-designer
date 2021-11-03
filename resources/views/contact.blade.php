<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/new_logo_HD.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">


    <title>Contact</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179151826-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-179151826-1');
  </script>
  </head>
  <body class="light">
    <header class="header fixed-top">
      <div class="container">
     <nav class="navbar navbar-expand-md  ">

      <a href="{{ url('/') }}" class="logo1"><img src="img/logo-HD.svg" alt="#Logo">
      </a>

      <button class="navbar-toggler" id="bb" data-toggle="collapse" data-target="#menuhamburger">
        <span class="navbar-toggler-icon" style="float: right;background-color: #bd1421;"><svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-button-wide"
            viewBox="0 0 16 16">
            <path
              d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z" />
            <path
              d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
          </svg></span>
      </button>
     <div class="collapse navbar-collapse" id="menuhamburger">
        <ul class="navbar-nav navbar-collapse c">
          <li class="nav-item">
            <a class="nav-link  mr-4 hd" href="{{ url('/') }}" >Acceuil</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link  hd" href="{{ url('/à-propos') }}" >Apropos</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link hd" href="{{ url('/nos-projets') }}" >Projets</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link hd" href="{{ url('/nos-articles') }}" >Articles</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link active hd" href="{{ url('/contact') }}">Contact</a>
          </li>
           <li class="nav-item">
            <a href="{{ url('/contact_dark') }}" class="nav-link mode hd" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
  <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
</svg></a>
          </li>
        </ul>

      </div>


    </nav>
  </div>
  </header>
   <main class="mt-5">
     <section id="about" class="about-apro ">
      <div class="container " >

        <div class="row justify-content-center">

          <div class="">
              <h4 class="contact-1">Prenons ensemble un verre de thé.</h4>
              <p class="contact-2">Envie de parler de Design ? D'innovation ? Ou vous voulez échanger sur un sujet spécifique ? <br><br>

                  Écrivez-nous et prenons ensemble une pizza</p>
              
          </div>
           <div>
             <img src="img/group-10.png" class="contact-03">
          </div>
        </div>

      </div>
    </section>
      <section id="contact" class="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 mt-5">

            <form action="{{ url('/storemsg') }}" method="post" role="form" class="php-email-form ml-5" enctype="multipart/form-data">
            @csrf
              <div class="form-row">
                <div class="col-md-6 form-group" >
                  <input type="text" name="nom" class="form-control"  placeholder="Nom complet"
                   required style="border: solid 1px #484848;
                    background-color: #ededed;" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" placeholder="E-mail" required style="border: solid 1px #484848;
                        background-color: #ededed;" />
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="msg"  rows="5" data-rule="required" required 
                  data-msg="Please write something for us" placeholder="Votre message ici" style="border: solid 1px #484848;
                          background-color: #ededed;"></textarea>
              </div>
              <div class="text-center"><input class="msg" type="submit" value="Envoyer votre Message"/></div>
            </form>

          </div>
          <div class="col-lg-4">
            <div class="info">
              <div class="address row">
                <div class="mr-4 mt-3">
                <i class="icofont-google-map"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                     <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg></i></div>
                <div>
                <h5><strong>Addresse:</strong></h5>
                <p>Liberté 1, villa n° 1201, Dakar Sénégal.</p>
              </div>
              </div>
              <div class="email row">
                <div class="mr-4 mt-3">
                <i class="icofont-google-map"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg></i></div>
              <div>
                <h5><strong> Téléphone:</strong></h5>
                <p>+221 77 592 18 00  </p>
              </div>
              </div>
              <div class="phone row">
                <div class="mr-4 mt-3">
                <i class="icofont-google-map"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
              <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
              </svg></i></div>
                <div>
                <h5><strong>Email:</strong></h5>
                <p>lalekou@hui-designers.com</p>
              </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <section class="idee">
      <div class="container">
        <div >
            <p class="idee-1"> Vous avez une idée ? un projet ? 
            On est prêt à travailler avec vous</p>
            <a href="#" class="idee-bt-1">Discutons en</a>
        </div>
      </div>
    </section>
   </main>
   <footer class="foot-1 mb-5">
     <div class="container">
       <div class="row justify-content-center">
          <div class="foot" ><img src="img/logo-HD.svg" alt="img"></div>
       </div>
     </div>
   </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>