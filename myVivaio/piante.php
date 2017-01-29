<?php
include_once './config/init.php';
?>

<?php
$title = 'Pagina piante';

if(count($_GET)>0):
    $risultato = Vivaio::Elimina($_GET);
    $piante = Vivaio::Tutti();
else:
    $piante = Vivaio::Tutti();
endif;
?>

<!-- header -->
<?php
include './templates/header.php';
?>

<center><h1 >Lista piante</h1>
    <button><a href="piante_aggiungi.php">Aggiungi pianta</a></button>
</center>
<!-- contenuto pagina -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Immagine</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th />
        </tr>
    </thead>
    <tbody>
        <?php foreach ($piante as $value) : ?>
            <tr>
                <td><?php echo $value['pk_pianta']; ?></td>
                <td><img src="images/gallery/<?php echo $value['immagine']; ?>" width="100px"></td>
                <td><?php echo $value['nome']; ?></td>
                <td><span style="padding-left: 30px"><?php echo $value['cod_cat']; ?></span></td>
                <td>
                    <a href="piante_modifica.php?piantaid=<?php echo $value['pk_pianta']; ?>">
                        Modifica
                    </a>
                </td>
                <td>
                    <a href="piante.php?piantaid=<?php echo $value['pk_pianta']; ?>">
                        Elimina
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- footer -->
<?php
include './templates/footer.php';
?>
