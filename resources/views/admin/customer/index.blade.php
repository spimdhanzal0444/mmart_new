@extends('admin.layout.master')

@section('content')
    <style>
        .main-content {
            padding-left: 254px;
            padding-right: 5px;
            padding-top: 80px;
        }
    </style>
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
                                        <th class="text-center pt-3">
                                            <div class="custom-checkbox custom-checkbox-table custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                       class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Task Name</th>
                                        <th>Progress</th>
                                        <th>Members</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Create a mobile app</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                        </td>
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-2">
                                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Redesign homepage</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-60"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-3.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                        </td>
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info badge-shadow">Todo</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-3">
                                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Backup database</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                        </td>
                                        <td>2018-01-29</td>
                                        <td>
                                            <div class="badge badge-warning badge-shadow">In Progress</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-4">
                                                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Input data</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-40"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                        </td>
                                        <td>2018-01-16</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Create a mobile app</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                        </td>
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-2">
                                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Redesign homepage</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-60"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-3.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                        </td>
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info badge-shadow">Todo</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-3">
                                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Backup database</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                        </td>
                                        <td>2018-01-29</td>
                                        <td>
                                            <div class="badge badge-warning badge-shadow">In Progress</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-4">
                                                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Input data</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-40"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                        </td>
                                        <td>2018-01-16</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Create a mobile app</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                        </td>
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-2">
                                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Redesign homepage</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-60"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-3.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                        </td>
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info badge-shadow">Todo</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-3">
                                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Backup database</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                        </td>
                                        <td>2018-01-29</td>
                                        <td>
                                            <div class="badge badge-warning badge-shadow">In Progress</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-4">
                                                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Input data</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-40"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                        </td>
                                        <td>2018-01-16</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Create a mobile app</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                        </td>
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-2">
                                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Redesign homepage</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-60"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-3.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                        </td>
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info badge-shadow">Todo</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-3">
                                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Backup database</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                        </td>
                                        <td>2018-01-29</td>
                                        <td>
                                            <div class="badge badge-warning badge-shadow">In Progress</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-4">
                                                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Input data</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-40"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                        </td>
                                        <td>2018-01-16</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Create a mobile app</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                        </td>
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-2">
                                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Redesign homepage</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-60"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-3.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                        </td>
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info badge-shadow">Todo</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-3">
                                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Backup database</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                        </td>
                                        <td>2018-01-29</td>
                                        <td>
                                            <div class="badge badge-warning badge-shadow">In Progress</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-4">
                                                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Input data</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-40"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                        </td>
                                        <td>2018-01-16</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>

                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Create a mobile app</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                        </td>
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-2">
                                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Redesign homepage</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-60"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-3.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                        </td>
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info badge-shadow">Todo</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-3">
                                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Backup database</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                        </td>
                                        <td>2018-01-29</td>
                                        <td>
                                            <div class="badge badge-warning badge-shadow">In Progress</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center pt-2">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                       id="checkbox-4">
                                                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Input data</td>
                                        <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-40"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-2.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-5.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-4.png')}}" width="35">
                                            <img alt="image" src="{{asset('asset/admin/img/users/user-1.png')}}" width="35">
                                        </td>
                                        <td>2018-01-16</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary">Detail</a></td>
                                    </tr>
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
