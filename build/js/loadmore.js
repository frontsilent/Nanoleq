jQuery(function($){
    $('#loadmore').click(function(){
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        $.ajax({
            url:ajaxurl, // обработчик
            data:data, // данные
            type:'POST', // тип запроса
            success:function(data){
                if( data ) {
                    $('#blog-list').prepend(data); // вставляем новые посты
                    current_page++; // увеличиваем номер страницы на единицу
                    if (current_page == max_pages) $("#loadmore").remove(); // если последняя страница, удаляем кнопку
                } else {
                    $('#loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
                }
            }
        });
    });
});