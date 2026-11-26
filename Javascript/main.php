<script language=javascript>
function AdjustContent() {
  var info, page, params, dom, parent_dom, doms=document.getElementsByTagName("a");
  // Inactivate all external links due to link rot
  for (var index=0; index<doms.length; index++) {
    dom=doms[index];
    if (dom.href.match('mappoint')) {
      dom.href="javascript:myPopup1('https://maps.google.com/maps/place/" + dom.innerHTML.replace(/ /g,'+') + "')";
      dom.className='ActiveLink';
    } else if (!dom.href.match(/mybigadventure|a2hosted|history\.go|maps\.google|goo\.gl|google\.com|wikipedia/) && dom.getAttribute('name') !== 'valid_link' && dom.innerHTML !== 'here') {
      // Inactivate anchor
      dom.className='InactiveLink';
      dom.href='javascript:void(0)';
    } else if (!dom.className) {
      dom.className='ActiveLink';
    }
  }
  // Strip https:// and http:// from link content
  for (var index=0; index<doms.length; index++) {
    dom=doms[index];
    if (dom.innerHTML.match('http')) {
      dom.innerHTML = dom.innerHTML.replace(/https\:\/\/|http\:\/\//,'') ;
    }    
  }  
  // Add class to panoramic imagery
  doms=document.getElementsByTagName("a");
  for (var index=0; index<doms.length; index++) {
    dom=doms[index];
    if (dom.href && dom.href.match('action=Panoramas') && dom.className != 'FullPanorama') {
      dom=dom.children[0];
      if (dom) {
        if (dom.width > 600) {
          dom.className='FullPanorama';
        } else if (dom.width > 400) {
          dom.className='PartialPanorama';
        }
      }
    }
  }
  // Add nobr tags to prevent word wrapping on headings
  doms=document.getElementsByTagName("b");
  for (var index=0; index<doms.length; index++) {
    dom=doms[index];
    if (dom.innerHTML.match('&nbsp;')) {
      dom.innerHTML = "<nobr>" + dom.innerHTML.replace(/\&nbsp\;\&nbsp\;\&nbsp\;/g,'</nobr>&nbsp;&nbsp; <nobr>') + "</nobr>";
    }
  }
  // Remove hover from top-page control if display is touch
  if (SupportsTouch()) {
    doms = document.getElementsByClassName('TopPageControlHover');
    if (doms[0]) {
      doms[0].className = '';
    }
  }
  // Adjust title
  dom = document.getElementById('Heading');
  if (dom && dom.getAttribute('name')) {
    document.title += ' - ' + dom.getAttribute('name');
  }
  params = new URLSearchParams(window.location.href);
  page = params.get('page');
  if (page && !window.location.href.match(/TripJournal|Stats/)) {
    if (page.match('#')) {
      info = page.split('#');
      document.title += ' - ' + info[1] + ' - Page ' + info[0];
    } else {
      document.title += ' - Page ' + page;
    }
  }
}
function MenuControl(menu_control) {
  var menu = document.getElementById('MainMenu');
  var footer_spacer = document.getElementById('FooterSpacerLeft');
  if (menu.style.display === '') {
    menu.style.display = 'block';
    footer_spacer.style.display = 'block';
    menu_control.src = 'Graphics/menu_close.png';
  } else {
    menu.style.display = '';
    footer_spacer.style.display = '';
    menu_control.src = 'Graphics/menu.png';
  }
}
function SupportsTouch() {
  var prefixes = ' -webkit- -moz- -o- -ms- '.split(' ');
  var mq = function (query) {
    return window.matchMedia(query).matches;
  }
  if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) {
    return true;
  }
  // include the 'heartz' as a way to have a non matching MQ to help terminate the join
  // https://git.io/vznFH
  var query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join('');
  return mq(query);
}
// Display share popup
function ShowShare() {
  var dom, popup, popup_control, day_of_month, display_width, width, margin_width_left, margin_width_right, margin_width, margin, menu, url;
  popup = document.getElementById('PopUp');
  popup_control = document.getElementById('PopUpCloseControl');
  menu = document.getElementById('MainMenu');
  // Show popup and close control
  popup.style.display = 'block';
  document.getElementById('PopUpCloseControl').style.display = 'block';
  // Populate information
  popup.innerHTML = "<h1><b>S H A R E</b></h1>Share with Family & Friends<div id='sharethis-buttons'></div>" ;
  display_width = window.innerWidth || document.documentElement.clientWidth;
  // Center popup
  if (display_width > 1000) {
    width = parseInt((display_width - 265 - menu.offsetWidth) / 2, 10);
    margin_width_left = menu.offsetWidth + width - 20;
    margin_width_right = width - 20;
  } else {
    width = parseInt((display_width - 265) / 2, 10);
    margin_width_left = width;
    margin_width_right = width;
  }
  margin = '0px ' + margin_width_right + 'px 0px ' + margin_width_left + 'px';
  popup.style.margin = margin;
  popup_control.style.margin = margin;
  popup.className = 'PopUpShare';
  popup_control.className = 'PopUpCloseControlShare';
  window.__sharethis__.load('inline-share-buttons', {
    alignment: 'center',
    id: 'sharethis-buttons',
    enabled: true,
    font_size: 11,
    padding: 8,
    radius: 5,
    networks: ['facebook', 'messenger', 'twitter', 'pinterest', 'sharethis', 'sms'],
    size: 32,
    show_mobile_buttons: true,
    spacing: 6,
    url: document.URL,
    title: document.title,
    language: "en",
    image: "", // useful for pinterest sharing buttons
    description: document.title + " - Welcome to my travel site! You have just entered into the realms of My Big Adventure, a fun-filled website chronicling my 6 month cross-country, clockwise romp around the Continental United States, starting and ending in Portland, Oregon. Both descriptive and picture-filled, this website is an extensive journal of my trip's adventures.",
    username: "@mybigadventure" // custom @username for twitter sharing
  });
}
// Display share popup
function ShowShareAddThisDepricated() {
  var dom, popup, popup_control, day_of_month, display_width, width, margin_width_left, margin_width_right, margin_width, margin, menu, url;
  popup = document.getElementById('PopUp');
  popup_control = document.getElementById('PopUpCloseControl');
  menu = document.getElementById('MainMenu');
  // Show popup and close control
  popup.style.display = 'block';
  document.getElementById('PopUpCloseControl').style.display = 'block';
  // Populate information
  popup.innerHTML = "<h1><b>S H A R E</b></h1>Share with Family & Friends<p><div class='addthis_sharing_toolbox' data-url='" + window.location.href + "' data-title='" + document.title + "' data-description=\"Test description\">" ;
  display_width = window.innerWidth || document.documentElement.clientWidth;
  // Center popup
  if (display_width > 1000) {
    width = parseInt((display_width - 265 - menu.offsetWidth) / 2, 10);
    margin_width_left = menu.offsetWidth + width - 20;
    margin_width_right = width - 20;
  } else {
    width = parseInt((display_width - 265) / 2, 10);
    margin_width_left = width;
    margin_width_right = width;
  }
  margin = '0px ' + margin_width_right + 'px 0px ' + margin_width_left + 'px';
  popup.style.margin = margin;
  popup_control.style.margin = margin;
  popup.className = 'PopUpShare';
  popup_control.className = 'PopUpCloseControlShare';
  window.addthis.layers.refresh();
}
// Display in a popup all links associated with a given day if using the compressed calendar
function ShowDayLinks(day, position, under_construction) {
  var dom, popup, popup_control, day_of_month, display_width, width, margin_width, margin_width_left, margin_width_right, margin;
  if (window.matchMedia("(min-width: 851px)").matches) {
    return true;
  } else {
    day_of_month = day.innerHTML;
    dom = day.parentNode;
    if (dom && dom.children) {
      popup = document.getElementById('PopUp');
      popup_control = document.getElementById('PopUpCloseControl');
      // Populate information
      popup.innerHTML = "<div class='PopUpHeading'>Day " + day_of_month + "</div>";
      if (under_construction) {
        popup.innerHTML += "Under<br>Construction<br><img src='Graphics/underconstruction.gif'>";
      } else {
        // Search for DayLinks; contains daily links
        for (var index=0; index<dom.children.length; index++) {
          if (dom.children[index].className === 'DayLinks') {
            popup.innerHTML += dom.children[index].innerHTML
              .replace('<br>','')
              // Prune extraneous lines to compact content within popup
              .replace(/\<br\><br\>\<br\><br\><br\>/g,'<br>')
              .replace(/\<br\><br\>\<br\><br\>/g,'<br>')
              .replace(/\<br\><br\>\<br\>/g,'<br>')
              .replace(/\<br\><br\>/g,'<br>');
            break;
          }
        }
      }
      // Show popup
      popup.style.display = 'block';
      document.getElementById('PopUpCloseControl').style.display = 'block';
      // Center popup
      display_width = window.innerWidth || document.documentElement.clientWidth;
      width = popup .offsetWidth;
      width = 122;
      margin_width = parseInt ( ( display_width - width ) / 2, 10 ) - 27;
      // Display popup left or right of center
      if (display_width >= 375) {
        if (position === 'left') {
          margin_width_left = margin_width - 115;
          margin_width_right = margin_width + 115;
        } else {
          margin_width_left = margin_width + 127;
          margin_width_right = margin_width - 127;
        }
      // Center popup
      } else {
        margin_width_left = margin_width_right = margin_width;
      }
      margin = '0px ' + margin_width_right + 'px 0px ' + margin_width_left + 'px';
      popup.style.margin = margin;
      popup_control.style.margin = margin;  
      popup.className = 'PopUpCalendar';
      popup_control.className = 'PopUpCloseControlCalendar';
    }
    return false;
  }
}
function ClosePopUp() {
  document.getElementById('PopUp').style.display='none';
  document.getElementById('PopUpCloseControl').style.display='none';
}
function AdjustTopPageControl() {
  var dom = document.getElementById('TopPageControl');
  if (dom) {
    dom.style.display = window.scrollY >= 1000 ? 'block' : 'none';
  }
}
function SelectOption(object) {
  var dom = object.parentNode.childNodes[0];
  if (dom) dom.click();
}
function AdjustPreferenceForm(theme) {
  var color_palette = document.getElementById('colorpalette');
  // Daytime
  if (theme.value === 'theme1') {
    // Enable all color options
    for (var index=0; index<color_palette.options.length; index++) {
      color_palette.options[index].disabled = false;
    }
  // Nighttime
  } else {
    // Disable all non-solid colors options
    for (var index=7; index<color_palette.options.length; index++) {
      color_palette.options[index].disabled = true;
    }
    // Force first palette option if selected option is a non-solid color option
    if (parseInt(color_palette.value.replace('palette',''),10) > 7) {
      color_palette.options[0].selected = true;
    }
  }
}
// Map resizing requires recalculating area coordinates
function AdjustMapAreaCoords() {
  var map, map_map, areas, delta, coords, new_coords, map_width_max = 800;
  var dom_ids=['map1','map2','map3'];
  for (var index=0; index<dom_ids.length; index++) {
    map=document.getElementById(dom_ids[index]);
    map_map=document.getElementById(dom_ids[index]+'_map');
    if (map && map_map) {
      delta = map.width / map_width_max;
      areas = map_map.children;
      for (var index2=0; index2 < areas.length; index2++) {
        // Preserve original coordinates
        if (!areas[index2].orig_coords) {
          areas[index2].orig_coords = areas[index2].coords;
        }
        coords = areas[index2].orig_coords.split(',');
        new_coords=[];
        for (var index3=0; index3 < coords.length; index3++) {
          new_coords.push(Math.round(coords[index3]*delta));
        }
        areas[index2].coords=new_coords.join(',');
      }
    }
  }
  // Sneaking in close popup logic
  ClosePopUp();
}
function RenderSocialMediaGallery(requested_action, requested_page) {
  var pictures = [
   '36.jpg~Stats&stat=Sites&date=20041029.2&page=31',
   '35.jpg~Pics&name=Favorites/Pictures/5163.JPG&storylink=DailyEvents`date=20041109`page=2#Ref1',
   '34.jpg~Pics&name=Favorites/Pictures/5052.JPG&storylink=DailyEvents`date=20040830`page=3#Ref1',
   '33.jpg~Pics&name=Favorites/Pictures/5012.JPG&storylink=Biking`date=20040728`page=9#Ref1',
   '32.jpg~Stats&stat=Communities&date=20041119.2&page=14',
   '31.jpg~Stats&stat=Sites&date=20040921&page=12',
   '30.jpg~Stats&stat=Mishaps&date=20041022&page=15',
   '29.jpg~Stats&stat=Oddities&date=20040711&page=3',
   '28.jpg~Stats&stat=Communities&date=20040712&page=1',
   '27.jpg~Stats&stat=Sites&date=20040717&page=2',
   '26.jpg~Stats&stat=Oddities&date=20040714.3&page=7',
   '25.jpg~Stats&stat=Sites&date=20041018&page=22',
   '24.jpg~Stats&stat=Sites&date=20040927.1&page=14',
   '23.jpg~Stats&stat=Memorials&date=20041027.2&page=4',
   '22.jpg~Stats&stat=Mishaps&date=20040817&page=7',
   '21.jpg~Stats&stat=People&date=20041116.1&page=21',
   '20.jpg~Stats&stat=Oddities&date=20040708.2&page=2',
   '19.jpg~Stats&stat=Sites&date=20040830.2&page=10',
   '18.jpg~Stats&stat=Biking&date=20041006&page=17',
   '17.jpg~Stats&stat=Oddities&date=20040714.2&page=6',
   '16.jpg~Stats&stat=Memorials&date=20040821&page=1',
   '15.jpg~Stats&stat=Oddities&date=20040921&page=17',
   '14.jpg~Stats&stat=Hiking&date=20040824.1&page=3',
   '13.jpg~Stats&stat=Biking&date=20040728&page=9',
   '12.jpg~Stats&stat=Oddities&date=20040729.2&page=14',
   '11.jpg~Stats&stat=Parks&date=20040822&page=6',
   '10.jpg~Stats&stat=Museums&date=20041028&page=2',
   '9.jpg~Stats&stat=Mishaps&date=20040922&page=11',
   '8.jpg~Stats&stat=Parks&date=20040805&page=4',
   '7.jpg~Stats&stat=Sites&date=20041004&page=17',
   '6.jpg~Stats&stat=Revelations&date=20040804&page=3',
   '5.jpg~Stats&stat=Oddities&date=20040721.1&page=11',
   '4.jpg~Stats&stat=Sites&date=20041020.1&page=23',
   '3.jpg~Stats&stat=People&date=20040712.1&page=1',
   '2.jpg~Maps&state=USA',
   '1.jpg~Home'
  ];
  var content = '', info, picture, empty_pictures, pictures_per_page = remaining_pictures = 21;
  var stand_alone = requested_action === 'social-media-gallery';
  var target = stand_alone ? '_blank' : '';
  if (RenderSocialMediaGallery.last_index) {
    RenderSocialMediaGallery.last_index++;
    dom_id = 'nextpage';
  } else {
    RenderSocialMediaGallery.last_index = stand_alone ? 0 : (requested_page - 1) * pictures_per_page ;
    dom_id = 'gallery';
  }
  for (index = RenderSocialMediaGallery.last_index; index < pictures.length; index++) {
    RenderSocialMediaGallery.last_index = index;
    info = pictures[index].split('~');
    picture = info[0];
    action = info[1];
    if (index % 3 === 0) {
      if (index) {
        content += "</tr></table>";
      }
      content += "<table class='GallerySocialMedia'><tr>"
    } else {
      content += "<td class='Spacer'></td>";
    }
    content += "<td><a href='index.php?action=" + action + "' target='" + target + "'><div class='LoadingImage'><img src='Pics/SocialMedia/loading.png'><div class='ImageWrapper'><img src='Pics/SocialMedia/" + picture + "'></div></div></a></td>";
    remaining_pictures--;
    if (!remaining_pictures) break;
  }
  if (remaining_pictures) {
    empty_pictures = pictures.length % 3;
    if (empty_pictures) {
      empty_pictures = 3 - empty_pictures;
      for (var index = 0; index < empty_pictures; index++) {
        content += "<td class='Spacer'></td><td><img src='Pics/SocialMedia/transparent.png'></td>";
      }
    }
  }
  // Add paging
  if (!stand_alone) {
    if (pictures.length <= pictures_per_page) {
      total_pages = 1;
    } else {
      total_pages = parseInt(pictures.length / pictures_per_page, 10);
      if (pictures.length > pictures_per_page && pictures.length % pictures_per_page) {
        total_pages++;
      }
    }
    content += "<tr><td colspan=5 align=center class='GalleryPaging'>";
    if (requested_page > 1) {
      content += "<a href='index.php?action=SocialMediaGallery&page=" + (requested_page - 1) + "' class='LinkPrev'><<<</a> ";
    }
    content += "<span class='Label'>Page</span>";
    for (var page = 1; page <= total_pages; page++) {
      if (page === requested_page) {
        content += "<span class='ActivePage'>" + page + "</span>";
      } else {
        // Don't remove ending blank otherwise the content won't wrap
        content += "<a href='index.php?action=SocialMediaGallery&page=" + page + "' class='Link'>" + page + "</a> ";
      }
    }
    if (requested_page < total_pages) {
      content += "<a href='index.php?action=SocialMediaGallery&page=" + (requested_page + 1) + "' class='LinkNext'>>>></a>";
    }
    content += "</td></tr></table>";
  // Stand alone
  } else {
    content += "</tr></table>";
  }
  // Add listener if stand alone and there are pictures remaining
  if (stand_alone && (!remaining_pictures || RenderSocialMediaGallery.last_index + 1 < pictures.length)) {
    content += "<div id='nextpage' onclick=\"RenderSocialMediaGallery('" + requested_action + "')\"></div>";
  }
  dom = document.getElementById(dom_id);
  if (dom_id === 'gallery') {  
    dom.innerHTML = content;
  } else {
    dom.outerHTML = content;
  }
}
function RunGalleryListener() {
  var dom = document.getElementById('nextpage');
  if (InViewport(dom)) {
    dom.click();
  }
}
function InViewport(dom) {
  var rect ;
  if (dom) {
    rect = dom.getBoundingClientRect() ;
    return rect.bottom &&
      rect.right >= 0 &&
      rect.left < (window.innerWidth || document.documentElement.clientWidth) &&
      rect.top < (window.innerHeight || document.documentElement.clientHeight);
  } else {
    return false;
  }
};

// Need to wait for DOM structure to be built
setTimeout(function() { AdjustMapAreaCoords() }, 1000) ;
// Reload browser when resizing
window.addEventListener('resize', function(event) { AdjustMapAreaCoords() }, true);
// Show/hide top page navigation control
window.addEventListener('scroll', function(event) { AdjustTopPageControl() }, true);
</script>