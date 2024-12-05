$(document).ready(function() {

    const navbarMenu = document.getElementById("navbar");
    const burgerMenu = document.getElementById("burger");
    const overlayMenu = document.querySelector(".overlay");

    // Show and Hide Navbar Function
    const toggleMenu = () => {
        navbarMenu.classList.toggle("active");
        overlayMenu.classList.toggle("active");
    };

    // Collapsible Mobile Submenu Function
    const collapseSubMenu = () => {
        navbarMenu
            .querySelector(".menu-dropdown.active .submenu")
            .removeAttribute("style");
        navbarMenu.querySelector(".menu-dropdown.active").classList.remove("active");
    };

    // Toggle Mobile Submenu Function
    const toggleSubMenu = (e) => {
        if (e.target.hasAttribute("data-toggle") && window.innerWidth <= 991) {
            e.preventDefault();
            const menuDropdown = e.target.parentElement;

            // If Dropdown is Expanded, then Collapse It
            if (menuDropdown.classList.contains("active")) {
                collapseSubMenu();
            } else {
                // Collapse Existing Expanded Dropdown
                if (navbarMenu.querySelector(".menu-dropdown.active")) {
                    collapseSubMenu();
                }

                // Expanded the New Dropdown
                menuDropdown.classList.add("active");
                const subMenu = menuDropdown.querySelector(".submenu");
                subMenu.style.maxHeight = subMenu.scrollHeight + "px";
            }
        }
    };

    // Fixed Resize Window Function
    const resizeWindow = () => {
        if (window.innerWidth > 991) {
            if (navbarMenu.classList.contains("active")) {
                toggleMenu();
            }
            if (navbarMenu.querySelector(".menu-dropdown.active")) {
                collapseSubMenu();
            }
        }
    };

    // Initialize Event Listeners
    burgerMenu.addEventListener("click", toggleMenu);
    overlayMenu.addEventListener("click", toggleMenu);
    navbarMenu.addEventListener("click", toggleSubMenu);
    window.addEventListener("resize", resizeWindow);



    $('.cancel').click(function() {
        $('.navbar').removeClass("active");
        $('.overlay').removeClass("active");
    });

    $('.menu-item').click(function() {
        $('.menu-item ').removeClass("activelink");
        $(this).addClass("activelink");
    });


    ////////////////////////// End Menu

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.header').addClass("sticky");
        } else {
            if ($(this).scrollTop() < 1) {
                $('.header').removeClass("sticky");
            }
        }
    });

    // End Scroll Header

    $(window).scroll(function() {
        if ($(this).scrollTop() > 60) {
            $('.scrollToTop').show();
            $('.scrollToTop').addClass("btntop");
        } else {
            $('.scrollToTop').hide();
            $('.scrollToTop').removeClass("btntop");
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 60);
        return false;
    });

    // End Scroll Top




    $(document).ready(function() {
        $('.searchicon').click(function(event) {
            event.stopPropagation();
            $(".showboxsearch").fadeIn("slow");
        });
        $(".showboxsearch").on("click", function(event) {
            event.stopPropagation();
        });
    });

    $(document).on("click", function() {
        $(".showboxsearch").fadeOut();
    });


    // End Search



    $(".slider-services").slick({
        dots: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },


        ],
    });

    // End clients




    $('.popup-close').click(function() {
        $('.detelsuser').removeClass("active");
        $('body').removeClass("active");
    });

    $('.pagination li a').click(function() {
        $('.pagination li a').removeClass("active");
        $(this).addClass("active");
    });

    jQuery(function() {
        jQuery("a.bla-2").YouTubePopUp({ autoplay: 1 }); // Disable autoplay
    });

    $(function() {
        $('#row_dim').hide(); 
        $('#type').change(function(){
            if($('#type').val() == 'enquiry') {
                $('#row_dim').show(); 
            } else {
                $('#row_dim').hide(); 
            } 
        });
    });
    $(function() {
        $('#row_dim2').hide(); 
        $('#type').change(function(){
            if($('#type').val() == 'takamul') {
                $('#row_dim2').show(); 
            } else {
                $('#row_dim2').hide(); 
            } 
        });
    });

  

});



(function($) {
    $.fn.countTo = function(options) {
        options = options || {};

        return $(this).each(function() {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from: $(this).data('from'),
                to: $(this).data('to'),
                speed: $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals: $(this).data('decimals')
            }, options);

            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;

            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};

            $self.data('countTo', data);

            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);

            // initialize the element with the starting value
            render(value);

            function updateTimer() {
                value += increment;
                loopCount++;

                render(value);

                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }

                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;

                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }

            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0, // the number the element should start at
        to: 0, // the number the element should end at
        speed: 1000, // how long it should take to count between the target numbers
        refreshInterval: 100, // how often the element should be updated
        decimals: 0, // the number of decimal places to show
        formatter: formatter, // handler for formatting the value before rendering
        onUpdate: null, // callback method for every time the element is updated
        onComplete: null // callback method for when the element finishes updating
    };

    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function($) {
    // custom formatting example
    $('.count-number').data('countToOptions', {
        formatter: function(value, options) {
            return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
    });

    // start all the timers
    $('.timer').each(count);

    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }


    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

});