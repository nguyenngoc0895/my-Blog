@extends('user.layouts.app')

@include('user.inc.header')

@section('content')
        <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {{-- show posts --}}
            @foreach ($posts as $post)
                <div class="post-preview">
                    <a href="{{ route('post', $post->slug) }}">
                        <h2 class="post-title">
                        {{ $post->title}}
                        </h2>
                        <h3 class="post-subtitle">
                        {{ $post->subtitle}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        {{ $post->created_at->diffForHumans() }}</p>
                        <i class="fas fa-thumbs-up"></i>
                </div>
            @endforeach
            {{-- show post --}}
            <hr>
            <!-- Pager -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item">{{ $posts->links() }}</li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
      </div>
    </div>
@endsection