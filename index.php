<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.sparkline.js"></script>
    <script type="text/javascript" src="js/jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="js/jqplot.pieRenderer.min.js"></script>
    <script type="text/javascript" src="js/jqplot.barRenderer.min.js"></script>
    <link href="js/jquery.jqplot.min.css" type="text/css" rel="stylesheet"/>

    <script type="text/javascript">
        $(document).ready(function(){
            var data = [
                ['Heavy Industry', 12],['Retail', 9], ['Light Industry', 14],
                ['Out of home', 16],['Commuting', 7], ['Orientation', 9]
            ];
            var plot1 = $.jqplot ('chart1', [data],
                {
                    seriesDefaults: {
                        // Make this a pie chart.
                        renderer: $.jqplot.PieRenderer,
                        rendererOptions: {
                            // Put data labels on the pie slices.
                            // By default, labels show the percentage of the slice.
                            showDataLabels: true
                        }
                    },
                    legend: { show:true, location: 'e' },
                    title: "TEST"
                }
            );

            $(document).ready(function(){
                // For horizontal bar charts, x an y values must will be "flipped"
                // from their vertical bar counterpart.
                var plot2 = $.jqplot('chart2', [
                    [[2,1]],
                    [[5,1]],
                    [[4,1]]], {
                    seriesDefaults: {
                        renderer:$.jqplot.BarRenderer,
                        // Show point labels to the right ('e'ast) of each bar.
                        // edgeTolerance of -15 allows labels flow outside the grid
                        // up to 15 pixels.  If they flow out more than that, they
                        // will be hidden.
                        pointLabels: { show: true, location: 'e', edgeTolerance: -15 },
                        // Rotate the bar shadow as if bar is lit from top right.
                        shadowAngle: 135,
                        // Here's where we tell the chart it is oriented horizontally.
                        rendererOptions: {
                            barDirection: 'horizontal'
                        }
                    },
                    axes: {
                        yaxis: {
                            renderer: $.jqplot.CategoryAxisRenderer
                            // added comment here
                            // comment ni lady
                        }
                    }
                });
            });
        });
    </script>
</head>
<body>
<div id="chart1" style="width:500px"></div>
<div id="chart2" style="width:700px; height:500px"></div>


</body>
</html>