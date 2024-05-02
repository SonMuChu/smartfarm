$('input[id="light"]').change(function() {
    var value = $(this).val();              // value
    var checked = $(this).prop('checked');  // checked 상태 (true, false)
 
	/*value값을 디지털 핀(led) 로 넘겨주기 */
	
    if(checked)
		$(this).val('LOW');
    else
		$(this).val('HIGH');
});

$('input[id="fan"]').change(function() {
    var value = $(this).val();              // value
    var checked = $(this).prop('checked');  // checked 상태 (true, false)

    if(checked)
		$(this).val('LOW');
    else
		$(this).val('HIGH');
});

$('input[id="water"]').change(function() {
    var value = $(this).val();              // value
    var checked = $(this).prop('checked');  // checked 상태 (true, false)
 
    if(checked)
		$(this).val('LOW');
    else
		$(this).val('HIGH');
});
