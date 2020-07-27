<?php include "header.php";?>
<script src='https://d1bxh8uas1mnw7.cloudfront.net/assets/embed.js'></script>
<style>
    .table-filter-container {
        text-align: right;
    }
</style>
<div class="container-lg">
    <div class="text-center text-head py-2">
        <h1 class="h1">Publications</h1>
    </div>
    <div class="text-body py-5">
        <div class="row">
            <div class="col-12 col-sm-6 offset-sm-1">
               
                <p id="table-filter" style="display:none">
                    <span class="text-dark font-weight-bold pr-2">Select a category :</span>
                    <select>
                        <option value="" selected>All</option>
                        <option>Research Productivity</option>
                        <option>Citation Studies</option>
                        <option>Indicators</option>
                        <option>Collaboration Study</option>
                        <option>Altmetrics</option>
                        <option>Gender in Publishing</option>
                        <option>Scholarly Databases</option>
                        <option>Country/Region Study</option>
                    </select>
                </p>
            </div>
        </div>
        <table id="example" class="table table-responsive-sm table-bordered
               table-hover table-striped compact">
            <thead class="table-dark">
            <tr>
                <th itemid="0">Info</th>
                <th itemid="1">Title</th>
                <th itemid="2">Authors</th>
                <th itemid="3">Journal</th>
                <th itemid="4">Year</th>
                <th itemid="5">DOI</th>
                <th itemid="6">URL</th>
                <th itemid="7">Abstract</th>
                <th itemid="8">Volume</th>
                <th itemid="9">Issue</th>
                <th itemid="10">Page</th>
                <th itemid="11">Category</th>
            </tr>
            </thead>
        </table>
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
            <div class="modal-body"></div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-4" id="alt">
                    
                    </div>
                    <div class="col-sm-3 px-4">
                        <button class="btn btn-dark btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"?>

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "ajax": "data/indian_science_publications.json",
            "columns": [
                { data: 'id',"render": function(data, type, row)
                    {return '<button class="btn btn-outline-dark btn-sm" ' +
                        'data-toggle="modal"' +
                        'data-id="'+row.id+'" ' +
                        'data-title="'+row.title+'" ' +
                        'data-author="'+row.author+'" ' +
                        'data-journal="'+row.journal+'" ' +
                        'data-year="'+row.year+'" ' +
                        'data-vol="'+row.vol+'" ' +
                        'data-issue="'+row.issue+'" ' +
                        'data-page="'+row.page+'" ' +
                        'data-doi="'+row.doi+'" ' +
                        'data-url="'+row.url+'" '+
                        'data-category="'+row.category+'" '+
                        'data-abstract="'+row.abstract+'" ' +
                        'data-target="#myModal">Show</button>'} },
                { data: 'title' },
                { data: 'author' },
                { data: 'journal' },
                { data: 'year'  },
                { data: 'doi' },
                { data: 'url' },
                { data: 'abstract' },
                { data: 'vol' },
                { data: 'issue'  },
                { data: 'page'  },
                { data: 'category' },
            ],
            "columnDefs": [
                {
                    "targets": [4,5,6,7,8,9,10,11],
                    "visible": false,
                },
            ],
            "lengthMenu": [[5, 10, 25, 50], [5, 10, 25, 50]],
            dom: 'lr<"table-filter-container">tip',
            initComplete: function(settings){
                const api = new $.fn.dataTable.Api(settings);
                $('.table-filter-container', api.table().container()).append(
                    $('#table-filter').detach().show()
                );
                $('#table-filter select').on('change', function(){
                    table.search(this.value).draw();
                });
            }
        } );
    } );
    

</script>
<script>
    $("#myModal").on('show.bs.modal', function (e) {
        var triggerLink = $(e.relatedTarget);
        var title = triggerLink.data("title");
        var author = triggerLink.data("author");
        var abstract = triggerLink.data("abstract");
        var journal = triggerLink.data("journal");
        var vol = triggerLink.data("vol");
        var issue = triggerLink.data("issue");
        var page = triggerLink.data("page");
        var year = triggerLink.data("year");
        var url = triggerLink.data("url");
        var doi = triggerLink.data("doi");
        var cat = triggerLink.data("category");

        $("#modalTitle").html(title);
        $(this).find(".modal-body").html('<h6>Authors: <b>' + author + '</b></h6>' +
            '<h6>Journal / Conference :  <b>' + journal + '</b></h6>' +
            '<h6>Categories :  <b>' + cat + '</b></h6>' +
            '<div class="row"><div class="col">'+
            '<h6>Vol:  <b>' + vol + '</b></div>' +
            '<div class="col">Issue :  <b>' + issue + '</b></div>' +
            '<div class="col">Pages :  <b>' + page + '</b></h6></div></div>' +
            '<div class="row"><div class="col"> '+
            '<h6>Year:  <b>' + year + '</b></div>' +
            '<div class="col">DOI :  <b>' + doi + '</b></h6></div></div>' +
            '<br><h6><div class="row">' +
            ' <div class="col-12 col-sm-7 font-weight-bold text-right mr-5">Abstract</div> ' +
            '<div class="col"> <a class="link btn-sm btn btn-outline-dark ml-3" target="_blank"' +
            ' href="'+ url + '"> Visit Publisher page</a></div>' +
            '</div></div><br></h6><h7>' +abstract+ '</h7>');
        $("#alt").html('<div data-badge-type="donut" data-doi="10.1038/nature.2014.14583" data-hide-no-mentions="true" class="altmetric-embed order-first"></div>');
    });
</script>
