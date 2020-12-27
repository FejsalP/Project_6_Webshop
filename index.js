$(document).ready(function(){
    //banner part
    $(".owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        autoHeight: true
    })
    //featured
    $("#featured").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoHeight: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });
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



  //increase and decrease number of items added in product.php



  $('.quantity .quantity-up').click(function(){
      var $input = $(`.quantity-input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() < 20){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
  })
   $('.quantity .quantity-down').click(function(){
      var $input = $(`.quantity-input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 20){
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
  })
});
