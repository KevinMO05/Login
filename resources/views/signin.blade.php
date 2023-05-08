<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600&display=swap');

        * {
            padding: 0px;
            margin: 0px;
            box-sizing: 0;
        }

        body {
            background-color: rgb(23, 21, 21);
            overflow-x: hidden;
        }

        .container {
            width: 1365px;
            height: 649px;
            display: flex;
            justify-content: center;
            background-image: url('{{ asset("img/Login.png")}}');
        }

        .email {
            width: 298.28px;
            height: 29.08px;
            position: absolute;
            top: 315.99px;
            left: 283.91px;
            padding-left: 10px;
            font-family: 'Exo';
            font-weight: 500;
            font-size: 15px;
        }

        .password {
            width: 298.28px;
            height: 29.08px;
            position: absolute;
            top: 373.3px;
            left: 283.91px;
            padding-left: 10px;
            font-family: 'Exo';
            font-weight: 500;
            font-size: 15px;
        }

        .create {
            width: 143px;
            height: 43px;
            position: absolute;
            top: 440px;
            left: 360px;
            font-family: 'Exo';
            font-weight: 500;
            font-size: 15px;
            border-radius: 25px;
            background-color: #E29D49;
            color: white;
            border: none;
        }

        .email,
        .password {
            border-left: none;
            border-right: none;
            border-top: none;
            border-bottom: 1.5px solid #A1A1A1;
            color: #c2c1c1;
            background-color: transparent;

        }

        .create:hover {
            background: #dc9237;
            transition: .2s;
        }

        p {
            margin-top: 515px;
            margin-left: -420px;
            font-family: 'Exo';
            font-size: 13px;
            color: #c2c1c1;
        }

        a {
            color: #488dc9;
        }

    </style>
</head>

<body>
    @include('sweetalert::alert')
    <div class="container">
        <form action="{{route('login.validation')}}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" class="email">

            <input type="password" name="password" placeholder="Contraseña" class="password">

            <input type="submit" name="create" class="create" value="Iniciar Sesión" />

            <p>No tienes una cuenta? <a href="{{route('login.register')}}">Registrate aquí</a></p>
        </form>

        @if (session('success'))
        <script>
            swal.fire({
                title: "¡Bienvenido!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
        @endif

        @if (session('error'))
        <script>
            swal.fire({
                title: "Error",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
        @endif
</body>

</html>