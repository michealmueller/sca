<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Citizen Warfare, The Premier Star Citizen Tournament Site.">
    <meta name="author" content="MuellerTek">

    <title>Citizen Warfare - The Premier Star Citizen Tournament System</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

    <!-- Custom CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="vendor/icon-hs/style.css">
    <link rel="stylesheet" href="vendor/animate.css">


    <link rel="stylesheet" href="assets/css/unify-core.css">
    <link rel="stylesheet" href="assets/css/unify-components.css">
    <link rel="stylesheet" href="assets/css/unify-globals.css">
    <link href="assets/css/modern-business.min.css" rel="stylesheet">
    <link href="assets/css/custom.min.css" rel="stylesheet">


</head>
<body>
@include('shared.nav')

@yield('content')

@include('shared.footer')


<script src="assets/js/jquery.min.js"></script>
<script src="vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="vendor/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script>
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $("#member_wrapper"); //Fields wrapper
        var add_button      = $("#AddMore"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div><input id="team_members" type="text" class="form-control" name="team_members[]" placeholder="Team Member" required/><a href="#" class="remove_field">Remove</a></div>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>

@if(\Route::current()->getName() == 'login')
    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/helpers/hs.focus-state.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // Form Focus State
            $.HSCore.helpers.HSFocusState.init();
        });

        $(window).on('load', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });
        });

        $(window).on('resize', function () {
            setTimeout(function () {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
    </script>
@endif
</body>
</html>