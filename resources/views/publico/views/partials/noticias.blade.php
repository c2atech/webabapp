@push('doc_end')

<!-- Noticias -->
<section class="page-section" id="noticias">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Notícias</h2>
        <h3 class="section-subheading text-muted">Confira abaixo as notícias e fique por dentro do dia a dia da Abapp.</h3>
      </div>
    </div>

    <div class="row">
      @forelse ($posts as $post)
      <div class="col mb-4 col-sm-10 col-md-6 col-lg-4">
        <img src="{{asset($post->imagem)}}" width="350" height="200">

      </div>
      <div class="col-sm-10 col-md-6 col-lg-8 ">
        <h5 class="section-heading text-uppercase">{{ $post->title }}</h5>
        <p class="section-subheading text-muted">{{str_limit($post->body, 150)}}</p>

        <div class="mb-4">
          <a href="{{ url("/conteudo/posts/{$post->id}") }}" class="btn btn-primary btn-md" role="button">Saiba mais</a>
        </div>

      </div>
      @empty
    </div>
    @endforelse


  </div>


</section>