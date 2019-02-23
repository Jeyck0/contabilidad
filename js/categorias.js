$('#principal').on('change',function(){
    var principalID = $(this).val();
    if(principalID){
        $.ajax({
            type:'POST',
            url:'ajaxData.php',
            data:'country_id='+countryID,
            success:function(html){
                $('#state').html(html);
                $('#city').html('<option value="">Select state first</option>'); 
            }
        }); 
    }else{
        $('#state').html('<option value="">Select country first</option>');
        $('#city').html('<option value="">Select state first</option>'); 
    }
});
