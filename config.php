<?php
ini_set("allow_url_fopen", 1);

function ea($Array)
{
	echo '<pre>';
	print_r($Array);
	echo '</pre>';
}

# select box
function buildOptions($options, $selectedOption)
{
	$Return = '';
	
	if (count ($options) > 0)
	{
	foreach ($options as $value => $text)
	{
		if ($value == $selectedOption)
		{
			$Return .= '<option value="'.$value.'" selected="selected">'.stripslashes($text).'</option>';
		}
		else
		{
			$Return .= '<option value="'.$value.'">'.stripslashes($text).'</option>';
		}
	}
	}
	
	return $Return;
}

?>