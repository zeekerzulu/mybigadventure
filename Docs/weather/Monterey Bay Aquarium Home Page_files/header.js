// header.js
// ---------
// Created: 4/5/99 by Jeremy Henrickson
// Copyright 1999 by Reactivity, Inc.  All rights reserved.
//
// Note: Requires the inclusion of location_helpers.js


// -------------- MenuItems --------------

var kMenuItemState_Inactive = 1;
var kMenuItemState_Active = 2;
var kMenuItemState_Selected = 3;
var kMenuItemState_Static = 4;

var gMenuItems = new Array();
var gImages	= new Array();		// purely for pre-cacheing

function MenuItem(inName, inInactiveImage, inActiveImage, inSelectedImage, inState, inDestURL) {
// assign properties
	this.name = inName;
	this.inactiveImage = inInactiveImage;
	this.activeImage = inActiveImage;
	this.selectedImage = inSelectedImage;
	this.state = inState;
	this.destURL = inDestURL;

// methods
	this.mouseOver = MenuItem_MouseOver;
	this.mouseOut = MenuItem_MouseOut;
	this.click = MenuItem_Click;

// add this menu item to the list
	gMenuItems[gMenuItems.length] = this;

// pre-cache the images
	if(inInactiveImage != '') {
		gImages[gImages.length] = new Image();
		gImages[gImages.length-1].src = inActiveImage
	}

	if(inInactiveImage != '') {
		gImages[gImages.length] = new Image();
		gImages[gImages.length-1].src = inInactiveImage;
	}

	if(inSelectedImage != '') {
		gImages[gImages.length] = new Image();
		gImages[gImages.length-1].src = inSelectedImage;
	}

}

function MenuItem_MouseOver() {
	var theImage;
	
	if(!(this.state == kMenuItemState_Selected || this.state == kMenuItemState_Static)) {
		theImage = getObj(this.name);
		theImage.src = this.activeImage;
		this.state = kMenuItemState_Active;
	}
}

function MenuItem_MouseOut() {
	if(!(this.state == kMenuItemState_Selected || this.state == kMenuItemState_Static)) {
		theImage = getObj(this.name);
		theImage.src = this.inactiveImage;
		this.state = kMenuItemState_Inactive;
	}
}

function MenuItem_Click() {
	// obsolete.  We're using a normal anchor
}


function menuItemAction(inName, inAction) {
	var menuItem;
	
	menuItem = menuItemByName(inName);
	
	if(inAction == 'mouseOver') {
		menuItem.mouseOver();
	} else if (inAction == 'mouseOut') {
		menuItem.mouseOut();	
	} else if (inAction == 'click') {
		menuItem.click();
	} else {
		alert('invalid action: menuItemAction(' + inName + ', ' + inAction + ')');
	}
}

function menuItemByName(inName) {
	var i;
		
	for(i=0; i < gMenuItems.length; i++) {
		if(gMenuItems[i].name == inName) return gMenuItems[i];
	}
	
	return null;
}

function menuItemSetState(inName, inState) {
	var menuItem;
	var theImage;
		
	menuItem = menuItemByName(inName);
	if(menuItem != null) {
		menuItem.state = inState;

		if(inState == kMenuItemState_Selected) {
			theImage = getObj(inName);
			theImage.src = menuItem.selectedImage;
		}
	}
}

// --------- Menus -------------

function Menu(inName) {
	this.menuItems = new Array();
	
	this.addMenuItem = Menu_AddMenuItem;
}

function Menu_AddMenuItem(inItem) {
	this.menuItems[this.menuItems.length] = inItem;
}
