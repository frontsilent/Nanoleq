<script>
    jQuery(function($){
        var searchTerm = '';
        let searchForm = $('.blog-list__search input'),
            resultForm = $('.blog-list');

        searchForm.keydown(function(){
            searchTerm = $.trim($(this).val());
        });

        searchForm.keyup(function(){
            if ($.trim($(this).val()) != searchTerm) { // Если новое значение не равно старому, идем дальше
                searchTerm = $.trim($(this).val());
                if(searchTerm.length > 2){ // Если введено больше 2-х символов, идем дальше
                    $.ajax({
                        url : '/wp-admin/admin-ajax.php', // Ссылка на AJAX обработчик WP
                        type: 'POST', // Отправляем данные методом POST
                        data: {
                            'action' : 'ba_ajax_search', // Вызываемое действие, которое мы описали в functions.php
                            'term' : searchTerm // Отправляемые данные поля ввода
                        },
                        beforeSend: function() { // Перед отправкой данных
                            resultForm.fadeOut(); // Скроем блок результатов
                            resultForm.empty(); // Очистим блок результатов
                        },
                        success: function(result) { // После выполнения поиска
                            resultForm.fadeIn().html(result); // Покажем блок результатов и добавим в него полученные данные
                        }
                    });
                }
            }
        });

        searchForm.focusin(function() {
            $('.result-search').fadeIn();
        })

        $(document).mouseup(function(e) {
            if ((!$('.result-search').is(e.target) && $('.result-search').has(e.target).length === 0) && (!searchForm.is(e.target) && searchForm.has(e.target).length === 0)) {
                $('.result-search').fadeOut();
            }
        });
    });
</script>