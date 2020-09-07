<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="Bootstrap_4/js/bootstrap.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<div id="contenedor-modal"></div>

<script>
    var chart1, options;
    function holis() {
        $.ajax({ 
            url: "datos/graficos.php",
            type: "POST",
            dataType: "json",
            success: function (data) {
                options.series[0].data = data;
                chart1 = new Highcharts.Chart(options);
                console.log(data);
            }
        })
        datos();
    };

    function datos() {
        var v_modal = $("#modal_1").modal({ show: false });
        options = {
            chart: {
                renderTo: 'contenedor-modal',
                type: 'line'
            },
            title: {
                text: 'STC METRO'
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: ' Horas'
                }
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                       // dateFormat:'{%h:%M}'
                    }
                }
            },
            tooltip: {
                headerFormat: "<span style='font-size:11px'> {series.name}</span><br>",
                pointFormat: "<span style='color:{point.color}'>{point.name}</span>: <b>{point.y:.0f}</b>"
            },
            series: [{
                name: "Dia",
                colorByPoint: true,
                data: [],
            }]
        }
        v_modal.on("shown", function () { });
        v_modal.modal("show");
    }
    holis();
</script>