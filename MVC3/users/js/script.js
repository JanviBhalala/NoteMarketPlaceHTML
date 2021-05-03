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
|   |   |   |   |   |   Disable price
==============================================================*/
$(document).ready(function () {
			$('#add-notes-form .radio').change(function(){
				var v=$(this).val();
				if(v==0){
					$('#add-notes-form #price').attr("readonly","readonly");
					$('#add-notes-form #price').val('0');
				}
				else{
					$('#add-notes-form #price').removeAttr("readonly");
				}
			});
		});

/*=============================================================
|   |   |   |   |   |   Validation
==============================================================*/
$(function () {
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
        submitHandler: function (form) {
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
        submitHandler: function (form) {
            form.submit();

        }

    });

});

/*=============================================================
|   |   |   |   |   |   Ajax
==============================================================*/

  $(document).ready(function() {
            var data={};
            load_data(data);
            
            function load_data(query){
                $.ajax({
                    url: "process/searchBack.php",
                    method: "POST",
                    data:{query:query},
                    success:function(data){
                        $('#load-item-here').html(data);
                    }
                });
               
            }
            $('.searchMeInTable').change(function(){
                
                var value=$(this).children("option:selected").val();
                var index=$(this).children("option:selected").index();
                var name=$(this).attr('name');
               // var data={name:value};
                var i={};
                $('.searchMeInTable').prop('selectedIndex',0);
                $(this).prop('selectedIndex',index);
                
                i[name]=value;
                var json1=JSON.stringify(i);
                console.log(json1);
                load_data(json1);
                
            });
             $('.searchMeInTabletxt').on('keyup',function(){
                
                var value=$(this).val();
                var name=$(this).attr('name');
                var i={};
                $('.searchMeInTable').prop('selectedIndex',0);
                
                i[name]=value;
                var json1=JSON.stringify(i);
                console.log(json1);
                load_data(json1);
                
            });
            $(document).on('click','#load-item-here .page-number',function(){
                var id=$(this).attr('id');
                var pre=$("#load-item-here .page-number.active").attr('id');
                id= id + ',' + pre;
                $.ajax({
                    url: "process/searchBack.php",
                    method: "GET",
                    data:{page:id},
                    success:function(data){
                        $('#load-item-here').html(data);
                    }
                });
                return false;
            });
        });

