<div class="col-lg-10 col-lg-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Listado de Alumnos</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Género</th>
                    <th>Dirección</th>
                    <th></th>
                </tr>
                <?php foreach ($alumns as $alumn):?>
                    <tr>
                        <td><?php echo $alumn->dni;?></td>
                        <td><?php echo $alumn->name;?></td>
                        <td><?php echo $alumn->lastname;?></td>
                        <td><?php echo $alumn->genre;?></td>
                        <td><?php echo $alumn->address;?></td>
                        <td>
                            <a href="<?php echo base_url('alumns/edit/' . $alumn->id);?>">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="<?php echo base_url('alumns/delete/' . $alumn->id);?>">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>