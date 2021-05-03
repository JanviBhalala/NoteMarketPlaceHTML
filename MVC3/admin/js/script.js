/*=============================================================
|   |   |   |   |   |   Toggle Password
==============================================================*/
$(".toggle-password").click(function () {

	/*  var input = $(".password-toggle");
	  if (input.attr("type") == "password") {
	      input.attr("type", "text");
	  } else {
	      input.attr("type", "password");
	  }*/

	var selectInput = $(this).closest(".form-group").find("input");
	if ($(selectInput).attr("type") == "password") {
		$(selectInput).attr("type", "text");
	} else {
		$(selectInput).attr("type", "password");
	}
});
/*=============================================================
|   |   |   |   |   |   validations
==============================================================*/

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
$("form[name='my_profile']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
			fname:true,
			lname:true,
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            email2: {
                required: true,
				 email: true
            },
			phone_number:true,
			profile_pic:true
        },
        // Specify validation error messages
        messages: {
			fname:"Please enter first name",
			lname:"Please enter last name",
            email2: "Please enter a valid email address",
            email: "Please enter a valid email address",
			phone_number:"Please enter a mobile number",
			profile_pic:"Please upload a profile picture."
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            form.submit();

        }

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
|   |   |   |   |   |   Animation
==============================================================*/
// Animate on scroll
$(function () {
	new WOW().init();
});
/*=============================================================
|   |   |   |   |   |   Search in table
==============================================================*/
$(document).ready(function () {

	paginationSearching(".table-container-row5", ".searchMeTable", ".table-container-row5 table.paginated", 5);

	function paginationSearching(container, search, table, count) {

		$(search).on("keyup", function () {
			$(table).trigger('repaginate');
		})


		$(table).each(function () {

			var currentPage = 0;
			var numPerPage = count;
			var $table = $(this);
			var $pager = $('<div class="pager"></div>');
			var $previous = $('<span class="previous"><</spnan>');
			var $next = $('<span class="next">></spnan>');


			$pager.insertAfter($table).find('span.page-number:first').addClass('active');

			$table.bind('repaginate', function () {
				$table.find('tbody tr').hide();

				$filteredRows = $table.find('tbody tr').filter(function (i, tr) {
					return $(search).val() != "" ? $(tr).find("td").get().map(function (td) {
						return $(td).text();
					}).filter(function (td) {
						return td.indexOf($(search).val()) != -1;
					}).length > 0 : true;
				});

				$filteredRows.slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();

				var numRows = $filteredRows.length;
				var numPages = Math.ceil(numRows / numPerPage);

				$pager.find('.page-number, .previous, .next').remove();
				for (var page = 0; page < numPages; page++) {
					var $newPage = $('<span class="page-number"></span>').text(page + 1).bind('click', {
						newPage: page
					}, function (event) {
						currentPage = event.data['newPage'];
						$table.trigger('repaginate');
					})
					if (page == currentPage) {
						$newPage.addClass('clickable active');
					} else {
						$newPage.addClass('clickable');
					}
					$newPage.appendTo($pager)
				}

				var i = container + " span.page-number:first";
				var a = container + " span.page-number:last"
				$previous.insertBefore(i);
				$next.insertAfter(a);

				$next.click(function (e) {
					$previous.addClass('clickable');
					$pager.find('.active').next('.page-number.clickable').click();
				});
				$previous.click(function (e) {
					$next.addClass('clickable');
					$pager.find('.active').prev('.page-number.clickable').click();
				});

				$next.addClass('clickable');
				$previous.addClass('clickable');

				setTimeout(function () {
					var $active = $pager.find('.page-number.active');
					if ($active.next('.page-number.clickable').length === 0) {
						$next.removeClass('clickable');
					} else if ($active.prev('.page-number.clickable').length === 0) {
						$previous.removeClass('clickable');
					}
				});
			});
			$table.trigger('repaginate');
		});
	}


});
/*=============================================================
|   |   |   |   |   |   Load Member
==============================================================*/
$("#members").ready(function () {
	//modal two
	$(document).on('click', "#members .deactivate_member", function () {

		var id = $(this).attr('id');

		// Save current focus
		focusedElementBeforeModal = document.activeElement;

		// Close btn	
		$("#members .close-btn1").on('click', function () {
			$('#members #modal1').removeClass('show');
			$('#members .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});

		$("#members #cencle-remark-btn").on('click', function () {
			$('#members #modal1').removeClass('show');
			$('#members .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});


		$('#members .noteRemarkId').attr('value', id);

		// submit form
		$("#members #remark-form").on('submit', function () {
			var that = $(this),
				data = {};


			that.find('[name]').each(function () {
				var that = $(this);
				name = that.attr('name');
				value = that.val();
				data[name] = value;
			});
			$.ajax({
				url: "process/deactivateUser.php",
				type: "POST",
				data: data,
				success: function (response) {
					console.log(response);

					$('#members #modal1').removeClass('show');
					$('#members .modal-overlay').removeClass('show');
					alert(response);
					location.reload(true);
					focusedElementBeforeModal.focus();
				}


			});
			return false;
		});
		// Show the modal and overlay
		$('#members #modal1').addClass('show');
		$('#members .modal-overlay').addClass('show');
	});
});
/*=============================================================
|   |   |   |   |   |   Load Dashboard
==============================================================*/
$("#Admin-dashboard").ready(function () {
	var data = {};
	load_data(data);

	function load_data(query) {
		$.ajax({
			url: "process/dashboardBack.php",
			method: "POST",
			data: {
				query: query
			},
			success: function (data) {
				$('#Admin-dashboard .load-item-here ').html(data);
			}
		});

	}
	$('#Admin-dashboard .searchMeInTable').change(function () {

		var value = $(this).children("option:selected").val();
		var index = $(this).children("option:selected").index();
		var name = $(this).attr('name');
		// var data={name:value};
		var i = {};
		$('#Admin-dashboard .searchMeInTable').prop('selectedIndex', 0);
		$(this).prop('selectedIndex', index);

		i[name] = value;
		var json1 = JSON.stringify(i);
		console.log(json1);
		load_data(json1);

	});
	$('#Admin-dashboard .searchMeInTabletxt').on('keyup', function () {

		var value = $(this).val();
		var name = $(this).attr('name');
		var i = {};
		$('#Admin-dashboard .searchMeInTable').prop('selectedIndex', 0);

		i[name] = value;
		var json1 = JSON.stringify(i);
		console.log(json1);
		load_data(json1);

	});
	$(document).on('click', '#Admin-dashboard .load-item-here .page-number', function () {
		var id = $(this).attr('id');
		var pre = $("#Admin-dashboard .load-item-here  .page-number.active").attr('id');
		id = id + ',' + pre;
		$.ajax({
			url: "process/dashboardBack.php",
			method: "GET",
			data: {
				page: id
			},
			success: function (data) {
				$('#Admin-dashboard .load-item-here').html(data);
			}
		});
		return false;
	});
	$(document).on('click', '#Admin-dashboard .note_title', function () {
		var id = $(this).attr('id');
		var s = "notes-detail.php?note_id=" + id;
		window.location.replace(s);
	});


	//modal two
	$(document).on('click', "#Admin-dashboard .remark-btn-add", function () {

		var id = $(this).attr('id');
		// Save current focus
		focusedElementBeforeModal = document.activeElement;
		// Close btn	
		$("#Admin-dashboard .close-btn1").on('click', function () {
			$('#Admin-dashboard #modal1').removeClass('show');
			$('#Admin-dashboard .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});
		$("#Admin-dashboard #cencle-remark-btn").on('click', function () {
			$('#Admin-dashboard #modal1').removeClass('show');
			$('#Admin-dashboard .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});

		$('#Admin-dashboard .noteRemarkId').attr('value', id);
		// submit form
		$("#Admin-dashboard #remark-form").on('submit', function () {
			var that = $(this),
				data = {};


			that.find('[name]').each(function () {
				var that = $(this);
				name = that.attr('name');
				value = that.val();
				data[name] = value;
			});
			$.ajax({
				url: "process/unpublish.php",
				type: "POST",
				data: data,
				success: function (response) {
					console.log(response);
					var data = {};
					load_data(data);
					$('#Admin-dashboard #modal1').removeClass('show');
					$('#Admin-dashboard .modal-overlay').removeClass('show');

					focusedElementBeforeModal.focus();
				}


			});
			return false;
		});
		// Show the modal and overlay
		$('#Admin-dashboard #modal1').addClass('show');
		$('#Admin-dashboard .modal-overlay').addClass('show');
	});
});
/*=============================================================
|   |   |   |   |   |   Rejected Notes Dashboard
==============================================================*/
$("#rejected-notes").ready(function () {
	var data = {};
	load_data(data);

	function load_data(query) {
		$.ajax({
			url: "process/rejectedNotes.php",
			method: "POST",
			data: {
				query: query
			},
			success: function (data) {
				$('#rejected-notes .load-item-here ').html(data);
			}
		});

	}
	$('#rejected-notes .searchMeInTable').change(function () {

		var value = $(this).children("option:selected").val();
		var index = $(this).children("option:selected").index();
		var name = $(this).attr('name');
		// var data={name:value};
		var i = {};
		$('#rejected-notes .searchMeInTable').prop('selectedIndex', 0);
		$(this).prop('selectedIndex', index);

		i[name] = value;
		var json1 = JSON.stringify(i);
		//console.log(json1);
		load_data(json1);

	});
	$('#rejected-notes .searchMeInTabletxt').on('keyup', function () {

		var value = $(this).val();
		var name = $(this).attr('name');
		var i = {};
		$('#rejected-notes .searchMeInTable').prop('selectedIndex', 0);

		i[name] = value;
		var json1 = JSON.stringify(i);
		console.log(json1);
		load_data(json1);

	});
	$(document).on('click', '#rejected-notes .load-item-here .page-number', function () {
		var id = $(this).attr('id');
		var pre = $("#Admin-dashboard .load-item-here  .page-number.active").attr('id');
		id = id + ',' + pre;
		$.ajax({
			url: "process/rejectedNotes.php",
			method: "GET",
			data: {
				page: id
			},
			success: function (data) {
				$('#rejected-notes .load-item-here').html(data);
			}
		});
		return false;
	});

	$(document).on('click', '#rejected-notes .note_title', function () {
		var id = $(this).attr('id');
		var s = "notes-detail.php?note_id=" + id;
		window.location.replace(s);
	});
	$(document).on('click', '#rejected-notes .view_seller', function () {
		var id = $(this).attr('id');
		var s = "member-detail.php?user_id=" + id;
		window.location.replace(s);
	});

	//modal two
	$(document).on('click', "#rejected-notes .remark-btn-add", function () {

		var id = $(this).attr('id');
		// Save current focus
		focusedElementBeforeModal = document.activeElement;
		// Close btn	
		$("#rejected-notes .close-btn1").on('click', function () {
			$('#rejected-notes #modal1').removeClass('show');
			$('#rejected-notes .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});
		$("#rejected-notes #cencle-remark-btn").on('click', function () {
			$('#rejected-notes #modal1').removeClass('show');
			$('#rejected-notes .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});

		$('#rejected-notes .noteRemarkId').attr('value', id);
		// submit form
		$("#rejected-notes #remark-form").on('submit', function () {
			var that = $(this),
				data = {};


			that.find('[name]').each(function () {
				var that = $(this);
				name = that.attr('name');
				value = that.val();
				data[name] = value;
			});
			$.ajax({
				url: "process/approveBook.php",
				type: "POST",
				data: data,
				success: function (response) {
					console.log(response);
					var data = {};
					load_data(data);
					$('#rejected-notes #modal1').removeClass('show');
					$('#rejected-notes .modal-overlay').removeClass('show');

					focusedElementBeforeModal.focus();
				}


			});
			return false;
		});
		// Show the modal and overlay
		$('#rejected-notes #modal1').addClass('show');
		$('#rejected-notes .modal-overlay').addClass('show');
	});
});
/*=============================================================
|   |   |   |   |   |   Load Published Note
==============================================================*/
$("#published-notes").ready(function () {
	var data = {};
	load_data(data);

	function load_data(query) {
		$.ajax({
			url: "process/dashboardBack.php",
			method: "POST",
			data: {
				query: query
			},
			success: function (data) {
				$('#published-notes .load-item-here ').html(data);
			}
		});

	}
	$('#published-notes .searchMeInTable').change(function () {

		var value = $(this).children("option:selected").val();
		var index = $(this).children("option:selected").index();
		var name = $(this).attr('name');
		// var data={name:value};
		var i = {};
		$('#published-notes .searchMeInTable').prop('selectedIndex', 0);
		$(this).prop('selectedIndex', index);

		i[name] = value;
		var json1 = JSON.stringify(i);
		//console.log(json1);
		load_data(json1);

	});
	$('#published-notes .searchMeInTabletxt').on('keyup', function () {

		var value = $(this).val();
		var name = $(this).attr('name');
		var i = {};
		$('#published-notes .searchMeInTable').prop('selectedIndex', 0);

		i[name] = value;
		var json1 = JSON.stringify(i);
		console.log(json1);
		load_data(json1);

	});
	$(document).on('click', '#published-notes .load-item-here .page-number', function () {
		var id = $(this).attr('id');
		var pre = $("#published-notes .load-item-here  .page-number.active").attr('id');
		id = id + ',' + pre;
		$.ajax({
			url: "process/dashboardBack.php",
			method: "GET",
			data: {
				page: id
			},
			success: function (data) {
				$('#published-notes .load-item-here').html(data);
			}
		});
		return false;
	});

	$(document).on('click', '#published-notes .note_title', function () {
		var id = $(this).attr('id');
		var s = "notes-detail.php?note_id=" + id;
		window.location.replace(s);
	});
	//modal two
	$(document).on('click', "#published-notes .remark-btn-add", function () {

		var id = $(this).attr('id');
		// Save current focus
		focusedElementBeforeModal = document.activeElement;
		// Close btn	
		$("#published-notes .close-btn1").on('click', function () {
			$('#published-notes #modal1').removeClass('show');
			$('#published-notes .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});
		$("#published-notes #cencle-remark-btn").on('click', function () {
			$('#published-notes #modal1').removeClass('show');
			$('#published-notes .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});

		$('#published-notes .noteRemarkId').attr('value', id);
		// submit form
		$("#published-notes #remark-form").on('submit', function () {
			var that = $(this),
				data = {};


			that.find('[name]').each(function () {
				var that = $(this);
				name = that.attr('name');
				value = that.val();
				data[name] = value;
			});
			$.ajax({
				url: "process/unpublish.php",
				type: "POST",
				data: data,
				success: function (response) {
					console.log(response);
					var data = {};
					load_data(data);
					$('#published-notes #modal1').removeClass('show');
					$('#published-notes .modal-overlay').removeClass('show');

					focusedElementBeforeModal.focus();
				}


			});
			return false;
		});
		// Show the modal and overlay
		$('#published-notes #modal1').addClass('show');
		$('#published-notes .modal-overlay').addClass('show');
	});


});
/*=============================================================
|   |   |   |   |   |   Load Downloaded Note
==============================================================*/
$("#downloaded-notes").ready(function () {
	var data = {};
	load_data(data);

	function load_data(query) {
		$.ajax({
			url: "process/downloadedNotes.php",
			method: "POST",
			data: {
				query: query
			},
			success: function (data) {
				$('#downloaded-notes .load-item-here ').html(data);
			}
		});

	}
	$('#downloaded-notes .searchMeInTable').change(function () {

		var value = $(this).children("option:selected").val();
		var index = $(this).children("option:selected").index();
		var name = $(this).attr('name');
		// var data={name:value};
		var i = {};
		$('#downloaded-notes .searchMeInTable').prop('selectedIndex', 0);
		$(this).prop('selectedIndex', index);

		i[name] = value;
		var json1 = JSON.stringify(i);
		//console.log(json1);
		load_data(json1);

	});
	$('#downloaded-notes .searchMeInTabletxt').on('keyup', function () {

		var value = $(this).val();
		var name = $(this).attr('name');
		var i = {};
		$('#downloaded-notes .searchMeInTable').prop('selectedIndex', 0);

		i[name] = value;
		var json1 = JSON.stringify(i);
		console.log(json1);
		load_data(json1);

	});
	$(document).on('click', '#downloaded-notes .load-item-here .page-number', function () {
		var id = $(this).attr('id');
		var pre = $("#downloaded-notes .load-item-here  .page-number.active").attr('id');
		id = id + ',' + pre;
		$.ajax({
			url: "process/downloadedNotes.php",
			method: "GET",
			data: {
				page: id
			},
			success: function (data) {
				$('#downloaded-notes .load-item-here').html(data);
			}
		});
		return false;
	});
	$(document).on('click', '#downloaded-notes .note_title', function () {
		var id = $(this).attr('id');
		var s = "notes-detail.php?note_id=" + id;
		window.location.replace(s);
	});
	$(document).on('click', '#downloaded-notes .view_seller', function () {
		var id = $(this).attr('id');
		var s = "member-detail.php?user_id=" + id;
		window.location.replace(s);
	});
	$(document).on('click', '#downloaded-notes .view_buyer', function () {
		var id = $(this).attr('id');
		var s = "member-detail.php?user_id=" + id;
		window.location.replace(s);
	});
});
/*=============================================================
|   |   |   |   |   |   Load Notes Under Review
==============================================================*/
$("#notes-under-review").ready(function () {
	var data = {};
	load_data(data);

	function load_data(query) {
		$.ajax({
			url: "process/notesUnderReview.php",
			method: "POST",
			data: {
				query: query
			},
			success: function (data) {
				$('#notes-under-review .load-item-here ').html(data);
			}
		});

	}
	$('#notes-under-review .searchMeInTable').change(function () {

		var value = $(this).children("option:selected").val();
		var index = $(this).children("option:selected").index();
		var name = $(this).attr('name');
		// var data={name:value};
		var i = {};
		$('#notes-under-review .searchMeInTable').prop('selectedIndex', 0);
		$(this).prop('selectedIndex', index);

		i[name] = value;
		var json1 = JSON.stringify(i);
		//console.log(json1);
		load_data(json1);

	});
	$('#notes-under-review .searchMeInTabletxt').on('keyup', function () {

		var value = $(this).val();
		var name = $(this).attr('name');
		var i = {};
		$('#notes-under-review .searchMeInTable').prop('selectedIndex', 0);

		i[name] = value;
		var json1 = JSON.stringify(i);
		console.log(json1);
		load_data(json1);

	});
	$(document).on('click', '#notes-under-review .load-item-here .page-number', function () {
		var id = $(this).attr('id');
		var pre = $("#notes-under-review .load-item-here  .page-number.active").attr('id');
		id = id + ',' + pre;
		$.ajax({
			url: "process/notesUnderReview.php",
			method: "GET",
			data: {
				page: id
			},
			success: function (data) {
				$('#notes-under-review .load-item-here').html(data);
			}
		});
		return false;
	});
	$(document).on('click', '#notes-under-review .note_title', function () {
		var id = $(this).attr('id');
		var s = "notes-detail.php?note_id=" + id;
		window.location.replace(s);
	});
	$(document).on('click', '#notes-under-review .view_seller', function () {
		var id = $(this).attr('id');
		var s = "member-detail.php?user_id=" + id;
		window.location.replace(s);
	});
	
	//modal to make submitted in review
	
	$(document).on('click', "#notes-under-review .submitted-to-review", function () {
		var id = $(this).attr('id');
		// Save current focus
		focusedElementBeforeModal = document.activeElement;
		// Close btn	
		$("#notes-under-review #approveNote  .close-btn1").on('click', function () {
			$('#notes-under-review #approveNote  #modal1').removeClass('show');
			$('#notes-under-review #approveNote  .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});
		$("#notes-under-review #approveNote  #cencle-remark-btn").on('click', function () {
			$('#notes-under-review #approveNote  #modal1').removeClass('show');
			$('#notes-under-review #approveNote .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});
		$('#notes-under-review #approveNote #add-remark-header.headingHere').html("Mark Under Review");
		$('#notes-under-review #approveNote .noteRemarkId').attr('value', id);
		// submit form
		$("#notes-under-review #approveNote #remark-form").on('submit', function () {
			var that = $(this),
				data = {};


			that.find('[name]').each(function () {
				var that = $(this);
				name = that.attr('name');
				value = that.val();
				data[name] = value;
			});
			$.ajax({
				url: "process/submittedToReview.php",
				type: "POST",
				data: data,
				success: function (response) {
					console.log(response);
					var data = {};
					load_data(data);
					$('#notes-under-review #approveNote  #modal1').removeClass('show');
					$('#notes-under-review #approveNote  .modal-overlay').removeClass('show');

					focusedElementBeforeModal.focus();
				}


			});
			return false;
		});
		// Show the modal and overlay
		$('#notes-under-review #approveNote  #modal1').addClass('show');
		$('#notes-under-review #approveNote .modal-overlay').addClass('show');
	});
	
	//modal to approve
	$(document).on('click', "#notes-under-review .approve-note", function () {

		var id = $(this).attr('id');
		// Save current focus
		focusedElementBeforeModal = document.activeElement;
		// Close btn	
		$("#notes-under-review #approveNote  .close-btn1").on('click', function () {
			$('#notes-under-review #approveNote  #modal1').removeClass('show');
			$('#notes-under-review #approveNote  .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});
		$("#notes-under-review #approveNote  #cencle-remark-btn").on('click', function () {
			$('#notes-under-review #approveNote  #modal1').removeClass('show');
			$('#notes-under-review #approveNote .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});

		$('#notes-under-review #approveNote .noteRemarkId').attr('value', id);
		// submit form
		$("#notes-under-review #approveNote #remark-form").on('submit', function () {
			var that = $(this),
				data = {};


			that.find('[name]').each(function () {
				var that = $(this);
				name = that.attr('name');
				value = that.val();
				data[name] = value;
			});
			$.ajax({
				url: "process/approveBook.php",
				type: "POST",
				data: data,
				success: function (response) {
					console.log(response);
					var data = {};
					load_data(data);
					$('#notes-under-review #approveNote  #modal1').removeClass('show');
					$('#notes-under-review #approveNote  .modal-overlay').removeClass('show');

					focusedElementBeforeModal.focus();
				}


			});
			return false;
		});
		// Show the modal and overlay
		$('#notes-under-review #approveNote  #modal1').addClass('show');
		$('#notes-under-review #approveNote .modal-overlay').addClass('show');
	});
	//modal to Reject
	
	$(document).on('click', "#notes-under-review .reject-note", function () {

		var id = $(this).attr('id');
		// Save current focus
		focusedElementBeforeModal = document.activeElement;
		// Close btn	
		$("#notes-under-review #rejectNote  .close-btn1").on('click', function () {
			$('#notes-under-review #rejectNote  #modal1').removeClass('show');
			$('#notes-under-review #rejectNote  .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});
		$("#notes-under-review #rejectNote  #cencle-remark-btn").on('click', function () {
			$('#notes-under-review #rejectNotee  #modal1').removeClass('show');
			$('#notes-under-review #rejectNote .modal-overlay').removeClass('show');

			// Set focus back to element that had it before the modal was opened
			focusedElementBeforeModal.focus();
		});

		$('#notes-under-review #rejectNote .noteRemarkId').attr('value', id);
		// submit form
		$("#notes-under-review #rejectNote #remark-form").on('submit', function () {
			var that = $(this),
				data = {};


			that.find('[name]').each(function () {
				var that = $(this);
				name = that.attr('name');
				value = that.val();
				data[name] = value;
			});
			$.ajax({
				url: "process/unpublish.php",
				type: "POST",
				data: data,
				success: function (response) {
					console.log(response);
					var data = {};
					load_data(data);
					$('#notes-under-review #rejectNote  #modal1').removeClass('show');
					$('#notes-under-review #rejectNote  .modal-overlay').removeClass('show');

					focusedElementBeforeModal.focus();
				}


			});
			return false;
		});
		// Show the modal and overlay
		$('#notes-under-review #rejectNote  #modal1').addClass('show');
		$('#notes-under-review #rejectNote .modal-overlay').addClass('show');
	});
});
