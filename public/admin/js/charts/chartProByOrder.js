
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});
      google.setOnLoadCallback(drawChart);

      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        // Create columns for the DataTable
        data.addColumn('string');
        data.addColumn('number', 'Devices');
        // Create Rows with data

        $.get('http://127.0.0.1:8000/api/chartProductsByOrderAPI', function(res){
            let = dataChartPro = res.data;
            console.log(dataChartPro);
            let arr = [];
            dataChartPro.forEach(function(item){
                // console.log(item)
                arr.push([item.product_name,Number(item.total)])
            })
            console.log(arr)
            data.addRows(arr);
              //Create option for chart
              var options = {
                title: 'Tổng số lượng bán ra của từng sản phẩm',
                'width': 1250,
                'height': 600
              };

              // Instantiate and draw our chart, passing in some options.
              var chart = new google.visualization.PieChart(document.getElementById('chartProductsByOrder'));
              chart.draw(data, options);
        })


      }
      drawChart();
