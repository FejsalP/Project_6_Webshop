$(document).ready(function(){
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



  //increase and decrease number of items added in product_info and cart



  $('.quantity-up').click(function(){
    console.log("AAAa")
    var $input = $(`.quantity-input[data-id='${$(this).data("id")}']`);
    var $price = $(`.price[data-id='${$(this).data("id")}']`);
    $.ajax({url: "includes/ajax.php", type : 'post', data : { productID : $(this).data("id")}, success:function(result){  
        result = result.slice(7)
        var obj = JSON.parse(result);
        var productPrice = obj[0]['productPrice'];
        if($input.val() >= 1 && $input.val() <= 19){
            $input.val(function(i, oldval){
                return ++oldval;
        });
        $price.text(parseInt(productPrice * $input.val()).toFixed(2));
        var subtotal = parseInt($("#total_price").text())+parseInt(productPrice);    
        $("#total_price").text(subtotal)
    }

    }}); // closing ajax request
    
        
  })
   $('.quantity-down').click(function(){
    var $input = $(`.quantity-input[data-id='${$(this).data("id")}']`);
    var $price = $(`.price[data-id='${$(this).data("id")}']`);

    $.ajax({url: "includes/ajax.php", type : 'post', data : { productID : $(this).data("id")}, success:function(result){  
        result = result.slice(7)
        var obj = JSON.parse(result);
        var productPrice = obj[0]['productPrice'];
        if($input.val() > 1 && $input.val() <= 20){
            $input.val(function(i, oldval){
                return --oldval;
        });
        $price.text(parseInt(productPrice * $input.val()).toFixed(2));
        var subtotal = parseInt($("#total_price").text())-parseInt(productPrice);    
        $("#total_price").text(subtotal)
    }

    }}); // closing ajax request
    
         
        
  })
});
