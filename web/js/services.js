function button(){
    function req(link, array){
        $.ajax({
            url: link,
            method: 'get',
            data: array,
            success: function () {
                console.log('suc');
            },
            error: function () {
                console.log('error');
            }
        });
        $.pjax.reload({container: "#select_pja"});
    }
    $('.select_button_wrapper').click(function (){
        let value=$(this).prev().children("h3.title-block__title").html(),
            category=$(this).data('category'),
            flag=$(this).find('.addservice').data('action');

        if(flag=="plus"){
            req('session', {name: 'services', value: [value, category].join(".")});
        }else{
            req('delete', {id: flag});
        }
    });
}

$(document).ready(function(){
    button();
});
$(document).on('pjax:complete',function (){
    button();
});

