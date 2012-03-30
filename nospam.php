<?php
	/* 
	 * PHP integration for jQuery No Spam
	 * by Mike Branski <mikebranski@gmail.com>
	 * https://github.com/mikebranski/jquery-nospam
	 *
	 * Copyright (c) 2008-2011 Mike Branski (https://github.com/mikebranski)
	 *
	 * NOTE: This script is for integrating your dynamic PHP content with No Spam.
	 *       Download No Spam at https://github.com/mikebranski/jquery-nospam
	 *
	 */
	function nospam($email, $filterLevel = 'normal')
	{
		if($filterLevel != 'low')
		{
			$email = strrev($email);
		}
		$email = preg_replace('[@]', '//', $email);
		$email = preg_replace('[\.]', '/', $email);
		return $email;
	}
?>
