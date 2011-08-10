<?php
	/* 
	 * PHP integration for No Spam v1.3.1
	 * by Mike Branski (https://github.com/mikebranski)
	 * mikebranski@gmail.com
	 *
	 * Copyright (c) 2008-2011 Mike Branski (https://github.com/mikebranski)
	 *
	 * NOTE: This script is for integrating your dynamic PHP content with No Spam.
	 *       Download No Spam at http://github.com/mikebranski/jquery-nospam
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
