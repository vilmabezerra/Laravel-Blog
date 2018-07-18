@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Minhas Postagens</div>

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
                            <h6>Total: {{$counter}}</h6>
                                @foreach ($posts as $element)
                                    <div class="blog-post">
                                        <!--Post's Top line-->
                                        <hr/>

                                        <div class="m-t-10"></div>

                                        <!--Title-->
                                        <h3 class="blog-post-title">{{ $element->title }}</h3>

                                        <!--Creation date and Body-->
                                        <p class="blog-post-meta"> 
                                             em {{$element->created_at->toFormattedDateString()}}
                                        </p>
                                        <p>
                                            {{ $element->description }}
                                        </p>

                                        <!-- Edit and Delete Buttons -->
                                        <p>
                                            <a href="post/{{$element->id}}/edit" class="btn btn-primary">Editar</a>


                                            {{ Form::open(['method' => 'delete', 'route' => ['post.destroy', $element->id]]) }}
                                                {{ Form::hidden('id', $element->id) }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}

                                        </p>
                                    </div>

                                @endforeach
                        </div>
                    </div> 
                </div>
            </div>
   
@endsection