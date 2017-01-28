<?php
include_once './config/init.php';

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

<h1>Aggiungi nuova pianta</h1>

<div>
    <?php
    if (!isset($risultato)) :
    elseif (is_bool($risultato)) :
        echo 'TUTTO OK! pianta creata!';
    elseif (is_string($risultato)) :
        echo $risultato;
    endif;
    ?>
</div>

<form method="post" action="">
    <table>
        <tr>
            <td><label>Nome</label></td>
            <td><input name="nome" /></td>
        </tr>
        <tr>
            <td><label>immagine</label></td>
            <td><input name="immagine" /></td>
        </tr>
        <tr>
            <td><label>Categoria</label></td>
            <td><input name="categoria" /></td>
        </tr>
    </table>
    <button type="submit">Crea nuovo pianta</button>
</form>

<!-- footer -->
<?php
include './templates/footer.php';
?>
