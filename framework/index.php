<?
//	browsercrash - detection and redirection script
//	simple browser detection based on useragent. no browscap.ini needed
//	detect and redirects to the correct scripts, if no known exploit/bug is found, launch default
//	forkbomb attack


// check what browser the visitor is using
  $u_agent = $_SERVER['HTTP_USER_AGENT'];
	//debug
	echo $u_agent."<br><br>";
	
	
	

$browser="";
     if(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("MSIE"))){$browser="ie";}
else if(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("iPHONE"))){$browser="mobilesafari";}
else if(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("Presto"))){$browser="opera";}
else if(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("CHROME"))){$browser="chrome";}
else if(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("SAFARI"))){$browser="safari";}
else if(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("FIREFOX"))){$browser="firefox";}

else {$browser="other";}
echo $browser;
/*


// This bit differentiates IE from Opera
if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
    { 
      print
        'This is Internet Explorer. (Insert joke here)';        
    } 
    elseif(preg_match('/mozilla/i',$u_agent) && !preg_match('/compatible/', $userAgent)) 
    { 
      print
        'This is FireFox.';
    } 
// let Chrome be recognized as Safari
    elseif(preg_match('/AppleWebKit/i',$u_agent)) 
    { 
      print
        'This is either Chrome or Safari.';
    } 
    elseif(preg_match('/Opera/i',$u_agent)) 
    { 
      print
        'This is Opera. Like to live on the edge, huh?';
    } 
    elseif(preg_match('/Netscape/i',$u_agent)) 
    { 
      print
        'This is Netscape, and you really need to upgrade.';
    } 


*/
?>