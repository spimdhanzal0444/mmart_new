@extends('admin.layout.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Main Content -->
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-8">
                                <h4>Rank Table</h4>
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
                                                <form action="{{route('admin.rank.update', $rank->id)}}" method="POST" id="rankform" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <!-- rank_section_normal_title -->
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank Section Normal Title</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" name="rank_section_normal_title"  value="{{$rank->rank_section_normal_title}}" required>
                                                        </div>
                                                    </div>

                                                    <!-- rank_section_bold_title -->
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank Section Bold Title</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" name="rank_section_bold_title"  value="{{$rank->rank_section_bold_title}}" required>
                                                        </div>
                                                    </div>

                                                    <!-- rank1_circle_text -->
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 1 Circle Text</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" name="rank1_circle_text"  value="{{$rank->rank1_circle_text}}" required>
                                                        </div>
                                                    </div>

                                                    <!-----------  ADD MORE AREA  1 ------------->
                                                    <div class="form-group row mb-4">
                                                        <div id="add-more-area" style="margin: 0 auto">
                                                            <div class="input-group control-group after-add-more">
                                                                <!-- rank1_item_text -->
                                                                <div class="form-group row mb-4">
                                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 1 Item Text</label>
                                                                    <div class="col-sm-12 col-md-7">
                                                                        <input type="text" class="form-control" placeholder="" name="rank1_item_text[]" value="" >
                                                                    </div>
                                                                </div>
                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                                                </div>
                                                            </div>

                                                            <!-- Copy Fields -->
                                                            <div class="copy hide">
                                                                <div class="control-group input-group" style="margin-top:10px">
                                                                    <!-- social link -->
                                                                    <div class="form-group row mb-4">
                                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 1 Item Text</label>
                                                                        <div class="col-sm-12 col-md-7">
                                                                            <input type="text" class="form-control" placeholder="" name="rank1_item_text[]" value="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <!-- rank2_circle_text -->
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 2 Circle Text</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" name="rank2_circle_text"  value="{{$rank->rank2_circle_text}}" required>
                                                        </div>
                                                    </div>

                                                    <!-----------  ADD MORE AREA  2 ------------->
                                                    <div class="form-group row mb-4">
                                                        <div id="add-more-area" style="margin: 0 auto">
                                                            <div class="input-group control-group after-add-more2">
                                                                <!-- rank2_item_text -->
                                                                <div class="form-group row mb-4">
                                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 2 Item Text</label>
                                                                    <div class="col-sm-12 col-md-7">
                                                                        <input type="text" class="form-control" name="rank2_item_text[]"  value="">
                                                                    </div>
                                                                </div>

                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-success add-more2" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                                                </div>
                                                            </div>

                                                            <!-- Copy Fields -->
                                                            <div class="copy2 hide">
                                                                <div class="control-group cg2 input-group" style="margin-top:10px">
                                                                    <!-- rank2_item_text -->
                                                                    <div class="form-group row mb-4">
                                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 2 Item Text</label>
                                                                        <div class="col-sm-12 col-md-7">
                                                                            <input type="text" class="form-control" name="rank2_item_text[]"  value="">
                                                                        </div>
                                                                    </div>


                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-danger remove2" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>





                                                    <!-- rank3_circle_text -->
                                                    <!-- rank3_circle_text -->
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 3 Circle Text</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" name="rank3_circle_text"  value="{{$rank->rank3_circle_text}}" required>
                                                        </div>
                                                    </div>

                                                    <!-----------  ADD MORE AREA  3 ------------->
                                                    <div class="form-group row mb-4">
                                                        <div id="add-more-area" style="margin: 0 auto">
                                                            <div class="input-group control-group after-add-more3">
                                                                <!-- rank3_item_text -->
                                                                <div class="form-group row mb-4">
                                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 3 Item Text</label>
                                                                    <div class="col-sm-12 col-md-7">
                                                                        <input type="text" class="form-control" name="rank3_item_text[]"  value="">
                                                                    </div>
                                                                </div>

                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-success add-more3" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                                                </div>
                                                            </div>

                                                            <!-- Copy Fields -->
                                                            <div class="copy3 hide">
                                                                <div class="control-group cg3 input-group" style="margin-top:10px">
                                                                    <!-- rank3_item_text -->
                                                                    <div class="form-group row mb-4">
                                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 3 Item Text</label>
                                                                        <div class="col-sm-12 col-md-7">
                                                                            <input type="text" class="form-control" name="rank3_item_text[]"  value="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-danger remove3" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <!-- rank4_circle_text -->
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 4 Circle Text</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" name="rank4_circle_text"  value="{{$rank->rank4_circle_text}}" required>
                                                        </div>
                                                    </div>

                                                    <!-----------  ADD MORE AREA  4 ------------->
                                                    <div class="form-group row mb-4">
                                                        <div id="add-more-area" style="margin: 0 auto">
                                                            <div class="input-group control-group after-add-more4">
                                                                <!-- rank4_item_text -->
                                                                <div class="form-group row mb-4">
                                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 4 Item Text</label>
                                                                    <div class="col-sm-12 col-md-7">
                                                                        <input type="text" class="form-control" name="rank4_item_text[]"  value="">
                                                                    </div>
                                                                </div>

                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-success add-more4" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                                                </div>
                                                            </div>

                                                            <!-- Copy Fields -->
                                                            <div class="copy4 hide">
                                                                <div class="control-group cg4 input-group" style="margin-top:10px">
                                                                    <!-- rank4_item_text -->
                                                                    <div class="form-group row mb-4">
                                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rank 4 Item Text</label>
                                                                        <div class="col-sm-12 col-md-7">
                                                                            <input type="text" class="form-control" name="rank4_item_text[]"  value="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-danger remove4" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                                    </div>
                                                                </div>
                                                            </div>
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

    <script type="text/javascript">

        $(document).ready(function() {
            $(".add-more").click(function(){
                var html = $(".copy").html();
                $(".after-add-more").after(html);
            });

            $("body").on("click",".remove",function(){
                $(this).parents(".control-group").remove();
            });
        });

        $(document).ready(function() {
            $(".add-more2").click(function(){
                var html = $(".copy2").html();
                $(".after-add-more2").after(html);
            });

            $("body").on("click",".remove2",function(){
                $(this).parents(".cg2").remove();
            });
        });

        $(document).ready(function() {
            $(".add-more3").click(function(){
                var html = $(".copy3").html();
                $(".after-add-more3").after(html);
            });

            $("body").on("click",".remove3",function(){
                $(this).parents(".cg3").remove();
            });
        });

        $(document).ready(function() {
            $(".add-more4").click(function(){
                var html = $(".copy4").html();
                $(".after-add-more4").after(html);
            });

            $("body").on("click",".remove4",function(){
                $(this).parents(".cg4").remove();
            });
        });
    </script>


@endsection
