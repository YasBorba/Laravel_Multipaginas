<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Logado</title>
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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #fff;
            border-radius: 20px;
            padding: 50px 40px;
            width: 500px;
            max-width: 95%;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #E9551C;
        }

        form {
            margin-top: 20px;
        }

        button {
            background: #E9551C;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #F0A570;
        }

        /* Responsivo */
        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }

            h2 {
                font-size: 22px;
            }

            button {
                width: 100%;
            }
        }
    </style>
        </head>
        <body>
            <div class="container">
                <h2>Estou logado!</h2>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Sair</button>
                </form>
            </div>
     </body>
</html>

