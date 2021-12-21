@extends('admin.layout.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <p class="lead">Package Contents</p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <!-- Error -->
                    <div>
                        <ul id="responseErrors" class="d-none"></ul>
                    </div>
                </div>
                <div class="modal-body">

                    <form id="packageCreate" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <input type="hidden" name="hideID" value="">
                            <!---- First Column ----->
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Package Name</label>
                                    <input type="text" class="form-control" name="package_name" id="package_name">
                                </div>

                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" name="amount" id="amount">
                                </div>

                                <div class="form-group">
                                    <label>Daily Bonus</label>
                                    <input type="text" class="form-control" name="bonus" id="bonus">
                                </div>

                                <div class="form-group">
                                    <label>Withdraw Maximum Limit</label>
                                    <input type="text" class="form-control" name="wlimit" id="wlimit">
                                </div>

                                <div class="form-group">
                                    <label>Transfer Maximum Limit</label>
                                    <input type="text" class="form-control" name="tlimit" id="tlimit">
                                </div>

                                <div class="form-group">
                                    <label>Package Banner</label>
                                    <input type="file" class="form-control" name="package_banner" id="package_banner">
                                </div>

                                <div class="form-group">
                                    <label>Second Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_second" id="g_income_second">
                                </div>

                                <div class="form-group">
                                    <label>Fourth Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_fourth" id="g_income_fourth">
                                </div>

                                <div class="form-group">
                                    <label>Six Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_six" id="g_income_six">
                                </div>

                                <div class="form-group">
                                    <label>Eight Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_eight" id="g_income_eight">
                                </div>

                                <div class="form-group">
                                    <label>Eleven Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_eleven" id="g_income_eleven">
                                </div>

                                <div class="form-group">
                                    <label>Thirteen Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_thirteen" id="g_income_thirteen">
                                </div>

                                <div class="form-group">
                                    <label>Fifteen Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_fifteen" id="g_income_fifteen">
                                </div>

                                <div class="form-group">
                                    <label>Seventeen Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_seventeen" id="g_income_seventeen">
                                </div>

                                <div class="form-group">
                                    <label>Nineteen Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_nineteen" id="g_income_nineteen">
                                </div>

                                <div class="form-group">
                                    <label>Twenty Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_twenty" id="g_income_twenty">
                                </div>

                            </div>

                            <!---- Second Column ----->
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Sponsor Income</label>
                                    <input type="text" class="form-control" name="referrel_income" id="referrel_income">
                                </div>

                                <div class="form-group">
                                    <label>Validity</label>
                                    <input type="text" class="form-control" name="validity" id="validity">
                                </div>

                                <div class="form-group">
                                    <label>Withdraw Minimum Limit</label>
                                    <input type="text" class="form-control" name="wmin" id="wmin">
                                </div>

                                <div class="form-group">
                                    <label>Transfer Minimum Limit</label>
                                    <input type="text" class="form-control" name="tmin" id="tmin">
                                </div>

                                <div class="form-group">
                                    <label>First Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_first" id="g_income_first">
                                </div>

                                <div class="form-group">
                                    <label>Third Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_third" id="g_income_third">
                                </div>

                                <div class="form-group">
                                    <label>Fifth Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_fifth" id="g_income_fifth">
                                </div>

                                <div class="form-group">
                                    <label>Seven Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_seven" id="g_income_seven">
                                </div>

                                <div class="form-group">
                                    <label>Nine Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_nine" id="g_income_nine">
                                </div>

                                <div class="form-group">
                                    <label>Ten Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_ten" id="g_income_ten">
                                </div>

                                <div class="form-group">
                                    <label>Twelve Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_twelve" id="g_income_twelve">
                                </div>

                                <div class="form-group">
                                    <label>Fourteen Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_fourteen" id="g_income_fourteen">
                                </div>

                                <div class="form-group">
                                    <label>Sixteen Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_sixteen" id="g_income_sixteen">
                                </div>

                                <div class="form-group">
                                    <label>Eighteen Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_eighteen" id="g_income_eighteen">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="active" selected>Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <!-- Controll Button -->
                        <button type="submit" class="btn btn-primary saveBtn" id="save">Save</button>
                        <button type="submit" class="btn btn-primary updateBtn" id="update">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End modal -->


    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Packages</h4>
                            <!-- Modal Button -->
                            <div class="text-right" style="position: absolute; right: 22px">
                                <button type="button" class="btn btn-info btn-lg modalBtn" data-toggle="modal" data-target="#myModal">Add Package</button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Package Name</th>
                                        <th>package img</th>
                                        <th>Amount</th>
                                        <th>Bonus</th>
                                        <th>Validity</th>
                                        <th>Time Limit</th>
                                        <th>First GI</th>
                                        <th>Last GI</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <!-- Coming data from ajax -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            // HIDE UPDATE BUTTON
            $('.modalBtn').click(function (){
                $('.updateBtn').css("display", "none")
            })

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // INSERT A RECORD
            $(document).on("click", "#save", function (event){
                event.preventDefault();
                let formData = new FormData($('#packageCreate')[0]);
                let url = "/secured/package-store";
                let req = "POST";

                $.ajax({
                    type: req,
                    url: url,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        if (response.status == 400){

                            $('#responseErrors').html("")
                            $('#responseErrors').removeClass('d-none')
                            $.each(response.errors, function (key, error){
                                $.notify(`<li style="color: white">${error}</li>`, "error");
                            })
                        }

                        if (response.status == 200){
                            $('#responseErrors').html("")
                            $('#responseErrors').addClass('d-none')

                            $('#packageCreate').find('input').val('')
                            $('#myModal').modal('hide')

                            allRecord()
                            $.notify(`<li style="color: white">${response.msg}</li>`, "success");
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
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
                        html += '<td>'+ row.package_banner +'</td>'
                        html += '<td>'+ row.amount +'</td>'
                        html += '<td>'+ row.bonus +'</td>'
                        html += '<td>'+ row.validity +'</td>'
                        html += '<td>'+ row.tlimit +'</td>'
                        html += '<td>'+ row.g_income_first +'</td>'
                        html += '<td>'+ row.g_income_twenty +'</td>'
                        html += '<td>'+ row.status +'</td>'
                        html += `
                            <th>
                                <label class="selectgroup-item" data-toggle="modal" data-target="#myModal" onclick="editItem(${row.id})">
                                    <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-edit"></i></span>
                                </label>

                                <label class="selectgroup-item" onclick="deleteItem(${row.id})">
                                    <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-trash-alt"></i></span>
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

        // DELETE A SPECIFIG DATA
        function deleteItem(id){
            $.ajax({
                url : "/secured/package-delete/"+id,
                type: "DELETE",
                data : {"id": id},
                success: function(response) {
                    allRecord()
                    $.notify(`<li style="color: white">${response.msg}</li>`, "success");
                },
                error: function (error) {
                    console.log(error)
                }
            });
        }

        // SHOWING VALUE INTO INPUT FILED
        function editItem(id){
            // HIDE SAVE BUTTON
            $('.saveBtn').css("display", "none")

            $.ajax({
                url: "/secured/package-all",
                success: function(response){
                   var idWiseData = response.data.find(item => item.id === id)

                    $('input[name="hideID"]').val(idWiseData.id)

                    $('input[name="package_name"]').val(idWiseData.package_name)
                    $('input[name="amount"]').val(idWiseData.amount)
                    $('input[name="referrel_income"]').val(idWiseData.referrel_income)
                    $('input[name="bonus"]').val(idWiseData.bonus)
                    $('input[name="validity"]').val(idWiseData.validity)
                    $('input[name="wlimit"]').val(idWiseData.wlimit)
                    $('input[name="tlimit"]').val(idWiseData.tlimit)
                    $('input[name="wmin"]').val(idWiseData.wmin)
                    $('input[name="tmin"]').val(idWiseData.tmin)
                    $('input[name="g_income_first"]').val(idWiseData.g_income_first)
                    $('input[name="g_income_second"]').val(idWiseData.g_income_second)
                    $('input[name="g_income_third"]').val(idWiseData.g_income_third)
                    $('input[name="g_income_fourth"]').val(idWiseData.g_income_fourth)
                    $('input[name="g_income_fifth"]').val(idWiseData.g_income_fifth)
                    $('input[name="g_income_six"]').val(idWiseData.g_income_six)
                    $('input[name="g_income_seven"]').val(idWiseData.g_income_seven)
                    $('input[name="g_income_eight"]').val(idWiseData.g_income_eight)
                    $('input[name="g_income_nine"]').val(idWiseData.g_income_nine)
                    $('input[name="g_income_ten"]').val(idWiseData.g_income_ten)
                    $('input[name="g_income_eleven"]').val(idWiseData.g_income_eleven)
                    $('input[name="g_income_twelve"]').val(idWiseData.g_income_twelve)
                    $('input[name="g_income_thirteen"]').val(idWiseData.g_income_thirteen)
                    $('input[name="g_income_fourteen"]').val(idWiseData.g_income_fourteen)
                    $('input[name="g_income_fifteen"]').val(idWiseData.g_income_fifteen)
                    $('input[name="g_income_sixteen"]').val(idWiseData.g_income_sixteen)
                    $('input[name="g_income_seventeen"]').val(idWiseData.g_income_seventeen)
                    $('input[name="g_income_eighteen"]').val(idWiseData.g_income_eighteen)
                    $('input[name="g_income_nineteen"]').val(idWiseData.g_income_nineteen)
                    $('input[name="g_income_twenty"]').val(idWiseData.g_income_twenty)
                    $('input[name="status"]').val(idWiseData.status)
                },
                error: function(){
                    $.notify(`<li style="color: white">Something is wrong</li>`, "error");
                }
            });
        }


        // UPDATE SPECIFIC DATA
        $("body").on("click", "#update", function (event){
            event.preventDefault();
            let formData = new FormData($('#packageCreate')[0]);
            let url = "/secured/package-update";
            let req = "POST";

            $.ajax({
                type: req,
                url: url,
                data: formData,
                contentType: false,
                processData: false,
                success:function(response){
                    if (response.status == 400){

                        $('#responseErrors').html("")
                        $('#responseErrors').removeClass('d-none')
                        $.each(response.errors, function (key, error){
                            $.notify(`<li style="color: white">${error}</li>`, "error");
                        })
                    }

                    if (response.status == 200){
                        $('#responseErrors').html("")
                        $('#responseErrors').addClass('d-none')

                        $('#packageCreate').find('input').val('')
                        $('#myModal').modal('hide')
                        $.notify(`<li style="color: white">${response.msg}</li>`, "success");

                        allRecord()
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })
    </script>
@endsection
