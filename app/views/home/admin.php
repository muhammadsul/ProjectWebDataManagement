<?php require_once '../app/views/templates/headerPublic.php' ?>
<head>
	<link rel="stylesheet" type="text/css" href="/css/booststrap.css">
</head>
<title> Admin Screen</title>
<form method= "post" action = "/login/admin" >
	<div class="center">
		<div class="portlet-body">
			<div class="tabbable">
				<ul class="nav nav-tabs"></ul>
					<div class="tab-content no-space">
						<div class="tab-pane active" id="tab_general">            
							<div class="form-body">
								<div class="form-group">
									<label class="col-md-2 control-label">Name: <span class="required">
									* </span>
								</label>
								<div class="col-md-10">
									<input type="text" name="staffname" class="form-control"  required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Email<span class="required">
								* </span>
							</label>
							<div class="col-md-10">
								<input type="text" name="staffemail" class="form-control"   required>
							</div>
						</div> 
						<div class="form-group">
							<label class="col-md-2 control-label">Phone<span class="required">
							* </span>
						</label>
						<div class="col-md-10">
							<input  type="text" name="staffphone" class="form-control" maxlength="10" required>
						</div>
					</div>  
					<div class="form-group">
						<label class="col-md-2 control-label">Date of birth: <span class="required">
						* </span>
					</label>
					<div class="col-md-10">
						<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
							<input type="text" class="form-control" name="date1" >
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">username<span class="required">
					* </span>
				</label>
				<div class="col-md-10">
					<input  type="text" name="staffusername" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Select City<span class="required">
			* </span>
		</label>
		<div class="col-md-10">
			<select name="staffcity" id="staffcity" class="form-control">
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label"> <span class="required">
		</span>
	</label>
	<div class="col-md-10">
	</div>
</div>
</div>
</div>
</div>
</div>
		</form>
		</html>
		<?php require_once '../app/views/templates/footer.php' ?>
