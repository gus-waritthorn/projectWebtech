<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MS|Contact Us</title>

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

   <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


  <link rel="icon" href="http://icons.iconarchive.com/icons/icons8/windows-8/512/Music-Piano-icon.png">
 <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/style-contact.css') }}">
</head>
<body>
	 @include('layouts._navbar')

      <div class="container">
      <div class="row">
      	<section id="contact">
      <div class="section-content">
        <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
        <h3>We're happy to answer any questions you have or privde you with an estimate.Just send us a message in form below with any questions you may have.</h3>
      </div>
      <div class="contact-section">
      <div class="">
        <form>
          <div class="col-md-6 form-line">
              <div class="form-group">
                <label for="exampleInputUsername">Your name</label>
                <input type="text" class="form-control" id="" placeholder=" Enter Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
              </div>
              <div class="form-group">
                <label for="subject"> Subject</label>
                <input type="text" class="form-control" id="subject" placeholder=" Enter Your Subject">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for ="description"> Message</label>
                <textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
              </div>
              <div>

                <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
              </div>

          </div>
        </form>
      </div>
    </section>
    </div>
    <div class="row">
      <div class="col-md-12">
            <h1 class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s" style="text-align: center;font-size: 60px;margin-bottom:5rem; "> OUR TEAM</h1>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ">
          <h2 style="text-align: center;font-family: 'Oleo Script', cursive;">Pongparit Paocharoen</h2>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <h2 style="text-align: center;font-family: 'Oleo Script', cursive;">Waritthorn Viriyamontree</h2>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4 ">
          <h2 style="text-align: center;font-family: 'Oleo Script', cursive;">Sirasith Kitthaweesinpoon</h2>
        </div><!-- /.col-lg-4 -->

    </div>
    <div class="row">

    <div class="col-lg-4 col-md-offset-2">
          <h2 style="text-align: center;font-family: 'Oleo Script', cursive;">Kamonwut Chittrarat</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2 style="text-align: center;font-family: 'Oleo Script', cursive;">Thiparphan Jiravachruangkul</h2>
        </div><!-- /.col-lg-4 -->
    </div>
        @include('layouts._footer')
    </div>


</body>
</html>
