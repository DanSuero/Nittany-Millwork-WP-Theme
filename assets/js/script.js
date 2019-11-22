$(document).ready(function () {

    $('.scrollDwnArr').on('click', function () {
        var rightTime = $('.sectionQuality').offset().top;
        
        if(!bowser.firefox){
            $('html, body').animate({
                scrollTop: rightTime
            }, 800, 'swing');
        }else{
            window.scroll({
              top: rightTime, 
              left: 0, 
              behavior: 'smooth' 
            });
        }
    })
    
    $('.brand .img-fluid').animate({opacity: 1},1000,'swing');
    
    $('.navbar-nav li').addClass('nav-item');
    $('.navbar-nav li a').addClass('nav-link text-uppercase');
    
    if ($('section.page').attr('id')){
        var currentPage = $('section.page').attr('id').toLowerCase();
    }
    
    $('.nav-link').each(function(){
        if($(this).text().toLowerCase() == currentPage || ($(this).text().toLowerCase() == '814-692-2235' && currentPage == 'contact' ) ){
            $(this).addClass('active');
        }
    });
    
    if($('#respond')){
        $('#submit').addClass("btn btn-solid");
        $('#cancel-comment-reply-link').addClass("btn mt-2 btn-sm-solid");
        $('.logged-in-as a').eq(1).addClass("d-inline-block pl-2");
    }
    
     var rellax = new Rellax('.rellax', { round: true });
});