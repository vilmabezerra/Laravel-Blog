@extends('layouts.app')

<!-- Home page - available to logged users only-->
@section('content')

            <div class="card">
                <div class="card-header">Dashboard</div>

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

                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <a href="post/create" class="btn btn-secondary">Criar Postagem</a>
                            </p>
                            <p>
                                <a href="post" class="btn btn-secondary">Visualizar Minhas Postagem</a>
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
                                
                                
                            
@endsection
