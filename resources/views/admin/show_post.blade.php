@extends('admin.master')

@section('title', 'Show Post')

@section('body')

<main>
    <div class="container-fluid px-4">
        <div class="mx-auto">
            <h1 class="mt-4">All Post Table</h1>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/post_page') }}">Add Post</a></li>
        </ol>
        @include('sweetalert::alert')
        {{-- <div><p class="text-center text-danger">{{session('message')}}</p></div> --}}
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Post By</th>
                            <th>Status</th>
                            <th>User Type</th>
                            <th>Image</th>
                            <th>Status Update</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Post By</th>
                            <th>Status</th>
                            <th>User Type</th>
                            <th>Image</th>
                            <th>Status Update</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->post_status }}</td>
                            <td>{{ $post->usertype }}</td>
                            <td><img src="{{ asset($post->image) }}" alt="" width="60" height="50"></td>

                            <td>
                                <a href="{{ url('accept_post',$post->id) }}" class="btn btn-warning btn-sm" onclick="return confirm('Are you sure this Changges')"><i class="fa-solid fa-square-check"></i></a>
                                <a href="{{ url('reject_post',$post->id) }}" class="btn btn-danger btn-sm" onclick="confirmation(event)"><i class="fa-solid fa-xmark-to-slot"></i></a>
                            </td>

                            <td>
                                <a href="{{ url('edit_post',$post->id) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('delete_post',$post->id) }}" class="btn btn-danger btn-sm" onclick="confirmation(event)">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
    function confirmation(ev)
    {
        ev.preventDefault();

        var urlToRedirect=ev.currentTarget.getAttribute('href');

        console.log(urlToRedirect);

        swal({
            title:"Are you sure to delete this?",
            text: "You won't be able to revert this delete",
            icon: "warning",
            buttons : true,
            dangerMode: true,
        })

        .then((willCancel)=>
        {
            if(willCancel)
            {
                window.location.href=urlToRedirect;
            }

        });
    }
</script>

@endsection
