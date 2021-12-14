@extends('.admin.layout.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-8">
                                    <h4>General Settings</h4>
                                </div>
                                <div class="col-4">
                                    <a href="{{route('admin.general.show')}}" class="btn btn-primary" style="float: right;">Update</a>
                                    <a href="https://icon-icons.com/icon/basic-helm/97749" target="_blank" class="btn btn-primary" style="float: right;">Front Icons</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6">
                                        <span id="message"></span>
                                    </div>
                                    <div class="col-xl-12 col-lg-12" id="reload">
                                        <div class="row">
                                            <div class="table-responsive" >
                                                <table class="table table-striped" id="table-1">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">SN</th>
                                                        <th>Title</th>
                                                        <th>Normal Text</th>
                                                        <th>Bold Text</th>
                                                        <th>Logo</th>
                                                        <th>Favicon</th>
                                                        <th>Image</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i='1';?>
                                                    @foreach($data as $row)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$row->sitetitle}}</td>
                                                            <td>{{$row->banner_normal_text}}</td>
                                                            <td>{{$row->banner_bold_text}}</td>
                                                            <td><img src="{{ url('storage/app/general/'.$row->logo)}}" alt="" width="100" id="img"></td>
                                                            <td><img src="{{ asset('storage/app/general/'.$row->favicon) }}" alt="" width="100" id="img"></td>
                                                            <td><img src="{{ asset('storage/app/general/'.$row->banner_image)}}" alt="" width="100" id="img"></td>
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
                    </div>
                </div>


                <!-- Creative Section Inidex -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-8">
                                    <h4>Creative Section</h4>
                                </div>
                                <div class="col-4">
                                    <a href="{{route('admin.general.show')}}" class="btn btn-primary" style="float: right;">Update</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6">
                                        <span id="message"></span>
                                    </div>
                                    <div class="col-xl-12 col-lg-12" id="reload">
                                        <div class="row">
                                            <div class="table-responsive" >
                                                <table class="table table-striped" id="table-1">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">SN</th>
                                                        <th>Normal Title</th>
                                                        <th>Bold Text</th>
                                                        <th>Item 1 Title</th>
                                                        <th>Item 2 Title</th>
                                                        <th>Item 3 Title</th>
                                                        <th>Item 4 Title</th>
                                                        <th>Image</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i='1';?>
                                                    @foreach($creative as $row)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$row->title_normal_text}}</td>
                                                            <td>{{$row->title_bold_text}}</td>
                                                            <td>{{$row->item1_title}}</td>
                                                            <td>{{$row->item2_title}}</td>
                                                            <td>{{$row->item3_title}}</td>
                                                            <td>{{$row->item4_title}}</td>
                                                            <td><img src="{{ asset('storage/app/general/'.$row->banner_image)}}" alt="" width="100" id="img"></td>
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
                    </div>
                </div>


                <!-- Work Process Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-8">
                                    <h4>Work Process Section</h4>
                                </div>
                                <div class="col-4">
                                    <a href="{{route('admin.general.show')}}" class="btn btn-primary" style="float: right;">Update</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6">
                                        <span id="message"></span>
                                    </div>
                                    <div class="col-xl-12 col-lg-12" id="reload">
                                        <div class="row">
                                            <div class="table-responsive" >
                                                <table class="table table-striped" id="table-1">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">SN</th>
                                                        <th>Normal Title</th>
                                                        <th>Bold Text</th>
                                                        <th>Work Item Title1</th>
                                                        <th>Work Item Title2</th>
                                                        <th>Work Item Title3</th>
                                                        <th>Work Item Title4</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i='1';?>
                                                    @foreach($works as $row)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$row->section_title_normal}}</td>
                                                            <td>{{$row->section_title_bold}}</td>
                                                            <td>{{$row->work_item_title1}}</td>
                                                            <td>{{$row->work_item_title2}}</td>
                                                            <td>{{$row->work_item_title3}}</td>
                                                            <td>{{$row->work_item_title4}}</td>
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
                    </div>
                </div>


                <!-- home Contact -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-8">
                                    <h4>Work Process Section</h4>
                                </div>
                                <div class="col-4">
                                    <a href="{{route('admin.general.show')}}" class="btn btn-primary" style="float: right;">Update</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6">
                                        <span id="message"></span>
                                    </div>
                                    <div class="col-xl-12 col-lg-12" id="reload">
                                        <div class="row">
                                            <div class="table-responsive" >
                                                <table class="table table-striped" id="table-1">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">SN</th>
                                                        <th>Address</th>
                                                        <th>Call</th>
                                                        <th>Email</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i='1';?>
                                                    @foreach($homeContact as $row)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$row->address}}</td>
                                                            <td>{{$row->email}}</td>
                                                            <td>{{$row->call_text}}</td>
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
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


