<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/css/datos.css">
    <title></title>
  </head>
  <body>
      <div style="background-color: #f3f3f4" >
      <div class="container">
            <form action="" method="post">
              @csrf
              <div class="form-group">
              <span class="border-primary">
                <label for="nombre_auto"><p style=" color: #1826c4; font-weight: bold" >¿Nombre de tu Auto?</p></label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre_auto" placeholder="Ej: el Iúniguito">
                </span>
              </div>

              <div class="form-group">
                      <label for="ult_vtv"><p style=" color: #1826c4; font-weight: bold" >¿Fecha de la última VTV?</p></label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="ult_vtv" placeholder="dd/mm/aaaa">
                    </div>

               <div class="form-group">
                          <label for="ult_aceite"><p style=" color: #1826c4; font-weight: bold" >¿Fecha del último cambio de aceite?</p></label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="ult_aceite" placeholder="dd/mm/aaaa">
                        </div>
                        <div class="form-group">
                          <label for=""><p style=" color: #1826c4; font-weight: bold" >¿Fecha del último cambio de Filtro (Aire/Nafta)?</p></label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="" placeholder="dd/mm/aaaa">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1"><p style=" color: #1826c4; font-weight: bold" >¿Próximas vacaciones?</p></label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="dd/mm/aaaa">
                        </div>
              <div class="form-group">
                          <label for="venc_licencia"><p style=" color: #1826c4; font-weight: bold" >¿Cuando vence tu licencia?</p></label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="venc_licencia" placeholder="dd/mm/aaaa">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">NO AHORA</button>
                    <button type="submit" class="btn btn-outline-primary">ACEPTAR</button>
            </form>


</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
