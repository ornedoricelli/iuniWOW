<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
  </head>
  <body>
    @include('nav')
      <div class="container-fluid pl-0 pr-0">
              <div class="card m-5">
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: {{$puntos*100/5000}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ceil($puntos*100/5000)}}%</div>
                  </div>
              </div>

                  <h1 class="text-center mb-5">{{$puntos}} <span class="badge badge-secondary">iúniPoints</span></h1>
                          <h4 class="bold title text-center">Bienvenido {{$nombreAuto}}</h4>
            <div class="card m-5 alert alert-warning" role="alert">
                  <p class="text-center">¡Hola soy una alerta, no estoy terminada!</p>
            </div>
            <h2 class="font-weight-bolder text-center" style="color:#1826c4">Experiencias WOW</h2>
            <div class="card m-5">

                        <div class="bd-example">
                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">

                                    <div class="carousel-item active" onclick="/eventos">
                                      <img src="/img/viajes.jpg" class="d-block w-100" alt="...">
                                      <div class="carousel-caption d-none d-md-block">
                                        <h5>Viajes</h5>
                                        <p>Destinos Increíbles.</p>
                                      </div>
                                    </div>


                                    <div class="carousel-item">
                                      <img  src="/img/testdrive.jpg" class="d-block w-100" alt="...">
                                      <div class="carousel-caption d-none d-md-block">
                                        <h5>Test Drive</h5>
                                        <p>Viví una experiencia diferente.</p>
                                      </div>
                                    </div>


                                    <div class="carousel-item">
                                      <img src="/img/teatrocolon.jpg" class="d-block w-100" alt="...">
                                      <div class="carousel-caption d-none d-md-block">
                                        <h5>Opera</h5>
                                        <p>Conocé una de las mejores salas del mundo.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                              </div>
                            <div>
                              <br>
                              <a href="/beneficios"class="btn btn-secondary btn-lg btn-block">Ver beneficios</a>
                              <a href="/eventos" class="btn btn-secondary btn-lg btn-block">Ver eventos</a>
                            </div>

</div>
            </div>



      </div>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
