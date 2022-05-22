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
 
    <script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src = "https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src = "https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <!-- Check main.js for sendmail function -->

   
    <script src = "https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src = "https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

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
    $('#DataTableExp11').DataTable( {
        dom: 'Bfrtip',
        buttons: [
           'print'
        ],
        order: [[ 0, "desc"]],

        "columnDefs": [
          {
                "targets": [ 0 ],
                "visible": false,
                "searchable": true
            },
          
        ]
    } );
} );

</script>

<script>

$(document).ready(function() {
    $('#DataTableExp').DataTable( {
        dom: 'Bfrtip',
        buttons: [
           'print'
        ],
        order: [[ 0, "desc" ]],
        "columnDefs": [
          {
                "targets": [ 0 ],
                "visible": false,
                "searchable": true
            },
        ]
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
    $('#DataTableYep1').DataTable( {
        order: [[ 0, "desc" ]],
        scrollY:        620,
        processing: true,
        scrollX:        true,
        paging:         false,
        scrollCollapse: true,
        fixedColumns:   true,
        select:         true,
        
      
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
	
  $(document).ready(function(){
  
    
  
    makechart();
    function makechart()
    {
      $.ajax({
        url:"data.php",
        method:"POST",
        data:{action:'fetch'},
        dataType:"JSON",
        success:function(data)
        {
          var FileType = [];
          var total = [];
          var color = [];
  
          for(var count = 0; count < data.length; count++)
          {
            FileType.push(data[count].FileType);
            total.push(data[count].total);
            color.push(data[count].color);
          }
  
          var chart_data = {
            
            labels:FileType,
            datasets:[
              {
                label:'File Type',
                backgroundColor:color,
                color:'#fff',
                data:total
              }
            ]
          };
  
          var options = {
            responsive:true,
            scales:{
              yAxes:[{
                ticks:{
                  min:0
                }
              }]
            }
          };
  
     
  
          var group_chart2 = $('#doughnut_chart');
  
          var graph2 = new Chart(group_chart2, {
            type:"doughnut",
            
            data:chart_data
          });
  
         
        }
      })
    }
  
  });
  
  </script> 