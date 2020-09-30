@extends('layouts.admin')

@section('admin')

<div class="card">
              <div class="card-header">
                <h3 class="card-title  float-right"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">Add Question</button></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Day</th>
                    <th>Question</th>
                    <th>Option_a</th>
                    <th>Option_b</th>
                    <th>Option_c</th>
                    <th>Option_d</th>
                    <th>Answer</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    @foreach($questions as $que)

                    <tr>
                        <td>{{$que->day}}</td>
                        <td>{{$que->question}}</td>
                        <td>{{$que->option_a}}
                        </td>
                        <td>{{$que->option_b}}</td>
                        <td>{{$que->option_c}}</td>
                        <td>{{$que->option_d}}</td>
                        <td>{{$que->correct_answer}}</td>
                        <td><a href="/admin/{{$que->id}}/edit"><button class="btn btn-info btn-sm">Edit</button></a>
                     </tr>

                    @endforeach

                  </tbody>

                </table>
                <div class="modal fade" id="modal-primary" style="font-size:0.8em;">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header  bg-primary">
                            <h4 class="modal-title">Add Question</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="form-group" method="POST" action="{{route('admin.store')}}">
                                @csrf
                                <input type="hidden" name="_method" value="post" />
                                    <div class="row">
                                        <div class="col-sm-2">
                                             <label>Day</label>
                                        </div>
                                        <div class="col-sm-9" >
                                             <select name="day" class="form-control">
                                                <option value="">-----</option>
                                                <option value="1">Day 1</option>
                                                <option value="2">Day 2</option>
                                                <option value="3">Day 3</option>
                                                <option value="4">Day 4</option>
                                                <option value="5">Day 5</option>
                                                <option value="6">Day 6</option>
                                                <option value="7">Day 7</option>
                                             </select><br/>
                                        </div>
                                    </div>


                                    <input type="hidden" name="_method" value="post" />
                                    <div class="row">
                                        <div class="col-sm-2">
                                             <label>Question</label>
                                        </div>
                                        <div class="col-sm-10" >
                                             <textarea name="question" class="form-control"></textarea><br/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2">
                                             <label>Option_A</label>
                                        </div>
                                        <div class="col-sm-9" >
                                             <input type="text" name="option_a" class="form-control" /> <br/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2">
                                             <label>Option_B</label>
                                        </div>
                                        <div class="col-sm-10" >
                                             <input type="text" name="option_b" class="form-control" /><br/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2">
                                             <label>Option_C</label>
                                        </div>
                                        <div class="col-sm-9" >
                                             <input type="text" name="option_c" class="form-control" /><br/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2">
                                             <label>Option_D</label>
                                        </div>
                                        <div class="col-sm-10" >
                                             <input type="text" name="option_d" class="form-control" /><br/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2">
                                             <label>Correct Answer</label>
                                        </div>
                                        <div class="col-sm-8" >
                                             <input type="text" name="correct_answer" class="form-control" /><br />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2">
                                             <label>Schedulled Day</label>
                                        </div>
                                        <div class="col-sm-8" >
                                             <input type="date" name="s_day" class="form-control" /><br />
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-outline-light float-right" value="Save Question">
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                        </div>
                    <!-- /.modal-dialog -->
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

@endsection

