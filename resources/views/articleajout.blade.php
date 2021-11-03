<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/new_logo_HD.png" type="image/x-icon">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
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

<body class="body1">
  <header class="header">
    <div class="container">
    <nav class="navbar navbar-expand-md  ">

      <a href="{{ url('/') }}" class="logo"><img src="{{ asset('img/logo-HD.svg') }}" alt="#Logo">
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
      <div class="collapse navbar-collapse " id="menuhamburger">
        <ul class="navbar-nav navbar-collapse ">
          <li class="nav-item">
            <a class="nav-link hd" href="{{ url('/acceuil_admin') }}" >Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active hd" href="{{ url('/articles') }}" >Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hd" href="{{ url('/projets') }}" >Cas d'étude</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hd" href="{{ url('/teams') }}" >Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hd" href="{{ url('/testims') }}" >Testim</a>
          </li>
        </ul>

      </div>

    </nav>
  </div>
  </header>
  <main>
   
  <section>
  <div class="container">
   <div >
     <div class="img-ad-01" style="background-image: url('{{ asset('img/group-2.png') }}');">
      <h2 class="artad-1">Liste des articles publiés</h2>
     </div>

   </div>

  </div> 

</section>
 @if($layout == 'artcreate')
<section class="mb-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
     <form action="{{ url('/storeart') }}" method="post" enctype="multipart/form-data">
         @csrf
              <div class="form-row">
                <div class=" form-group" >
                  <input type="text" name="titre" class="form-control ajout-1"  placeholder="Titre de l’article"
                    />
                  
                </div>
                <div class=" form-group">
                  <input type="text" class="form-control ajout-1" name="nom_aut"  placeholder="Auteur de l’article"
                    />
        
                </div>
              </div>
               <div class="form-row">
                <div class=" form-group" >
                  <input type="file" name="img_aut" class="form-control ajout-1" 
                    />
                </div>
                <div class=" form-group">
                  <input type="text" class="form-control ajout-1" name="publication" placeholder="Date de publication"
                    />
            
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control ajout-2" name="introduction"  placeholder="Introduction" rows="5"
                  ></textarea>
              </div>
              <input type="file" name="img" class="ajout-bt-1">
               <div class="form-group">
                <textarea class="form-control ajout-2" name="section_a" rows="5" 
                   placeholder="Section1"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control ajout-2" name="section_b" rows="5" 
                   placeholder="Section2"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control ajout-2" name="section_c" rows="5" 
                   placeholder="Section3"></textarea>
              </div>

               <div class="form-group">
                <textarea class="form-control ajout-2" name="section_d" rows="5" 
                   placeholder="Section4"></textarea>
              </div>
               <div class="form-group">
                <textarea class="form-control ajout-2" name="section_e" rows="5" 
                   placeholder="Section5"></textarea>
              </div>
              <div class="aj">LES PHOTOS</div>
              <div class="text-center mb-5 mt-5"><input type="file" name="img_a" class="ajoutp-bt-1">
               <input type="file" name="img_b" class="ajoutp-bt-1">
             <input type="file" name="img_c" class="ajoutp-bt-1"></div>

        <input type="submit" class="ajout-bt-2" value="Publier l’article" />
        <a href="#" class="ajout-bt-3">Enrégistrer un brouillon</a>    
      </form>
    </div>
    
  </div>
</section>
   @elseif($layout == 'artedit')
   <section class="mb-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
     <form action="{{ url('/updateart/'.$article->id) }}" method="post" enctype="multipart/form-data">
         @csrf
              <div class="form-row">
                <div class=" form-group" >
                  <input type="text" value="{{ $article->titre }} " name="titre" class="form-control ajout-1"  placeholder="Titre de l’article"
                    />
                  
                </div>
                <div class=" form-group">
                  <input type="text" value="{{ $article->nom_aut }} "class="form-control ajout-1" name="nom_aut"  placeholder="Auteur de l’article"
                    />
        
                </div>
              </div>
               <div class="form-row">
                <div class=" form-group" >
                  <input type="file" name="img_aut" value="{{ $article->img_aut }} " class="form-control ajout-1" 
                    />
                </div>
                <div class=" form-group">
                  <input type="text" class="form-control ajout-1" value="{{ $article->publication }} " name="publication" placeholder="Date de publication"
                    />
            
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control ajout-2" name="introduction" value="{{ $article->introduction }} " placeholder="Introduction" rows="5"
                  ></textarea>
              </div>
              <input type="file" name="img" class="ajout-bt-1">
               <div class="form-group">
                <textarea class="form-control ajout-2" name="section_a"  value="{{ $article->section_a }} "  rows="5" 
                   placeholder="Section1"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control ajout-2" name="section_b"  value="{{ $article->section_b}} " rows="5" 
                   placeholder="Section2"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control ajout-2" name="section_c"  value="{{ $article->section_c}} "rows="5" 
                   placeholder="Section3"></textarea>
              </div>

               <div class="form-group">
                <textarea class="form-control ajout-2" name="section_d" value="{{ $article->section_d}} " rows="5" 
                   placeholder="Section4"></textarea>
              </div>
               <div class="form-group">
                <textarea class="form-control ajout-2" name="section_e" value="{{ $article->section_e}} " rows="5" 
                   placeholder="Section5"></textarea>
              </div>
              <div class="aj">LES PHOTOS</div>
              <div class="text-center mb-5 mt-5"><input type="file" name="img_a" value="{{ $article->img_a }} " class="ajoutp-bt-1">
               <input type="file" name="img_b" value="{{ $article->img_b }} " class="ajoutp-bt-1">
             <input type="file" name="img_c" value="{{ $article->img_c }} " class="ajoutp-bt-1"></div>

        <input type="submit" class="ajout-bt-2" value="Enrégistrer" />    
      </form>
    </div>
    
  </div>
</section>
  @endif
  </main>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>