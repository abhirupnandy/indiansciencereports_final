<?php include "header.php"?>
<div class="container-lg">
	<div class="text-center text-head py-2">
		<h1 class="h1">Productivity - Discipline-wise</h1>
	</div>
	<div class="text-body">
		<p class="text-justify">
            This page displays research performance indicator values of Indian institutions for a specific discipline.
            For this purpose, select a discipline and required time period and then system generates detailed report.
            The results table can be sorted by any of the indicator values by clicking on that indicator name.
		</p>
		<div class="container">
			<form method="post">
				<div class="row py-4">
					<div class="col-12 col-sm-5">
						<label for="discipline" class="font-weight-bold">Select a discipline : </label>
					</div>
					<div class="col-12 col-sm">
						<select id="discipline" name="discipline" class="custom-select">
							<option value="AGR" selected>Agriculture (AGR)</option>
							<option value="AH">Arts and Humanities (AH)</option>
							<option value="BIO">Biology (BIO)</option>
							<option value="CHE">Chemistry (CHE)</option>
							<option value="ENG">Engineering (ENG)</option>
							<option value="ENV">Environmental Science (ENV)</option>
							<option value="GEO">Geology (GEO)</option>
							<option value="INF">Information Sciences (INF)</option>
							<option value="MAR">Material Science (MAR)</option>
							<option value="MAT">Mathematics (MAT)</option>
							<option value="MED">Medical Science (MED)</option>
							<option value="MUL">Multi-disciplinary (MUL)</option>
							<option value="PHY">Physics (PHY)</option>
							<option value="SS">Social Sciences (SS)</option>
						</select>
					</div>
				</div>
			</form>
			<table id="prod_discipline" class='table table-striped table-hover
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
    <div class="modal-dialog modal-xl  ">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h3 id="modalTitle"></h3>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div id="modaltable">
                    <table id="table-1" class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                        <tr>
                            <th>Year</th>
                            <th>TP</th>
                            <th>TC</th>
                            <th>India</th>
                            <th>World</th>
                        </tr>
                        </thead>
                        <tbody id="table-1-body"></tbody>
                    </table>
                </div>
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

<?php include "footer.php"?>
<script>
    var table;
    var disc = 'AGR';
    $(function () {
        $("#discipline").on("change", function () {
            disc = this.value;
            $('#prod_discipline').DataTable().ajax.reload();
            $('#discipline').blur();
        });
    });
</script>
<script>
    $(document).ready(function () {
        table = $('#prod_discipline').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'searching': true,
            'paginate': true,
            'ajax': {
                'url':'scripts/prod_discipline_table_ajax.php',
                'data': function (d) {
                    d.discipline = disc
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
                        'data-disc="'+disc+'" ' +
                        'data-target="#myModal">Show</button>'} }

            ],
        });
    });
</script>
<script>
    function getCol(matrix, col){
        var column = [];
        for(var i=0; i<matrix.length; i++){
            column.push(matrix[i][col]);
        }
        return column;
    }
</script>
<script>
    var data = Array();
    var rowSum = Array();
    var colSum = Array();
    $("#myModal").on('show.bs.modal', function (e) {
        var triggerLink = $(e.relatedTarget);
        var disc = triggerLink.data("disc");
        var inst = triggerLink.data("inst");

        $("#modalTitle").text(inst+" ( "+disc+" )");
        $.ajax({
            url: 'scripts/prod_discipline_modal_ajax.php',
            type: 'post',
            data: {inst:inst,discipline:disc},
            success: function(response){
                $('#table-1-body tr').remove();
                $('#table-1-body').append(response);
                $("table#table-1 tr").each(function(i, v){
                    data[i] = Array();
                    $(this).children('td').each(function(ii, vv){
                        data[i][ii] = parseInt($(this).text());
                    });
                })
                data.shift();
                var t_paper = getCol(data, 1);
                var ctx1 = document.getElementById('myChart1').getContext('2d');
                var myChart1 = new Chart(ctx1, {
                    type: 'line',
                    data: {
                        labels: [2010,2011,2012,2013,2014,2015,2016,2017,2018],
                        datasets: [{
                            label: 'Total Papers',
                            data: t_paper,
                            borderColor: "#1a67ed",
                            fill: 'none',
                            pointRadius: 0,
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
