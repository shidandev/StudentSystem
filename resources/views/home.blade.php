@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-6 text-center">
            <img src="image/logo.jpg" class="rounded-circle " style="max-height: 150px;max-width: 150px;">
        </div>
        <div class="col-6 text-center">
            <label class="h1">Welcome {{ Auth::user()->name }}</label>
            <div class="h3">
                Position :
            </div>
        </div>
    </div>
    <div class="row text-center mt-3">
        <div class="col-4">
            <button class="btn btn-outline-dark  btn-block stud_list_btn">
                <i class="fas fa-users"></i>
                Student List
            </button>
        </div>
        <div class="col-4">
            <button class="btn btn-outline-success btn-block course_list_btn">
                <i class="fa fa-graduation-cap"></i>
                Course List
            </button>
        </div>
        <div class="col-4">
            <button class="btn btn-outline-primary btn-block task_list_btn">
                Task List
            </button>
        </div>
    </div>
</div>


@endsection 
@section('script')
<script>
    $(document).ready(function() {
        alert("hahaha");
    });
</script>
@endsection