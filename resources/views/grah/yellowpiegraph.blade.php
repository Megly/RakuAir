<div class="result-top">
<div class="grah">
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([ //グラフデータの指定
        ['Task', 'Hours per Day'],
        ['Cold',    <?php echo $countyellowcold ?>],
        ['Hot',     <?php echo $countyellowhot ?>],
        ['Comfortable',     <?php echo $countcomyellow ?>]
        
     
       
]);
var options = { //オプションの指定
         title: 'C',
        'backgroundColor': {'fill':'#fff'},
        width: 500,
                height: 300,
};
var chart = new google.visualization.PieChart(document.getElementById('yellowpiechart')); //グラフを表示させる要素の指定
    chart.draw(data, options);
}
</script>
<div id="yellowpiechart"></div>

</div>
</div>