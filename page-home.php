<?php
get_header()
    ?>
<!-- section 1 -->
<section class="banner h-full md:h-[118vh] 2xl:h-[133vh] overflow-hidden" id="homeSection">
    <div class="banner-1-bg"></div>
    <img src="<?= get_template_directory_uri() ?>/img/banner-1-long.webp" alt="banner-1"
        class="banner-1 h-screen. w-full max-h-fit z-0 hidden md:block">
    <img src="<?= get_template_directory_uri() ?>/img/banner-1-sm.webp" alt="banner-1"
        class="banner-1 h-screen. w-full max-h-fit z-0 block md:hidden">
    <div class="logo-2">
        <img src="<?= get_template_directory_uri() ?>/img/omaxe-logo-2.webp" alt="omaxe-logo-2" class="logo-2.">
    </div>

</section>

<!-- section 2 -->
<section class="ground-section overflow-hidden bg-brown relative">
    <div class="ground-wrapper ground-bg">
        <img src="<?= get_template_directory_uri() ?>/img/ground-2.webp" alt="ground-2"
            class="ground-2 first:w-[230%] max-w-[230%] h-screen object-cover mt-[0vh]">
        <div class="container">
            <div class="collection-text">
                <h1>With 5 District</h1>
            </div>
        </div>
        <div
            class="bg-green hidden items-center gap-x-2 w-fit py-[15px] pl-[15px] pr-[50px] absolute left-[65%] top-[20%] z-[999] lg:flex">
            <h2
                class="font-avianoSans text-[25px] leading-[30px] md:text-[30px] md:leading-[35px] lg:text-[20px] lg:leading-[25px] text-white">
                THE SPORTS<br>
                DISTRICT</h2>
        </div>
        <div
            class="bg-tomato hidden items-center gap-x-2 w-fit py-[15px] pl-[15px] pr-[50px] absolute left-[103%] top-[30%] z-[999] lg:flex">
            <h2
                class="font-avianoSans text-[25px] leading-[30px] md:text-[30px] md:leading-[35px] lg:text-[20px] lg:leading-[25px] text-white">
                THE SHOPPING<br>
                DISTRICT</h2>
        </div>
        <div
            class="bg-pink hidden items-center gap-x-2 w-fit py-[15px] pl-[15px] pr-[50px] absolute left-[130%] top-[20%] z-[999] lg:flex">
            <h2
                class="font-avianoSans text-[25px] leading-[30px] md:text-[30px] md:leading-[35px] lg:text-[20px] lg:leading-[25px] text-white">
                THE SOCIAL<br>
                DISTRICT</h2>
        </div>
        <div
            class="bg-blue hidden items-center gap-x-2 w-fit py-[15px] pl-[15px] pr-[50px] absolute left-[150%] top-[10%] z-[999] lg:flex">
            <h2
                class="font-avianoSans text-[25px] leading-[30px] md:text-[30px] md:leading-[35px] lg:text-[20px] lg:leading-[25px] text-white">
                THE HOSPITALITY<br>
                DISTRICT</h2>
        </div>
        <div
            class="bg-orange hidden items-center gap-x-2 w-fit py-[15px] pl-[15px] pr-[50px] absolute left-[170%] top-[25%] z-[999] lg:flex">
            <h2
                class="font-avianoSans text-[25px] leading-[30px] md:text-[30px] md:leading-[35px] lg:text-[20px] lg:leading-[25px] text-white">
                THE HOSPITALITY<br>
                DISTRICT</h2>
        </div>
    </div>


</section>

<!-- section 3 -->
<section class="bg-image relative" style="background: url('<?= get_template_directory_uri() ?>/img/ground.webp');"
    id="sportSection">
    <div class="ground-wrapper">

        <!-- <img src="<?= get_template_directory_uri() ?>/img/ground.webp" alt="ground" class="hidden md:block">
                <img src="<?= get_template_directory_uri() ?>/img/sm-ground.webp" alt="ground" class="block md:hidden"> -->
        <div class="container">
            <div class="ground-content flex flex-col justify-center  h-[50vh] md:h-[80vh]">
                <div class="bg-green flex items-center gap-x-2 w-fit py-[15px] pl-[15px] pr-[50px]">
                    <div>
                        <img src="<?= get_template_directory_uri() ?>/img/shape-1.webp" alt="shape-1"
                            class="w-[80%] md:w-[100%]">

                    </div>
                    <h2
                        class="font-avianoSans text-[25px] leading-[30px] md:text-[30px] md:leading-[35px] lg:text-[35px] lg:leading-[45px] text-white">
                        THE SPORTS<br>
                        DISTRICT</h2>
                </div>
                <h2
                    class="font-avianoSans  text-white mt-[25px] text-[25px] leading-[30px] md:text-[35px] md:leading-[40px] lg:text-[45px] lg:leading-[45px]">
                    THE LOUDEST<br>
                    CHEERS FOR<br>
                    BIGGEST SPORTSMEN</h2>
            </div>
        </div>
    </div>
</section>

<!-- section 4 -->
<!-- large -->
<section class="hidden lg:block">
    <div class="xl-3-container">
        <div class="grid md:grid-cols-3">
            <!-- 1st -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/vr-glasses.webp" alt="vr-glasses">
            </div>
            <div class="green-box">
                <div class="max-w-[455px]">
                    <span class="text-white font-semibold font-montserrat text-[20px]">
                        An
                    </span>
                    <h2 class="lg-font text-white">Olympic Size</h2>
                    <p class="text-white lg-thin-font">Swimming Pool</p>

                    <h2 class="lg-font text-white mt-[25px] lg:mt-[50px]">2000 Seater</h2>
                    <p class="text-white lg-thin-font">International Multi-Sport Indoor Stadium</p>
                </div>
            </div>
            <!-- 2nd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/fifa.webp" alt="fifa" class="hidden md:block">

            </div>
            <div class="green-box">
                <div class="max-w-[455px]">
                    <span class="text-white font-semibold font-montserrat text-[20px]">
                        (6967.72 Sq. Mtr)
                    </span>
                    <h2 class="lg-font text-white">75,000 <small class="text-[30px]">Sq. Ft.</small></h2>
                    <p class="text-white lg-thin-font">E-Sports Zone For All Age Groups</p>

                    <h2 class="lg-font text-white mt-[25px] lg:mt-[50px]"> Courts for</h2>
                    <p class="text-white lg-thin-font"> Volleyball, Futsal, Tennis, Basketball, Squash and Much
                        More…</p>
                </div>
            </div>

            <!-- 3rd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/pool.webp" alt="pool" class="md:h-full lg:h-auto">
            </div>
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/fifa.webp" alt="fifa" class="block md:hidden">
                <div class="green-box md:h-full">
                    <div class="max-w-[455px]">
                        <h2 class="lg-font text-white">ICC & FIFA Standard</h2>
                        <p class="text-white lg-thin-font">Standard</p>

                        <h2 class="lg-font text-white mt-[25px] lg:mt-[50px]">30,000 Seater</h2>
                        <p class="text-white lg-thin-font">International Cricket And Football Stadium</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- small -->
<section class="block lg:hidden">
    <div class="xl-3-container">
        <div class="grid md:grid-cols-3">
            <!-- 1st -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/vr-glasses.webp" alt="vr-glasses">
            </div>
            <div class="green-box">
                <div class="max-w-[455px]">
                    <span class="text-white font-semibold font-montserrat text-[20px]">
                        (6967.72 Sq. Mtr)
                    </span>
                    <h2 class="lg-font text-white">75,000 <small class="text-[30px]">Sq. Ft.</small></h2>
                    <p class="text-white lg-thin-font">E-Sports Zone For All Age Groups</p>

                    <h2 class="lg-font text-white mt-[25px] lg:mt-[50px]"> Courts for</h2>
                    <p class="text-white lg-thin-font"> Volleyball, Futsal, Tennis, Basketball, Squash and Much
                        More…</p>
                </div>
            </div>


            <!-- 2nd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/pool.webp" alt="pool" class="md:h-full lg:h-auto">
            </div>
            <div class="green-box">
                <div class="max-w-[455px]">
                    <span class="text-white font-semibold font-montserrat text-[20px]">
                        An
                    </span>
                    <h2 class="lg-font text-white">Olympic Size</h2>
                    <p class="text-white lg-thin-font">Swimming Pool</p>

                    <h2 class="lg-font text-white mt-[25px] lg:mt-[50px]">2000 Seater</h2>
                    <p class="text-white lg-thin-font">International Multi-Sport Indoor Stadium</p>
                </div>
            </div>

            <!-- 3rd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/fifa.webp" alt="fifa" class="hidden md:block">

            </div>

            <div>
                <img src="<?= get_template_directory_uri() ?>/img/fifa.webp" alt="fifa" class="block md:hidden">
                <div class="green-box md:h-full">
                    <div class="max-w-[455px]">
                        <h2 class="lg-font text-white">ICC & FIFA Standard</h2>
                        <p class="text-white lg-thin-font">Standard</p>

                        <h2 class="lg-font text-white mt-[25px] lg:mt-[50px]">30,000 Seater</h2>
                        <p class="text-white lg-thin-font">International Cricket And Football Stadium</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- section 5 -->
<section class="bg-image" style="background: url('<?= get_template_directory_uri() ?>/img/shopiing.webp');"
    id="shoppingSection">
    <div class="ground-wrapper">
        <div class="container">
            <div class="ground-content flex flex-col justify-center  h-[50vh] md:h-[80vh]">
                <div class="bg-tomato flex items-center w-fit py-[15px] pl-[15px] pr-[70px]">
                    <div>
                        <img src="<?= get_template_directory_uri() ?>/img/shape-1.webp" alt="shape-1" class="w-[75%]">

                    </div>
                    <h2
                        class="font-avianoSans text-[25px] leading-[30px] md:text-[30px] md:leading-[35px] lg:text-[35px] lg:leading-[45px] text-white">
                        THE SHOPPING<br>
                        DISTRICT</h2>
                </div>
                <h2
                    class="font-avianoSans  text-white mt-[25px] text-[25px] leading-[30px] md:text-[35px] md:leading-[40px] lg:text-[45px] lg:leading-[45px]">
                    DELHIITE'S SHOPPING<br>
                    ENCHANCED WITH<br>
                    UNLIMITED CHOICES</h2>
            </div>
        </div>
    </div>
</section>

<!-- section 6 -->
<section>
    <div class="xl-3-container">
        <div class="grid md:grid-cols-2">
            <!-- 1st -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/street.webp" alt="street">
            </div>
            <div class="green-box !bg-lightPink">
                <div class="max-w-[455px]">
                    <h2 class="lg-font text-tomato">India's First</h2>
                    <span class="text-darkGray lg-thin-font">
                        Air-Conditioned Hi-Street
                    </span>


                    <h2 class="lg-font text-tomato mt-[25px] lg:mt-[50px]">G+1 Floors</h2>
                    <span class="text-darkGray lg-thin-font">
                        Of Premium Shopping
                    </span>
                    <h2 class="lg-font text-tomato mt-[25px] lg:mt-[50px]">4.2 Kilometers</h2>
                    <span class="text-darkGray lg-thin-font">
                        Shop Frontage On
                        Ground & First Floor
                    </span>
                </div>
            </div>
            <!-- 2nd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/multiplex.webp" alt="multiplex" class="block md:hidden">
                <div class="green-box !bg-lightPink md:h-full">
                    <div class="max-w-[455px]">
                        <h2 class="lg-font text-tomato">75% Retail</h2>
                        <span class="text-darkGray lg-thin-font">
                            On Ground Floor
                        </span>

                        <span class="text-darkGray lg-thin-font mt-[25px] lg:mt-[50px] block">
                            Impressive Shop Heights Of
                        </span>
                        <h2 class="lg-font text-tomato">18 Ft. & 36 Ft.</h2>
                        <span class="text-darkGray font-semibold font-montserrat text-[20px] block">
                            (5.48 Mtr. & 10.97 Mtr.)
                        </span>

                        <span class="text-darkGray lg-thin-font mt-[25px] lg:mt-[50px] block">
                            Extravagant
                        </span>
                        <h2 class="lg-font text-tomato">5-Screen
                            Multiplex</h2>

                    </div>
                </div>
            </div>
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/multiplex.webp" alt="multiplex" class="hidden md:block">
            </div>


        </div>
    </div>

</section>

<!-- section 7 -->
<section class="bg-image" style="background: url('<?= get_template_directory_uri() ?>/img/food-district.webp');"
    id="foodSection">
    <div class="ground-wrapper">
        <div class="container">
            <div class="ground-content flex flex-col justify-center  h-[50vh] md:h-[80vh]">
                <div class="bg-orange flex items-center w-fit py-[15px] pl-[15px] pr-[70px]">
                    <div>
                        <img src="<?= get_template_directory_uri() ?>/img/shape-1.webp" alt="shape-1" class="w-[75%]">

                    </div>
                    <h2
                        class="font-avianoSans uppercase text-[25px] leading-[30px] md:text-[30px] md:leading-[35px] lg:text-[35px] lg:leading-[45px] text-white ">
                        The Food<br>
                        District</h2>
                </div>
                <h2
                    class="font-avianoSans uppercase text-white mt-[25px] text-[25px] leading-[30px] md:text-[35px] md:leading-[40px] lg:text-[45px] lg:leading-[45px]">
                    Global Culinary Gem<br>
                    Posed to be Delhi's SOHO</h2>
            </div>
        </div>
    </div>
</section>

<!-- section 8 -->

<!-- large -->
<section class="hidden lg:block">
    <div class="xl-3-container">
        <div class="grid md:grid-cols-3">
            <!-- 1st -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/restaurant.webp" alt="restaurant">
            </div>
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/food.webp" alt="food" class="block md:hidden">
                <div class="green-box !bg-orange md:h-full">
                    <div class="max-w-[455px]">
                        <span class="text-white font-semibold font-montserrat text-[20px]">
                            (46451.52 Sq. Mtr.)
                        </span>

                        <p class="text-white lg-thin-font">India's Largest Food District</p>
                        <h2 class="lg-font text-white">500,000</h2>

                        <small class="lg-font !text-[30px] text-white">Sq. Ft.</small>
                    </div>
                </div>
            </div>
            <!-- 2nd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/cuisines.webp" alt="cuisines">
            </div>
            <div class="green-box !bg-orange">
                <div class="max-w-[455px]">
                    <h2 class="lg-font text-white">40+</h2>
                    <p class="text-white lg-thin-font">Restaurants, Lounges, Night-Clubs and Bars</p>

                    <h2 class="lg-font text-white mt-[25px] lg:mt-[50px]">3 Convenient</h2>
                    <p class="text-white lg-thin-font">Drive-Throughs</p>
                </div>
            </div>

            <!-- 3rd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/food.webp" alt="food" class="hidden md:block">
            </div>
            <div class="green-box !bg-orange">
                <div class="max-w-[455px]">
                    <span class="text-white font-semibold font-montserrat text-[20px]">
                        Serving
                    </span>
                    <h2 class="lg-font text-white">Local & International</h2>
                    <p class="text-white lg-thin-font">Cuisines</p>

                    <h2 class="lg-font text-white mt-[25px] lg:mt-[50px]">Diverse Food Choices</h2>
                    <p class="text-white lg-thin-font">Food Trucks, Kiosks & Cafés</p>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- small -->
<section class="block lg:hidden">
    <div class="xl-3-container">
        <div class="grid md:grid-cols-3">
            <!-- 1st -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/restaurant.webp" alt="restaurant">
            </div>
            <div class="green-box !bg-orange">
                <div class="max-w-[455px]">
                    <h2 class="lg-font text-white">40+</h2>
                    <p class="text-white lg-thin-font">Restaurants, Lounges, Night-Clubs and Bars</p>

                    <h2 class="lg-font text-white mt-[25px] lg:mt-[50px]">3 Convenient</h2>
                    <p class="text-white lg-thin-font">Drive-Throughs</p>
                </div>
            </div>
            <!-- 2nd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/food.webp" alt="food" class="">
            </div>
            <div>
                <div class="green-box !bg-orange md:h-full">
                    <div class="max-w-[455px]">
                        <span class="text-white font-semibold font-montserrat text-[20px]">
                            (46451.52 Sq. Mtr.)
                        </span>

                        <p class="text-white lg-thin-font">India's Largest Food District</p>
                        <h2 class="lg-font text-white mt-2">500,000</h2>

                        <small class="lg-font !text-[30px] text-white mt-2 block">Sq. Ft.</small>
                    </div>
                </div>
            </div>
            <!-- 3rd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/cuisines.webp" alt="cuisines">
            </div>

            <div class="green-box !bg-orange">
                <div class="max-w-[455px]">
                    <span class="text-white font-semibold font-montserrat text-[20px]">
                        Serving
                    </span>
                    <h2 class="lg-font text-white">Local & International</h2>
                    <p class="text-white lg-thin-font">Cuisines</p>

                    <h2 class="lg-font text-white mt-[25px] lg:mt-[50px]">Diverse Food Choices</h2>
                    <p class="text-white lg-thin-font">Food Trucks, Kiosks & Cafés</p>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- section 9 -->
<section class="bg-image" style="background: url('<?= get_template_directory_uri() ?>/img/the-club.webp');"
    id="hospitalitySection">
    <div class="ground-wrapper">
        <div class="container">
            <div class="ground-content flex flex-col justify-center  h-[50vh] md:h-[80vh]">
                <div class="bg-blue flex items-center w-fit py-[15px] pl-[15px] pr-[70px]">
                    <div>
                        <img src="<?= get_template_directory_uri() ?>/img/shape-1.webp" alt="shape-1" class="w-[75%]">

                    </div>
                    <h2
                        class="font-avianoSans uppercase text-[25px] leading-[30px] md:text-[30px] md:leading-[35px] lg:text-[35px] lg:leading-[45px] text-white ">
                        The Hospitality<br>
                        District</h2>
                </div>
                <h2
                    class="font-avianoSans uppercase text-white mt-[25px] text-[25px] leading-[30px] md:text-[35px] md:leading-[40px] lg:text-[45px] lg:leading-[45px]">
                    Delhi's Most Elite<br>
                    Sports Cum Leisure<br>
                    Club & Hotel</h2>
            </div>
        </div>
    </div>
</section>

<!-- section 10 -->
<!-- large -->
<section class="hidden lg:block">
    <div class="xl-3-container">
        <div class="grid md:grid-cols-3">
            <!-- 1st -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/facilites.webp" alt="facilites">
            </div>
            <div class="green-box !bg-lightBlue">
                <div class="max-w-[455px]">
                    <h2 class="lg-font text-blue">2 Banquet Halls</h2>
                    <span class="text-darkGray lg-thin-font">
                        With A Capacity Of
                        1500 Pax Each
                    </span>

                    <h2 class="lg-font text-blue mt-[25px] lg:mt-[50px] ">3 Gymnasiums</h2>
                    <span class="text-darkGray lg-thin-font block">
                        with State-Of-The-Art
                        Facilities
                    </span>

                </div>
            </div>
            <!-- 2nd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/club.webp" alt="club" class="hidden md:block">
            </div>
            <div class="green-box !bg-lightBlue">
                <div class="max-w-[455px]">
                    <span class="text-darkGray lg-thin-font">
                        Invite Only Club with
                    </span>
                    <h2 class="lg-font text-blue">Multi-Sport
                        Facilities</h2>

                    <span class="text-darkGray lg-thin-font mt-[25px] lg:mt-[50px] block">
                        Breathtaking
                    </span>
                    <h2 class="lg-font text-blue">Luxury
                        Rooms</h2>
                </div>
            </div>

            <!-- 3rd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/gym.webp" alt="gym">
            </div>
            <div class="green-box !bg-lightBlue md:h-full">
                <div class="max-w-[455px]">
                    <span class="text-darkGray lg-thin-font">
                        Party Lawns With
                        A Capacity To Accommodate
                    </span>
                    <h2 class="lg-font text-blue">Multi-Sport
                        2000 Pax</h2>

                    <h2 class="lg-font text-blue mt-[25px] lg:mt-[50px]">Leisure Club</h2>
                    <span class="text-darkGray lg-thin-font block">
                        Managed By World Renowned
                        Hospitality Brand
                    </span>

                </div>
            </div>
        </div>
    </div>

</section>

<!-- small -->
<section class="block lg:hidden">
    <div class="xl-3-container">
        <div class="grid md:grid-cols-3">
            <!-- 1st -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/facilites.webp" alt="facilites">
            </div>
            <div class="green-box !bg-lightBlue">
                <div class="max-w-[455px]">
                    <span class="text-darkGray lg-thin-font">
                        Invite Only Club with
                    </span>
                    <h2 class="lg-font text-blue">Multi-Sport
                        Facilities</h2>

                    <span class="text-darkGray lg-thin-font mt-[25px] lg:mt-[50px] block">
                        Breathtaking
                    </span>
                    <h2 class="lg-font text-blue">Luxury
                        Rooms</h2>
                </div>
            </div>
            <!-- 2nd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/gym.webp" alt="gym">
            </div>
            <div class="green-box !bg-lightBlue">
                <div class="max-w-[455px]">
                    <h2 class="lg-font text-blue">2 Banquet Halls</h2>
                    <span class="text-darkGray lg-thin-font">
                        With A Capacity Of
                        1500 Pax Each
                    </span>

                    <h2 class="lg-font text-blue mt-[25px] lg:mt-[50px] ">3 Gymnasiums</h2>
                    <span class="text-darkGray lg-thin-font block">
                        with State-Of-The-Art
                        Facilities
                    </span>

                </div>
            </div>
            <!-- 3rd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/club.webp" alt="club" class="">
            </div>
            <div class="green-box !bg-lightBlue md:h-full">
                <div class="max-w-[455px]">
                    <span class="text-darkGray lg-thin-font">
                        Party Lawns With
                        A Capacity To Accommodate
                    </span>
                    <h2 class="lg-font text-blue">Multi-Sport
                        2000 Pax</h2>

                    <h2 class="lg-font text-blue mt-[25px] lg:mt-[50px]">Leisure Club</h2>
                    <span class="text-darkGray lg-thin-font block">
                        Managed By World Renowned
                        Hospitality Brand
                    </span>

                </div>
            </div>
        </div>
    </div>

</section>

<!-- section 11 -->
<section class="bg-image" style="background: url('<?= get_template_directory_uri() ?>/img/the-club.webp');"
    id="socialSection">
    <div class="ground-wrapper">
        <div class="container">
            <div class="ground-content flex flex-col justify-center  h-[50vh] md:h-[80vh]">
                <div class="bg-pink flex items-center w-fit py-[15px] pl-[15px] pr-[70px]">
                    <div>
                        <img src="<?= get_template_directory_uri() ?>/img/shape-1.webp" alt="shape-1" class="w-[75%]">

                    </div>
                    <h2
                        class="font-avianoSans uppercase text-[25px] leading-[30px] md:text-[30px] md:leading-[35px] lg:text-[35px] lg:leading-[45px] text-white ">
                        The Social<br>
                        District</h2>
                </div>
                <h2
                    class="font-avianoSans uppercase text-white mt-[25px] text-[25px] leading-[30px] md:text-[35px] md:leading-[40px] lg:text-[45px] lg:leading-[45px]">
                    The Largest Arena<br>
                    Hosting a<br>
                    world of culture</h2>
            </div>
        </div>
    </div>
</section>

<!-- section 12 -->
<section class="bg-lightPink py-[70px] md:py-[100px]">
    <div class="max-w-[1300px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-8 md:gap-y-0">
        <div class="text-center relative">
            <!-- <div class="absolute right-0 top-0 h-full w-[2px] bg-black"></div> -->
            <span class="text-darkGray lg-thin-font">
                Capacity To Host
                Musical Concerts
                And Events
            </span>
            <h2 class="text-pink font-extrabold text-[25px] leading-[27px] mt-[10px]">100,000 Pax</h2>
        </div>
        <div class="text-center relative">
            <!-- <div class="absolute right-0 top-0 h-full w-[2px] bg-black"></div> -->
            <span class="text-darkGray lg-thin-font">
                Vibrant Venue For
            </span>
            <h2 class="text-pink font-extrabold text-[25px] leading-[27px] mt-[10px]">Art Exhibitions,
                Cultural Festivals &
                Social Gatherings</h2>
        </div>
        <div class="text-center relative">
            <span class="text-darkGray lg-thin-font">
                A Social Arena That Hosts
                Up To
            </span>
            <h2 class="text-pink font-extrabold text-[25px] leading-[27px] mt-[10px]">10,000 Guests</h2>
        </div>
        <div class="text-center relative">
            <span class="text-darkGray lg-thin-font">
                Showcasing Kiosks,
            </span>
            <h2 class="text-pink font-extrabold text-[25px] leading-[27px] mt-[10px]">Fountains,
                & Giant Screens</h2>
        </div>
    </div>
</section>

<!-- section 13  -->
<section>
    <img src="<?= get_template_directory_uri() ?>/img/concerts.webp" alt="concerts" class="w-full">
</section>

<!-- section 14 -->
<section>
    <div class="container my-[60px] md:my-[50px] lg:my-[100px]">
        <div class="text-center mb-[20px] md:mb-[40px]">
            <h2
                class="font-avianoSans uppercase text-darkGray mt-[25px] text-[25px] leading-[30px] md:text-[30px] md:leading-[35px]">
                The New Retail Destination For</h2>
            <span class="text-darkGray lg-thin-font">
                <strong>
                    Delhi's 3.3 Crore Population
                </strong>
            </span>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Column 1 -->
            <div class="flex flex-col h-full mt-[25px] lg:mt-[0px]">
                <h3 class="text-tomato text-[25px] xl:text-[20px] leading-[25px] font-extrabold">IN PROXIMITY TO
                </h3>
                <div class="bg-tomato pl-[25px] py-[40px] mt-[15px] lg:mt-[20px] flex-1">
                    <ul class="list-disc pl-[20px]">
                        <li class="text-white text-[18px] mb-[15px] font-semibold">South Delhi</li>
                        <li class="text-white text-[18px] mb-[15px] font-semibold">West Delhi</li>
                        <li class="text-white text-[18px] mb-[15px] font-semibold">Gurgaon</li>
                        <li class="text-white text-[18px] mb-[0px] font-semibold">IGI Airport</li>
                    </ul>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="flex flex-col h-full mt-[25px] lg:mt-[0px]">
                <h3 class="text-tomato text-[25px] mt-[35px] md:mt-[0px] xl:text-[20px] leading-[25px] font-extrabold">
                    EASE OF ACCESS
                    WITH</h3>
                <div class="bg-tomato pl-[25px] py-[40px] mt-[15px] lg:mt-[20px] flex-1">
                    <ul class="list-disc pl-[20px]">
                        <li class="text-white text-[18px] mb-[15px] font-semibold">Prime 3-Sided Road Approach
                        </li>
                        <li class="text-white text-[18px] mb-[15px] font-semibold">2 Roads Measuring 100 Ft</li>
                        <li class="text-white text-[18px] mb-[15px] font-semibold">1 Road Measuring 200 Ft.</li>
                    </ul>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="flex flex-col h-full mt-[25px] lg:mt-[0px]">
                <h3 class="text-tomato text-[25px] mt-[35px] md:mt-[0px] xl:text-[20px] leading-[25px] font-extrabold">
                    ATTRACTING
                    FOOTFALL FROM</h3>
                <div class="bg-tomato pl-[25px] py-[40px] mt-[15px] lg:mt-[20px] flex-1">
                    <ul class="list-disc pl-[20px]">
                        <li class="text-white text-[18px] mb-[15px] font-semibold">Bharat Vandana Park</li>
                        <li class="text-white text-[18px] mb-[15px] font-semibold">Yashobhoomi (IICC)</li>
                        <li class="text-white text-[18px] mb-[15px] font-semibold">Golf Course</li>
                        <li class="text-white text-[18px] mb-[15px] font-semibold">Diplomatic Enclave</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- section 15 -->
<section>
    <div class="xl-3-container">
        <div class="grid md:grid-cols-3">
            <!-- 1st -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/construction.webp" alt="construction" class="md:h-full">
            </div>
            <div class="green-box !bg-blue md:h-full">
                <div class="max-w-[455px]">
                    <h2 class="lg-font text-white xl:!text-[27px] xl:!leading-[30px]">A Public Listed Company
                    </h2>
                    <h2 class="lg-font text-white mt-[25px] lg:mt-[25px] block xl:!text-[27px] xl:!leading-[30px]">
                        ISO 9001:2000
                        Certified Company</h2>
                    <h2 class="lg-font text-white mt-[25px] lg:mt-[25px] block xl:!text-[27px] xl:!leading-[30px]">
                        Receiver Of National &
                        International Awards
                        For Various Achievements</h2>

                </div>
            </div>
            <!-- 2nd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/delivered.webp" alt="delivered" class="md:h-full">
            </div>
            <div class="green-box !bg-blue">
                <div class="max-w-[455px]">
                    <h2 class="lg-font text-white block xl:!text-[27px] xl:!leading-[30px]">Being Trusted for
                        Over 37 Years</h2>
                    <h2 class="lg-font text-white mt-[25px] lg:mt-[25px] block xl:!text-[27px] xl:!leading-[30px]">
                        Completed Over
                        289 Projects
                        & 79 Projects Under
                        Construction</h2>
                </div>
            </div>

            <!-- 3rd -->
            <div>
                <img src="<?= get_template_directory_uri() ?>/img/company.webp" alt="company" class="md:h-full">
            </div>
            <div class="green-box !bg-blue">
                <div class="max-w-[455px]">
                    <h2 class="lg-font text-white xl:!text-[27px] xl:!leading-[30px]">Delivered Over</h2>
                    <h2 class="lg-font text-white mt-[25px] lg:mt-[25px] block xl:!text-[27px] xl:!leading-[30px]">
                        135.84 Million Sq. Ft.
                        (12.62 Sq. Mtr.)</h2>
                    <h2 class="lg-font text-white mt-[25px] lg:mt-[25px] block xl:!text-[27px] xl:!leading-[30px]">
                        Built Over
                        85,000 Homes</h2>
                    <h2 class="lg-font text-white mt-[25px] lg:mt-[25px] block xl:!text-[27px] xl:!leading-[30px]">
                        Spread Over
                        5 Lakh Smiles</h2>
                </div>
            </div>
        </div>
    </div>

</section>
<?php
get_footer()
    ?>