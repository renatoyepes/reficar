
(function ($) {
    //window.addEventListener("load", () => {

        if( $("body").hasClass("page-node-type-seccion"))
        {
            $(".navbar-header .region-navigation").prepend('<img class="image-section" src="' + $(".field--name-field-image").html() + '" />');
        }
        else{
            $(".field--name-field-image").css({ display: "inline-block" });
        }

        var contenedor_body = $(".field--name-body");
        
        if ($(contenedor_body).length > 0) {
        
            var _html_buttons = '<div class="contenedor-tamanio-letra">';
            _html_buttons += '<a class="tamanio-letra-reducir" href="#">A-</a>';
            _html_buttons += '<a class="tamanio-letra-estandar" href="#">A</a>';
            _html_buttons += '<a class="tamanio-letra-aumentar" href="#">A+</a>';
            _html_buttons += "</div>";
        
            $(_html_buttons).insertBefore(contenedor_body);
        
            $(".tamanio-letra-estandar").attr(
            "data-font-size",
            $(contenedor_body).css("font-size")
            );
        
            $(".tamanio-letra-reducir").click(function(event) {
            event.preventDefault();
        
            $(contenedor_body).css(
                "font-size",
                Number(
                $(contenedor_body)
                    .css("font-size")
                    .replace("px", "")
                ) -
                2 +
                "px"
            );
            });
        
            $(".tamanio-letra-estandar").click(function(event) {
            event.preventDefault();
        
            $(contenedor_body).css("font-size", $(this).attr("data-font-size"));
            });
        
            $(".tamanio-letra-aumentar").click(function(event) {
            event.preventDefault();
        
            $(contenedor_body).css(
                "font-size",
                Number(
                $(contenedor_body)
                    .css("font-size")
                    .replace("px", "")
                ) +
                2 +
                "px"
            );
            });
        }
        //});
})(jQuery);
