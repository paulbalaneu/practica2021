$( document ).ready(function() {
	function error($element)
	{
		$('#' + $element).blur(function()
		{
			if($('#' + $element).val() === '' || $('#' + $element).val() === 'Select')
			{
				$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error">&nbsp;must not be empty</span>');
				$('#' + $element).css("border", "1px solid #C62828");
			}
			else if($element == "email")
			{
				var str = $('#' + $element).val();
				var reg_ex = new RegExp(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
				
				if(!reg_ex.test(str))
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error">&nbsp;is wrong</span>');
					$('#' + $element).css("border", "1px solid #C62828");
				}
				else
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error"></span>');
					$('#' + $element).css("border", "none");
				}
			}
			else if($element == "surface" || $element == "price")
			{
				var str = $('#' + $element).val();
				var reg_ex = new RegExp(/^\d+$/gm);
			
				if(!reg_ex.test(str))
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error">&nbsp;is wrong</span>');
					$('#' + $element).css("border", "1px solid #C62828");
				}
				else
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error"></span>');
					$('#' + $element).css("border", "none");
				}
			}
			else if($element == "phone")
			{
				var str = $('#' + $element).val();
				var reg_ex = new RegExp(/[0-9 +-]+$/g);

				if(!reg_ex.test(str))
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error">&nbsp;is wrong</span>');
					$('#' + $element).css("border", "1px solid #C62828");
				}
				else
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error"></span>');
					$('#' + $element).css("border", "none");
				}
			}
			else if($element == "name")
			{
				var str = $('#' + $element).val();
				var reg_ex = new RegExp(/^[a-zA-Z ĂÎȘȚÂăîșțâ-]+$/g);
				
				if(!reg_ex.test(str))
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error">&nbsp;is wrong</span>');
					$('#' + $element).css("border", "1px solid #C62828");
				}
				else
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error"></span>');
					$('#' + $element).css("border", "none");
				}
			}
			else if($element == "description")
			{
				var str = $('#' + $element).val();
				var reg_ex = new RegExp(/^[a-zA-Z0-9 !-@#%&?.;,|:+*ĂÎȘȚÂăîșțâ]+$/g);
				
				if(!reg_ex.test(str))
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error">&nbsp;is wrong</span>');
					$('#' + $element).css("border", "1px solid #C62828");
				}
				else
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error"></span>');
					$('#' + $element).css("border", "none");
				}
			}
			else if($element == "title")
			{
				var str = $('#' + $element).val();
				var reg_ex = new RegExp(/^[a-zA-Z0-9\s?!%|,.:;.\/ĂÎȘȚÂăîșțâ]+$/g);
				
				if(!reg_ex.test(str))
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error">&nbsp;is wrong</span>');
					$('#' + $element).css("border", "1px solid #C62828");
				}
				else
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error"></span>');
					$('#' + $element).css("border", "none");
				}
			}
			else if($element == "adress")
			{
				var str = $('#' + $element).val();
				var reg_ex = new RegExp(/^[a-zA-Z0-9 -.;,:ĂÎȘȚÂăîșțâ]+$/g);
				
				if(!reg_ex.test(str))
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error">&nbsp;is wrong</span>');
					$('#' + $element).css("border", "1px solid #C62828");
				}
				else
				{
					$('label#' + $element + '_error').html('<span class="pb_error" id="type_propertie_error"></span>');
					$('#' + $element).css("border", "none");
				}
			}
		});
	}

	error('title');
	error('description');
	error('city');
	error('adress');
	error('type_propertie');
	error('price');
	error('surface');
	error('name');
	error('email');
	error('phone');
});