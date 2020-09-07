Morris.Line({
    element : 'chart',
    data:[<?php echo $chart_data; ?>],
xkey:'Hora',
ykeys: ['Intervalo'],
        parseTime: false,
        labels:['Intervalo'],
        xLabels: 'day',
        xLabelAngle: 45,
        goals: [3.15, 1.25],
        goalStrokeWidth: 5,
        pointSize: 2,
        hideHover: 'auto',
        resize: true