@extends('template/template')

@section('title','Statistik | LPPM UDINUS')

@section('container')

<div class="container mt-5">
    <h1 class="text-center">STATISTIKA</h1>
    <hr>
    <div id="chartPenelitian" style="width:100%; height:400px;"></div>
    <div class="row mt-5">
        <div id="chartPenelitianFakultas" style="width:100%; height:400px;"></div>    
    </div>
    <div class="row mt-5">
        <div id="chartPenelitianKategori" style="width:100%; height:400px;"></div>    
    </div>
</div>


<script>
    Highcharts.chart('chartPenelitian', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Penelitian Per Tahun'
        },
        xAxis: {
            categories: {!! json_encode($tahun) !!}, 
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Penelitian',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4]

        }]
    });
                
</script>
<script>
    Highcharts.chart('chartPenelitianFakultas', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Penelitian Per Fakultas'
        },
        xAxis: {
            categories: {!! json_encode($fakultas) !!}, 
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Fakultas',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }]
    });
                
</script>
<script>
    Highcharts.chart('chartPenelitianKategori', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Penelitian Per Kategori'
        },
        xAxis: {
            categories: {!! json_encode($kategori) !!}, 
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Kategori',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }]
    });
                
</script>
@endsection