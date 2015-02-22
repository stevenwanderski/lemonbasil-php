(function($){

  $(function(){

    $('.webform-client-form').find('input[type="submit"]').removeAttr('disabled');
    $('.webform-client-form').validate({
      submitHandler: function(form) {
        $(form).find('input[type="submit"]').attr('disabled', 'disabled').val('Sending...');
        form.submit();
      }
    });

    if($('.menus-container').length > 0){
      showMenuItems(1);

      $('.category-link').click(function(e){
        e.preventDefault();
        var tid = $(this).attr('data-tid');
        showMenuItems(tid);
      });
    }

    function showMenuItems(tid){
      $('.menu-item').hide();
      $('.menu-item[data-tid="' + tid + '"]').show();
      $('.category-link').removeClass('active');
      $('.category-link[data-tid="' + tid + '"]').addClass('active');
    }

  });

})(jQuery);