<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Disparo de E-mail</title>
</head>

<body  background="{{ asset('image/ilustracao-demonstrando-boneco-enviando-email.jpeg') }}" bgproperties="fixed">
<form action="{{ route('disparity') }}" class="form-group" method="GET">
  @csrf
    <div class="card text-center" style="width: 50rem; margin-left: 270px; margin-top: 110px;">
      @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show">    
          <ul>
              <li>{{ session('success') }}</li>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </ul>
        </div>
    @endif
      <div class="card-header">
        <h3>Disparo de E-mail</h3>
      </div>
      <div class="card-body">
        <div>
            <div class="form-group col-7" style="margin-left: 165px;">
                <label for="exampleFormControlInput1">Endereço de E-mail do Destinatário<span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="recipient" placeholder="name@example.com" required>
            </div>
            <div class="form-group col-5" style="margin-left: 230px;">
                <label for="exampleFormControlInput1">Assunto<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="subject" placeholder="Assunto" required>
            </div>
            <div class="form-group col-5" style="margin-left: 230px;">
                <label for="exampleFormControlInput1">Messagem<span class="text-danger">*</span></label>
                <textarea rows="5"class="form-control" name="message" required></textarea>
            </div>
        </div>
      </div>
      <div class="card-footer text-muted">
          <button type="submit" class="btn btn-primary">Enviar E-mail</button>
      </div>
    </div>
</form>
</body>
<!-- <srcipt src="{{ asset('css/app.css') }}"></srcipt> -->
</html>
