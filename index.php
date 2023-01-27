<!DOCTYPE html>
<html lang="ita">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <div id="app">
        <main>
            <div class="container-fluid d-flex flex-wrap">
                <article v-for="discInfos,key in discsInfos" :key='index' class='d-flex flex-column align-items-center'>
                    <div class="my_img-container">
                        <img :src="discInfos.poster" alt="" :title="discInfos.genre" class="w-100">
                    </div>
                    <h3>{{discInfos.title}}</h3>
                    <span>{{discInfos.author}}</span>
                    <span>{{discInfos.year}}</span>
                </article>
            </div>
        </main>
    </div>


    <script src="js/script.js"></script>
</body>

</html>