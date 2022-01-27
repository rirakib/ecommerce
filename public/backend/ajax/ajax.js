$('#cat_id').change(function(){
    let cat = jQuery(this).val();
    $.ajax({
        type:'post',
        url:'/get/data',
        data:'cat='+cat,
        success:function(response){
            jQuery('#subcategory').html(response)
        }
    })

})

