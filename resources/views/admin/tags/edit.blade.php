@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            Editar Tag

                            <a href="{{ url('admin/tags') }}" class="btn btn-default pull-right">Voltar</a>
                        </h4>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($tag, ['method' => 'PUT', 'url' => "/admin/tags/{$tag->id}", 'class' => 'form-horizontal', 'role' => 'form']) !!}

                            @include('admin.tags._form')

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Salvar
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
