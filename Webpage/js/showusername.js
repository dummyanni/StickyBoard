//If page loads, it displays the right username
$(function () {
    $.ajax({
        type: "GET",
        url: "/include/username.php",
        success: function (msg) {
            document.getElementById("account").innerHTML = msg;
        }
    });
    if (document.body.contains("datepick")) {
        $("#datepick").datepicker({minDate: 0}); //datepicker for due date in create task
    }
});