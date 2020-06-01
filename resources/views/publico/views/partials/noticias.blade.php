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

    <div class="row row-cols-1 row-cols-md-2">
    @forelse ($posts as $post)

  <div class="col mb-4 ">
  <img src="{{asset($post->imagem)}}" width="500" alt="...">
  </div>

  <div class="col mb-4 ">
  <h4 class="section-heading text-uppercase">  {{ $post->title }}</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.

  </p>
  
       
   <div>
  <a href="#" class="btn btn-primary btn-md"  role="button" >Ver mais ..</a>
  </div>
  

  </div>
  @empty
 
  
</div>

      @endforelse

  </div>


</section>