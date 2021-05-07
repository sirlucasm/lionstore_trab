<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Cadastrar conta - LionStore</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
        type="text/javascript"></script>
    <!-- style css -->
    <link rel="stylesheet" href="/css/criarConta.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h4>Payment Details</h4>
            <div class="input-group">
                <input id="payment-method-card" type="radio" name="payment-method" value="card" checked="true" />
                <label for="payment-method-card"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
                <input id="payment-method-paypal" type="radio" name="payment-method" value="paypal" />
                <label for="payment-method-paypal"> <span><i class="fa fa-cc-paypal"></i>Paypal</span></label>
            </div>
            <div class="input-group input-group-icon">
                <input type="text" placeholder="Card Number" />
                <div class="input-icon"><i class="fa fa-credit-card"></i></div>
            </div>
            <div class="col-half">
                <div class="input-group input-group-icon">
                    <input type="text" placeholder="Card CVC" />
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
            </div>
            <div class="col-half">
                <div class="input-group">
                    <select>
                        <option>01 Jan</option>
                        <option>02 Jan</option>
                    </select>
                    <select>
                        <option>2015</option>
                        <option>2016</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
