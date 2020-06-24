<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABAPP - Associação Beneficente Amor Pelo Próximo</title>
  <link href="{{'/css/app.css'}}" rel="stylesheet" type="text/css">
</head>

<body>

  <!-- Just an image -->
  <nav class="navbar  " id="navbarResponsive" style="background-color: #212529;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/assoc/ABAPP.png" width="30" height="30" alt="">
      </a>
      
    <a class="nav-link js-scroll-trigger" href="{{url('/')}}">Voltar</a>
    </div>

  </nav>


  <!-- Noticia 1 -->
  <div>
    <div>
      <div>
        <div>
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase" style="text-align: center;">
                  {{$post->title}}
                </h2>
                <img width="700" height="430" src="{{asset($post->imagem)}}" alt="">
                <hr>
                <p>{{$post->body}} </p>
                <ul class="list-inline">
                  <li>Criado em: <span class="item-intro text-muted">{{$post->created_at}}</span></li>
                  <li>Categoria: <span class="item-intro text-muted">"chamar no banco de dados a categoria"</span></li>
                  <li>Autor: <span class="item-intro text-muted">"chamar no banco de dados o autor"</span></li>
                </ul>
                <button class="btn btn-primary btn-sm" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  <a href="{{url('/')}}" style="color:black;">Fechar</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{mix('js/app.js')}}"></script>
</body>

</html>