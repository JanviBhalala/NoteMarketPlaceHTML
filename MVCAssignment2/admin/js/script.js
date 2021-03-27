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
|   |   |   |   |   |   Tables
==============================================================*/

$(document).ready(function () {

    myTable(5,"#table-container1");
    myTable(5,"#table-container2");
    myTable(5,".table-container-row5");
    myTable(10,".table-container-row10");
    
    /* ---------------------Function----------------------*/
    function myTable(maXRowNum , className) {
         var pagination=className + " .pagination-wrapper";
        $(pagination).html('')
        var tnum = 0;
        var maxRow = maXRowNum;
        var tr=className + " .my-tables tbody tr";
        var tbody=className + " .my-tables tbody";
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
           
            var li=className + " .pagination-wrapper li";
            var pagenum = Math.ceil(totalRow / maxRow)
            $(pagination).append('<li data-page="' + "back" + '"><span>' + "<" + '<span class="sr-only">(current)</span></span></li>').show()
            for (var i = 1; i <= pagenum; i++) {
                $(pagination).append('<li data-page="' + i + '"><span>' + i + '<span class="sr-only">(current)</span></span></li>').show()

            }
            $(pagination).append('<li data-page="' + "next" + '"><span>' + ">" + '<span class="sr-only">(current)</span></span></li>').show()
            $(li).addClass('text-center')
            $(li).addClass('page-number')


        }
        var secondChild=className + " .pagination-wrapper li:nth-child(2)";
        var liNumber =className + " .pagination-wrapper .page-number";
        $(secondChild).addClass('active')
        $(liNumber).on('click', function () {
            var pagenum = $(this).attr('data-page')
            var trindex = 0
            $(li).removeClass('active')
            $(this).addClass('active')
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
        $(className+ '.pagination-wrapper li:nth-child(1)').on('click', function () {


        })

    }

});
/*--------------------Navigations-------------------------------*/


/*
$(function () {
  var includes = $('[data-include]')
  $.each(includes, function () {
    var file = 'views/' + $(this).data('include') + '.html'
    $(this).load(file)
  })
})*/
/*=============================================================
|   |   |   |   |   |   Animation
==============================================================*/
// Animate on scroll
$(function () {
    new WOW().init();
});
