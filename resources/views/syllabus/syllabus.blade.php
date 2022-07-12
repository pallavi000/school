@extends('layouts.syllabus.header')
@section('content')
<div class="row">
    <div class="col-md-2 syllabus-sidebar nav d-block nav-tabs" id="myTab" role="tablist">
        @foreach($courses as $course)
        <div class="form-group d-flex align-items-center course-url" id="sidebar-{{$course->id}}" data-toggle="tab"
            href="#tab-{{$course->id}}" role="tab" aria-controls="tab-{{$course->id}}" aria-selected="true">
            <i class="fa fa-chevron-right"></i>
            <div class="course-name">{{$course->name}}</div>
        </div>
        @endforeach
    </div>
    <div class="offset-md-2 col-md-10 tab-content" id="myTabContent">
        @foreach($courses as $course)

        @php
        $category_materials = array();
        foreach ($course->material as $element) {
            $category_materials[$element['category']['name']][] = $element;
        }
        
       

        @endphp

        <div class="syllabus-detail tab-pane fade" role="tabpanel" id="tab-{{$course->id}}"
            aria-labelledby="sidebar-{{$course->id}}">
            <div class="unit-title">{{$course->name}} : {{$course->title}}</div>
            <div class="card">
                <div class="card-body">
                    @foreach($category_materials as $category_name => $materials)

                    <div class="unit-category-section">
                        <div class="unit-category">{{$category_name}}</div>
                        @foreach ($materials as $material)

                        <div class="row unit-title-container">
                            <div class="unit-check">
                                @if($material->history)
                                <svg class="svg-inline--fa fa-check-circle fa-w-16 yes fa-lg check-svg" aria-hidden="true" data-prefix="fa" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>

                                @else
                                <svg class="svg-inline--fa fa-clock fa-w-16 due fa-lg clock-svg" aria-hidden="true" data-prefix="fa" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg>
                               @endif
                                    
                            
                                    
                            

                            </div>


                            <div class="unit-title"  data-toggle="modal" data-target="#modal-{{$material->id}}">{{$material->title}}</div>


<!-- Modal -->
<div class="modal fade" id="modal-{{$material->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content syllabus-modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$material->title}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-between align-items-center">
            <a href="{{route('download', $material->id)}}" class="btn btn-outline-secondary">Download</a>
            @if($material->history)
            <form action="{{route('history.destroy',$material->history->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class=" btn btn-outline-secondary">Mark as incomplete</button>
            </form>
            @else
            <a class="btn btn-outline-secondary" href="{{route('history.add',$material->id)}}">Mark as completed</a>
            @endif
          </div>
        </div>
      </div>
    </div>
</div>



                        </div>
                        @endforeach
                       
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>

<script>
    $('.course-url').on('click',function(){
        var val = $(this).attr('href')
       

        var url =window.location.pathname+"?"+val;
      document.location = url;
    })
    $(document).ready(function(){
        id = window.location.hash
        $(id).addClass('active show')
        if(!id){
            document.getElementsByClassName('syllabus-detail')[0].classList.add('active')
            document.getElementsByClassName('syllabus-detail')[0].classList.add('show')

        }
    })
</script>

@endsection