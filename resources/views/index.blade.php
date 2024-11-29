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
    <div class="gridContainer">
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
                    <img id="image" src="{{ asset('image/KhamrahVaner.jpg') }}" alt="Image" class="slide">
                    <img id="image2" src="{{ asset('/image/BadeeAlOutVaner.webp') }}" alt="Image2" class="slide">
                    <img id="image3" src="{{ asset('/image/Dior.webp') }}" alt="image3" class="slide">
                </div>
                <div class="selectImage">
                    <div id="imageOne"></div>
                    <div id="imageTwo"></div>
                    <div id="imageThree"></div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
