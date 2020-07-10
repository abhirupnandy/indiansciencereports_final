<?php include "header.php"; ?>
<div class="container-lg">
	<div class="text-center text-head py-2">
		<h1 class="h1">International Collaboration - Overall</h1>
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
					<th>TP</th>
					<th>Total ICP</th>
					<th>ICP Percentage</th>
					<th>Info</th>
				</tr>
				</thead>
			
			</table>
		</div>
	</div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl  ">
		<div class="modal-content">
			<div class="modal-header bg-dark text-white">
				<h3 id="modalTitle"></h3>
				<button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
			</div>
			<div class="modal-body">
				<div id="modalchart-1" class="py-2 " style="position: relative; height:60vh; width:80vw">
					<canvas id="myChart1" height="300px"></canvas>
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
                'url':'scripts/inter_overall_table_ajax.php',
                'data': function (d) {
                    d.min = gmin;
                    d.max = gmax;
                }
            },
            'columns': [
                { data: 'inst' },
                { data: 'tp' },
                { data: 'icp' },
                { data: 'icp_percent' },
                { data: null , "render": function(data, type, row)
                    {return '<button class="btn btn-outline-dark btn-sm" ' +
                        'data-toggle="modal"' +
                        'data-inst="'+row.inst+'" ' +
                        //'data-icp_percent="'+row.icp_percent+'" ' +
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
    var years = Array();
    $("#myModal").on('show.bs.modal', function (e) {
        var triggerLink = $(e.relatedTarget);
        var inst = triggerLink.data("inst");
        var min = triggerLink.data("min");
        var max = triggerLink.data("max");
        var years = Array();
        for (var i = min; i <= max; i++) {
            years.push(i);
        }
        $("#modalTitle").text(inst+" ( "+min+" - "+max+" )");
        $.ajax({
            url: 'scripts/inter_overall_modal_ajax.php',
            type: 'post',
            data: {inst:inst,min:min,max:max},
            success: function(response){
                var ctx1 = document.getElementById('myChart1').getContext('2d');
                var myChart01 = new Chart(ctx1, {
                    type: 'line',
                    data: {
                        labels: years,
                        datasets: [{
                            label: 'ICP Percentage',
                            data: JSON.parse(response),
                            borderColor: "blue",
                            fill: 'none',
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    display:false
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        },
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                boxWidth: 80,
                                fontColor: 'black'
                            }
                        }
                    }
                });
            }
        });
    });
</script>
