<?php
include_once './config/init.php';
?>
<link rel="stylesheet" type="text/css" href="css/form.css">
<?php
$title = 'Pagina creazione pianta';

if (count($_POST) > 0) :
    $risultato = Vivaio::AggiungiNuovo($_POST);
endif;
?>

<!-- header -->
<?php
include './templates/header.php';
?>

<!-- contenuto pagina -->




<form method="post" action="" class="center">
  <div>
    <h1>Aggiungi nuova pianta :</h1>
    <label>
      <span>Nome :</span><input id="name" type="text" name="nome" />
    </label>

    <label>
      <span>Immagine :</span><input id="email" type="text" name="immagine" />
    </label>

    <label>
      <span>Categoria :</span><input id="subject" type="text" name="categoria" />
    </label>

    <br><label>
      <button type="submit" class="margin">Crea nuovo pianta</button>
    </label>

    <br><label>
        <div>
            <?php
            if (!isset($risultato)) :
            elseif (is_bool($risultato)) :
                echo 'TUTTO OK! Pianta creata!';
            elseif (is_string($risultato)) :
                echo $risultato;
            endif;
            ?>
        </div>
    </label>

    <br><label>
      <button class="button"><a href="piante.php">Lista piante</a></button>
    </label>

  </div>
</form>

<!-- footer -->
<?php
include './templates/footer.php';
?>
