<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <style>
        .error-message {
            color: #483D8B;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2> Gestion de Comptes Bancaires</h2>
        <form action="{{ route('handlogin') }}" method="post" id="myform">
            @csrf
            <input type="text" name="identifiant" placeholder="Identifiant"  required id="login">
            <input type="password" name="password" placeholder="Mot de passe" required id="passwd">
            <div class="error-message" id="error-message"><?= isset($error) ? $error : "" ?></div>
            @if (Session::get('error_msg'))
                    <div class="alert alert-danger">
                        <b style="font-size:15px; color: red;">{{ Session::get('error_msg') }}</b>
                    </div>
            @endif
            @if (Session::get('debug_info'))
                <div class="alert alert-warning">
                    <b>Debug Info:</b> {{ Session::get('debug_info') }}
                </div>
            @endif
            <input type="submit" id="envoyer" value="Se connecter">
        </form>
    </div>
    <script src="{{asset('js/login.js')}}"></script>

</body>
</html>
