<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resetar senha</title>
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
                    display: flex;
                    flex-direction: column;
                }

                input {
                    margin: 10px 0;
                    padding: 12px;
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    font-size: 15px;
                    outline: none;
                    transition: 0.3s;
                }

                input:focus {
                    border-color: #8FC8D4;
                    box-shadow: 0 0 5px #8FC8D4;
                }

                button {
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
                <h2>Redefinir senha</h2>
                <form method="POST" action="{{ route('password.request') }}">
                    @csrf
                    <input name="email" type="email" placeholder="Email" required>
                    <input name="password" type="password" placeholder="Nova senha" required>
                    <input name="password_confirmation" type="password" placeholder="Confirmar senha" required>
                    <button type="submit">Atualizar senha</button>
                </form>
            </div>
        </body>
</html>
