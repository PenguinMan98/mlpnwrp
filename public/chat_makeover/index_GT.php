<?php require_once('Security/ids.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html>

<head><script type="text/javascript" src="http://www.grey-tower.net/includes/tiny_mce/tiny_mce.js"></script>

<title>The Grey Tower - Live Chat</title>


<meta name="KeyWords" content="online roleplaying, Wheel of Time, WoT, Robert Jordan, RJ, roleplaying, RP, GT, Aes Sedai, Asha'man, Gaidin, Gaidar, White Tower, Black Tower, Grey Tower, fantasy">




<link rel="stylesheet" href="http://www.grey-tower.net/Renewal/ver2/gtstylesnew2.css">
<link rel="shortcut icon" href="http://www.grey-tower.net/favicon.ico" type="image/x-icon" >
	<link rel="stylesheet" type="text/css" href="ajax-chat/style/style.css" />


<!--Code for drop-down menus.  Menu code thanks to Crysthia Sedai.-->



<script type="text/javascript" src="http://www.grey-tower.net/Javascript.js">

</script>

</head>



<!--End code for drop-down menus-->



<body onload="chat_api_onload('Main Room', false);">

<!-- This webpage made with the assistance of http://glish.com/css/7.asp -->

<base href="/chat/">

<div id="banner">



<center>





<a href="http://www.grey-tower.net/main.php"><img src="http://www.grey-tower.net/images/title.png" border="0" alt="The Grey Tower"></a><!-- FONT USED = Footlight MT -->



</center>



</div>
<font color= 000000>


<div id="email">

<b>

          		        - <a href="mailto:mon@grey-tower.net"><font color=#fffaf0>MoN</font></a>
					
				- <a href="mailto:mos@grey-tower.net"><font color=#fffaf0>MoS</font></a>
				
				- <a href="mailto:keepers@grey-tower.net"><font color=#fffaf0>Keepers</font></a>

                  		- <a href="mailto:amyrlin@grey-tower.net"><font color=#fffaf0>Amyrlin Seat</font></a>
				
				- <a href="mailto:mhael@grey-tower.net"><font color=#fffaf0>M'Hael</font></a>
					
				- <a href="mailto:moa@grey-tower.net"><font color=#fffaf0>Master of Arms</font></a>

				- <a href="mailto:mot@grey-tower.net"><font color=#fffaf0>MoT</font></a>
					
                    		- <a href="mailto:gc@grey-tower.net"><font color=#fffaf0>GC</font></a>

				- <a href="mailto:wcr@grey-tower.net"><font color=#fffaf0>WCR</font></a>

					</b>

</div>

</font>



<div id="leftcontent"> 
  
  <!-- Keep all menus within masterdiv-->
  
  <div id="masterdiv" overflow="auto"> <br />
    
    <!-- menu one-->
    
    <center>
      <div class="menutitle" onclick="SwitchMenu('sub1')"><img src="http://www.grey-tower.net/Renewal/towerpagesbutton.png" /></div>
     <p> <span class="submenu" id="sub1"> <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/info/faq.php"> Grey Tower FAQ</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/GTWarders/library/faq.php"> Warder Yards FAQ</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/hos/index.html"> Hall of Sitters Information</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/boards/foyer.html"> The Foyer</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/info/rules.html"> GT Aims and Rules</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/events/calendar.php"> Events Calendar</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/GTWarders/index.php"> Warder Yards</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/ajahs/index.php"> Hall of Ajahs</a><br />
        </span></p>
        
      
      <!-- menu two-->
      
      <div class="menutitle" onclick="SwitchMenu('sub2')"><img src="http://www.grey-tower.net/Renewal/charactercreationbutton.png" /></div>
      <p><span class="submenu" id="sub2"> <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/joining/index.html"> Joining Characters</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/joining/return_form.php"> Returning Characters</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/members/dcs.html"> Additional Characters</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/members/pscapplication.php"> PSC Application</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/info/info_new_members.php"> Info for New Members</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/raising/requirements.php"> Raising Requirements</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/mentors/mentorlist.php"> Mentor Listings</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/members/nsrules.html"> Novice &amp; Soldier Conduct</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/info/student_schedule.html"> Schedules &amp; Chores</a><br />
        </span></p>
      
      <!--Menu Three-->
      
      <div class="menutitle" onclick="SwitchMenu('sub3')"><img src="http://www.grey-tower.net/Renewal/membersbutton.png" /></div>
      <p><span class="submenu" id="sub3"> <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/members/index.php"> Member Listings</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/members/npclist.php"> NPC Listings</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/members/psclist.php"> PSC Listings</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/admin/who_is_admin.html"> Admin Team</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/bonds/index.php"> Bonding</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/GTWarders/bondable/bondable_list.php"> Bondable</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/demographics/index.php"> Tower Demographics</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/demographics/nationdemo.php"> Nationality Demographics</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/members/imlist.php"> Instant Messenger List</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/shara/index.php"> Shara List</a><br />
        </span></p>
      
      <!--Menu Four-->
      
      <div class="menutitle" onclick="SwitchMenu('sub4')"><img src="http://www.grey-tower.net/Renewal/characterdevelopmentbutton.png" /></div>
      <p><span class="submenu" id="sub4"> <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/classes/index.php"> Classes</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/classes/archived/index.php"> Class Archive</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/classes/archivedlectures/index.html"> Lecture Archive</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/indigo/talents/talentstable.php"> Talents</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/members/oplistings.php"> One Power Strength</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/GTWarders/skills/skilllist.php"> Weapon Skills</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/indigo/talents/abilitiestable.php"> Special Abilities</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/benefits/benefit_list.php"> Benefits</a><br />
        <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/raising/rr-checklist.php"> Raising Checklist</a><br />
         <img src="http://www.grey-tower.net/Renewal/aessedaismall.png" /><a href="http://www.grey-tower.net/raising/bm-checklist.php"> Blademaster Checklist</a><br />
        </span></p>
    </center>
  </div>
  <form action="http://www.google.com/search" method="get">
    <input type="text" name="q" size="10" />
    <input type="submit" value="Search" />
    <input type="hidden" name="hl" value="en" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="hidden" name="as_qdr" value="all" />
    <input type="hidden" name="q" value="site:grey-tower.net" />
  </form>
  
  <!--End Google Search Code--> 
  
  <img src="http://www.grey-tower.net/Renewal/flame2.png" /> </div>
<div id="centercontent">
<center>
<?php
$chat_list = array('Main Room', 'Anything', 'Grey Tower OOC', 'Grey Tower Administrative');
$chat_logs = array('add' => false, 'get' => false, 'log' => false);
$chat_show = array('login' => false, 'guest' => true);
$chat_path = 'ajax-chat/';
include_once 'ajax-chat/ajax-chat.php';
?>
</center>
</div>



<div id="rightcontent">



<center>



<div id="masterdiv2" overflow="auto"> <br>



<!--Menu Five-->



<div class="menutitle" onClick="SwitchMenu2('sub5')"><img src="http://www.grey-tower.net/Renewal/oocbutton.png"></div>



<p><span class="submenu" id="sub5">



<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/boards/mainooc/"> Main Message Board</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/boards/hos/"> Hall of Sitters</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/boards/warderooc/"> Warder OOC</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/boards/insanity/"> Binky</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/ajahs/ajah_ooc_mbs.php"> Ajah OOC MBs</a><br />

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png" alt="" /><a href="http://www.grey-tower.net/Chat2/"> OOC Live Chatroom</a><br>



</span></p>



<!--Menu Six-->



<div class="menutitle" onClick="SwitchMenu2('sub6')"><img src="http://www.grey-tower.net/Renewal/icbutton.png"></div>



<p><span class="submenu" id="sub6">



<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/boards/d2d/"> Day to Day</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://grey-tower.net/boards/feastoflights_10/"> Feast of Lights</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/boards/lr/"> Learning Ranks</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/boards/gardens/"> Gardens</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/roleplays/festivals.php"> Annual Festivals</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/admin/index.php"> Officers' Offices</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/GTWarders/ic.php"> Warder Yard Boards</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/ajahs/ajah_ic_mbs.php"> Ajah IC MBs</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/boards/hamavalon/"> Hama Valon</a><br />

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/boards/oot/"> Out of the Tower</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/roleplays/index.php"> Official RPs</a><br>



</span></p>



<!--Menu Seven-->



<a href="http://www.grey-tower.net/Library"><img src="http://www.grey-tower.net/Renewal/librarybutton.png" border="0"></a>



<p><p>



<!--Menu Eight-->



<div class="menutitle" onClick="SwitchMenu2('sub8')"><img src="http://www.grey-tower.net/Renewal/resourcesbutton.png"></div>



<p><span class="submenu" id="sub8">



<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/info/plotbasket.html"> The Plot Basket</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/Library/artwork/index_gt.php"> GT Maps and Diagrams</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/indigo/vaults.html"> Objects of Power</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/demographics/wotview.html"> Wheel of Time Cultures</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/indigo/talents/talentsinfo.html"> Talents Information</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/indigo/talents/abilitiesinfo.html"> Special Abilities Information</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/benefits/benefit_info.html"> Benefits Information</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/GTWarders/skills/skillinfo.php"> Weapon Skill Information</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/GTWarders/skills/swordforms.php"> Sword Forms</a><br />

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/GTWarders/skills/polearmforms.php"> Polearm Forms</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/equine/equine-basics.html"> Equestrian Basics</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/equine/stables.php"> Equestrian Roster</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/info/htmlpage.html"> Basic HTML</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/info/frequenttypos.html"> Frequently Made Typos</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/GTWarders/warderqanda"> Warder Q & A</a><br>



</span></p>



<!--Menu Nine-->



<div class="menutitle" onClick="SwitchMenu2('sub9')"><img src="http://www.grey-tower.net/Renewal/linksbutton.png"></div>



<p><span class="submenu" id="sub9">



<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.tsosmud.org/wotcon.aspx"> Concordance</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://encyclopaedia-wot.org/index.html"> Encyclopedia WoT</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.freewebs.com/emyrlin/"> Guide to Online RP</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://library.tarvalon.net/index.php?title=Accepted_Raising_Ceremony"> Accepted Raising Ceremony</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://library.tarvalon.net/index.php?title=Aes_Sedai_Raising_Ceremony"> Aes Sedai Raising Ceremony</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://library.tarvalon.net/index.php?title=First_Sister_Ceremony"> First Sister Ceremony</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://library.tarvalon.net/index.php?title=Bonding_Ceremony"> Bonding Ceremony</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://library.tarvalon.net/index.php?title=Keeper_of_the_Chronicles_Raising_Ceremony"> Keeper of the Chronicles Raising Ceremony</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.wotmud.org/oldwww/public/codex.html"> WoT Codex</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.mirrorsmud.net/aiel.php"> The Aiel Race</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://web.archive.org/web/20030130030738/http://cuendillar.org/wot/world/worldbook.html"> Illustrated Worldbook (Archive)</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://wot213.tripod.com/Character/bkg/official_seanchan_background.htm"> Official Seanchan Background</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.drosi.de/wot/wt_tongu.htm"> The Complete Old Tongue</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.angelfire.com/tx/jcs97b/engotd.html"> English to Old Tongue Dictionary</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.steelypips.org/wotfaq/"> WoT FAQ</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.grey-tower.net/misc/asthewheelturns.html"> WoT Role-play Sites</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://library.tarvalon.net/index.php?title=Curses"> Curses</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://library.tarvalon.net/index.php?title=Lini"> Lini Eltring</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.geocities.com/Area51/5278/Quotes.html"> Sayings</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://library.tarvalon.net/index.php?title=Swearing%2C_Insults%2C_and_Slang_in_the_Wheel_of_Time"> Swearing, Insults, & Slang</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.wotmania.com/quotelist.asp"> Quotes</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.angelfire.com/yt/calendar/"> WoT Calendar and Feast days</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://www.sevenspokes.com/chronology/creation.html"> WoT Chronology</a><br>

<img src="http://www.grey-tower.net/Renewal/aessedaismall.png"><a href="http://wot.wikia.com/wiki/A_beginning"> WoT Wiki</a><br>



</span></p>



<img src="http://www.grey-tower.net/Renewal/fang2.png">



</div>



</center>



</div><!-- to add more menus change the sub# in the switchmenu and span class to the next sequential #-->







<style type="text/css">

body {
	background-color: #FFFFFF;
	background-image: url(http://www.grey-tower.net/Renewal/bg2.jpg);
background-repeat: repeat-x;
  background-attachment: fixed;
  background-position: top left; 
}

body, td, th {
	color: #000000;
}

</style>

</BODY>

</html>

