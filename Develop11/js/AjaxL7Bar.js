$(document).ready(function() {
setInterval(function() { rebindTable() }, 5000);

function rebindTable() {
    $.ajax({
        data: "linea="+"7"+"&nemo="+"BAR",
        url: "http://localhost/test1/Develop11/php/table7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL7_BAR').html(data);
        }
    });

}
})
