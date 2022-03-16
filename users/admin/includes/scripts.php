   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/custom.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <script src = "https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src = "https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>

    <script src='https://www.hCaptcha.com/1/api.js' async defer></script>
    <script src ='https://api.paymongo.com/v1/payment_methods'></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <!-- Check main.js for sendmail function -->
    <script type="text/javascript" src="main.js"></script>

    <script src="jquery.min.js" type="text/javascript"></script>
<script src="jquery.timeago.js" type="text/javascript"></script>
<!-- Data Tables -->

<script>
$(document).ready( function () {
  var table = $('#DataTable').DataTable( {
    pageLength : 10,
    lengthMenu: [[10, 20, 30, -1], [10, 20, 30, 'ALL RECORDS']]
  } )
} );
</script>

<script>

$(document).ready(function() {
    $('#DataTableLf').DataTable( {
        order: [[ 0, "desc" ]]
    } );
} );
</script>

<script>

$(document).ready(function() {
    $('#DataTableAd').DataTable( {
        order: [[ 0, "desc" ]]
    } );
} );

</script>

<script>

$(document).ready(function() {
    $('#DataTableC').DataTable( {
        order: [[ 0, "desc" ]]
    } );
} );

</script>

<script>

$(document).ready(function() {
    $('#DataTableExp').DataTable( {
        order: [[ 0, "desc" ]]
    } );
} );

</script>

<script>

$(document).ready(function() {
    $('#DataTableMli').DataTable( {
        order: [[ 0, "desc" ]]
    } );
} );

</script>

<script>

$(document).ready(function() {
    $('#DataTableHome').DataTable( {
        order: [[ 0, "desc" ]]
    } );
} );

</script>

<script>

$(document).ready(function() {
    $('#DataTableFaq').DataTable( {
        order: [[ 0, "asc" ]]
    } );
} );

</script>


<!-- Sweet Alerts -->

<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
   ?>
<script>
      Swal.fire({
      title: "<?php echo $_SESSION ['status']; ?>",
      icon: "<?php echo $_SESSION ['status_code']; ?>",
      button: "OK Done!",
      });

</script>
   <?php
unset ($_SESSION['status']);
}
?>

</script>

<!-- Google Pie Charts -->

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
          title: 'Quantity of Pets for Adoption in the Shelter'
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
          title: 'Quantity of Pets per Type for Adoption'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartadopttype'));

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
$query = "SELECT id FROM petlf WHERE type IN ('Dog') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Dog',".$row."],";
?>
 <?php
$query = "SELECT id FROM petlf WHERE type IN ('Cat') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Cat',".$row."],";
?>
        ]);

        var options = {
          title: 'Quantity of Pets per Type for Lost & Found'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartlftype'));

        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Type of Request', 'Total of Request'],      
 <?php
$query = "SELECT id FROM petlf WHERE avail IN ('Available for a Request') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Available for a Request',".$row."],";
?>
 <?php
$query = "SELECT id FROM petlf WHERE avail IN ('Already find the Pet Owner') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Already find the Pet Owner',".$row."],";
?>
        ]);

        var options = {
          title: 'Quantity of Pets for Adoption in the Shelter'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartlost'));

        chart.draw(data, options);
      }
    </script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Type of Request', 'Total of Request'],      
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Not Yet Seen') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Not Yet Seen Request',".$row."],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Already Seen') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Already Seen Request',".$row."],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Evaluating Request') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Evaluating Request',".$row."],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Request Accepted') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Request Accepted',".$row."],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Request Decline') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Request Decline',".$row."],";
?>
        ]);

        var options = {
          title: 'Quantity of Message Request in the Shelter'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartcon'));

        chart.draw(data, options);
      }
    </script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Expenses'],
          <?php
          $query = "SELECT * FROM expenses";  
          $fire = mysqli_query($connection, $sql);
          while($row = mysqli_fetch_assoc($fire)){
          echo "['".$row['date']."',".$row['totalexp']."],";
          }
          ?>
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>




<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'controls']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var dashboard = new google.visualization.Dashboard(
          document.getElementById('programmatic_dashboard_div'));

        // We omit "var" so that programmaticSlider is visible to changeRange.
        var programmaticSlider = new google.visualization.ControlWrapper({
          'controlType': 'NumberRangeFilter',
          'containerId': 'programmatic_control_div',
          'options': {
            'filterColumnLabel': 'Pet Age',
            'ui': {'labelStacking': 'vertical'}
          }
        });

        var programmaticChart  = new google.visualization.ChartWrapper({
          'chartType': 'PieChart',
          'containerId': 'programmatic_chart_div',
          'options': {
            'width': 500,
            'height': 500,
            'legend': 'right',
            'chartArea': {'left': 15, 'top': 15, 'right': 0, 'bottom': 0},
            'pieSliceText': 'value'
          }
        });

        var data = google.visualization.arrayToDataTable([
          ['Name', 'Pet Age'],
          <?php
          $sql = "SELECT * FROM petadopt";
          $fire = mysqli_query($connection, $sql);
          while($result = mysqli_fetch_assoc($fire)){
         echo"['".$result['name']."',".$result['age']."],";
             

         }
         ?>
        ]);

        dashboard.bind(programmaticSlider, programmaticChart);
        dashboard.draw(data);

        changeRange = function() {
          programmaticSlider.setState({'lowValue': 2, 'highValue': 5});
          programmaticSlider.draw();
        };

        changeOptions = function() {
          programmaticChart.setOption('is3D', true);
          programmaticChart.draw();
        };
        changeOptions1 = function() {
          programmaticChart.setOption('is3D', false);
          programmaticChart.draw();
        };


        
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
$query = "SELECT id FROM contact WHERE stat IN ('Not Yet Seen') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Not Yet Seen Request',".$row.",'blue'],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Already Seen') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Already Seen Request',".$row.",'red'],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Evaluating Request') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Evaluating Request',".$row.",'yellow'],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Request Accepted') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Request Accepted',".$row.",'green'],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Request Decline') ORDER BY id";  
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
        title: "Quantity of Request",
        width: 5 00,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
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
        <?php
$sql = "SELECT  SUM(totalexp) from expenses WHERE date BETWEEN '2021-09-01' and '2021-09-31'";
$result = $connection->query($sql);          
while($result = mysqli_fetch_array($result)){
echo"['Total Expenses of the Shelter: ₱',".$result['SUM(totalexp)']."],";
}
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
        title: "Quantity of Request",
        width: 5 00,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("column"));
      chart.draw(view, options);
  }
  </script>



<script>
    google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBackgroundColor);

function drawBackgroundColor() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Dogs');

      data.addRows([

        <?php
          $sql = "SELECT * from expenses WHERE date BETWEEN '2021-11-01' and '2021-11-31'";
          $fire = mysqli_query($connection, $sql);
          while($row = mysqli_fetch_assoc($fire)){
          echo"['".$row['date']."',".$row['totalexp'].",],";
          }
          ?>

      var options = {
        hAxis: {
          title: 'Date'
        },
        vAxis: {
          title: 'Expenses'
        },
        backgroundColor: '#f1f8e9'
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
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
$query = "SELECT id FROM contact WHERE stat IN ('Not Yet Seen') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Not Yet Seen Request',".$row.",'blue'],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Already Seen') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Already Seen Request',".$row.",'red'],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Evaluating Request') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Evaluating Request',".$row.",'yellow'],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Request Accepted') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Request Accepted',".$row.",'green'],";
?>
 <?php
$query = "SELECT id FROM contact WHERE stat IN ('Request Decline') ORDER BY id";  
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
        title: "Quantity of Request",
        width: 800,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
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
        <?php
$query = "SELECT id FROM lost WHERE stat IN ('Not Yet Seen') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Not Yet Seen Request',".$row.",'blue'],";
?>
 <?php
$query = "SELECT id FROM lost WHERE stat IN ('Already Seen') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Already Seen Request',".$row.",'red'],";
?>
 <?php
$query = "SELECT id FROM lost WHERE stat IN ('Evaluating Request') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Evaluating Request',".$row.",'yellow'],";
?>
 <?php
$query = "SELECT id FROM lost WHERE stat IN ('Request Accepted') ORDER BY id";  
$query_run = mysqli_query($connection, $query);
$row = mysqli_num_rows($query_run);
echo"['Request Accepted',".$row.",'green'],";
?>
 <?php
$query = "SELECT id FROM lost WHERE stat IN ('Request Decline') ORDER BY id";  
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
        title: "Quantity of Lost & Found Report Claims",
        width: 800,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchartlf_values"));
      chart.draw(view, options);
  }
  </script>

  

 







<!-- Recaptcha -->

<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>



<!-- Navbar Time -->

<script>function display_ct7() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
hours=hours.toString().length==1? 0+hours.toString() : hours;

var minutes=x.getMinutes().toString()
minutes=minutes.length==1 ? 0+minutes : minutes;

var seconds=x.getSeconds().toString()
seconds=seconds.length==1 ? 0+seconds : seconds;

var month=(x.getMonth() +1).toString();
month=month.length==1 ? 0+month : month;

var dt=x.getDate().toString();
dt=dt.length==1 ? 0+dt : dt;

var x1=month + "/" + dt + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
document.getElementById('ct7').innerHTML = x1;
display_c7();
 }
 function display_c7(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct7()',refresh)
}
display_c7()
</script>

  <script>
  function myFunction10() {
  var x = document.getElementById("myInput10");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>


  <script>
  function myFunction() {
  var x = document.getElementById("myInput2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>

  
  <script>
  function myFunction2() {
  var x = document.getElementById("myInput3");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>

  
  <script>
  function myFunction4() {
  var x = document.getElementById("myInput4");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>


  
  <script>
  function myFunction5() {
  var x = document.getElementById("myInput5");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>

  
  <script>
  function myFunction7() {
  var x = document.getElementById("myInput7");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>

  <script>
  function myFunction8() {
  var x = document.getElementById("myInput8");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>

  
