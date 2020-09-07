$(document).ready(function() {
setInterval(function() { rebindTable() }, 3000);

function rebindTable() {
    $.ajax({
        data: "nemo="+"BAR",
        url: "http://localhost/test1/Develop10/php/tableC.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL7_BAR').html(data);
        }
    });

}
})
