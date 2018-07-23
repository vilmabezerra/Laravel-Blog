@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criar Postagem</div>

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
		            {!! Form::open(['route' => ['post.store']]) !!}
                        @include('dashboard._form_create')
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>

@endsection
