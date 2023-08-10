@extends('layouts.app')

@section('styles')
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
         <script src="js/html5shiv.js"></script>
         <script src="js/respond.min.js"></script>
         <![endif]-->
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
    </style>
@endsection

@section('content')
    <section class="tz-register">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>TAAJER</h1>
                <p>Don't have an account? Create your account. It's take less than a minutes. <a href="register"
                        style="color:#ffffff;">Register</a></p>
                <h4>Executive Database</h4>
                <p>Complete Saudi Executive database for businesses of all sizes. <br><br><br></p>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Login</h4>
                <!-- <p>This page is restricted</p> -->
                <form class="s12" action="{{ route('login_post') }}" method="post">
                    @csrf
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name1" readonly class="validate" autocomplete="off"
                                name="email"
                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }">
                            <label>Email</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" readonly class="validate" autocomplete="off" name="password"
                                onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur(); this.focus();}">
                            <label>Password</label>
                        </div>
                    </div>

                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Login" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>

                        <div class="input-field s12"> <a href="user/forgetpassword">Forgot Password?</a> </div>
                        <div class="input-field s12"> <a href="register">Don't have account ? Register</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="js/jquery.min.js"></script>
    {{-- <script src="js/angular.min.js"></script> --}}
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/materialize.min.js" type="text/javascript"></script>
    <script src="js/custom.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5b2cba36d0b5a54796821182/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection
