<div class="span3 offset2">
	<form method="POST" id="form1" action="login/cp_action.php">
	<fieldset>
		<legend>Ganti Password</legend>
		<input type='hidden' name='username' value='<?php echo $_SESSION['username']?>'>
		<div class="clearfix">
			<label for="input">Password </label>
			<div class="input">
				<input class="xlarge required" id="xlInput" name="password" size="30" type="password">
			</div>
		</div>
		<div class="span2 offset1">
			<input type="submit"  name="aksi" class="btn btn-primary" value='ubah'>
		</div>
	</fieldset>
	</form>
</div>


