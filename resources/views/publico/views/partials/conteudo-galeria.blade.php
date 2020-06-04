@include("publico.views.shared.navigation")

<link href="{{'css/app.css'}}" rel="stylesheet" type="text/css">
<!-- Services -->


<div class="container">]

@forelse ($galeria as $gal)
<div class="row text-center">
  <div class="card-deck" width="100px">

    <div class="card mb-4" >
      <!--  img-fluid dentro da class da imagem para ficar responsivo-->
      <a href="{{asset($gal->imagem)}}" class="d-block mb-4 h-100">
        <img height="300" width="300" class="img-fluid img-thumbnail" src="{{asset($gal->imagem)}}" alt="imagem">
        <div class="card-body">
          <h6 class="section-heading text-uppercase">Entrega de cestas básicas</h6>
          <a href="#" class="card-text"><small class="text-muted"></small></a>
        </div>
    </div>
    <!-- /.container -->
    @empty
    <tr>
      <td colspan="5">Não encontrado</td>
    </tr>
    @endforelse
    </div> </div> </div>
    <script src="{{mix('js/app.js')}}"></script>