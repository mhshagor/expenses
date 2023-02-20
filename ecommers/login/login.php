<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <!-- Company Title -->
    <title>Rahman</title>
    <!-- Company Icon -->
    <link rel="icon" href="">

    <!-- google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- font-awesome-css-->
    <link rel="stylesheet" href="../css/all.css">
    <!-- bootstrap-5-css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Owl Carouse CSS here -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <!-- global-css here-->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/bootstrap-extenstions.css" type="text/css">
    <!--All customer-css here-->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <?php include("../header.php") ?>

    <main class="p-top-6rem p-md-top-10rem">

        <?php include("loginRegister.php") ?>
        

    </main>

    <?php include("../footer.php") ?>


    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/jquery.zoom.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <!-- <script src="../js/poper.min.js"></script> -->

    <script>
    window.onscroll = function() {
        var currentScrollValue = window.pageYOffset;

        if (currentScrollValue < 50) {
            document.getElementById('affix').style.top = '0';

        } else if (currentScrollValue > 250 && currentScrollValue < 500) {
            document.getElementById('affix').style.top = '-59px';
            document.getElementById('homeHeader').classList.add('bg-light');
            document.getElementById('homeHeader').classList.remove('bg-success');

        } else if (currentScrollValue > 500 && currentScrollValue < 1000) {
            document.getElementById('affix').style.top = '-160px';
            document.getElementById('homeNav').classList.add('d-md-block');
            document.getElementById('homeHeader').classList.add('bg-light');
            document.getElementById('homeHeader').classList.remove('bg-seconday');

        } else if (currentScrollValue > 1000) {
            document.getElementById('homeHeader').classList.remove('bg-light');
            document.getElementById('homeHeader').classList.add('bg-seconday');
            document.getElementById('homeNav').classList.remove('d-md-block');
            document.getElementById('affix').style.top = '-59px';
        }
    }
    </script>
    <script>
    $(document).ready(function() {
        $("#auto-carousel").owlCarousel({
            items: 5,
            loop: true,
            margin: 2,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            dots: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,

                },
                500: {
                    items: 4,

                },
                900: {
                    items: 5,

                },
            }
        });
        $('#autoCarousel .next').click(function() {
            $("#auto-carousel").trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('#autoCarousel .prev').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            $("#auto-carousel").trigger('prev.owl.carousel', [300]);
        })
    });
    </script>

</body>

</html>