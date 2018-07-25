@extends('layouts.app')

<!-- Welcome page contain Pagination of all the published posts -->

@section('content')
                                <div class="content has-text-centered">
                                    <nav class="pagination" >

                                        <ul class="pagination-list">
                                            {{-- Pagination Elements --}}
                                            @foreach ($paginator as $element)
                                                <li class="pagination-list is-current">
                                                <div class="blog-post">
                                                    <h3 class="blog-post-title">{{ $element->title }}</h3>
                                                    <p class="blog-post-meta"> 
                                                       em {{$element->created_at->toFormattedDateString()}} por {{ $element->user->name }}
                                                    </p>
                                                    <p>
                                                        {{ $element->description }}
                                                    </p>

                                                </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                        
                                    </nav>
                                    
                                </div>

                                <hr/>

                                <p class="row">
                                    <div class="columns is-vcentered">
                                        <div class="column is-3"></div>
                                        @if ($paginator->onFirstPage())
                                            <a class="pagination-previous" disabled>Previous</a>
                                        @else
                                            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-previous">Previous</a>
                                        @endif

                                        @if ($paginator->hasMorePages())
                                            <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
                                        @else
                                            <a class="pagination-next" disabled>Next page</a>
                                        @endif
                                    </div>
                                </p>
                               
@endsection
