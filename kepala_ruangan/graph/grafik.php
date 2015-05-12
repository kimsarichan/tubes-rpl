<!DOCTYPE html>
<html>
<head>
    <title>Date axis</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >

    <link href="examples-offline.css" rel="stylesheet">
    <link href="kendo.dataviz.min.css" rel="stylesheet">

    <script src="jquery.min.js"></script>
    <script src="kendo.dataviz.min.js"></script>
    <script src="console.js"></script>

            <script>
			
			function createChart() {
			
			
                    $("#chart").kendoChart({
					
								dataSource: {
								transport: {
									read: "proses.php"
									},
									schema: {
									data: "data"
									}
								},
								
                        series: [{
                            type: "column",
                            field: "jumlah",
							name: "umur",
                            aggregate: "avg"
                        }],
                        categoryAxis: {
                            baseUnit: "weeks",
							
                            field: "umur",
							
                            majorGridLines: {
                                visible: false
                            }
                        },
                        valueAxis: {
                            line: {
                                visible: false
                            }
                        }
                    });
                }

                $(document).ready(function() {
                    setTimeout(function() {
                        // Initialize the chart with a delay to make sure
                        // the initial animation is visible
                        createChart();

                        $("#example").bind("kendo:skinChange", function(e) {
                            createChart();
                        });
                    }, 400);

                    $(".configuration-horizontal").bind("change", refresh);
                });

                function refresh() {
                    var chart = $("#chart").data("kendoChart"),
                        series = chart.options.series,
                        categoryAxis = chart.options.categoryAxis,
                        baseUnitInputs = $("input:radio[name=baseUnit]"),
                        aggregateInputs = $("input:radio[name=aggregate]");

                    for (var i = 0, length = series.length; i < length; i++) {
                        series[i].aggregate = aggregateInputs.filter(":checked").val();
                    };

                    categoryAxis.baseUnit = baseUnitInputs.filter(":checked").val();

                    chart.refresh();
                }
            </script>
            
			
	</head>
<body>
    <a class="offline-button" href="../index.html">Back</a>
    
        <div id="example" class="k-content">
            <div class="chart-wrapper">
                <div id="chart"></div>
            </div>
            </div>
            
        </div>

</body>
</html>
<section id="main-content" style="height:800px">
      <section class="wrapper">
            <div class="col-lg-12">    
              <br><br><br>
                      <h4><i class="fa fa-angle-right"></i> Grafik  </h4>
                          <section id="unseen">
                                <a class="offline-button" href="../index.php">Back</a>
                                <div id="example" class="k-content">
                                    <div class="chart-wrapper">
                                        <div id="chart"></div>
                                    </div>
                                    </div>
                          <div class="col-lg-4"></div>  
                          </section>
               </div>
            </div>

        </div>
      

    </section>
</section>
