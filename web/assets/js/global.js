$(document).ready(function(){
    $('#basic-datatables').DataTable({});

    $('#alert_demo_7').click(function(e) {
        swal({
            title: '¿Deseas eliminar sujeto?',
            type: 'warning',
            buttons:{
                confirm: {
                    text : 'Si, Eliminalo!',
                    className : 'btn btn-success'
                },
                cancel: {
                    visible: true,
                    className: 'btn btn-danger'
                }
            }
        }).then((Delete) => {
            if (Delete) {
                swal({
                    title: '¡Eliminado!',
                    text: 'Sujeto eliminado con exito.',
                    type: 'success',
                    buttons : {
                        confirm: {
                            className : 'btn btn-success'
                        }
                    }
                });
            } else {
                swal.close();
            }
        });
    });
});