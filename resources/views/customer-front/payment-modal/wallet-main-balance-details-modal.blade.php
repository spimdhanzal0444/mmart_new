<!-- Update Modal -->
<!-- Modal -->
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
                    <div class="col-12">
                        <div class="form-group">
                            <label for="method_selector">{{__('Payment Method')}}</label>
                            <select class="form-control" id="method_selector">
                                <option value="wallet">{{__('Wallet')}}</option>
                                <option value="bkash">{{__('bkash')}}</option>
                                <option value="rocket">{{__('Rocket')}}</option>
                                <option value="nagad">{{__('Nagad')}}</option>
                            </select>
                        </div>
                    </div>

                    <form id="payment" method="POST" enctype="multipart/form-data" style="display: none">
                        <div class="row">
                            <input type="hidden" name="payMethod" value="" id="payMethod">
                            <div class="col-12">
                                <!-- payment methods -->
                                <div id="">
                                    <div class="form-group">
                                        <p>{{__('Package Name:')}} {{$package->package_name}}</p>
                                        <p>{{__('Package Value:')}} {{$package->amount}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="trans_id">Transaction Id</label>
                                        <input type="text" class="form-control" id="trans_id" name="trans_id" placeholder="Transaction Id">
                                    </div>
                                    <div class="form-group">
                                        <label for="trans_num">Transaction Phone Number</label>
                                        <input type="text" class="form-control" id="trans_num" name="trans_num" placeholder="Transaction Phone Number">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controll Button -->
                        <button type="button" class="btn btn-primary updateBtn" id="buy">Buy</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>


                    <!-- Wallet form -->
                    <form id="wallet" action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="wallet" value="wallet" id="wallet">

                            <div class="col-12">
                                <!-- wallet -->
                                <div id="wallet">
                                    <div class="form-group">
                                        <p>{{__('Package Name:')}} <span id="pack_name"> {{$package->package_name}}</span></p>
                                    </div>
                                    <div class="form-group">
                                        <p>{{__('Package Value:')}} <span>{{$package->amount}}</span></p>
                                    </div>
                                    <div class="form-group">
                                        <p>{{__('Current Wallet Balance:')}} <span> {{Auth::user()->balance}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controll Button -->
                        <button type="button" class="btn btn-primary updateBtn" id="butWallet">Buy Wallet</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- End modal -->

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
