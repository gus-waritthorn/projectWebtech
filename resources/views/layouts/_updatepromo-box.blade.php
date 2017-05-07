<!-- Update Promo Box -->
		    <div  class="toggle" data-toggle="toggle-updatepromo">
		    <div class="toggle-box">
					<h1>Update Promotion</h1>
					<hr>
					<form action="updatepromotion" method="post" enctype="multipart/form-data">
					<div>
						<label><h3>Select Old Promotion
							<select name="promo" id="promo-selected">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
							</h3>
						</label>
						<br>
						<label>
							<h3 style="text-align: left;">New Promotion: <input class="new-promo" value="Upload Promotion" type="file" id="promo-path" name="promo-path" required></h3>
						</label>
						<img class="sample-promo" src="https://placehold.it/450x150" width="450" height="150">

					</div>
				<br>
		        <button type="submit" name="btn-upload" class="btn btn-info" style="width: 100%;font-size: 20px;">Update Promotion</button>
    			<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
					</form>
		        <!-- <a class="popup-close" data-popup-close="popup-1" href="#">x</a> -->
		    </div>
		    </div> <!-- End Update Promo Box -->
