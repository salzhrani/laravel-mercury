<?php
Route::put('(:bundle)/save', function()
{
	$putdata = json_decode(file_get_contents('php://input'),true);
	error_log(var_export($putdata,true));
    return "";
});
Route::post('(:bundle)/images', function()
{

	error_log(var_export(Input::file('image'),true));
    return "";
});
?>