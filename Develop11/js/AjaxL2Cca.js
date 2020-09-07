$(document).ready(function() {
setInterval(function() { rebindTable() }, 5000);

function rebindTable() {
    $.ajax({
        data: "linea="+"2"+"&nemo="+"CCA",
        url: "http://localhost/test1/Develop11/php/table1a6.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL2_CCA').html(data);
        }
    });

}
})
