<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href=" {{asset('css/app.css')}} " />
</head>
<body>

        <div class="container col-sm-8 col-offset-2">

            @foreach($questions as $question)

                <h4>$question->question</h4>

                <h6>$question->answer_a</h6>
                <h6>$question->answer_b</h6>
                <h6>$question->answer_c</h6>
                <h6>$question->answer_d</h6>
            @endforeach

        </div>

</body>
</html>