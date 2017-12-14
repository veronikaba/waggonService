src="http://code.jquery.com/jquery-latest.pack.js";

    $(document).ready(function() {
        $('tr#row').click(function(event) {
            window.location.href = 'http://waggonservice.f4.htw-berlin.de/views/orderdetail.php';
        });
    });
