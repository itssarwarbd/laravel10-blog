@extends('home.master')

@section('title','Blog Post Page')


@section('body')
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Blog Posts </h1>
        <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
        <div class="services_section_2">
            <div class="row">
                @foreach ($posts as $post)

                <div class="col-md-4">
                    <div><img src="{{ asset($post->image) }}" class="services_img"></div>
                    <h2 class="text-center">{{ $post->title }}</h2>
                    <p style="color:black!impotant">Post By : <b>{{ $post->name }}</b></p>
                    <div class="btn_main"><a href="{{ url('post_details',$post->id) }}">Read Mode</a></div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
