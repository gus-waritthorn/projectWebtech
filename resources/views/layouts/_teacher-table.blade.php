			<div  class="toggle" data-toggle="toggle-teacher-table">
		    <div class="toggle-box" style="overflow: auto;">
					<h3>Teacher Information Table</h3>
					<hr>
					<table class="table table-striped table-bordered" style="text-align: center;">
						<tr>
							<th style="text-align: center;">Teacher Picture</th>
							<th style="text-align: center;">Name</th>
							<th style="text-align: center;">Description</th>
						</tr>

						@if(!$teachers->isEmpty())
				          @foreach ($teachers as $teacher)  
				          <tr>
				          	<td " height="70px" width="70px"><img height="70px" width="70px" src="{{url("/img/teacher/{$teacher->path}")}}" ></td>
				            <td >{{ $teacher->name }}</td>
				            <td>{{ $teacher->description }}</td>
				          </tr>
				          @endforeach
				         @endif
					</table>
		    </div>
		    </div>