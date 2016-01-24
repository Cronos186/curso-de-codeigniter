<div class="col-lg-10 col-lg-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Nuevo alumno</h3>
        </div>
        <div class="panel-body">
            <form action="<?php echo base_url('alumns/save');?>" method="post" role="form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="dni">DNI</label>
                            <input type="text" class="form-control" name="dni" id="dni" placeholder="Documento de identificación">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="lastname">Apellido</label>
                            <input type="text" class="form-control" name="lastname" id="lastname">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="genre">Género</label>
                            <select class="form-control" name="genre" id="genre">
                                <option value="">Seleccione</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <textarea class="form-control" name="address" id="address" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" name="save" id="save" class="btn btn-primary" data-loading-text="<i class='fa fa-spin fa-spinner'></i> Enviando datos...">
                            <i class="fa fa-save"></i>
                            Guardar información
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>