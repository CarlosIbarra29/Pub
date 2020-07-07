@extends('layout.principal')

@section('contenct')




<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('pub/ElPubRollingsStone.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('pub/BoxElPubPinkFloyd.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('pub/BoxElPubInstitucional.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="jumbotron jumbotron-fluid jumbotron_uno">
  <div class="container">
    <div class="row">
     <div class="col-sm-6 ">
       <h3 class="titulos">NUESTRAS NOCHES</h3>
       <hr>
        <p class="text-justify " style="color: black;">
         La mejor experiencia es compartir buena música y un buen trago con amigos. En El Pub puedes encontrar el mejor ambiente para celebrar un cumpleaños o solamente por «El gusto y la vergüenza»
       </p>
     </div>
     <div class="col-md-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-xs-2" data-toggle="modal" data-target="#modal">
            <a href="#lightbox" data-slide-to="0"><img src="{{ asset('pub/02.jpg') }}" class="img-thumbnail my-3"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-2" data-toggle="modal" data-target="#modal">
            <a href="#lightbox" data-slide-to="1"><img src="{{ asset('pub/03.jpg') }}" class="img-thumbnail my-3"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-2" data-toggle="modal" data-target="#modal">
            <a href="#lightbox" data-slide-to="2"><img src="{{ asset('pub/04.jpg') }}" class="img-thumbnail my-3"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-2" data-toggle="modal" data-target="#modal">
            <a href="#lightbox" data-slide-to="3"><img src="{{ asset('pub/05.jpg') }}" class="img-thumbnail my-3"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-2" data-toggle="modal" data-target="#modal">
            <a href="#lightbox" data-slide-to="4"><img src="{{ asset('pub/06.jpg') }}" class="img-thumbnail my-3"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-2" data-toggle="modal" data-target="#modal">
            <a href="#lightbox" data-slide-to="5"><img src="{{ asset('pub/07.jpg') }}" class="img-thumbnail my-3"></a>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">

                <ol class="carousel-indicators">

                  <li data-target="#lightbox" data-slide-to="0"></li>
                  <li data-target="#lightbox" data-slide-to="1"></li>
                  <li data-target="#lightbox" data-slide-to="2"></li>
                  <li data-target="#lightbox" data-slide-to="3"></li>
                  <li data-target="#lightbox" data-slide-to="4"></li>
                  <li data-target="#lightbox" data-slide-to="5"></li>

                </ol>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('pub/02_.jpg') }}"  class="w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('pub/03_.jpg') }}"  class="w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('pub/04_.jpg') }}"  class="w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('pub/05_.jpg') }}"  class="w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('pub/06_.jpg') }}"  class="w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('pub/07_.jpg') }}"  class="w-100" alt="">
                  </div>
                </div>

                <a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron jumbotron-fluid jumbotron_ritual">
  <div class="container">
    <div class="row">
     <div class="col-sm-6 ">
      <h3 class="titulos">EL RITUAL</h3>
       <hr style="background-color: color: #a19171;">
       <p class="text-justify " style="color: #fff">
         Tenemos una costumbre, le llamamos el ritual, porque es algo que nos ha funcionado durante algún tiempo, hasta podríamos decirles que esto de alguna manera es lo que le dió inicio a El Pub. No importa como haya estado tu día, siempre la mejor manera de terminarlo es con una buena cerveza y rock.
       </p>
     </div>
     <div class="col-sm-6 ">
     </div>
   </div>
 </div>
</div>


<div class="container-fluid">



  <div class="card-group">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">MENÚ INFANTIL</h5>
        <p class="card-text">Los más pequeños también son tenidos en cuanta con nuestro menú especial para que también puedan disfrutar de un rato de diversión junto con sus familiares..</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="{{ asset('pub/FastFoodKids.jpg') }}" alt="Card image cap">
    </div>
  </div>

  <div class="card-group">
    <div class="card">
      <img class="card-img-top" src="{{ asset('pub/cumple.jpg') }}" alt="Card image cap">
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CELEBRA TU CUMPLEAÑOS</h5>
        <p class="card-text">Puedes festejar con nosotros. Haz tu reserva, elige un combo y celebra con quien quieras tu día especial. Esta promo solo es válida para el día de tu cumpleaños presentando tu INE.</p>
      </div>
    </div>
  </div>

  <div class="card-group">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">MÚSICA EN VIVO</h5>
        <p class="card-text">Somos fanáticos de la música en vivo y es por eso que algunos fines de semana traemos los mejores solistas o bandas en vivo para que disfruten de las mejores noches con amigos.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="{{ asset('pub/bandas.jpg') }}" alt="Card image cap">
    </div>
  </div>


</div>







@endsection


