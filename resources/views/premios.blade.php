<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="container">

      <div class="row">

        <div class="col">
            <div class="card text-white text-center p-3" style="background-color:#1826c4">
      <blockquote class="blockquote mb-0">
        <p>Suma iuniPoints y renova tu poliza gratis.</p>
      </blockquote>
            </div>
        </div>

    </div>
<br>

<form class="" action="" method="post">
  @csrf
    <div class="row">
      <div class="col">

      <h4> Tu primer premio.</h4>
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary">
          <input type="radio" name="premio1" id="p1o1" value="TRATAMIENTO-CERA" autocomplete="off" checked> TRATAMIENTO CERA
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="premio1" id="p1o2" value="KIT-BALIZAS-CHALECO" autocomplete="off"> KIT BALIZAS Y CHALECO
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="premio1" id="p1o3" value="GIFT-CARD-AIRBNB" autocomplete="off"> GIFT CARD AIRBNB
        </label>
      </div>
  </div>

    </div>

    <div class="row">
      <div class="col">
      <h4> Tu segundo premio.</h4>
<div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary">
    <input type="radio" name="premio2" id="p2o1" value="ALINEACION-BALANCEO" autocomplete="off" checked> REJUV NEUMATICOS Y ALINEACION
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="premio2" id="p2o2" value="BONIFICACION-PATENTE" autocomplete="off"> BONIFICACION PATENTE POR 6 MESES
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="premio2" id="p2o3" value="VALIJA-CARRY-ON" autocomplete="off"> VALIJA CARRY ON
  </label>
</div>
  </div>

    </div>

    <div class="row">
      <div class="col">

      <h4> Tu tercer premio.</h4>
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary">
          <input type="radio" name="premio3" id="p3o1" value="WHISKEY-CARISIMO" autocomplete="off" checked> WHISKEY CARISIMO
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="premio3" id="p3o2" value="MEET-AND-GREET" autocomplete="off"> MEET AND GREET CHAYANNE Y RICKY MARTIN
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="premio3" id="p3o3" value="FINDE-EN-GRIFFYNDOR" autocomplete="off"> FINDE EN LA TORRE DE GRIFFYNDOR
        </label>
      </div>
  </div>

    </div>

    <div class="row">
      <div class="col">

      <h4> Tu GRAN premio.</h4>
      <div class="btn-group btn-group-toggle" style="width:100%" data-toggle="buttons">
        <label class="btn btn-secondary ">
          <input type="radio" name="premio4" id="poliza" value="POLIZA-POR-UN-ANO" autocomplete="off" checked> POLIZA GRATUITA
        </label>
        <label class="btn btn-secondary ">
          <input type="radio" name="premio4" id="viaje" value="VIAJE-A-BAHAMAS" autocomplete="off" checked> VIAJE A BAHAMAS
        </label>
      </div>
      </div>
  </div> <br>
  <div class="d-flex justify-content-center">

      <button class="btn text-white" type="submit" name="button" style="background-color: #1826c4">EMPECEMOS</button>

  </div>
</form>
<br>
  <div class="card text-center">

  <div class="card-body">
    <h5 class="card-title" style="color: #1826c4">¿Como sumo puntos?</h5>
    <p class="card-text">Todos los meses con el pago de la cuota de tu seguro sumas 100 puntos.</p>
    <p>Ademas, cada vez que ahorres con nuestros beneficios SUMAS!</p>
  </div>
</div>

    </div>












    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
