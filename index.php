<!DOCTYPE html>
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Vestibule 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130406
-->

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <title><3 Pototo <3</title>
    </head>
    <body>
        <div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li class="current_page_item"><a href="#">Homepage</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Photos</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			</ul>
		</div>
	</div>
	<div id="logo" class="container">
		<h1><a href="#">Vestibule</a></h1>
		<p>In posuere eleifend odio quisque semper augue.</p>
	</div>
	<div id="page" class="container">
		<div>
			<div class="entry">
				<p>This is login page</p>
			</div>
		</div>
	</div>
        <?php if(1==1) {?>
        <div id="three-column" class="container">
            <div class="tbox1">
                <div class="box-style box-style01">
                        <div class="content">
                                <div class="image"><img src="images/img04.jpg" width="324" height="200" alt="" /></div>
                                <h2><form method="post" action="control.php">
                                    email: <input type="text" name="id"/><br>
                                    password: <input type="password" name="pass"/><br>
                                    <input type="hidden" name="page" value="login"/>
                                    <input type="submit" class="button" value="Login"/>
                                </form>
                                </h2>
                        </div>
                </div>
            </div> 
	</div>	
        <?php } else {?>
        <div id="three-column" class="container">
		<div class="tbox1">
			<div class="box-style box-style01">
				<div class="content">
					<div class="image"><img src="images/img04.jpg" width="324" height="200" alt="" /></div>
					<h2>Fusce ultrices fringilla</h2>
					<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
					<a href="#" class="button">Learn More</a>
				</div>
			</div>
		</div>
		<div class="tbox2">
			<div class="box-style box-style02">
				<div class="content">
					<div class="image"><img src="images/img05.jpg" width="324" height="200" alt="" /></div>
					<h2>Mauris vulputate dolor</h2>
					<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
					<a href="#" class="button">Learn More</a>
				</div>
			</div>
		</div>
		<div class="tbox3">
			<div class="box-style box-style03">
				<div class="content">
					<div class="image"><img src="images/img06.jpg" width="324" height="200" alt="" /></div>
					<h2>Nulla luctus eleifend </h2>
					<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh.</p>
					<a href="#" class="button">Learn More</a>
				</div>
			</div>
		</div>
	</div>
        <div id="three-column" class="container">
		<div class="tbox1">
			<div class="box-style box-style01">
				<div class="content">
					<div class="image"><img src="images/img04.jpg" width="324" height="200" alt="" /></div>
					<h2>Fusce ultrices fringilla</h2>
					<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
					<a href="#" class="button">Learn More</a>
				</div>
			</div>
		</div>
		<div class="tbox2">
			<div class="box-style box-style02">
				<div class="content">
					<div class="image"><img src="images/img05.jpg" width="324" height="200" alt="" /></div>
					<h2>Mauris vulputate dolor</h2>
					<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
					<a href="#" class="button">Learn More</a>
				</div>
			</div>
		</div>
		<div class="tbox3">
			<div class="box-style box-style03">
				<div class="content">
					<div class="image"><img src="images/img06.jpg" width="324" height="200" alt="" /></div>
					<h2>Nulla luctus eleifend </h2>
					<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh.</p>
					<a href="#" class="button">Learn More</a>
				</div>
			</div>
		</div>
	</div>
        <?php }?>
</div>
<div id="footer">
	<p>Pototo © 2013 Untitled Inc. All rights reserved. Lorem ipsum dolor sit amet nullam blandit consequat phasellus etiam lorem. Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FCT</a>.  Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
    </body>
</html>