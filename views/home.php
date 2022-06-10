<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur Happy Health, le site qui classe et affiche les statistiques sur la joie et la santé des habitants du monde entier.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Happy Health">
    <meta property="og:description" content="Bienvenue sur Happy Health, le site qui classe et affiche les statistiques sur la joie et la santé des habitants du monde entier.">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Happy Health">
    <link rel="shortcut icon" type="image/png" href="./assets/media/logo.png"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Happy Health</title>
    <!--CDN TAILWIND-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--LINK CSS-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--ICONIFY-->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <!--FONT MONTSERRAT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--CDN CHART.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body class="font-['Montserrat'] bg-[#200355]">
    <!--HEADER NAV-->
          <?php 
            require_once ('nav.php');
          ?>
    <!--PRESENTATION-->
          <main>
          <section class="flex flex-row ml-6 lg:flex lg:flex-row lg:ml-24">
              <div>
                <h1 class="font-bold mt-5 text-white text-center text-2xl" id="titreTel"><span class="text-[#FEC505]">H</span>appy <span class="text-[#14D654]">H</span>ealth</h1>
                <h1 class="font-bold mt-3 text-base text-white lg:font-bold lg:ml-10 lg:mt-6 lg:text-white lg:text-lg lg:whitespace-pre-line">Discover <span class="text-[#FEC505]">Happiness</span> score and <span class="text-[#14D654]">Health</span> score <span class="font-light">(life
                  expectancy)</span> since 2015 in every country all
                  around the world !</h1>
                <p class="mt-3 text-xs text-white lg:ml-10 lg:mt-3 lg:text-xs lg:text-white lg:whitespace-pre-line"><span class="font-bold">Happiness</span> scored according to GDP per Capita, Family, <span class="font-light">Life Expectancy,</span>
                  Freedom, Generosity, Trust Government Corruption describe the extent to
                  which these factors contribute in evaluating the happiness in each country.</p>
              </div>
            <!--IMAGE-->
                <img src="./assets/media/illustration.png" class="lg:ml-52 lg:mt-6 lg:width-48 lg:h-48" id="illustration">
          </section>
          <!--BUTTONS HAPPY/HEALTH-->
            <div class="ml-6 mt-10 flex flex-row lg:absolute lg:ml-24">
              <button class="font-bold w-32 h-8 text-white text-sm rounded-full shadow-2xl bg-[#FEC505] lg:font-bold lg:w-52 lg:h-10 lg:relative lg:ml-10 lg:-top-16 lg:text-white lg:text-sm lg:rounded-full lg:shadow-2xl lg:bg-[#FEC505]" id="btnHappy">Happy</button>
              <button class="font-bold w-32 h-8 ml-24 text-white text-sm rounded-full shadow-2xl bg-[#14D654] lg:font-bold lg:w-52 lg:h-10 lg:relative lg:ml-10 lg:-top-16 lg:text-white lg:text-sm lg:rounded-full lg:shadow-2xl lg:bg-[#14D654]" id="btnHealth">Health</button>
            </div>
    <!--CONTENT-->
           <section class="lg:flex">
    <!--WORLD HAPPINESS GRAPH-->         
            <div class="bg-[#1A0245] ml-4 mt-10 w-11/12 rounded-2xl lg:bg-[#1A0245] lg:ml-32 lg:w-2/6 lg:h-96 lg:mt-10 lg:rounded-2xl" id="happyCaseG">
              <h1 class="text-sm text-center pt-2 text-white lg:text-white lg:text-center lg:pt-2 g:text-sm lg:m-4">Average World Happiness Score over time</h1>
              <canvas id="happyWorld" class="lg:pt-8 pl-10"></canvas>
            </div>
    <!--CHAMPIONS OF HAPPINESS/HEALTH--> 
          <div class="flex flex-row mt-12 lg:flex lg:flex-row lg:mt-10">
      <!--CHAMPION OF HAPPINESS-->
              <div class="bg-[#1A0245] ml-4 rounded-2xl lg:bg-[#1A0245] lg:ml-8 lg:rounded-2xl" id="champHappy">
              <div class="relative">
               <img src="./assets/media/champHappy.svg" class="w-8 absolute -top-4 ml-20 lg:absolute lg:-top-4 lg:left-12 lg:w-10">
              </div>
              <h1 class="text-xs text-center font-semibold text-[#FEC505] mt-6 lg:text-center lg:mt-8 lg:text-base lg:font-semibold lg:text-[#FEC505]">Champion of Happiness</h1>
              <div class="flex flex-row ml-4 mt-2 lg:flex lg:flex-row lg:ml-10 lg:mt-4">
                  <img src="./assets/media/Switzerland.svg" class="w-12 lg:w-16"> 
                  <h2>
                   <p class="ml-2 font-bold text-xs text-white lg:ml-4 lg:font-bold lg:text-base lg:text-white">Switzerland</p>
                   <p class="ml-8 font-semibold text-xs text-[#787878] lg:ml-14 lg:font-semibold lg:text-[#787878]">7,6</p>
                  </h2>
               </div>
               <div class="flex flex-row mt-4 lg:flex lg:flex-row lg:mt-4">
                <button class="ml-2 text-[#FEC505] lg:ml-6 lg:text-[#FEC505]"><span class="iconify" data-icon="akar-icons:arrow-left"></span></button>
                <p class="ml-8 text-white font-light lg:ml-24 lg:text-white lg:font-light lg:ml-20">2022</p>
                <button class="ml-8 text-[#FEC505] lg:text-[#FEC505] lg:ml-20"><span class="iconify" data-icon="akar-icons:arrow-right"></span></button>
              </div>
              </div>
      <!--CHAMPION OF HEALTH-->
              <div class="bg-[#1A0245] rounded-2xl lg:bg-[#1A0245] lg:ml-8 lg:mt-0 lg:rounded-2xl" id="champHealth">
              <div class="relative">
                <img src="./assets/media/champHealth.svg" class="w-8 absolute -top-4 ml-20 lg:ml-32 lg:w-10">
              </div>
              <h1 class="text-xs text-center font-semibold text-[#14D654] mt-6 lg:text-base">Champion of Health</h1>
              <div class="flex flex-row ml-6 mt-2 lg:">
                  <img src="./assets/media/Iceland.svg" class="w-12 lg:w-16"> 
                  <h2>
                   <p class="ml-6 font-bold text-xs text-white lg:text-base">Iceland</p>
                   <p class="ml-8 font-semibold text-xs text-[#787878] lg:ml-12">0,95</p>
                  </h2>
              </div>
              <div class="flex flex-row mt-4 lg:">
                <button class="ml-2 text-[#14D654] lg:ml-6"><span class="iconify" data-icon="akar-icons:arrow-left"></span></button>
                <p class="ml-8 text-white font-light lg:ml-20">2022</p>
                <button class="ml-8 text-[#14D654] lg:ml-20"><span class="iconify" data-icon="akar-icons:arrow-right"></span></button>
              </div>
            </div>
          </div>
        </section>
    <!--ADVICES-->   
        <section class="lg:flex lg:flex-row-reverse lg:mr-72 lg:relative"> 
            <div class="bg-[#1A0245] ml-4 w-11/12 h-44 mt-10 rounded-2xl lg:bg-[#1A0245] lg:mt-8 lg:rounded-2xl lg:absolute lg:-top-52" id="adviceDiv">
            <h1 class="text-[#EE6355] font-bold text-center pt-3 lg:text-[#EE6355] lg:font-bold lg:text-center lg:pt-4" id="adviceNum">ADVICE #42</h1>
              <blockquote class="font-medium text-white pl-6 pt-1 lg:font-normal lg:text-white lg:text-center lg:pt-2" id="advice">“ Always double check you actually attached the file to the email. ”</blockquote>
              <img src="./assets/media/illuQuote.svg" class="pt-3 pl-20 w-80 lg:pt-4 lg:ml-32">
            <div class="relative">
              <button id="btn" class="absolute -top-2"><img src="./assets/media/buttonQuote.svg" class="w-28 ml-36 lg:ml-64"></button>
            </div>
            </div>
        </section>   
        </main>
    <!--FOOTER--> 
        <?php 
            require_once ('footer.php');
        ?>
      <script src="./JS/script.js"></script>
</body>
</html>