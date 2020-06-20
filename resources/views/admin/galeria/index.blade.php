@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                         Galeria de Fotos

                            <a href="{{ url('adm/galeria/form') }}" class="btn btn-success btn-default pull-right">Adicionar Imagem</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th>Titulo</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($galeria as $gal)
                                    <tr>
                                        <td><img height="100" width="100" src="{{asset($gal->imagem)}}" alt=""></td>
                                        <td>{{ $gal->titulo }}</td>
                                        <td>
<<<<<<< HEAD
                                            <a href=""{{ url("admin/galeria/{$gal6->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger">Deletar</a>
=======
                                        <a href="{{ url("/admin/galeria/{$gal->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Quer mesmo deletar essa foto/" class="btn btn-xs btn-danger">Deletar</a>
>>>>>>> 5211173eec083c8e5eea0cd423c9630692fa9c09
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">Não encontrado</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
