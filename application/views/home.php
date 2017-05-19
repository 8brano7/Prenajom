<body>




<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Vitajte na  našej stránke!</h1>
        <p>Projekt na predmet programovanie databázových aplikácii.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Prečítajte si viac &raquo;</a></p>
    </div>
</div>



<center><img src="assets/imgs/header.png"/><br <br /></form>
</center>


<div class="container">
    <h2>Grafy</h2>

    <div class="panel panel-default">



        <!DOCTYPE html>
        <head>
            <BR>

            <h1> Registrovaný používateľia (vzostupne podľa ID) </h1>
            <!--Load the AJAX API-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

            <script type="text/javascript">


                google.charts.load('current', {'packages':['corechart']});


                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var jsonData = $.ajax({
                        url: "<?php echo base_url() . 'index.php/Charts/getdata' ?>",
                        dataType: "json",
                        async: false
                    }).responseText;


                    var data = new google.visualization.DataTable(jsonData);
                    var options = {

                        backgroundColor: "white",
                        legend: {textStyle: {color: 'blue'}},
                        series: {textStyle: {color: 'blue'} },
                        series: { 0: { color: 'f05f40', pointSize: 5, lineWidth: 4 }},
                        hAxis: {textStyle: {color: 'blue'}},
                        vAxis: {textStyle: {color: 'blue'}}
                    }

                    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

                    chart.draw(data, options);
                }

            </script>
            <style>
                h1 {
                    text-align: center;
                    color:#f05f40;
                }
            </style>








            <script type="text/javascript">


                google.charts.load('current', {'packages':['corechart']});


                google.charts.setOnLoadCallback(drawChart2);

                function drawChart2() {
                    var jsonData = $.ajax({
                        url: "<?php echo base_url() . 'index.php/Charts/getdata2' ?>",
                        dataType: "json",
                        async: false
                    }).responseText;


                    var data = new google.visualization.DataTable(jsonData);
                    var options = {
                        width: 900, height: 500,
                        backgroundColor: "white ",
                        legend: {textStyle: {color: 'blue'}},
                        series: {textStyle: {color: 'blue'} },
                        series: { 0: { color: 'f05f40', pointSize: 5, lineWidth: 4 }},
                        hAxis: {textStyle: {color: 'blue'}},
                        vAxis: {textStyle: {color: 'blue'}}
                    }

                    var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));

                    chart.draw(data, options);
                }

            </script>





        </head>


        <body>

        <div id="chart_div" align="center" style="background-color: rgba(0, 0, 0, 0.5); color: white;"></div>
        <h1> Rozloha jednotlivých  priestorov na prenájom  (m²)  </h1>
        <br />

        <div id="chart_div2" align="center" ></div>



        </body>









        <script type="text/javascript">


            google.charts.load('current', {'packages':['corechart']});


            google.charts.setOnLoadCallback(drawChart3);

            function drawChart3() {
                var jsonData = $.ajax({
                    url: "<?php echo base_url() . 'index.php/Charts/getdata3' ?>",
                    dataType: "json",
                    async: false
                }).responseText;


                var data = new google.visualization.DataTable(jsonData);
                var options = {
                    width: 900, height: 500,
                    backgroundColor: "white ",
                    legend: {textStyle: {color: 'blue'}},
                    series: {textStyle: {color: 'blue'} },
                    series: { 0: { color: 'f05f40', pointSize: 5, lineWidth: 4 }},
                    hAxis: {textStyle: {color: 'blue'}},
                    vAxis: {textStyle: {color: 'blue'}}
                }

                var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));

                chart.draw(data, options);
            }

        </script>





        </head>


        <body>

        <div id="chart_div" align="center" style="background-color: rgba(0, 0, 0, 0.5); color: white;"></div>
        <h1> Jednotlivé platby používateľov (podľa ID používateľa) </h1>
        <br />

        <div id="chart_div3" align="center" ></div>



        </body>









        <script type="text/javascript">


            google.charts.load('current', {'packages':['corechart']});


            google.charts.setOnLoadCallback(drawChart4);

            function drawChart4() {
                var jsonData = $.ajax({
                    url: "<?php echo base_url() . 'index.php/Charts/getdata4' ?>",
                    dataType: "json",
                    async: false
                }).responseText;


                var data = new google.visualization.DataTable(jsonData);
                var options = {

                    backgroundColor: "white ",
                    legend: {textStyle: {color: 'blue'}},
                    series: {textStyle: {color: 'blue'} },
                    series: { 0: { color: 'f05f40', pointSize: 5, lineWidth: 4 }},
                    hAxis: {textStyle: {color: 'blue'}},
                    vAxis: {textStyle: {color: 'blue'}}
                }

                var chart = new google.visualization.LineChart(document.getElementById('chart_div4'));

                chart.draw(data, options);
            }

        </script>





        </head>


        <body>

        <div id="chart_div" align="center" style="background-color: rgba(0, 0, 0, 0.5); color: white;"></div>
        <h1> Prehľad najnižších a najvyších cien za elektrinu (podľa ID prenájmu) </h1>
        <br />
        <div style="background-color: rgba(0, 0, 0, 0.5); color: white;">
            <div id="chart_div4" align="center" ></div>
        </div>


        </body>















        <div class="panel-body">



        </div>
    </div>
</div>






<hr>


<html>
<body>



</body>
</html>



