<?php
include_once './config/init.php';
?>
<link rel="stylesheet" type="text/css" href="css/form.css">
<?php
$title = 'Pagina aggiornamento pianta';
if (count($_POST) > 0) :
    $risultato = Vivaio::Aggiorna($_POST);
    $pianta = Vivaio::Cerca($_POST);
else :
    $pianta = Vivaio::Cerca($_GET);
endif;
?>

<!-- header -->
<?php
include './templates/header.php';
?>
<!-- contenuto pagina -->


<form method="post" action="piante_modifica.php" class="center">
    <input type="hidden" name="piantaid" value="<?php echo $pianta['pk_pianta'] ?>" />
  <div>
    <h1>Modifica pianta :</h1>
    <label>
      <span>Nome :</span><input id="name" type="text" name="nome" value="<?php echo $pianta['nome']; ?>" />
    </label>

    <label>
      <span>Immagine :</span><input id="email" type="text" name="immagine" value="<?php echo $pianta['immagine']; ?>"/>
    </label>

    <label>
      <span>Categoria :</span><input id="subject" type="text" name="categoria" value="<?php echo $pianta['cod_cat']; ?>"/>
    </label>

    <br><label>
      <button type="submit" class="margin">Aggiorna pianta</button>
    </label>

    <br><label>
        <div>
            <?php
            if (!isset($risultato)) :
            elseif (is_bool($risultato)) :
                echo 'TUTTO OK! Pianta aggiornata!';
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
