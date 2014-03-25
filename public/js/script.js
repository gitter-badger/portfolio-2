    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    $(document).ready(function() {
        if( !isMobile.any() )
        {
            $('#sidebar a').smoothScroll({
                scrollElement: $('div#container')
            });
        }      
    });

    $(function() {    
        $('#sidebar a').click(function(){
 

            if ($("#toggle-slider").get(0).checked) 
                {
                    $("#toggle-slider").attr('checked', false);
                    $('#container').removeClass('toggled');
                    $('#menu-button').removeClass('toggled');
                }
            else
                {
                    $("#toggle-slider").attr('checked', true);
                    $('#container').addClass('toggled');
                    $('#menu-button').addClass('toggled');
                }
        });

        $('#toggle-slider').change(function(event){
            event.preventDefault();
            event.stopPropagation();
            
            if (this.checked) 
                {
                    $('#container').addClass('toggled');
                    $('#menu-button').addClass('toggled');
                }
            else
                {
                    $('#container').removeClass('toggled');
                    $('#menu-button').removeClass('toggled');
                }    
        });
    });