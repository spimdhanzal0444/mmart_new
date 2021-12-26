@extends('.admin.layout.master')

@section('content')
    <!-- Main Content -->
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
                                <a href="{{route('admin.rank.show')}}" class="btn btn-primary" style="float: right;">Update</a>
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
                                                    <th>Normal text</th>
                                                    <th>Bold Text</th>
                                                    <th>Item One</th>
                                                    <th>Item Two</th>
                                                    <th>Item Three</th>
                                                    <th>Item Four</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i='1';?>
                                                @foreach($ranks as $row)
                                                    <tr>
                                                        <td>{{$i++}}</td>
                                                        <td>{{$row->rank_section_normal_title}}</td>
                                                        <td>{{$row->rank_section_bold_title}}</td>
                                                        <td>{{$row->rank1_circle_text}}</td>
                                                        <td>{{$row->rank2_circle_text}}</td>
                                                        <td>{{$row->rank3_circle_text}}</td>
                                                        <td>{{$row->rank4_circle_text}}</td>
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
@endsection


