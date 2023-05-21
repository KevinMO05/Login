<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsSystem</title>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Expletus+Sans:wght@400;500;600;700&family=Inter&display=swap');

        * {
            padding: 0px;
            margin: 0px;
            box-sizing: 0;
            background-color: #000;
        }

        body {
            overflow-x: hidden;

        }

        .container {
            width: 1365px;
            height: 649px;
            /* display: inline; */
            justify-content: center;
            background: transparent;

        }

        .home {
            width: 1365px;
            height: 649px;
            display: flex;
            justify-content: center;
            margin-top: -15px;
        }

        nav {
            padding: 10px;
            position: absolute;
            margin-top: 40px;
            margin-left: 670px;
            z-index: 1;

        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline-block;
        }

        nav a {
            color: #fff;
            display: block;
            padding: 10px;
            text-decoration: none;
            font-family: 'Expletus Sans';
            font-weight: 600;
            font-size: 20px;
            margin: 5px;

        }

        p {
            position: absolute;
            color: #fff;
            font-family: 'Expletus Sans';
            font-weight: 600;
            font-size: 30px;
            margin-left: 465px;
            margin-top: -75px;
            top: 92px;



        }

        nav a:hover {
            border-bottom: 3px solid #f8801e;
            transition: .05s;
        }

        .create {
            position: absolute;
            font-size: 23px;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            margin-top: 55px;
            border: none;
            background-color: #EEB30D;
            font-family: 'Exo';
            font-weight: 600;
            color: #fff;
            text-align: center;
            margin-left: 1260px;
        }

        img {
            position: absolute;
            width: 55px;
            height: 79px;
            margin-left: -1150px;
            margin-top: 36px;
        }

        .title-central {
            position: absolute;
            font-family: 'Expletus Sans';
            font-weight: 600;
            font-size: 48px;
            color: #fff;
            margin-left: -860px;
            margin-top: 39px;
        }

        .title-central:hover {
            color: #ffa560;
            transition: .8s;
        }

        h3 {
            position: absolute;
            font-family: 'Expletus Sans';
            font-weight: 400;
            font-size: 20px;
            color: #fff;
            margin-left: -720px;
            margin-top: 87px;
            filter: blur(0.6px);
            background: transparent;
        }

        .text-principal {
            position: relative;
            margin-top: 0px;
            background: transparent;
            width: 500px;
            height: 390px;
            margin-left: -500px;
            top: 200px;

        }

        .text-principal h2 {
            position: absolute;
            z-index: 1;
            color: #b0afaf;
            font-family: 'Exo';
            font-size: 35px;
            font-weight: 300;
            margin-top: 0px;
            margin-left: 30px;
            background: transparent;
        }

        .text-principal h1 {
            position: absolute;
            z-index: 1;
            color: #fff;
            font-family: 'Expletus Sans';
            font-size: 96px;
            font-weight: 400;
            margin-top: 31px;
            margin-left: 30px;
            background: transparent;
        }




        .text-principal h3 {
            position: absolute;
            z-index: 1;
            color: #ffffff;
            font-family: 'Exo';
            font-size: 20px;
            font-weight: 400;
            margin-top: 130px;
            margin-left: 370px;
            background: transparent;
            filter: blur(0px);
        }

        .text-principal h4 {
            position: absolute;
            z-index: 1;
            color: #b0afaf;
            font-family: 'Exo';
            font-size: 20px;
            font-weight: 400;
            margin-top: 180px;
            margin-left: 30px;
            background: transparent;
            width: 400px;
        }

        .start {
            position: relative;
            border: 2px solid #f38a35;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            justify-self: center;
            font-family: "Expletus Sans";
            text-decoration: none;
            font-size: 15px;
            color: #fff;
            font-weight: 500;
            margin-top: 300px;
            margin-left: 170px;

        }

        .start::before {
            content: '';
            border: 2px solid #f8801e;
            width: 90px;
            height: 90px;
            position: absolute;
            border-radius: 50%;
            box-shadow: 0 0 12px #ff7300;
            transition: .3s;
            animation: start 2s infinite;

        }


        @keyframes start {
            0% {
                box-shadow: 0 0 20px hsl(44, 97%, 39%);
            }

            50% {
                box-shadow: 0 0 30px hsl(44, 97%, 28%);
            }

            100% {
                box-shadow: 0 0 20px hsl(44, 97%, 39%);
            }
        }

        .cubo {
            position: absolute;
            width: 1600px;
            height: 1100px;
            background: transparent;
            margin-top: -300px;
            margin-left: 150px;
            top: 0px;
            animation: cubo 2s infinite;
            object-fit: scale-down;
            z-index: 1;
            pointer-events: none;
        }

        /* ============================== ACERCA DE =============================================== */

        .acerca {
            max-width: 1300px;
            display: flex;
            justify-content: center;
            position: relative;
            overflow: hidden;
            margin: 0 auto;
            background: transparent;
            align-items: center;
            margin-top: -140px;

        }

        .acerca-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 900px;
            width: 1200px;
            background: transparent;
        }

        .image {
            position: relative;
            width: 550px;
            height: 480px;
            background-color: #ECB30F;
            align-items: center;
            display: flex;
            justify-content: center;
            z-index: 2;
            border-radius: 25px;
            text-align: center;
            margin-left: -680px;
            margin-top: 0px;

        }

        .niño-acerca {
            position: absolute;
            width: 510px;
            height: 330px;
            display: inline-block;
            margin: 100px;
            background: transparent;

        }

        .contenido {
            position: absolute;
            width: 730px;
            height: 560px;
            background-color: #ffffff;
            align-items: center;
            display: flex;
            justify-content: center;
            z-index: 1;
            border-radius: 25px;
            text-align: center;
            margin-left: 430px;
            margin-top: 247px;
        }

        .contenido-title {
            position: absolute;
            background: transparent;
            font-size: 45px;
            font-family: "Expletus Sans";
            font-weight: 500;
            margin-top: -400px;
            margin-left: -100px;
        }

        .contenido-descrip {
            position: absolute;
            background: transparent;
            font-size: 23px;
            font-family: "Exo";
            font-weight: 400;
            margin-top: 50px;
            margin-left: 100px;
            width: 500px;
            color: #000;
            text-align: left;
        }

        b {
            background: transparent;
        }

        /* ================================== TRABAJOS ================================= */

        .trabajos {
            max-width: 1300px;
            display: flex;
            justify-content: center;
            position: relative;
            overflow: hidden;
            margin: 0 auto;
            background: transparent;
            align-items: center;

        }

        .trabajos-container {
            display: flex;
            justify-content: center;
            height: 700px;
            width: 1200px;
            background: transparent;
        }

        .tittle {
            position: absolute;
            font-family: 'Expletus Sans';
            font-weight: 400;
            font-size: 45px;
            color: #fff;
            top: 50px;
            text-align: center;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 10px;
            margin-top: 150px;
            margin-bottom: 20px;
        }

        .grid-item {
            background-color: #ccc;
            padding: 20px;
        }
        
    </style>

</head>

<body>

    <div class="container">
        <section class="home">
            <img src="{{ asset('img/logo.png') }}">
            <h1 class="title-central">AsSystem</h1>
            <h3>システム</h3>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Contacto</a></li>
                    <p>|</p>
                </ul>
            </nav>
            <input type="submit" name="create" class="create" value="{{ substr(trim($id->name), 0, 1) }}" />
            <div class="text-principal">
                <h2>EMPRENDE CON</h2>
                <h1>AsSystem</h1>
                <h3>システム</h3>
                <h4>UNA STARTUP QUE OFRECE SERVICIOS DE DESARROLLO WEB, ASISTENCIA VIRTUAL, EDICIÓN DE VIDEO Y DISEÑO
                    GRÁFICO.</h4>
                <a href="#" class="start">START</a>

                <img class="cubo" src="{{ asset('img/elemento.png') }}" alt="">
            </div>
        </section>

        <!-- =================================== ACERCA DE ==================================================== -->
        <section class="acerca" id="acerca">
            <div class="acerca-container">
                <div class="image">
                    <img class="niño-acerca" src="{{asset('img/niño.png')}}" alt="">
                </div>
                <div class="contenido">
                    <h2 class="contenido-title">¿Quiénes somos?</h2>
                    <p class="contenido-descrip">El proyecto de <b>Assystem</b> ha sido diseñado específicamente para
                        satisfacer las necesidades de los
                        pequeños emprendimientos, ofreciendo soluciones tecnológicas asequibles y accesibles para
                        aquellos
                        con presupuestos limitados. Assystem brinda un servicio de asesoramiento personalizado a los
                        emprendimientos pequeños, para ayudarles a identificar las tecnologías más apropiadas para sus
                        necesidades específicas.
                    </p>
                </div>
            </div>
        </section>

        <!-- ====================================== TRABAJOS ==================================================== -->
        <section class="trabajos">
            <div class="trabajos-container">
                <h1 class="tittle">
                    WORKS
                </h1>
            
            <div class="grid-container">
                <div class="grid-item">1</div>
                <div class="grid-item">2</div>
                <div class="grid-item">3</div>
                <div class="grid-item">4</div>
            </div>
        </div>
        </section>

    </div>
    </div>



</body>

</html>