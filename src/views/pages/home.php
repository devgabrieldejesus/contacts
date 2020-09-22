<?php $render('header'); ?>
    <section>
        <div class="container column">
            <div class="add">
                <a href="<?=$base;?>/novo">+ Adicionar</a>
            </div>
            <table>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                <tr>
                <?php foreach($usuarios as $usuario):?>
                    <tr>
                        <td><?=$usuario['id'];?></td>
                        <td><?=$usuario['nome'];?></td>
                        <td><?=$usuario['email'];?></td>
                        <td>
                            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
                                <img src="<?=$base;?>/assets/images/edit.svg" alt="" />
                            </a>
                            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir">
                                <img src="<?=$base;?>/assets/images/del.svg" alt="" />
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
<?php $render('footer'); ?>