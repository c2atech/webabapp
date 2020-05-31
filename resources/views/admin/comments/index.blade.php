@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                           Comentários

                            <a href="{{ url('admin/comments/create') }}" class="btn btn-default pull-right">Comentar</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Postagem </th>
                                    <th>Comentário</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->post->title }}</td>
                                        <td>{{ $comment->body }}</td>
                                        <td>
                                            <a href="{{ url("/admin/comments/{$comment->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger">Deletar</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">Nenhum comentário encontrado</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $comments->links() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
