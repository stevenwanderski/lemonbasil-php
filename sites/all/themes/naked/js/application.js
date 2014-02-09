(function($){

  $(function(){
    $('.webform-client-form').find('input[type="submit"]').removeAttr('disabled');
    $('.webform-client-form').validate({
      submitHandler: function(form) {
        $(form).find('input[type="submit"]').attr('disabled', 'disabled').val('Sending...');
        form.submit();
      }
    });

  });

})(jQuery);