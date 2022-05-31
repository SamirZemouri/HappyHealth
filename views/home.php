

<!DOCTYPE html>
<html lang="en">
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
</head>
<body class="font-['Montserrat'] bg-[#200355]">
      <header>
        <nav class="h-24 shadow-2xl flex items-center justify-between text-white">
            <div class="ml-24 flex flex-row"><img src="./assets/media/logo.png"> <p class="font-bold ml-10">Happy Health</p></div>
            <div class="mr-10 flex flex-row"><button class="font-bold mr-20 hover:text-yellow-400 hover:underline">Happy</button> <button class="font-bold mr-10 hover:text-lime-500 hover:underline">Health</button></div>
        </nav> 
      </header>
         <main>
          <section class="flex flex-row ml-16">
              <div>
              <h1 class="font-bold ml-10 mt-7 text-xl text-white"><p>Discover <span class="text-yellow-400">Happiness</span> score and <span class="text-lime-500">Health</span> score (life</p>
                <p>expectancy) since 2015 in every country all</p>
                <p>around the world !</p></h1>
              <p class="ml-10 mt-3 text-sm text-white"><span class="font-bold">Happiness</span> scored according to GDP per Capita, Family, <span class="font-bold">Life Expectancy,</span></p>
              <p class="ml-10 text-sm text-white"> Freedom, Generosity, Trust Government Corruption describe the extent to</p>
              <p class="ml-10 text-sm text-white"> which these factors contribute in evaluating the happiness in each country.</p>
              </div>
              <img src="./assets/media/illustration.png" class="ml-52 mt-10">
           </section>
            <div class="absolute ml-16">
              <button class="font-bold w-52 h-10 relative ml-10 -top-8 text-white text-sm bg-yellow-400 rounded-full shadow-2xl">Happiness</button>
              <button class="font-bold w-52 h-10 relative ml-10 -top-8 text-white text-sm bg-lime-500 rounded-full shadow-2xl">Health</button>
           </div>
           <section>
            <div class="bg-violet-900 ml-24 w-2/6 h-80 mt-10 rounded-2xl">

            </div>
          </section>
        </main>
        <footer class="w-80 mt-10 ml-24 text-white">
          <hr>
          <p class="mt-2 flex items-center">&copy; 2022 Floriane Simmet - Made with <span class="iconify" data-icon="ant-design:heart-filled"></span></p>
      </footer>
    <script src="./JS/tailwind.config.js"></script>
</body>
</html>