
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

        $.get('http://127.0.0.1:8000/api/chartProductsAPI', function(res){
            let = dataChartPro = res.data;

            let arr = [];
            dataChartPro.forEach(function(item){
                // console.log(item)
                arr.push([item.sub_category_name,Number(item.total)])
            })
            console.log(arr)
            data.addRows(arr);
              //Create option for chart
              var options = {
                title: 'Thống kê sản phẩm theo danh mục',
                'width': 1250,
                'height': 600
              };

              // Instantiate and draw our chart, passing in some options.
              var chart = new google.visualization.PieChart(document.getElementById('chartProductsByCategory'));
              chart.draw(data, options);
        })


      }
      drawChart();
