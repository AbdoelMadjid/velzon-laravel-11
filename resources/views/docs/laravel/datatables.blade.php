@extends('docs.laravel.layout')

@section('title', 'Datatables | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Datatables</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Datatables</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">

                                    <h5 class="fw-semibold">Overview<a href="https://datatables.net/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">DataTables is a plug-in for the jQuery Javascript
                                        library. It is a highly flexible tool, built upon the foundations of
                                        progressive enhancement, that adds all of these advanced features to any HTML
                                        table.</p>

                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!--datatable css--&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css&quot; /&gt;
&lt;!--datatable responsive css--&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css&quot; /&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css&quot;&gt;
</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;script src=&quot;https://code.jquery.com/jquery-3.6.0.min.js&quot; integrity=&quot;sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;

&lt;!--datatable js--&gt;
&lt;script src=&quot;https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;script src=&quot;build/js/pages/datatables.init.js&quot;&gt;&lt;/script&gt;</code></pre>



                                </div><!-- end card-body -->

                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Examples</h5>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:40%">Title</th>
                                                    <th scope="col">Javascript</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Basic Datatables</th>
                                                    <td>
                                                        <pre><code class="language-js">document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#example',);
});

</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Scroll - Vertical</th>
                                                    <td>
                                                        <pre><code class="language-js">document.addEventListener('DOMContentLoaded', function () {
let table = new DataTable('#scroll-vertical', {
    &quot;scrollY&quot;:        &quot;210px&quot;,
    &quot;scrollCollapse&quot;: true,
    &quot;paging&quot;:         false
    });                                                          
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Scroll - Horizontal</th>
                                                    <td>
                                                        <pre><code class="language-js">document.addEventListener('DOMContentLoaded', function () {
let table = new DataTable('#scroll-horizontal', {
    "scrollX": true
    });
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Alternative Pagination</th>
                                                    <td>
                                                        <pre><code class="language-js">document.addEventListener('DOMContentLoaded', function () {
let table = new DataTable('#alternative-pagination', {
    &quot;pagingType&quot;: &quot;full_numbers&quot;
    });
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Add Rows</th>
                                                    <td>
                                                        <pre><code class="language-js">$(document).ready(function() {
var t = $('#add-rows').DataTable();
var counter = 1;

$('#addRow').on( 'click', function () {
    t.row.add( [
        counter +'.1',
        counter +'.2',
        counter +'.3',
        counter +'.4',
        counter +'.5',
        counter +'.6',
        counter +'.7',
        counter +'.8',
        counter +'.9',
        counter +'.10',
        counter +'.11',
        counter +'.12'
    ] ).draw( false );

    counter++;
} );

// Automatically add a first row of data
$('#addRow').click();
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Fixed Header Datatables</th>
                                                    <td>
                                                        <pre><code class="language-js">document.addEventListener('DOMContentLoaded', function () {
let table = new DataTable('#fixed-header', {
    &quot;fixedHeader&quot;: true
    });                                                          
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Modal Data Datatables</th>
                                                    <td>
                                                        <pre><code class="language-js">document.addEventListener('DOMContentLoaded', function () {
let table = new DataTable('#model-datatables', {
    responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    });                                                          
}); 
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Buttons Datatables</th>
                                                    <td>
                                                        <pre><code class="language-js">document.addEventListener('DOMContentLoaded', function () {
let table = new DataTable('#buttons-datatables', {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'print', 'pdf'
        ]
    });
});  
</code></pre>
                                                    </td>
                                                <tr>
                                                    <th scope="row">Ajax Datatables</th>
                                                    <td>
                                                        <pre><code class="language-js">document.addEventListener('DOMContentLoaded', function () {
let table = new DataTable('#ajax-datatables', {
        "ajax": 'build/json/datatable.json'
    });
}); 
</code></pre>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div><!-- end card-body -->

                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection