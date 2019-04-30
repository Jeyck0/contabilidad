$(function(){
    $('#select_factura_egreso').click(function(){
        $('#miModal').modal("show");

    $('input[type="radio"]').click(function(){         
        var radio_id = $(this).val(); 

        if(radio_id){
            $.ajax({
                url:"http://localhost/conta/js/factDatalv.php",
                method:"POST",
                data: 'radio_id='+radio_id,
                error: function(request, errorcode, errortext){
                    $("#respuesta").html("<p>Ocurrió el siguiente error: <strong>" + errortext + "</strong></p>");
                },
                success: function(html){
                    $('#select_factura_egreso').html(html);

                }
            }); 
        }else{
            alert("malo");
            $('#select_cat_egresos').html('<option value="">Seleccione cuenta general</option>');

        }
                
         
        })                      
    })
})