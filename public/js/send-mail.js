
(function ($) {

	$(function() {
		
		var contactForm = $( '#contact-form' );
		var loader = contactForm.find('.ajax-loader');
		
		contactForm.submit(function()
		{
			if (contactForm.valid())
			{
				loader.css('display', 'block');
				var formValues = $(this).serialize();
				
				$.post($(this).attr('action'), formValues, function(data)
				{
					if ( data == 'success' )
					{
						contactForm.clearForm();
						contactForm.prepend('<div class="alert success"><strong>SUCCESS:</strong> Your message has been sent.</div>');
					}
					else
					{
						contactForm.prepend('<div class="alert error"><strong>ERROR:</strong> Something went wrong.</div>');
					}
					loader.hide();
					contactForm.find('.alert').slideDown();
				});
			}
			
			return false
		});
	
	});


	$.fn.clearForm = function() {
	Â  return this.each(function() {
	Â  Â  var type = this.type, tag = this.tagName.toLowerCase();
	Â  Â  if (tag == 'form')
	Â  Â  Â  return $(':input',this).clearForm();
	Â  Â  if (type == 'text' || type == 'password' || tag == 'textarea')
	Â  Â  Â  this.value = '';
	Â  Â  else if (type == 'checkbox' || type == 'radio')
	Â  Â  Â  this.checked = false;
	Â  Â  else if (tag == 'select')
	Â  Â  Â  this.selectedIndex = -1;
	Â  });
	};

})(jQuery);