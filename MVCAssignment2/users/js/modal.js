
$(document).ready(function () {
        let focusedElementBeforeModal;
        const modal = document.getElementById('modal');
        const modal1 = document.getElementById('modal1');
        const modalOverlay = document.querySelector('.modal-overlay');

        
            //$(".review-btn-add").attr('aria-label', 'add review');
            $(".review-btn-add").click(function () {
                var id = $(this).attr('id');
                openModal(id);
            });

            //modal two
            $(".remark-btn-add").click(function () {
                var id = $(this).attr('id');
                openModal1(id);
            });
  /*  
    $(".btn-download-note").click(function () {
                var id = $(this).attr('id');
                openModal2(id);
            });
        */

        const openModal = (id) => {
            // Save current focus
            focusedElementBeforeModal = document.activeElement;

            // Listen for and trap the keyboard
            // modal.addEventListener('keydown', trapTabKey);

            // Listen for indicators to close the modal
            modalOverlay.addEventListener('click', closeModal);
            // Close btn
            const closeBtn = document.querySelector('.close-btn');
            closeBtn.addEventListener('click', closeModal);
            $(".starRate").on('click', function () {
                $(this).attr('checked', true);
                const r = $(this).val();
                $('#rate1').attr("value", r);
                $('.noteReviewId').attr('value', id);
            });

            // submit form
            $("#review-form").on('submit', function () {
                var that = $(this),
                    url = that.attr('action'),
                    type = that.attr('method'),
                    data = {};

                that.find('[name]').each(function () {
                    var that = $(this);
                    name = that.attr('name');
                    value = that.val();

                    data[name] = value;
                });
                // data['rate1']=r;

                $.ajax({
                    url: url,
                    type: type,
                    data: data,
                    success: function (response) {
                        //alert(response);
                        console.log(response);
                        alert(response);
                        closeModal();
                    }


                });
                return false;
            });



            // Show the modal and overlay
            modal.classList.add('show');
            modalOverlay.classList.add('show');


        };

        // Modal One

        const openModal1 = (id) => {
            // Save current focus
            focusedElementBeforeModal = document.activeElement;

            // Listen for indicators to close the modal
            modalOverlay.addEventListener('click', closeModal);
            
            // Close btn
            const closeBtn = document.querySelector('.close-btn1');
            closeBtn.addEventListener('click', closeModal);
            $('.noteRemarkId').attr('value', id);
            // submit form
            $("#remark-form").on('submit', function () {
                var that = $(this),
                    url = that.attr('action'),
                    type = that.attr('method'),
                    data = {};

                that.find('[name]').each(function () {
                    var that = $(this);
                    name = that.attr('name');
                    value = that.val();

                    data[name] = value;
                });

                $.ajax({
                    url: url,
                    type: type,
                    data: data,
                    success: function (response) {
                        console.log(response);
                        alert(response);
                        closeModal();
                    }


                });
                return false;
            });
            // Show the modal and overlay
            $('#modal1').addClass('show');
            modalOverlay.classList.add('show');
        };
    
     // Modal Tow

        const openModal2 = (id) => {
            // Save current focus
            focusedElementBeforeModal = document.activeElement;

            // Listen for indicators to close the modal
            modalOverlay.addEventListener('click', closeModal);
            
            // Close btn
            const closeBtn = document.querySelector('.close-btn1');
            closeBtn.addEventListener('click', closeModal);
            // Show the modal and overlay
            $('#modal2').addClass('show');
            modalOverlay.classList.add('show');
        };

        const closeModal = () => {
            // Hide the modal and overlay
            modal.classList.remove('show');
            // modal1.classList.remove('show');
            $('#modal1').removeClass('show');
            modalOverlay.classList.remove('show');
            
             $('#modal2').removeClass('show');
            modalOverlay.classList.remove('show');

            const form = document.getElementById('review-form');
            form.reset();
            const form1 = document.getElementById('remark-form');
            form1.reset();
            // Set focus back to element that had it before the modal was opened
            focusedElementBeforeModal.focus();
        };

});
