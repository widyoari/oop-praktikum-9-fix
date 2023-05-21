<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">	
  <title>Praktikum Pemrograman Web 2</title>
  <link rel="stylesheet" href="<?php echo AST . "/css/bootstrap.min.css"; ?>">
  <script href="<?php echo AST . "/js/jquery.slim.min.js"; ?>"></script>
  <script href="<?php echo AST . "/js/bootstrap.bundle.min.js"; ?>"></script>

</head>
<body>
<div class="jumbotron text-center">
	<h1>Template Index Untuk Latihan MVC</h1>
</div>
<div class="container">
	<div class="table-responsive"> 
		<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
 	</div>
</div>

</body>
</html>