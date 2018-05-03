$(document).ready(function () {
    $("#btn_leer_mas").click(function(){
        window.location = "nosotros.php";
    });
    $("#btn_escribenos").click(function(){
        window.location = "contacto.php";
    });


    $("#inicio_menu").click(function(){
        window.location = "./#Index1";
        $("#menu").animate({'top':'-100%'},'fast');
        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn_open_menu_responsive").css("color", "#fff");


    });
    $("#quienes_somos_menu").click(function(){
        window.location = "./#Index2";
        $("#menu").animate({'top':'-100%'},'fast');
        $("#fixedBtn-menuIndex img").attr("src", "img/navicon_menu.svg");
        $(".btn_open_menu_responsive").css("color", "#305480");
    });
    $("#calidad_menu").click(function(){
        window.location = "./#asesoria_en_campo";
        $("#menu").animate({'top':'-100%'},'fast');
        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg"); 
        $(".btn_open_menu_responsive").css("color", "#fff");    
    });
    $("#productos_menu").click(function(){
        window.location = "./#alianzas_comerciales"; 
        $("#menu").animate({'top':'-100%'},'fast');
        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg"); 
        $(".btn_open_menu_responsive").css("color", "#fff");       
    });
    $("#contacto_menu").click(function(){
        window.location = "./#nuestros_clientes"; 
        $("#menu").animate({'top':'-100%'},'fast');
        $("#fixedBtn-menuIndex img").attr("src", "img/navicon_menu.svg");
        $(".btn_open_menu_responsive").css("color", "#305480");
    });
   


    $("#inicio_ex").click(function(){
        window.location = "./#Index1";
        $(".btn-menuText").css("color", "#305480");
        $("#inicio").css("color", "#78d3fb");
        $("#quienes_somos").css("color", "#305480");
        $("#calidad").css("color", "#305480");
        $("#productos").css("color", "#305480");
        $("#contacto").css("color", "#305480");
    });
    $("#quienes_somos_ex").click(function(){
        window.location = "./#Index2";

        $("#inicio").css("color", "#305480");
        $("#quienes_somos").css("color", "#78d3fb");
        $("#calidad").css("color", "#305480");
        $("#productos").css("color", "#305480");
        $("#contacto").css("color", "#305480");
    });
    $("#quienes_somos_ex2").click(function(){
        window.location = "./#Index2";
    });
    $("#calidad_ex").click(function(){
        window.location = "./#asesoria_en_campo";
        // $(".btn-menuText").css("color", "#fff");
        $("#inicio").css("color", "#fff");
        $("#quienes_somos").css("color", "#fff");
        $("#calidad").css("color", "#78d3fb");
        $("#productos").css("color", "#fff");
        $("#contacto").css("color", "#fff");
    });
    $("#productos_ex").click(function(){
        window.location = "./#alianzas_comerciales";

        $("#inicio").css("color", "#fff");
        $("#quienes_somos").css("color", "#fff");
        $("#calidad").css("color", "#fff");
        $("#productos").css("color", "#78d3fb");
        $("#contacto").css("color", "#fff");
    });
    $("#contacto_ex").click(function(){
        window.location = "./#nuestros_clientes";

        $("#inicio").css("color", "#305480");
        $("#quienes_somos").css("color", "#305480");
        $("#calidad").css("color", "#305480");
        $("#productos").css("color", "#305480");
        $("#contacto").css("color", "#78d3fb");
    });
    $("#contacto_ex2").click(function(){
        window.location = "./#nuestros_clientes";

    });



    $("#inicio").click(function(){
        var posicionIndex1 = $('#Index1').offset().top;
        $('html, body').animate({scrollTop: posicionIndex1}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo.svg");

        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "#305480");
        $("#inicio").css("color", "#78d3fb");
        $("#quienes_somos").css("color", "#305480");
        $("#calidad").css("color", "#305480");
        $("#productos").css("color", "#305480");
        $("#contacto").css("color", "#305480");
        $(".btn_open_menu_responsive").css("color", "#305480");
        
    });
    $("#quienes_somos").click(function(){
        var posicionIndex2 = $('#Index2').offset().top;
        $('html, body').animate({scrollTop: posicionIndex2}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

        $("#fixedBtn-menuIndex img").attr("src", "img/navicon_menu.svg");
        $(".btn-menuText").css("color", "#305480");
        $("#inicio").css("color", "#305480");
        $("#quienes_somos").css("color", "#78d3fb");
        $("#calidad").css("color", "#305480");
        $("#productos").css("color", "#305480");
        $("#contacto").css("color", "#305480");
    });
    $("#calidad").click(function(){
       var posicionIndex3 = $('#asesoria_en_campo').offset().top;
        $('html, body').animate({scrollTop: posicionIndex3}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "#fff");
        
        $("#inicio").css("color", "#fff");
        $("#quienes_somos").css("color", "#fff");
        $("#calidad").css("color", "#78d3fb");
        $("#productos").css("color", "#fff");
        $("#contacto").css("color", "#fff");


    });
    $("#productos").click(function(){
        var posicionIndex4 = $('#alianzas_comerciales').offset().top;
        $('html, body').animate({scrollTop: posicionIndex4}, 1000);
        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "#fff");
        
        $("#inicio").css("color", "#fff");
        $("#quienes_somos").css("color", "#fff");
        $("#calidad").css("color", "#fff");
        $("#productos").css("color", "#78d3fb");
        $("#contacto").css("color", "#fff");

        if(screen.width >= 576 && screen.width<= 767){
            // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
        }

        if(screen.width >=992){
            // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
        }
    });
    $("#contacto").click(function(){
         var posicionIndex5 = $('#nuestros_clientes').offset().top;
        $('html, body').animate({scrollTop: posicionIndex5}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo.svg");

        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "#305480");
        
        $("#inicio").css("color", "#305480");
        $("#quienes_somos").css("color", "#305480");
        $("#calidad").css("color", "#305480");
        $("#productos").css("color", "#305480");
        $("#contacto").css("color", "#78d3fb");

        if(screen.width >= 576){
            $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
            $(".btn-menuText").css("color", "#305480");
        }
    });
    
    
    

    $(".btn_open_menu_responsive").click(function(){
        $("#menu").animate({'top':'0'},'fast');
    });
    $("#btnCloseMenu").click(function(){
        $("#menu").animate({'top':'-100%'},'fast');
    });

    //Efecto hover del navicon
    $(".iconHover").hover(function(){
        $(this).attr("src", "svg/navicon_over.svg");
    }, function(){
        $(this).attr("src", "svg/navicon.svg");
    });

    $(".iconHoverVerde").hover(function(){
        $(this).attr("src", "img/navicon_menu_hover.svg");
    }, function(){  
        $(this).attr("src", "img/navicon_menu.svg");
    });




    //Flechas hacia abajo
    $("#flechaAbajo1").click(function(){
        var posicionIndex2 = $('#Index2').offset().top;
        $('html, body').animate({scrollTop: posicionIndex2}, 1000);

        $("#fixedBtn-menuIndex img").attr("src", "img/navicon_menu.svg");
        $(".btn-menuText").css("color", "#305480");

        $("#inicio").css("color", "#78d3fb");
        $("#quienes_somos").css("color", "#305480");
        $("#calidad").css("color", "#305480");
        $("#productos").css("color", "#305480");
        $("#contacto").css("color", "#305480");
        $(".btn_open_menu_responsive").css("color", "#305480");
    });

    $("#flechaAbajo2").click(function(){
        var posicionIndex3 = $('#asesoria_en_campo').offset().top;
        $('html, body').animate({scrollTop: posicionIndex3}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "#305480");
        $(".btn_open_menu_responsive").css("color", "#fff");
    });

    $("#flecha_abajo_asesoria").click(function(){
        var posicionIndex4 = $('#alianzas_comerciales').offset().top;
        $('html, body').animate({scrollTop: posicionIndex4}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo.svg");

        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "white");

        if(screen.width >= 576 && screen.width<= 767){
            // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
        }

        if(screen.width >=992){
            // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
        }
    });

    $("#flecha_abajo_alianzas").click(function(){
        var posicionFooter = $('#nuestros_clientes').offset().top;
        $('html, body').animate({scrollTop: posicionFooter}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo.svg");

        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "white");
        $(".btn_open_menu_responsive").css("color", "#305480");


        if(screen.width >= 576){
            $("#fixedBtn-menuIndex img").attr("src", "img/navicon_menu.svg");
            $(".btn-menuText").css("color", "white");
        }
    });

    $("#flecha_abajo_clientes").click(function(){
        var positionFooter = $('#footerIndex').offset().top;
        $('html, body').animate({scrollTop: positionFooter}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo.svg");

        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "white");
    });




    /***Indicadores a la derecha***/
    $(".indicadorDerecha1").click(function(){
        var posicionIndex1 = $('#Index1').offset().top;
        $('html, body').animate({scrollTop: posicionIndex1}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo.svg");

        // $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "#305480");
        $("#inicio").css("color", "#78d3fb");
        $("#quienes_somos").css("color", "#305480");
        $("#calidad").css("color", "#305480");
        $("#productos").css("color", "#305480");
        $("#contacto").css("color", "#305480");
    });

    $(".indicadorDerecha2").click(function(){
        var posicionIndex2 = $('#Index2').offset().top;
        $('html, body').animate({scrollTop: posicionIndex2}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

        // $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
        $(".btn-menuText").css("color", "#305480");
        $("#inicio").css("color", "#305480");
        $("#quienes_somos").css("color", "#78d3fb");
        $("#calidad").css("color", "#305480");
        $("#productos").css("color", "#305480");
        $("#contacto").css("color", "#305480");
    });

    $(".indicadorDerecha3").click(function(){
        var posicionIndex3 = $('#asesoria_en_campo').offset().top;
        $('html, body').animate({scrollTop: posicionIndex3}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

        // $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
        $(".btn-menuText").css("color", "#fff");

        $("#inicio").css("color", "#fff");
        $("#quienes_somos").css("color", "#fff");
        $("#calidad").css("color", "#78d3fb");
        $("#productos").css("color", "#fff");
        $("#contacto").css("color", "#fff");
    });

    $(".indicadorDerecha4").click(function(){
        var posicionIndex4 = $('#alianzas_comerciales').offset().top;
        $('html, body').animate({scrollTop: posicionIndex4}, 1000);
        // $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "#fff");
        $(".btn-menuText").css("color", "white");
        $("#inicio").css("color", "#fff");
        $("#quienes_somos").css("color", "#fff");
        $("#calidad").css("color", "#fff");
        $("#productos").css("color", "#78d3fb");
        $("#contacto").css("color", "#fff");

        if(screen.width >= 576 && screen.width<= 767){
            // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
        }

        if(screen.width >=992){
            // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
        }
    });

    $(".indicadorDerecha5").click(function(){
        var posicionIndex5 = $('#nuestros_clientes').offset().top;
        $('html, body').animate({scrollTop: posicionIndex5}, 1000);
        // $('#fixedLogoNav img').attr('src', "svg/logo.svg");

        // $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
        $(".btn-menuText").css("color", "#305480");

        $("#inicio").css("color", "#305480");
        $("#quienes_somos").css("color", "#305480");
        $("#calidad").css("color", "#305480");
        $("#productos").css("color", "#305480");
        $("#contacto").css("color", "#78d3fb");

        if(screen.width >= 576){
            // $("#fixedBtn-menuIndex img").attr("src", "svg/navicon_verde.svg");
            $(".btn-menuText").css("color", "#305480");
        }
    });



    /***Scroll fijo***/
    function ScrollHandler(pageId) { 
        var page = $('#' + pageId);
        var pageStart = page.offset().top;
        var pageJump = false;

        function scrollToPage() {
            pageJump = true;
            $('html, body').animate({ 
                scrollTop: pageStart 
            }, {
                duration: 800,
                complete: function() {
                pageJump = false;
                }
            });

            //console.log(pageId+" "+page.offset().top);
            switch(pageId){
                case 'Index1':
                    // $('#fixedLogoNav img').attr('src', "svg/logo.svg");
                    $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
                    $(".btn-menuText").css("color", "305480");
                    $("#inicio").css("color", "#78d3fb");
                    $("#quienes_somos").css("color", "#305480");
                    $("#calidad").css("color", "#305480");
                    $("#productos").css("color", "#305480");
                    $("#contacto").css("color", "#305480");
                    $(".btn_open_menu_responsive").css("color", "#fff");
                break;

                case 'Index2':
                    // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

                    $("#fixedBtn-menuIndex img").attr("src", "img/navicon_menu.svg");
                    $(".btn-menuText").css("color", "#305480");
                    $(".indicadorDerecha2").css("color", "#fff");
                    $("#inicio").css("color", "#305480");
                    $("#quienes_somos").css("color", "#78d3fb");
                    $("#calidad").css("color", "#305480");
                    $("#productos").css("color", "#305480");
                    $("#contacto").css("color", "#305480");
                     $(".btn_open_menu_responsive").css("color", "#305480");

                break;

                case 'asesoria_en_campo':
                    // $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

                    $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
                    $(".btn-menuText").css("color", "white");

                    $("#inicio").css("color", "#fff");
                    $("#quienes_somos").css("color", "#fff");
                    $("#calidad").css("color", "#78d3fb");
                    $("#productos").css("color", "#fff");
                    $("#contacto").css("color", "#fff");
                     $(".btn_open_menu_responsive").css("color", "#fff");

                break;

                case 'alianzas_comerciales':
                    // $('#fixedLogoNav img').attr('src', "svg/logo.svg");
                    // if(screen.width > 576  && screen.width <= 767){
                    //     $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");
                    // }
                    // if(screen.width >992){
                    //     $('#fixedLogoNav img').attr('src', "svg/logo_bcagro_color.svg");

                        $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
                        $(".btn-menuText").css("color", "white");
                        $("#inicio").css("color", "#fff");
                        $("#quienes_somos").css("color", "#fff");
                        $("#calidad").css("color", "#fff");
                        $("#productos").css("color", "#78d3fb");
                        $("#contacto").css("color", "#fff");
                         $(".btn_open_menu_responsive").css("color", "#fff");
                    // }
                break;

                case 'nuestros_clientes':
                    $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
                    $(".btn-menuText").css("color", "305480");
                    $("#inicio").css("color", "#305480");
                    $("#quienes_somos").css("color", "#305480");
                    $("#calidad").css("color", "#305480");
                    $("#productos").css("color", "#305480");
                    $("#contacto").css("color", "#78d3fb");
                    $(".btn_open_menu_responsive").css("color", "#305480");
                    if(screen.width >= 576){
                        $("#fixedBtn-menuIndex img").attr("src","img/navicon_menu.svg");
                        $(".btn-menuText").css("color", "#305480");
                        $(".btn_open_menu_responsive").css("color", "#305480");
                    }
                break;

                case 'footerIndex':
                    $("#fixedBtn-menuIndex img").attr("src", "svg/navicon.svg");
                    $(".btn-menuText").css("color", "305480");
                    $(".btn_open_menu_responsive").css("color", "#fff");
                break;
            }
        }

        window.addEventListener('wheel', function(event) {
           var viewStart = $(window).scrollTop();
                if (!pageJump)  {   
                    var pageHeight = page.height();
                    var pageStopPortion = pageHeight / 2;
                    var viewHeight = $(window).height();

                    var viewEnd = viewStart + viewHeight;
                    var pageStartPart = viewEnd - pageStart;
                    var pageEndPart = (pageStart + pageHeight) - viewStart;
                      
                    var canJumpDown = pageStartPart >= 0; 
                    var stopJumpDown = pageStartPart > pageStopPortion; 
              
                    var canJumpUp = pageEndPart >= 0; 
                    var stopJumpUp = pageEndPart > pageStopPortion; 

                    var scrollingForward = event.deltaY > 0;
                    if (  ( scrollingForward && canJumpDown && !stopJumpDown) 
                    || (!scrollingForward && canJumpUp   && !stopJumpUp)) {
                        event.preventDefault();
                        scrollToPage();
                    } 
                }else {
                    event.preventDefault();
                }    
        });
    }

    new ScrollHandler('Index1'); 
    new ScrollHandler('Index2');
    new ScrollHandler('asesoria_en_campo');
    new ScrollHandler('alianzas_comerciales');
    new ScrollHandler('nuestros_clientes');
    new ScrollHandler('footerIndex');
});
