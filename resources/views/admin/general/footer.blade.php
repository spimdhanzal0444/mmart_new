@extends('admin.layout.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-8">
                                    <h4>footer Table</h4>
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
                                    <div class="col-xl-12 col-lg-12" id="reload">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="general_settings">
                                                    <form action="{{route('admin.footer.update', $footer->id)}}" method="POST" id="footerform" enctype="multipart/form-data">
                                                    @csrf
                                                        <!-- copyright -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Copyright</label>
                                                            <div class="col-sm-12 col-md-7">
                                                                <input type="text" class="form-control" name="copyright"  value="{{$footer->copyright}}" required>
                                                            </div>
                                                        </div>

                                                        <!-----------  footer ------------->
                                                        <div class="form-group row mb-4">
                                                            <div id="add-more-area" style="margin: 0 auto">
                                                                <div class="input-group control-group after-add-more">
                                                                    <!-- social icon -->
                                                                    <div class="form-group row mb-4">
                                                                        <label class="col-form-label col-12">Social Icon</label>
                                                                        <div class="col-sm-12 col-md-7">
                                                                            <input type="text" class="form-control" placeholder="" name="social_icon[]" value="" >
                                                                        </div>
                                                                    </div>
                                                                    <!-- social link -->
                                                                    <div class="form-group row mb-4">
                                                                        <label class="col-form-label col-12">Social Link</label>
                                                                        <div class="col-sm-12 col-md-7">
                                                                            <input type="text" class="form-control" placeholder="" name="social_link[]" value="" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                                                    </div>
                                                                </div>

                                                                <!-- Copy Fields -->
                                                                <div class="copy hide">
                                                                    <div class="control-group input-group" style="margin-top:10px">
                                                                        <!-- social_icon -->
                                                                        <div class="form-group row mb-4">
                                                                            <label class="col-form-label col-12">Social Icon</label>
                                                                            <div class="col-sm-12 col-md-7">
                                                                                <input type="text" class="form-control" placeholder="" name="social_icon[]" value="">
                                                                            </div>
                                                                        </div>

                                                                        <!-- social_link -->
                                                                        <div class="form-group row mb-4">
                                                                            <label class="col-form-label col-12">Social Link</label>
                                                                            <div class="col-sm-12 col-md-7">
                                                                                <input type="text" class="form-control" placeholder="" name="social_link[]" value="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="input-group-btn">
                                                                            <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <!-- Control button -->
                                                        <div class="form-group row mb-4">
                                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                            <div class="col-sm-12 col-md-7 text-center">
                                                                <a href="https://fontawesome.com/" target="_blank" class="btn btn-success mr-3">Collect Icons</a>
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
    </script>


@endsection
