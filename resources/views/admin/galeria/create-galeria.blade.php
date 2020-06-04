@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading container">
                    <h2>
                        Adicionar Imagem

                        <a href="{{ url('admin/home') }}" class="btn btn-default pull-right">voltar</a>
                    </h2>
                </div>
                {!! Form::open(['url' => 'admin/galeria', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
                <div class="panel-body">
                    <div class="container form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
                        <div class="col-md-8">
                            <input type="file" class="form-control-file " id="exampleFormControlFile1" name="imagem">
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}"><br>
                        {!! Form::label('titulo', 'Titulo', ['class' => 'col-md-2 control-label']) !!}
                        <div class="col-md-8">
                            {!! Form::text('titulo', null, ['class' => 'form-control', 'required', 'autofocus']) !!}
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 mb-10">
                        <a href="{{ route('galeria.index') }}">
                            <button type="submit" class="btn btn-primary mb-8">
                                Adicionar
                            </button>
                        </a>
                    </div>
                </div>
            </div>


        </div>



        {!! Form::close() !!}
    </div>
</div>
</div>

</div>
</div>
@endsection