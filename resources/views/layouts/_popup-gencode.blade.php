<div class="popup" data-popup="popup-1" id="popup_gencode">
		    <div class="popup-inner">
					<h1>Generate Class Code</h1>
					<hr>
					<form action="gencode" method="post">
					<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
					<div class="class">
						<label><h3>Select Class
							<select name="course" id="class-selected">
								<option value="Guitar">Guitar</option>
								<option value="Singing">Singing</option>
								<option value="Piano">Piano</option>
								<option value="Violin">Violin</option>
							</select>
							</h3>
						</label>
						<br>
							<input type="hidden" name="code" v-model="showCode" readonly>
					</div>
				<br>
		        <button type="submit" class="btn btn-info" style="width: 100%;font-size: 20px;" v-on:click="clickGenBtn">Generate</button>
					</form>
		        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
		    </div>
		</div>
