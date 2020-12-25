$(document).ready(function(){
    //banner part
    $(".owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        autoHeight: true
    })
    // isotope
    var $grid = $(".grid").isotope({ 
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
});
    $(".button-group").on("click", "button", function(){
        var filterValue =$(this).attr("data-filter");
        console.log(filterValue);
        $grid.isotope({filter: filterValue})
    })

    $('.sort-button-group').on( 'click', 'button', function() {
    /* Get the element name to sort */
    var sortValue = $(this).attr('data-sort-value');

    /* Get the sorting direction: asc||desc */
    var direction = $(this).attr('data-sort-direction');

    /* convert it to a boolean */
    var isAscending = (direction == 'asc');

    /* pass it to isotope */
    $grid.isotope({ sortBy: sortValue, sortAscending: isAscending });
  });
});
