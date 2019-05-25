$(function(){

    $('#select_cat_ingresos_padre').on('change',function(){
        var padreID = $(this).val();
        
        var getUrl = window.location;
        var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        if(padreID){
            $.ajax({
                url:baseUrl+"/js/ajaxDatalv.php",
                headers: {
                    'Access-Control-Allow-Origin': '*',
                  },
                method:"POST",
                data: 'padre_id='+padreID,
                
                error: function(request, errorcode, errortext){
                    $("#respuesta").html("<p>Ocurrió el siguiente error: <strong>" + errortext + "</strong></p>");
                },
                success: function(html){
                    $('#select_cat_ingresos').html(html);

                }
            }); 
        }else{
            alert("malo");
            $('#select_cat_ingresos').html('<option value="">Seleccione cuenta general</option>');

        }
    });

});