<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Bienvenue sur Happy Health, le site qui classe et affiche les statistiques sur la joie et la santé des habitants du monde entier.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Happy Health">
    <meta property="og:description"
        content="Bienvenue sur Happy Health, le site qui classe et affiche les statistiques sur la joie et la santé des habitants du monde entier.">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Happy Health">
    <link rel="shortcut icon" type="image/png" href="assets/media/logo.png" />
    <title>Happy Health</title>
    <!--CDN TAILWIND-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--CDN CHART.JS-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!--LINK CSS-->
    <link rel="stylesheet" href="CSS/style.css">
    <!--ICONIFY-->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <!--FONT MONTSERRAT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="m-0 font-['Montserrat'] bg-[#1A0245] xl:bg-[#200355]  sm:flex sm:justify-around sm:items-center">
    <main class="sm:w-[550px] md:w-[650px] lg:w-[800px] xl:flex xl:flex-wrap">
        <div class="introduction flex flex-col justify-center items-center mx-6 xl:w-1/2">
            <h1 class="text-[#FFF] text-[1.5rem] sm:text-[2rem] font-[700] flex tracking-wide mb-3"><span class="text-[#44B562]"> H
                </span> ealth</h1>
            <p class="font-light text-[#fff] text-[0.8rem] lg:text-[1rem] text-justify mb-5 ">
                Human <span class="font-medium">life expectancy</span> is one of the most widely used statistical
                indicators in the field of demographic
                forecasting and projections, and to assess <span class="font-medium">the level of development</span> and
                the human development index of a
                state or region of the world. </p>
            <button type="button"
                class="btn_health self-start text-[#fff] bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-[0.8rem] lg:text-[1rem] px-8 py-1 sm:px-12 sm:py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Health</button>

        </div>

        <div class="stats w-full flex justify-around sm:mb-10  xl:w-">
            <div
                class="world_health_day w-5/12 bg-[#1A0245] flex justify-center items-center flex-col rounded-2xl relative mt-10">
                <div class="circle_info flex justify-center items-center absolute w-8 h-8 lg:w-12 lg:h-12 rounded-full top-[-1rem] lg:top-[-1.5rem]">
                    <span class="iconify info opacity-100" data-icon="maki:information" style="color: #44b562;"></span>
                </div>
                <h3 class="text-[#44B562] font-bold text-[0.7rem] lg:text-[1rem] mb-2 mt-5">World Health Day</h3>
                <h5 class="text-[#fff] font-medium text-[0.7rem] lg:text-[0.9rem] mb-2">7 April 2022</h5>
                <span class="iconify text-[2rem] mb-3" data-icon="ci:external-link" style="color: #44b562;"></span>
            </div>
            <div
                class="champion_health mr-5px w-5/12 bg-[#1A0245] flex justify-center items-center flex-col rounded-2xl relative mt-10">
                <div class="circle_info flex justify-center items-center absolute w-8 h-8 rounded-full top-[-1rem] lg:top-[-1.5rem] lg:w-12 lg:h-12">
                    <span class="iconify" data-icon="fa-solid:trophy" style="color: #44b562;"></span>
                </div>
                <h3 class="text-[#44B562] font-bold text-[0.7rem] lg:text-[1rem] mb-2 mt-5">Champion of health</h3>
                <div class="info_flag flex justify-center items-center">
                    <img class="mr-2" src="assets/media/Iceland_flag.png" alt="Flag of Iceland">
                    <div class="info_text flex flex-col justify-center items-center text-[#fff] text-[0.7rem]">
                        <h3 class="lg:text-[0.9rem]">Iceland</h3>
                        <h3 class="text-[#787878] lg:text-[0.9rem]">0,95</h3>
                    </div>
                </div>
                <div class="arrow_year flex w-11/12 items-center justify-between mt-3  w-4/6">
                    <span class="iconify cursor-pointer" data-icon="akar-icons:arrow-left" style="color: #44b562;"></span>
                    <h3 class="text-[0.7rem] text-[#787878] mb-[0.5rem] lg:text-[0.9rem]">2022</h3>
                    <span class="iconify cursor-pointer" data-icon="akar-icons:arrow-left" style="color: #44b562;" data-rotate="180deg"></span>
                </div>

            </div>
        </div>


        <div class="graph rounded-2xl flex justify-center items-center mt-5 mx-6 sm:mb-10 p-8 lg:p-10">
            <canvas id="myChart"></canvas>
        </div>
        <div class="second_graph rounded-2xl flex justify-center items-center mt-5 mx-6 sm:mb-10 p-8 lg:p-10">
            <canvas id="myChart2"></canvas>
        </div>

        <div class="podium rounded-2xl flex flex-col justify-center items-center mt-5 mx-6 p-5">
                <h1 class="text-[#44B562] xl:text-[1.5rem]">Top 3 countries per year</h1>
            <div class="arrow_year flex w-5/12 items-center justify-between mt-3">
                <span class="iconify cursor-pointer xl:text-[1.5rem] xl:font-bold " data-icon="akar-icons:arrow-left" style="color: #44b562;"></span>
                <h3 class="text-[0.7rem] xl:text-[1rem] text-[#787878]">2022</h3>
                <span class="iconify cursor-pointer xl:text-[1.5rem]" data-icon="akar-icons:arrow-left" style="color: #44b562;" data-rotate="180deg"></span>
            </div>
            <div class="full_podium mb-5 flex justify-center items-end xl:w-[600px]">
                <div class="second_podium flex flex-col justify-center items-center border-none">
                    <h3 class="name_podium text-[#fff] border-none">Denmark</h3>
                    <div class="place_podium border-none rounded-tl-[3px] rounded-bl-[3px] bg-[#44B562] w-20 h-5 xl:w-[200px] lg:w-[180px] lg:h-[30px] xl:h-[36px] text-[#fff] flex justify-center items-center">2</div>
                </div>
                <div class="first_podium flex flex-col justify-center items-center border-none">
                    <h3 class="name_podium text-[#fff] border-none"">Finland</h3>
                    <div class="place_podium border-none rounded-t-[3px] bg-[#44B562] w-20 h-8 xl:w-[200px] lg:w-[180px] lg:h-[48px] xl:h-[48px] text- flex justify-center items-center text-[#fff]">1</div>
                </div>
                <div class="third_podium flex flex-col justify-center items-center border-none">
                    <h3 class="name_podium text-[#fff] border-none"">Iceland</h3>
                    <div class="place_podium border-none rounded-tr-[3px] rounded-br-[3px] bg-[#44B562] w-20 h-4 lg:w-[180px] lg:h-[24px] xl:w-[200px] xl:h-[32px] text- flex justify-center items-center text-[#fff]">3</div>
                </div>
            </div>

        </div>
        </main>
        <script src="JS/script.js"></script>
        <script src="JS/chart.js"></script>
        <script src="JS/chart2.js"></script>
</body>

</html>