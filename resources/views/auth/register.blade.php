@extends('layouts.app')
@section('styles')
    <style>
        .cart_count {
            color: #273a77;
            background: white;
            padding: 0px 8px;
            border-radius: 63%;
            margin-left: 5px;
        }

        input[type=sut] {
            background-color: #7f89ff;
        }

        .ts-menu-1 a img {
            text-decoration: none;
        }

        .ts-menu-1 a {
            text-decoration: none;
        }
    </style>
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/responsive.css" rel="stylesheet">
@endsection

@section('content')
    <section class="tz-register">
        <div class="log-in-pop">
            <div class="log-in-pop-left" style="padding-bottom: 35%;">
                <h1>TAAJER</h1>
                <p>Don't have an account? Create your account. It's take less than a minutes</p>
                <h4>Executive Database</h4>
                <p>Complete Saudi Executive database for businesses of all sizes. <br><br><br></p>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Create an Account</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>


                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>



                <form class="s12 con-com" method="POST" action="{{ route('register_post') }}"
                    onsubmit="return checkEmail(this);" autocomplete="off">
                    @csrf
                    <div>
                        <div class="input-field s12">
                            <input autocomplete="off" type="text" data-ng-model="name1" class="validate" name="name"
                                required>
                            <label>Full Name</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input autocomplete="off" type="email" class="validate" name="email" required
                                onfocus="if (this.hasAttribute('readonly')) {
                                            this.removeAttribute('readonly');
                                            this.blur(); this.focus();}">
                            <label>Email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input autocomplete="off" type="number" class="validate" name="phone_number" required
                                onfocus="if (this.hasAttribute('readonly')) {
                                            this.removeAttribute('readonly'); this.blur();
                                            this.focus();
                                        }">
                            <label>Phone</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input autocomplete="off" type="password" class="validate" name="passc" required
                                onfocus="if (this.hasAttribute('readonly')) {
                                            this.removeAttribute('readonly'); this.blur();
                                            this.focus();
                                        }">
                            <label>Password</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input autocomplete="off" type="password" class="validate" name="password" required
                                onfocus="if (this.hasAttribute('readonly')) {
                                            this.removeAttribute('readonly');
                                            this.blur();
                                            this.focus();}">
                            <label>Confirm password</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Register" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12" style="font-size:16px;">Are you a already member? <a href="login"
                                style="font-size:15px;">Login</a> </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!--SCRIPT FILES-->
    <script src="js/jquery.min.js"></script>
    {{-- <script src="js/angular.min.js"></script> --}}
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/materialize.min.js" type="text/javascript"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" language="JavaScript">
        function checkEmail(theForm) {
            if (theForm.password.value != theForm.passc.value) {
                alert('Those password don\'t match!');
                return false;
            } else {
                return true;
            }
        }
    </script>
@endsection
