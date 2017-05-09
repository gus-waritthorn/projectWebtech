			<div  class="toggle" data-toggle="toggle-course-table">
		    <div class="toggle-box" style="overflow: auto;">
					<h3>Course Information Table</h3>
					<hr>
					<table class="table table-striped table-bordered" style="text-align: center;">
						<tr>
							<th style="text-align: center;">Course Picture</th>
							<th style="text-align: center;">Name</th>
							<th style="text-align: center;">Level</th>
							<th style="text-align: center;">Price</th>
						</tr>

						@if(!$courses->isEmpty())
				          @foreach ($courses as $course)  
				          <tr>
				          	<td " height="70px" width="70px"><img height="70px" width="70px" src="{{url("/img/course/{$course->path}")}}" ></td>
				            <td >{{ $course->name }}</td>
				            <td>{{ $course->level }}</td>
				            <td>{{ $course->price }}</td>				            
				          </tr>
				          @endforeach
				         @endif
					</table>
		    </div>
		    </div>