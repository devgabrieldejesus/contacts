<?php $render('header'); ?>

    <section id="add">
        <div class="container column">
            <h2>Adicionar Novo Usuário</h2>

            <form method="POST" action="<?=$base;?>/novo" class="column">
                <label>
                    Nome:
                    <input type="text" name="name" autocomplete="off" />
                </label> <br>
                
                <label>
                    Email:
                    <input type="email" name="email" autocomplete="off" />
                </label> <br>

                <input type="submit" value="Adicionar"/>
            </form>
        </div>
    </section>

<?php $render('footer'); ?>