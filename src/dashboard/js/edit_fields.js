$( document ).ready(function()
{
	function update($input)
	{
		$("#" + $input).dblclick(function()
		{
			$('#' + $input).html('<form method="POST" action=""><input type="text"><input type="submit"></form>');
		});
	}

	update('property_type');
});