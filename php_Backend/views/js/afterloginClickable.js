jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href" + "id?=2017102001");
    });
});

