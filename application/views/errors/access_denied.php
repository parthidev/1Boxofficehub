<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Huro :: Error</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" />
</head>

<body>
    <div id="huro-app" class="app-wrapper">
        <!--Full pageloader-->
        <!-- Pageloader -->
        <div class="pageloader is-full"></div>
        <div class="infraloader is-full is-active"></div>
        <div class="minimal-wrapper darker">
            <!--Page body-->

            <div class="error-container">
                <div class="error-wrapper">
                    <div class="error-inner has-text-centered">
                        <div class="bg-number dark-inverted">500</div>
                        <img class="light-image" src="assets/img/illustrations/placeholders/error-5.svg" alt="" />
                        <img class="dark-image" src="assets/img/illustrations/placeholders/error-5-dark.svg" alt="" />
                        <h3 class="dark-inverted">Internal Server Error</h3>
                        <p>Looks like an unexpacted problem occured. Please try again or contact the website administrator.</p>
                        <div class="button-wrap">
                            <a class="button h-button is-primary is-elevated" onclick="goBack()">Take me Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Huro Scripts-->
        <!--Load Mapbox-->

        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/main.js" async></script>
        <script src="assets/js/components.js" async></script>
        <script src="assets/js/popover.js" async></script>
        <script src="assets/js/widgets.js" async></script>
        <script src="assets/js/touch.js" async></script>
        <script src="assets/js/syntax.js" async></script>
    </div>
</body>

</html>