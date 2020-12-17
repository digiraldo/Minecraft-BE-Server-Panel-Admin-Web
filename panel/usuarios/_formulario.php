<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-user-check"></i> Actualizar Usuario: <b><?php echo $usuarioN['name'] ?></b></h3>
        </div>
            <div class="card-body">
            <form action="" method="POST" role="form">
                <legend></legend>
                    <div class="form-group">
                        <label for="my-input">Nombre</label>
                        <input id="my-input" value="<?php echo $usuarioN['name'] ?>" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Id xuid</label>
                        <input id="my-input" value="<?php echo $usuarioN['xuid'] ?>" class="form-control" type="text" name="xuid">
                    </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
            </div>
    </div>

</div>