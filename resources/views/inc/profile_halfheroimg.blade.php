<style>
    /* Required height of parents of the Half Page Carousel for proper displaying carousel itself */
    html,
    body,
    .view {
        height: 100%;
    }

    /* Half Page Carousel itself*/
    .carousel {
        height: 50%;
    }

    .carousel .carousel-inner {
        height: 100%;
    }

    .carousel .carousel-inner .carousel-item,
    .carousel .carousel-inner .active {
        height: 100%;
    }

    /* Adjustment for mobile devices*/
    @media (max-width: 776px) {
        .carousel {
            height: 100%;
        }
    }

    #profile_miniheader {
        text-align: center;
    }

</style>
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
            <div class="view"
                 style="background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                    <!-- Content -->

                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/First slide-->

    </div>
    <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->