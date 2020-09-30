@extends('layouts.studentprofile')

@section('profile')

<style>

</style>

<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/Images/noimage.PNG"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                <p class="text-muted text-center">Student</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{Auth::user()->email}}</a>
                  </li>
                  <li class="list-group-item">

                    <b>Register On</b> <a class="float-right">{{date('Y-d-m',strtotime(Auth::user()->created_at))}}</a>
                  </li>
                </ul>
                @if(Auth::user()->is_enrolled)
                  @if($day != "")
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      Start Day {{$day}} Test
                    </button>
                  @endif
                @else
                <a href="#" class="btn btn-primary btn-block"><b>Enroll Now</b></a>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>N:B</strong>

                <p class="text-muted">
                  Students should notice that they can participate after they have enrolled for this test
                </p>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Timetable</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      
                      <!-- /.user-block -->
                      <div class="row mb-3">
                      <table  id="example1" class="table table-bordered table-striped">

                          <thead>
                            <tr>
                              <th>Day</th>
                              <th>Date</th>
                              <th>No Of Questions</th>
                              <th>Time</th>
                              <th>Point</th>
                            </tr>
                          </thead>
                          <tbody>
                          <tr>
                                <td>1</td>
                                <td>15-11-2020</td>
                                <td>10</td>
                                <td>5mins</td>
                                <td>1</td>
                            </tr>
                            
                                <td>2</td>
                                <td>16-11-2020</td>
                                <td>10</td>
                                <td>5mins</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>17-11-2020</td>
                                <td>10</td>
                                <td>5mins</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>18-11-2020</td>
                                <td>10</td>
                                <td>5mins</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>19-11-2020</td>
                                <td>10</td>
                                <td>5mins</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>20-11-2020</td>
                                <td>10</td>
                                <td>5mins</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>21-11-2020</td>
                                <td>10</td>
                                <td>5mins</td>
                                <td>1</td>
                            </tr>
                            <tr>
                          </tbody>

                          </table>
                        
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <table  id="example1" class="table table-bordered table-striped">

                             <thead>
                                <tr>
                                  <th>Day</th>
                                  <th>Date</th>
                                  <th>No Of Questions</th>
                                  <th>Time</th>
                                  <th>Point</th>
                                </tr>
                              </thead>
                              <tbody>
                              <tr>
                                    <td>1</td>
                                    <td>15-11-2020</td>
                                    <td>10</td>
                                    <td>5mins</td>
                                    <td>1</td>
                                </tr>
                                
                                    <td>2</td>
                                    <td>16-11-2020</td>
                                    <td>10</td>
                                    <td>5mins</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>17-11-2020</td>
                                    <td>10</td>
                                    <td>5mins</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>18-11-2020</td>
                                    <td>10</td>
                                    <td>5mins</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>19-11-2020</td>
                                    <td>10</td>
                                    <td>5mins</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>20-11-2020</td>
                                    <td>10</td>
                                    <td>5mins</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>21-11-2020</td>
                                    <td>10</td>
                                    <td>5mins</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                              </tbody>

                        </table>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLongTitle">Star Light Exams</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>You have 5 mins to answer a total of 10 questions</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="question" type="button" class="btn btn-primary">Start</a>
      </div>
    </div>
  </div>
</div>
@endsection
