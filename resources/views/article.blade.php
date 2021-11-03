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


    <title>Articles</title>
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
            <a class="nav-link active hd" href="{{ url('/nos-articles') }}" >Articles</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link hd" href="{{ url('/contact') }}">Contact</a>
          </li>
           <li class="nav-item">
            <a href="{{ url('/nos-articles_dark') }}" class="nav-link mode hd" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
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
              <h4 class="about-art-1">Qu’est-ce que nous écrivons ?</h4>
              <p class="about-art-2">Nous partageons avec vous ce que l’on a appris ailleurs.</p>
              
          </div>
           <div>
             <img src="img/img-articles.png" class="img-art-01">
          </div>
        </div>

      </div>
    </section>
     </section>
     <section class="article" >
      <div class="container">
        <div class="row justify-content-center">
          @foreach($articles as $article)
          <div class=" article-1">
            <a href="{{ url('/article/'.$article->id) }}" class="article-4">
            <div class="icon-box">
              <div class="img-06" style="background-image: url('{{ asset('uploads/'.$article->img) }}')"> 
                </div>
              <h4 class="article-2">{{ $article->titre }}</h4>
              <p class="article-3">{{ $article->introduction }}</p>
            </div>
          </a>
          </div>
          @endforeach
          

        </div>
      </div>
    </section>

    <section class="idee">
      <div class="container">
        <div >
            <p class="idee-1"> Vous avez une idée ? un projet ? 
            On est prêt à travailler avec vous</p>
            <a href="{{ url('/contact') }}" class="idee-bt-1">Discutons en</a>
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