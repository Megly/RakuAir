<div class="icon-image">
    <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="result-top">

<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([ //グラフデータの指定
        ['Task', 'Hours per Day'],
        ['Cold',    <?php echo $countcold ?>],
        ['Hot',     <?php echo $counthot ?>],
        ['Comfortable',     <?php echo $countcom ?>]
        
     
       
]);
var options = { //オプションの指定
        'backgroundColor': {'fill':'#fffef4'},
};
var chart = new google.visualization.PieChart(document.getElementById('piechart')); //グラフを表示させる要素の指定
    chart.draw(data, options);
}
</script>
<div id="piechart"></div>

</div>