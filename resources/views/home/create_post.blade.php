@extends('home.master')

@section('title', 'Create Post Page')


@section('body')
<section class="py-5 bg-secondary-subtle">
    <div class="container py-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    @include('sweetalert::alert')
                    <div class="card-header text-center"><h1>Add Post</h1></div>
                    <div class="card-body">
                        <p class="text-center text-danger">

                        </p>
                        <form action="{{ url('user_post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-md-3">Post Title</label>
                                <div class="col-md-9">
                                    <input type="text" id="title" class="form-control" name="title" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-md-3">Post Description</label>
                                <div class="col-md-9">
                                   <textarea name="description" id="description" class="form-control" placeholder="Description Here"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-md-3">Add Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" id="image" class="form-control-file">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9 d-grid">
                                    <input type="submit" value="Create Post Now" />
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

