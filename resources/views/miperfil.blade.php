<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
@include('nav')
<form class="" action="/miperfil/editar" method="post">
@csrf
    <ul class="list-group text">
      <li class="list-group-item">Tu auto: <p class="font-weight-bolder" style="color: #1826c4">{{$nombreAuto}}</p></li>
      <li class="list-group-item">Tus Iúnipuntos: <div class="font-weight-bolder">{{$puntos}}</div></li>
    </ul>
    <ul class="list-group">
      <h5 class="text-center m-2">Estás participando por:</h5>
      <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Primer premio: {{$premio1}}
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                        <form>
                                <div class="form-row align-items-center">
                                  <div class="col-auto my-1">
                                    <label class="mr-sm-2 sr-only" for="premio1">Preference</label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="premio1">
                                      <option selected>Opciones: </option>
                                      <option value="TRATAMIENTO-CERA">Tratamiento Cera</option>
                                      <option value="KIT-BALIZAS-CHALECO">Kit Balizas y Chaleco</option>
                                      <option value="GIFT-CARD-AIRBNB">GIFT CARD AIRBNB</option>
                                    </select>
                                  </div>
                                  <div class="col-auto my-1">
                                    <button type="submit" class="btn btn-primary">EDITAR</button>
                                  </div>
                                </div>
                              </form>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Segundo premio: {{$premio2}}
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                        <form>
                                <div class="form-row align-items-center">
                                  <div class="col-auto my-1">
                                    <label class="mr-sm-2 sr-only" for="premio2">Preference</label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="premio2">
                                      <option selected>Opciones: </option>
                                      <option value="ALINEACION-BALANCEO">Alineación y Balanceo</option>
                                      <option value="BONIFICACION-PATENTE"> Bonificacion Patente por 6 meses</option>
                                      <option value="VALIJA-CARRY-ON">Valija Carry on</option>
                                    </select>
                                  </div>
                                  <div class="col-auto my-1">
                                    <button type="submit" class="btn btn-primary">EDITAR</button>
                                  </div>
                                </div>
                              </form>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header text-decoration-none" id="headingThree">
                <h2 class="mb-0 text-decoration-none" style="text-decoration: none">
                  <button class="btn btn-link collapsed " type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Tercer premio: {{$premio3}}
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                        <form>
                                <div class="form-row align-items-center">
                                  <div class="col-auto my-1">
                                    <label class="mr-sm-2 sr-only" for="premio3">Preference</label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="premio3">
                                      <option selected>Opciones: </option>
                                      <option value="WHISKEY-CARISIMO">Whiskey Carisimo</option>
                                      <option value="MEET-AND-GREET">Meet and Greet with Chayanne y Ricky Martin</option>
                                      <option value="FINDE-EN-GRIFFYNDOR">Finde en la Torre de Griffyndor</option>
                                    </select>
                                  </div>
                                  <div class="col-auto my-1">
                                    <button type="submit" class="btn btn-primary">EDITAR</button>
                                  </div>
                                </div>
                              </form>
                </div>
                </div>
              </div>

            </div>
          </div>
          <div class="card">
                <div class="card-header ml-3">
                    Gran premio: {{$premio4}}
                 </div>

                </div>
    </ul>

  </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
