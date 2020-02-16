$(document).ready(function() {
    var search_form = $("#search_form");
    var search_bar = $("#search_bar");
    
    search_form.submit(function(e) {
        if (search_bar.val() === "")
            e.preventDefault();
        else
            search_form.submit();
    });
});
