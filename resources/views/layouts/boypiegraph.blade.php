<div class="result-top">

<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([ //グラフデータの指定
        ['Task', 'Hours per Day'],
        ['Cold',    <?php echo $countboycold ?>],
        ['Hot',     <?php echo $countboyhot ?>],
        ['Comfortable',     <?php echo $countcomboy ?>]
        
     
       
]);
var options = { //オプションの指定
         title: 'Men',
        'backgroundColor': {'fill':'#fffef4'},
};
var chart = new google.visualization.PieChart(document.getElementById('boypiechart')); //グラフを表示させる要素の指定
    chart.draw(data, options);
}
</script>
<div id="boypiechart"></div>

</div>
