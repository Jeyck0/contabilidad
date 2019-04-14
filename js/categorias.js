
$(function(){
    $('#select_cuenta_egresos').val('').attr('selected');
    $('#select_cat_egresos_padre').val('').attr('selected');
    $('#select_cat_egresos').val('').attr('selected');
    $('#select_factura_egreso').val('').attr('selected');

    $('#select_cat_egresos_padre').on('change',function(){
        var padreID = $(this).val();
        var getUrl = window.location;
        var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];


        var callback = function(data){
            console.log(data);
        }
        
        if(padreID){
            $.ajax({
                url:baseUrl+"/js/ajaxData.php?callback=callback",
                method:"GET",
                data: 'padre_id='+padreID,
                dataType:"jsonp",
                jsonpCallback:"jsonCallback"
            }); 
        }



    });
});
