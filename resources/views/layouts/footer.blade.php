<script type="text/javascript">
        $(document).ready(function() {

            $('#btn_newsletter').on('click', function() {
                var json = {};
                json['ci_csrf_token'] = '';
                json['email'] = $('#nemail').val();
                var request = $.ajax({
                    url: "https://www.dawateislami.org/Home/newsletter_sub",
                    type: "POST",
                    data: json,
                    dataType: "json",

                    success: function(_return) {
                        $('#msg').html('');
                        if (_return.response.code == 1) {
                            $('#msg').append(
                                '<div class="alert alert-block alert-danger alert-dismissible">' +
                                '<a href="#" class="close" data-dismiss="alert" aria-label="close">' +
                                '&times;</a>' +
                                _return.response.message +
                                '</div>'
                            );
                            $('#nemail').val('');
                        } else if (_return.response.code == 2) {
                            $('#msg').append(
                                '<div class="alert alert-block alert-success">' +
                                '<a href="#" class="close" data-dismiss="alert" aria-label="close">' +
                                '&times;</a>' +
                                _return.response.message +
                                '</div>'
                            );
                            $('#nemail').val('');
                        } else {
                            $('#msg').append(
                                '<div class="alert alert-block alert-danger">' +
                                '<a href="#" class="close" data-dismiss="alert" aria-label="close">' +
                                '&times;</a>' +
                                _return.response.message +
                                '</div>'
                            );
                        }
                    }
                });
            });

        });

        jQuery(function($) {

            $(".country_dd").change(function() {

                var json = {};
                json['ci_csrf_token'] = '';
                json['country_id'] = $(this).val();
                var request = $.ajax({
                    url: "https://www.dawateislami.org/Hierarchy/get_region_byid",
                    type: "POST",
                    data: json,
                    dataType: "html",

                    success: function(_return) {
                        $('#region').html(_return);

                    }
                });

            });

            $(".region_dd").change(function() {

                var json = {};
                json['ci_csrf_token'] = '';
                json['region_id'] = $(this).val();
                var request = $.ajax({
                    url: "https://www.dawateislami.org/Hierarchy/get_zone_byid",
                    type: "POST",
                    data: json,
                    dataType: "html",

                    success: function(_return) {
                        $('#zone').html(_return);

                    }
                });

            });

            $(".zone_dd").change(function() {

                var json = {};
                json['ci_csrf_token'] = '';
                json['zone_id'] = $(this).val();
                var request = $.ajax({
                    url: "https://www.dawateislami.org/Hierarchy/get_kabina_byid",
                    type: "POST",
                    data: json,
                    dataType: "html",

                    success: function(_return) {
                        $('#kabina').html(_return);

                    }
                });

            });

            $(".kabina_dd").change(function() {

                var json = {};
                json['ci_csrf_token'] = '';
                json['kabina_id'] = $(this).val();
                var request = $.ajax({
                    url: "https://www.dawateislami.org/Hierarchy/get_division_byid",
                    type: "POST",
                    data: json,
                    dataType: "html",

                    success: function(_return) {
                        $('#division').html(_return);

                    }
                });

            });

            $(".division_dd").change(function() {

                var json = {};
                json['ci_csrf_token'] = '';
                json['division_id'] = $(this).val();
                var request = $.ajax({
                    url: "https://www.dawateislami.org/Hierarchy/get_ilaqa_byid",
                    type: "POST",
                    data: json,
                    dataType: "html",

                    success: function(_return) {
                        $('#ilaqa').html(_return);

                    }
                });

            });

            $(".ilaqa_dd").change(function() {

                var json = {};
                json['ci_csrf_token'] = '';
                json['ilaqa_id'] = $(this).val();
                var request = $.ajax({
                    url: "https://www.dawateislami.org/Hierarchy/get_halqa_byid",
                    type: "POST",
                    data: json,
                    dataType: "html",

                    success: function(_return) {
                        $('#halqa').html(_return);

                    }
                });

            });

            $(".halqa_dd").change(function() {

                var json = {};
                json['ci_csrf_token'] = '';
                json['halqa_id'] = $(this).val();
                var request = $.ajax({
                    url: "https://www.dawateislami.org/Hierarchy/get_zhalqa_byid",
                    type: "POST",
                    data: json,
                    dataType: "html",

                    success: function(_return) {
                        $('#zhalqa').html(_return);

                    }
                });

            });

        });

        $('#viewMoreVideo').on('click', function() {
            var json = {};
            json['limit'] = 20;
            json['offset'] = $('#count').val();
            json['ci_csrf_token'] = '';

            if ($("#total").val() == $('#last_id').val()) {
                //            Swal.fire({
                //                title: 'No more video found!',
                //                confirmButtonColor: "//",
                //                confirmButtonText: "OK"
                //            })
                $('#viewMoreVideo').addClass('hidden');
                $('#noVid').removeClass('hidden');
            }

            $.ajax({
                url: 'https://www.dawateislami.org/MediaLibrary/viewMoreVideo',
                type: 'post',
                data: json,
                beforeSend: function() {
                    $(".load-more").text("Loading...");
                },
                success: function(response) {
                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class="post"
                        $(".post:last").after(response).show().fadeIn("slow");

                        //change offset on every click
                        var count = $("#videoDiv > div").last().attr('id');
                        $("#count").val(count);

                        // get id of last video for checking no more result
                        var last_id = $(".card > div").last().attr('id');
                        $("#last_id").val(last_id);

                        $(".load-more").text("View more");
                    }, 1000);
                }
            });
        });

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            let isMobile = window.matchMedia("(max-width: 767px)").matches;
            let iPad = window.matchMedia("(max-width: 992px)").matches;
            if (isMobile) {
                if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                    $(".news-row").slideUp();
                    $("#header").height("40px");
                } else {
                    $(".news-row").slideDown();
                    $("#header").height("90px");
                }
            } else if (iPad) {
                if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                    $(".news-row").slideUp();
                    $("#header").height("40px");
                    $(".header-img").width('50px');
                } else {
                    $(".news-row").slideDown();
                    $("#header").height("90px");
                    $(".header-img").width('90px');
                }
            } else {
                if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                    $(".img-row").addClass("logo");
                    $(".header-img").width('auto');
                    $(".news-row").slideUp();
                    $("#header").height("40px");
                } else {
                    $("#header").height("90px");
                    $(".img-row").removeClass("logo");
                    $(".header-img").width('90px');
                    $(".news-row").slideDown();
                }
            }

        }
    </script>
    <!-- ======= Footer ======= -->
  

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

    <!-- Vendor JS Files -->

    <script src="{{asset('assets/org/vendor/jquery.easing/jquery.easing.min.js')}}" async></script>
    <script src="{{asset('assets/org/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/org/vendor/php-email-form/validate.js')}}" async></script>
    <!--<script src="-->
    <!--" async></script>-->
    <!--<script src="-->
    <!--"></script>-->
    <!--<script src="-->
    <!--"></script>-->
    <script src="{{asset('assets/org/vendor/aos/aos.js')}}" async></script>

    <!-- Sweet-Alert  -->
    <!--<script src="-->
    <!--"></script>-->

    <!-- Template Main JS File -->
    <script src="{{asset('assets/org/js/main.js')}}" async></script>
    <script>
        //Add Classes function
        function country_add() {
            $('#country').addClass('hidden');
            $('#country').val('');
            $('#lbl_country').addClass('hidden');
        }

        function region_add() {
            $('#region').addClass('hidden');
            $('#region').val('');
            $('#lbl_region').addClass('hidden');
        }

        function zone_add() {
            $('#zone').addClass('hidden');
            $('#zone').val('');
            $('#lbl_zone').addClass('hidden');
        }

        function kabina_add() {
            $('#kabina').addClass('hidden');
            $('#kabina').val('');
            $('#lbl_kabina').addClass('hidden');
        }

        function division_add() {
            $('#division').addClass('hidden');
            $('#division').val('');
            $('#lbl_division').addClass('hidden');
        }

        function ilaqa_add() {
            $('#ilaqa').addClass('hidden');
            $('#ilaqa').val('');
            $('#lbl_ilaqa').addClass('hidden');
        }

        function halqa_add() {
            $('#halqa').addClass('hidden');
            $('#halqa').val('');
            $('#lbl_halqa').addClass('hidden');
        }

        function zhalqa_add() {
            $('#zhalqa').addClass('hidden');
            $('#zhalqa').val('');
            $('#lbl_zhalqa').addClass('hidden');
        }

        //Remove Classess function
        function country_remove() {
            $('#country').removeClass('hidden');
            $('#lbl_country').removeClass('hidden');
        }

        function region_remove() {
            $('#region').removeClass('hidden');
            $('#lbl_region').removeClass('hidden');

            $('.list option[value="1"]').remove();
        }

        function zone_remove() {
            $('#zone').removeClass('hidden');
            $('#lbl_zone').removeClass('hidden');

            $('.list option[value="2"]').remove();
        }

        function kabina_remove() {
            $('#kabina').removeClass('hidden');
            $('#lbl_kabina').removeClass('hidden');

            $('.list option[value="3"]').remove();
        }

        function division_remove() {
            $('#division').removeClass('hidden');
            $('#lbl_division').removeClass('hidden');

            $('.list option[value="4"]').remove();
        }

        function ilaqa_remove() {
            $('#ilaqa').removeClass('hidden');
            $('#lbl_ilaqa').removeClass('hidden');

            $('.list option[value="5"]').remove();
        }

        function halqa_remove() {
            $('#halqa').removeClass('hidden');
            $('#lbl_halqa').removeClass('hidden');

            $('.list option[value="6"]').remove();
        }

        function zhalqa_remove() {
            $('#zhalqa').removeClass('hidden');
            $('#lbl_zhalqa').removeClass('hidden');
        }

        function GetOption(text, value) {
            return "<option value = '" + value + "'>" + text + "</option>"
        }

        function get_childs(level) {
            if (level != 0) {
                var child = new Array();
                child[0] = {
                    Text: "Pakistan-level executive body",
                    Value: "1"
                };
                child[1] = {
                    Text: "Province/City  List",
                    Value: "2"
                };
                child[2] = {
                    Text: "Division List",
                    Value: "3"
                };
                child[3] = {
                    Text: "District/Metropolitan/Zone List",
                    Value: "4"
                };
                child[4] = {
                    Text: "Tehsil/Town List",
                    Value: "5"
                };
                child[5] = {
                    Text: "U.C./Sector List",
                    Value: "6"
                };
                if (level > 2) {
                    child[6] = {
                        Text: "Ward/Sub-sector List",
                        Value: "7"
                    };
                    child[7] = {
                        Text: "Zeli Halqa List",
                        Value: "8"
                    };
                }

                //Add Default Option
                const myNode = document.getElementById('list');
                while (myNode.firstChild) {
                    myNode.removeChild(myNode.lastChild);
                }
                level = level - 1;
                $("#list").append(GetOption("Please Chose Selection", "0"));
                //Loop through array and add options
                $.each(child, function(index) {
                    if (index >= level) {
                        $("#list").append(GetOption(child[index].Text, child[index].Value));
                    }
                });
            }

        }


        $(document).ready(function() {

            //region list start
            $("#country").change(function() {
                $("#list").val(0);
                var region = new Array();
                region[0] = {
                    Text: "Karachi",
                    Value: "1"
                };
                region[1] = {
                    Text: "Hyderabad",
                    Value: "2"
                };
                region[2] = {
                    Text: "Multan",
                    Value: "3"
                };
                region[3] = {
                    Text: "Faisalabad",
                    Value: "4"
                };
                region[4] = {
                    Text: "Lahore",
                    Value: "5"
                };
                region[5] = {
                    Text: "Islamabad",
                    Value: "6"
                };

                var level = $("#level").val();
                var country = $("#country").val();

                if ((level != 0 && level != 1) && country != '') {
                    //Add Default Option
                    $("#region").append(GetOption("Please select region", "0"));

                    //Loop through array and add options
                    $.each(region, function(index) {
                        $("#region").append(GetOption(region[index].Text, region[index].Value));
                    });
                } else {
                    $("#region option").remove();
                }

            });

            $('#region,#zone,#kabina,#division,#ilaqa,#halqa,#zhalqa').change(function() {
                $("#list").val(0);
            });

            //display table
            $('#list').change(function() {
                $(document).on({
                    ajaxStart: function() {
                        $(".spinner-border").removeClass("hidden");
                    },
                    ajaxStop: function() {
                        $(".spinner-border").addClass("hidden");
                    }
                });
                var level = $('#level').val();
                var selection = $(this).val();
                var output = true;
                var missingValue = '';
                switch (level) {
                    case '1':
                        var country_id = $('#country').val();
                        if (country_id === null || country_id == 0) {
                            output = false;
                            missingValue = 'Country';
                        }
                        if (selection >= 7) {
                            output = false;
                        }
                        break;
                    case '2':
                        var region_id = $('#region').val();
                        if (region_id == null || region_id == 0) {
                            output = false;
                            missingValue = 'Region';
                        }
                        if (selection >= 7) {
                            output = false;
                        }
                        break;
                    case '3':
                        var zone_id = $('#zone').val();
                        if (zone_id === null || zone_id == 0) {
                            output = false;
                            missingValue = 'Zone';
                        }
                        break;
                    case '4':
                        var kabina_id = $('#kabina').val();
                        if (kabina_id === null || kabina_id == 0) {
                            output = false;
                            missingValue = 'Kabina';
                        }
                        break;
                    case '5':
                        var division_id = $('#division').val();
                        if (division_id === null || division_id == 0) {
                            output = false;
                            missingValue = 'Division';
                        }
                        break;
                    case '6':
                        var ilaqa_id = $('#ilaqa').val();
                        if (ilaqa_id === null || ilaqa_id == 0) {
                            output = false;
                            missingValue = 'Ilaqa';
                        }
                        break;
                    case '7':
                        var halqa_id = $('#halqa').val();
                        if (halqa_id === null || halqa_id == 0) {
                            output = false;
                            missingValue = 'Halqa';
                        }
                        break;
                    case '8':
                        var zhalqa_id = $('#zhalqa').val();
                        if (zhalqa_id === null || zhalqa_id == 0) {
                            output = false;
                            missingValue = 'Zeli Halqa';
                        }
                        break;
                    default:
                        var country_id = $('#country').val();
                        if (country_id === null || country_id == 0) {
                            output = false;
                            missingValue = 'Country';
                        }
                }
                if (output === true) {
                    var json = {};
                    json['ci_csrf_token'] = '';
                    json['level'] = level;
                    json['selection'] = selection;
                    json['country_id'] = $('#country').val() ? $('#country').val() : null;
                    json['region_id'] = $('#region').val() ? $('#region').val() : null;
                    json['zone_id'] = $('#zone').val() ? $('#zone').val() : null;
                    json['kabina_id'] = $('#kabina').val() ? $('#kabina').val() : null;
                    json['division_id'] = $('#division').val() ? $('#division').val() : null;
                    json['ilaqa_id'] = $('#ilaqa').val() ? $('#ilaqa').val() : null;
                    json['halqa_id'] = $('#halqa').val() ? $('#halqa').val() : null;
                    json['zhalqa_id'] = $('#zhalqa').val() ? $('#zhalqa').val() : null;
                    var request = $.ajax({
                        url: "https://www.dawateislami.org/Hierarchy/get_level_details",
                        type: "POST",
                        data: json,
                        dataType: "html",

                        success: function(_return) {
                            $('#record').removeClass('hidden');
                            $('#record').html(_return);
                        }
                    });
                } else {
                    if (level <= 2 && selection >= 7) {
                        var message = "Wrong Selection";
                    } else {
                        var message = "Please Select " + missingValue + " First ! ";
                    }
                    var html = '<table><thead><tr><td style="color: #ff0000;background-color: #ffffff;font-size: 18px;">' + message + '</td></tr></thead></table>';
                    $('#record').removeClass('hidden');
                    $('#record').html(html);
                }
            });


            // display list
            $("#level").change(function() {

                var json = {};
                var level = $(this).val();

                if (level == 1) {
                    country_remove();
                    $('#country').prop('required', true);

                    region_add();
                    zone_add();
                    kabina_add();
                    division_add();
                    ilaqa_add();
                    halqa_add();
                    zhalqa_add();

                    get_childs(level);
                } else if (level == 2) {
                    country_remove();
                    region_remove();
                    $('#country').prop('required', true);
                    $('#region').prop('required', true);

                    zone_add();
                    kabina_add();
                    division_add();
                    ilaqa_add();
                    halqa_add();
                    zhalqa_add();
                    get_childs(level);
                } else if (level == 3) {
                    country_remove();
                    region_remove();
                    zone_remove();

                    kabina_add();
                    division_add();
                    ilaqa_add();
                    halqa_add();
                    zhalqa_add();
                    get_childs(level);
                } else if (level == 4) {
                    country_remove();
                    region_remove();
                    zone_remove();
                    kabina_remove();

                    division_add();
                    ilaqa_add();
                    halqa_add();
                    zhalqa_add();
                    get_childs(level);
                } else if (level == 5) {
                    country_remove();
                    region_remove();
                    zone_remove();
                    kabina_remove();
                    division_remove();

                    ilaqa_add();
                    halqa_add();
                    zhalqa_add();
                    get_childs(level);
                } else if (level == 6) {
                    country_remove();
                    region_remove();
                    zone_remove();
                    kabina_remove();
                    division_remove();
                    ilaqa_remove();

                    halqa_add();
                    zhalqa_add();
                    get_childs(level);
                } else if (level == 7) {
                    country_remove();
                    region_remove();
                    zone_remove();
                    kabina_remove();
                    division_remove();
                    ilaqa_remove();
                    halqa_remove();

                    zhalqa_add();
                    get_childs(level);
                } else if (level == 8) {
                    country_remove();
                    region_remove();
                    zone_remove();
                    kabina_remove();
                    division_remove();
                    ilaqa_remove();
                    halqa_remove();
                    zhalqa_remove();
                    get_childs(level);
                } else if (level == 0) {
                    country_add();
                    region_add();
                    zone_add();
                    kabina_add();
                    division_add();
                    ilaqa_add();
                    halqa_add();
                    zhalqa_add();

                    get_childs(level);
                    $('.list option[value="1"]').remove();
                    $('.list option[value="2"]').remove();
                    $('.list option[value="3"]').remove();
                    $('.list option[value="4"]').remove();
                    $('.list option[value="5"]').remove();
                    $('.list option[value="6"]').remove();
                    $('.list option[value="7"]').remove();
                }
            });
        });

        // services carousal script
        $('#servicesCarousel').carousel({
            interval: 3000
        })

        $('.carousel .carousel-item').each(function() {
            var minPerSlide = 2;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            let isMobile = window.matchMedia("(max-width: 767px)").matches;

            if (!isMobile) {
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            }
        });
        // end services carousal script
    </script>
<footer id="footer">
        <!-- <div class="footer-newsletter" style="background-color: #fef8f5 !important;">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p style="color: #000000">Please enter your email address to join our subscription letter.</p>
                        <div id="msg"></div>
                        <div class="input-group">
                            <input type="email" id="nemail" name="nemail" class="form-control" required>
                            <div class="input-group-append">
                                <button type="button" id="btn_newsletter" class="btn newsletter-color" aria-expanded="false"> Subscribe </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
                        <h3>Idara Moeen ul Islam</h3>
                        <p style="text-align: initial;">
                             Babul Madina Karachi,Pakistan<br><br>
                            <strong>Phone: <span dir="ltr"><b>+92 316 2282526</b></span></strong> <br>
                            <strong>Email Address: <b>org@dawateislami.net</b></strong> <br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 footer-links" data-aos="fade-up" data-aos-delay="200">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.dawateislami.net/islam/streaming/watch-live-madani-channel.htm" target="_blank">Madani Channel TV</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://prayertimes.dawateislami.net/" target="_blank">Prayers Timing</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 footer-links" data-aos="fade-up" data-aos-delay="300">
                        <h4>Our Websites</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.aboutmuhammad.net/en/">Holy Prophet Muhammad صلی اللہ علیہ والہ وسلم</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://abdulqadirjilani.net/">Sheikh Abdul Qadir Jilani</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://imamahmedraza.com/">Imam Ahmed Raza Khan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.ilyasqadri.com/">About Ameer-e-Ahl-e-sunnat</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 footer-links" data-aos="fade-up" data-aos-delay="400">
                        <h4>Our Social Networks</h4>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/MadaniChannel?lang=en" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/dawateislami.net/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/dawateislamiofficial/?hl=en" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.flickr.com/photos/dawateislami/" class="flicker" target="_blank"><i class="fa fa-flickr"></i></a>
                        </div>
                        <div style="position: relative;min-height: 60px;">
                            <!--                        <h4 style="position: absolute;bottom: 0;">Total Visitors: -->
                            <!--</h4>-->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <!--            &copy; Copyright <strong><a href="https://www.dawateislami.net/"><span>Dawat e Islami</span></a></strong>. All Rights Reserved-->
                Copyright &copy; 2022 by I.T. Majlis, <strong><a style="color: #ffffff" href="https://www.dawateislami.net/">Idara Moeen ul Islam</a></strong>
            </div>

        </div>
    </footer><!-- End Footer -->