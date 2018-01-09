function myFunktion() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        if (!tr[i].classList.contains('header')) {
            td = tr[i].getElementsByTagName("td"),
                match = false;
            for (j = 0; j < td.length; j++) {
                if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    match = true;
                    break;
                }
            }
            if (!match) {
                tr[i].style.display = "none";
            } else {
                tr[i].style.display = "";
            }
        }
    }
}