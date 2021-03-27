/*=============================================================
|   |   |   |   |   |   Search in table
==============================================================*/
 $(document).ready(function() {

        paginationSearching(".table-container-row10",".searchMeTable",".table-container-row10 table.paginated",10);
    
     $("#table-container1").load("../dashboard.php", function () {
         paginationSearching("#table-container1","#searchMeTable1","#table-container1 table.paginated1",5);
     });
     $("#table-container2").load("../dashboard.php", function () {
            paginationSearching("#table-container2","#searchMeTable2","#table-container2 table.paginated2",5);
     });
     
          
            function paginationSearching(container,search,table,count) {
               
                $(search).on("keyup", function() {
                    $(table).trigger('repaginate');
                    
                })
                

                $(table).each(function() {
                    
                    var currentPage = 0;
                    var numPerPage = count;
                    var $table = $(this);
                    var $pager = $('<div class="pager"></div>');
                    var $previous = $('<span class="previous"><</spnan>');
                    var $next = $('<span class="next">></spnan>');
                    

                    $pager.insertAfter($table).find('span.page-number:first').addClass('active');

                    $table.bind('repaginate', function() {
                        $table.find('tbody tr').hide();

                        $filteredRows = $table.find('tbody tr').filter(function(i, tr) {
                            return $(search).val() != "" ? $(tr).find("td").get().map(function(td) {
                                return $(td).text();
                            }).filter(function(td) {
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
                            }, function(event) {
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
                        
                        var i=container + " span.page-number:first";
                        var a=container + " span.page-number:last"
                        $previous.insertBefore(i);
                        $next.insertAfter(a);

                        $next.click(function(e) {
                            $previous.addClass('clickable');
                            $pager.find('.active').next('.page-number.clickable').click();
                        });
                        $previous.click(function(e) {
                            $next.addClass('clickable');
                            $pager.find('.active').prev('.page-number.clickable').click();
                        });

                        $next.addClass('clickable');
                        $previous.addClass('clickable');

                        setTimeout(function() {
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
