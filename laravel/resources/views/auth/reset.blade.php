<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <h2>Redefinir senha</h2>
        <form method="POST" action="{{ route('password.request') }}">
            @csrf
            <input name="email" type="email" placeholder="Email" required>
            <input name="password" type="password" placeholder="Nova senha" required>
            <input name="password_confirmation" type="password" placeholder="Confirmar senha" required>
            <button type="submit">Atualizar senha</button>
        </form>

    </body>
</html>
