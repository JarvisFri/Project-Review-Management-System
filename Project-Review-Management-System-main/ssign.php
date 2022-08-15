<style>
li:hover {
    background-color: #C8C8C8 ;
}
 .blue {
    color: green;
}
      form {
          padding-left: 20px;
          padding-right: 10px;
      }
    .b
{
    margin-bottom:90px;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


  
   
   
      <div class="container" style="margin-top:50px;">
        <form class="form-horizontal" method="post" action="ssave.php">
          <fieldset>
       
          <div id="edit_farmer" style="display:none"></div>
          <div class="row">
            <div class="col-md-2 panel panel-heading"><h3>Student Sign Up</h3></div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="contact_error"></div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="Phone">Contact No.</label>
            <div class="col-md-3">
    <div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-phone"></i>
			</span>
              <input id="Phone" maxlength="10" name="Phone" placeholder="xxxxxxxxxxxx" class="form-control input-md ac_mobile" type="number"  >
		
            </div>
	</div>
            <label class="col-md-1 control-label" for="school">School</label>
            <div class="col-md-3">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <select id="school" name="school" class="form-control input-md">
                <option value="SCOPE">SCOPE</option>
                <option value="SENSE">SENSE</option>
                <option value="SITE">SITE</option>
              </select>
            </div>
		</div>
            <div class="col-md-1">
	
              <a id="add_mobile" onclick=add_mobile()><i class="glyphicon glyphicon-plus"></i></a>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-8" id="mobile_numbers"></div>
          </div>

          <div class="row form-group">
            <label class="col-md-1 control-label" for="Name">Name</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <input id="Name" name="Name" placeholder="" class="form-control input-md" type="text">
            </div></div>

            <label class="col-md-1 control-label" for="username">Username</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <input id="username" name="username" placeholder="" class="form-control input-md" type="text">
            </div>
		</div>
            <label class="col-md-1 control-label" for="password">Password</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <input id="password" name="password" placeholder="" class="form-control input-md" type="password">
            </div>
	</div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="Gender">Gender</label>
            <div class="col-md-4">
              <label class="radio-inline"><input type="radio" name="Gender" value="M" checked>Male</label>
              <label class="radio-inline"><input type="radio" name="Gender" value="F">Female</label>
              <label class="radio-inline"><input type="radio" name="Gender" value="O">Other</label>
            </div>

            <label class="col-md-1 control-label" for="email">Email</label>
            <div class="col-md-4">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-pencil"></i>
			</span>
            <input type="email" name="email" id="email" placeholder="abc@gmail.com">
            </div></div>
         

          <div class="row">
            <div class="col-md-2 panel panel-heading">Address Information</div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="address_error"></div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="Cabin_no">Speciality</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-home"></i>
			</span>

              <input id="interests" name="interests" placeholder="" class="form-control input-md ac_village" required="" type="text">
            </div> </div>

            <label class="col-md-1 control-label" for="DOB">Date of Birth</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

              <input id="DOB" name="DOB" placeholder="" class="form-control input-md ac_state" required="" type="date">
            </div></div>

            
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="RegNo">Registraion ID</label>  
            <div class="col-md-2">
              <input id="RegNo" name="RegNo" placeholder="" class="form-control input-md ac_taluka" required="" type="number">
            </div>
            <div class="row form-group">
            <label class="col-md-2 control-label" for="TID">Team ID</label>  
            <div class="col-md-2">
              <input id="TID" name="TID" placeholder="" class="form-control input-md ac_taluka" required="" type="number">
            </div>
            
	</div>
          </div>


          <div class="form-group row">
            <div class="col-md-8 text-center">
              <button id="submit" name="submit" class="btn btn-large btn-success" type="submit"> Submit</button>
              <button class="btn btn-large btn-danger" type="button" onclick=history.go(-1)> Cancel </button>
              <button id="submit" name="submit" class="btn btn-large btn-success" type="reset"> Reset</button>
            </div>
          </div>
          </fieldset>
        </form>
      </div>

<div class="b">
 <div class="navbar navbar-default navbar-fixed-bottom">
    
    
    
  </div>
</div>
</body>
</html>


