@extends('layouts.app')

@section('content')
<?php 
	$result = DB::table('users') ->sum('feel');
	$hot = DB::table('users') ->where('feel','>','0') ->sum('feel');
	$cold = DB::table('users') ->where('feel','<','0') ->sum('feel');
    $hotcount = DB::table('users') ->where('feel','>','0') ->count('feel');
	$coldcount = DB::table('users') ->where('feel','<','0') ->count('feel');
?>     
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([ //グラフデータの指定
        ['Task', 'Hours per Day'],
        ['Cold',      <?php echo $coldcount?>],
        ['Hot',     <?php echo $hotcount?>]
     
       
]);
var options = { //オプションの指定
        pieSliceText: 'label',
        title: 'How feel your man'
};
var chart = new google.visualization.PieChart(document.getElementById('piechart')); //グラフを表示させる要素の指定
    chart.draw(data, options);
}
</script>
<div id="piechart"></div>
            

@endsection