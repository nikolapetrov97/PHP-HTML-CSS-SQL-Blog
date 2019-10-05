<?php
	session_start();
	include_once("dbblog.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home Page - POSTS</title>
</head>
<body>
	<?php
	$sql="SELECT * FROM posts ORDER BY id DESC";
	$res = mysqli_query($db,$sql) or die(mysqli_error());
	$posts = "";
	if(mysqli_num_rows($res)>0)
		{
			while($row = mysqli_fetch_assoc($res))
			{
				$id = $row['id'];
				$title = $row['title'];
				$content = $row['content'];
				$date= $row['date'];
				$posts .= "<div><h2><a href='view_post.php?pid=$id'>$title</a></h2><h3>$date</h3><p>$content</p></div><hr>";
			}
			echo $posts;
		}else {echo "No posts!";}
	?>
	<form class="myform" action="homepage.php" method="post">
		<a href="post.php"><input type="button" id="postbtn" value="POST"/><br>
		<a href="login1.php"><input type="button" id="logoutbtn" value="Log out"/><br>
		
	</form>
	</div>
</body>
</html>