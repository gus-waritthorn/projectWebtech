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

  <link rel="icon" href="http://icons.iconarchive.com/icons/icons8/windows-8/512/Music-Piano-icon.png">
 <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">



    <link rel="stylesheet" href="{{ URL::asset('css/style-index.css') }}">
<title>Music School</title>
</head>
<body>
    @include('layouts._navbar')
    <div class="container">
    <!-- Slideshow -->
        <div class="row" style="overflow: hidden" id="slide">
            <div class="w3-container w3-display-container" >
                <img id="img1" ondrag="dragging(event)" ondragend="dragend(event)" onmousedown="mousedown(event)" class="mySlides" src="{{url("/img/promo/{$promos[0]->path}")}}">
                  <img id="img2" ondrag="dragging(event)" ondragend="dragend(event)" onmousedown="mousedown(event)" class="mySlides" src="{{url("/img/promo/{$promos[1]->path}")}}">
                  <img id="img3" ondrag="dragging(event)" ondragend="dragend(event)" onmousedown="mousedown(event)" class="mySlides" src="{{url("/img/promo/{$promos[2]->path}")}}" >

                  <div class="w3-center w3-container w3-section w3-large w3-text-white      w3-display-bottommiddle" style="width:100%">
                    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
            </div>
        </div> <!-- End Slideshow -->


        <!-- Course -->
        <div class="row content">
        <div class="col-md-12">
            <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 60px;margin-bottom:5rem; "> Recommended Courses</h1>
        </div>
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{url("/img/course/{$courses[0]->path}")}}" >
          <h2>{{$courses[0]->name}}</h2>
          <p><a class="btn btn-secondary" href="{{url("/courses/{$courses[0]->id}")}}" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="rounded-circle" src="{{url("/img/course/{$courses[1]->path}")}}">
          <h2>{{$courses[1]->name}}</h2>
          <p><a class="btn btn-secondary" href="{{url("/courses/{$courses[0]->id}")}}" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <p class="float-right "><a href="{{ url('courses') }}">See All</a></p>
          <img class="rounded-circle" src="{{url("/img/course/{$courses[2]->path}")}}">
          <h2>{{$courses[2]->name}}</h2>
          <p><a class="btn btn-secondary" href="{{url("/courses/{$courses[0]->id}")}}" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div> <!-- End Course -->

      <hr>

      <!-- Hall of Fame -->
      <div class="row content">
      <div class="col-md-12">
        <img id="hall_of_fame" src="{{ URL::asset('img\res\index\hall_of_fame.png') }}" >
      </div>
      @foreach ($vdolinks as $vdo)
        <div class="col-lg-4">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe  src="{{url("{$vdo->path}")}}"></iframe>
          </div>
          <p></p>
        </div><!-- /.col-lg-4 -->
        @endforeach
      </div> <!-- End Hall of fame -->

      <hr>



      <!-- Teacher -->
      <div class="row content">
      <div class="col-md-12">
        <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 60px;"> Teacher</h1>
      </div>
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{url("/img/teacher/{$teachers[0]->path}")}}">
          <h2> {{$teachers[0]->name}} </h2>
          <p>{{$teachers[0]->description}} </p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="rounded-circle" src="{{url("/img/teacher/{$teachers[1]->path}")}}">
          <h2>{{$teachers[1]->name}} </h2>
              <p>{{$teachers[1]->description}}</p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="rounded-circle" src= "{{url("/img/teacher/{$teachers[2]->path}")}}">
          <h2>{{$teachers[2]->name}}</h2>
          <p>{{$teachers[2]->description}}</p>
        </div><!-- /.col-lg-4 -->
      </div> <!-- End Teacher -->



    </div>
    @include('layouts._footer')






<script type="text/javascript">
    var slideIndex = 1;
    showDivs(slideIndex);

    var promos = <?php echo $promos; ?>;
    var vdolinks = <?php echo $vdolinks; ?>;
    var courses = <?php echo $courses; ?>;

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }
    function dragging(event){
    var x = event.clientX;
    var y = event.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";
    document.getElementById("demo").innerHTML = coor;
    }
    function dragend(event){
      var x = event.clientX;
      detectDrag(x);
    }
    function detectDrag(xUp){
      var xLength = xUp-xDown;
        if( xLength >= 100){
          //Left slide will show
          showDivs(slideIndex -= 1);
        } else {
          //Right slide will show
          showDivs(slideIndex += 1);
        }
    }
    function mousedown(e){
      xDown = e.clientX;
    }
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
    }
</script>
</body>
</html>
