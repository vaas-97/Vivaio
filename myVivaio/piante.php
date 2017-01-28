<?php
include_once './config/init.php';

$title = 'Pagina piante';

$piante = Vivaio::Tutti();
?>

<!-- header -->
<?php
include './templates/header.php';
?>

<h1>Lista piante</h1>

<!-- contenuto pagina -->
<table>
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
                <td><?php echo $value['cod_cat']; ?></td>
                <td>
                    <a href="piante_modifica.php?piantaid=<?php echo $value['pk_pianta']; ?>">
                        Modifica
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
