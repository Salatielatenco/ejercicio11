$(document).ready(function(){

    let nombre_usuario;
    

    $('#btn_registro_usuario').click(function(){
    nombre_usuario=$("#registro_nombre").val();
    
        recolector = "registro_nombre=" +$('#registro_nombre').val()
                    

                    $.ajax({

                    type:'POST',
                    data:
                        recolector,
                    url: 'control/control_registro.php',
                    success : function(resultado){
                            console.log(resultado)
                    }
                });
    
    });

});
