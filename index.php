<?php
session_start();

//connectivity
require('config.php');

?>
<html>
<head>
<title>JIIT</title>
    <style type="text/css" media="screen">
#horizontalmenu ul 
{
padding:1; margin:1; list-style:none;
}
#horizontalmenu li
{
float:left;
 position:relative;
padding-right:50;
 display:block;
border:0px solid #CC55FF; 
border-style:inset;
}
#horizontalmenu li ul
 {
display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:block;
    background:#C4C4C4;
height:auto; width:8em; 
}
#horizontalmenu li ul li
{
    clear:both;
border-style:none;}
</style>	
</head>
<table width="1050px" align="center"  border="1">
  <tbody>
    <tr>
      <th height="39" colspan="2" style="background-color:#4E4E4E"><div style="text-align:left;color:#FFFFFF"><b><font size="+3"><a href="index.php" style="text-decoration:none ; color:#FFFFFF">Jaypee Institute Of Information Technology</a></font></b><marquee direction="left" height="100%">
			<?php echo $disp['marquee1']; ?></marquee></div></th>
    </tr>
    <tr>
      <th height="317" colspan="2">
      <div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/jaypee.jpg" alt="Multispeciality College Campus" title="Multispeciality College Campus" id="wows1_0"/></li>
</ul></div>
      </th>
    </tr>
    <tr>
      <td height="38" colspan="2" style="background-color:#6E68FF">
      	<div id="horizontalmenu">
        <ul>
		<li><a href="index.php" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;" ><b>HOME</b></a></li>
        <li><a href="index.php?option=about" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>ABOUT</b></a></li>
		<li><a href="index.php?option=contact" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>CONTACT</b></a></li>	
        <li><a href="index.php?option=gallery" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>GALLERY</b></a></li>
        <li><a href="index.php?option=course" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>COURSES</b></a></li>
		<li><a href="index.php?option=regs" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>REGISTRATION</b></a></li>
		<li><a href="index.php?option=login" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>LOGIN</b></a>
              </li>
		 </ul>
                 
            </li>
            
        </ul>
</div>
        
      </td>
    </tr>
    <tr>
      <td width="974" height="647" bgcolor="#D9D9D9" style="vertical-align:text-top">
      	<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>
	<center>
	  <h2><b><font size="+3">Jaypee Institute Of Information Technology 
	    </font></b></h2>
	</center>
    <center><img src="images/jiitfront.jpg" width="696" height="488"></center>
    <p><center>
      <p>&nbsp;</p>
      <p><strong><font size="+2">Jaypee Institute Of Information Technology</font></strong> <b>-</b><font size="+1">A pioneer educational Institute of Northern India, has been striving to provide quality higher education since 2004. Approved by AICTE and UGC, JIIT has a sprawling multi-discipline campus, world class facilities and competent faculty, with prime focus on research and quality education. Creating a benchmark in the field of education, JIIT aims to create proficient technocrats and future leaders with emphasis on overall development of personality imbibing core human values among students.</font></p>
    </center></p>
	<?php
    error_reporting(1);
	}
	else{
	switch($opt)
	{
		case 'regs':
		include('registration.php')	;
		break;
		case 'login':
		include('login.php');
		break;
        case 'about':
		include('about.php');
		break;
		case 'contact':
		include('contact.php');
		break;
		case 'gallery':
		include('gallery.php');
		break;
		case 'course':
		include ('course.php');
		break;
		case 'cdrive':
		include('cdrive.php');
		break;
		case 'news':
		include('news.php');
		break;
		case 'sports':
		include('sports.php');
		break;
		case 'admission':
		include ('admission.php');
		break;
		case 'sdp':
		include('sdp.php');
		break;
		case 'wevents':
		include('wevents.php');
		break;
		case 'notice':
		include('notice.php');
		break;
		
	}}

	?>
	
      
      </td>
      <td width="343" style="background-color:#468EFF">
      <center><font size="+2"><b style="color:#191B7E"><div style="background-color:#969BFB">College Updates</div><br></b></font></center>
      	<marquee direction="up" height="100%" onMouseOver="stop()" onMouseOut="start()">
			<center><a href="index.php?option=cdrive" style="text-decoration:none"><font size="+1"><b>Campus Drive</b></font></a></center><br>
            <center><a href="index.php?option=news" style="text-decoration:none"><font size="+1"><b>News</b></font></a></center><br>
            <center><a href="index.php?option=sports" style="text-decoration:none"><font size="+1"><b>Sports Fest</b></font></a></center><br>
            <center><a href="index.php?option=admission" style="text-decoration:none"><font size="+1"><b>Admission 2019</b></font></a></center><br>
            <center><a href="index.php?option=wevents" style="text-decoration:none"><font size="+1"><b>Weekend Events</b></font></a></center><br>
            <center><a href="index.php?option=notice" style="text-decoration:none"><font size="+1"><b>Notice Board</b></font></a></center><br>
		</marquee>
      </td>
    </tr>
    <tr>
      <td height="25" colspan="2" style="background-color:#B8AFFF"><center><b>&copy; 2019 by Ayush dwivedi | Managed by Ayush dwivedi </b></center>
      <div align="right"><a href="#facebook"><img src="images/f.png" width="30" height="30" alt=""/></a><a href="#twitter"><img src="images/t.png" width="30" height="30" alt=""/></a><a href="#youtube"><img src="images/y.png" width="30" height="30" alt=""/></a></div></td>
    </tr>
  </tbody>
</table>
</html>