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
        <form class="form-horizontal" method="post" action="psave.php">
          <fieldset>
       
          <div id="edit_farmer" style="display:none"></div>
          <div class="row">
            <div class="col-md-2 panel panel-heading"><h3>Create Project</h3></div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="contact_error"></div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="PID">Project ID</label>
            <div class="col-md-3">
    <div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-phone"></i>
			</span>
              <input id="PID"  name="PID" placeholder="Project ID" class="form-control input-md ac_mobile" type="number"  >
		
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
            <label class="col-md-1 control-label" for="Name">Topic</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <input id="Name" name="Name" placeholder="" class="form-control input-md" type="text">
            </div></div>

            <label class="col-md-1 control-label" for="HW_comp">Hardware Used</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <input id="HW_comp" name="HW_comp" placeholder="" class="form-control input-md" type="text">
            </div>
		</div>
            <label class="col-md-1 control-label" for="SW_comp">Software Used</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <input id="SW_comp" name="SW_comp" placeholder="" class="form-control input-md" type="text">
            </div>
	</div>
          </div>

          <div class="row form-group">
            

            <label class="col-md-1 control-label" for="Pan_ID">Panel ID</label>
            <div class="col-md-4">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-pencil"></i>
			</span>
            <input type="number" name="Pan_ID" id="Pan_ID" p>
            </div></div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="Desp">Description</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-home"></i>
			</span>

              <Textarea id="Desp" name="Desp" placeholder=""  required="" >Enter the Description</textarea>
            </div> </div>
            

         
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="FID">Faculty ID</label>  
            <div class="col-md-2">
              <input id="FID" name="FID" placeholder="" class="form-control input-md ac_taluka" required="" type="number">
            </div>
            <div class="col-md-2">
            <label class="col-md-1 control-label" for="Init_Date">Starting Date</label>
            
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

              <input id="Init_Date" name="Init_Date" placeholder="" class="form-control input-md ac_state" required="" type="date">
            </div></div>
            <div class="row form-group">
            <label class="col-md-2 control-label" for="TID1">Team1 ID</label>  
            <div class="col-md-2">
              <input id="TID1" name="TID1" placeholder="" class="form-control input-md ac_taluka" required="" type="number">
            </div>
            <div class="row form-group">
            <label class="col-md-2 control-label" for="TID2">Team2 ID</label>  
            <div class="col-md-2">
              <input id="TID2" name="TID2" placeholder="" class="form-control input-md ac_taluka" required="" type="number">
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


