<?php
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
<html>
    <head>
        <title>No Spam PHP integration - by Mike Branski</title>
        <script type="text/javascript" src="jquery-1.2.3.min.js"></script>
        <script type="text/javascript" src="jquery.nospam.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('a.email').nospam();
                $('a.email_low').nospam({ filterLevel: 'low' });
            });
        </script>
    </head>
    
    <body>
        <h1>No Spam</h1>
        <h2>by Mike Branski</h2>
        <h3>Integration with PHP</h3>
        <p>I created a PHP function that goes hand in hand with <a href="index.html">No Spam</a>, allowing you to format your e-mail addresses dynamically and at the correct sercurity level to allow your scripts to integrate seamlessly with little extra work on your part. Simply include the <a href="nospam.phps">nospam() PHP function</a> and wrap your e-mail addresses in it, setting the filter level if necessary. This saves you the time of having to format your dynamic e-mail addresses by hand before outputting them to No Spam.</p>
        <h4>Default, normal filter level</h4>
        This: <pre>&lt;a href="#" rel="&lt;?php echo nospam('mikebranski@gmail.com'); ?&gt;" class="email"&gt;Mike Branski&lt;/a&gt;</pre>
        <p>Becomes: <a href="#" rel="<?php echo nospam('mikebranski@gmail.com'); ?>" class="email">Mike Branski</a></p>
        <h4>Low filter level</h4>
        This: <pre>&lt;a href="#" rel="&lt;?php echo nospam('mikebranski@gmail.com', 'low'); ?&gt;" class="email_low"&gt;Mike Branski&lt;/a&gt;</pre>
        <p>Becomes: <a href="#" rel="<?php echo nospam('mikebranski@gmail.com', 'low'); ?>" class="email_low">Mike Branski</a></p>
		<h4>Multiple dots (.), Low filter level</h4>
        This: <pre>&lt;a href="#" rel="&lt;?php echo nospam('mike.branski@gmail.co.uk', 'low'); ?&gt;" class="email_low"&gt;Mike Branski&lt;/a&gt;</pre>
        <p>Becomes: <a href="#" rel="<?php echo nospam('mike.branski@gmail.co.uk', 'low'); ?>" class="email_low">Mike Branski</a></p>
		
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            var pageTracker = _gat._getTracker("UA-1790385-1");
            pageTracker._initData();
            pageTracker._trackPageview();
        </script>

    </body>
</html>