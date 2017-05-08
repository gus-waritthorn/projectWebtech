<!-- Add Teacher Info Box -->
		    <div  class="toggle" data-toggle="toggle-addteacher">
		    <div class="toggle-box">
					<h1>Update Teacher</h1>
					<hr>
					<div style="float: left;">
						<img class="sample-teacher-pic" src="https://placehold.it/150x150" width="150" height="150" style="border-radius: 50%;">
					</div>
					<form action="addTeacher" enctype="multipart/form-data" method="post" >
					<div style="float: left;margin-left:5rem;text-align: left;" >
						<label><h4>Select Old Promotion
							<select name="teacher" id="teacher-selected">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
							</h4>
						</label>
						<br>
						<label>
							<h3 style="text-align: left;">New Promotion: <input class="new-teacher" value="Upload Teacher" type="file" id="teacher-path" name="teacher-path" required></h3>
						</label>
						<br>
						<label>
							<h4 style="text-align: left;">Teacher Name: <input class="teacher-name" name="teacher-name" type="text" required></h4>
						</label>
						<br>
						<label>
							<h4 style="text-align: left;">Teacher Profile: <br> ​<textarea id="teacher-profile" name="teacher-profile" rows="5" cols="45" required></textarea></h4>
						</label>
					</div>
				<br>
		        <button  type="submit" name="btn-upload" class="btn btn-info" style="width: 100%;font-size: 20px;">Update Teacher</button>
		        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
				</form>
		        <!-- <a class="popup-close" data-popup-close="popup-1" href="#">x</a> -->
		    </div>
		    </div> <!-- End Update Teacher Info Box -->
