jQuery(document).ready(function($){

    const labels = {
        1: "Very Poor",
        2: "Poor",
        3: "Average",
        4: "Good",
        5: "Excellent"
    };

    let rating = 0;

    $('.wpaf-stars svg').on('mouseenter', function(){

        const value = $(this).data('value');

        $('.wpaf-stars svg').each(function(){

            if($(this).data('value') <= value){
                $(this).css('fill','#f7b500');
            } else {
                $(this).css('fill','#ddd');
            }

        });

    });

    $('.wpaf-stars').on('mouseleave', function(){

        $('.wpaf-stars svg').each(function(){

            if($(this).data('value') <= rating){
                $(this).css('fill','#f7b500');
            } else {
                $(this).css('fill','#ddd');
            }

        });

    });

    $('.wpaf-stars svg').on('click', function(){

        rating = $(this).data('value');

        $('#wpaf-rating').val(rating);

        $('.wpaf-rating-label').text(labels[rating]);

        $('.wpaf-form').slideDown();

    });

});