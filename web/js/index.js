function a(){
    $('.reset-button').click(function () {
        let flag = $(this).data('action');
        $.ajax({
            url: 'delete',
            method: 'get',
            data: {name: flag},
            success: function () {
                console.log(flag);
            },
            error: function () {
                console.log('error');
            }
        });
        $.pjax.reload({container: "#select_pjax"});
    })

    $('.remove-icon').click(function (){
        let id=$(this).data('id');
        console.log(id);
        $.ajax({
            url: 'servis',
            method: 'get',
            data: {id: id},
            success: function () {
                console.log('suc');
            },
            error: function () {
                console.log('error');
            }
        });
        $.pjax.reload({container: "#select_pjax"});
    });

    $('#delete').click(function (){
        $.ajax({
            url: 'delete',
            method: 'get',
            data: {name: 'time'},
            success: function () {
                console.log('success');
            },
            error: function () {
                console.log('error');
            }
        });
        $.pjax.reload({container: "#select_pjax"});
    });
}
$(document).ready(function () {
    a();
});
$(document).on('pjax:complete',function (){
    a();
});