@extends('layouts.sidebar')

@section('content')

<span class="text">Material</span>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">Material List</h4>
                    <div class="float-right">
                        <a href="{{route('material.create')}}" class="btn btn-primary">Add material</a>
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
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($materials as $material)
                                <tr>
                                    <td>{{$material->id}}</td>
                                    <td>{{$material->title}}</td>
                                    <td>{{$material->category->name}}</td>
                                    <td>{{$material->course->name}}</td>
                                  
                                   
                                    <td class="d-flex">
                                        <a href="{{route('material.edit',$material->id)}}" class="btn btn-warning mr-2">Edit</a>
                                        <form method="material" action="{{route('material.destroy',$material->id)}}">
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