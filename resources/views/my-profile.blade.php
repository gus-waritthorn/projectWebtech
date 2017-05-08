<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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



    <link rel="stylesheet" href="{{ URL::asset('css/style-my-profile.css') }}">
<title>Music School</title>
</head>
<body>
    @include('layouts._navbar')
    <div class="container">
    @if (Auth::guest())
      <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 170px; margin:10% auto;">YOU NEED TO LOGIN TO YOUR ACCOUNT FIRST</h1>
    @else


  <div class="box">
  <div class="info-box">

    <form action="">
      <h2>Profile Information</h2>
      <div class="profile-pic-zone">
      <img class="profile-pic" src="{{ Auth::user()->pathimg }}" />
      <input class="file-upload" value="UPLOAD PICTURE" type="file" capture/>       
      </div>
      <label class="text-email"><h3>Email : {{ Auth::user()->email }}</h3></label>
      <br>
      <label><h3>First Name : <input type="text" value="{{ Auth::user()->fname }}" name="fname" placeholder="First Name" /></h3></label>
      <br>
      <label><h3>Last Name : <input type="text" value="{{ Auth::user()->lname }}" name="lname" placeholder="Last Name" /></h3></label>
      <br>
      <hr>
      <button  class="btn  btn-lg btn-info" id="btn-save">Save Profile Info</button>
    </form>

  </div>
  </div>
@endif

    </div>
    @include('layouts._footer')



<script type="text/javascript">
    $(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
                $('.profile-icon').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
    </script>

</body>
</html>
