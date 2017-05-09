<div class="popup" data-popup="popup-checkin" id="popup_checkin">
		    <div class="popup-inner">
					<h1>Check-in Class Code</h1>
					<hr>

					<form action="checkin" method="post">
					<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
					<input class ="input-checkin" type="text" name="check-in-code"
					style="font-size: 25px"  required />
				<br><br><hr>
		        <button type="submit" class="btn btn-info" style="width: 100%;font-size: 20px;" v-on:click="">Check-in</button>
					</form>

		        <a class="popup-close" data-popup-close="popup-checkin" href="#">x</a>
		    </div>
		</div>
