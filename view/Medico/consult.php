<div class="content">
    <div class="page-inner">
        <div class="page-header">

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <h4 class="card-title">Medicos</h4>
                            <a href="<?php echo getUrl("Medico", "Medico", "getInsert"); ?>" class="ml-auto"><button class="btn btn-success btn-round">Create</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Tipo de documento</th>
                                        <th>Numero de documento</th>
                                        <th>Ips</th>
                                        <th>Actons</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
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
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>
                                            <a class='btn btn-primary btn-sm' href='<?php echo getUrl("PanelDeControl", "Company", "getUpdate", array("Emp_id" => $emp['Emp_id'])); ?>'>
                                                <i class='fa flaticon-pencil' aria-hidden='true'></i>
                                            </a>
                                            <a class='btn btn-danger btn-sm' href='<?php echo getUrl("PanelDeControl", "Company", "viewCompany", array("Emp_id" => $emp['Emp_id'])); ?>'>
                                                <i class='fa flaticon-interface-5' aria-hidden='true'></i>
                                            </a>
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