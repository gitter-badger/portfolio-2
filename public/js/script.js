    $(document).ready(function() {

      $('#sidebar a').smoothScroll({
            scrollElement: $('div#wrapper')
      });

    });

    $(function() {        
        $('#toggle-slider').click(function(event){
            event.preventDefault();
            event.stopPropagation();
    
            
            if($(this).hasClass('toggled'))
            {
                $(this).removeClass('toggled');
                $('#pop-slider').removeClass('slideout');
            }
            else
            {
                $(this).addClass('toggled');
                $('#pop-slider').addClass('slideout');
            }
        });

        $('#sidebar a').click(function(event){
            event.preventDefault();
            event.stopPropagation();
    
            
            if($('#pop-slider').hasClass('slideout'))
            {
                $('#pop-slider').removeClass('slideout');
                $('#toggle-slider').removeClass('toggled');
            }
            else
            {
                $('#pop-slider').addClass('slideout');
                $('#toggle-slider').removeClass('toggled');
            }
        });
    });