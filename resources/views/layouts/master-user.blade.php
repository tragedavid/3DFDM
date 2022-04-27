<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "3D FDM"}}</title>
    <link rel="stylesheet" href="{{asset('css/main.css?debug='.mt_rand(0,100000000))}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" />
    @yield('links')
</head>
<body>
    <header>
        <img src="{{asset('images/logo.png')}}" alt="logo" width="100px" height="100px">
        <nav>
            <ul>
                <li><a href="{{url('/')}}">Accueil</a></li>
                <li><a href="{{url('/products')}}">Produits</a></li>
                <li><a href="{{url('/apropos')}}">A propos</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                <li><a href="{{url('/panier')}}"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="col">
            <img src="{{asset('images/logo.png')}}" alt="" width="100px" height="100px">
            <a href="#">Localisation des centres de production</a>
            <a href="#">Soumettre une idée</a>
        </div>
        <div class="col">
            <h3>A PROPOS DE NOUS</h3>
            <a href="#">A propos du groupe 3DFDM</a>
            <a href="#">Actualités</a>
            <a href="#">Durabilité</a>
            <a href="#">Déclaration de transparence de la chaîne logistique</a>
            <a href="#">Certification produit 3DFDM</a>
            <a href="#">Offres d'emploi</a>
        </div>
        <div class="col">
            <h3>AIDE</h3>
            <a href="#">Contactez-nous</a>
            <a href="#">Rappels de produit</a>
            <a href="#">Pièces manquantes</a>
            <a href="#">Expédition et retours</a>
            <a href="#">Modes de paiement</a>
            <a href="#">Conditions générales</a>
        </div>
        <div class="col">
            <h3>DOCUMENTATION</h3>
            <a href="#">Instructions de montage</a>
            <a href="#">Catalogues des produits et assemblages</a>
            <a href="#">Tutoriels vidéo</a>
            <a href="#">Signaler une erreur</a>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>