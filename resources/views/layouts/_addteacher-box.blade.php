<!-- Add Teacher Info Box -->
		    <div  class="toggle" data-toggle="toggle-addteacher">
		    <div class="toggle-box">
					<h1>Update Teacher</h1>
					<hr>
					<form action="addteacher" method="post" >
					<div>
						<img class="sample-teacher-pic" src="https://placehold.it/150x150" width="150" height="150" style="border-radius: 50%;">

						<label>
							<h4 style="text-align: left;">Teacher Picture: <input class="teacher-pic"  type="file" name="teacher-pic" required></h4>
						</label>
						<label>
							<h4 style="text-align: left;">Teacher Name: <input class="teacher-name" name="teacher-name" type="text" required></h4>
						</label>
						<label>
							<h4 style="text-align: left;">Teacher Profile: <br> ​<textarea id="teacher-profile" name="teacher-profile" rows="3" cols="45" required></textarea></h4>
						</label>
					</div>
				<br>
		        <button  type="submit" class="btn btn-info" style="width: 100%;font-size: 20px;">Update Teacher</button>
		        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
				</form>
		        <!-- <a class="popup-close" data-popup-close="popup-1" href="#">x</a> -->
		    </div>
		    </div> <!-- End Update Teacher Info Box -->
