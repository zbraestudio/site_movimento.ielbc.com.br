$(document).ready(function(){

  $(document).ready(function() {

    $('.tooltip_quiz').tooltipster({
      theme: 'tooltipster-punk',
      side: 'right',
      maxWidth: 400
    });


    $('.tooltip_telefone').tooltipster({
      theme: 'tooltipster-punk',
      side: 'top',
      maxWidth: 400,
      trigger: 'click'
    });


    $('#livres-news').hover(function(){

      $(this).animate({
        right: 0
      }, 500);

    });

  });

});