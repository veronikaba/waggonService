src="http://code.jquery.com/jquery-latest.pack.js";

$(document).ready(function() {

    $('#row tr').click(function() {
        var href = $(this).find("a").attr("href");
        if(href) {
            window.location = 'http://waggonservice.f4.htw-berlin.de/views/orderdetail.php';
        }
    });

});

