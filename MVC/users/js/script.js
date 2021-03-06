/*=============================================================
|   |   |   |   |   |   Toogle Password
==============================================================*/
$(".toggle-password").click(function () {

    var selectInput = $(this).closest(".form-group").find("input");
    if ($(selectInput).attr("type") == "password") {
        $(selectInput).attr("type", "text");
    } else {
        $(selectInput).attr("type", "password");
    }
});
/*=============================================================
|   |   |   |   |   |   FAQ
==============================================================*/
$(document).ready(function () {

    $(".btm-pls").click(function () {
        var a = $(this).closest(".items").find(".faq-item").hide();
        var a = $(this).closest(".items").find(".faq-item-detail").show();

    });
    $(".btn-minus").click(function () {
        var a = $(this).closest(".items").find(".faq-item").show();
        var a = $(this).closest(".items").find(".faq-item-detail").hide();

    });
});
/*=============================================================
|   |   |   |   |   |   Mobile Menu
==============================================================*/
$(function () {

    // Show mobile nav
    $("#mobile-nav-open-btn").click(function () {
        $("#mobile-nav").css("height", "100%");
    });

    // Hide mobile nav
    $("#mobile-nav-close-btn").click(function () {
        $("#mobile-nav").css("height", "0%");
    });

});
/*=============================================================
|   |   |   |   |   |   Table Pagination
==============================================================*/

$(document).ready(function () {

    myTable(5, "#table-container1");
    myTable(5, "#table-container2");
    myTable(5, ".table-container-row5");
    myTable(10, ".table-container-row10");

    /* ---------------------Function----------------------*/
    function myTable(maXRowNum, className) {
        var pagination = className + " .pagination-wrapper";
        $(pagination).html('')
        var tnum = 0;
        var maxRow = maXRowNum;
        var tr = className + " .my-tables tbody tr";
        var tbody = className + " .my-tables tbody";
        //var totalRow=$(table+' tbody tr').length()
        var totalRow = $(tr).length
        var row = $(tbody)
        // $(table+' tr:gt(0)').each(function(){
        row.find('tr').each(function () {
            tnum++
            if (tnum > maxRow) {
                $(this).hide()
            }
            if (tnum <= maxRow) {
                $(this).show()
            }
        })
        if (totalRow > maxRow) {

            var li = className + " .pagination-wrapper li";
            var pagenum = Math.ceil(totalRow / maxRow)
            /*$(pagination).append('<li id="prev" data-page="' + "back" + '"><span>' + "<" + '<span class="sr-only">(current)</span></span></li>').show()*/
            for (var i = 1; i <= pagenum; i++) {
                $(pagination).append('<li data-page="' + i + '"><span>' + i + '<span class="sr-only">(current)</span></span></li>').show()

            }
            /*$(pagination).append('<li id="next" data-page="' + "next" + '"><span>' + ">" + '<span class="sr-only">(current)</span></span></li>').show()*/
            $(li).addClass('text-center')
            $(li).addClass('page-number')


        }
        var secondChild = className + " .pagination-wrapper li:first-child ";
        var liNumber = className + " .pagination-wrapper .page-number";
        $(secondChild).addClass('active')
        $(liNumber).on('click', function () {
            var pagenum = $(this).attr('data-page')
            var trindex = 0
            $(li).removeClass('active')
            $(this).addClass('active')
            $("#prev").html('<li id="prev" data-page="' + "back" + '"><span>' + "<" + '<span class="sr-only">(current)</span></span></li>');
            var row2 = $(tbody)
            row2.find('tr').each(function () {
                // $(table+' tr:gt(0)').each(function(){
                trindex++
                if (trindex > (maxRow * pagenum) || trindex <= ((maxRow * pagenum) - maxRow)) {
                    $(this).hide();
                } else {
                    $(this).show()
                }
            })
        })
        $(className + '.pagination-wrapper li:nth-child(1)').on('click', function () {


        })

    }

});
/*=============================================================
|   |   |   |   |   |   Navigation
==============================================================*/

/* show and hide white navigation*/
$(function () {


    $("#home-window").load("../home.php", function () {
        // show/hide nav on page load
        showHideNav();

        $(window).scroll(function () {

            // show/hide nav on window's scroll
            showHideNav();
        });

        function showHideNav() {

            if ($(window).scrollTop() > 50) {

                // Show white nav
                $("nav").addClass("white-nav-top");

                // Show dark logo
                $(".navbar-brand img").attr("src", "img/logo/colored-logo.png");

                // Show back to top button
                $("#back-to-top").fadeIn();

            } else {

                // Hide white nav
                $("nav").removeClass("white-nav-top");

                // Show logo
                $(".navbar-brand img").attr("src", "img/pre-login/top-logo.png");

                // Hide back to top button
                $("#back-to-top").fadeOut();
            }
        }
    });


});

$(function () {
    var includes = $('[data-include]')
    $.each(includes, function () {
        var file = 'views/' + $(this).data('include') + '.html'
        $(this).load(file)
    })
})
/*=============================================================
|   |   |   |   |   |   Animation
==============================================================*/
// Animate on scroll
$(function () {
    new WOW().init();
});

/*=============================================================
|   |   |   |   |   |   Rating Stars
==============================================================*/
$(document).ready(function () {
    for (i = 1; i < 9; i++) {
        for (j = 5; j >= 1; j--) {
            $('.rate' + i + ' .rate').append('<input type="radio" id="s_' + i + '_' + j + '" name="rate' + i + '" value="5" /><label for="s_' + i + '_' + j + '" title="text">5 stars</label>');
        }
    }
});

/*=============================================================
|   |   |   |   |   |   Validation
==============================================================*/
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='signup_form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
     lname: "required",
    fname: "required",
    
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      pass: {
        required: true,
        minlength: 8
      },
        confirm_pass: {
            required: true,
            minlength: 8,
            //equalTo: '#pass'
        },
    },
    // Specify validation error messages
    messages: {
      fname: "Please enter your firstname",
      lname: "Please enter your lastname",
      pass: {
        required: "Please provide a password",
        minlength: "Your password must be at least 8 characters long"
      },
    confirm_pass: {
            required: "Fill this field",
            minlength: "Password does not match",
           // equalTo:"Password does not match."
            
        },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) { 
            form.submit();
      
    }
    
  });
   $("form[name='login_form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      pass: {
        required: true,
      }
    },
    // Specify validation error messages
    messages: {
      pass: {
        required: "Please provide a password"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
            form.submit();
      
    }
    
  });
    
});
