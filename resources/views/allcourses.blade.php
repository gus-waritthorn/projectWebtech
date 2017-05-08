<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MS|Courses</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="icon" href="http://www.novelsol.com/wp-content/uploads/2014/12/flaticon-grad.png">
 <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/style-voucher.css') }}">
</head>
<body>
	 @include('layouts._navbar')

    @if (Auth::guest())
          <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 170px; margin:10% auto;">YOU NEED TO LOGIN TO YOUR ACCOUNT FIRST</h1>
    @else
      <div class="container">
      	<div class="row">
      		<div  style="background-color: orange;margin:0 auto; margin-top: 7rem;" >
      			<h1  style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;"> Courses</h1>
      		</div>
      	</div>
        <hr>
        <!-- Voucher -->

        @foreach ($courses as $course)
        <div class="col-lg-4 voucher">
              <div class="rounded-circle" style="background-color: #FF4081;margin:0 auto" >
              <img  class="rounded-circle" src="{{url("/img/course/{$course->path}")}}" >
              </div>
              <h2>{{ $course->name }}</h2>
              <p><a class="btn btn-warning" href="{{url("/courses/{$course->id}")}}" role="button">Detail</a></p>
            </div><!-- /.col-lg-4 -->

        @endforeach

      </div>
     @endif
     @include('layouts._footer')




</body>
<script>
  var courses = <?php echo $courses; ?>
</script>
</html>
