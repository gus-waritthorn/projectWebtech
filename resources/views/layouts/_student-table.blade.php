			<div  class="toggle" data-toggle="toggle-student-table">
		    <div class="toggle-box" style="overflow: auto;">
					<h3>Student Information Table</h3>
					<hr>
					<table class="table table-striped table-bordered" style="text-align: center;">
						<tr>
							<th style="text-align: center;">First Name</th>
							<th style="text-align: center;">Last Name</th>
							<th style="text-align: center;">E-mail</th>
						</tr>

						@if(!$users->isEmpty())
				          @foreach ($users as $user)  
				          <tr>
				          	<td >{{ $user->fname }}</td>
				            <td >{{ $user->lname }}</td>
				            <td >{{ $user->email }}</td>
				          </tr>
				          @endforeach
				         @endif
					</table>
		    </div>
		    </div>