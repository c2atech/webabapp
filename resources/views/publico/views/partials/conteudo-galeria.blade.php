
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABAPP - Associação Beneficente Amor Pelo Próximo</title>
  <link href="{{'/css/app.css'}}" rel="stylesheet" type="text/css">
</head>
<body >
  
<!-- Just an image -->
<nav class="navbar " id="navbarResponsive" style="background-color: #212529;">
<div class="navbar-galeria container">
  <a class="navbar-brand "  href="#">
    <img src="/assoc/ABAPP.png" width="30" height="30" alt="">
  </a>

  <a class="nav-link js-scroll-trigger" href="{{url('/')}}">Voltar</a>
  </div>
</nav>


<link href="{{'/css/galeria.css'}}" rel="stylesheet" type="text/css">
<!-- Services -->
<div class="row">
      @forelse ($galeria as $gal)
      <div class="card-foto">
      <a href="{{asset($gal->imagem)}}">
        <img src="{{asset($gal->imagem)}}"></a>
        <span> <p class="section-heading text-uppercase">{{ $gal->titulo }}</p></span>
      </div>
      @empty
  
  
    @endforelse  </div>  

    