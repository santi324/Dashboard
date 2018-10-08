<!DOCTYPE html>
<html>
<head>
	<title>Panel de control</title>
</head>
<body>

	<ul class="tools">
		<li><a href="#">New article</a></li>
		<li><a href="#">View articles</a></li>
		<li><a href="#">ver informacion</a></li>
	</ul>
	<div class="info">
		<ul>
			<li class="follows">
				<h1>100</h1>
				<a >Followers</a>
			</li>
			<li class="views">
				<h1>23870</h1>
				<a >views</a>
			</li>
		</ul>
		<div class="instruct">
			<h3>Welcome user!!</h3>
			<p>
				This is your Dashboard. here you'll see all what you have to.  
			</p>
		</div>
		<div class="new_article">
			<form>
			<h3>Crea una nueva entrada</h3>

				<input type="text" placeholder="Nombre de la entrada" name="tit" />
				<textarea placeholder="Escribe un articulo genial"></textarea>
				<input type="checkbox" name="borrador">
				<label for="borrador">Guardar en borador</label>
				<input type="submit" />
			</form>
		</div>
	</div>
</body>
</html>
<style type="text/css">
	* {
		padding: 0px;
		margin: 0px;
		font-family: Helvetica;
		}
	body {
		background: #000;
		background-size: 100%;
		}
	.tools {
		display: inline-block;
		margin:2% 24.9%;
		width: 50%;
		margin-bottom: 0%;
		border: 1px solid #fff;
		}
	.tools li {
		display: inline-block;
		float: left;
		}
	.tools li a {
		display: inline-block;
		padding: 10px 15px;
		text-decoration: none;
		color: #fff;
		}
	.info {
		display: inline-block;
		width: 50%;
		margin:1% 24.9%;
		border: 1px solid #fff;
		}
	.info ul li.follows {
		display: inline-block;
		padding:5% 10px; 
		background: rgba(250, 0, 0, .7);
		margin: 10px;
		width: 20%;
		}
	.info ul li.follows h1{
		display: inline-block;
		color: #0ed145;
		width: 100%;
		text-align: center;
		}
	.info ul li.follows a{
		display: inline-block;
		color: #fff;
		text-align: center;
		text-decoration: none;
		width: 100%;
		}
	.info ul li.views {
		display: inline-block;
		padding:5% 10px; 
		background: rgba(0, 250, 0, .7);
		margin: 10px;
		width: 20%;
		}
	.info ul li.views h1{
		display: inline-block;
		color: #fff;
		width: 100%;
		text-align: center;
		}
	.info ul li.views a{
		display: inline-block;
		color: #fff;
		text-align: center;
		text-decoration: none;
		width: 100%;
		}
	.instruct {
		display: inline-block;
		}
	.instruct h3 {
		display: inline-block;
		padding: 10px 15px;
		color: #fff;
		}
	.instruct p {
		display: inline-block;
		padding: 10px 15px;
		color: #fff;
		}
	.new_article {
		display: inline-block;
		width: 100%;
		}
	.new_article form {
		display: inline-block;
		width: 80%;
		margin:3% 4%;
		padding: 3%;
		background: #fff;
	}
	.new_article form input {
		padding: 10px 15px;
		margin: 3px;
		display: inline-block;
		width: 90%;
		}
	.new_article form input[type="checkbox"] {
		width: 10%;
		visibility: hidden;
		display: inline-block;
	}


	.new_article form input[type="checkbox"]::before {
		display: inline-block;
		visibility: visible;
		padding: 10px 15px;
		content: 'X';
		width: 10%;
		background: blue;
		color: #fff;
		border-radius: 100px;
	}
	.new_article form input[type="submit"] {
		width: 30%;
		float: right;
	}
	.new_article form textarea {
		padding: 10px;
		margin: 3px;
		width: 90%;
		}






</style>