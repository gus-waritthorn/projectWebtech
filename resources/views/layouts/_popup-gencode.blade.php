<div class="popup" data-popup="popup-1" id="popup_gencode">
		    <div class="popup-inner">
					<h1>Generate Class Code</h1>
					<hr>
					<div class="class">
						<label><h3>Select Class
							<select name="class" id="class-selected">
								<option value="">Guitar</option>
								<option value="">Singing</option>
								<option value="">Piano</option>
								<option value="">Violin</option>
							</select>
							</h3>
						</label>
						<p>@{{code}}</p>
					</div>
				<br>
		        <button  type="submit" class="btn btn-info" style="width: 100%;font-size: 20px;" v-on:click="clickGenBtn">Generate</button>
		        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
		    </div>
		</div>
