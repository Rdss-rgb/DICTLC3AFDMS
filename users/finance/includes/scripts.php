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
 

    <!-- Page level custom scripts -->
 
    
    <script src = "https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src = "https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <!-- Check main.js for sendmail function -->
   
<script src ="https://cdn.datatables.net/plug-ins/1.11.5/dataRender/ellipsis.js"></script>

<script src ="https://cdn.datatables.net/plug-ins/1.11.5/api/processing().js"></script>

<script>

$(document).ready(function() {
    $('#DataTableMli').DataTable( {
        order: [[ 0, "asc" ]]
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
    $('#DataTableYepp').DataTable( {
         order: [[ 0, "desc" ]],
        scrollY:        610,
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   true,
        select:         true,
        "columnDefs": [
          {
                "targets": [ 0 ],
                "visible": false,
                "searchable": true
            }
        ]
    } );
} );
</script>



<script>
    $(document).ready(function() {
    $('#DataTableYep').DataTable( {
        order: [[ 0, "desc" ]],
        scrollY:        620,
        processing: true,
        scrollX:        true,
        paging:         false,
        scrollCollapse: true,
        fixedColumns:   true,
        select:         true,
        
        "columnDefs": [
          {
                "targets": [ 0 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": true
            }
        ]
       
    } );
} );
</script>

<script>
    $(document).ready(function() {
    $('#DataTableYep2').DataTable( {
        order: [[ 0, "desc" ]],
        scrollY:        620,
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   true,
        select:         true,
        "columnDefs": [
          {
                "targets": [ 0],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 4 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": true
            }
        ]
    } );
} );
</script>

<script>

    $(document).ready(function() {
    $('#DataTableYep3').DataTable( {
        order: [[ 0, "desc" ]],
        scrollY:        620,
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   true,
        select:         true,
        "columnDefs": [
          {
                "targets": [ 0],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 4 ],
                "visible": false,
                "searchable": true
            },
            {
                "targets": [ 2 ],
                "visible": true,
                "searchable": true
            }
        ]

    
    } );
} );
</script>

<script>
    $(document).ready(function() {
    $('#DataTableYepi').DataTable( {
        order: [[ 0, "desc" ]],
        scrollY:        620,
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   true,
        select:         true,
        "columnDefs": [
          {
                "targets": [ 0 ],
                "visible": false,
                "searchable": true
            }
        ]
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
  <script>
let labels4 = ['DOCX', 'XLXS', 'PPTX', 'PDF', 'Others'];
<?php
  
            $query="SELECT * FROM filemanage";
            $res=mysqli_query($connection,$query);
          
           ?>
         data4 = ['<?php echo "1";?>',<?php echo "2";?>,<?php echo "3";?>,<?php echo "4";?>,<?php echo "5";?>];   
           <?php   
            
           ?> 
var colors4 = ['#4e73df', '#1cc88a', '#f6c23e', '#e74a3b', '#c5c4c4'];

var myChart4 = document.getElementById("myChart4").getContext('2d');

var chart4 = new Chart(myChart4, {
    type: 'pie',
    data: {
        labels: labels4,
        datasets: [ {
            data: data4,
            backgroundColor: colors4
        }]
    },
    options: {
      plugins: {  
        }
    }
});
</script>