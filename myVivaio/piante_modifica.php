<?php
include_once './config/init.php';

$title = 'Pagina aggiornamento pianta';
if (count($_POST) > 0) :
    $risultato = Vivaio::Aggiorna($_POST);
    $pianta = Vivaio::Cerca($_POST);
else :
    $pianta = Vivaio::Cerca($_GET);
endif;
var_dump($pianta);
?>

<!-- header -->
<?php
include './templates/header.php';
?>

<!-- contenuto pagina -->
<form method="post" action="piante_modifica.php">
    <input type="hidden" name="piantaid" value="<?php echo $pianta['pk_pianta'] /* $pianta['pk_cod_cli']; */ ?>" />
    <table>
        <tr>
            <td><label>Nome</label></td>
            <td><input name="nome" value="<?php echo $pianta['nome']; ?>" /></td>
        </tr>
        <tr>
            <td><label>Immagine</label></td>
            <td><input name="immagine" value="<?php echo $pianta['immagine']; ?>" /></td>
        </tr>
        <tr>
            <td><label>Categoria</label></td>
            <td><input name="categoria" value="<?php echo $pianta['cod_cat']; ?>" /></td>
        </tr>
    </table>
    <button type="submit">Aggiorna pianta</button>
</form>
<form method="" action="piante_aggiungi.php">
    <button>Aggiungi pianta</button>
</form>
<!-- footer -->
<?php
include './templates/footer.php';
?>
