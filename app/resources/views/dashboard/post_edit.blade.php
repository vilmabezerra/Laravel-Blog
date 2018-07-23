@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Postagem</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
		            {!! Form::open(['method' => 'patch', 'route' => ['post.update', $post->id]]) !!}
                        @include('dashboard._form_edit')
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>

@endsection