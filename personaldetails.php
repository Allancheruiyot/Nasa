<?php
include 'connetdb.php';

?>
<DOCTYPE html>
     <html>
	 <head>
	 <title>personal details</title>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	       <style type="text/css">
		     form{
		 
		 width:100%;
		 padding:210px;
		 margin:100px auto;
		 border:1px solid #8a8a8a;
		 border-radius:10px;
		 background-color:#ffffff;
		 color:#0e90d2;
		 text alignment:center;
	 }
			}
			</style>
			</head>
			<body style="background-color:blue">		
			<?php
			if(isset($_POST["save"])){
				$name=$_POST["name"];
				$phone=$_POST["phone"];
				$id=$_POST["id"];
				$email=$_POST["email"];
				$personalinfo=$_POST["personalinfo"];
				$hobbies=$_POST["hobbies"];
				
				$sql="INSERT INTO `personaldetails`(`id`, `name`, `email`, `phone`, `hobbies`, `personal info`) VALUES (['$id'],['$name'],['$email'],['$phone'],['$personalinfo'],[$'hobbies'])";
				$query=mysqli_query(con,$sql);
				if($query){
					echo "save successful";
					
				}else{echo "Error";}
			}
			
			
			
			
			?>
	<div class="container">
                            <form class="method=POST"action="">
           <lable><h1>personal details</h1></label>
                       <div class="input-group">
                    <lable>name:</lable>
            <input type="text" class="form-control"name="eame" required>
             </div>			
			 <div class="input-group">
                    <lable>phone:</lable>
            <input type="number" class="form-control"name="phone" required>
             </div>			
			  <div class="input-group">
                    <lable>email:</lable>
            <input type="email" class="form-control"name="email" required>
             </div>	
<div class="input-group">
                    <lable>id:</lable>
            <input type="number" class="form-control"name="id" required>
             </div>
			 <div class="input-group">
                    <lable>personalinfo:</lable>
            <input type="text" class="form-control"name="personalinfo" required>
             </div>	
			 <div class="input-group">
                    <lable>hobbies:</lable>
            <input type="text" class="form-control"name="hobbies" required>
             </div>	
			 <div class="input-group">
                                <button type="submit" class="btn btn-success "name="save">save</button>
								<button type="reset" class="btn btn-warning"name="reset">clear</button>
             </div>	
			 </form>
			 </div>
			 </body>
			 </html>
			 
			 
			 
			 
			 



			 
			 
			 
			 
			 
			 