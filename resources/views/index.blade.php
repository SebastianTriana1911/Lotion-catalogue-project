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
    <div class="grid-container">
        <div class="header">

            <div class="menu-icon" onclick="toggleMenu()">
                ☰ 
            </div>

            <div class="container-header">
                <h1 class="nameFactory">Perfumería</h1>
                <h1 class="nameFactoryTwo">Puré.</h1>
            </div>
            
            <div class="option-header" id="navbar">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">CATÁLOGO</a></li>
                    <li><a href="#">PERFUMERÍA FEMENINA</a></li>
                    <li><a href="#">PERFUMERÍA MASCULINA</a></li>
                </ul>
                <div class="close-icon" onclick="toggleMenu()">
                    x
                </div>
            </div>
        </div>

        <div class="main">
            <div class="grid-one">
                <h1>Perfumeria Ocean</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut nihil cum voluptas quae ad quasi ab
                    quos
                    doloremque excepturi et officia adipisci, sed velit illum ex obcaecati? Alias, dolore
                    deserunt!</p>

                <div class="container-button">
                    <button class="button-man">Perfumeria Hombre</button>
                    <button class="button-woman">Perfumeria Mujer</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            var navbar = document.getElementById('navbar');
            navbar.classList.toggle('active');
        } 
    </script>
</body>
</html>
