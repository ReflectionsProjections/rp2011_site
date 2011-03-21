<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Reflections | Projections 2011</title>
    
    <!-- Styles -->
	<link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
	<link href="css/footer.css" rel="stylesheet" type="text/css">
    <link href="js/countdown/jquery.countdown.css" rel="stylesheet" type="text/css">
    
    <!-- Scripts -->
    <script type="text/javascript" language="javascript" src="js/jQuery-v1.5.js"></script>
    <script type="text/javascript" language="javascript" src="js/countdown/jquery.countdown.js"></script>
	<script type="text/javascript" language="javascript">

		$(document).ready(function() {
			
			var today = new Date();
			var rpDate = new Date(2011, 9, 7, 00, 00, 00);

			$('#counter').countdown({
				labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'],
				timeSeparator: ':',
				until: rpDate,
			});
			/*$('#counter').countdown({
				image: 'js/countdown/digits.png',
				startTime: ''
			});*/
		});
    </script>
    <style type="text/css">
	</style>
</head>

<body>
	<div id="wrapper">
    	<div id="header">
        	<div id="logo">
	        	<a href="index.html" title="Home">Reflections | Projections 2011</a>
            </div>
        </div>
        <div id="navigation">
        	<div id="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="schedule.html">Schedule</a></li>
                    <li><a href="speakers.html">Speakers</a></li>
                    <li><a href="videos.html">Videos</a></li>
                    <li><a href="directions.html">Directions</a></li>
                    <li><a href="job-fair.html">Job Fair</a></li>
                    <li><a href="mechmania.html">MechMania</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
        <div id="content">
            <div id="counter"></div>
            <p class="center" style="padding: 16px 0px !important; font-size: 36px;">October 7 - 9, 2011</p>
        </div>
    </div>
    <div id="footer">
        <p>17th Annual Reflections | Projections Student Computing Conference October 7-9, 2011</p>
		<a href="http://acm.uiuc.edu/conference/2010/">2010</a> | 
        <a href="http://acm.uiuc.edu/conference/2009/">2009</a> | 
		<a href="http://acm.uiuc.edu/conference/2008/">2008</a> | 
		<a href="http://acm.uiuc.edu/conference/2007/">2007</a> |
		<a href="http://acm.uiuc.edu/conference/2006/">2006</a> |
		<a href="http://acm.uiuc.edu/conference/2005/">2005</a> |
		<a href="http://acm.uiuc.edu/conference/2004/">2004</a> | 
		<a href="http://acm.uiuc.edu/conference/2003/">2003</a> | 
		<a href="http://acm.uiuc.edu/conference/2002/">2002</a> | 
		<a href="http://acm.uiuc.edu/conference/2001/">2001</a> | 
		<a href="http://acm.uiuc.edu/conference/2000/">2000</a> |
		<a href="http://acm.uiuc.edu/conference/1999/">1999</a> | 
		<a href="http://acm.uiuc.edu/conference/1998/">1998</a> | 
		<a href="http://acm.uiuc.edu/conference/1997/">1997</a> | 
		<a href="http://acm.uiuc.edu/conference/1996/">1996</a> | 
		<a href="http://acm.uiuc.edu/conference/1995/">1995</a>
    </div>
</body>
</html>
