@push('doc_end')
@include("publico.views.partials.conteudo-noticia")
@endpush
<!-- Noticias -->
<section class="page-section" id="noticias">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Notícias</h2>
        <h3 class="section-subheading text-muted">Confira abaixo as notícias e fique por dentro do dia a dia da Abapp.</h3>
      </div>
    </div>


    <div class="row row-cols-1 row-cols-md-3">
    @forelse ($posts as $post)
    <div class="'">
      <div class="col mb-4">
        <div class="card h-100">
        <img height="350" width="350" src="{{asset($post->imagem)}}" alt="Imagem do Post">
          <div class="card-body">
          <a href="{{ url("/publico/posts/{$post->id}") }}" class="btn btn-xs btn-success">
              <h5 class="card-title">
              {{ $post->title }}
              </h5>
            </a>
            <p class="card-text">{{ str_limit($post->body, 60) }}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Categoria: {{ $post->category->name }}</small>
          </div>
        </div>
      </div>

    </div>
    @empty
    <tr>
      <td colspan="5">Não encontrado</td>
    </tr>
    @endforelse
</section>