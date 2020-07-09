<?php include "header.php"?>
	<div class="container-lg">
		<div class="text-center text-head py-2">
			<h1 class="h1">Productivity - Theme-wise</h1>
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
						<div class="col-12 col-sm">
							<label for="discipline" class="font-weight-bold">Select a discipline : </label>
						</div>
						<div class="col-12 col-sm">
							<select id="discipline" name="discipline" class="custom-select">
								<option value="" selected>Select a Discipline</option>
								<?php
                                    include "scripts/config.php";
                                    $stmt = $conn->prepare("SELECT DISTINCT Disciplines AS disc FROM Discipline_Thematic_Areas");
                                    $stmt->execute();
                                    $results = $stmt->fetchAll();
                                    foreach ($results as $row){
                                        echo '<option>'.$row['disc'].'</option>';
                                    }
								?>
							</select>
						</div>
                        

                        <div class="col-12 col-sm">
							<label for="theme" class="font-weight-bold">Select a Theme : </label>
						</div>
						<div class="col-12 col-sm">
							<select id="theme" name="theme" class="custom-select">
								<option value="" selected>Select a Theme</option>
							</select>
						</div>
					</div>
				</form>
                <h2 class="text-center text-danger h2">
                    Page still under construction
                </h2>
				<!--<table id="prod_thematic" class='table table-striped table-hover
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
				</table>-->
			</div>
		</div>
	</div>
<?php include "footer.php"?>
<script>
    var disc_val = '';
    var theme_val ='';
    $(document).ready(function () {
        $('#discipline').on('change',function () {
             disc_val = $(this).val();
            //alert(disc_val);
            $.ajax({
                type: 'post',
                url: 'scripts/prod_thematic_select.php',
                data: {disc:disc_val},
                success: function (response) {
                    $('#theme option').remove();
                    $('#theme').append(response);
                    $('#theme').on('change',function() {
                        theme_val = $(this).val();
                        //alert(theme_val);
                    });
                }
            });
            
        });
    });
</script>
