<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arkad</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Economica&display=swap" rel="stylesheet"> --}}
       <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

        <link rel="stylesheet" href="{{asset('css/style.css')}}">

     
    </head>
    <body>

    <div id="app">
       <app/>
    </div>
     <footer class="footer">
        <h3 class="footer__title">made with <i class="fas fa-heart"></i> from  <span>james the weirdo</span></h3>
        <ul class="footer__narvigation">
            <li class="footer__narvigation__item"><a href=""><i class="fab fa-github-square"></i> jamezzz123</li></a>
            <li class="footer__narvigation__item"><i class="fab fa-instagram"></i> james_the_weirdo</li>
            <li class="footer__narvigation__item"><i class="fab fa-twitter-square"></i> i_am_amezzz</li>
        </ul>
    </footer>
    
    
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
