<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(
        function() {
            var data = google.visualization.arrayToDataTable([
                [       '', 'Cold', 'Hot'],
                ['now', <?php echo abs($cold) ?>,  <?php echo $hot ?>       ]
            
            ]);
    
            var options = {
                title: 'ポイント',
            };
    
            var chart = new google.visualization.ColumnChart(document.getElementById('gct_sample_column'));
            chart.draw(data, options);
        }
    );
</script>
<div id="gct_sample_column" style="width:100%; height:250pt" ></div>