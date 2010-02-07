<?php
	/* 
	 * PHP integration for No Spam v1.3
	 * by Mike Branski (www.leftrightdesigns.com)
	 * mikebranski@gmail.com
	 *
	 * Copyright (c) 2008 Mike Branski (www.leftrightdesigns.com)
	 *
	 * NOTE: This script is for integrating your dynamic PHP content with No Script.
	 *       Download No Spam at www.leftrightdesigns.com/library/jquery/nospam/
	 *
	 */
	function nospam($email, $filterLevel = 'normal')
	{
		$email = strrev($email);
		$email = preg_replace('[@]', '//', $email);
		$email = preg_replace('[\.]', '/', $email);

		if($filterLevel == 'low')
		{
			$email = strrev($email);
		}

		return $email;
	}
?>