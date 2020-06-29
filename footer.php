<!--Footer Row-->
<footer class="container-fluid bg-dark py-2 w-100">
    <div class="row">
        <div class="col-12 col-sm offset-sm-2">
            <a type="button" href="#" class="link">
                <span class="link">Terms of Use</span></a>
        </div>
        <div class="col-12 col-sm">
            <a type="button" href="#" class="link">
                <span class="link">About the Portal</span></a>
        </div>
        <div class="col-12 col-sm-5 copyright">
            <span class="text-sm-center">Copyright © 2019, All Right Reserved Indian Science Report</span>
        </div>
    </div>
</footer>
<!-- Login -->
<div id="loginModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header bg-dark">
				<h4 class="modal-title">Login </h4>
				<button type="button" class="close" data-dismiss="modal">
					<span style="color: snow;">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group col-sm-auto">
						<label class="sr-only" for="exampleInputEmail3">Email address</label>
						<input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3"
							placeholder="Enter email">
					</div>
					<div class="form-group col-sm-auto">
						<label class="sr-only" for="exampleInputPassword3">Password</label>
						<input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3"
							placeholder="Password">
					</div>
					<div class="col-sm-auto">
						<div class="form-check">
                            <label>
                                <input class="form-check-input" type="checkbox">
                            </label>
                            <label class="form-check-label"> Remember me
							</label>
						</div>
					</div>
					<br>
					<div class="form-row">
						<button type="button" class="btn btn-secondary btn-md mr-auto"
							data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-dark btn-md mr-1">Sign in</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Scripts -->
<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Custom -->
<!-- Datatable JS -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
<!-- Table Sort -->
<script>
    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("myTable");
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc";
        /*Make a loop that will continue until
		no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /*Loop through all table rows (except the
			first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
				one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /*check if the two rows should switch place,
				based on the direction, asc or desc:*/
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
				and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                //Each time a switch is done, increase this count by 1:
                switchcount++;
            } else {
                /*If no switching has been done AND the direction is "asc",
				set the direction to "desc" and run the while loop again.*/
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
</script>
</body>

</html>
