jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href" + "?id=" + $(this).getElementByTagName("td jobnumber").innerHTML);
    });
});

