@extends('user.layouts.app')


<header class="masthead" style="background-image: url({{Storage::disk('local')->url($post->image)}})">>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>{{$post->title}}</h1>
                    <span class="subheading">{{$post->subtitle}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

 {{-- main content --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="content col-md-10 col-lg-10">
                <small>Created at {{ $post->created_at->diffForHumans()}}</small>
                {{-- show categories --}}
                @foreach ($post->categories as $category)
                    <a href="{{ route('category', $category) }}" class="text-white">
                    <small class="pull-right bg-dark text-white" style="margin-right: 20px; border-radius: 5px; padding: 5px;">
                        {{ $category->name}}    
                    </small> </a> 
                @endforeach
                {!! htmlspecialchars_decode($post->body) !!}
                {{-- show tags --}}
                <h3>Tag clouds</h3>
                @foreach ($post->tags as $tag)
                    <small class="pull-left bg-dark text-white" style="margin-right:20px; border-radius:5px; padding: 5px;">
                        <a href="{{ route('tag', $tag) }}" class="text-white"> {{ $tag->name}} </a>     
                    </small> 
                @endforeach
            </div>
        </div>
    </div>
@endsection

