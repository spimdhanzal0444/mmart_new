<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="modal fade" id="paymentModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <p class="lead" style="display: inline-block">{{__('Package Buy Now')}}</p>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <div class="payment-action">
                    <!--  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="intstruction_list ">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#existing">Existing</a></li>
                                    <li><a data-toggle="tab" href="#new">New</a></li>
                                </ul>

                                <div class="tab-content">
                                    <!--------- Existing ---------->
                                    <div id="existing" class="tab-pane fade in active">
                                        <div class="form-group">
                                            <div>
                                                <div class="check-box-list">
                                                    <div id="balanceAlart">

                                                    </div>

                                                    <div id="balanceAlartTopper">

                                                    </div>
                                                </div>
                                            </div>
                                            <div id="insertRefId">
                                                <div class="form-group">
                                                    <label for="ref_id">{{__('Enter Your Referral ID')}}</label>
                                                    <input name="ref_id" value="{{old('ref_id')}}" type="text" class="form-control search" placeholder="{{__('Enter Your Referral ID')}}">
                                                </div>
                                            </div>
                                            <div class="refByDetails">
                                                <!-- Coming value when user enter referral code -->
                                            </div>
                                        </div>
                                    </div>

                                    <!--------- New ---------->
                                    <div id="new" class="tab-pane fade">
                                        <form action="{{route('newUser')}}" method="post">
                                            @csrf

                                            <div class="form-group">
                                                <label for="name">{{__('Name')}}</label>
                                                <input name="name" value="{{old('name')}}" type="text" class="form-control" id="name" placeholder="{{__('Name')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="username">{{__('User Name')}}</label>
                                                <input name="username" value="{{old('User Name')}}" type="text" class="form-control" id="username" placeholder="{{__('User Name')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="password">{{__('Password')}}</label>
                                                <input name="password" value="{{old('Password')}}" type="password" class="form-control" id="password" placeholder="{{__('Enter Password')}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="placement_id">{{__('Placement ID')}}</label>
                                                <input name="placement_id" value="{{old('placement_id')}}" type="text" class="form-control search" placeholder="{{__('Placement ID')}}">
                                            </div>

                                            <div class="refByDetails">
                                                <!-- Coming value when user enter referral code -->
                                            </div>

                                            <!-- new user control button -->
                                            <div style="text-align: center; ">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <input type="hidden" name="wallet" value="wallet" id="wallet">
                            <div id="wallet">
                                <div class="form-group">
                                    <p>{{__('Package Name:')}} <span id="pack_name"> {{$package->package_name}}</span></p>
                                </div>
                                <div class="form-group">
                                    <p>{{__('Package Value:')}} <span>{{$package->amount}}</span></p>
                                </div>
                                <div class="form-group">
                                    <p>{{__('Your Current Wallet Balance:')}} <span> {{Auth::user()->balance}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controll Button -->
                    <div style="text-align: center; ">
                        <button type="button" class="btn btn-primary updateBtn" id="butWallet">Buy Using Wallet</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End modal -->

<script type="text/javascript">
    $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});

    $('.search').on('keyup', function () {
        $value = $(this).val();
        if ($value.length == 6) {
            $.ajax({
                type: 'get',
                url: '{{route('search')}}',
                data: {'search': $value},
                success: function (response) {
                    var data = ''
                    data += `
                        <div id="userArea">
                            <h4>Name : <span id="ref_by_name">${response.data.name} (${response.data.referral_id})</span></h4>
                            <p>Phone Number : <span>${response.data.phone}</span></p>
                            <p>Referred By : <span>${response.parent_user.name} (${response.parent_user.referral_id})</span></p>
                        </div>
                        `

                    data += `
                            <div class="form-group" id="selectTeam">
                                <label>{{__('Select Team')}}</label>
                                <select name="team" class="team form-control" >
                                    <option disabled style="background:#e0dede" selected>{{__('Select Team')}}</option>

                                    <option value="{{__('a')}}" ${(response.data.team_a !== null) ? 'disabled style="background:#e0dede"' : ''}>{{__('Team A')}}</option>
                                    <option value="{{__('b')}}" ${(response.data.team_b !== null) ? 'disabled style="background:#e0dede"' : ''}>{{__('Team B')}}</option>
                                    <option value="{{__('c')}}" ${(response.data.team_c !== null) ? 'disabled style="background:#e0dede"' : ''}>{{__('Team C')}}</option>
                                </select>
                            </div>
                        `
                    $('.refByDetails').html(data)
                }
            });
        }
    })
</script>

<script type="text/javascript">
    $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});

    $('.selectPackage').change(function () {
        var packageId = $(this).val()

        $.ajax({
            type: 'get',
            url: '{{route('buy_package')}}',
            data: {'packageId': packageId},
            success: function (response) {

                if (response.cryptoMessage !== "ok") {
                    var balanceMsg = ''
                    balanceMsg += `
                                <div class="alert alert-danger" role="alert">
                                    ${response.cryptoMessage}
                                </div>
                                `
                    $('#balanceAlart').html(balanceMsg)
                }

                if (response.topperMessage !== "ok") {
                    var balanceMsgtopper = ''
                    balanceMsgtopper += `
                                <div class="alert alert-danger" role="alert">
                                    ${response.topperMessage}
                                </div>
                                `
                    $('#balanceAlartTopper').html(balanceMsgtopper)
                }
            },
            error: function (error) {
                console.log(error)
            }
        });
    })
</script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#method_selector').change(function() {
        var isWallet = $(this).val();
        if (isWallet === 'wallet'){
            $('input[name="wallet"]').val(isWallet)
            $('#wallet').css('display', 'block')
            $('#payment').css('display', 'none')
        }else{
            $('input[name="payMethod"]').val($(this).val()) // assign value in hidden field
            $('#payment').css('display', 'block')
            $('#wallet').css('display', 'none')

            //change method name
            var html = ''
            html += `
                <strong style="text-transform: capitalize">${isWallet}</strong>
            `
            $('.change_method_name').html(html)
        }
    });


    $('#buy').click(function (){
        var authId = {{Auth::user()->id}};
        var package_name = $('#pack_name').text()
        var getValueHiddenField = $('input[name="payMethod"]').val() // getting value, for example bkash,nagad,rocket
        var trans_id = $('input[name="trans_id"]').val()
        var trans_num = $('input[name="trans_num"]').val()
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "{{route('customer.payment.done')}}",
            data: {
                id: authId,
                type: getValueHiddenField,
                trans_id: trans_id,
                number: trans_num,
                pack_name: package_name
            },
            success:function(response){
                if (response.status == 200){
                    $('#responseErrors').html("")
                    $('#responseErrors').addClass('d-none')

                    $('#payment').find('input').val('')
                    $('#paymentModal').modal('hide')
                    $.notify(`<li style="color: white">${response.msg}</li>`, "success");
                }
            },
            error: function(error) {
                $.notify(`<li style="color: white">${error}</li>`, "error");
            }
        });
    })

    $('#butWallet').click(function (){
        var authId = {{Auth::user()->id}};
        var package_name = $('#pack_name').text()
        var getValueHiddenFieldWallet = $('input[name="wallet"]').val(); // when select wallet option
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "{{route('customer.payment.wallet.done')}}",
            data: {
                id: authId,
                type: getValueHiddenFieldWallet,
                pack_name: package_name
            },
            success:function(response){
                if (response.status == 200){
                    $('#responseErrors').html("")
                    $('#responseErrors').addClass('d-none')

                    $('#payment').find('input').val('')
                    $('#paymentModal').modal('hide')
                    $.notify(`<li style="color: white">${response.msg}</li>`, "success");
                }
            },
            error: function(error) {
                $.notify(`<li style="color: white">${error}</li>`, "error");
            }
        });
    })
</script>
