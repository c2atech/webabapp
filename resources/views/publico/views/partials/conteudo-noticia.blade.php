@include("publico.views.shared.navigation")

<link href="{{'css/app.css'}}" rel="stylesheet" type="text/css">
 <!-- Noticia 1 -->
 <div class="portfolio-modal modal fade" id="noticia1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
         
          <div class="container">
            <div class="row">
              
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">
                   {{$post->titulo}}
                  </h2>
                  <img class="img-fluid d-block mx-auto" src="{{asset($post->imagem)}}" alt="">
                  <p>{{$post->body}} </p>
                  <ul class="list-inline">
                  <li>Criado em {{$post->created_at}}</li>
                  <li>Categoria: Esportivo</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{mix('js/app.js')}}"></script>