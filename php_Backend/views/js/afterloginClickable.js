src="http://code.jquery.com/jquery-latest.pack.js";

    $(document).ready(function() {
        $('.table > tbody > tr').click(function(event) {
            window.location.href = 'http://waggonservice.f4.htw-berlin.de/views/orderdetail.php';
        });
    });
