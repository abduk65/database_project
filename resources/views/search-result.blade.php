@extends('layouts.app')
@section('styles')
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
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

        .table_data {
            background: white;
            padding: 40px;
            position: relative;
            z-index: 9999;
            margin-top: 150px;
        }
    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
@section('content')
    <section class="tz-register">
        <div class="table_data">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th>prefix</th>
                        <th>name</th>
                        <th>job title</th>
                        <th>email</th>
                        <th>website</th>
                        <th>company name</th>
                        <th>phone number</th>
                        <th>business Type</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($result as $single)
                        <tr>
                            <td>{{ $single->Prefix }}</td>
                            <td>{{ $single->Person_Name }}</td>
                            <td>{{ $single->Job_Title }}</td>
                            <td>{{ $single->Email }}</td>
                            <td>{{ $single->Website }}</td>
                            <td>{{ $single->Company_Name }}</td>
                            <td>{{ $single->Phone_Number }}</td>
                            <td>{{ $single->Bussiness_Type }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </section>
@endsection

@section('scripts')
    <!--SCRIPT FILES-->
    <script src="js/jquery.min.js"></script>
    {{-- <script src="js/angular.min.js"></script> --}}
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    @if ($package->unlimited == true)
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    @endif
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
