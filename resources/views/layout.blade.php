<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>       

        <!-- PRIMERA PARTE PARA FUNCIONAMIENTO DE DATATABLE Y PAGINATION -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
        
        <!-- PARA FUNCIONAMIENTO DE BOTONES EN DATATABLE -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    
        <style type="text/css">/*estilos para la tabla*/
          table th {
              background-color: #a22244 !important;
              color: white;
          }
        </style>

        <!-- Styles -->
        <style>
            
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }     

            .my-custom-scrollbar {
            position: relative;
            height: 60px;
            overflow: auto;
            }

            .table-wrapper-scroll-y {
            display: block;
            }      

            .abs-center {
              display: flex;
              align-items: center;
              justify-content: center;
              min-height: 60vh;
            }
             
            .form {
              width: 550px;
            } 

        </style>
        
        <title>@yield('title')</title>              
    </head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->       
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
              <div class="container">
               
        
      
                 <a class="navbar-brand" href="../public">
                      <img src="../public/images/logo.png " alt="" >
                 </a>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">                   
                    <li class="nav-item">
                      <!--<a class="nav-link" href="">Carga de XML | PDF</a>-->
                    </li>     
                  </ul>
                </div>
              </div>
        </nav>
    </header>
</br>

<!-- Comienza content -->
  <div class="container">

		@yield('content')
	</div>
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
     <b>LECTOR COAMI</b>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>

<!-- SEGUNDA PARTE PARA FUNCIONAMIENTO DE DATATABLE Y PAGINATION Y RESPONSIVE-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>

<!-- PARA FUNCIONAMIENTO DE BOTON EXCEL EN DATATABLE -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>


<script type="text/javascript"> 
  $('#xml').DataTable({

    responsive:true,
    autoWidth:false,

    language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
           },
           "sProcessing":"Procesando...",
            },
    
    dom: 'Bfrtip',
        buttons: [            
           'copy','excelHtml5','print'
           
        ]
  });
</script>
<!-- FINALIZA SEGUNDA PARTE DATATABLE Y PAGINATION -->

</html>