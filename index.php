<!DOCTYPE html>
<html lang="ita">

<head>
    <!-- META TAG + TITLE -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DISCHI JSON</title>


    <!-- LINK STYLES + ICON -->
    <link href="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-download-logo-30.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="./styles/style.css" rel="stylesheet">


    <!-- * SCRIPTS JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js" type="text/javascript" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" type="text/javascript" defer></script>
    <script src="js/script.js" type="text/javascript" defer></script>

</head>



<body>
    <div id="app">
        <header class="py-3">
            <div class="container-fluid px-5">
                <a href='#' class="my_img-container ms-5">
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-download-logo-30.png"
                        alt="logo" class="w-100 ms-4">
                </a>
            </div>
        </header>



        <main class="py-3 px-5">
            <div class="container-fluid px-5">
                <div class="my_cards-container d-flex flex-wrap px-5">
                    <article v-for="discInfos,index in discsInfos" :key='index'
                        class='d-flex flex-column align-items-center rounded rounded-3 p-4' :title="discInfos.genre">
                        <div class=" my_img-container">
                            <img :src="discInfos.poster" alt="" class="w-100">
                        </div>

                        <div class="my_card-info d-flex flex-column align-items-center pt-4 pb-2 text-center">
                            <h3 class="my_title fw-bold">{{discInfos.title}}</h3>
                            <h6>{{discInfos.author}}</h6>
                            <h4 class="my_date fw-bold">{{discInfos.year}}</h4>
                        </div>
                    </article>
                </div>
            </div>
        </main>
    </div>
</body>

</html>