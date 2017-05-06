<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MS|Voucher</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

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
      		<div class="rounded-circle" style="background-color: orange;margin:0 auto; margin-top: 7rem;" >
      			<h1 id="my-point" style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;"> {{ Auth::user()->point }}</h1>
      		</div>
      	</div>
        <hr>
        <!-- Voucher -->

    <div class="col-lg-4 voucher">
          <div class="rounded-circle" style="background-color: #FF4081;margin:0 auto" >
          <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px; ">-5%</h1>
          </div>
          <h2>100 Point</h2>
          <p><a class="btn btn-warning" href="#" role="button">Redeem a Voucher</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle" style="background-color: #D500F9;margin:0 auto" >
          <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;">-10%</h1>
          </div>
          <h2>300 Point</h2>
          <p><a class="btn btn-warning" href="#" role="button">Redeem a Voucher</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle" style="background-color: #00B0FF;margin:0 auto" >
          <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;">-15%</h1>
          </div>
          <h2>500 Point</h2>
          <p><a class="btn btn-warning" href="#" role="button">Redeem a Voucher</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle" style="background-color: #FFC400;margin:0 auto" >
          <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;">-30%</h1>
          </div>
          <h2>1000 Point</h2>
          <p><a class="btn btn-warning" href="#" role="button">Redeem a Voucher</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <div class="rounded-circle" style="background-color: #FF9100;margin:0 auto" >
          <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;">-40%</h1>
          </div>
          <h2>2000 Point</h2>
          <p><a class="btn btn-warning" href="#" role="button">Redeem a Voucher</a></p>
        </div><!-- /.col-lg-4 -->
    
     <div class="col-lg-4">
          <div class="rounded-circle" style="background-color:#FF3D00 ;margin:0 auto" >
          <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;">-50%</h1>
          </div>
          <h2>2500 Point</h2>
          <p><a class="btn btn-warning" href="#" role="button">Redeem a Voucher</a></p>
        </div><!-- /.col-lg-4 -->
        @include('layouts._footer')
      </div>
     @endif 
            
		

		
</body>
</html>