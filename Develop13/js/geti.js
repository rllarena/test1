$(document).on('click', 'button', function(){
    var id = $(this).attr("id");
    //alert(id);
    switch (id) {
        case 'idL1Pan':
            setInterval(function() { reTableL1PAN(),reGrafL1PAN()}, 2000);
            break;
        case 'idL1Obs':
            setInterval(function() { reTableL1OBS(),reGrafL1OBS()}, 2000);
            break;
        case 'idL2Tas':
            setInterval(function() { reTableL2TAS(),reGrafL2TAS()}, 2000);
            break;
        case 'idL2Cca':
            setInterval(function() { reTableL2CCA(),reGrafL2CCA()}, 2000);
            break;
        case 'idL3Uni':
            setInterval(function() { reTableL3UNI(),reGrafL3UNI()}, 2000);
            break;
        case 'idL3Inv':
            setInterval(function() { reTableL3INV(),reGrafL3INV()}, 2000);
            break;
        case 'idL4Saa':
            setInterval(function() { reTableL4SAA(),reGrafL4SAA()}, 2000);
            break;
        case 'idL4Mar':
            setInterval(function() { reTableL4MAR(),reGrafL4MAR()}, 2000);
            break;
        case 'idL5Pol':
            setInterval(function() { reTableL5POL(),reGrafL5POL()}, 2000);
            break;
        case 'idL5Pan':
            setInterval(function() { reTableL5PAN(),reGrafL5PAN()}, 2000);
            break;
        case 'idL6Ros':
            setInterval(function() { reTableL6ROS(),reGrafL6ROS()}, 2000);
            break;
        case 'idL6Mar':
            setInterval(function() { reTableL6MAR(),reGrafL6MAR()}, 2000);
            break;
        case 'idL7Ros':
            setInterval(function() { reTableL7ROS(),reGrafL7ROS()}, 2000);
            break;
        case 'idL7Bar':
            setInterval(function() { reTableL7BAR(),reGrafL7BAR()}, 2000);
            break;
        default:
            //alert('DEFAULT');
            break;
    }
});

function reTableL1PAN() {
    $.ajax({
        data: "linea="+"1"+"&nemo="+"PAN",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL1_PAN').html(data);
        }
    });
}
function reGrafL1PAN() {
    $.ajax({
        data: "linea="+"1"+"&nemo="+"PAN",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL1_PAN').html(data);
        }
    });
}
function reTableL1OBS() {
    $.ajax({
        data: "linea="+"1"+"&nemo="+"OBS",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL1_OBS').html(data);
        }
    });
}
function reGrafL1OBS() {
    $.ajax({
        data: "linea="+"1"+"&nemo="+"OBS",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL1_OBS').html(data);
        }
    });
}



function reTableL2TAS() {
    $.ajax({
        data: "linea="+"2"+"&nemo="+"TAS",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL2_TAS').html(data);
        }
    });
}
function reGrafL2TAS() {
    $.ajax({
        data: "linea="+"2"+"&nemo="+"TAS",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL2_TAS').html(data);
        }
    });
}

function reTableL2CCA() {
    $.ajax({
        data: "linea="+"2"+"&nemo="+"CCA",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL2_CCA').html(data);
        }
    });
}
function reGrafL2CCA() {
    $.ajax({
        data: "linea="+"2"+"&nemo="+"CCA",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL2_CCA').html(data);
        }
    });
}




function reTableL3UNI() {
    $.ajax({
        data: "linea="+"3"+"&nemo="+"UNI",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL3_UNI').html(data);
        }
    });
}
function reGrafL3UNI() {
    $.ajax({
        data: "linea="+"3"+"&nemo="+"UNI",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL3_UNI').html(data);
        }
    });
}

function reTableL3INV() {
    $.ajax({
        data: "linea="+"3"+"&nemo="+"INV",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL3_INV').html(data);
        }
    });
}
function reGrafL3INV() {
    $.ajax({
        data: "linea="+"3"+"&nemo="+"INV",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL3_INV').html(data);
        }
    });
}




function reTableL4SAA() {
    $.ajax({
        data: "linea="+"4"+"&nemo="+"SAA",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL4_SAA').html(data);
        }
    });
}
function reGrafL4SAA() {
    $.ajax({
        data: "linea="+"4"+"&nemo="+"SAA",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL4_SAA').html(data);
        }
    });
}

function reTableL4MAR() {
    $.ajax({
        data: "linea="+"4"+"&nemo="+"MAR",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL4_MAR').html(data);
        }
    });
}
function reGrafL4MAR() {
    $.ajax({
        data: "linea="+"4"+"&nemo="+"MAR",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL4_MAR').html(data);
        }
    });
}





function reTableL5POL() {
    $.ajax({
        data: "linea="+"5"+"&nemo="+"POL",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL5_POL').html(data);
        }
    });
}
function reGrafL5POL() {
    $.ajax({
        data: "linea="+"5"+"&nemo="+"POL",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL5_POL').html(data);
        }
    });
}

function reTableL5PAN() {
    $.ajax({
        data: "linea="+"5"+"&nemo="+"PAN",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL5_PAN').html(data);
        }
    });
}
function reGrafL5PAN() {
    $.ajax({
        data: "linea="+"5"+"&nemo="+"PAN",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL5_PAN').html(data);
        }
    });
}



function reTableL6MAR() {
    $.ajax({
        data: "linea="+"6"+"&nemo="+"MAR",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL6_MAR').html(data);
        }
    });
}
function reGrafL6MAR() {
    $.ajax({
        data: "linea="+"6"+"&nemo="+"MAR",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL6_MAR').html(data);
        }
    });
}

function reTableL6ROS() {
    $.ajax({
        data: "linea="+"6"+"&nemo="+"ROS",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL6_ROS').html(data);
        }
    });
}
function reGrafL6ROS() {
    $.ajax({
        data: "linea="+"6"+"&nemo="+"ROS",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL6_ROS').html(data);
        }
    });
}


function reTableL7BAR() {
    $.ajax({
        data: "linea="+"7"+"&nemo="+"BAR",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL7_BAR').html(data);
        }
    });
}
function reGrafL7BAR() {
    $.ajax({
        data: "linea="+"7"+"&nemo="+"BAR",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL7_BAR').html(data);
        }
    });
}

function reTableL7ROS() {
    $.ajax({
        data: "linea="+"7"+"&nemo="+"ROS",
        url: "php/table1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#RegL7_ROS').html(data);
        }
    });
}
function reGrafL7ROS() {
    $.ajax({
        data: "linea="+"7"+"&nemo="+"ROS",
        url: "php/grafL1a7.php",
        type: 'post',
        success: function(result) {
            var data = result;
            $('div#GraL7_ROS').html(data);
        }
    });
}
