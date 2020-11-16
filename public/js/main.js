function setStatus(id) {
    $.ajax({
        type: 'GET',
        url: '/manager/set-status/' + id,
        success: function(result){
            if(result['status'] == 'success'){
                var el = $('.btn-item-'+result['id']);
                el.attr('disabled', true)
                el.html('Отвечено')
            }
        },
        error:function (data) {
            alert('Ошибка, опять программисты что-то наделали...')
        }
    });
}
