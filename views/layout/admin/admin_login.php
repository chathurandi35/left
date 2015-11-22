<?php
include('../../../controll/login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: admin_home.php");
}
?>


<div class="container-fluid">
	<div class="col-md-12">
		<div class="col-md-12" style="position;absolute; width:100%; height:100vh;">
			<div class="col-md-4 pull-right" style="position:absolute; right:10px; top:30vh; height:40vh; ">
				<div class="panel panel-default" >
                 

            <div class="panel-body" >
            	<p class="text-center">Login to Left</p>
                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
                   <div class="col-md-12">
                   	<span><p style="color:#000;"><?php echo $error; ?></p></span>
                   </div>
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control"  value="" placeholder="User" id="name" name="username">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input type="password" class="form-control"  placeholder="Password" id="password" name="password">
                    </div>   

                    <div  class="form-group">
                    	<div class="col-md-12">
                    		<label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                    	</div>
                    
                </div>                                                               

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button  href="#" class="btn btn-primary pull-right" type="submit" value=" Login "><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                        </div>
                    </div>



                </form>     

            </div>                     
        </div>  
			</div>
		</div>
	</div>
</div>