@extends('admin.layout.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #formdata .form-control {
            margin-bottom: -20px !important;
        }
    </style>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <p class="lead">Package Contents</p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <form id="formdata" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
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
                                    <label>Bonus</label>
                                    <input type="text" class="form-control" name="bonus" id="bonus">
                                </div>

                                <div class="form-group">
                                    <label>Increative Gift</label>
                                    <input type="text" class="form-control" name="increative_gift" id="increative_gift">
                                </div>

                                <div class="form-group">
                                    <label>Must Ref</label>
                                    <input type="text" class="form-control" name="must_ref" id="must_ref">
                                </div>

                                <div class="form-group">
                                    <label>Wlimit</label>
                                    <input type="text" class="form-control" name="wlimit" id="wlimit">
                                </div>

                                <div class="form-group">
                                    <label>Tlimit</label>
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
                                    <input type="text" class="form-control" name="g_income_nineteen	" id="g_income_nineteen">
                                </div>

                                <div class="form-group">
                                    <label>Twenty Generation Income</label>
                                    <input type="text" class="form-control" name="g_income_twenty" id="g_income_twenty">
                                </div>

                            </div>

                            <!---- Second Column ----->
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Package Type</label>
                                    <input type="text" class="form-control" name="package_type" id="package_type">
                                </div>

                                <div class="form-group">
                                    <label>Referrel Income</label>
                                    <input type="text" class="form-control" name="referrel_income" id="referrel_income">
                                </div>

                                <div class="form-group">
                                    <label>Insurance</label>
                                    <input type="text" class="form-control" name="insurance" id="insurance">
                                </div>

                                <div class="form-group">
                                    <label>Validity</label>
                                    <input type="text" class="form-control" name="validity" id="validity">
                                </div>

                                <div class="form-group">
                                    <label>Must Days</label>
                                    <input type="text" class="form-control" name="must_days" id="must_days">
                                </div>

                                <div class="form-group">
                                    <label>Wmin</label>
                                    <input type="text" class="form-control" name="wmin" id="wmin">
                                </div>

                                <div class="form-group">
                                    <label>Tmin</label>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="save">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div><!-- End modal -->


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

                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>


                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-2">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Package Name</th>
                                                <th>Type</th>
                                                <th>package img</th>
                                                <th>Amount</th>
                                                <th>Bonus</th>
                                                <th>Validity</th>
                                                <th>Time Limit</th>
                                                <th>first GI</th>
                                                <th>Last GI</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            @foreach($packages as $key=> $package)
                                                <tr>
                                                    <td>{{$package->id}}</td>
                                                    <td>{{$package->package_name}}</td>
                                                    <td>{{$package->package_type}}</td>
                                                    <td>{{$package->package_banner}}</td>
                                                    <td>{{$package->amount}}</td>
                                                    <td>{{$package->bonus}}</td>
                                                    <td>{{$package->validity}}</td>
                                                    <td>{{$package->tlimit}}</td>
                                                    <td>{{$package->g_income_first}}</td>
                                                    <td>{{$package->g_income_twenty}}</td>
                                                    <td>{{$package->status}}</td>
                                                    <th>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-edit"></i></span>
                                                        </label>

                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-trash-alt"></i></span>
                                                        </label>
                                                    </th>
                                                </tr>
                                            @endforeach
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
            $('#save').click(function (event){
                event.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let url = "/secured/package-store";
                let req = "POST";

                let package_name = $('#package_name').val();
                let package_type = $('#package_type').val();
                let amount = $('#amount').val();
                let referrel_income = $('#referrel_income').val();
                let bonus = $('#bonus').val();
                let insurance = $('#insurance').val();
                let increative_gift = $('#increative_gift').val();
                let validity = $('#validity').val();
                let must_ref = $('#must_ref').val();
                let must_days = $('#must_days').val();
                let wlimit = $('#wlimit').val();
                let tlimit = $('#tlimit').val();
                let wmin = $('#wmin').val();
                let tmin = $('#tmin').val();
                // let package_banner = $('#package_banner').val();
                let g_income_first = $('#g_income_first').val();
                let g_income_second = $('#g_income_second').val();
                let g_income_third = $('#g_income_third').val();
                let g_income_fourth = $('#g_income_fourth').val();
                let g_income_fifth = $('#g_income_fifth').val();
                let g_income_six = $('#g_income_six').val();
                let g_income_seven = $('#g_income_seven').val();
                let g_income_eight = $('#g_income_eight').val();
                let g_income_nine = $('#g_income_nine').val();
                let g_income_ten = $('#g_income_ten').val();
                let g_income_eleven = $('#g_income_eleven').val();
                let g_income_twelve = $('#g_income_twelve').val();
                let g_income_thirteen = $('#g_income_thirteen').val();
                let g_income_fourteen = $('#g_income_fourteen').val();
                let g_income_fifteen = $('#g_income_fifteen').val();
                let g_income_sixteen = $('#g_income_sixteen').val();
                let g_income_seventeen = $('#g_income_seventeen').val();
                let g_income_eighteen = $('#g_income_eighteen').val();
                let g_income_nineteen = $('#g_income_nineteen').val();
                let g_income_twenty = $('#g_income_twenty').val();
                let status = $('#status').val();


                // var _token   = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: url,
                    type: req,
                    data:{
                        package_name:package_name,
                        package_type:package_type,
                        amount:amount,
                        referrel_income:referrel_income,
                        bonus:bonus,
                        insurance:insurance,
                        increative_gift:increative_gift,
                        validity:validity,
                        must_ref:must_ref,
                        must_days:must_days,
                        wlimit:wlimit,
                        tlimit:tlimit,
                        wmin:wmin,
                        tmin:tmin,
                        // package_banner:package_banner,
                        g_income_first:g_income_first,
                        g_income_second:g_income_second,
                        g_income_third:g_income_third,
                        g_income_fourth:g_income_fourth,
                        g_income_fifth:g_income_fifth,
                        g_income_six:g_income_six,
                        g_income_seven:g_income_seven,
                        g_income_eight:g_income_eight,
                        g_income_nine:g_income_nine,
                        g_income_ten:g_income_ten,
                        g_income_eleven:g_income_eleven,
                        g_income_twelve:g_income_twelve,
                        g_income_thirteen:g_income_thirteen,
                        g_income_fourteen:g_income_fourteen,
                        g_income_fifteen:g_income_fifteen,
                        g_income_sixteen:g_income_sixteen,
                        g_income_seventeen:g_income_seventeen,
                        g_income_eighteen:g_income_eighteen,
                        g_income_nineteen:g_income_nineteen,
                        g_income_twenty:g_income_twenty,
                        status:status,

                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    cache: false,
                    traditional: true,
                    // contentType: false,
                    // processData: false,
                    success:function(response){
                        console.log(response.package_name);

                        var tr = `
                                    <tr>
                                        <td>${response.data.id}</td>
                                        <td>${response.data.package_name}</td>
                                        <td>${response.data.package_type}</td>
                                        <td>${response.data.package_banner}</td>
                                        <td>${response.data.amount}</td>
                                        <td>${response.data.bonus}</td>
                                        <td>${response.data.validity}</td>
                                        <td>${response.data.tlimit}</td>
                                        <td>${response.data.g_income_first}</td>
                                        <td>${response.data.g_income_twenty}</td>
                                        <th>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-edit"></i></span>
                                            </label>

                                            <label class="selectgroup-item">
                                                <input type="radio" name="icon-input" value="1" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-trash-alt"></i></span>
                                            </label>
                                        </th>
                                    </tr>
                                `
                        $('#tbody').append(tr)
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            })
        });
    </script>

@endsection
