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
                                @if(session()->has('message'))<div class="alert alert-success">{{ session()->get('message') }}</div>@endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)<P>{{$error}}</P>@endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6">
                                        <span id="message"></span>
                                    </div>
                                    <div class="col-xl-12 col-lg-12" id="reload">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="general_settings">
                                                    <form action="{{route('admin.general.update', $data->id)}}" method="POST" id="generalform" enctype="multipart/form-data">
                                                    {{csrf_field()}}

                                                    <!-- Logo -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="file" class="form-control" name="logo" value="{{$data->logo}}"  required>
                                                            </div>
                                                        </div>

                                                        <!-- Sitetitle -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Site Title</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="sitetitle"  value="{{$data->sitetitle}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- meta title -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="metatitle"  value="{{$data->metatitle}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- meta description -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <textarea name="metadescription" id="" cols="85" rows="5" class="form-control">{{$data->metadescription}}</textarea>
                                                            </div>
                                                        </div>

                                                        <!-- Meta Keyword -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Keyword</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="metakeyword"  value="{{$data->metakeyword}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- meta author -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Author</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="metaauthor"  value="{{$data->metaauthor}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- Favicon -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="file" class="form-control" name="favicon"  value="{{$data->favicon}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- Banner Normal Text -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner Normal Text</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="banner_normal_text"  value="{{$data->banner_normal_text}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- Banner Normal Text 2 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner Normal Text 2</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="banner_normal_text2"  value="{{$data->banner_normal_text2}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- Banner Bold Text -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner Bold Text</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="banner_bold_text"  value="{{$data->banner_bold_text}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- Banner Image -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner Image</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="file" class="form-control" name="banner_image"  value="{{$data->banner_image}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- Control button -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                            <div class="col-sm-12 col-md-7 text-center">
                                                                <input type="submit" class="btn btn-primary" value="Save">
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--  Creative Section  --}}
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-8">
                                    <h4>Creative Section</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6">
                                        <span id="message"></span>
                                    </div>
                                    <div class="col-xl-12 col-lg-12" id="reload">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="general_settings">
                                                    <form action="{{route('admin.creative.update', $creative->id)}}" method="POST" id="creativeform" enctype="multipart/form-data">
                                                    {{csrf_field()}}

                                                        <!-- image -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="file" class="form-control" name="image" value="{{$creative->image}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- title_normal_text -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Normal Text</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="title_normal_text"  value="{{$creative->title_normal_text}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- title_bold_text -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Bold Text</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="title_bold_text"  value="{{$creative->title_bold_text}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- item1_icon -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 1 Icon</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="item1_icon"  value="{{$creative->item1_icon}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- item1_title -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 1 Title</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="item1_title"  value="{{$creative->item1_title}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- item1_description -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 1 Description</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <textarea name="item1_description" id="" cols="85" rows="5" class="form-control">{{$creative->item1_description}}</textarea>
                                                            </div>
                                                        </div>

                                                        <!-- item2_icon -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 2 Icon</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="item2_icon"  value="{{$creative->item2_icon}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- item2title -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 1 Title</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="item2_title"  value="{{$creative->item2_title}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- item2_description -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 2 Description</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <textarea name="item2_description" id="" cols="85" rows="5" class="form-control">{{$creative->item2_description}}</textarea>
                                                            </div>
                                                        </div>

                                                        <!-- item3 _icon -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 3 Icon</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="item3_icon"  value="{{$creative->item3_icon}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- item3 title -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 3 Title</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="item3_title"  value="{{$creative->item3_title}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- item3_description -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 3 Description</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <textarea name="item3_description" id="" cols="85" rows="5" class="form-control">{{$creative->item3_description}}</textarea>
                                                            </div>
                                                        </div>

                                                        <!-- item4 _icon -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 4 Icon</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="item4_icon"  value="{{$creative->item4_icon}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- item4 title -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 4 Title</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="item4_title"  value="{{$creative->item4_title}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- item4_description -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Item 4 Description</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <textarea name="item4_description" id="" cols="85" rows="5" class="form-control">{{$creative->item4_description}}</textarea>
                                                            </div>
                                                        </div>

                                                        <!-- Control button -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                            <div class="col-sm-12 col-md-7 text-center">
                                                                <input type="submit" class="btn btn-primary" value="Save">
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Works --}}
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-8">
                                    <h4>Works Process Section</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6">
                                        <span id="message"></span>
                                    </div>
                                    <div class="col-xl-12 col-lg-12" id="reload">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="general_settings">
                                                    <form action="{{route('admin.work.update', $works->id)}}" method="POST" id="workform" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                        <!-- image -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Video bg Image</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="file" class="form-control" name="image"  value="{{$works->image}}">
                                                            </div>
                                                        </div>

                                                        <!-- bg_image -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Section Background Image</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="file" class="form-control" name="bg_image"  value="{{$works->bg_image}}">
                                                            </div>
                                                        </div>

                                                        <!-- basic -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Section Title Normal</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="section_title_normal"  value="{{$works->section_title_normal}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- basic -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Section Title Bold</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="section_title_bold"  value="{{$works->section_title_bold}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- section_description -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Section Description</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="section_description"  value="{{$works->section_description}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_title1 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Title1</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_title1"  value="{{$works->work_item_title1}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_desc1 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Desc1</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_desc1"  value="{{$works->work_item_desc1}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_icon1 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Icon1</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_icon1"  value="{{$works->work_item_icon1}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_title2 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Title2</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_title2"  value="{{$works->work_item_title2}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_desc2 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Desc2</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_desc2"  value="{{$works->work_item_desc2}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_icon2 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Icon2</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_icon2"  value="{{$works->work_item_icon2}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_title3 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Title3</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_title3"  value="{{$works->work_item_title3}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_desc3 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Desc3</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_desc3"  value="{{$works->work_item_desc3}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_icon3 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Icon3</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_icon3"  value="{{$works->work_item_icon3}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_title4 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Title4</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_title4"  value="{{$works->work_item_title4}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_desc4 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Desc4</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_desc4"  value="{{$works->work_item_desc4}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- work_item_icon4 -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Work Item Icon4</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="work_item_icon4"  value="{{$works->work_item_icon4}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- Video section -->
                                                        <!-- video -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">video</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="file" class="form-control" name="video"  value="{{$works->video}}">
                                                            </div>
                                                        </div>


                                                        <!-- Video text one -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Video text 1</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="video_text_1"  value="{{$works->video_text_1}}">
                                                            </div>
                                                        </div>

                                                        <!-- Video text one -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Video text 2</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="video_text_2"  value="{{$works->video_text_2}}">
                                                            </div>
                                                        </div>

                                                        <!-- Control button -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                            <div class="col-sm-12 col-md-7 text-center">
                                                                <input type="submit" class="btn btn-primary" value="Save">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Home Contact -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-8">
                                    <h4>Home Contact Section</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-6">
                                        <span id="message"></span>
                                    </div>
                                    <div class="col-xl-12 col-lg-12" id="reload">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="general_settings">
                                                    <form action="{{route('admin.home.contact.update', $hm_contact->id)}}" method="POST" id="workform" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                        <!-- address -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="address"  value="{{$hm_contact->address}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- address_title -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address Title</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="address_title"  value="{{$hm_contact->address_title}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- address_icon -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address Icon</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="address_icon"  value="{{$hm_contact->address_icon}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- email -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="email"  value="{{$hm_contact->email}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- email_address -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email Address</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="email_address"  value="{{$hm_contact->email_address}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- email_icon -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email Icon</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="email_icon"  value="{{$hm_contact->email_icon}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- call -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Call Text</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="call_text"  value="{{$hm_contact->call_text}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- number_one -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Number One</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="number_one"  value="{{$hm_contact->number_one}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- number_two -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Number Two</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="number_two"  value="{{$hm_contact->number_two}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- call_icon -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Call Icon</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="call_icon"  value="{{$hm_contact->call_icon}}" required>
                                                            </div>
                                                        </div>

                                                        <!-- Control button -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                            <div class="col-sm-12 col-md-7 text-center">
                                                                <input type="submit" class="btn btn-primary" value="Save">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
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
