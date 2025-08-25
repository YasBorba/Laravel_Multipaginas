<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
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
            width: 850px;
            max-width: 95%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .form-section, .info-section {
            flex: 1;
            padding: 50px 40px;
        }

        /* Formulário */
        .form-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-section h2 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #E9551C;
        }

        .form-section form {
            display: flex;
            flex-direction: column;
        }

        .form-section input {
            margin: 10px 0;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
        }

        .form-section input:focus {
            border-color: #8FC8D4;
            box-shadow: 0 0 5px #8FC8D4;
        }

        .form-section button {
            margin-top: 15px;
            background: #E9551C;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .form-section button:hover {
            background: #F0A570;
        }

        .form-section a {
            margin-top: 15px;
            text-decoration: none;
            color: #8FC8D4;
            font-weight: bold;
            text-align: center;
            transition: 0.3s;
        }

        .form-section a:hover {
            color: #E9551C;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 95%;
            }
            .form-section, .info-section {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Lado esquerdo: Login -->
        <div class="form-section">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <input name="email" type="email" placeholder="Email" required>
                <input name="password" type="password" placeholder="Senha" required>
                <button type="submit">Entrar</button>
            </form>
            <a href="{{ route('password.request') }}">Esqueci a senha</a>
        </div>
</body>
</html>