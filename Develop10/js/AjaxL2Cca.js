$(document).ready(function() {
setInterval(function() { rebindTable() }, 3000);

function rebindTable() {
    $.ajax({
        data: "linea="+"2"+"&nemo="+"CCA",
        url: "http://localhost/test1/Develop10/php/table.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL2_CCA').html(data);
        }
    });

}
})
