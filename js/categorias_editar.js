
$(function(){

    $('#select_cat_egresos_padre').on('change',function(){
        var padreID = $(this).val();
        
        if(padreID){
            $.ajax({
                url:"http://localhost/conta/js/ajaxData.php",
                method:"POST",
                data: 'padre_id='+padreID,
                error: function(request, errorcode, errortext){
                    $("#respuesta").html("<p>Ocurrió el siguiente error: <strong>" + errortext + "</strong></p>");
                },
                success: function(html){
                    $('#select_cat_egresos').html(html);

                }
            }); 
        }else{
            alert("malo");
            $('#select_cat_egresos').html('<option value="">Seleccione cuenta general</option>');

        }
    });
});
