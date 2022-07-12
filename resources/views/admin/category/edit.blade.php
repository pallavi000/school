@extends('layouts.sidebar')

@section('content')

<span class="text">Category</span>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">Edit Category</h4>
                    <div class="float-right">
                        <a href="{{route('category.index')}}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
                <div class="card-body">

                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger"><b>Error </b> <?php echo $message; ?></div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success"><b>Success </b> <?php echo $message; ?></div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                    </div>
                    @endif
                    <form method="POST" action="{{route('category.update',$category->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                                <div class="col">
                                    <label class="col-form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}" required />
                                </div>
                        </div>
                        <button class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection