@extends('admin.master')


@section('title', 'Update Post Page')

@section('body')
<section class="py-5 bg-secondary-subtle">
    <div class="container py-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div><p class="text-center text-danger">{{session('message')}}</p></div>
                    <div class="card-header text-center"><h1>Update Post</h1></div>
                    <div class="card-body">
                        <p class="text-center text-danger">

                        </p>
                        <form action="{{ url('update_post',$post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-md-3">Update Title</label>
                                <div class="col-md-9">
                                    <input type="text" id="title" value="{{ $post->title }}" class="form-control" name="title" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-md-3">Update Description</label>
                                <div class="col-md-9">
                                   <textarea name="description" id="description" class="form-control" placeholder="Description Here">{{ $post->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-md-3">Update Old Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" id="image" class="form-control-file">
                                    <img src="{{ asset($post->image) }}" alt="" width="100" height="80">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9 d-grid">
                                    <input type="submit" class="btn btn-danger" value="Update Post Now" />
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
