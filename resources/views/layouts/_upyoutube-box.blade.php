<!-- Up Link Youtube Box -->
		    <div  class="toggle" data-toggle="toggle-upvideo">
		    <div class="toggle-box">
					<h2>Up Link Youtube</h2>
					<hr>
					<form action="updatelink" method="post">
					<div>
						<label><h5>Select Old Video
							<select name="video" id="video-selected">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
							</h5>
						</label>
						<br>
						<label>
							<h5 style="text-align: left;">New Video: <input name="newvideo" class="new-video" placeholder="Ex.https://www.youtube.com/embed/4TrDsI56i24"  type="text" size="40" required></h5>
							<a class="btn btn-warning" id="show-sample-video"> Show Sample New Video</a>
						</label>
						<br>
						<iframe class="sample-video" src="https://placehold.it/400x220" width="400" height="200" style="margin-top:0"></iframe>

					</div>
				<br>
		        <button type="submit" class="btn btn-info" data-toggle-open="toggle-upvideo" style="width: 100%;font-size: 16px;">Up Link</button>
						<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
				</form>
		        <!-- <a class="popup-close" data-popup-close="popup-1" href="#">x</a> -->
		    </div>
		    </div> <!-- End Up Linke Youtube Box -->
