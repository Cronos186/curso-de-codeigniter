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
                </tr>
                <?php foreach ($alumns as $alumn):?>
                    <tr>
                        <td><?php echo $alumn->dni;?></td>
                        <td><?php echo $alumn->name;?></td>
                        <td><?php echo $alumn->lastname;?></td>
                        <td><?php echo $alumn->genre;?></td>
                        <td><?php echo $alumn->address;?></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>