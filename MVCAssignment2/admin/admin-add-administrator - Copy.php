<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Administrator</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap/bootstrap.min.css">

    <!-- Animate CSS  -->
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!--<style>

        /* Rating Star Widgets Style */
        .rating-stars ul {
            list-style-type: none;
            padding: 0;

            -moz-user-select: none;
            -webkit-user-select: none;
        }

        .rating-stars ul>li.star {
            display: inline-block;

        }

        /* Idle State of the stars */
        .rating-stars ul>li.star>i.fa {
            font-size: 2.5em;
            /* Change the size of the stars */
            color: #ccc;
            /* Color on idle state */
        }

        /* Hover state of the stars */
        .rating-stars ul>li.star.hover>i.fa {
            color: #FFCC36;
        }

        /* Selected state of the stars */
        .rating-stars ul>li.star.selected>i.fa {
            color: #FF912C;
        }

    </style>-->
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        body,
        td,
        th,
        p {
            color: #333;
            font: 16px/1.6 Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #fdfdfd;
            margin: 0;
            position: relative;
        }

        h2 {
            display: inline-block;
        }

        #review-add-btn {
            padding: 0;
            font-size: 1.6em;
            cursor: pointer;
        }

        /* ====================== Review Form ====================== */
        #modal {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 400px;
            transform: translate(-50%, -50%);
            /* end css tricks */
            /* z-index: -10; */
            z-index: 3;
            display: flex;
            flex-direction: column;
            /* width: 80vw; */
            /* height: 80vh; */
            border: 1px solid #666;
            border-radius: 3px;
            opacity: 0;
            transition: all .3s;
            overflow: hidden;
            background-color: #fff;
            /* visibility: hidden; */
            display: none;
        }

        #modal.show {
            /* visibility: visible;   */
            opacity: 1;
            /* z-index: 10; */
            display: flex;
        }

        .modal-overlay {
            width: 100%;
            height: 100%;
            z-index: 2;
            /* places the modalOverlay between the main page and the modal dialog */
            background-color: #000;
            opacity: 0;
            transition: all .3s;
            position: fixed;
            top: 0;
            left: 0;
            display: none;
            margin: 0;
            padding: 0;
        }

        .modal-overlay.show {
            display: block;
            opacity: 0.5;
        }

        #modal .close-btn,
        .modal_close_btn {
            align-self: flex-end;
            font-size: 1.4em;
            margin: 8px 8px 0;
            padding: 0 8px;
            cursor: pointer;
            width: auto;
            background-color: #fff;
            color: #d1d1d1;
        }

        form {
            max-width: 900px;
            padding: 0 20px 20px 20px;
        }

        input,
        /* input:not(input[type='radio']), */
        /* input:not(type='radio'), */
        .rate,
        button {

            font-size: 16px;
            padding: 8px;
        }

        select,
        textarea {

            border-radius: 8px;
            box-shadow: inset 0 1px 1px #e1e1e1;
            font-size: 16px;
            padding: 8px;
            width: inherit;
        }

        /*input[type="radio"] {
  box-shadow: none;
}*/
        button {
            min-width: 48px;
            min-height: 48px;
        }

        button:hover {
            border: 1px solid #ccc;
            background-color: #fff;
        }

        button#review-add-btn,
        button.close-btn,
        button#submit-review-btn {
            min-height: 40px;
        }

        button#submit-review-btn {
            font-weight: bold;
            cursor: pointer;
            padding: 0 16px;
        }

        .right {
            align-self: flex-end;
        }

        #review-form-container {
            width: 100%;
            background-color: #fff;
            padding: 0 10px 10px;
            color: #333;
            overflow-y: auto;
        }

        #review-form {
            display: flex;
            flex-direction: column;
            background: #fff;
            border: 0px solid #e5e5e5;

        }

        #review-form label,
        #review-form input {
            display: block;
            /* width: 100%; */
        }


        #review-form .rate label,
        #review-form .rate input,
        #review-form .rate1 label,
        #review-form .rate1 input {
            display: inline-block;
        }

        /* Modified from: https://codepen.io/tammykimkim/pen/yegZRw */
        .rate {
            /* float: left; */
            /* display: inline-block; */
            display: inline-flex;
            align-items: flex-start;
            justify-content: flex-end;
        }

        #review-form .rate>label {
            margin-bottom: 0;
            margin-top: -5px;
            height: 30px;
        }

        .rate:not(:checked)>input {
            /* position: absolute; */
            /*top: -9999px;*/
            margin-left: -24px;
            width: 20px;
            padding-right: 14px;
            z-index: -10;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        /* #star1:focus{

} */
        .rate2 {
            float: none;
        }

        .rate:not(:checked)>label::before {
            content: '★ ';
            position: relative;
            top: 8px;
            left: 0px;
        }

        .rate>input:checked~label {
            color: #ffc700;
            /* outline: -webkit-focus-ring-color auto 5px; */
        }

        .rate>input:checked:focus+label,
        .rate>input:focus+label {
            outline: -webkit-focus-ring-color auto 5px;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
            /* outline: -webkit-focus-ring-color auto 5px; */
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }

        #add-review-header {
            color: #6255a5;
            font-family: "Open Sans", sans-serif;
            font-weight: 600;
            font-size: 24px;
            line-height: 28px;
        }

    </style>
    <!-- Header -->
    <?php  include "includes/header.php" ?>
    <!-- Header Ends -->


    <br><br><br>

    <!--<section class='rating-widget'>

         Rating Stars Box 
        <div class='rating-stars text-center'>
            <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Fair' data-value='2'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Good' data-value='3'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
            </ul>
        </div>
        
        





    </section>-->
    <h2>Add Review</h2>
    <button id="review-add-btn" aria-label="add review" title="Add Review"></button>
    <div id="modal" role="dialog" aria-modal="true" aria-labelledby="add-review-header" class="">
        <button class="close-btn modal_close_btn mt-0" aria-label="close" title="Close">x</button>
        <div id="review-form-container">
            <h3 id="add-review-header" class="pl-4">Add Review</h3>
            <form id="review-form">

                <div class="p-0">
                    <!-- <label>Rating</label>-->
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" onkeydown="navRadioGroup(event)" onfocus="setFocus(event)" required="">
                        <label for="star5" title="5 stars">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" onkeydown="navRadioGroup(event)">
                        <label for="star4" title="4 stars">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" onkeydown="navRadioGroup(event)">
                        <label for="star3" title="3 stars">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" onkeydown="navRadioGroup(event)">
                        <label for="star2" title="2 stars">2 stars</label>
                        <input type="radio" id="star1" name="https://codepen.io/pen/rate" value="1" onkeydown="navRadioGroup(event)" onfocus="setFocus(event)">
                        <label for="star1" title="1 star">1 star</label>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="reviewComments">Comments</label>
                    <textarea name="reviewComments" id="reviewComments" cols="20" rows="5" required="" class="form-control"></textarea>
                </div>
                <div class="btn-small">
                    <button id="submit-review-btn" class="small-btn mb-0">Save</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-overlay"></div>




    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Wow JS -->
    <script src="js/Wow/wow.min.js"></script>

    <!-- Custome JS -->
    <script src="js/script.js"></script>
    <!--  <script>
        $(document).ready(function() {

            /* 1. Visualizing things on Hover - See next part for action on click */
            $('#stars li').on('mouseover', function() {
                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                $(this).parent().children('li.star').each(function(e) {
                    if (e < onStar) {
                        $(this).addClass('hover');
                    } else {
                        $(this).removeClass('hover');
                    }
                });

            }).on('mouseout', function() {
                $(this).parent().children('li.star').each(function(e) {
                    $(this).removeClass('hover');
                });
            });


            /* 2. Action to perform on click */
            $('#stars li').on('click', function() {
                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                var stars = $(this).parent().children('li.star');

                for (i = 0; i < stars.length; i++) {
                    $(stars[i]).removeClass('selected');
                }

                for (i = 0; i < onStar; i++) {
                    $(stars[i]).addClass('selected');
                }

                // JUST RESPONSE (Not needed)
                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                var msg = "";
                if (ratingValue > 1) {
                    msg = "Thanks! You rated this " + ratingValue + " stars.";
                } else {
                    msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
                }
                responseMessage(msg);

            });


        });


        function responseMessage(msg) {
            $('.success-box').fadeIn(200);
            $('.success-box div.text-message').html("<span>" + msg + "</span>");
        }

    </script>-->
    <script>
        let focusedElementBeforeModal;
        const modal = document.getElementById('modal');
        const modalOverlay = document.querySelector('.modal-overlay');

        window.onload = () => {
            const addReview = document.getElementById('review-add-btn');
            addReview.id = 'review-add-btn';
            addReview.innerHTML = '+';
            addReview.setAttribute('aria-label', 'add review');
            addReview.title = 'Add Review';
            addReview.addEventListener('click', openModal);
            addReview.click();
        }

        const openModal = () => {
            // Save current focus
            focusedElementBeforeModal = document.activeElement;

            // Listen for and trap the keyboard
            modal.addEventListener('keydown', trapTabKey);

            // Listen for indicators to close the modal
            modalOverlay.addEventListener('click', closeModal);
            // Close btn
            const closeBtn = document.querySelector('.close-btn');
            closeBtn.addEventListener('click', closeModal);

            // submit form
            const form = document.getElementById('review-form');
            form.addEventListener('submit', submitAddReview, false);

            // Find all focusable children
            var focusableElementsString = 'a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex="0"], [contenteditable]';
            var focusableElements = modal.querySelectorAll(focusableElementsString);
            // Convert NodeList to Array
            focusableElements = Array.prototype.slice.call(focusableElements);

            var firstTabStop = focusableElements[0];
            var lastTabStop = focusableElements[focusableElements.length - 1];

            // Show the modal and overlay
            modal.classList.add('show');
            modalOverlay.classList.add('show');

            // Focus first child
            // firstTabStop.focus();
            const reviewName = document.getElementById('reviewName');
            reviewName.focus();

            function trapTabKey(e) {
                // Check for TAB key press
                if (e.keyCode === 9) {

                    // SHIFT + TAB
                    if (e.shiftKey) {
                        if (document.activeElement === firstTabStop) {
                            e.preventDefault();
                            lastTabStop.focus();
                        }

                        // TAB
                    } else {
                        if (document.activeElement === lastTabStop) {
                            e.preventDefault();
                            firstTabStop.focus();
                        }
                    }
                }

                // ESCAPE
                if (e.keyCode === 27) {
                    closeModal();
                }
            }
        };

        const submitAddReview = (e) => {
            // console.log(e);
            console.log('Form subbmitted!');
            e.preventDefault();
            closeModal();
        };

        const closeModal = () => {
            // Hide the modal and overlay
            modal.classList.remove('show');
            modalOverlay.classList.remove('show');

            const form = document.getElementById('review-form');
            form.reset();
            // Set focus back to element that had it before the modal was opened
            focusedElementBeforeModal.focus();
        };

        const setFocus = (evt) => {
            const rateRadios = document.getElementsByName('rate');
            const rateRadiosArr = Array.from(rateRadios);
            const anyChecked = rateRadiosArr.some(radio => {
                return radio.checked === true;
            });
            // console.log('anyChecked', anyChecked);
            if (!anyChecked) {
                const star1 = document.getElementById('star1');
                star1.focus();
                // star1.checked = true;
            }
        };

        const navRadioGroup = (evt) => {
            // console.log('key', evt.key, 'code', evt.code, 'which', evt.which);
            // console.log(evt);

            const star1 = document.getElementById('star1');
            const star2 = document.getElementById('star2');
            const star3 = document.getElementById('star3');
            const star4 = document.getElementById('star4');
            const star5 = document.getElementById('star5');

            if (['ArrowRight', 'ArrowLeft', 'ArrowDown', 'ArrowUp'].includes(evt.key)) {
                evt.preventDefault();
                // console.log('attempting return');
                if (evt.key === 'ArrowRight' || evt.key === 'ArrowDown') {
                    switch (evt.target.id) {
                        case 'star1':
                            star2.focus();
                            star2.checked = true;
                            break;
                        case 'star2':
                            star3.focus();
                            star3.checked = true;
                            break;
                        case 'star3':
                            star4.focus();
                            star4.checked = true;
                            break;
                        case 'star4':
                            star5.focus();
                            star5.checked = true;
                            break;
                        case 'star5':
                            star1.focus();
                            star1.checked = true;
                            break;
                    }
                } else if (evt.key === 'ArrowLeft' || evt.key === 'ArrowUp') {
                    switch (evt.target.id) {
                        case 'star1':
                            star5.focus();
                            star5.checked = true;
                            break;
                        case 'star2':
                            star1.focus();
                            star1.checked = true;
                            break;
                        case 'star3':
                            star2.focus();
                            star2.checked = true;
                            break;
                        case 'star4':
                            star3.focus();
                            star3.checked = true;
                            break;
                        case 'star5':
                            star4.focus();
                            star4.checked = true;
                            break;
                    }
                }
            }
        };

    </script>


</body>

</html>
