@extends('layouts.app')

@section('content')
                                
                                    <nav class="pagination" style="position: relative">

                                        <ul class="pagination-list">
                                            {{-- Pagination Elements --}}
                                            @foreach ($paginator as $element)
                                                <li class="pagination-list is-current">
                                                <div class="blog-post">
                                                    <h3 class="blog-post-title">{{ $element->title }}</h3>
                                                    <p class="blog-post-meta"> 
                                                       em {{$element->created_at->toFormattedDateString()}}
                                                    </p>
                                                    <p>
                                                        {{ $element->description }}
                                                    </p>

                                                </div>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <p style="position: fixed; bottom: 0; width:100%; text-align: center">
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
                                        </p>
                                    </nav>
                               
@endsection
