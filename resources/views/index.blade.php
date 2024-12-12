<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Lotion catalogue</title>
</head>

<body>
    <div class="header">
        <div class="menuIcon" onclick="toggleMenu()">
            ☰
        </div>

        <div class="containerHeader">
            <h1 class="nameFactory">Perfumería</h1>
            <h1 class="nameFactoryTwo">Puré.</h1>
        </div>

        <div class="optionHeader" id="navbar">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">CATÁLOGO</a></li>
                <li><a href="#">PERFUMERÍA FEMENINA</a></li>
                <li><a href="#">PERFUMERÍA MASCULINA</a></li>
            </ul>
            <div class="closeIcon" onclick="toggleMenu()">
                x
            </div>
        </div>
    </div>

    <div class="main">
        <div class="containerImage">
            <div class="slideShow">
                <img id="image" src="{{ asset('image/oneMillion.jpeg') }}" alt="Image" class="slide">
                <img id="image2" src="{{ asset('/image/oneMillion.jpeg') }}" alt="Image2" class="slide">
                <img id="image3" src="{{ asset('/image/oneMillion.jpeg') }}" alt="Image3" class="slide">
            </div>
        </div>
        <div class="searchContainer">
            <div class="flexColumn">
                <div class="search">
                    <h1 class="titleSearch">Busca tu perfume favorito</h1>
                    <div class="flexInputButton">
                        <input type="text" placeholder="Buscar">
                        <button>Buscar</button>
                    </div>
                </div>

                <div class="selectImage">
                    <div id="buttonImageOne">1</div>
                    <div id="buttonImageTwo">2</div>
                    <div id="buttonImageThree">3</div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
