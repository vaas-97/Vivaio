<?php
include_once './config/init.php';

$piante = Vivaio::Tutti();

?>

<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://i.imgur.com/TXE5eM9.png" type="image/png" />
    <title>Passiflora | Prodotti</title>
    <link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arsenal" rel="stylesheet"> 

    <link href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/esternoStyle.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css"> 
  </head>
  <body>

<!-- LOGO -->
<div class="passiflora">
    <img src="images/foglialogo.png" alt="logo" style="float:left; margin: 10px; margin-left:450px;">
    <span class="titolo">Passiflora</span>
</div>

<!-- INIZIO MENU -->
<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div id="menu1">
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">  
                <li><a href="index.html">Home</a></li>
                <li><a href="azienda.html">Chi siamo</a></li>
                <li class="active"><a href="prodotti.php">Prodotti</a></li>
                <li><a href="contatti.html">Contatti</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- INIZIO MENU LATERALE -->

<div style="width:50%">
	<div class="col-md-2 wrapperdue" style="padding-left:2%; padding-top:7%; ">
		<img class="img-responsive" style="padding-left:0%;" src="http://confinianima.c.o.pic.centerblog.net/d54a939e.png">
	</div>
</div>
<div class="col-md-9">
	<table class="table">
		<thead>
			<th></th>
			<th></th>
		</thead>
		<tbody>
			<?php foreach ($piante as $value) : ?>
	            <tr>
	                <td class="center"><img src="images/gallery/<?php echo $value['immagine']; ?>" width="150px" height="100"></td>
	                <td><?php echo $value['nome']; ?></td>
	            </tr>
	        <?php endforeach; ?>
		</tbody>
	</table>
</div>






<!-- footer -->
<?php
include './templates/footer.php';
?>