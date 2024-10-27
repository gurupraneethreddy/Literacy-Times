<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Literacy Times Login</title>
    <link rel="stylesheet" href="style.css">
    <!---we had linked our css file----->
    <style>
        

/* Adjustments for the login box */

.form-box {
    width: 380px;
    height: 520px;
    position: relative;
    margin: auto;
    background: linear-gradient(135deg, rgba(173, 216, 230, 0.8), rgba(255, 182, 193, 0.8), rgba(221, 160, 221, 0.8));
    padding-left: 15px;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 0 20px 9px rgba(255, 105, 180, 0.5);
}


.button-box {
    width: 240px;
    margin: 35px auto;
    position: relative;
    box-shadow: linear-gradient(135deg, rgba(173, 216, 230, 0.8), rgba(255, 182, 193, 0.8), rgba(221, 160, 221, 0.8)); /* Pinkish-blue shadow */
    border-radius: 30px;
}

.toggle-btn
{
	padding:12px 32px;
	cursor:pointer;
	background:transparent;
	border:0;
	outline: none;
	position: relative;
}
#btn {
    background: rgba(255, 192, 203, 0.8); /* Light pink color for toggle button */
}
#btn {
    top: 0;
    left: 0;
    position: absolute;
    width: 126px;
    height: 100%;
    background: rgba(123, 104, 238, 0.8); /* MediumSlateBlue color */
    border-radius: 30px;
    transition: .5s;
}
.input-group-login
{
	top: 150px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-group-register
{
    top: 120px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-field
{
	width: 100%;
	padding:10px 0;
	margin:10px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid #999;
	outline:none;
	background: pink;
}
.input-field::placeholder {
    color: black; /* Change the placeholder text color */
}
.submit-btn {
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: rgba(255, 105, 180, 0.8); /* Pink color */
    border: 0;
    outline: none;
    border-radius: 30px;
}
.check-box
{
	margin: 30px 10px 34px 0;
}
span
{
	color:#777;
	font-size:12px;
	bottom:68px;
	position:absolute;
}
#login
{
	left:50px;
}
#login input
{
	color:white;
	font-size:15;
}
#register
{
	left:450px;
}
#register input
{
	color:white;
	font-size: 15;
}
    </style>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
			background-image: url('newlogin.jpg');
            animation: gradientAnimation 10s infinite alternate;
            background-size: cover; /* This ensures the background image covers the entire viewport */
    background-repeat: no-repeat; /* Prevent the background image from repeating */
    background-attachment: fixed; 
        }

.full-page {
    display: flex;
    align-items: center;
    justify-content: center;
}
form-box {
        width: 380px;
        height: 520px;
        position: relative;
        margin: auto;
        background: rgba(222, 181, 103, 0.7); /* Set alpha value for transparency */
        padding-left: 15px;
        overflow: hidden;
        border-radius: 20px; /* Add curved edges */
        box-shadow: 0 0 20px 9px #674a2a;
		background-size: cover;
		background-repeat: no-repeat;
    }
.button-box
{
	width:240px;
	margin:35px auto;
	position:relative;
	box-shadow: 0 0 20px 9px #674a2a;
	border-radius: 30px;
}
.toggle-btn
{
	padding:12px 32px;
	cursor:pointer;
	background:transparent;
	border:0;
	outline: none;
	position: relative;
}
#btn {
    background: rgba(255, 192, 203, 0.8); /* Light pink color for toggle button */
}
.input-group-login
{
	top: 150px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-group-register
{
    top: 120px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-field
{
	width: 100%;
	padding:10px 0;
	margin:10px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid #999;
	outline:none;
	background: transparent;
}
.input-field::placeholder {
    color: black; /* Change the placeholder text color */
}
.submit-btn {
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: rgba(255, 105, 180, 0.8); /* Pink color */
    border: 0;
    outline: none;
    border-radius: 30px;
}
.check-box
{
	margin: 30px 10px 34px 0;
}
span
{
	color:#777;
	font-size:20px;
	bottom:68px;
	position:absolute;
}
#login
{
	left:50px;
}
#login input
{
	color:white;
	font-size:20;
}
#register
{
	left:450px;
}
#register input
{
	color:black;
	font-size: 20;
}

</style>
</head>
<body>
    <div class="full-page">
        <div id="login-form" class="login-page" style="display: block;">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" onclick="login()" class="toggle-btn">Login</button>
                    <button type="button" onclick="adminlogin()" class="toggle-btn">Admin Login</button>
                </div>
                <form id="login" class="input-group-login" action="process.php" method="post">
                    <input type="text" class="input-field" placeholder="User Name" id="username" name="username" required>
                    <input type="password" class="input-field" placeholder="Enter Password" id="password" name="password" required>
                    <button type="submit" class="submit-btn" name="login">Log in</button>
                    <button type="button" class="submit-btn" onclick="alreadyRegistered()">Register</button>
                </form>
                <form id="register" class="input-group-register" action="process1.php" method="post">
                    <input type="text" class="input-field" placeholder="User Name" id="reg_username" name="username" required>
                    <input type="password" class="input-field" placeholder="Enter Password" id="reg_password" name="password" required>
                    <button type="submit" class="submit-btn" name="register">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function adminlogin() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }

        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }

        function alreadyRegistered() {
            // Check if the user is already logged in
            // You can replace the `isUserLoggedIn` variable with an actual check from your server
            var isUserLoggedIn = true; // Example condition (replace with real authentication check)

            if (isUserLoggedIn) {
                alert("You are already registered and logged in.");
            } else {
                // Redirect to the register form if the user is not logged in
                adminlogin();
            }
        }
    </script>
</body>
</html>