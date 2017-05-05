<!DOCTYPE html>
<html>
<head>
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

    <link rel="stylesheet" href="{{ URL::asset('css/style-index.css') }}">
<title>Music School</title>
</head>
<body>
    @include('layouts._navbar')
    <div class="container">
    <!-- Slideshow -->
        <div class="row" style="overflow: hidden" id="slide">           
            <div class="w3-container w3-display-container" >
                <img class="mySlides" src="http://pre04.deviantart.net/e844/th/pre/i/2013/108/4/c/guitar_wallpaper_1_by_giyuu-d626613.png">
                  <img class="mySlides" src="http://media.idownloadblog.com/wp-content/uploads/2015/06/iTunes-El-Capitan-Wallaper-iPad-By-Jason-Zigrino.png">
                  <img class="mySlides" src="https://s-media-cache-ak0.pinimg.com/originals/f4/15/de/f415de3a1780ae9c57e98e0c236c4e6e.jpg" >                  

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
          <img class="rounded-circle" src="https://image.freepik.com/free-vector/guitar-flat-silhouette_23-2147495877.jpg" >
          <h2>Guitar</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="rounded-circle" src="https://musicologielessons.com/wp-content/uploads/2014/09/1410658084_microphone_voice_record_radio_mic_speech_flat_icon_symbol-512.png">
          <h2>Singing</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <p class="float-right "><a href="#">See All</a></p>        
          <img class="rounded-circle" src="https://cdn4.iconfinder.com/data/icons/audio-and-video/512/piano_music_classical_instrument_opera_concert_flat_icon_symbol-512.png">
          <h2>Piano</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div> <!-- End Course -->     

      <hr>

      <!-- Hall of Fame -->
      <div class="row content">
      <div class="col-md-12">
        <img id="hall_of_fame" src="http://www.champchefs.com/images/hall_of_fame/hall_of_fame.jpg" >
      </div>
        <div class="col-lg-4">
          <iframe  src="https://www.youtube.com/embed/G4cJ4wviwS8"></iframe>
          <h2>Guitar</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>          
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <iframe  src="https://www.youtube.com/embed/4TrDsI56i24"></iframe>
          <h2>Singing</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>          
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">      
            <iframe  src="https://www.youtube.com/embed/NUdlh5NYx2o"></iframe>          
          <h2>Piano</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>          
        </div><!-- /.col-lg-4 -->
      </div> <!-- End Hall of fame -->     

      <hr>



      <!-- Teacher -->
      <div class="row content">
      <div class="col-md-12">
        <h1 style="font-family: 'Acme', sans-serif;text-align: center;font-size: 60px;"> Teacher</h1>
      </div>
        <div class="col-lg-4">        
          <img class="rounded-circle" src="https://cdn4.iconfinder.com/data/icons/user-avatar-flat-icons/512/User_Avatar-44-512.png">
          <h2>Mr.Test</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="rounded-circle" src="http://www.iconsfind.com/wp-content/uploads/2016/10/20161014_58006befd3376.png">
          <h2>Test2</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>        
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <p class="float-right "><a href="#">See All</a></p>
          <img class="rounded-circle" src="http://www.iconsfind.com/wp-content/uploads/2016/10/20161014_58006bf27a2d0.png">
          <h2>Mr.Test3</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>          
        </div><!-- /.col-lg-4 -->
      </div> <!-- End Teacher -->     
    

        @include('layouts._footer')
    </div>






<script type="text/javascript">
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
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