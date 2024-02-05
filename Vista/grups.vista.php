
<!-- Paras Navlani -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../Estils/estils.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<title>Inici</title>
</head>
<body>
 

<?php require_once("../Vista/navbar.php"); ?>
  <!--Opcions -->
<div class="contenidor">
		<h1>Grups</h1>
    <?php foreach ($grups as $grup): ?>
    <div class="grup">
    <div class="card-body">
    <h4 class="card-title"><?php echo ("<a href='../Controlador/afegir.php?id=".$grup['id']."'>".$grup['nom']."</a>");?> </h4>  
    </div>
    </div>
    <?php endforeach; ?>

    <form action="../Controlador/crearGrupsAuto.php">
      <input type="submit" onclick="return confirm('Estàs segur? S\'eliminaren tots els grups creats.')" value="Crear Grups Automàticament" />
    </form>
    
</div>
<br>

  

</body>
</html>




