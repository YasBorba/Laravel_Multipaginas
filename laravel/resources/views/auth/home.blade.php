<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #F4D7C5, #F0A570, #8FC8D4);
        }

        .container {
            display: flex;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            width: 800px;
            max-width: 95%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .left, .right {
            flex: 1;
            padding: 50px 40px;
        }

        .left {
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left h1 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #E9551C;
        }

        .left a {
            display: block;
            margin: 10px 0;
            text-decoration: none;
            background: #E9551C;
            color: #fff;
            padding: 12px;
            text-align: center;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .left a:hover {
            background: #F0A570;
        }

        .right {
            background: linear-gradient(135deg, #E9551C, #F0A570);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .right h2 {
            font-size: 26px;
            margin-bottom: 15px;
        }

        .right p {
            font-size: 16px;
            margin-bottom: 25px;
        }

        .right button {
            background: #8FC8D4;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            color: #fff;
            transition: 0.3s;
        }

        .right button:hover {
            background: #F4D7C5;
            color: #E9551C;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>Bem-vindo</h1>
            <a href="{{ route('login.custom') }}">Entrar</a>
            <a href="{{ route('register.custom') }}">Cadastrar</a>
        </div>
        <div class="right">
            <h2>Olá, amigo!</h2>
            <p>Registre-se com seus dados para entar no nosso site </p>
        </div>
    </div>
</body>
</html>