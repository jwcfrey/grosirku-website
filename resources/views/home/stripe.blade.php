<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .credit-card-box {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background: #fff;
        }
        .panel-title {
            font-weight: bold;
            font-size: 1.2rem;
            color: #333;
        }
        .btn-custom {
            background-color: #4CAF50;
            color: white;
        }
        .btn-custom:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Pembayaran Grosirku</h1>
    
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="credit-card-box">
                <div class="panel-heading">
                    <h3 class="panel-title">Detail Pembayaran</h3>
                    <h4>Total yang harus dibayar Rp.{{ $value }}</h4>
                </div>
                <div class="panel-body">

                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    <form 
                        role="form" 
                        action="{{ route('stripe.post', $value) }}" 
                        method="post" 
                        class="require-validation"
                        data-cc-on-file="false"
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                        id="payment-form">
                        @csrf

                        <div class="form-group">
                            <label for="card-name">Nama pada Kartu</label>
                            <input type="text" class="form-control" id="card-name" placeholder="Name on Card" required>
                        </div>

                        <div class="form-group">
                            <label for="card-number">Nomor Kartu</label>
                            <input type="text" class="form-control card-number" id="card-number" placeholder="Card Number" autocomplete="off" required>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 form-group">
                                <label for="card-cvc">CVC</label>
                                <input type="text" class="form-control card-cvc" id="card-cvc" placeholder="CVC" autocomplete="off" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="card-expiry-month">Bulan Kedaluwarsa</label>
                                <input type="text" class="form-control card-expiry-month" id="card-expiry-month" placeholder="MM" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="card-expiry-year">Tahun Kedaluwarsa</label>
                                <input type="text" class="form-control card-expiry-year" id="card-expiry-year" placeholder="YYYY" required>
                            </div>
                        </div>

                        <div class="form-group hide error">
                            <div class="alert alert-danger">Harap perbaiki kesalahan dan coba lagi.</div>
                        </div>

                        <button type="submit" class="btn btn-custom btn-block">Bayar Sekarang</button>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v2/"></script>
<script>
$(function() {
    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=text]', 'input[type=file]', 'textarea'].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
        $errorMessage.addClass('hide');

        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });

        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
    });

    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            var token = response['id'];
            $form.find('input[type=text]').val('');
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});
</script>
</body>
</html>
