@extends('layouts.sidebar')

@section('content')

<span class="text">Category</span>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">Category List</h4>
                    <div class="float-right">
                        <a href="{{route('category.create')}}" class="btn btn-primary">Add Category</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible "><b>Error </b>
                        <?php echo $message; ?>
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible"><b>Success </b>
                        <?php echo $message; ?>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                   
                                    <td class="d-flex">
                                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning mr-2">Edit</a>
                                        <form method="POST" action="{{route('category.destroy',$category->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection