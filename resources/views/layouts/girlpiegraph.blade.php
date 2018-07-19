<div class="result-top">

<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([ //グラフデータの指定
        ['Task', 'Hours per Day'],
        ['Cold',    <?php echo $countgirlcold ?>],
        ['Hot',     <?php echo $countgirlhot ?>],
        ['Comfortable',     <?php echo $countcomgirl ?>]
        
     
       
]);
var options = { //オプションの指定
        title: 'Women',
        'backgroundColor': {'fill':'#fffef4'},
};
var chart = new google.visualization.PieChart(document.getElementById('girlpiechart')); //グラフを表示させる要素の指定
    chart.draw(data, options);
}
</script>
<div id="girlpiechart"></div>

</div>
