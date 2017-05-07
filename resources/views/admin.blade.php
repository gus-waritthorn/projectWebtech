<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/style-admin.css') }}">
	<title>Admin</title>
</head>
<body>
 	@include('layouts._navbar')
	<div class="container">
			 <div class="col-md-3" id="col-btn">
				<button class="button" data-popup-open="popup-1" id= "att" style="vertical-align:middle;background-color: #F57F17;"><span>Generate Code</span></button>

			 	<button class="button" data-toggle-open="toggle-addcourse" style="vertical-align:middle;background-color: #F9A825;"><span>Add Course </span></button>

			 	<button class="button" data-toggle-open="toggle-createcourse" style="vertical-align:middle;background-color: #FBC02D;" ><span>Create Course </span></button>

			 	<button class="button" data-toggle-open="toggle-updatepromo" style="vertical-align:middle;background-color: #FFD740;"><span>Update Promotion </span></button>
			 	<button class="button" data-toggle-open="toggle-upvideo" style="vertical-align:middle;background-color: #FDD835;" ><span>Up Link Youtube</span></button>
			 	<button class="button" data-toggle-open="toggle-addteacher" style="vertical-align:middle;background-color: #FFEB3B;"><span>Update Teacher</span></button>
			 </div>

		<!-- toggle box -->
		<div class="col-md-8" id="col-toggle-box">
			@include('layouts._addcourse-box')
		    @include('layouts._createcourse-box')
		    @include('layouts._updatepromo-box')
		    @include('layouts._upyoutube-box')
		    @include('layouts._addteacher-box')
		</div> <!-- End toggle box -->

		@include('layouts._popup-gencode')


	</div>


	<script type="text/javascript">
		$(function() {
		//----- OPEN
			$('[data-popup-open]').on('click', function(e)  {
				var targeted_popup_class = jQuery(this).attr('data-popup-open');
				$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

				e.preventDefault();
			});

			//----- CLOSE
			$('[data-popup-close]').on('click', function(e)  {
				var targeted_popup_class = jQuery(this).attr('data-popup-close');
				$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

				e.preventDefault();
			});


			// toggle
			$('[data-toggle-open]').on('click', function(e)  {
				var targeted_toggle_class = jQuery(this).attr('data-toggle-open');
				if($('[data-toggle="' + targeted_toggle_class + '"]').is(':visible')){
					$(".toggle").fadeOut('slow');
				}
				else{
					$(".toggle").fadeOut('slow');
					$('[data-toggle="' + targeted_toggle_class + '"]').fadeIn('slow');
				}
			});

			//show course pic
			var readURLcourse = function(input) {
    	 	   if (input.files && input.files[0]) {
            	var reader = new FileReader();
        	    reader.onload = function (e) {
                	$('.sample-course-pic').attr('src', e.target.result);
            	}
            	reader.readAsDataURL(input.files[0]);
        	}
    	  }
			 $(".course-pic").on('change', function(){
       			 readURLcourse(this);
    		});

			//show ex. new promo img
			var readURLpromo = function(input) {
     	   if (input.files && input.files[0]) {
            	var reader = new FileReader();
        	    reader.onload = function (e) {
                	$('.sample-promo').attr('src', e.target.result);
            	}
            	reader.readAsDataURL(input.files[0]);
        	}
    	  }
			 $(".new-promo").on('change', function(){
       			 readURLpromo(this);
    		});

			// show ex. new video
			 $("#show-sample-video").on('click', function(){
       			 $('.sample-video').attr('src', $('.new-video').val());
    		});

			 // show teacher pictuer
			 var readURLteacher = function(input) {
     	   if (input.files && input.files[0]) {
            	var reader = new FileReader();
        	    reader.onload = function (e) {
                	$('.sample-teacher-pic').attr('src', e.target.result);
            	}
            	reader.readAsDataURL(input.files[0]);
        	}
    	  }
			 $(".teacher-pic").on('change', function(){
       			 readURLteacher(this);
    		});

		});
	</script>

	{{-- script vue.js  --}}
	<script>
		var vm = new Vue({
			el: '#popup_gencode',
			data: {

			},
			methods: {
				clickGenBtn: function() {
					alert(this.genCode());
				},
				genCode: function() {
					var text = "";
    				var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    				for( var i=0; i < 5; i++ )
        				text += possible.charAt(Math.floor(Math.random() * possible.length));
    				return text;
				}
			}
		});
	</script>
</body>
</html>
