,<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="shortcut icon" href="img/new_logo_HD.png" type="image/x-icon">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

  <title>Projet</title>
</head>

<body class="body1">
  <header class="header">
    <div class="container">
    <nav class="navbar navbar-expand-md  ">

      <a href="{{ url('/') }}" class="logo"><img src="img/logo-HD.svg" alt="#Logo">
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
     <div class="img-ad-01" style="background-image: url('img/group-2.png');">
      <h2 class="artad-1">Liste des projets réalisés</h2>
      <a href="{{ url('/creer-projet') }}" class="artad-2">Ajouter un nouvel projet</a>
     </div>

   </div>

  </div>
</section>

 <section class="projet mb-5" >
      <div class="container">
        <div class="row justify-content-center">
          
           @foreach($projets as $projet)
          <div class="projet-3 ">
            <div class="icon-box">
            <div class="img-02" style="background-image: url('{{ asset('uploads/'.$projet->img) }}')"><div class="nav-item dropdown mr-4 " style="margin: 0px 0px 0px 300px">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false" style="color: white;"></a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ url('/Modifier-projet/'.$projet->id) }}"><i class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></i>Modifier</a>
              <a class="dropdown-item" href="{{ url('/supppro/'.$projet->id) }}"><i class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></i> Supprimer</a>
            </div>
          </div></div>
              <h4 class="projet-4">{{ $projet->titre }}</h4>
              <p class="projet-5">{{ $projet->description }}</p>
              <a href="#" class="projet-bt-1">Voir la use case</a>
            </div>

          </div>
          @endforeach
        </div>
      </div>
    </section>
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