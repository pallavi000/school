@extends('layouts.sidebar')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<span class="text">Material</span>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">Add New Material</h4>
                    <div class="float-right">
                        <a href="{{route('material.index')}}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
                <div class="card-body">

                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger"><b>Error </b>
                        <?php echo $message; ?>
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success"><b>Success </b>
                        <?php echo $message; ?>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </div>
                    @endif


                    <form method="POST" action="{{route('material.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <div class="col">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{old('title')}}" required />
                                </div> 
                        </div>
                        <div class="form-group">
                                <div class="col">
                                    <label class="col-form-label">Course</label>
                                    <select class="form-control" name="course_id">
                                        @foreach ($courses as $course)
                                            <option value="{{$course->id}}" @if(old('course_id')==$course->id)selected @endif>{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                </div> 
                        </div>

                        <div class="form-group">
                            <div class="col">
                                <label class="col-form-label">Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" @if(old('category_id')==$category->id)selected @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div> 
                    </div>
                        <div class="form-group">
                            <label class="col-form-label" >File</label>
                            <input type="file" name="file"/>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
  $('#summernote').summernote({
    height:200,
  });
});
</script>
@endsection