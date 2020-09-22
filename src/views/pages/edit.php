<?php $render('header'); ?>
    
    <section id="edit">
        <div class="container column">
            <h2>Editar Usuário</h2>

            <form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id']?>/editar" class="column">
                <label>
                    Nome:
                    <input type="text" name="name" value="<?=$usuario['nome'];?> " autocomplete="off"/>
                </label> <br>
                
                <label>
                    Email:
                    <input type="email" name="email" value="<?=$usuario['email'];?>" autocomplete="off"/>
                </label> <br>

                <input type="submit" value="Salvar"/>
            </form>
        </div>
    </section>
    
<?php $render('footer'); ?>