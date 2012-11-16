<script type="text/javascript">
//<![CDATA[
/* Replacement calls. Please see documentation for more information. */

if(typeof sIFR == "function"){

// This is the preferred "named argument" syntax
	sIFR.replaceElement(named({sSelector:"h1", 
	                           sFlashSrc:"<?php print $base_path . $directory ?>/sifr/officina_bold.swf", 
	                           sColor:"#38322a", 
	                           sLinkColor:"#000000", 
	                           sBgColor:"#FFFFFF", 
	                           sHoverColor:"#CCCCCC"}));

    sIFR.replaceElement(named({sSelector:"h2#page_title", 
	                           sFlashSrc:"<?php print $base_path . $directory ?>/sifr/officina_bold.swf", 
	                           sColor:"#000000", 
	                           sLinkColor:"#000000", 
	                           sBgColor:"#FFFFFF", 
	                           sHoverColor:"#CCCCCC"}));
	                           
    // sIFR.replaceElement(named({sSelector:"#top_nav ul.links li",
    //                            sFlashSrc:"<?php print $base_path . $directory ?>/sifr/officina_bold.swf", 
    //                                 sColor:"#FFFFFF", 
    //                                 sLinkColor:"#FFFFFF", 
    //                                 sBgColor:"#716A52", 
    //                                 sHoverColor:"#CCCCCC"}));

    sIFR.replaceElement(named({sSelector:"#dal_identity", 
	                           sFlashSrc:"<?php print $base_path . $directory ?>/sifr/officina_serif.swf", 
	                           sColor:"#9f9786", 
	                           sBgColor:"#FFFFFF", 
	                           sHoverColor:"#CCCCCC",
	                           sFlashVars:"textalign=center"}));
                               
    sIFR.replaceElement(named({sSelector:"#ask_dal_header_text", 
	                           sFlashSrc:"<?php print $base_path . $directory ?>/sifr/officina.swf", 
	                           sColor:"#9f9786", 
	                           sBgColor:"#FFFFFF", 
	                           sHoverColor:"#CCCCCC",
	                           sFlashVars:"textalign=left"}));
                               
};

//]]>
</script>