@extends('admin.layout.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #formdata .form-control {
            margin-bottom: -20px !important;
        }
    </style>

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{__('Packages Wise Members')}}</h4>
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
                                        @foreach($packages as $key=> $package)
                                            <tr>
                                                <td>{{$package->id}}</td>
                                                <td>{{$package->package_name}}</td>
                                                <td>
                                                    <label class="selectgroup-item" data-toggle="modal" data-target="#myModal" title="{{__('View Member')}}">
                                                        <a href="{{route("view.member.package",encrypt($package->id))}}"><span class="selectgroup-button selectgroup-button-icon"><i class="fa fa-eye"></i></span></a>
                                                    </label>
                                                </td>
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
@endsection
