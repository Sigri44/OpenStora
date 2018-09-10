<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-language" content="en-gb" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2000, 2002, 2005, 2007 phpBB Group" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title>OpenStora Forums &bull; Search</title>



<!--
	phpBB style name: Absolution
	Based on style:   prosilver (this is the default phpBB3 style)
	Original author:  Tom Beddard ( http://www.subBlue.com/ )
	Modified by: Christian Bullock ( http://www.ChristianBullock.com/ )

	NOTE: This page was generated by phpBB, the free open-source bulletin board package.
	      The phpBB Group is not responsible for the content of this page and forum. For more information
	      about phpBB please visit http://www.phpbb.com
-->

<script type="text/javascript">
// <![CDATA[
	var jump_page = 'Enter the page number you wish to go to:';
	var on_page = '';
	var per_page = '';
	var base_url = '';
	var style_cookie = 'phpBBstyle';
	var style_cookie_settings = '; path=/; domain=openstora.com';
	var onload_functions = new Array();
	var onunload_functions = new Array();

	

	/**
	* Find a member
	*/
	function find_username(url)
	{
		popup(url, 760, 570, '_usersearch');
		return false;
	}

	/**
	* New function for handling multiple calls to window.onload and window.unload by pentapenguin
	*/
	window.onload = function()
	{
		for (var i = 0; i < onload_functions.length; i++)
		{
			eval(onload_functions[i]);
		}
	}

	window.onunload = function()
	{
		for (var i = 0; i < onunload_functions.length; i++)
		{
			eval(onunload_functions[i]);
		}
	}

// ]]>
</script>
<script type="text/javascript" src="./styles/absolution/template/styleswitcher.js"></script>
<script type="text/javascript" src="./styles/absolution/template/forum_fn.js"></script>
<script type="text/javascript" src="./styles/absolution/template/tooltip.js"></script>
<script type="text/javascript" src="./styles/absolution/template/dropdown.js"></script>

<link href="./styles/absolution/theme/print.css" rel="stylesheet" type="text/css" media="print" title="printonly" />
<link href="./style.php?id=3&amp;lang=en" rel="stylesheet" type="text/css" media="screen, projection" />

<link href="./styles/absolution/theme/normal.css" rel="stylesheet" type="text/css" title="A" />
<link href="./styles/absolution/theme/medium.css" rel="alternate stylesheet" type="text/css" title="A+" />
<link href="./styles/absolution/theme/large.css" rel="alternate stylesheet" type="text/css" title="A++" />



<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="./styles/absolution/theme/ie.css" />
<![endif]-->

</head>

<body id="phpbb" class="section-search ltr">

<div id="page-wrap">

<div id="main-sidebar"></div>
        
        <div id="main-content">

<p class="skiplink"><a href="#start_here">Skip to content</a></p>
<a id="top" name="top" accesskey="t"></a>

<div id="wrap">
    <div id="header">
	    <div id="header-left">
        <a href="http://www.openstora.com/"><img src="./styles/absolution/theme/images/logo.png" width="416" height="112" alt="" /></a>

		    <!--<div id="site-details">
                    OpenStora Forums<br />
                    <span>OpenStora Forum</span>
                </div>-->
		</div><!-- /header-left-->
		
		<div id="header-right">
		    <div id="donation">	
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="4AV8ESMYUVECL">
				<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		    </div>
		</div>
		<div id="header-center">
		    <div id="header-search-box">

			    
			</div><!--/formbox / search-box-->
		</div><!--/header-center-->



	</div><!-- /header-->
	<div class="float-left breadcrumbs">
	<img src="./styles/absolution/theme/images/house.png" width="16" height="16" alt="" />
	    <a href="/" accesskey="h">Home</a> 
	<img src="./styles/absolution/theme/images/wiki_icon.png" width="16" height="16" alt="" />
	    <a href="/wiki" accesskey="w">Wiki</a> 
	<img src="./styles/absolution/theme/images/bz2.png" width="16" height="16" alt="" />
	    <a href="/files" accesskey="f">Files</a> 
	<img src="./styles/absolution/theme/images/forum_icon.png" width="16" height="16" alt="" />
	    <a href="./index.php" accesskey="f">Board index</a> 
	</div><!-- /float-left / breadcrumbs -->



	<div class="float-right">
	    
		<span class="breadcrumbs"><img src="./styles/absolution/theme/images/font_add.png" width="16" height="16" alt="" /> <a href="#" onclick="fontsizeup(); return false;" onkeypress="return fontsizeup(event);" title="Change font size">Change font size</a> &nbsp;</span>
	</div>
	<div class="clear-both" style="margin-bottom: 6px;"></div>

<div class="google-ads" align="center">

<script type="text/javascript">
google_ad_client = "pub-3876771452576850";
/* 728x90, created 5/17/10 */
google_ad_slot = "9953119278";
google_ad_width = 728;
google_ad_height = 90;
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div><!-- ads -->
    
	<div class="toolbar">
	    <div class="toolbar-left">
		    
        </div><!-- /toolbar-left -->
        <div class="toolbar-right">
	        <img src="./styles/absolution/theme/images/help.png" width="16" height="16" alt="" /> <a href="./faq.php" title="Frequently Asked Questions">FAQ</a>
            <img src="./styles/absolution/theme/images/group.png" width="16" height="16" alt="" /> <a href="./memberlist.php" title="View complete list of members">Members</a>
            <img src="./styles/absolution/theme/images/disconnect.png" width="16" height="16" alt="" /> <a href="./ucp.php?mode=logout&amp;sid=d493d3e35c6bfc8475ba077cbafe2a61" title="Logout [ Alexa [Bot] ]" accesskey="x">Logout [ Alexa [Bot] ]</a>
        </div><!-- /toolbar-right -->

    </div><!-- /toolbar -->
	
	<div class="clear-both"></div>

	<a name="start_here"></a>


<style type="text/css">
.announcement {
text-transform = none;
color: black;
font-size: 14px;
width: 600px;
}

</style>

<!--
<div class="announcement">

I apologize for the misinformation.
<br><br>
We are raising funds for ranX. He has helped alot of people on our forum, and he is without a jtag interface on his machine.
<br><br>
Everyone who he has helped, please remeber him.
<br><br>
Check the front page for goal information.

</div>
-->

	<div id="page-body">

<h2 class="solo">Search</h2>

<form method="get" action="./search.php">

<div class="panel">
	<div class="inner"><span class="corners-top"><span></span></span>
	<h3>Search query</h3>

	<fieldset>
	<dl>
		<dt><label for="keywords">Search for keywords:</label><br /><span>Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.</span></dt>
		<dd><input type="text" class="inputbox" name="keywords" id="keywords" size="40" title="Search for keywords" /></dd>
		<dd><label for="terms1"><input type="radio" name="terms" id="terms1" value="all" checked="checked" /> Search for all terms or use query as entered</label></dd>
		<dd><label for="terms2"><input type="radio" name="terms" id="terms2" value="any" /> Search for any terms</label></dd>
	</dl>
	<dl>
		<dt><label for="author">Search for author:</label><br /><span>Use * as a wildcard for partial matches.</span></dt>
		<dd><input type="text" class="inputbox" name="author" id="author" size="40" title="Search for author" /></dd>
	</dl>
	</fieldset>

	<span class="corners-bottom"><span></span></span></div>
</div>

<div class="panel bg2">
	<div class="inner"><span class="corners-top"><span></span></span>

	<h3>Search options</h3>

	<fieldset>
	<dl>
		<dt><label for="search_forum">Search in forums:</label><br /><span>Select the forum or forums you wish to search in. Subforums are searched automatically if you do not disable “search subforums“ below.</span></dt>
		<dd><select name="fid[]" id="search_forum" multiple="multiple" size="8" title="Search in forums"><option value="10">Announcements</option><option value="8">&nbsp; &nbsp;Site Announcements</option><option value="4">&nbsp; &nbsp;Site Suggestions</option><option value="20">General</option><option value="18">&nbsp; &nbsp;Packages/Software General Discussion</option><option value="19">&nbsp; &nbsp;Hardware general discussion.</option><option value="11">Netgear Stora</option><option value="1">&nbsp; &nbsp;Netgear Stora Stock</option><option value="9">&nbsp; &nbsp;Stora Web Interface</option><option value="6">&nbsp; &nbsp;Netgear Stora Custom Operating Systems</option><option value="14">&nbsp; &nbsp;Hardware mods</option><option value="15">Seagate GoFlex Home</option><option value="16">&nbsp; &nbsp;Seagate GoFlex Home stock firmware mods</option><option value="17">&nbsp; &nbsp;Seagate GoFlex Home custom operating systems</option><option value="21">Iomega iConnect</option><option value="22">&nbsp; &nbsp;Iomega iConnect Stock</option><option value="23">&nbsp; &nbsp;Iomega iConnect Custom Operating Systems</option><option value="24">Verbatim MediaShare</option><option value="25">&nbsp; &nbsp;Verbatim MediaShare Stock</option><option value="26">Medion NAS</option><option value="27">&nbsp; &nbsp;Medion NAS &quot;Kirkwood&quot; SoC</option><option value="28">&nbsp; &nbsp;Medion NAS &quot;NAS-7820&quot; SoC (Zyxel)</option></select></dd>
	</dl>
	<dl>
		<dt><label for="search_child1">Search subforums:</label></dt>
		<dd>
			<label for="search_child1"><input type="radio" name="sc" id="search_child1" value="1" checked="checked" /> Yes</label>
			<label for="search_child2"><input type="radio" name="sc" id="search_child2" value="0" /> No</label>
		</dd>
	</dl>
	<dl>
		<dt><label for="sf1">Search within:</label></dt>
		<dd><label for="sf1"><input type="radio" name="sf" id="sf1" value="all" checked="checked" /> Post subjects and message text</label></dd>
		<dd><label for="sf2"><input type="radio" name="sf" id="sf2" value="msgonly" /> Message text only</label></dd>
		<dd><label for="sf3"><input type="radio" name="sf" id="sf3" value="titleonly" /> Topic titles only</label></dd>
		<dd><label for="sf4"><input type="radio" name="sf" id="sf4" value="firstpost" /> First post of topics only</label></dd>
	</dl>

	<hr class="dashed" />

	<dl>
		<dt><label for="show_results1">Display results as:</label></dt>
		<dd>
			<label for="show_results1"><input type="radio" name="sr" id="show_results1" value="posts" checked="checked" /> Posts</label>
			<label for="show_results2"><input type="radio" name="sr" id="show_results2" value="topics" /> Topics</label>
		</dd>
	</dl>
	<dl>
		<dt><label for="sd">Sort results by:</label></dt>
		<dd><select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="f">Forum</option><option value="i">Topic title</option><option value="s">Post subject</option></select>&nbsp;
			<label for="sa"><input type="radio" name="sd" id="sa" value="a" /> Ascending</label>
			<label for="sd"><input type="radio" name="sd" id="sd" value="d" checked="checked" /> Descending</label>
		</dd>
	</dl>
	<dl>
		<dt><label>Limit results to previous:</label></dt>
		<dd><select name="st" id="st"><option value="0" selected="selected">All results</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select></dd>
	</dl>
	<dl>
		<dt><label>Return first:</label></dt>
		<dd><select name="ch" title="Return first"><option value="-1">All available</option><option value="0">0</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="200">200</option><option value="300" selected="selected">300</option><option value="400">400</option><option value="500">500</option><option value="600">600</option><option value="700">700</option><option value="800">800</option><option value="900">900</option><option value="1000">1000</option></select> characters of posts</dd>
	</dl>
	</fieldset>

	<span class="corners-bottom"><span></span></span></div>
</div>

<div class="panel bg3">
	<div class="inner"><span class="corners-top"><span></span></span>

	<fieldset class="submit-buttons">
		<input type="hidden" name="t" value="0" />
<input type="reset" value="Reset" name="reset" class="button2" />&nbsp;
		<input type="submit" name="submit" value="Search" class="button1" />
	</fieldset>

	<span class="corners-bottom"><span></span></span></div>
</div>

</form>

</div>

<div id="page-footer">

<div class="toolbar-footer">
<div class="toolbar-left" style="padding-top: 5px; height: 31px;">
<div class="float-left"><img src="./styles/absolution/theme/images/house.png" width="16" height="16" alt="" /> <a href="./index.php" accesskey="h">Board index</a>

<!-- By removing the following copyright attribution to http://www.ChristianBullock.com you are violating
intellectual copyright laws. You are therefore required to leave the copyright intact, linked to http://www.christianbullock.com

If you don't agree to leave the style copyright in place, don't use this style  -->

<br />&copy; Absolution Style by <a href="http://www.christianbullock.com">Christian Bullock</a></div></div>

<!-- End of copyright notice -->

<div class="float-right toolbar-bottom-right"><div class="toolbar-right" style="padding-top: 5px; height: 31px; padding-right: 5px;"><img src="./styles/absolution/theme/images/bricks.png" width="16" height="16" alt="" /> <a href="./memberlist.php?mode=leaders">The team</a>All times are UTC <br />

<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

Powered by <a href="http://www.phpbb.com/">phpBB</a>&copy; 2000, 2002, 2005, 2007 phpBB Group
</div>
</div><!-- /float-right -->
</div><!-- /footer-toolbar-->




		

</div>

</div>

<div>
	<a id="bottom" name="bottom" accesskey="z"></a>
	
</div>

</div> <!-- /#page-content -->


	<div id="secondary-sidebar"></div>
    </div> <!-- /#page-wrap -->
<script type="text/javascript" src="mobiquo/tapatalkdetect.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11919885-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 
'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 
'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; 
s.parentNode.insertBefore(ga, s);
  })();

</script>

 </body>
</html>