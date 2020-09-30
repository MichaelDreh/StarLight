<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <style>
            .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            }
            .button5 {border-radius: 50%;}
    </style>
</head>
<body>
<div class="container" style="font-size:0.6em">
  <div class="row" style="padding : 10px;">
    <div class="col-sm-8 col-sm-offset-2" style="padding-top : 40px;">
        <h4>Star Light Tutorial</h4>
        <p>We prepare students for academic exellence </p>
    </div>
    <div class="col-sm-2">
        <p>For Complaint or any error call 09039654954 or email us @starlight@gmail.com</p>
        <img height="60" width="60" src="/Images/noimage.PNG" />
    </div>
  </div>
  <h4 class="text-center">Dear, {{Auth::user()->name}} </h4>
</div>
@if(count($questions) > 0)
<div class="row justify-content-center" style="background-color : #009999;color : white">
        <div class="col-md-12">          
        <button class="button button5 float-right" id="time">02:00</button>

            <div  style="padding-left : 100px;padding-top : 20px;" >  
                <form method="POST" name="question" id="question" action="/day_one">
                @csrf
                @foreach($questions as $que)

                    <div class="panel">
                        <div class="panel-body">
                        <div class="list-group">
                        <h4>{{$que->id}}){{$que->question}}   </h4>
                        <p style="padding : 2px;"><input type="radio" name="question{{$que->id}}" value="{{$que->option_a}}">{{$que->option_a}}</p>
                        <p style="padding : 2px;"><input type="radio" name="question{{$que->id}}" value="{{$que->option_b}}">{{$que->option_b}}</p>
                        <p style="padding : 2px;"><input type="radio" name="question{{$que->id}}" value="{{$que->option_c}}">{{$que->option_c}}</p>
                        <p style="padding : 2px;"><input type="radio" name="question{{$que->id}}" value="{{$que->option_d}}">{{$que->option_d}}</p>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    <input type="submit" value="Finish" class="btn btn-info" />
                </form>
        </div>
 </div>
 @else
            </div>
                <h3 class="text-center">No Exam Schedulled For Today</h3>                 
            </div>
 @endif 
</body>
</html>

<script>
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration ;
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 2,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>

