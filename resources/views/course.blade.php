<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MS|My Course</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="icon" href="http://icons.iconarchive.com/icons/icons8/windows-8/512/Music-Piano-icon.png">
 <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/style-mycourse.css') }}">
</head>
<body>
     @include('layouts._navbar')

    @if (Auth::guest())
          <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 170px; margin:10% auto;">YOU NEED TO LOGIN TO YOUR ACCOUNT FIRST</h1>
    @else
      <div class="container">
        <div class="row">
            <div  style="background-color: orange;margin:0 auto; margin-top: 7rem;text-align: center;" >
                <img class="rounded-circle" src="{{url("/img/course/{$course[0]->path}")}}" >
                <h1 id="my-course" style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;"> {{ $course[0]->name }}</h1>
                <h3 style="font-family: 'Acme', sans-serif;text-align: center;color: white;">Level : {{ $course[0]->level }}</h3>
                <h3 style="font-family: 'Acme', sans-serif;text-align: center;color: white;">Study : {{ $course[0]->numday }} Days per Month</h3>
                <h3 style="font-family: 'Acme', sans-serif;text-align: center;color: white;">Price : {{ $course[0]->price }} Baht.</h3>
            </div>
        </div>
        <hr>


        @include('layouts._popup-checkin')
        @include('layouts._footer')
      </div>
     @endif




</body>
<script>
  var course = <?php echo $course; ?>;
</script>
</html>
