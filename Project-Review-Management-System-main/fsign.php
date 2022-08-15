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
    <title>Faculty Sign Up</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


  
   
   
      <div class="container" style="margin-top:50px;">
        <form class="form-horizontal" method="post" action="fsave.php">
          <fieldset>
       
          <div id="edit_farmer" style="display:none"></div>
          <div class="row">
            <div class="col-md-2 panel panel-heading"><h3>Faculty Sign Up</h3></div>
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
            <label class="col-md-1 control-label" for="sms">Department</label>
            <div class="col-md-3">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <select id="Dept" name="Dept" class="form-control input-md">
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
            <label class="col-md-2 control-label" for="Building">Building</label>
            <div class="col-md-4">
              <label class="radio-inline"><input type="radio" name="Building" value="SJT" checked>SJT</label>
              <label class="radio-inline"><input type="radio" name="Building" value="TT">TT</label>
              <label class="radio-inline"><input type="radio" name="Building" value="SMV">SMV</label>
              <label class="radio-inline"><input type="radio" name="Building" value="MB">MB</label>
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
            <label class="col-md-2 control-label" for="Cabin_no">Cabin No</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-home"></i>
			</span>

              <input id="Cabin_no" name="Cabin_no" placeholder="" class="form-control input-md ac_village" required="" type="text">
            </div> </div>

          
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="FID">Faculty ID</label>  
            <div class="col-md-2">
              <input id="FID" name="FID" placeholder="" class="form-control input-md ac_taluka" required="" type="number">
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


