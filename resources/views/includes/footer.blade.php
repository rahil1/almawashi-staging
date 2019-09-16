    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>


    <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('owl/jquery.mousewheel.min.js') }}"></script>
    <script>

            $('.dynamic').change(function(){
                if($(this).val() != '')
                {
                    var valueOfCategory = $(this).val();
                    var productListId = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    console.log(valueOfCategory); 
                    console.log(productListId);


                    // $.ajaxSetup({
                    //     headers: {
                    //         '_token': $('meta[name="csrf-token"]').attr('content'),
                    //     }
                    // });

                    $.ajax({
                        url:"{{route('request_quote_fetch')}}",
                        method:"POST",
                        data:{valueOfCategory:valueOfCategory, _token:_token},
                        success:function(result)
                        {
                            $('#'+productListId).html(result);
                        }
                    })
                }
            });


            $('#product_category').change(function(){
                $('#products').val('');
            });

            // $('#tender_form').on("submit",function(e){
            //     var postData = $(this).serializeArray();
            //     // var selectedTenderCode = $(this).data('tender_code');
            //     var postUrl = $(this).attr('action');


            //     // var postUrl = "/create_supplier_tender/" + selectedTenderCode;
            //     // console.log(postUrl);

            //     $.ajaxSetup({
            //         headers: {
            //             '_token': $('meta[name="csrf-token"]').attr('content'),
            //         }
                    
            //     });
            //     $.ajax({
            //         url: postUrl,
            //         method: 'POST',
            //         data: postData,
            //         success: function(result)
            //         {
            //             // console.log("heyy");
            //             // $('.alert').show();
            //             if (result.status) 
            //             {
            //                 $('#alert-submit-form').html("<div class='alert alert-success'>Your tender information was saved successfully!</div>");
            //             }
            //             else
            //             {
            //                 $('#alert-submit-form').html("<div class='alert alert-danger'>You have already registered for this tender. <a href='{{ route('open_tenders') }}''>Click here to view other tenders</a></div>");
            //             }                        
            //         },
            //         error: function(result) {
            //             console.log(result.responseJSON.errors.quantity);

            //             // location.reload();
            //         }

            //     });
            //     e.preventDefault();


            // });

        //To flash messages to user
        // $('div.alert').delay(7000).slideUp(500);

        function switchTabs()
        {
            $('a[data-toggle="tab"]').on('click', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });

            var activeTab = localStorage.getItem('activeTab');
            // console.log(activeTab);
            
            //toggling the update/edit button on supplier dashboard profile tab
            if(activeTab == "#nav-home")
            {
                toggleEditAndUpdate()
            }

            if(activeTab){
                $('#nav-tab a[href="' + activeTab + '"]').tab('show');
            }

            // $('#nav-tab a[href="#{{ old('tab') }}"]').tab('show');
        }

        //function used in supplier dashboard
        function toggleEditAndUpdate()
        {
            @if($errors->any())
                $('input').each(function(){
                    $(this).removeAttr('disabled');
                 });
                $('#inputGroupSelect02').removeAttr('disabled');
                $('#update_btn').show();
                $('#edit_btn').hide();
            @endif
        }

        $('#news-box').on('hidden.bs.modal', function (e) {
             
                $('#news-data').html("");
        });
        
        $('#news-box').on('show.bs.modal', function (event) 
        {  
            var link = $(event.relatedTarget);
            var galleryObj = link.data('post'); // Extract info from data-* attributes
            var data = "";

            if(galleryObj.media_image != null)
            {
                data += ('<img src="{{ config("externalAssets.ext_asset_link") }}/' + galleryObj.media_image +'">');
            }

            else
            {
                var video_link = JSON.parse(galleryObj.media_video).url;
                console.log(video_link);
                data += ('<iframe width="100%" height="450" src="'+video_link+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><a href="#" id="close-model" data-dismiss="modal"><i class="fas fa-times"></i></a>');
            }

            $('#news-data').html(data);
            // console.log(galleryObj);

        });

        $('#gallery-box').on('hidden.bs.modal', function (e) {
             
                $('#gallery-data').html("");
        });
        
        $('#gallery-box').on('show.bs.modal', function (event) 
        {  
            var link = $(event.relatedTarget);
            var galleryObj = link.data('post'); // Extract info from data-* attributes
            var data = "";

            data += ('<img src="{{ config("externalAssets.ext_asset_link") }}/' + galleryObj.media_image +'">' +
                    '<a href="#" id="close-model" data-dismiss="modal"><i class="fas fa-times"></i></a>' +
                    '<div class="bottom">' +
                        '<h6 class="color-dark font-32 lato-bold">' + galleryObj.media_title + '</h6>' +
                        '<p class="font-18 color-dark">' + galleryObj.media_s_description + '</p>' +
                    '</div>');
            $('#gallery-data').html(data);
            // console.log(galleryObj);

        });

        $('#product-box').on('hidden.bs.modal', function (e) {
             
                $('#product-data').html("");
        });

        $('#product-box').on('show.bs.modal', function (event) 
        {  
            var link = $(event.relatedTarget);
            var productObj = link.data('post'); // Extract info from data-* attributes
            var data = "";

            data += ('<img src="{{ config("externalAssets.ext_asset_link") }}/' + productObj.product_image +'">' +
                    '<a href="#" id="close-model" data-dismiss="modal"><i class="fas fa-times"></i></a>' +
                    '<div class="bottom">' +
                        '<h6 class="color-dark font-32 lato-bold">' + productObj.product_name + '</h6>' +
                        '<p class="font-18 color-dark">' + productObj.product_description + '</p>' +
                    '</div>');
            $('#product-data').html(data);
            // console.log(productObj);

        });

        $('#quality_standard_box').on('hidden.bs.modal', function (e) {
             
                $('#quality_standard_data').html("");
        });

        $('#quality_standard_box').on('show.bs.modal', function (event) 
        {  
            var link = $(event.relatedTarget);
            var qualityObj = link.data('post'); // Extract info from data-* attributes
            var data = "";

            data += ('<img src="{{ config("externalAssets.ext_asset_link") }}/' + qualityObj.standard_image +'">' +
                    '<a href="#" id="close-model" data-dismiss="modal"><i class="fas fa-times"></i></a>' +
                    '<div class="bottom">' +
                        '<h6 class="color-dark font-32 lato-bold">' + qualityObj.standard_title + '</h6>' +
                        '<p class="font-18 color-dark">'+qualityObj.standard_description+'</p>' +
                    '</div>');
            $('#quality_standard_data').html(data);
            console.log("qualityObj");

        });



        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 150) {
                $('.sticky-header #header').addClass("fixed-header");

            } else {
                $('.sticky-header #header').removeClass("fixed-header");
            }
        });

        $('li.hamburger a').click(function(e) {
            e.preventDefault();
            $("#mySidenav").css('width', '250');
            $('body').addClass('nav-open');
            // setTimeout(function(){ $('body').addClass('nav-open'); }, 100);

        });
        $('#closebtn, .overlay').click(function(e) {
            e.preventDefault();
            $("#mySidenav").css('width', '0');
            $('body').removeClass('nav-open');
        });

        $('#mySidenav li').each(function() {
            var click = $(this).find('a');
            $(click).click(function() {
                $('#mySidenav li').removeClass('open');
                $(this).parent().toggleClass('open');

            });

        });


        $('#bgslider').owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            nav: false,
            dots: false,
            animateOut: 'fadeOut'
        });
        $('.galley-carousel').owlCarousel({
            loop: false,
            margin: 80,
            nav: false,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1.7
                }
            }
        });
        $('.carcass').owlCarousel({
            loop: false,
            margin: 50,
            nav: false,
            items: 2,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 2
                }
            }
        });

        $('.board').owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            items: 3,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 3
                }
            }
        });


        $('.shareholders').owlCarousel({
            loop: false,
            margin: 30,
            nav: false,
            items: 2.2,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 1.5
                },
                992: {
                    items: 2.2
                }
            }
        });
        $('.suppliers').owlCarousel({
            loop: false,
            margin: 15,
            nav: false,
            items: 1.5,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1.5
                }
            }
        });
        $('.reports').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            items: 2.4,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 1.5
                },
                992: {
                    items: 2.2
                }
            }
        });
        
        $('.carrer').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 1.5
                },
                1200: {
                    items: 2.2
                },
                1600: {
                    items: 2.2
                }
            }
        });
        $('.branches').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 1.5
                },
                1200: {
                    items: 2.8
                },
                1600: {
                    items: 3.2
                }
            }
        });
        
        $('.iso').owlCarousel({
            loop: false,
            margin: 15,
            nav: false,
            items: 3.5,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 1.5
                },
                992: {
                    items: 3.5
                }
            }
        });
        $('.halal').owlCarousel({
            loop: false,
            margin: 30,
            nav: false,
            items: 2.8,
            responsive: {
                320: {
                    items: 1
                },
                768: {
                    items: 2.5
                },
                992: {
                    items: 2.8
                }
            }
        });

        $(".prosessed").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 2.8
                }
            }
        });

        $(".board").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 2.8
                }
            }
        });


        $(".recipies").owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 3
                }
            }

        });

        $(".recipies-mobile").owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 2.8
                }
            }

        });
        $('#our-story').owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            items: 1,
            dots: false,
        });
        $('.clients').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            items: 3,
        });
        var carousel = $(".owl-carousel");
        carousel.owlCarousel({
            
        });

        carousel.on('mousewheel', '.owl-stage', function(e) {
          
            if (e.deltaY > 0) {
                carousel.trigger('next.owl');
            } else {
                carousel.trigger('prev.owl');
            }
            e.preventDefault();
        });

        checkClasses();
        carousel.on('translated.owl.carousel', function(event) {
            checkClasses();
        });

        function checkClasses() {
            var total = $('.owl-carousel .owl-stage .owl-item.active').length;
            $('.owl-carousel .owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');
            $('.owl-carousel .owl-stage .owl-item.active').each(function(index) {
                if (index === 0) {
                    $(this).addClass('first-item');
                }
                if (index === total - 1 && total > 1) {
                    //$(this).addClass('lastActiveItem'); // add class in last item
                }
            });
        }


        $('.next').click(function() {
            $('#our-story').trigger('next.owl.carousel');
        });
        $('.prev').click(function() {
            $('#our-story').trigger('prev.owl.carousel');
        });

        // $('.dropdown').each(function(){
        //     var clicks = $(this).find('button');
        //     var target = $(this);
        //     $(clicks).click(function(){
        //         $(target).toggleClass('open');
        //     });
        // });

        /*Append content for fixed nav and icons*/

        $('.sticky-header #main-content ul.side-nav').clone().appendTo('.top-header .fixed-links');
        //$('.sticky-header #main-content ul.smart-icons').clone().appendTo('.top-header .clone-icon');

        $('.ul-dropdown .selected').click(function() {

            $(this).toggleClass('open');
            $('ul.side-nav.style-2, .style-dropdown').toggleClass('open');

        })



        function addheight() {
            var mapheight = $('.map').height();
            // console.log(mapheight);
            $('.listing').height(mapheight - 95);

            var height = $(window).height();
            console.log(height);
            if(height <= 768) {
                $('body').addClass('adjustH');
            }else{
                $('body').removeClass('adjustH');
            }
        }

        addheight();

        $(window).resize(function(mapheight) {
            addheight();
            

           
        });

        $('#add_item').click(function(e) {
            e.preventDefault();
            // data = $('.entry-div.main');
            //console.log(data);
            $('<div class="col-12 entry-div"><div class="row"><div class="form-group col-md-4 col-sm-12 "><label>Item Name</label><input type="text" class="form-control" placeholder="Lorem ipsum dolor"></div><div class="form-group col-md-4 col-sm-12"><label>Description</label><input type="text" class="form-control" placeholder="Lorem ipsum dolor"></div><div class="form-group col-md-4 col-sm-12"><label>Quantity</label><input type="text" class="form-control" placeholder="1200"></div><div class="form-group col-md-4 col-sm-12"><label>Unit</label><input type="text" class="form-control" placeholder="Al Mawashi"></div><div class="form-group col-md-4 col-sm-12"><label>Specification</label><input type="text" class="form-control" placeholder="185000"></div><div class="form-group col-md-4 col-sm-12"><label>Unit Price</label><input type="text" class="form-control" placeholder="Lorem ipsum dolor"></div></div></div>').insertBefore('.clobebefore');


            // $('.entry-div').append();
        })

        $('.nav-tabs li').each(function(){
            console.log(this);
            var clicks = $(this).find('.nav-link');
            $(clicks).click(function(){
                var data = $(this).attr('aria-controls');
                if(data == 'report') {
                    $('body').attr('id', 'remove-fixed');
                }else{
                    $('body').attr('id', '');
                }
            });
        });
    </script>
    