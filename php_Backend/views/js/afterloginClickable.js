jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href" + "?id=" + "id?=" + $('td').[0].innerHTML);
    });
});

