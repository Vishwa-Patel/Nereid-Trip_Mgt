
<html>
<head>
    <title> Nereid-Manage Your Trip </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">   
    <style>
    	body{
    			margin: 0;
    			padding: 0;
    			background-image: url(img/Mine/seashore.jpg);
    			background-size:100% 100%;
    			background-repeat: no-repeat;
    			background-position: center;
    			font-family: sans-serif
    		}
    </style>
    
</head>

<script>
	function validation(){
	var username=document.getElementById('uname').value;
	var pass=document.getElementById('pass').value;
	
	if(username=="")
	{
		document.getElementById('uname').innerHTML="username is required";
		alert("Please Enter the user Name..");
		return false;
	}
	if(pass=="")
	{
		document.getElementById('uname').innerHTML="Password is required";
		alert("Please Enter the Password...");
		return false;
		}
	
	}
</script>
		
<body>
    <div>
		<img src="img/Mine/42690f2f-c13f-48b7-99c4-2f7642c080f8_200x200.png" height="150" width="300">
    </div>
    <div class="login-box">
    <img src="css/th.jfif" class="avatar">
        <h1>Login Here</h1>
            <form action="retrivelog.php" method="POST" onsubmit="return validation()" >
            
	            <p>Email</p>
	            <input type="text" name="username" placeholder="Enter Email" id="uname" required />
	            <p>Password</p>
	            <input type="password" name="pass" placeholder="Enter Password" id="pass" required />
	            <input type="submit" name="submit" value="Login" >
	            </br></br>
				<a href="Register.html" style="font-size:18px">Register Here !!!</a> </br></br>
			
            </form>
    </div>
    
</body>
</html>