<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <style>
    #app{
        background-color:black;
        height: 100vh;
    }
    .navitem{
        color: #FF7A00 !important;
        font-weight: bold !important;
        font-size: 24px;
    }


    </style>
    <body>
        <div id="app">


        <nav class="navbar navbar-expand-lg navbar-light bg-black">
  <a class="navbar-brand" href="#">
  <img class="w-50" src="{{ asset('images/logo.png') }}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="width: 100%;
justify-content: space-around;
max-width: 90%;">
      <li class="nav-item active">
      <router-link to="/" class="nav-link navitem">Accueil</router-link>
      </li>
      <li class="nav-item">
      <router-link to="/equipes" class="nav-link navitem">Liste des equipes</router-link>
      </li>
      <li class="nav-item">
      <router-link to="/matches" class="nav-link navitem">Liste des matchs</router-link>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <router-view></router-view>
</div>



<footer class="bg-black text-center fixed-bottom">
  <div class="container">
    <div class="d-flex py-4 text-white align-items-center justify-content-around">
        <img style="width: 80px" src="{{ asset('images/logo.png') }}">
        <p>Conditions d’utilisation</p>
        <p>Copyright © 2020 WEBA All rights reserved</p>
        <p>Politique de confidentialité</p>
    </div>
    </div>
</footer>

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
