<ul class="nav navbar-nav">
    <li><a href="{{ url('admin/posts') }}">Postagens</a></li>
    <li><a href="{{ url('admin/categories') }}">Categorias</a></li>
    <li><a href="{{ url('admin/tags') }}">Tags</a></li>
    <li><a href="{{ url('adm/galeria') }}">Galeria</a></li>

    @if (Auth::user()->is_admin)
        <li><a href="{{ url('admin/users') }}">Usuários</a></li>
    @endif
</ul>
