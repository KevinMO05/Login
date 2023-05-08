<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
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
            background-image: url('{{ asset('img/register.png')}}');
        }

        .name {
            width: 662px;
            height: 40px;
            position: absolute;
            top: 270px;
            left: 662px;
            padding-left: 10px;
            font-family: 'Exo';
            font-size: 16px;
        }

        .email {
            width: 662px;
            height: 40px;
            position: absolute;
            left: 662px;
            top: 350px;
            padding-left: 10px;
            font-family: 'Exo';
            font-size: 16px;
        }

        .password {
            width: 662px;
            height: 40px;
            position: absolute;
            left: 662px;
            top: 430px;
            padding-left: 10px;
            font-family: 'Exo';
            font-size: 16px;
        }

        .create {
            width: 676px;
            height: 55px;
            position: absolute;
            left: 662px;
            top: 520px;
            font-family: 'Exo';
            font-size: 20px;
        }

        p {
            margin-top: 590px;
            margin-left: 200px;
            font-family: 'Exo';
            font-size: 14px;
            color: rgba(93, 109, 126, 0.9);
        }

        a {
            color: #769E9E;
        }

        .name,
        .email,
        .password {
            border-left: none;
            border-right: none;
            border-top: none;
            border-bottom: 1.5px solid rgba(93, 109, 126, 0.5);

        }

        .create {
            border: none;
            background: #8BB2B2;
            border-radius: 6px;
            color: white;
        }

        .create:hover {
            background: #769E9E;
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="{{route('login.main')}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nombre Completo" class="name">

            <input type="email" name="email" placeholder="Email" class="email">

            <input type="password" name="password" placeholder="Contraseña" class="password">

            <input type="submit" name="create" class="create" />

            <p>Ya tienes una cuenta? <a href="{{route('login.signin')}}">Iniciar sesión</a></p>
        </form>
        
        @if (session('success'))
        <script>
            swal.fire({
                title: "¡Bienvenido!"
                , text: "{{ session('success') }}"
                , icon: "success"
            });

        </script>
        @endif

        @if (session('error'))
        <script>
            swal.fire({
                title: "Error"
                , text: "{{ session('error') }}"
                , icon: "error"
            });

        </script>
        @endif
    </div>
</body>
</html>
