$(document).ready(function() {
setInterval(function() { rebindTable() }, 3000);

function rebindTable() {
    $.ajax({
        data: "linea="+"6"+"&nemo="+"ROS",
        url: "http://localhost/test1/Develop10/php/table.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL6_ROS').html(data);
        }
    });

}
})
