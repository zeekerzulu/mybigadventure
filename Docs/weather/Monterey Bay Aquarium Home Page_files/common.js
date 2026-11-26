// Common.js
// ---------
// Created: 12/28/98 by Jeremy Henrickson
// Copyright 1998, 1999 by Reactivity, Inc.  All rights reserved.
//
// This file contains common helper functions for writing cross-platform JavaScript.
var gBrowserIsNav, gBrowserIsIE, gBrowserIsMac
var gBrowserVersion						
var gBrowserCollText = ""				// collection tag (NN = "", IE = "all.")
var gBrowserStyleText = ""				// collection tag (NN = "", IE = ".style")
var	gBrowserStylePrefix = ""			// same as gBrowserStyleText, without any trailing period

// ------ Initialization routine -----
gBrowserVersion = parseInt(navigator.appVersion)
if(gBrowserVersion >= 3) {
	gBrowserIsNav = false;
	gBrowserIsIE = false;
	
	gBrowserIsMac = (navigator.appVersion.indexOf("Mac") >= 0);
	if(navigator.appName == "Netscape") {
		gBrowserIsNav = true
		gBrowserStyleText = "."
	} else if(navigator.appName == "Microsoft Internet Explorer") {
		gBrowserIsIE = true
		gBrowserCollText = "all."
		gBrowserStyleText = ".style."
		gBrowserStylePrefix = ".style"
	}
}

// getObj
// ------
// Returns an object in the document's root level collection.

function getObj(inName) {
	var theStr = "document." + gBrowserCollText + inName
	return eval(theStr)
}
// setObjProperty
// --------------
// Sets an arbitrary property of an object.

function setObjProperty(inObjName, inProperty, inValue) {
	var theValue
	if(typeof inValue == "string") {
		theValue = "'" + inValue + "'"
	} else {
		theValue = inValue
	}
	eval("document." + gBrowserCollText + inObjName + "." + inProperty + " = " + theValue)
}
// getStyle
// --------
// Returns the value of a style tag in the document's root level collection.

function getStyle(inObjName, inStyleTag) {
	return eval("document." + gBrowserCollText + inObjName + gBrowserStyleText + inStyleTag)
}
// setStyle
// --------
// Sets the value of a style element on an object in the document

function setStyle(inObjName, inStyleTag, inValue) {
	var theValue
	if(typeof inValue == "string") {
		theValue = "'" + inValue + "'"
	} else {
		theValue = inValue
	}
	eval("document." + gBrowserCollText + inObjName + gBrowserStyleText + inStyleTag + " = " + theValue)
}

// getStyleObject
// --------------
// Gets the style object of the object with the name passed in.

function getStyleObject(inObjName) {
	var theObj = getObj(inObjName)
	return eval("document." + gBrowserCollText + inObjName + gBrowserStylePrefix)
}

// ------------- POSITIONING --------------

// getObjectLeft, getObjectTop
// ---------------------------
// Returns the left and top of a given object.

function getObjectLeft(inObjName) {
	var theObj = getStyleObject(inObjName)
	if(gBrowserIsNav) {
		return theObj.left
	} else {
		return theObj.pixelLeft
	}
}

function getObjectTop(inObjName) {
	var theObj = getStyleObject(inObjName)
	if(gBrowserIsNav) {
		return theObj.top
	} else {
		return theObj.pixelTop
	}
}

// setObjectLeft, setObjectTop
// ---------------------------
// Returns the left and top of a given object.

function setObjectLocation(inObjName, inLeft, inTop) {
	var theObj = getStyleObject(inObjName)
	if(gBrowserIsNav) {
		theObj.left = inLeft
		theObj.top = inTop
	} else {
		theObj.pixelLeft = inLeft
		theObj.pixelTop = inTop
	}
}

function openNewWindow(inURL, inName, inTitle, inWidth, inHeight, inFeatures) {
	var features;
	var win = null;	
	features = inFeatures;

	if(features != '') features += ',';
	
	features += 'title=' + inTitle + ',';

	if(inWidth > 0 && inHeight > 0) {
		features += 'width=' + inWidth + ',height=' + inHeight;
	}
	
	win = window.open(inURL, inName, features);
	
	if(win && win.open){	
		win.focus();
	}
	
	/*if (win && win.open && !win.closed && !win.focus) {		
		win.focus();
	}*/	
}
function qtPluginCloseWindow(){
	openHTMLWindow('http://www.apple.com/quicktime/download/index.html', 630, 430);
	window.close();
}

var kHabitats = 0
var kInhabitants = 1

function openLivingSpeciesList(inArea, inGroup, inInhabitant) {
	var url
	
	url = '/redirects/living_species.asp'
	url += '?hOri=' + inArea + '&'
	
	if(inArea == kHabitats) {
		url += 'hab='
	} else {
		url += 'group='
	}
	
	url += inGroup
	
	if(inInhabitant > 0) {
		url += '&inhab=' + inInhabitant
		
	}

	openNewWindow(url, 'living_species_list', 'Living Species List', 500, 520, 'resizable,scrollbars')
}
function openInteractiveWindow(inURL, inWidth, inHeight) {
	openNewWindow(inURL, 'activity', 'Monterey Bay Aquarium', 615, 450, '');
}
function openGlossary(inTerm) {
	var url
	
	url = '/redirects/glossary.asp?term=' + inTerm
	openNewWindow(url, 'glossary', 'Monterey Bay Aquarium: Glossary', 465, 500, 'resizable,scrollbars,menubar')
}
function openSplashZoneCD(inTrack) {
	var url
	
	url = '/redirects/splash_zone_music.asp?track=' + inTrack
	openNewWindow(url, 'splash_zone_cd', 'Splash Zone CD', 320, 540, '')
}
function openHabitatsPathMap(inName) {
	var url
	
	url = '/redirects/habitats_path_map.asp?name=' + inName
	openNewWindow(url, '', 'Habitats Path Map', 600, 510, 'resizable')
}
function openQTVR(inName) {
	var url
	
	url = '/redirects/qtvr.asp?name=' + inName
	openNewWindow(url, '', 'Monterey Bay Aquarium: QTVR Clip', 400, 300, 'resizable')
}

function openQTVR2(inName) {
	var url
	
	url = '/redirects/qtvr2.asp?name=' + inName
	openNewWindow(url, '', 'Monterey Bay Aquarium: QTVR Clip', 400, 350, 'resizable')
}

function openQTVR3(inName) {
	var url
	
	url = '/redirects/qtvr3.asp'
	openNewWindow(url, '', 'Monterey Bay Aquarium: QTVR Clip', 400, 350, 'resizable')
}

function openKelpForestInteractive(inName) {
	var url
	
	url = '/redirects/kelp_forest_interactive.asp'
	openNewWindow(url, inName, 'Monterey Bay Aquarium: Kelp Forest Interactive', 615, 600, 'resizable,scrollbars')
}

function openSeafoodWatch() {
	var url
	
	url = '/redirects/seafood_watch.asp'
	openNewWindow(url, '', 'Monterey Bay Aquarium: Seafood Watch', 655, 600, 'resizable,scrollbars,menubar')
}

function openOtterTimeline() {
	var url
	
	url = '/redirects/otter_timeline.asp'
	openNewWindow(url, '', 'Monterey Bay Aquarium: Otter Timeline', 600, 510, 'resizable,scrollbars')
}

function openHTMLWindow(inURL, inWidth, inHeight) {
	openNewWindow(inURL, '', 'Monterey Bay Aquarium', inWidth, inHeight, 'resizable,scrollbars,menubar,toolbar,location');

}

function openAnswers(inURL, inWidth, inHeight) {
	openNewWindow(inURL, '', 'Monterey Bay Aquarium', inWidth, inHeight, 'resizable,menubar,toolbar,location');
}

function openInternal(inURL, inWidth, inHeight) {
	openNewWindow(inURL, '', 'Monterey Bay Aquarium', inWidth, inHeight, 'resizable,menubar,toolbar,location');
}

function openHTMLWindowVideo(inURL, inWidth, inHeight) {
	openNewWindow(inURL, '', 'Monterey Bay Aquarium', inWidth, inHeight, '');
}

function openPenguinSounds(inURL, inWidth, inHeight) {
	openNewWindow(inURL, '', 'Monterey Bay Aquarium', inWidth, inHeight, '');
}

function openPlainWindow(inURL, inWidth, inHeight) {
	openNewWindow(inURL, '', 'Monterey Bay Aquarium', inWidth, inHeight, 'resizable');
}

function openVideoWindow(inURL, inWidth, inHeight, inVideo) {
	inURL += '?video=' + inVideo 
	openNewWindow(inURL, '', 'Monterey Bay Aquarium', inWidth, inHeight, 'resizable,scrollbars,menubar');
}

function openwebbyHTMLWindow(inURL, inWidth, inHeight) {
	openNewWindow(inURL, '', 'Monterey Bay Aquarium', inWidth, inHeight, 'resizable,scrollbars,menubar,toolbar');
}
function openVideoWindow(inURL, inWidth, inHeight) {
	openNewWindow(inURL, '', 'Monterey Bay Aquarium', 465, 290, '');
}
function openFormWindow(inURL, inWidth, inHeight) {
	openNewWindow(inURL, '', 'Monterey Bay Aquarium', inWidth, inHeight, 'resizable, menubar');
}

//Prints window
function printWindow(){
   bV = parseInt(navigator.appVersion)
   if (bV >= 4) window.print()
}


// --------------------------
// Creature Map Rollover for Rocky Shore/Coral Reef in SZ
// Code created with the MouseOver Creator
// This program can be found at http://neilm.com/javascript
// Neil McCorrison, http://neilm.com

function changeIt(ImageToChange, ImageToShow) {
if (document.images) { document[ImageToChange].src = ImageToShow; }
}
function bar(message) {
if (document.images) { window.status = message; return true }
}

function openMoreInfoWindow(inURL, inWidth, inHeight) {
	openNewWindow(inURL, '', 'Field Trip Application: More Info', 300, 300, 'scrollbars,menubar');
}
function openCamWindow(inURL, inWidth, inHeight) {
	openNewWindow(inURL, 'popup', 'Monterey Bay Aquarium', inWidth, inHeight, '');
}

//function showFeatures(inURL) {
//var refWind;
//refWind = window.opener;
//	if (!refWind || !refWind.closed) {
//		window.open(); }
//window.opener.location.href = inURL; }
//	else {	
//		window.location(inURL)
//			}
//}

//	window.open(inURL)}
//window.self(inURL) 
//var test
//test = window.opener.name
//document.write(test)

//		--old function--
function showFeatures(inURL) {
	window.opener.location.href = inURL;
}
function openWindowWith(url, height, width) {
    nameW='feature'
 if (navigator.appVersion.indexOf('4') != -1) {
 // Vars for centering the new window on Version 4 Browsers
 xTop = screen.width/2 - (width/2);
 yTop = screen.height/2 - (height/2);
 window.open(url, nameW, 'height='+height+',width='+width+',scrollbars=1,resizable=1,menubar=1,toolbar=1,status=1,location=1,directories=1,left=' + xTop + ',top=' + yTop + '');
 } else {
 window.open(url, nameW, 'height='+height+',width='+width+',scrollbars=1,resizable=1,menubar=1,toolbar=1,status=1,location=1,directories=1,left=300,top=500');
 }
}
function MM_findObj(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
   var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
   if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function getElement(pName){
        var element = null;
        // browser capable?
        if(document.getElementById){
            element = document.getElementById(pName)        
        }else if(document.layers){
            element = document.layers[pName];        
        }else if(document.all){
            element = document.all[pName];        
        }
        return element;
}
    
// simple hover messaging 
// add more to the array if you want     
function callOverlib(iStatus, pBgColor){                                

    var statusTexts = new Array();
       
    statusTexts[0] = 'Avoid: Avoid these products for now. These fish come from sources that are overfished or caught or farmed in ways that harm the environment.';
    statusTexts[1] = 'Caution: These are better choices than seafood on the Avoid list. However, there may be some problems with the way they are caught or farmed, or important scientific information is lacking.';
    statusTexts[2] = 'Best Choice: These fish are abundant, well managed and caught or farmed in environmentally friendly ways.';
   
    
    overlib(statusTexts[iStatus],FGCOLOR,pBgColor, OFFSETX, 10, OFFSETY, -40, BELOW, BORDER, 1, WIDTH, 250);
}


/// stuff to detect flash on the client
var flashOK = true;
var flashVersion = 0;    
var browserName = getBrowser();
var osName = getOS();
    
    
function flashDetect(){
    // can we get to thte plugins?                
    
    //if we are Netscape or a mac we use plugindetect
    /*if(osName != "Windows" || browserName.indexOf("Internet Explorer") == -1){
        flashOK = detectFlashByPlugin();
    }
    else{
        flashOK = detectFlashByObjectInstance();
    } */    
    
    if(osName == "Windows" && browserName.indexOf("Internet Explorer") > -1){
        flashOK = false;//not enabled a the moment --> detectFlashByObjectInstance();        
    }
    else{
        flashOK = detectFlashByPlugin();        
    }
                   
    //alert("Your flash version is: " + flashVer);
}

function detectFlashByPlugin(){
    var ok = false;
    
    
    if(navigator.plugins && navigator.plugins.length){
        // do we have the flash plugin?
        
        /*for(var i = 0; i < navigator.plugins.length; i++){
            alert(navigator.plugins.item(i).name);
        }*/
        
        x = navigator.plugins["Shockwave Flash"];        
	    if (x)
	    {
		    // find the version number
		    flashVersion = parseInt(x.description.split('Shockwave Flash')[1]);		       		        
		    ok = true;
	    }
	    else{
	        ok = false;
	    }
		    
    }
    else{
        ok = false;
    }
    return ok;
}

/* kills netscape 4.x on Windows will work around later
function detectFlashByObjectInstance(){
    var ok = false;
    var oFlash;
    
    window.onerror = ignoreMe;
    // try to make the active x ob    
    		
    for (x=2; x<10;x++)
	{    
	    try{
			oFlash=eval("new ActiveXObject('ShockwaveFlash.ShockwaveFlash."+x+"');");
			if (oFlash)
			{
				ok = true;
				flashVer = x + '.0';
			}		
		}
		catch(e){}
	}
	
    return ok;
}
*/
    
function ignoreMe(){    
    return true;
}   

function getBrowser(){
    browserName = navigator.appName;
    return browserName;
}

function getOS(){
    // This script sets OSName variable as follows:
    // "Windows"    for all versions of Windows
    // "MacOS"      for all versions of Macintosh OS
    // "Linux"      for all versions of Linux
    // "UNIX"       for all other UNIX flavors 
    // "Unknown OS" indicates failure to detect the OS

    var OSName="Unknown OS";
    if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
    if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
    if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
    if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
    
    return OSName;
}

// just document.writes out the tags, pay attention to the parameters 
function writeFlashObEmbTags(pName, pWidth, pHeight, pAlign, pSource, pQuality, pBgColor, pMenu){

    var errFlag;
    var sMenu = "false";
    
    // if flag is false write out the movie tags
    // if not do nothing, the developer will get alerts
    errFlag = false; 
    
    // do some checks on the params
    
    // name for id and name tags not really required
    if(pName.length < 1) pName = "myMovie";
    
    // make sure the width and height are numeric
    if(isNaN(pWidth)){
        alert("Error: supplied width not in correct numeric format");
        errFlag = true;
    }
    if(isNaN(pHeight)){
        alert("Error: supplied height not in correct numeric format");
        errFlag = true;
    }
        
    // make sure that a source is supplied, with a x.swf format we need at 
    // least 5 characters
    if(pSource.length < 5){
        alert("Error:source swf not supplied or incorrect");
        errFlag = true;
    }
    
    // Make the bgColor white by default, assume red is the smallest value
    // length 3
    if(pBgColor.length < 3)
        pBgColor = "#FFFFFF";
       
    // make the menu false by default
    if(pMenu.length != true)
		sMenu = "false";
	else
		sMenu = "true";
	
	if(!errFlag){    
		document.write("<OBJECT ID='" + pName + "' CLASSID='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000'");
		document.write("CODEBASE='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0'");
		document.write("WIDTH='" + pWidth + "' HEIGHT='" + pHeight + "' ALIGN='" + pAlign + "' >");
		document.write("<PARAM NAME='movie' VALUE='" + pSource + "'/>");
		document.write("<PARAM NAME='quality' VALUE='" + pQuality + "'/>");
		document.write("<PARAM NAME='bgcolor' VALUE='" + pBgColor + "'/>");
		document.write("<PARAM NAME='menu' VALUE='" + sMenu + "'/>");
		document.write("<EMBED ID='" + pName + "' SRC='" + pSource + "' ");
		document.write("QUALITY='" + pQuality + "'");
		document.write("BGCOLOR='" + pBgColor + "' WIDTH='" + pWidth + "' HEIGHT='" + pHeight + "' ");
		document.write("NAME='" + pName + "' ");
		document.write("ALIGN='" + pAlign + "' ");
		document.write("TYPE='application/x-shockwave-flash'");
		document.write("PLUGINSPAGE='http://www.macromedia.com/go/getflashplayer' ");
		document.write("MENU='" + sMenu + "'>");
		document.write("</EMBED>");
		document.write("</OBJECT>");
	}
}