@extends('docs.laravel.layout')

@section('title', 'Autocomplete | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Autocomplete</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Autocomplete</li>
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

                                    <h5 class="fw-semibold">Overview<a
                                            href="https://tarekraafat.github.io/autoComplete.js/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">The Autocomplete widgets provides suggestions while you
                                        type into the
                                        field.The datasource is a simple JavaScript array, provided to the widget using
                                        the source-option.</p>

                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!-- autocomplete css --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;&#123;&#123; URL::asset('build/libs/&#64;tarekraafat/autocomplete.js/css/autoComplete.css') &#125;&#125;&quot;&gt;
</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- autocomplete js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/&#64;tarekraafat/autocomplete.js/autoComplete.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- init js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/form-advanced.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i &#64;tarekraafat/autocomplete.js --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall &#64;tarekraafat/autocomplete.js or you can remove package by removing specific package from package.json</code></pre>

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
                                                    <th scope="row">Search Result of Fruit Names</th>
                                                    <td>
                                                        <pre><code class="language-js">var autoCompleteFruit = new autoComplete({
  selector: "#autoCompleteFruit",
  placeHolder: "Search for Fruits...",
  data: {
    src: ["Apple", "Banana", "Blueberry", "Cherry", "Coconut", "Kiwi", "Lemon", "Lime", "Mango", "Orange"],
    cache: true
  },
  resultsList: {
    element: function element(list, data) {
      if (!data.results.length) {
        // Create "No Results" message element
        var message = document.createElement("div");
        // Add class to the created element
        message.setAttribute("class", "no_result");
        // Add message text content
        message.innerHTML = "<span>Found No Results for \"" + data.query + "\"</span>";
        // Append message element to the results list
        list.prepend(message);
      }
    },
    noResults: true
  },
  resultItem: {
    highlight: true
  },
  events: {
    input: {
      selection: function selection(event) {
        var selection = event.detail.selection.value;
        autoCompleteFruit.input.value = selection;
      }
    }
  }
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Search Result of Car Names</th>
                                                    <td>
                                                        <pre><code class="language-js">var autoCompleteCars = new autoComplete({
    selector: "#autoCompleteCars",
    placeHolder: "Search for Cars...",
    data: {
        src: ["Chevrolet", "Fiat", "Ford", "Honda", "Hyundai", 
        "Hyundai", "Kia", "Mahindra", "Maruti", "Mitsubishi","MG",
        "Nissan", "Renault","Skoda", "Tata", "Toyato", "Volkswagen"],
        cache: true
    },
    resultsList: {
        element: function element(list, data) {
          if (!data.results.length) {
            // Create "No Results" message element
            var message = document.createElement("div");
            // Add class to the created element
            message.setAttribute("class", "no_result");
            // Add message text content
            message.innerHTML = "<span>Found No Results for \"" + data.query + "\"</span>";
            // Append message element to the results list
            list.prepend(message);
          }
        },
        noResults: true
      },
      resultItem: {
        highlight: true
      },
      events: {
        input: {
          selection: function selection(event) {
            var selection = event.detail.selection.value;
            autoCompleteCars.input.value = selection;
          }
        }
      }
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