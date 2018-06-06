<?php
 <html>
    <head>
	  <title>Login</title>
	  </head>
	  <body>
	  <div class="header">
	       <h2>Login</h2>
		     </div>
			 <form>
			 
			 <form method="post"action="login.php">
			 <div class="input-group">
			 <label>username</label>
			 <input type="text"name="username" value=<?php echo $username;?>">
			 </div>
			 <div class="input-group">
			 <label>password</label>
			 <input type="password"name="password_1">
			 </div>
		   
	  </body>
	  </html>





?>