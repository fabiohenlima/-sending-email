<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Fá-Systems</title>
</head>
<body  background="https://image.freepik.com/vetores-gratis/fundo-futurista-de-tecnologia_52683-36380.jpg" bgproperties="fixed">
<form action="{{ route('disparity') }}" class="form-group" method="get">
  @csrf
    <div class="card text-center">
      <div class="card-header">
        <h3>E-mail Disparo, pela plataforma da empresa Fá-Systems</h3>
        
      </div>
      <div class="card-body">
      <hr>
        <p>{{ $texts }}</p>
      <hr>
      </div>
      <div class="card-footer text-muted">
          <h4>Fá-Systems</h4>
          <p>Email Enviado, em {{ $firedOn }}</p>
      </div>
    </div>
</form>
</body>
</html>
