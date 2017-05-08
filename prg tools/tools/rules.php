<?php


function int_rules($variable)
	{
		$output=gettype($variable);
		
		if(!$output=='integer')
		{
			return false;
		}
		else
		{
			return true;
		}


	}

function string_rules($variable)
	{


		$output=gettype($variable);
		
		if(!$output=='string')
		{
			return false;
		}
		
		elseif()

	}



?>