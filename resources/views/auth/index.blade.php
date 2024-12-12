<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Accueil Banque</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <nav>
        <div class="navbar">
                <ul>
                    <li><a href="acceuil.php" class="active" >Accueil</a></li>
                    <li><a href="apropos.php">A propos</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </ div>
    </nav>
    <div class="text">
        <h1>
            Bienvenue sur FM banque !
        </h1>
        <p>
            FM Banque est une institution financière de confiance, <br>dédiée à offrir des services bancaires sûrs et efficaces à ses clients. <br>
            Avec notre engagement envers l'excellence et l'innovation,<br> nous nous efforçons de fournir des solutions <br>
            financières adaptées aux besoins individuels de chaque client.
         </p>
        <a href="{{route('login')}}" class="btn">Se connecter</a>
    </div>
    <div class="Img">
        <div class="cercle">
            <span></span>
            <span></ span>
            <div class=" image">
                <img src="im1.jpg" alt="">
            </div>
        </div>
    </div>
    <footer>
        Ghost2024@gmail.com
    </footer>
</body>
 </html>
