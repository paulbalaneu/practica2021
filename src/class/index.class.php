<?php

class Index
{
	private $index = array();

	private function gen_num()
	{
		if(rand(0,1) == 0)
			return rand(33, 64);
		else
			return rand(91, 126);
	}

	private function gen_num_2()
	{
		if(rand(0,1) == 0)
			return rand(48, 57);
		else
			return rand(97, 122);
	}

	public function full_index($length)
	{
		for($i = 0; $i<$length; $i++)
		{
			$index[$i] = chr($this->gen_num());
		}

		return implode("",$index);
	}

	public function letter_index($length)
	{
		for($i = 0; $i<$length; $i++)
		{
			$index[$i] = chr(rand(97, 122));
		}

		return implode("",$index);
	}

	public function number_index($length)
	{
		for($i = 0; $i<$length; $i++)
		{
			$index[$i] = chr(rand(48, 57));
		}

		return implode("",$index);
	}

	public function basic_index($length)
	{
		for($i = 0; $i<$length; $i++)
		{
			$index[$i] = chr($this->gen_num_2());
		}

		return implode("",$index);
	}

	public function number_of_possibilities($algorithm, $length)
	{
		if ($algorithm == "basic_index")
			return pow(36, $length);

		if ($algorithm == "full_index")
			return pow(58, $length);

		if ($algorithm == "letter_index")
			return pow(26, $length);

		if ($algorithm == "number_index")
			return pow(10, $length);
	}
}