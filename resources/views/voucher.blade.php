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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="icon" href="http://icons.iconarchive.com/icons/icons8/windows-8/512/Music-Piano-icon.png">
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
					<h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px; margin:5% auto;">My Point</h1>
      		<div class="rounded-circle" style="background-color: orange;margin:0 auto; margin-top: 7rem;" >
      			<h1 id="my-point" style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;"> {{ Auth::user()->point }}</h1>
      		</div>
      	</div>
        <hr>
        <!-- Voucher -->
				<h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px; margin:5% auto;">Voucher</h1>
				<div class="col-lg-4 voucher">
					<div class="rounded-circle" style="background-color: #FF4081;margin:0 auto" >
						<h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px; ">-5%</h1>
					</div>
						<h2>100 Point</h2>
						<p><a class="btn btn-warning" id="btn0" href="#" role="button" onclick="redeemPoint(100,5); disableBtn(this); ">Redeem a Voucher</a></p>
				</div><!-- /.col-lg-4 -->

				<div class="col-lg-4">
					<div class="rounded-circle" style="background-color: #D500F9;margin:0 auto" >
						<h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;">-10%</h1>
					</div>
					<h2>300 Point</h2>
					<p><a class="btn btn-warning" id="btn1" href="#" role="button" onclick="redeemPoint(300,10); disableBtn(this.id);">Redeem a Voucher</a></p>
					</div><!-- /.col-lg-4 -->

					<div class="col-lg-4">
						<div class="rounded-circle" style="background-color: #00B0FF;margin:0 auto" >
							<h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;">-15%</h1>
						</div>
						<h2>500 Point</h2>
						<p><a class="btn btn-warning" id="btn2" href="#" role="button" onclick="redeemPoint(500,15); disableBtn(this.id);">Redeem a Voucher</a></p>
					</div><!-- /.col-lg-4 -->

					<div class="col-lg-4">
						<div class="rounded-circle" style="background-color: #FFC400;margin:0 auto" >
							<h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;">-30%</h1>
						</div>
						<h2>1000 Point</h2>
						<p><a class="btn btn-warning" id="btn3" href="#" role="button" onclick="redeemPoint(1000,30); disableBtn(this.id);">Redeem a Voucher</a></p>
					</div><!-- /.col-lg-4 -->

					<div class="col-lg-4">
						<div class="rounded-circle" style="background-color: #FF9100;margin:0 auto" >
							<h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;">-40%</h1>
						</div>
						<h2>2000 Point</h2>
						<p><a class="btn btn-warning" id="btn4" href="#" role="button" onclick="redeemPoint(2000,40); disableBtn(this.id);">Redeem a Voucher</a></p>
					</div><!-- /.col-lg-4 -->

				 	<div class="col-lg-4">
						<div class="rounded-circle" style="background-color:#FF3D00 ;margin:0 auto" >
							<h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 100px;vertical-align: middle;color: white;line-height: 250px;">-50%</h1>
						</div>
						<h2>2500 Point</h2>
						<p><a class="btn btn-warning" id="btn5" href="#" role="button" onclick="redeemPoint(2500,50); disableBtn(this.id);">Redeem a Voucher</a></p>
					</div><!-- /.col-lg-4 -->
					@include('layouts._popup-checkin')
					@include('layouts._footer')
				</div>
	  @endif

		<form id="formSubmit" action="updatePoint" method="post">
			<input type="hidden" id="updatePoint" name="updatePoint" value="">
			<input type="hidden" id="myEmail" name="myEmail" value="">
			<input type="hidden" id="vCode" name="vCode" value="">
			<input type="hidden" id="percent" name="percent" value="">
		</form>

		<script
			src="https://code.jquery.com/jquery-3.2.1.min.js"
			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			crossorigin="anonymous"></script>

		<script type="text/javascript">
			function genCode() {
				var text = "";
				var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

				for( var i=0; i < 16; i++ ){
					text += possible.charAt(Math.floor(Math.random() * possible.length));
				}
				return text;
			};

		 	function redeemPoint(usedPoint,percent){
			 var myEmail = "{{ Auth::user()->email }}";
			 var myPoint = {{ Auth::user()->point }};
			 myPoint -= usedPoint;
			 //myPoint = 10000;
			 if(myPoint < 0){
				 alert("points is not enough");
			 }
			 else{
				 var code = genCode();
				 alert(code);
				 console.log("point is enough");
				 document.getElementById('updatePoint').value = myPoint;
				 document.getElementById('myEmail').value = myEmail;
				 document.getElementById('vCode').value = code;
				 document.getElementById('percent').value = percent;
				 document.getElementById('formSubmit').submit();
				 console.log("already send data");

			 }
		 }


		</script>

</body>
</html>
