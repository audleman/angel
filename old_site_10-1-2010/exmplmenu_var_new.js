/***********************************************************************************

*	(c) Ger Versluis 2000 version 5.411 24 December 2001 (updated Jan 31st, 2003 by Dynamic Drive for Opera7)

*	For info write to menus@burmees.nl		          *

*	You may remove all comments for faster loading	          *		

***********************************************************************************/



	var NoOffFirstLineMenus=9;			// Number of first level items

	var LowBgColor='336699';			// Background color when mouse is not over

	var LowSubBgColor='336699';			// Background color when mouse is not over on subs

	var HighBgColor='black';			// Background color when mouse is over

	var HighSubBgColor='black';			// Background color when mouse is over on subs

	var FontLowColor='white';			// Font color when mouse is not over

	var FontSubLowColor='black';			// Font color subs when mouse is not over

	var FontHighColor='white';			// Font color when mouse is over

	var FontSubHighColor='white';			// Font color subs when mouse is over

	var BorderColor='black';			// Border color

	var BorderSubColor='black';			// Border color for subs

	var BorderWidth=1;				// Border width

	var BorderBtwnElmnts=1;			// Border between elements 1 or 0

	var FontFamily="arial,comic sans ms,technical"	// Font family menu items

	var FontSize=9;				// Font size menu items

	var FontBold=1;				// Bold menu items 1 or 0

	var FontItalic=0;				// Italic menu items 1 or 0

	var MenuTextCentered='left';			// Item text position 'left', 'center' or 'right'

	var MenuCentered='left';			// Menu horizontal position 'left', 'center' or 'right'

	var MenuVerticalCentered='top';		// Menu vertical position 'top', 'middle','bottom' or static

	var ChildOverlap=.0;				// horizontal overlap child/ parent

	var ChildVerticalOverlap=.0;			// vertical overlap child/ parent

	var StartTop=0;				// Menu offset x coordinate 142

	var StartLeft=0;				// Menu offset y coordinate

	var VerCorrect=0;				// Multiple frames y correction

	var HorCorrect=0;				// Multiple frames x correction

	var LeftPaddng=3;				// Left padding

	var TopPaddng=2;				// Top padding

	var FirstLineHorizontal=0;			// SET TO 1 FOR HORIZONTAL MENU, 0 FOR VERTICAL

	var MenuFramesVertical=1;			// Frames in cols or rows 1 or 0

	var DissapearDelay=1000;			// delay before menu folds in

	var TakeOverBgColor=1;			// Menu frame takes over background color subitem frame

	var FirstLineFrame='navig';			// Frame where first level appears

	var SecLineFrame='space';			// Frame where sub levels appear

	var DocTargetFrame='space';			// Frame where target documents appear

	var TargetLoc='sidebar';				// span id for relative positioning

	var HideTop=0;				// Hide first level when loading new document 1 or 0

	var MenuWrap=1;				// enables/ disables menu wrap 1 or 0

	var RightToLeft=0;				// enables/ disables right to left unfold 1 or 0

	var UnfoldsOnClick=0;			// Level 1 unfolds onclick/ onmouseover

	var WebMasterCheck=0;			// menu tree checking on or off 1 or 0

	var ShowArrow=1;				// Uses arrow gifs when 1

	var KeepHilite=1;				// Keep selected path highligthed

	var Arrws=['tri.gif',5,10,'tridown.gif',10,5,'trileft.gif',5,10];	// Arrow source, width and height



function BeforeStart(){return}

function AfterBuild(){return}

function BeforeFirstOpen(){return}

function AfterCloseAll(){return}





// Menu tree

//	MenuX=new Array(Text to show, Link, background image (optional), number of sub elements, height, width);

//	For rollover images set "Text to show" to:  "rollover:Image1.jpg:Image2.jpg"



Menu1=new Array("Home","/","",0,20,132);



Menu2=new Array("About Us","","",4);

	Menu2_1=new Array("About ExplorACTION","/aboutexploraction.html","",0,20,130);

	Menu2_2=new Array("About Angel","/aboutangel.html","",0);

	Menu2_3=new Array("About Richard","/aboutrichard.html","",0);

	Menu2_4=new Array("Client Feedback","/feedback.html","",0);



Menu3=new Array("&nbsp;About <i>Feldenkrais</i>","","",3);
    Menu3_1=new Array("The Method","/method.html","",0,20,130);

	Menu3_2=new Array("Intro Video","/video.html","",0);
	
	Menu3_3=new Array("Testimonials","/testimonials.html","",0);

Menu4=new Array("Professional Training","","",7);

	Menu4_1=new Array("Introduction","/introduction.html","",0,20,130);

	Menu4_2=new Array("Curriculum","/curriculum.html","",0);
	
	Menu4_3=new Array("Schedule - SEFT III","/trainscheduleIII.htm","",0);

	Menu4_4=new Array("Faculty - SEFT III","/faculty.html","",0);
	
	Menu4_5=new Array("Schedule - SEFT IV","/trainscheduleIV.html","",0);
	
	Menu4_6=new Array("Faculty - SEFT IV","/facultyIV.html","",0);


	
	Menu4_7=new Array("Student Testimonials","/student_testimonials.html","",0);




Menu5=new Array("Courses/Workshops","","",7);

	Menu5_1=new Array("ATM Classes","/classes.html","",0,20,130);

	Menu5_2=new Array("FI Sessions","/privatesessions.html","",0);

	Menu5_3=new Array("Public Workshops","/workshops.html","",0);

	Menu5_4=new Array("Professional Training","/introduction.html","",0);

	Menu5_5=new Array("Advanced Trainings","/advtraining.html","",0);

	Menu5_6=new Array("ATM Mentoring","/atm_mentoring.html","",0);
	
	Menu5_7=new Array("FI Mentoring","/fi_mentoring.html","",0);




Menu6=new Array("Learning Material","","",2);

	Menu6_1=new Array("Articles","/articles.html","",0,20,130);

	Menu6_2=new Array("Vocal Integration CD","/vocalCD.html","",0);



Menu7=new Array("FAQs","/faq.html","",0);



Menu8=new Array("Links","/links.html","",0);



Menu9=new Array("Contact Us","/contact.html","",0);

