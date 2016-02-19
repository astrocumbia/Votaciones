@extends('layouts.layoutbase')
@section('body')

  <?php 
    print_r( $votos );
  ?>
  <div class="container">
    <div class="text-center">
      <h3>Resultados</h3>
    </div>

      <div class= "row">
        <h4>Resultados casilla 1</h4>
        <div class="col-md-offset-2 col-md-8" id="chart_div"></div>
      </div>
       
    </div>
  
@endsection
@section('javascript')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        //datos de DB
        $.get("{{url('/administrador/estat')}}", function(datos, status){
           console.log( datos.votos );

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
<<<<<<< HEAD
        data.addRows( datos.votos );
=======
        data.addRows([
          
          
          ['PRD', 3],
          ['PRI DARTH VADER', 1],
          ['PN (Partido Nacional)', 4],
          ['PAN', 1]
        ]);


>>>>>>> 3af1123b83c65e4f4e6700538602c7efa227008f

        // Set chart options
        var options = {'title':'Resultado de Elecciones',
                       'width':800,
                       'height':700};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

        });


      }
    </script>
  
@stop

