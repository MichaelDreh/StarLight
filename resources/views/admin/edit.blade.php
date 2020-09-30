@extends('layouts.admin')

@section('admin')

<div class="col-sm-8 col-sm-offset-2">
    <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Question {{$question->id}} </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('admin.update',[$question->id])}}" method="POST">
                @csrf
                    <input type="hidden" name="_method" value="put" />
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Question Text</label>
                        <input type="text" name="question" class="form-control" value="{{$question->question}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Option A</label>
                        <input type="text" class="form-control" name="option_a" id="exampleInputPassword1" value="{{$question->option_a}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Option B</label>
                        <input type="text" class="form-control" name="option_b" id="exampleInputPassword1" value="{{$question->option_b}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Option C</label>
                        <input type="text" class="form-control" name="option_c" id="exampleInputPassword1" value="{{$question->option_c}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Option D</label>
                        <input type="text" class="form-control" name="option_d" id="exampleInputPassword1" value="{{$question->option_d}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Correct Answer</label>
                        <input type="text" class="form-control" name="correct_answer" id="exampleInputPassword1" value="{{$question->correct_answer}}">
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
    </div>
</div>

@endsection