@extends('home.master')

@section('title', 'Post Details Page')

@section('body')
<!-- services section start -->
<div class="services_section layout_padding bg-secondary-subtle">
    <div class="container">
        <h1 class="services_taital text-center!important">Blog Posts </h1>
        <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
        <div class="services_section_2">
            <div class="row">

                <div class="offset-2 col-md-8" >
                    <div><img src="{{ asset($post->image) }}" class="services_img"></div>
                    <h2 class="text-center"><b>{{ $post->title }}</b></h2>
                    <h4>{{ $post->description }}</h4>
                    <p style="color:black!impotant">Post By : <b>{{ $post->name }}</b></p>
                    <div class="btn_main"><a href="{{ url('post_details',$post->id) }}">Read Mode</a></div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- services section end -->
@endsection
