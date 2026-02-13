@extends('docs.laravel.layout')

@section('title', 'Grid Js | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Grid Js</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Grid Js</li>
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

                                    <h5 class="fw-semibold">Overview<a href="https://gridjs.io/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Grid.js is a Free and open-source JavaScript table
                                        plugin. It
                                        works with most JavaScript frameworks. </p>

                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!-- gridjs css --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;&#123;&#123; URL::asset('build/libs/gridjs/theme/mermaid.min.css') &#125;&#125;&quot;&gt;
</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- gridjs js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/gridjs/gridjs.umd.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- gridjs init --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/gridjs.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i gridjs --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall gridjs or you can remove package by removing specific package from package.json</code></pre>

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
                                                    <th scope="row">Base Example</th>
                                                    <td>
                                                        <pre><code class="language-js">new gridjs.Grid({
    columns: [
        {
            name: 'ID',
            formatter: (function (cell) {
                return gridjs.html('<span class="fw-semibold">' + cell + '</span>');
            })
        },
        "Name", 
        {
            name: 'Email',
            formatter: (function (cell) {
                return gridjs.html('<a href="#">' + cell + '</a>');
            })
        },
        "Position", "Company", "Country",
        {
            name: 'Actions',
            width: '120px',
            formatter: (function (cell) {
                return gridjs.html("<a href='#' class='text-reset text-decoration-underline'>" +
                "Details" +
                "</a>");
            })
        },
    ],
    pagination: {
        limit: 5
    },
    sort: true,
    search: true,
    data: [
        ["01", "Jonathan", "jonathan&#64;example.com","Senior Implementation Architect", 
        "Hauck Inc", "Holy See"],
        ["02", "Harold", "harold&#64;example.com", "Forward Creative Coordinator",
        "Metz Inc", "Iran"],
        ["03", "Shannon", "shannon&#64;example.com","Legacy Functionality Associate",
            "Zemlak Group", "South Georgia"],
        ["04", "Robert", "robert&#64;example.com","Product Accounts Technician",
            "Hoeger", "San Marino"],
        ["05", "Noel", "noel&#64;example.com","Customer Data Director",
            "Howell - Rippin", "Germany"],
        ["06", "Traci", "traci&#64;example.com","Corporate Identity Director",
            "Koelpin - Goldner", "Vanuatu"],
        ["07", "Kerry", "kerry&#64;example.com","Lead Applications Associate",
            "Feeney, Langworth and Tremblay", "Niger"],
        ["08", "Patsy", "patsy&#64;example.com","Dynamic Assurance Director",
            "Streich Group", "Niue"],
        ["09", "Cathy", "cathy&#64;example.com","Customer Data Director",
            "Ebert, Schamberger and Johnston", "Mexico"],
        ["10", "Tyrone", "tyrone&#64;example.com", "Senior Response Liaison",
            "Raynor, Rolfson and Daugherty", "Qatar"],
    ]
}).render(document.getElementById("table-gridjs"));

</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Card Table</th>
                                                    <td>
                                                        <pre><code class="language-js">new gridjs.Grid({
columns: ["Name", "Email", "Position", "Company", "Country"],
sort: true,
pagination: {
    limit: 5
},
data: [
    ["Jonathan", "jonathan&#64;example.com", "Senior Implementation Architect",
        "Hauck Inc", "Holy See"],
    ["Harold", "harold&#64;example.com", "Forward Creative Coordinator",
        "Metz Inc", "Iran"],
    ["Shannon", "shannon&#64;example.com", "Legacy Functionality Associate",
        "Zemlak Group", "South Georgia"],
    ["Robert", "robert&#64;example.com", "Product Accounts Technician",
        "Hoeger", "San Marino"],
    ["Noel", "noel&#64;example.com", "Customer Data Director",
        "Howell - Rippin", "Germany"],
    ["Traci", "traci&#64;example.com", "Corporate Identity Director",
        "Koelpin - Goldner", "Vanuatu"],
    ["Kerry", "kerry&#64;example.com", "Lead Applications Associate",
        "Feeney, Langworth and Tremblay", "Niger"],
    ["Patsy", "patsy&#64;example.com", "Dynamic Assurance Director",
        "Streich Group", "Niue"],
    ["Cathy", "cathy&#64;example.com", "Customer Data Director",
        "Ebert, Schamberger and Johnston", "Mexico"],
    ["Tyrone", "tyrone&#64;example.com", "Senior Response Liaison",
        "Raynor, Rolfson and Daugherty", "Qatar"],
]
}).render(document.getElementById("table-card"));
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pagination</th>
                                                    <td>
                                                        <pre><code class="language-js">new gridjs.Grid({
    columns: [{
        name: 'ID',
        width: '120px',
        formatter: (function (cell) {
            return gridjs.html('<a href="#" class="fw-medium">' + cell + '</a>');
        })
    },"Name", "Date", "Total", "Status",
    {
        name: 'Actions',
        width: '100px',
        formatter: (function (cell) {
            return gridjs.html("<button type='button' class='btn btn-sm btn-light'>" +
            "Details" +
          "</button>");
        })
    },
],
    pagination: {
        limit: 5
    },

    data: [
        ["#VL2111", "Jonathan", "07 Oct, 2021", "$24.05", "Paid",],
        ["#VL2110", "Harold", "07 Oct, 2021", "$26.15", "Paid"],
        ["#VL2109", "Shannon", "06 Oct, 2021", "$21.25", "Refund"],
        ["#VL2108", "Robert", "05 Oct, 2021", "$25.03", "Paid"],
        ["#VL2107", "Noel", "05 Oct, 2021", "$22.61", "Paid"],
        ["#VL2106", "Traci", "04 Oct, 2021", "$24.05", "Paid"],
        ["#VL2105", "Kerry", "04 Oct, 2021", "$26.15", "Paid"],
        ["#VL2104", "Patsy", "04 Oct, 2021", "$21.25", "Refund"],
        ["#VL2103", "Cathy", "03 Oct, 2021", "$22.61", "Paid"],
        ["#VL2102", "Tyrone", "03 Oct, 2021", "$25.03", "Paid"],
    ]
}).render(document.getElementById("table-pagination"));
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Search</th>
                                                    <td>
                                                        <pre><code class="language-js">new gridjs.Grid({
    columns: ["Name", "Email", "Position", "Company", "Country"],
    pagination: {
        limit: 5
    },
    search: true,
    data: [
        ["Jonathan", "jonathan&#64;example.com", "Senior Implementation Architect",
        "Hauck Inc", "Holy See"],
        ["Harold", "harold&#64;example.com", "Forward Creative Coordinator",
         "Metz Inc", "Iran"],
        ["Shannon", "shannon&#64;example.com", "Legacy Functionality Associate",
         "Zemlak Group", "South Georgia"],
        ["Robert", "robert&#64;example.com", "Product Accounts Technician",
         "Hoeger", "San Marino"],
        ["Noel", "noel&#64;example.com", "Customer Data Director",
         "Howell - Rippin", "Germany"],
        ["Traci", "traci&#64;example.com", "Corporate Identity Director",
         "Koelpin - Goldner", "Vanuatu"],
        ["Kerry", "kerry&#64;example.com", "Lead Applications Associate",
         "Feeney, Langworth and Tremblay", "Niger"],
        ["Patsy", "patsy&#64;example.com", "Dynamic Assurance Director",
         "Streich Group", "Niue"],
        ["Cathy", "cathy&#64;example.com", "Customer Data Director",
         "Ebert, Schamberger and Johnston", "Mexico"],
        ["Tyrone", "tyrone&#64;example.com", "Senior Response Liaison",
         "Raynor, Rolfson and Daugherty", "Qatar"],
    ]
}).render(document.getElementById("table-search"));
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sorting</th>
                                                    <td>
                                                        <pre><code class="language-js">new gridjs.Grid({
    columns: ["Name", "Email", "Position", "Company", "Country"],
    pagination: {
        limit: 5
    },
    sort: true,
    data: [
        ["Jonathan", "jonathan&#64;example.com", "Senior Implementation Architect",
         "Hauck Inc", "Holy See"],
        ["Harold", "harold&#64;example.com", "Forward Creative Coordinator",
         "Metz Inc", "Iran"],
        ["Shannon", "shannon&#64;example.com", "Legacy Functionality Associate",
         "Zemlak Group", "South Georgia"],
        ["Robert", "robert&#64;example.com", "Product Accounts Technician",
         "Hoeger", "San Marino"],
        ["Noel", "noel&#64;example.com", "Customer Data Director",
         "Howell - Rippin", "Germany"],
        ["Traci", "traci&#64;example.com", "Corporate Identity Director",
         "Koelpin - Goldner", "Vanuatu"],
        ["Kerry", "kerry&#64;example.com", "Lead Applications Associate",
         "Feeney, Langworth and Tremblay", "Niger"],
        ["Patsy", "patsy&#64;example.com", "Dynamic Assurance Director",
         "Streich Group", "Niue"],
        ["Cathy", "cathy&#64;example.com", "Customer Data Director",
         "Ebert, Schamberger and Johnston", "Mexico"],
        ["Tyrone", "tyrone&#64;example.com", "Senior Response Liaison"
        , "Raynor, Rolfson and Daugherty", "Qatar"],
    ]
}).render(document.getElementById("table-sorting"));
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Loading State</th>
                                                    <td>
                                                        <pre><code class="language-js">vnew gridjs.Grid({
    columns: ["Name", "Email", "Position", "Company", "Country"],
    pagination: {
        limit: 5
    },
    sort: true,
    data: function () {
        return new Promise(function (resolve) {
            setTimeout(function () {
                resolve([
                    ["Jonathan", "jonathan&#64;example.com", "Senior Implementation Architect",
                     "Hauck Inc", "Holy See"],
                    ["Harold", "harold&#64;example.com", "Forward Creative Coordinator",
                     "Metz Inc", "Iran"],
                    ["Shannon", "shannon&#64;example.com", "Legacy Functionality Associate",
                     "Zemlak Group", "South Georgia"],
                    ["Robert", "robert&#64;example.com", "Product Accounts Technician",
                     "Hoeger", "San Marino"],
                    ["Noel", "noel&#64;example.com", "Customer Data Director",
                     "Howell - Rippin", "Germany"],
                    ["Traci", "traci&#64;example.com", "Corporate Identity Director",
                     "Koelpin - Goldner", "Vanuatu"],
                    ["Kerry", "kerry&#64;example.com", "Lead Applications Associate",
                     "Feeney, Langworth and Tremblay", "Niger"],
                    ["Patsy", "patsy&#64;example.com", "Dynamic Assurance Director",
                     "Streich Group", "Niue"],
                    ["Cathy", "cathy&#64;example.com", "Customer Data Director",
                     "Ebert, Schamberger and Johnston", "Mexico"],
                    ["Tyrone", "tyrone&#64;example.com", "Senior Response Liaison",
                     "Raynor, Rolfson and Daugherty", "Qatar"]
                ])
            }, 2000);
        });
    }
}).render(document.getElementById("table-loading-state"));
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Fixed Header</th>
                                                    <td>
                                                        <pre><code class="language-js">new gridjs.Grid({
    columns: ["Name", "Email", "Position", "Company", "Country"],
    sort: true,
    pagination: true,
    fixedHeader: true,
    height: '400px',
    data: [
        ["Jonathan", "jonathan&#64;example.com", "Senior Implementation Architect",
         "Hauck Inc", "Holy See"],
        ["Harold", "harold&#64;example.com", "Forward Creative Coordinator",
         "Metz Inc", "Iran"],
        ["Shannon", "shannon&#64;example.com", "Legacy Functionality Associate",
         "Zemlak Group", "South Georgia"],
        ["Robert", "robert&#64;example.com", "Product Accounts Technician",
         "Hoeger", "San Marino"],
        ["Noel", "noel&#64;example.com", "Customer Data Director", 
        "Howell - Rippin", "Germany"],
        ["Traci", "traci&#64;example.com", "Corporate Identity Director",
         "Koelpin - Goldner", "Vanuatu"],
        ["Kerry", "kerry&#64;example.com", "Lead Applications Associate",
         "Feeney, Langworth and Tremblay", "Niger"],
        ["Patsy", "patsy&#64;example.com", "Dynamic Assurance Director",
         "Streich Group", "Niue"],
        ["Cathy", "cathy&#64;example.com", "Customer Data Director",
         "Ebert, Schamberger and Johnston", "Mexico"],
        ["Tyrone", "tyrone&#64;example.com", "Senior Response Liaison",
         "Raynor, Rolfson and Daugherty", "Qatar"],
    ]
}).render(document.getElementById("table-fixed-header"));
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Hidden Columns</th>
                                                    <td>
                                                        <pre><code class="language-js">new gridjs.Grid({
    columns: ["Name", "Email", "Position", "Company",
        {
            name: 'Country',
            hidden: true
        },],
    pagination: {
        limit: 5
    },
    sort: true,
    data: [
        ["Jonathan", "jonathan&#64;example.com", "Senior Implementation Architect",
         "Hauck Inc", "Holy See"],
        ["Harold", "harold&#64;example.com", "Forward Creative Coordinator",
         "Metz Inc", "Iran"],
        ["Shannon", "shannon&#64;example.com", "Legacy Functionality Associate",
         "Zemlak Group", "South Georgia"],
        ["Robert", "robert&#64;example.com", "Product Accounts Technician",
         "Hoeger", "San Marino"],
        ["Noel", "noel&#64;example.com", "Customer Data Director",
         "Howell - Rippin", "Germany"],
        ["Traci", "traci&#64;example.com", "Corporate Identity Director",
         "Koelpin - Goldner", "Vanuatu"],
        ["Kerry", "kerry&#64;example.com", "Lead Applications Associate",
         "Feeney, Langworth and Tremblay", "Niger"],
        ["Patsy", "patsy&#64;example.com", "Dynamic Assurance Director",
         "Streich Group", "Niue"],
        ["Cathy", "cathy&#64;example.com", "Customer Data Director",
         "Ebert, Schamberger and Johnston", "Mexico"],
        ["Tyrone", "tyrone&#64;example.com", "Senior Response Liaison",
         "Raynor, Rolfson and Daugherty", "Qatar"],
    ]
}).render(document.getElementById("table-hidden-column"));
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