    $(document).ready(function() {

      $('#sidebar a').smoothScroll({
            scrollElement: $('div#container')
      });

    });

    function checkToggle() {
        if($('#menu-button').hasClass('toggled'))
            {
                $('#container').removeClass('toggled');
                $('#menu-button').removeClass('toggled');
            }
        else
            {
                $('#container').addClass('toggled');
                $('#menu-button').addClass('toggled');
            }
    }

    $(function() {        
        $('#toggle-slider').click(function(event){
            event.preventDefault();
            event.stopPropagation();
            
            checkToggle();
        });

        $('#sidebar a').click(function(event){
            event.preventDefault();
            event.stopPropagation();
    
            checkToggle();
        });
    });