@extends('layout.auth')

@section('title', 'JagoJewerly - Reset Password')

@push('css')
    <style>
        body {
            background: #8f000c;
        }

        .forget-pwd>a {
            color: #dc3545;
            font-weight: 500;
        }

        .forget-password .panel-default {
            padding: 31%;
            margin-top: -27%;
        }

        .forget-password .panel-body {
            padding: 15%;
            margin-bottom: -50%;
            background: #fff;
            border-radius: 5px;
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        img {
            width: 20%;
            margin-bottom: 10%;
        }

        .btnForget {
            background: #DFE310;
            border: none;
        }

        .btnForget:hover {
            border: 1px solid #DFE310;
            background-color: transparent;
            color: #DFE310;
        }


        /* responsive */
        @media (max-width: 768px) {
            .forget-password .panel-default {
                padding: 0%;
                margin-top: 27%;
                height: 100vh
            }

            .forget-password .panel-body {
                padding: 15%;
                margin-bottom: -50%;
                background: #fff;
                border-radius: 5px;
                -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            img {
                width: 20%;
                margin-bottom: 10%;
            }

            .btnForget {
                background: #DFE310;
                border: none;
            }

            .btnForget:hover {
                background: #DFE310;
                border: 1px solid #DFE310;
                color: black;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container forget-password">
        <div class="row">
            <div class="col-md-12 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div>
                            <div class="text-center">
                                <img src="{{ asset('assets/images/logo-remove-bg.png') }}" alt="car-key">
                                <h2 class="text-center">Forgot Password?</h2>
                                <p>You can reset your password here.</p>
                            </div>
                            <form id="register-form" role="form" autocomplete="off" class="form mt-4" method="post">
                                <div class="">
                                    <label class="form-label" for="formInputExample">Email address</label>
                                    <input type="text" class="form-control" id="formInputExample"
                                        placeholder="Your email">
                                </div>

                                <div class="form-group mt-4">
                                    <input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget w-full" x-data
                                        @click="$store.auth.forgotPassword()" value="Reset Password" type="button">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
