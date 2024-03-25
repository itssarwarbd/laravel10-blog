@extends('home.master')

@section('title', 'Update Post Page')


@section('body')
<section class="py-5 bg-secondary-subtle">
    <div class="container py-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    @include('sweetalert::alert')
                    <div class="card-header text-center"><h1>Update Post Page</h1></div>
                    <div class="card-body">
                        <p class="text-center text-danger">

                        </p>
                        <form action="{{ url('update_post_data',$post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-md-3">Post Title</label>
                                <div class="col-md-9">
                                    <input type="text" id="title" value="{{ $post->title }}" class="form-control" name="title" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-md-3">Post Description</label>
                                <div class="col-md-9">
                                   <textarea name="description" id="description" class="form-control" placeholder="Description Here">{{ $post->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-md-3">Uploade Image</label>
                                <div class="col-md-9">
                                    <img src="{{ asset($post->image) }}" alt="" width="100" height="100">
                                    <input type="file" name="image" id="image" class="form-control-file">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9 d-grid">
                                    <input type="submit" value="Update Post Now" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
