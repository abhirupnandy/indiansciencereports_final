<?php include 'header.php'; ?>
<div class="container-lg">
	<div class="text-center text-head py-2">
		<h1 class="h1">Productivity - Overview</h1>
	</div>
	<div class="text-body">
        <p class="text-justify pb-3">
            This page displays overall research performance (without any disciplinary categorization)
            indicators for Indian institutions. The results can be generated for different customizable
            time periods. The results table can be sorted by any of the indicator values by clicking on
            that indicator name. Results about India’s overall contribution to world research output and
            India’s growth rate are also shown
        </p>
        <table id="example" class="table table-responsive-sm table-bordered
                table-striped compact">
            <thead class="table-dark">
            <tr>
                <th>Discipline</th>
                <th>2010</th>
                <th>2011</th>
                <th>2012</th>
                <th>2013</th>
                <th>2014</th>
                <th>2015</th>
                <th>2016</th>
                <th>2017</th>
                <th>2018</th>
                <th>Total</th>
            </tr>
            </thead>
        </table>
	</div>
</div>
<?php include 'footer.php'; ?>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "ajax": "data/Classwise_India_Productivity_stat.json",
            "bPaginate": false,
            "searching": false,
            "ordering": false,
            "bInfo" : false,
            "columns": [
                { data: 'Discipline' },
                { data: '2010' },
                { data: '2011' },
                { data: '2012' },
                { data: '2013' },
                { data: '2014' },
                { data: '2015' },
                { data: '2016' },
                { data: '2017' },
                { data: '2018' },
                { data: 'Total' }
            ],
        } );
    } );
</script>
