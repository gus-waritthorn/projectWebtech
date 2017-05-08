<!-- Add Course Box -->
			<div  class="toggle" data-toggle="toggle-addcourse">
		    <div class="toggle-box">
					<h1>Add Course</h1>
					<hr>
					<form action="addCourse" method="post">
					<div>
						<label>
							<h3>Student Email: <input id="std-email" type="email" name="std-email" required></h3>
						</label>
							<br>
						<label><h3>Select Course
							<select name="course" id="course-selected">
								@foreach($courses as $course)
								<option value="{{ $course->id }}"> {{ $course->name }} : {{ $course->level }}</option>
								@endforeach
							</select>
							</h3>
						</label>
					</div>
				<br>
		        <button type="submit"  class="btn btn-info" style="width: 100%;font-size: 20px;">Add Course</button>
		        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
					</form>
		        <!-- <a class="popup-close" data-popup-close="popup-1" href="#">x</a> -->
		    </div>
		    </div> <!-- End Add Course Box -->
