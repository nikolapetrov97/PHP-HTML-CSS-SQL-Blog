<?php
if(isset($_GET['box']))
{
	$color=$_GET['box'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	
        <meta charset="UTF-8">
        <title>PUBG BULGARIA</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script> 
        function checklink(e){ 
            return confirm('Going to: ' + e.href + ' ?'); 
        } 
		function validateForm()
		{
		var x= document.forms["myForm"]["box"].value;
		if(x==null || x==""){alert("color must be written";return false;};
		return true;
		}
        </script> 
    </head>
<body bgcolor="<?php echo $color;?>">
     <header
         <div class="row">
            
            <ul class="main-nav">
                <li><a href="">HELP</a></li> 
                <li><a href="https://google.com" target="_blank" onClick="return checklink(this);">Link to Google</a></li> 
                <li><a href="https://steamcommunity.com/" target="_blank" onClick="return checklink(this);">STEAM</a></li>
            </ul>
        </div>
        <div class="hero">
             <h1>Blog System with Login</h1>
            <div class="button">
                <a href="login1.php" class="button1">LOGIN</a>
            </div>
			<br><br>
			<center>
			<form name="myForm" action = "" method = "GET">
			<input type = "text" placeholder="Enter color to set the background" name = "box" size="40">
			<input type="submit" value="Set Color" onclick="validateForm()"><br><br>
			</form>
			</center>
            <hr>
            <ul class="bot-nav-left">
             <li><b>LINKS</b></li>
             <li><a>Contact us</a></li>
             <li><a>Privacy Policy</a></li>
         </ul>
            <ul class="bot-nav-center">
             <li><b>STREAMS</b></li>
             <li><a>TWITCH</a></li>
             <li><a>Youtube Gaming</a></li>
         </ul>
            <div class="about">
                <a>ABOUT</a>
                <h2>This site helps you find</h2> 
                <h2>tournaments and acknowledge</h2> 
                <h2>new sites like twitch where</h2> 
                <h2>you can watch pro players play PUBG</h2>
            </div>
        </div>
         <script> 
    document.getElementById("TOURNAMENTS").addEventListener("click", function(event){ 
            if(!confirm('Going to: ' + event.target.href + " ?")){event.preventDefault();} 
});
</script>
    </header>
</body>
</html>