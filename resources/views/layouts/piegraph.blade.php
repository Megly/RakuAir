 
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([ //グラフデータの指定
        ['Task', 'Hours per Day'],
        ['Cold',    <?php echo $countcold ?>],
        ['Hot',     <?php echo $counthot ?>]
     
       
]);
var options = { //オプションの指定
        'backgroundColor': {'fill':'#d1f5ff'},

};
var chart = new google.visualization.PieChart(document.getElementById('piechart')); //グラフを表示させる要素の指定
    chart.draw(data, options);
}
</script>
<div id="piechart"></div>