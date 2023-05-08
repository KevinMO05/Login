<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsSystem</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600&display=swap');

        * {
            padding: 0px;
            margin: 0px;
            box-sizing: 0;
        }

        body {
            overflow-x: hidden;
        }

        .container {
            width: 1365px;
            height: 649px;
            display: flex;
            justify-content: center;
            background-image: url('{{ asset("img/main.jpg")}}');
        }

        img {
            width: 75px;
            height: 75px;
            position: absolute;
            top: 14px;
            left: 62px;
        }

        nav {
            padding: 10px;
            position: absolute;
            margin-top:20px;
            margin-left: 670px;

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
            color: #565F90;
            display: block;
            padding: 10px;
            text-decoration: none;
            font-family: 'Exo';
            font-weight: 600;
            font-size: 20px;
            margin: 5px;     

        }

        nav a:hover {
            border-bottom: 3px solid #f8801e;
            transition: .05s;
        }

        .create{
            position: absolute;
            font-size: 23px;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            margin-top:34px ;
            border: none;
            background-color: #E59A3F;
            font-family: 'Exo';
            font-weight: 600;
            color: #fff;
            text-align: center;
            margin-left: 1260px;
        }
    </style>
</head>

<body>

    <div class="container">

        <img src="https://img.icons8.com/pastel-glyph/64/null/brain-3--v1.png" />
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        <input type="submit" name="create" class="create" value="{{ substr(trim($id->name), 0, 1) }}" />
    </div>

    

</body>

</html>