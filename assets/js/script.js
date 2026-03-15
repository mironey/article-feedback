jQuery(document).ready(function($){

    const labels = {
        1: "Very Poor",
        2: "Poor",
        3: "Average",
        4: "Good",
        5: "Excellent"
    };

    let rating = 0;

    $('.af-stars svg').on('mouseenter', function(){
        const value = $(this).data('value');
        $('.af-stars svg').each(function(){
            if($(this).data('value') <= value){
                $(this).css('fill','#f7b500');
            } else {
                $(this).css('fill','#ddd');
            }
        });
    });

    $('.af-stars').on('mouseleave', function(){
        $('.af-stars svg').each(function(){
            if($(this).data('value') <= rating){
                $(this).css('fill','#f7b500');
            } else {
                $(this).css('fill','#ddd');
            }
        });
    });

    $('.af-stars svg').on('click', function(){
        rating = $(this).data('value');
        $('#af-rating').val(rating);
        $('.af-rating-label').text(labels[rating]);
        $('.af-form').slideDown();
    });

});