 <!-- Create Course Box -->
		    <div  class="toggle" data-toggle="toggle-createcourse">
		    <div class="toggle-box">
					<h1>Create Course</h1>
					<hr>
					<div style="float: left;">
							<img class="sample-course-pic" src="https://placehold.it/150x150" width="150" height="150" style="border-radius: 50%;">
					</div>
					<form action="createCourse" method="post" >
					<div style="float: left;margin-left:5rem;text-align: left;" >
					<label>
							<h4> Course Name: <input id= "course-name" type="text" name="course-name" required></h4>
					</label>
					<br>
						<label><h4>Select Course Level 
							<select name="course-level" id="level-selected">
								<option value="Beginner">Beginner</option>
								<option value="Intermediate">Intermediate</option>
								<option value="Expert">Expert</option>								
							</select>
							</h4>
						</label>
						<br>
						<label>
							<h4>Date: <input id= "course-date" type="int" name="course-date" required></h4>
						</label>
						<br>
						<label>
							<h4>Price: <input id= "price" type="text" name="course-price" required></h4>
						</label>
						<br>					
						<label style="margin-bottom: 1.5rem;">
							<h4 style="text-align: left;">Course Picture: <input class="course-pic"  type="file" name="course-pic" required></h4>
						</label>
	
					</div>				
				<br >			
		        <button type="submit" class="btn btn-info" style="width: 100%;font-size: 20px;">Create Course</button>
		        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
				</form>
		        <!-- <a class="popup-close" data-popup-close="popup-1" href="#">x</a> -->
		    </div>
		    </div> <!-- End Create Coure Box -->
