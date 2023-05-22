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
            margin-top: 100px;

        }

        .trabajos-container {
            display: flex;
            justify-content: center;
            height: 1100px;
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

        .tittle:hover {
            color: #ffa560;
            transition: .8s;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 30px;
            margin-top: 150px;
            margin-bottom: 20px;
        }

        .grid-item {
            background-color: #ccc;
            padding: 20px;
            width: 480px;
            border-radius: 50px;

        }

        .one {
            background-color: #ff2b2b;
            padding: 20px;
            text-align: center;

        }

        .two {
            background-color: #2b64ff;
            padding: 20px;
            text-align: center;

        }

        .three {
            background-color: #5ef753;
            padding: 20px;
            text-align: center;

        }

        .four {
            background-color: #7c2bff;
            padding: 20px;
            text-align: center;

        }

        /* =========================== TEAM =========================================*/
        .team {
            max-width: 1300px;
            display: flex;
            justify-content: center;
            position: relative;
            overflow: hidden;
            margin: 0 auto;
            background: transparent;
            align-items: center;
            margin-top: 100px;

        }

        .team-container {
            display: flex;
            justify-content: center;
            height: 900px;
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

        .tittle:hover {
            color: #ffa560;
            transition: .3s;
        }

        .grid-team {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 30px;
            margin-top: 150px;
            margin-bottom: 20px;
        }

        .grid-item_team {
            position: relative;
            background-color: #ccc;
            padding: 0px;
            width: 430px;
            border-radius: 0px;
        }

        .kevin .image-container {
            position: absolute;
            background-color: #000000;
            width: 220px;
            height: 320px;
            padding: 0;


        }

        .info-container_kevin {
            position: relative;
            background-color: #D9D9D9;
            width: 210px;
            height: 350px;
            right: -220px;
            justify-content: center;
            display: flex;
        }

        .kevin-cargo {
            position: absolute;
            color: #969696;
            font-size: 15px;
            font-family: "expletus sans";
            font-weight: 500;
            top: 120px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 160px;
        }

        .kevin-nombre {
            position: absolute;
            color: #000000;
            font-size: 16px;
            font-family: "expletus sans";
            font-weight: 600;
            top: 170px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .kevin-email {
            position: absolute;
            color: #000000;
            font-size: 12px;
            font-family: "expletus sans";
            font-weight: 600;
            top: 330px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .kevin-cel {
            position: absolute;
            color: #969696;
            font-size: 16px;
            font-family: "expletus sans";
            font-weight: 500;
            top: 350px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .kevin-image {
            position: absolute;
            width: 280px;
            height: 350px;
            background: transparent;
            margin-top: 0px;
            margin-left: -27px;
            object-fit: scale-down;
            z-index: 1;
            pointer-events: none;
        }

        .gabriel .image-container {
            position: absolute;
            background-color: #000000;
            width: 220px;
            height: 350px;
            padding: 0;


        }

        .info-container_gabriel {
            position: relative;
            background-color: #D9D9D9;
            width: 210px;
            height: 350px;
            right: -220px;
            justify-content: center;
            display: flex;
        }

        .gabriel-cargo {
            position: absolute;
            color: #969696;
            font-size: 15px;
            font-family: "expletus sans";
            font-weight: 500;
            top: 120px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 120px;
        }

        .gabriel-nombre {
            position: absolute;
            color: #000000;
            font-size: 16px;
            font-family: "expletus sans";
            font-weight: 600;
            top: 170px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .gabriel-email {
            position: absolute;
            color: #000000;
            font-size: 12px;
            font-family: "expletus sans";
            font-weight: 600;
            top: 330px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .gabriel-cel {
            position: absolute;
            color: #969696;
            font-size: 16px;
            font-family: "expletus sans";
            font-weight: 500;
            top: 350px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .gabriel-image {
            position: absolute;
            width: 280px;
            height: 350px;
            background: transparent;
            margin-top: 0px;
            margin-left: -27px;
            object-fit: scale-down;
            z-index: 1;
            pointer-events: none;
        }

        .cristian .image-container {
            position: absolute;
            background-color: #000000;
            width: 220px;
            height: 350px;
            padding: 0;


        }

        .info-container_cristian {
            position: relative;
            background-color: #D9D9D9;
            width: 210px;
            height: 350px;
            right: -220px;
            justify-content: center;
            display: flex;
        }

        .cristian-cargo {
            position: absolute;
            color: #969696;
            font-size: 15px;
            font-family: "expletus sans";
            font-weight: 500;
            top: 140px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 160px;
        }

        .cristian-nombre {
            position: absolute;
            color: #000000;
            font-size: 16px;
            font-family: "expletus sans";
            font-weight: 600;
            top: 170px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .cristian-email {
            position: absolute;
            color: #000000;
            font-size: 10px;
            font-family: "expletus sans";
            font-weight: 600;
            top: 330px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .cristian-cel {
            position: absolute;
            color: #969696;
            font-size: 16px;
            font-family: "expletus sans";
            font-weight: 500;
            top: 350px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .cristian-image {
            position: absolute;
            width: 280px;
            height: 350px;
            background: transparent;
            margin-top: 0px;
            margin-left: -27px;
            object-fit: scale-down;
            z-index: 1;
            pointer-events: none;
        }

        .juan .image-container {
            position: absolute;
            background-color: #000000;
            width: 220px;
            height: 350px;
            padding: 0;


        }

        .info-container_juan {
            position: relative;
            background-color: #D9D9D9;
            width: 210px;
            height: 350px;
            right: -220px;
            justify-content: center;
            display: flex;
        }

        .juan-cargo {
            position: absolute;
            color: #969696;
            font-size: 15px;
            font-family: "expletus sans";
            font-weight: 500;
            top: 120px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 160px;
        }

        .juan-nombre {
            position: absolute;
            color: #000000;
            font-size: 16px;
            font-family: "expletus sans";
            font-weight: 600;
            top: 170px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .juan-email {
            position: absolute;
            color: #000000;
            font-size: 12px;
            font-family: "expletus sans";
            font-weight: 600;
            top: 330px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .juan-cel {
            position: absolute;
            color: #969696;
            font-size: 16px;
            font-family: "expletus sans";
            font-weight: 500;
            top: 350px;
            margin-left: 0px;
            text-align: center;
            background: transparent;
            width: 190px;
        }

        .juan-image {
            position: absolute;
            width: 280px;
            height: 350px;
            background: transparent;
            margin-top: 0px;
            margin-left: -27px;
            object-fit: scale-down;
            z-index: 1;
            pointer-events: none;
        }

        /* ===================================== CONTACT ========================================*/
        .contacto {
            max-width: 1366px;
            display: flex;
            justify-content: center;
            position: relative;
            overflow: hidden;
            margin: 0 auto;
            background: transparent;
            align-items: center;
            margin-top: 100px;
            background-color: #F9F9F9;
            /* background-image: url("{{ asset('img/fondo.svg')}}"); */
            
        }

        .fondo{
            width: 1300px;
            height: 550px;
            background-repeat: no-repeat;
            justify-content: center;
            align-items: center;
            margin-left: 0px;
            filter: blur(5px);
            opacity: 0.5;
        }


        form {
            background: transparent;
        }

        .contacto-container {
            position: relative;
            display: flex;
            justify-content: center;
            height: 550px;
            width: 1200px;
            background: transparent;
        }

        .contacto-info {
            position: absolute;
            width: 50%;
            height: 100%;
            background: transparent;
            left: 0;
            display: flex;
            justify-content: center;
        }

        .contacto-form {
            position: absolute;
            width: 50%;
            height: 100%;
            background: transparent;
            right: 0;
            background: transparent;
            align-items: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .contact-title {
            position: absolute;
            font-family: 'Expletus Sans';
            font-weight: 600;
            font-size: 60px;
            color: #000000;
            top: 60px;
            text-align: center;
            background: transparent;
        }

        .contact-direction {
            width: 250px;
            height: 80px;
            position: absolute;
            display: flex;
            justify-content: center;
            margin: 0;
            background: transparent;
        }

        .contact-direction_icon {
            width: 40px;
            height: 40px;
            position: absolute;
            background: transparent;
            left: 20px;
            padding: 10px;
            text-align: center;
            top: 190px;
            margin: 0;
        }

        .contact-direction_descrip {
            position: absolute;
            font-family: 'Expletus Sans';
            font-weight: 500;
            font-size: 20px;
            color: #000000;
            top: 200px;
            text-align: center;
            background: transparent;
            margin: 0;
            width: 70%;
            right: 0;
        }

        .contact-cel {
            width: 250px;
            height: 80px;
            position: absolute;
            display: flex;
            justify-content: center;
            margin: 0;
            background: transparent;
        }

        .contact-cel_descrip {
            position: absolute;
            font-family: 'Expletus Sans';
            font-weight: 500;
            font-size: 20px;
            color: #000000;
            top: 300px;
            text-align: center;
            background: transparent;
            margin: 0;
            width: 70%;
            right: 0;
        }

        .contact-email {
            width: 250px;
            height: 80px;
            position: absolute;
            display: flex;
            justify-content: center;
            margin: 0;
            background: transparent;
        }

        .contact-email_descrip {
            position: absolute;
            font-family: 'Expletus Sans';
            font-weight: 500;
            font-size: 20px;
            color: #000000;
            top: 380px;
            text-align: center;
            background: transparent;
            margin: 0;
            width: 70%;
            right: 0;
        }

        #name {
            width: 273px;
            height: 40px;
            font-family: "Expletus Sans";
            background: transparent;
            margin-right: 20px;
            margin-bottom: 10px;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            border: 2px solid #f38a35;
        }

        #apellido { 
            width: 273px;
            height: 40px;
            font-family: "Expletus Sans";
            background: transparent;
            margin: 0px;
            margin-bottom: 10px;
            background-color: #fff;
            padding: 5px;
            right: 0;
            border-radius: 10px;
            border: 2px solid #f38a35;
        }

        #email {
            width: 585px;
            height: 40px;
            font-family: "Expletus Sans";
            background: transparent;
            margin: 0px;
            margin-bottom: 10px;
            background-color: #fff;
            padding: 5px;
            right: 0;
            border-radius: 10px;
            border: 2px solid #f38a35;
        }

        #message {
            width: 585px;
            font-family: "Expletus Sans";
            background: transparent;
            margin: 0px;
            margin-bottom: 10px;
            background-color: #fff;
            padding: 5px;
            right: 0;
            border-radius: 10px;
            border: 2px solid #f38a35;
        }

        #enviar {
            width: 265px;
            height: 40px;
            font-family: "Expletus Sans";
            background: transparent;
            margin: 0px;
            background-color: #f38a35;
            padding: 5px;
            right: 0;
            border-radius: 10px;
            border: 2px solid #f38a35;
            cursor: pointer;
            justify-content: center;
            margin-left: 180px;
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
                <a href="#acerca" class="start">START</a>

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
                    <div class="grid-item one">JAVA</div>
                    <div class="grid-item two">PYTHON</div>
                    <div class="grid-item three">JAVASCRIPT</div>
                    <div class="grid-item four">C++</div>
                </div>
            </div>
        </section>

        <!-- ========================================= TEAM ================================================ -->
        <section class="team">
            <div class="team-container">
                <h1 class="tittle">
                    TEAM
                </h1>
                <div class="grid-team">
                    <div class="grid-item_team kevin">
                        <div class="image-container">
                            <!-- Aqui va la imagen o foto de el representante de área -->
                            <img class="kevin-image" src="{{ asset('img/kevin2.jpg') }}" alt="">
                        </div>
                        <div class="info-container_kevin">
                            <p class="kevin-cargo">Desarrollador Web | CEO | Co-Founder</p>
                            <p class="kevin-nombre"> Kevin Martinez Ojeda</p>
                            <p class="kevin-email">Kevinmartinez130605@gmail.com</p>
                            <p class="kevin-cel">+51 988-656-424</p>
                        </div>
                    </div>
                    <div class="grid-item_team gabriel">
                        <div class="image-container">
                            <!-- Aqui va la imagen o foto de el representante de área -->
                            <img class="gabriel-image" src="{{ asset('img/kevin2.jpg') }}" alt="">
                        </div>
                        <div class="info-container_gabriel">
                            <p class="gabriel-cargo">Co-Founder | Gerente General</p>
                            <p class="gabriel-nombre">Gabriel Huertas Fiestas</p>
                            <p class="gabriel-email">Gabxiel3012@gmail.com</p>
                            <p class="gabriel-cel">+51 960-309-188</p>
                        </div>
                    </div>
                    <div class="grid-item_team cristian">
                        <div class="image-container">
                            <!-- Aqui va la imagen o foto de el representante de área -->
                            <img class="cristian-image" src="{{ asset('img/kevin2.jpg') }}" alt="">
                        </div>
                        <div class="info-container_cristian">
                            <p class="cristian-cargo">Asistente Virtual</p>
                            <p class="cristian-nombre">Cristian Mena Gutierrez</p>
                            <p class="cristian-email">menagutierrezcristianjesus@gmail.com</p>
                            <p class="cristian-cel">+51 987-080-989</p>
                        </div>
                    </div>
                    <div class="grid-item_team juan">
                        <div class="image-container">
                            <!-- Aqui va la imagen o foto de el representante de área -->
                            <img class="juan-image" src="{{ asset('img/juan.jpeg') }}" alt="">
                        </div>
                        <div class="info-container_juan">
                            <p class="juan-cargo">Diseñador Gráfico | Editor de Videos</p>
                            <p class="juan-nombre">Juan Pulache Castro</p>
                            <p class="juan-email">Juanpulache20@gmail.com</p>
                            <p class="juan-cel">+51 955-688-280</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================ CONTACT ================================================ -->
        <section class="contacto">
            <div class="contacto-container">
                <img class="fondo" src="{{ asset('img/fondo.svg')}}" alt="">
                <div class="contacto-info">
                    <h1 class="contact-title">Contact</h1>
                    <div class="contact-direction">
                        <img class="contact-direction_icon" src="{{ asset('img/location.png') }}" alt="">
                        <p class="contact-direction_descrip">Calle Grau #1357 Piura-Perú</p>
                    </div>
                    <div class="contact-cel">
                        <p class="contact-cel_descrip">+51 123-456-789</p>
                    </div>
                    <div class="contact-email">
                        <p class="contact-email_descrip">assystemcorp@assystem.com</p>
                    </div>
                </div>
                <div class="contacto-form">
                    <form action="" method="post">
                        <input type="text" name="name" id="name" placeholder="Nombre" required>
                        <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"
                            required></textarea>
                        <input type="submit" id="enviar" value="Enviar">
                    </form>
                </div>
            </div>
        </section>
    </div>
    </div>
</body>

</html>