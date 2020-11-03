<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Disparo de E-mail</title>
</head>
<body  background="{{ asset('image/ilustracao-demonstrando-boneco-enviando-email.jpeg') }}" bgproperties="fixed">
<form class="form-group">
    <div class="card text-center" style="width: 50rem; margin-left: 270px; margin-top: 110px;">
      <div class="card-header">
        <h3>Disparo de E-mail</h3>
      </div>
      <div class="card-body">
        <div>
            <div class="form-group col-7" style="margin-left: 165px;">
                <label for="exampleFormControlInput1">Endereço de E-mail do Destinatário<span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group col-5" style="margin-left: 230px;">
                <label for="exampleFormControlInput1">Assunto<span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Assunto">
            </div>
            <div class="form-group col-5" style="margin-left: 230px;">
                <label for="exampleFormControlInput1">Messagem<span class="text-danger">*</span></label>
                <textarea rows="5"class="form-control"></textarea>
            </div>
        </div>
      </div>
      <div class="card-footer text-muted">
      <a href="#" class="btn btn-primary">Enviar E-mail</a>
      </div>
    </div>
</form>
</body>
<srcipt src="{{ asset('css/app.css') }}"></srcipt>
</html>
