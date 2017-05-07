 <!-- Create Course Box -->
		    <div  class="toggle" data-toggle="toggle-createcourse">
		    <div class="toggle-box">
					<h1>Create Course</h1>
					<hr>
					<div style="float: left;">
							<img class="sample-course-pic" src="https://placehold.it/150x150" width="150" height="150" style="border-radius: 50%;">
					</div>
					<div style="float: left;margin-left:5rem;text-align: left;" >
					<label>
							<h3 Course Name: <input id= "course-name" type="text" name="course-name"></h3>
					</label>
					<br>
						<label><h3>Select Course Level
							<select name="level" id="level-selected">
								<option value="">Beginner</option>
								<option value="">Intermediate</option>
								<option value="">Expert</option>
							</select>
							</h3>
						</label>
						<br>
						<label>
							<h3>Date: <input id= "course-date" type="text" name="course-date" required></h3>
						</label>
						<br>
						<label>
							<h3>Price: <input id= "price" type="text" name="price" required></h3>
						</label>
						<br>
						<label style="margin-bottom: 1.5rem;">
							<h3 style="text-align: left;">Course Picture: <input class="course-pic" value="Upload Course" type="file" style=""></h3>
						</label>

					</div>
				<br >
		        <button  type="submit" class="btn btn-info" style="width: 100%;font-size: 20px;">Create Course</button>

		        <!-- <a class="popup-close" data-popup-close="popup-1" href="#">x</a> -->
		    </div>
		    </div> <!-- End Create Coure Box -->
