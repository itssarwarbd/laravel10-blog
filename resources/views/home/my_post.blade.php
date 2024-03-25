@extends('home.master')

@section('title', 'My Post Page')

@section('body')

<style type="text/css">
.post_deg
{
    background-color: black;
    padding: 30px;
    text-align: center;
}
.title_deg{
    font-size: 30px;
    font-weight: bold;
    padding: 15px;
    color: white;
}
.dec_deg{
    font-size: 18px;
    font-weight: bold;
    padding: 15px;
    color: whitesmoke;
}
.img_deg{
    height: 200px;
    widows: 300px;
    padding: 30px;
    margin: auto;
}
</style>
@include('sweetalert::alert')
@foreach ($posts as $post)

<div class="post_deg">
    <img class="img_deg" src="{{ asset($post->image) }}" alt="">
    <h4 class="title_deg">{{ $post->title }}</h4>
    <p class="dec_deg">{{ $post->description }}</p>
    <a onclick="return confirm('Are you sure to delete this ?')" href="{{ url('my_post_del',$post->id) }}" class="btn btn-danger">Delete</a>
    <a href="{{ url('update_post_page',$post->id) }}" class="btn btn-success">Update</a>
</div>

@endforeach


@endsection
