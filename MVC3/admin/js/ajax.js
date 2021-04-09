$(document).ready(function () {
	 var data = {};
    load_data(data);

    function load_data(query) {
        $.ajax({
            url: "process/memberBack.php",
            method: "POST",
            data: {
                query: query
            },
            success: function (data) {
                $('#load-item-here').html(data);
            }
        });

    }
	 $('.searchMeInTabletxt').on('keyup', function () {

        var value = $(this).val();
        var name = $(this).attr('name');
        var i = {};
        $('.searchMeInTable').prop('selectedIndex', 0);

        i[name] = value;
        var json1 = JSON.stringify(i);
        console.log(json1);
        load_data(json1);

    });
    $(document).on('click', '#load-item-here .page-number', function () {
        var id = $(this).attr('id');
        var pre = $("#load-item-here .page-number.active").attr('id');
        id = id + ',' + pre;
        $.ajax({
            url: "process/searchBack.php",
            method: "GET",
            data: {
                page: id
            },
            success: function (data) {
                $('#load-item-here').html(data);
            }
        });
        return false;
    });
});