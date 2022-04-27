@extends('layouts.master-user')
@section('links')
    <link rel="stylesheet" href="{{asset('css/apropos.css?debug='.mt_rand(0,100000000))}}">
@endsection

@section('content')
    <h1>ÉTAPES DE FABRICATION</h1>

    <div class="bande">
        <img src="https://www.3dnatives.com/wp-content/uploads/CATIA.jpg" alt="">
        <div id="text">
            <h2>CONCEPTION</h2>
            <p>Suspendisse posuere tempor ligula, at tincidunt ligula. Aliquam nec erat vitae ex blandit vulputate. Quisque magna sapien, maximus eget nulla facilisis, convallis tempor velit. Donec id nunc nulla. Etiam et risus lorem. Nunc id luctus felis. Cras consequat diam eu porta pharetra. Integer maximus tristique facilisis. Aliquam erat volutpat. Quisque tincidunt tellus sed ligula euismod hendrerit. Vivamus scelerisque elit sit amet justo ornare, in volutpat massa lacinia. Morbi at venenatis nibh. Nullam suscipit ac nibh sollicitudin laoreet. Morbi et felis rhoncus, ornare risus ut, gravida nibh.</p>

        </div>
    </div>
    <div class="bande">
        <div id="text">
            <h2>IMPRESSION</h2>
            <p>Suspendisse posuere tempor ligula, at tincidunt ligula. Aliquam nec erat vitae ex blandit vulputate. Quisque magna sapien, maximus eget nulla facilisis, convallis tempor velit. Donec id nunc nulla. Etiam et risus lorem. Nunc id luctus felis. Cras consequat diam eu porta pharetra. Integer maximus tristique facilisis. Aliquam erat volutpat. Quisque tincidunt tellus sed ligula euismod hendrerit. Vivamus scelerisque elit sit amet justo ornare, in volutpat massa lacinia. Morbi at venenatis nibh. Nullam suscipit ac nibh sollicitudin laoreet. Morbi et felis rhoncus, ornare risus ut, gravida nibh.</p>

        </div>
        <img src="{{asset('images/print.jpg')}}" alt="">
    </div>
    <div class="bande">
        <img src="{{asset('images/shipping.png')}}" alt="">
        <div id="text">
            <h2>LIVRAISON</h2>
            <p>Suspendisse posuere tempor ligula, at tincidunt ligula. Aliquam nec erat vitae ex blandit vulputate. Quisque magna sapien, maximus eget nulla facilisis, convallis tempor velit. Donec id nunc nulla. Etiam et risus lorem. Nunc id luctus felis. Cras consequat diam eu porta pharetra. Integer maximus tristique facilisis. Aliquam erat volutpat. Quisque tincidunt tellus sed ligula euismod hendrerit. Vivamus scelerisque elit sit amet justo ornare, in volutpat massa lacinia. Morbi at venenatis nibh. Nullam suscipit ac nibh sollicitudin laoreet. Morbi et felis rhoncus, ornare risus ut, gravida nibh.</p>

        </div>
    </div>

    

@endsection