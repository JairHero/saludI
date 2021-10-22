<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Historias Clinicas</h2>
                    <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
                </div>

                <div class="ml-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-success btn-round">Consultar Historias Clinicas</a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Cargar Historia Clinica</div>
                            <div class="card-tools">
                                <a href="" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                    <span class="btn-label">
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                    Agregar Imagen
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="<?= getUrl('HistoriaClinica','HistoriaClinica','convertirImagenaTexto');?>" enctype="multipart/form-data" method="POST">

                            <div class="chart-container" style="min-height: 375px">
                                <div class="mb-5">
                                    <h1>Tutorial.</h1>

                                    <label class="form-label" for="imgHistoria">Seleccione una Imagen:</label>
                                <input class="form-control" type="file" name="imgHistoria" id="imgHistoria">


                                    <div class="d-inline ">
                                        <span>Paso 1</span>
                                        <img class="border border-5 m-5" src="img/paso1.jpg" style="width: 250px; height: 100px;">
                                    </div>

                                    <div class="d-inline">
                                        <span>Paso 2</span>
                                        <img class="border border-5 m-5" src="img/paso2.jpg" style="width: 250px;">
                                    </div>

                                    <div class="d-inline">
                                        <span>Paso 3</span>
                                        <img class="border border-5 m-5" src="img/paso3.jpg" style="width: 250px;">
                                    </div>
                                </div>

                                
                                <div>  
                                </div>
                            </div>
                            <div>
                                <input class="btn btn-secondary mt-4" type="submit" value="Escanear">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>