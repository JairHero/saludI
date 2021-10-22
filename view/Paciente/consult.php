<div class="content">
	<div class="page-inner">
		<div class="page-header">

		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="d-flex">
							<h4 class="card-title">Pacientes</h4>
							<a href="<?php echo getUrl("Paciente", "Paciente", "getInsert"); ?>" class="ml-auto"><button class="btn btn-success btn-round">Create</button></a>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="basic-datatables" class="display table table-striped table-hover">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nombre</th>
										<th>Tipo de documento</th>
										<th>Numero de documento</th>
										<th>Ips</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Julian Giraldo</td>
										<td>Cedula de Ciudadania</td>
										<td>1007706733</td>
										<td>Emsannar</td>
										<td>
                                            <a class='btn btn-primary btn-sm' href='<?php echo getUrl("Medico", "Medico", "getUpdate", array("medId" => "prueba")); ?>'>
                                                <i class='fa flaticon-pencil' aria-hidden='true'></i>
                                            </a>
                                            <button class='btn btn-danger btn-sm' id='alert_demo_7'>
                                                <i class='fa flaticon-interface-5' aria-hidden='true'></i>
                                            </button>
                                        </td>
									</tr>
									<tr>
										<td>2</td>
										<td>Johan Muelas</td>
										<td>Cedula de Ciudadania</td>
										<td>1006656722</td>
										<td>Colsanias</td>
										<td>
                                            <a class='btn btn-primary btn-sm' href='<?php echo getUrl("Medico", "Medico", "getUpdate", array("medId" => "prueba")); ?>'>
                                                <i class='fa flaticon-pencil' aria-hidden='true'></i>
                                            </a>
                                            <button class='btn btn-danger btn-sm' id='alert_demo_7'>
                                                <i class='fa flaticon-interface-5' aria-hidden='true'></i>
                                            </button>
                                        </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>