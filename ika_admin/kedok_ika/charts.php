<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Grafik Pengunjung</title>

		<script type="text/javascript" src="assets/charts/jquery.min.js"></script>
		<script src="assets/charts/highcharts.js"></script>

		<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'area',
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Statistik Pengunjung Senin-Sabtu',
                x: -20 //center
            },
            subtitle: {
                text: 'Website Ilmu Kesehatan Anak',
                x: -20
            },
            xAxis: {
                categories: ['Senin', 'Selasa', 'Rabu','Kamis','Jumat','Sabtu','minggu']
            },
            yAxis: {
                title: {
                    text: 'Jumlah pengunjung'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y ;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series: [{
                name: 'Visitor',
                data: [1660, 1946,2271,2590,3004,3550,2000]
            }]
        });
    });
    
});
		</script>
	</head>
	<body>


<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
	</body>
</html>