<?php

include('database/dbconfig.php');
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Type of Request', 'Total of Request'],      
 <?php
$query = "SELECT id FROM petadopt WHERE avail IN ('Available for Adoption') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Availble for Adoption',".$row."],";
?>
 <?php
$query = "SELECT id FROM petadopt WHERE avail IN ('Already Adopted') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Already Adopted',".$row."],";
?>
        ]);

        var options = {
          title: 'Quantity of Pets for Adoption in the Shelter',
          pieSliceText: 'value-and-percentage',
          legend: {
          position: 'labeled'
        },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartadopt'));

        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Type of Animal', 'Quantity'],      
 <?php
$query = "SELECT id FROM petadopt WHERE type IN ('Dog') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Dog',".$row."],";
?>
 <?php
$query = "SELECT id FROM petadopt WHERE type IN ('Cat') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Cat',".$row."],";
?>
        ]);

        var options = {
          title: 'Quantity of Pets per Type for Adoption',
          pieSliceText: 'value-and-percentage',
          legend: {
          position: 'labeled'
        },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartadopttype'));

        chart.draw(data, options);
      }
    </script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Type of Request", "Quantity Request", { role: "style" } ],
        <?php
$query = "SELECT id FROM adopt WHERE stat IN ('Not Yet Seen') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Not Yet Seen Request',".$row.",'blue'],";
?>
 <?php
$query = "SELECT id FROM adopt WHERE stat IN ('Already Seen') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Already Seen Request',".$row.",'red'],";
?>
 <?php
$query = "SELECT id FROM adopt WHERE stat IN ('Evaluating Adoption Request') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Evaluating Request',".$row.",'yellow'],";
?>
 <?php
$query = "SELECT id FROM adopt WHERE stat IN ('Adoption Request Accepted') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Request Accepted',".$row.",'green'],";
?>
 <?php
$query = "SELECT id FROM adopt WHERE stat IN ('Adoption Request Decline') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Request Decline',".$row.",'violet'],";
?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Quantity of Adoption Request",
        width: 800,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchartadopt_values"));
      chart.draw(view, options);
  }
  </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Type of Request", "Quantity Request", { role: "style" } ],
//january
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-01-01' and '2021-01-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['January',".$row.",'#1511f7'],";
?>//february
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-02-01' and '2021-02-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['February',".$row.",'#e31010'],";
?>//March
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-03-01' and '2021-03-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['March',".$row.",'#edf50c'],";
?>//April
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-04-01' and '2021-04-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['April',".$row.",'#0eed12'],";
?>//May
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-05-01' and '2021-05-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['May',".$row.",'#e00af0'],";
?>//jUNE
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-06-01' and '2021-06-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['June',".$row.",'#e36817'],";
?>//july
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-07-01' and '2021-07-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['July',".$row.",'#b3803e'],";
?>//August
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-08-01' and '2021-08-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['August',".$row.",'#3ef09a'],";
?>//Sept
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-09-01' and '2021-09-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['September',".$row.",'#b3e366'],";
?>//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-10-01' and '2021-10-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['October',".$row.",'#ff5291'],";
?>
//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-11-01' and '2021-11-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['November',".$row.",'#29e5f2'],";
?>
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-12-01' and '2021-12-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['December',".$row.",'#a12d37'],";
?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total Quantity of Adoption Request per Month Year 2021",
        width: 1000,
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchartadopt_values2"));
      chart.draw(view, options);
  }
  </script>

<script>

google.charts.load('current', {packages: ['bar']}).then(function () {
  google.charts.setOnLoadCallback(drawChart);
    var dataDefault = google.visualization.arrayToDataTable([
      ["Month", "Adoption Requests",{ role: 'style' }],
//january
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-01-01' and '2021-01-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['January',".$row.",'#1511f7'],";
?>//february
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-02-01' and '2021-02-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['February',".$row.",'#e31010'],";
?>//March
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-03-01' and '2021-03-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['March',".$row.",'#edf50c'],";
?>//April
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-04-01' and '2021-04-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['April',".$row.",'#0eed12'],";
?>//May
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-05-01' and '2021-05-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['May',".$row.",'#e00af0'],";
?>//jUNE
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-06-01' and '2021-06-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['June',".$row.",'#e36817'],";
?>//july
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-07-01' and '2021-07-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['July',".$row.",'#b3803e'],";
?>//August
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-08-01' and '2021-08-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['August',".$row.",'#3ef09a'],";
?>//Sept
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-09-01' and '2021-09-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['September',".$row.",'#b3e366'],";
?>//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-10-01' and '2021-10-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['October',".$row.",'#ff5291'],";
?>
//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-11-01' and '2021-11-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['November',".$row.",'#29e5f2'],";
?>
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2021-12-01' and '2021-12-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['December',".$row.",'#a12d37'],";
?>
    ]);

    var dataLibraryBooks = google.visualization.arrayToDataTable([
      ["Month", "Adoption Requests",{ role: 'style' }],
//january
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-01-01' and '2022-01-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['January',".$row.",'#1511f7'],";
?>//february
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-02-01' and '2022-02-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['February',".$row.",'#e31010'],";
?>//March
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-03-01' and '2022-03-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['March',".$row.",'#edf50c'],";
?>//April
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-04-01' and '2022-04-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['April',".$row.",'#0eed12'],";
?>//May
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-05-01' and '2021-05-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['May',".$row.",'#e00af0'],";
?>//jUNE
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-06-01' and '2022-06-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['June',".$row.",'#e36817'],";
?>//july
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-07-01' and '2022-07-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['July',".$row.",'#b3803e'],";
?>//August
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-08-01' and '2022-08-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['August',".$row.",'#3ef09a'],";
?>//Sept
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-09-01' and '2022-09-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['September',".$row.",'#b3e366'],";
?>//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-10-01' and '2022-10-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['October',".$row.",'#ff5291'],";
?>
//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-11-01' and '2022-11-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['November',".$row.",'#29e5f2'],";
?>
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2022-12-01' and '2022-12-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['December',".$row.",'#a12d37'],";
?>
    ]);

    var dataSunspots = google.visualization.arrayToDataTable([
      ["Month", "Adoption Requests",{ role: 'style' }],
//january
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-01-01' and '2023-01-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['January',".$row.",'#1511f7'],";
?>//february
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-02-01' and '2021302-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['February',".$row.",'#e31010'],";
?>//March
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-03-01' and '2023-03-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['March',".$row.",'#edf50c'],";
?>//April
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-04-01' and '2023-04-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['April',".$row.",'#0eed12'],";
?>//May
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-05-01' and '2023-05-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['May',".$row.",'#e00af0'],";
?>//jUNE
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-06-01' and '2023-06-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['June',".$row.",'#e36817'],";
?>//july
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-07-01' and '2023-07-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['July',".$row.",'#b3803e'],";
?>//August
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-08-01' and '2023-08-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['August',".$row.",'#3ef09a'],";
?>//Sept
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-09-01' and '2023-09-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['September',".$row.",'#b3e366'],";
?>//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-10-01' and '2023-10-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['October',".$row.",'#ff5291'],";
?>
//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-11-01' and '2023-11-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['November',".$row.",'#29e5f2'],";
?>
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2023-12-01' and '2023-12-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['December',".$row.",'#a12d37'],";
?>
    ]);

    var dataYear2024 = google.visualization.arrayToDataTable([
      ["Month", "Adoption Requests",{ role: 'style' }],
//january
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-01-01' and '2024-01-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['January',".$row.",'#1511f7'],";
?>//february
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-02-01' and '2024-02-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['February',".$row.",'#e31010'],";
?>//March
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-03-01' and '2024-03-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['March',".$row.",'#edf50c'],";
?>//April
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-04-01' and '2024-04-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['April',".$row.",'#0eed12'],";
?>//May
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-05-01' and '2024-05-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['May',".$row.",'#e00af0'],";
?>//jUNE
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-06-01' and '2024-06-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['June',".$row.",'#e36817'],";
?>//july
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-07-01' and '2024-07-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['July',".$row.",'#b3803e'],";
?>//August
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-08-01' and '2024-08-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['August',".$row.",'#3ef09a'],";
?>//Sept
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-09-01' and '2024-09-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['September',".$row.",'#b3e366'],";
?>//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-10-01' and '2024-10-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['October',".$row.",'#ff5291'],";
?>
//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-11-01' and '2024-11-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['November',".$row.",'#29e5f2'],";
?>
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2024-12-01' and '2024-12-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['December',".$row.",'#a12d37'],";
?>
    ]);

    var dataYear2025 = google.visualization.arrayToDataTable([
      ["Month", "Adoption Requests",{ role: 'style' }],
//january
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-01-01' and '2025-01-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['January',".$row.",'#1511f7'],";
?>//february
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-02-01' and '2025-02-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['February',".$row.",'#e31010'],";
?>//March
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-03-01' and '2025-03-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['March',".$row.",'#edf50c'],";
?>//April
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-04-01' and '2025-04-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['April',".$row.",'#0eed12'],";
?>//May
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-05-01' and '2025-05-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['May',".$row.",'#e00af0'],";
?>//jUNE
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-06-01' and '2025-06-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['June',".$row.",'#e36817'],";
?>//july
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-07-01' and '2025-07-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['July',".$row.",'#b3803e'],";
?>//August
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-08-01' and '2025-08-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['August',".$row.",'#3ef09a'],";
?>//Sept
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-09-01' and '2025-09-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['September',".$row.",'#b3e366'],";
?>//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-10-01' and '2025-10-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['October',".$row.",'#ff5291'],";
?>
//november
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-11-01' and '2025-11-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['November',".$row.",'#29e5f2'],";
?>
<?php
$query = "SELECT id FROM adopt WHERE arrived_time BETWEEN '2025-12-01' and '2025-12-31'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['December',".$row.",'#a12d37'],";
?>
    ]);


    var options = {
        chart: {
        title: "Total Quantity of Adoption Request of the Animal Shelter per Month",

        }
    };

    var chart = new google.charts.Bar(document.getElementById('chartadopt_div'));

    var menu = document.getElementById('menu');
    menu.addEventListener('change', drawChart, false);

    drawChart();
    function drawChart() {
      switch (menu.selectedIndex) {
        case 1:
          console.log('Year 2021');
          chart.draw(dataLibraryBooks, google.charts.Bar.convertOptions(options));
          break;

        case 2:
          console.log('Year 2022');
          chart.draw(dataSunspots, google.charts.Bar.convertOptions(options));
          break;

          case 3:
          console.log('Year 2024');
          chart.draw(dataYear2024, google.charts.Bar.convertOptions(options));
          break;

          case 4:
          console.log('Year 2025');
          chart.draw(dataYear2025, google.charts.Bar.convertOptions(options));
          break;

        default:
          console.log('Year 2023');
          chart.draw(dataDefault, google.charts.Bar.convertOptions(options));
      }
    }
});

</script>