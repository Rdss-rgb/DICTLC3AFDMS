<?php

include('database/dbconfig.php');
?>




<script>

google.charts.load('current', {packages: ['bar']}).then(function () {
  google.charts.setOnLoadCallback(drawChart);
    var dataDefault = google.visualization.arrayToDataTable([
      ['Month of Expenses', 'Money Spent ',],
        <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-01-01' and '2021-01-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['January',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-02-01' and '2021-02-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['February',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-03-01' and '2021-03-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['March',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-04-01' and '2021-04-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['April',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-05-01' and '2021-05-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['May',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-06-01' and '2021-06-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['June',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-07-01' and '2021-07-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['July',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-08-01' and '2021-08-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['August',".$result['SalesQuantity'].",],";
          }
          ?>
        <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-09-01' and '2021-09-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['September',".$result['SalesQuantity'].",],";
          }
          ?>
             <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-10-01' and '2021-10-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['October',".$result['SalesQuantity'].",],";
          }
          ?>
              <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-11-01' and '2021-11-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['November',".$result['SalesQuantity'].",],";
          }
          ?>
              <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2021-12-01' and '2021-12-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['December',".$result['SalesQuantity'].",],";
          }
          ?>
    ]);

    var dataLibraryBooks = google.visualization.arrayToDataTable([
      ['Month of Expenses', 'Money Spent ',],
        <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-01-01' and '2022-01-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['January',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-02-01' and '2022-02-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['February',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-03-01' and '2022-03-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['March',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-04-01' and '2022-04-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['April',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-05-01' and '2022-05-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['May',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-06-01' and '2022-06-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['June',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-07-01' and '2022-07-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['July',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-08-01' and '2022-08-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['August',".$result['SalesQuantity'].",],";
          }
          ?>
        <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-09-01' and '2022-09-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['September',".$result['SalesQuantity'].",],";
          }
          ?>
             <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-10-01' and '2022-10-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['October',".$result['SalesQuantity'].",],";
          }
          ?>
              <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-11-01' and '2022-11-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['November',".$result['SalesQuantity'].",],";
          }
          ?>
              <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2022-12-01' and '2022-12-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['December',".$result['SalesQuantity'].",],";
          }
          ?>
    ]);

    var dataSunspots = google.visualization.arrayToDataTable([
      ['Month of Expenses', 'Money Spent ',],
        <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-01-01' and '2023-01-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['January',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-02-01' and '2023-02-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['February',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-03-01' and '2023-03-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['March',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-04-01' and '2023-04-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['April',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-05-01' and '2023-05-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['May',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-06-01' and '2023-06-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['June',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-07-01' and '2023-07-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['July',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-08-01' and '2023-08-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['August',".$result['SalesQuantity'].",],";
          }
          ?>
        <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-09-01' and '2023-09-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['September',".$result['SalesQuantity'].",],";
          }
          ?>
             <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-10-01' and '2023-10-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['October',".$result['SalesQuantity'].",],";
          }
          ?>
              <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-11-01' and '2023-11-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['November',".$result['SalesQuantity'].",],";
          }
          ?>
              <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2023-12-01' and '2023-12-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['December',".$result['SalesQuantity'].",],";
          }
          ?>
    ]);

    var dataYear2024 = google.visualization.arrayToDataTable([
      ['Month of Expenses', 'Money Spent ',],
        <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-01-01' and '2024-01-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['January',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-02-01' and '2024-02-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['February',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-03-01' and '2024-03-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['March',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-04-01' and '2024-04-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['April',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-05-01' and '2024-05-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['May',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-06-01' and '2024-06-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['June',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-07-01' and '2024-07-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['July',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-08-01' and '2024-08-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['August',".$result['SalesQuantity'].",],";
          }
          ?>
        <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-09-01' and '2024-09-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['September',".$result['SalesQuantity'].",],";
          }
          ?>
             <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-10-01' and '2024-10-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['October',".$result['SalesQuantity'].",],";
          }
          ?>
              <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-11-01' and '2024-11-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['November',".$result['SalesQuantity'].",],";
          }
          ?>
              <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2024-12-01' and '2024-12-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['December',".$result['SalesQuantity'].",],";
          }
          ?>
    ]);

    var dataYear2025 = google.visualization.arrayToDataTable([
      ['Month of Expenses', 'Money Spent ',],
        <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-01-01' and '2025-01-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['January',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-02-01' and '2025-02-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['February',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-03-01' and '2025-03-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['March',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-04-01' and '2025-04-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['April',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-05-01' and '2025-05-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['May',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-06-01' and '2025-06-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['June',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-07-01' and '2025-07-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['July',".$result['SalesQuantity'].",],";
          }
          ?>
          <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-08-01' and '2025-08-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['August',".$result['SalesQuantity'].",],";
          }
          ?>
        <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-09-01' and '2025-09-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['September',".$result['SalesQuantity'].",],";
          }
          ?>
             <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-10-01' and '2025-10-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['October',".$result['SalesQuantity'].",],";
          }
          ?>
              <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-11-01' and '2025-11-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['November',".$result['SalesQuantity'].",],";
          }
          ?>
              <?php
          $sql = "SELECT SUM(totalexp) SalesQuantity, date from expenses WHERE date BETWEEN '2025-12-01' and '2025-12-31' ";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
          echo"['December',".$result['SalesQuantity'].",],";
          }
          ?>
    ]);


    var options = {
        chart: {
        title: "Total Money Spent per Month",

        }
    };

    var chart = new google.charts.Bar(document.getElementById('chartexp_div'));

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
