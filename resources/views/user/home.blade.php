@extends('layouts.master-user')

@section('scripts')
<script src="{{asset('js/progress.js')}}"></script>
@endsection

@section('content')

<a href="#"><h1>Profitez de notre dernier produit imprimé</h1></a>
<div id="main-video">
    <span class="cube">
        <div class="glowing-cube">
            <div class="glowing-cube-top"></div>
            <div>
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
            </div>
        </div>
        <h3 class="progress-text"> <span>0</span></h3>
    </span>
    <video autoplay muted loop>
        <source src={{asset('videos/eolienne-de-fou.mp4')}} type="video/mp4" >
    </video>
    {{-- <img src="{{asset('gifs/main.gif')}}" alt="" width="50%"> --}}
    <span class="cube">
        <div class="glowing-cube">
            <div class="glowing-cube-top"></div>
            <div>
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
            </div>
        </div>
        <h3 class="progress-text"><span>0</span></h3>
    </span>
</div>

<article id="avantages-article">
    <h3>POURQUOI 3DFDM ?</h3>
    <div id="avantages">
        <div class="avantage">
            <img src="https://xometry.eu/wp-content/uploads/2021/03/circle.svg" alt="">
            <h2>RECYCLABLE</h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate blandit suscipit. Suspendisse potenti. Nullam interdum eget tortor et tincidunt. Sed id vulputate arcu. Maecenas dignissim, nulla vel sollicitudin pharetra, enim metus ultrices diam, id dapibus augue leo ut nibh.</p> --}}
        </div>
        <div class="avantage">
            <img src="https://xometry.eu/wp-content/uploads/2020/05/icon-industries-logistics-rocket.svg" alt="">
            <h2>POSSIBILITÉS INFINIES</h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate blandit suscipit. Suspendisse potenti. Nullam interdum eget tortor et tincidunt. Sed id vulputate arcu. Maecenas dignissim, nulla vel sollicitudin pharetra, enim metus ultrices diam, id dapibus augue leo ut nibh.</p> --}}
        </div>
        <div class="avantage">
            <img src="https://xometry.eu/wp-content/uploads/2021/03/custom-finish.svg" alt="">
            <h2>ÉCO-RESPONSABLE</h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate blandit suscipit. Suspendisse potenti. Nullam interdum eget tortor et tincidunt. Sed id vulputate arcu. Maecenas dignissim, nulla vel sollicitudin pharetra, enim metus ultrices diam, id dapibus augue leo ut nibh.</p> --}}
        </div>
        <div class="avantage">
            <img src="https://xometry.eu/wp-content/uploads/2021/03/calipers-black.svg" alt="">
            <h2>SUR MESURE</h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate blandit suscipit. Suspendisse potenti. Nullam interdum eget tortor et tincidunt. Sed id vulputate arcu. Maecenas dignissim, nulla vel sollicitudin pharetra, enim metus ultrices diam, id dapibus augue leo ut nibh.</p> --}}
        </div>
        <div id="apropos">
            <a href="{{url('apropos')}}">EN APPRENDRE PLUS</a>
        </div>
    </div>
</article>

<article id="space-product-article">
    <h3>Maquette de fusée à monter</h3>
    <h6> ̶1̶2̶0̶€̶  &nbsp 90€</h6>
    <a href="{{url('/product')}}">DÉCOUVRIR</a>
    <img src="{{asset('images/fusee.png')}}" alt="">

</article>

<article id="produits-phares-article">
    <h3 id="produits-phares-titre">Produits du moment</h3>
    <div id="produits-phares">
        {{-- @foreach ($bestProducts as $bestProduct)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach --}}
        <div id="produit-phare">
            <img src="https://images.cults3d.com/L4OXmVyI_9NYv2pUqb3R-F-MYtg=/516x516/https://files.cults3d.com/uploaders/14859826/illustration-file/ad0d0cb2-702b-40bc-b47e-65f182b2d191/ariane5_01.jpg#1" alt="">
            <h3>Super produit</h3>
            <div id="price">33 €</div>
            <a href="#" id="buy">Ajouter au panier</a>
        </div>
        <div id="produit-phare">
            <img src="https://images.cults3d.com/L4OXmVyI_9NYv2pUqb3R-F-MYtg=/516x516/https://files.cults3d.com/uploaders/14859826/illustration-file/ad0d0cb2-702b-40bc-b47e-65f182b2d191/ariane5_01.jpg#1" alt="">
            <h3>Super produit</h3>
            <div id="price">33 €</div>
            <a href="#" id="buy">Ajouter au panier</a>
        </div>
        <div id="produit-phare">
            <img src="https://images.cults3d.com/L4OXmVyI_9NYv2pUqb3R-F-MYtg=/516x516/https://files.cults3d.com/uploaders/14859826/illustration-file/ad0d0cb2-702b-40bc-b47e-65f182b2d191/ariane5_01.jpg#1" alt="">
            <h3>Super produit</h3>
            <div id="price">33 €</div>
            <a href="#" id="buy">Ajouter au panier</a>
        </div>
        <div id="produit-phare">
            <img src="https://images.cults3d.com/L4OXmVyI_9NYv2pUqb3R-F-MYtg=/516x516/https://files.cults3d.com/uploaders/14859826/illustration-file/ad0d0cb2-702b-40bc-b47e-65f182b2d191/ariane5_01.jpg#1" alt="">
            <h3>Super produit</h3>
            <div id="price">33 €</div>
            <a href="#" id="buy">Ajouter au panier</a>
        </div>
    </div>

</article>

{{-- <footer>
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
</footer> --}}

<script>
    
</script>

@endsection