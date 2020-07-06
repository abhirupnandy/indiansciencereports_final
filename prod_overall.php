<?php include "header.php"; ?>
<div class="container-lg">
    <div class="text-center text-head py-2">
        <h1 class="h1">Productivity - Overall</h1>
    </div>
    <div class="text-body">
        <p class="text-justify">
            This page displays overall research performance (without any disciplinary categorization)
            indicators for Indian institutions. The results can be generated for different customizable
            time periods. The results table can be sorted by any of the indicator values by clicking on
            that indicator name. Results about India’s overall contribution to world research output and
            India’s growth rate are also shown
        </p>
        <div class="container">
            <!-- slider -->
            <div class="row py-3">
                <div class="col-12 col-sm">
                    <label> Years : </label>
                    <b><span id='range'>2010 - 2018</span></b>
                </div>
                <div class="col-12 col-sm">
                    <div id="slider"></div>
                </div>
            </div>
            <table id="prod_overall"  class='table table-striped table-hover
            table-bordered'>
                <thead class="table-dark">
                <tr>
                    <th>Institute</th>
                    <th>TC</th>
                    <th>TP</th>
                    <th>ACCP</th>
                    <th>Share in India</th>
                    <th>Share in World</th>
                    <th>Info</th>
                </tr>
                </thead>

            </table>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h3 id="modalTitle"></h3>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div id="modaltable"></div>
                <div id="modalchart-1"  >
                    <canvas id="myChart1" width="30" height="30"></canvas>
                </div>
                <div id="modalchart-2" >
                    <canvas id="myChart2" width="30" height="30"></canvas>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php";?>

<script>
    var gmin = 2010;
    var gmax = 2018;
    var table;
    $(document).ready(function(){
        table = $('#prod_overall').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'searching': true,
            'paginate': true,
            'ajax': {
                'url':'prod_overall_table_ajax.php',
                'data': function (d) {
                    d.min = gmin;
                    d.max = gmax;
                }
            },
            'columns': [
                { data: 'inst' },
                { data: 'tc' },
                { data: 'tp' },
                { data: 'accp' },
                { data: 'india' },
                { data: 'world' },
                { data: null , "render": function(data, type, row)
        {return '<button class="btn btn-outline-dark btn-sm" ' +
            'data-toggle="modal"' +
            'data-inst="'+row.inst+'" ' +
            'data-min="'+gmin+'" ' +
            'data-max="'+gmax+'" ' +
            'data-target="#myModal">Show</button>'} }
            
            ],
            "lengthMenu": [[5, 10, 25, 50], [5, 10, 25, 50]],
        });
        $( "#slider" ).slider({
	        animate: "fast",
            range: true,
            min: 2010,
            max: 2018,
            values: [2010, 2018],
            slide: function (event, ui) {
                min = ui.values[0];
                max = ui.values[1];
                gmin = min;
                gmax = max;
                $('#range').text(gmin + ' - ' + gmax);
                $('#prod_overall').DataTable().ajax.reload()
            }
        });
        
    });
</script>
<script>
    $("#myModal").on('show.bs.modal', function (e) {
        var triggerLink = $(e.relatedTarget);
        var inst = triggerLink.data("inst");
        var min = triggerLink.data("min");
        var max = triggerLink.data("max");

        $("#modalTitle").text(inst+" ( "+min+" - "+max+" )");
        //$(this).find(".modal-body").html('<canvas id="myChart" width="400" height="400"></canvas>');
        $("#modaltable").html("Hello")
    });
</script>
<script>
    var ctx1 = document.getElementById('myChart1').getContext('2d');
    var ctx2 = document.getElementById('myChart2').getContext('2d');
    var myChart1 = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    var myChart1 = new Chart(ctx2, {
        type: 'radar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
