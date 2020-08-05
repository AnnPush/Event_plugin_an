/*Напишите функцию, возвращающую дескриптор <img /> разметки HTML-страницы. Эта
функция должна принимать URL изображения в качестве обязательного аргумента, а так-
же текст надписи, ширину и высоту изображения в качестве необязательных аргументов alt,
height и width соответственно.*/
<?php
function f($url, $alt = null, $height = null, $wigth = null)
{
	$html = '<img src = "' . $url . '"';
	if(isset($alt))
	{
		$html .= ' alt="' . $alt . '"';
	}
	if(isset($height))
	{
		$html .= ' height="' . $height . '"';
	}
	if(isset($width))
	{
		$html .= ' width="' . $width . '"';
	}	
}
$html .= '/>';
return $html;
?>
