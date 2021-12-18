@extends('admin.layout.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #formdata .form-control {
            margin-bottom: -20px !important;
        }
    </style>
    <div class="secured_pages_container">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Multi Select</h4>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-2">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Package Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tbody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        // VIEW ALL RECORD
        function allRecord(){
            $.ajax({
                url: "/secured/package-all",
                success: function(response){
                    var html = ''

                    $.each(response.data, function (key, row){
                        html += '<tr>'
                        html += '<td>'+ row.id +'</td>'
                        html += '<td>'+ row.package_name +'</td>'
                        html += `
                            <th>
                                <label class="selectgroup-item" data-toggle="modal" data-target="#myModal">
                                    <a href=""><span class="selectgroup-button selectgroup-button-icon"><i class="fa fa-eye"></i></span></a>
                                </label>
                            </th>
                        `
                        html += '</tr>'

                        $('#tbody').html(html)
                    })
                },
                error: function(){
                    $.notify(`<li style="color: white">Something is wrong</li>`, "error");
                }
            });
        }
        allRecord()

    </script>
@endsection
