<script type="text/javascript" src="jquery1.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<style rel="stylesheet" type="text/css" media="all" title="win2k-cold-1">
    /* Task allocation Sent Tasks */
     .cssmenu ul{
        margin:0;
        padding:0;
        list-style-type:none;
        width:auto;
        position:relative;
        display:block;
        height:25px;
        background:transparent url('images/blue.jpg') repeat-x top left;

    }
    .cssmenu li{
        display:block;
        float:left;
        margin:0;
        pading:0;
        border-right:1px solid #ffffff;
    }
    .cssmenu li a{
        display:block;
        float:left;
        color:#ffffff;
        text-decoration:none;
        padding:6px 16px 0 20px;
        height:15px;
        height:15px;
    }
/* The main calendar widget.  DIV containing a table. */
#date_a {
	
	/* must be initially hidden */
	
	/* place overlay on top of other elements */
	z-index:101;
	
	/* styling */
		
}
a.button {
    color: #0000FF;
    font: bold 12px Helvetica, Arial, sans-serif;
    text-decoration: none;
    padding: 7px 12px;
    position: relative;
    display: inline-block;
    text-shadow: 0 1px 0 #fff;
    -webkit-transition: border-color .218s;
    -moz-transition: border .218s;
    -o-transition: border-color .218s;
    transition: border-color .218s;
    background: #f3f3f3;
    background: -webkit-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    background: -moz-linear-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    border: solid 1px #dcdcdc;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    margin-right: 10px;
}
a.button:hover {
    color: #000000;
    border-color: #0000FF;
    -moz-box-shadow: 0 2px 0 rgba(0, 0, 0, 0.2) -webkit-box-shadow:0 2px 5px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
}
a.button:active {
    color: #000;
    border-color: #444;
}
a.left {
    -webkit-border-top-right-radius: 0;
    -moz-border-radius-topright: 0;
    border-top-right-radius: 0;
    -webkit-border-bottom-right-radius: 0;
    -moz-border-radius-bottomright: 0;
    border-bottom-right-radius: 0;
    margin: 0;
}
.calendar {
  position: relative;
  top: 100px;
  display: none;
  z-index:101;
  border-top: 2px solid #fff;
  border-right: 2px solid #000;
  border-bottom: 2px solid #000;
  border-left: 2px solid #fff;
  font-size: 11px;
  color: #000;
  cursor: default;
  background: #c8d0d4;
  font-family: tahoma,verdana,sans-serif;
}

.calendar table {
  border-top: 1px solid #000;
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  border-left: 1px solid #000;
  font-size: 11px;
  color: #000;
  cursor: default;
  background: #c8d0d4;
  font-family: tahoma,verdana,sans-serif;
}

/* Header part -- contains navigation buttons and day names. */

.calendar .button { /* "<<", "<", ">", ">>" buttons have this class */
  text-align: center;
  padding: 1px;
  border-top: 1px solid #fff;
  border-right: 1px solid #000;
  border-bottom: 1px solid #000;
  border-left: 1px solid #fff;
}

.calendar .nav {
  background: transparent url(menuarrow.gif) no-repeat 100% 100%;
}

.calendar thead .title { /* This holds the current "month, year" */
  font-weight: bold;
  padding: 1px;
  border: 1px solid #000;
  background: #0000FF;
  color: #fff;
  text-align: center;
}

.calendar thead .headrow { /* Row <TR> containing navigation buttons */
}

.calendar thead .daynames { /* Row <TR> containing the day names */
}

.calendar thead .name { /* Cells <TD> containing the day names */
  border-bottom: 1px solid #000;
  padding: 2px;
  text-align: center;
  background: #e8f0f4;
}

.calendar thead .weekend { /* How a weekend day name shows in header */
  color: #f00;
}

.calendar thead .hilite { /* How do the buttons in header appear when hover */
  border-top: 2px solid #fff;
  border-right: 2px solid #000;
  border-bottom: 2px solid #000;
  border-left: 2px solid #fff;
  padding: 0px;
  background-color: #d8e0e4;
}

.calendar thead .active { /* Active (pressed) buttons in header */
  padding: 2px 0px 0px 2px;
  border-top: 1px solid #000;
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  border-left: 1px solid #000;
  background-color: #b8c0c4;
}

/* The body part -- contains all the days in month. */

.calendar tbody .day { /* Cells <TD> containing month days dates */
  width: 2em;
  text-align: right;
  padding: 2px 4px 2px 2px;
}
.calendar tbody .day.othermonth {
  font-size: 80%;
  color: #aaa;
}
.calendar tbody .day.othermonth.oweekend {
  color: #faa;
}

.calendar table .wn {
  padding: 2px 3px 2px 2px;
  border-right: 1px solid #000;
  background: #e8f4f0;
}

.calendar tbody .rowhilite td {
  background: #d8e4e0;
}

.calendar tbody .rowhilite td.wn {
  background: #c8d4d0;
}

.calendar tbody td.hilite { /* Hovered cells <TD> */
  padding: 1px 3px 1px 1px;
  border: 1px solid;
  border-color: #fff #000 #000 #fff;
}

.calendar tbody td.active { /* Active (pressed) cells <TD> */
  padding: 2px 2px 0px 2px;
  border: 1px solid;
  border-color: #000 #fff #fff #000;
}

.calendar tbody td.selected { /* Cell showing selected date */
  font-weight: bold;
  padding: 2px 2px 0px 2px;
  border: 1px solid;
  border-color: #000 #fff #fff #000;
  background: #d8e0e4;
}

.calendar tbody td.weekend { /* Cells showing weekend days */
  color: #f00;
}

.calendar tbody td.today { /* Cell showing today date */
  font-weight: bold;
  color: #00f;
}

.calendar tbody .disabled { color: #999; }

.calendar tbody .emptycell { /* Empty cells (the best is to hide them) */
  visibility: hidden;
}

.calendar tbody .emptyrow { /* Empty row (some months need less than 6 rows) */
  display: none;
}

/* The footer part -- status bar and "Close" button */

.calendar tfoot .footrow { /* The <TR> in footer (only one right now) */
}

.calendar tfoot .ttip { /* Tooltip (status bar) cell <TD> */
  background: #e8f0f4;
  padding: 1px;
  border: 1px solid #000;
  background: #0000FF;
  color: #fff;
  text-align: center;
}

.calendar tfoot .hilite { /* Hover style for buttons in footer */
  border-top: 1px solid #fff;
  border-right: 1px solid #000;
  border-bottom: 1px solid #000;
  border-left: 1px solid #fff;
  padding: 1px;
  background: #d8e0e4;
}

.calendar tfoot .active { /* Active (pressed) style for buttons in footer */
  padding: 2px 0px 0px 2px;
  border-top: 1px solid #000;
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  border-left: 1px solid #000;
}

/* Combo boxes (menus that display months/years for direct selection) */

.calendar .combo {
  position: absolute;
  display: none;
  width: 4em;
  top: 0px;
  left: 0px;
  cursor: default;
  border-top: 1px solid #fff;
  border-right: 1px solid #000;
  border-bottom: 1px solid #000;
  border-left: 1px solid #fff;
  background: #d8e0e4;
  font-size: 90%;
  padding: 1px;
  z-index: 100;
}

.calendar .combo .label,
.calendar .combo .label-IEfix {
  text-align: center;
  padding: 1px;
}

.calendar .combo .label-IEfix {
  width: 4em;
}

.calendar .combo .active {
  background: #c8d0d4;
  padding: 0px;
  border-top: 1px solid #000;
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  border-left: 1px solid #000;
}

.calendar .combo .hilite {
  background: #048;
  color: #aef;
}

.calendar td.time {
  border-top: 1px solid #000;
  padding: 1px 0px;
  text-align: center;
  background-color: #e8f0f4;
}

.calendar td.time .hour,
.calendar td.time .minute,
.calendar td.time .ampm {
  padding: 0px 3px 0px 4px;
  border: 1px solid #889;
  font-weight: bold;
  background-color: #fff;
}

.calendar td.time .ampm {
  text-align: center;
}

.calendar td.time .colon {
  padding: 0px 2px 0px 3px;
  font-weight: bold;
}

.calendar td.time span.hilite {
  border-color: #000;
  background-color: #667;
  color: #fff;
}

.calendar td.time span.active {
  border-color: #f00;
  background-color: #000;
  color: #0f0;
}
  
  </style>

  <!-- main calendar program -->
  <script type="text/javascript">
/*  Copyright Mihai Bazon, 2002-2005  |  www.bazon.net/mishoo
 * -----------------------------------------------------------
 *
 * The DHTML Calendar, version 1.0 "It is happening again"
 *
 * Details and latest version at:
 * www.dynarch.com/projects/calendar
 *
 * This script is developed by Dynarch.com.  Visit us at www.dynarch.com.
 *
 * This script is distributed under the GNU Lesser General Public License.
 * Read the entire license text here: http://www.gnu.org/licenses/lgpl.html
 */

// $Id: calendar.js,v 1.51 2005/03/07 16:44:31 mishoo Exp $

/** The Calendar object constructor. */
Calendar = function (firstDayOfWeek, dateStr, onSelected, onClose) {
  // member variables
  this.activeDiv = null;
  this.currentDateEl = null;
  this.getDateStatus = null;
  this.getDateToolTip = null;
  this.getDateText = null;
  this.timeout = null;
  this.onSelected = onSelected || null;
  this.onClose = onClose || null;
  this.dragging = false;
  this.hidden = false;
  this.minYear = 1970;
  this.maxYear = 2050;
  this.dateFormat = Calendar._TT["DEF_DATE_FORMAT"];
  this.ttDateFormat = Calendar._TT["TT_DATE_FORMAT"];
  this.isPopup = true;
  this.weekNumbers = true;
  this.firstDayOfWeek = typeof firstDayOfWeek == "number" ? firstDayOfWeek : Calendar._FD; // 0 for Sunday, 1 for Monday, etc.
  this.showsOtherMonths = false;
  this.dateStr = dateStr;
  this.ar_days = null;
  this.showsTime = false;
  this.time24 = true;
  this.yearStep = 2;
  this.hiliteToday = true;
  this.multiple = null;
  // HTML elements
  this.table = null;
  this.element = null;
  this.tbody = null;
  this.firstdayname = null;
  // Combo boxes
  this.monthsCombo = null;
  this.yearsCombo = null;
  this.hilitedMonth = null;
  this.activeMonth = null;
  this.hilitedYear = null;
  this.activeYear = null;
  // Information
  this.dateClicked = false;

  // one-time initializations
  if (typeof Calendar._SDN == "undefined") {
    // table of short day names
    if (typeof Calendar._SDN_len == "undefined")
      Calendar._SDN_len = 3;
    var ar = new Array();
    for (var i = 8; i > 0;) {
      ar[--i] = Calendar._DN[i].substr(0, Calendar._SDN_len);
    }
    Calendar._SDN = ar;
    // table of short month names
    if (typeof Calendar._SMN_len == "undefined")
      Calendar._SMN_len = 3;
    ar = new Array();
    for (var i = 12; i > 0;) {
      ar[--i] = Calendar._MN[i].substr(0, Calendar._SMN_len);
    }
    Calendar._SMN = ar;
  }
};

// ** constants

/// "static", needed for event handlers.
Calendar._C = null;

/// detect a special case of "web browser"
Calendar.is_ie = ( /msie/i.test(navigator.userAgent) &&
       !/opera/i.test(navigator.userAgent) );

Calendar.is_ie5 = ( Calendar.is_ie && /msie 5\.0/i.test(navigator.userAgent) );

/// detect Opera browser
Calendar.is_opera = /opera/i.test(navigator.userAgent);

/// detect KHTML-based browsers
Calendar.is_khtml = /Konqueror|Safari|KHTML/i.test(navigator.userAgent);

// BEGIN: UTILITY FUNCTIONS; beware that these might be moved into a separate
//        library, at some point.

Calendar.getAbsolutePos = function(el) {
  var SL = 0, ST = 0;
  var is_div = /^div$/i.test(el.tagName);
  if (is_div && el.scrollLeft)
    SL = el.scrollLeft;
  if (is_div && el.scrollTop)
    ST = el.scrollTop;
  var r = { x: el.offsetLeft - SL, y: el.offsetTop - ST };
  if (el.offsetParent) {
    var tmp = this.getAbsolutePos(el.offsetParent);
    r.x += tmp.x;
    r.y += tmp.y;
  }
  return r;
};

Calendar.isRelated = function (el, evt) {
  var related = evt.relatedTarget;
  if (!related) {
    var type = evt.type;
    if (type == "mouseover") {
      related = evt.fromElement;
    } else if (type == "mouseout") {
      related = evt.toElement;
    }
  }
  while (related) {
    if (related == el) {
      return true;
    }
    related = related.parentNode;
  }
  return false;
};

Calendar.removeClass = function(el, className) {
  if (!(el && el.className)) {
    return;
  }
  var cls = el.className.split(" ");
  var ar = new Array();
  for (var i = cls.length; i > 0;) {
    if (cls[--i] != className) {
      ar[ar.length] = cls[i];
    }
  }
  el.className = ar.join(" ");
};

Calendar.addClass = function(el, className) {
  Calendar.removeClass(el, className);
  el.className += " " + className;
};

// FIXME: the following 2 functions totally suck, are useless and should be replaced immediately.
Calendar.getElement = function(ev) {
  var f = Calendar.is_ie ? window.event.srcElement : ev.currentTarget;
  while (f.nodeType != 1 || /^div$/i.test(f.tagName))
    f = f.parentNode;
  return f;
};

Calendar.getTargetElement = function(ev) {
  var f = Calendar.is_ie ? window.event.srcElement : ev.target;
  while (f.nodeType != 1)
    f = f.parentNode;
  return f;
};

Calendar.stopEvent = function(ev) {
  ev || (ev = window.event);
  if (Calendar.is_ie) {
    ev.cancelBubble = true;
    ev.returnValue = false;
  } else {
    ev.preventDefault();
    ev.stopPropagation();
  }
  return false;
};

Calendar.addEvent = function(el, evname, func) {
  if (el.attachEvent) { // IE
    el.attachEvent("on" + evname, func);
  } else if (el.addEventListener) { // Gecko / W3C
    el.addEventListener(evname, func, true);
  } else {
    el["on" + evname] = func;
  }
};

Calendar.removeEvent = function(el, evname, func) {
  if (el.detachEvent) { // IE
    el.detachEvent("on" + evname, func);
  } else if (el.removeEventListener) { // Gecko / W3C
    el.removeEventListener(evname, func, true);
  } else {
    el["on" + evname] = null;
  }
};

Calendar.createElement = function(type, parent) {
  var el = null;
  if (document.createElementNS) {
    // use the XHTML namespace; IE won't normally get here unless
    // _they_ "fix" the DOM2 implementation.
    el = document.createElementNS("http://www.w3.org/1999/xhtml", type);
  } else {
    el = document.createElement(type);
  }
  if (typeof parent != "undefined") {
    parent.appendChild(el);
  }
  return el;
};

// END: UTILITY FUNCTIONS

// BEGIN: CALENDAR STATIC FUNCTIONS

/** Internal -- adds a set of events to make some element behave like a button. */
Calendar._add_evs = function(el) {
  with (Calendar) {
    addEvent(el, "mouseover", dayMouseOver);
    addEvent(el, "mousedown", dayMouseDown);
    addEvent(el, "mouseout", dayMouseOut);
    if (is_ie) {
      addEvent(el, "dblclick", dayMouseDblClick);
      el.setAttribute("unselectable", true);
    }
  }
};

Calendar.findMonth = function(el) {
  if (typeof el.month != "undefined") {
    return el;
  } else if (typeof el.parentNode.month != "undefined") {
    return el.parentNode;
  }
  return null;
};

Calendar.findYear = function(el) {
  if (typeof el.year != "undefined") {
    return el;
  } else if (typeof el.parentNode.year != "undefined") {
    return el.parentNode;
  }
  return null;
};

Calendar.showMonthsCombo = function () {
  var cal = Calendar._C;
  if (!cal) {
    return false;
  }
  var cal = cal;
  var cd = cal.activeDiv;
  var mc = cal.monthsCombo;
  if (cal.hilitedMonth) {
    Calendar.removeClass(cal.hilitedMonth, "hilite");
  }
  if (cal.activeMonth) {
    Calendar.removeClass(cal.activeMonth, "active");
  }
  var mon = cal.monthsCombo.getElementsByTagName("div")[cal.date.getMonth()];
  Calendar.addClass(mon, "active");
  cal.activeMonth = mon;
  var s = mc.style;
  s.display = "block";
  if (cd.navtype < 0)
    s.left = cd.offsetLeft + "px";
  else {
    var mcw = mc.offsetWidth;
    if (typeof mcw == "undefined")
      // Konqueror brain-dead techniques
      mcw = 50;
    s.left = (cd.offsetLeft + cd.offsetWidth - mcw) + "px";
  }
  s.top = (cd.offsetTop + cd.offsetHeight) + "px";
};

Calendar.showYearsCombo = function (fwd) {
  var cal = Calendar._C;
  if (!cal) {
    return false;
  }
  var cal = cal;
  var cd = cal.activeDiv;
  var yc = cal.yearsCombo;
  if (cal.hilitedYear) {
    Calendar.removeClass(cal.hilitedYear, "hilite");
  }
  if (cal.activeYear) {
    Calendar.removeClass(cal.activeYear, "active");
  }
  cal.activeYear = null;
  var Y = cal.date.getFullYear() + (fwd ? 1 : -1);
  var yr = yc.firstChild;
  var show = false;
  for (var i = 12; i > 0; --i) {
    if (Y >= cal.minYear && Y <= cal.maxYear) {
      yr.innerHTML = Y;
      yr.year = Y;
      yr.style.display = "block";
      show = true;
    } else {
      yr.style.display = "none";
    }
    yr = yr.nextSibling;
    Y += fwd ? cal.yearStep : -cal.yearStep;
  }
  if (show) {
    var s = yc.style;
    s.display = "block";
    if (cd.navtype < 0)
      s.left = cd.offsetLeft + "px";
    else {
      var ycw = yc.offsetWidth;
      if (typeof ycw == "undefined")
        // Konqueror brain-dead techniques
        ycw = 50;
      s.left = (cd.offsetLeft + cd.offsetWidth - ycw) + "px";
    }
    s.top = (cd.offsetTop + cd.offsetHeight) + "px";
  }
};

// event handlers

Calendar.tableMouseUp = function(ev) {
  var cal = Calendar._C;
  if (!cal) {
    return false;
  }
  if (cal.timeout) {
    clearTimeout(cal.timeout);
  }
  var el = cal.activeDiv;
  if (!el) {
    return false;
  }
  var target = Calendar.getTargetElement(ev);
  ev || (ev = window.event);
  Calendar.removeClass(el, "active");
  if (target == el || target.parentNode == el) {
    Calendar.cellClick(el, ev);
  }
  var mon = Calendar.findMonth(target);
  var date = null;
  if (mon) {
    date = new Date(cal.date);
    if (mon.month != date.getMonth()) {
      date.setMonth(mon.month);
      cal.setDate(date);
      cal.dateClicked = false;
      cal.callHandler();
    }
  } else {
    var year = Calendar.findYear(target);
    if (year) {
      date = new Date(cal.date);
      if (year.year != date.getFullYear()) {
        date.setFullYear(year.year);
        cal.setDate(date);
        cal.dateClicked = false;
        cal.callHandler();
      }
    }
  }
  with (Calendar) {
    removeEvent(document, "mouseup", tableMouseUp);
    removeEvent(document, "mouseover", tableMouseOver);
    removeEvent(document, "mousemove", tableMouseOver);
    cal._hideCombos();
    _C = null;
    return stopEvent(ev);
  }
};

Calendar.tableMouseOver = function (ev) {
  var cal = Calendar._C;
  if (!cal) {
    return;
  }
  var el = cal.activeDiv;
  var target = Calendar.getTargetElement(ev);
  if (target == el || target.parentNode == el) {
    Calendar.addClass(el, "hilite active");
    Calendar.addClass(el.parentNode, "rowhilite");
  } else {
    if (typeof el.navtype == "undefined" || (el.navtype != 50 && (el.navtype == 0 || Math.abs(el.navtype) > 2)))
      Calendar.removeClass(el, "active");
    Calendar.removeClass(el, "hilite");
    Calendar.removeClass(el.parentNode, "rowhilite");
  }
  ev || (ev = window.event);
  if (el.navtype == 50 && target != el) {
    var pos = Calendar.getAbsolutePos(el);
    var w = el.offsetWidth;
    var x = ev.clientX;
    var dx;
    var decrease = true;
    if (x > pos.x + w) {
      dx = x - pos.x - w;
      decrease = false;
    } else
      dx = pos.x - x;

    if (dx < 0) dx = 0;
    var range = el._range;
    var current = el._current;
    var count = Math.floor(dx / 10) % range.length;
    for (var i = range.length; --i >= 0;)
      if (range[i] == current)
        break;
    while (count-- > 0)
      if (decrease) {
        if (--i < 0)
          i = range.length - 1;
      } else if ( ++i >= range.length )
        i = 0;
    var newval = range[i];
    el.innerHTML = newval;

    cal.onUpdateTime();
  }
  var mon = Calendar.findMonth(target);
  if (mon) {
    if (mon.month != cal.date.getMonth()) {
      if (cal.hilitedMonth) {
        Calendar.removeClass(cal.hilitedMonth, "hilite");
      }
      Calendar.addClass(mon, "hilite");
      cal.hilitedMonth = mon;
    } else if (cal.hilitedMonth) {
      Calendar.removeClass(cal.hilitedMonth, "hilite");
    }
  } else {
    if (cal.hilitedMonth) {
      Calendar.removeClass(cal.hilitedMonth, "hilite");
    }
    var year = Calendar.findYear(target);
    if (year) {
      if (year.year != cal.date.getFullYear()) {
        if (cal.hilitedYear) {
          Calendar.removeClass(cal.hilitedYear, "hilite");
        }
        Calendar.addClass(year, "hilite");
        cal.hilitedYear = year;
      } else if (cal.hilitedYear) {
        Calendar.removeClass(cal.hilitedYear, "hilite");
      }
    } else if (cal.hilitedYear) {
      Calendar.removeClass(cal.hilitedYear, "hilite");
    }
  }
  return Calendar.stopEvent(ev);
};

Calendar.tableMouseDown = function (ev) {
  if (Calendar.getTargetElement(ev) == Calendar.getElement(ev)) {
    return Calendar.stopEvent(ev);
  }
};

Calendar.calDragIt = function (ev) {
  var cal = Calendar._C;
  if (!(cal && cal.dragging)) {
    return false;
  }
  var posX;
  var posY;
  if (Calendar.is_ie) {
    posY = window.event.clientY + document.body.scrollTop;
    posX = window.event.clientX + document.body.scrollLeft;
  } else {
    posX = ev.pageX;
    posY = ev.pageY;
  }
  cal.hideShowCovered();
  var st = cal.element.style;
  st.left = (posX - cal.xOffs) + "px";
  st.top = (posY - cal.yOffs) + "px";
  return Calendar.stopEvent(ev);
};

Calendar.calDragEnd = function (ev) {
  var cal = Calendar._C;
  if (!cal) {
    return false;
  }
  cal.dragging = false;
  with (Calendar) {
    removeEvent(document, "mousemove", calDragIt);
    removeEvent(document, "mouseup", calDragEnd);
    tableMouseUp(ev);
  }
  cal.hideShowCovered();
};

Calendar.dayMouseDown = function(ev) {
  var el = Calendar.getElement(ev);
  if (el.disabled) {
    return false;
  }
  var cal = el.calendar;
  cal.activeDiv = el;
  Calendar._C = cal;
  if (el.navtype != 300) with (Calendar) {
    if (el.navtype == 50) {
      el._current = el.innerHTML;
      addEvent(document, "mousemove", tableMouseOver);
    } else
      addEvent(document, Calendar.is_ie5 ? "mousemove" : "mouseover", tableMouseOver);
    addClass(el, "hilite active");
    addEvent(document, "mouseup", tableMouseUp);
  } else if (cal.isPopup) {
    cal._dragStart(ev);
  }
  if (el.navtype == -1 || el.navtype == 1) {
    if (cal.timeout) clearTimeout(cal.timeout);
    cal.timeout = setTimeout("Calendar.showMonthsCombo()", 250);
  } else if (el.navtype == -2 || el.navtype == 2) {
    if (cal.timeout) clearTimeout(cal.timeout);
    cal.timeout = setTimeout((el.navtype > 0) ? "Calendar.showYearsCombo(true)" : "Calendar.showYearsCombo(false)", 250);
  } else {
    cal.timeout = null;
  }
  return Calendar.stopEvent(ev);
};

Calendar.dayMouseDblClick = function(ev) {
  Calendar.cellClick(Calendar.getElement(ev), ev || window.event);
  if (Calendar.is_ie) {
    document.selection.empty();
  }
};

Calendar.dayMouseOver = function(ev) {
  var el = Calendar.getElement(ev);
  if (Calendar.isRelated(el, ev) || Calendar._C || el.disabled) {
    return false;
  }
  if (el.ttip) {
    if (el.ttip.substr(0, 1) == "_") {
      el.ttip = el.caldate.print(el.calendar.ttDateFormat) + el.ttip.substr(1);
    }
    el.calendar.tooltips.innerHTML = el.ttip;
  }
  if (el.navtype != 300) {
    Calendar.addClass(el, "hilite");
    if (el.caldate) {
      Calendar.addClass(el.parentNode, "rowhilite");
    }
  }
  return Calendar.stopEvent(ev);
};

Calendar.dayMouseOut = function(ev) {
  with (Calendar) {
    var el = getElement(ev);
    if (isRelated(el, ev) || _C || el.disabled)
      return false;
    removeClass(el, "hilite");
    if (el.caldate)
      removeClass(el.parentNode, "rowhilite");
    if (el.calendar)
      el.calendar.tooltips.innerHTML = _TT["SEL_DATE"];
    return stopEvent(ev);
  }
};

/**
 *  A generic "click" handler :) handles all types of buttons defined in this
 *  calendar.
 */
Calendar.cellClick = function(el, ev) {
  var cal = el.calendar;
  var closing = false;
  var newdate = false;
  var date = null;
  if (typeof el.navtype == "undefined") {
    if (cal.currentDateEl) {
      Calendar.removeClass(cal.currentDateEl, "selected");
      Calendar.addClass(el, "selected");
      closing = (cal.currentDateEl == el);
      if (!closing) {
        cal.currentDateEl = el;
      }
    }
    cal.date.setDateOnly(el.caldate);
    date = cal.date;
    var other_month = !(cal.dateClicked = !el.otherMonth);
    if (!other_month && !cal.currentDateEl)
      cal._toggleMultipleDate(new Date(date));
    else
      newdate = !el.disabled;
    // a date was clicked
    if (other_month)
      cal._init(cal.firstDayOfWeek, date);
  } else {
    if (el.navtype == 200) {
      Calendar.removeClass(el, "hilite");
      cal.callCloseHandler();
      return;
    }
    date = new Date(cal.date);
    if (el.navtype == 0)
      date.setDateOnly(new Date()); // TODAY
    // unless "today" was clicked, we assume no date was clicked so
    // the selected handler will know not to close the calenar when
    // in single-click mode.
    // cal.dateClicked = (el.navtype == 0);
    cal.dateClicked = false;
    var year = date.getFullYear();
    var mon = date.getMonth();
    function setMonth(m) {
      var day = date.getDate();
      var max = date.getMonthDays(m);
      if (day > max) {
        date.setDate(max);
      }
      date.setMonth(m);
    };
    switch (el.navtype) {
        case 400:
      Calendar.removeClass(el, "hilite");
      var text = Calendar._TT["ABOUT"];
      if (typeof text != "undefined") {
        text += cal.showsTime ? Calendar._TT["ABOUT_TIME"] : "";
      } else {
        // FIXME: this should be removed as soon as lang files get updated!
        text = "Help and about box text is not translated into this language.\n" +
          "If you know this language and you feel generous please update\n" +
          "the corresponding file in \"lang\" subdir to match calendar-en.js\n" +
          "and send it back to <mihai_bazon@yahoo.com> to get it into the distribution  ;-)\n\n" +
          "Thank you!\n" +
          "http://dynarch.com/mishoo/calendar.epl\n";
      }
      alert(text);
      return;
        case -2:
      if (year > cal.minYear) {
        date.setFullYear(year - 1);
      }
      break;
        case -1:
      if (mon > 0) {
        setMonth(mon - 1);
      } else if (year-- > cal.minYear) {
        date.setFullYear(year);
        setMonth(11);
      }
      break;
        case 1:
      if (mon < 11) {
        setMonth(mon + 1);
      } else if (year < cal.maxYear) {
        date.setFullYear(year + 1);
        setMonth(0);
      }
      break;
        case 2:
      if (year < cal.maxYear) {
        date.setFullYear(year + 1);
      }
      break;
        case 100:
      cal.setFirstDayOfWeek(el.fdow);
      return;
        case 50:
      var range = el._range;
      var current = el.innerHTML;
      for (var i = range.length; --i >= 0;)
        if (range[i] == current)
          break;
      if (ev && ev.shiftKey) {
        if (--i < 0)
          i = range.length - 1;
      } else if ( ++i >= range.length )
        i = 0;
      var newval = range[i];
      el.innerHTML = newval;
      cal.onUpdateTime();
      return;
        case 0:
      // TODAY will bring us here
      if ((typeof cal.getDateStatus == "function") &&
          cal.getDateStatus(date, date.getFullYear(), date.getMonth(), date.getDate())) {
        return false;
      }
      break;
    }
    if (!date.equalsTo(cal.date)) {
      cal.setDate(date);
      newdate = true;
    } else if (el.navtype == 0)
      newdate = closing = true;
  }
  if (newdate) {
    ev && cal.callHandler();
  }
  if (closing) {
    Calendar.removeClass(el, "hilite");
    ev && cal.callCloseHandler();
  }
};

// END: CALENDAR STATIC FUNCTIONS

// BEGIN: CALENDAR OBJECT FUNCTIONS

/**
 *  This function creates the calendar inside the given parent.  If _par is
 *  null than it creates a popup calendar inside the BODY element.  If _par is
 *  an element, be it BODY, then it creates a non-popup calendar (still
 *  hidden).  Some properties need to be set before calling this function.
 */
Calendar.prototype.create = function (_par) {
  var parent = null;
  if (! _par) {
    // default parent is the document body, in which case we create
    // a popup calendar.
    parent = document.getElementsByTagName("body")[0];
    this.isPopup = true;
  } else {
    parent = _par;
    this.isPopup = false;
  }
  this.date = this.dateStr ? new Date(this.dateStr) : new Date();

  var table = Calendar.createElement("table");
  this.table = table;
  table.cellSpacing = 0;
  table.cellPadding = 0;
  table.calendar = this;
  Calendar.addEvent(table, "mousedown", Calendar.tableMouseDown);

  var div = Calendar.createElement("div");
  this.element = div;
  div.className = "calendar";
  if (this.isPopup) {
    div.style.position = "absolute";
    div.style.display = "none";
  }
  div.appendChild(table);

  var thead = Calendar.createElement("thead", table);
  var cell = null;
  var row = null;

  var cal = this;
  var hh = function (text, cs, navtype) {
    cell = Calendar.createElement("td", row);
    cell.colSpan = cs;
    cell.className = "button";
    if (navtype != 0 && Math.abs(navtype) <= 2)
      cell.className += " nav";
    Calendar._add_evs(cell);
    cell.calendar = cal;
    cell.navtype = navtype;
    cell.innerHTML = "<div unselectable='on'>" + text + "</div>";
    return cell;
  };

  row = Calendar.createElement("tr", thead);
  var title_length = 6;
  (this.isPopup) && --title_length;
  (this.weekNumbers) && ++title_length;

  hh("?", 1, 400).ttip = Calendar._TT["INFO"];
  this.title = hh("", title_length, 300);
  this.title.className = "title";
  if (this.isPopup) {
    this.title.ttip = Calendar._TT["DRAG_TO_MOVE"];
    this.title.style.cursor = "move";
    hh("&#x00d7;", 1, 200).ttip = Calendar._TT["CLOSE"];
  }

  row = Calendar.createElement("tr", thead);
  row.className = "headrow";

  this._nav_py = hh("&#x00ab;", 1, -2);
  this._nav_py.ttip = Calendar._TT["PREV_YEAR"];

  this._nav_pm = hh("&#x2039;", 1, -1);
  this._nav_pm.ttip = Calendar._TT["PREV_MONTH"];

  this._nav_now = hh(Calendar._TT["TODAY"], this.weekNumbers ? 4 : 3, 0);
  this._nav_now.ttip = Calendar._TT["GO_TODAY"];

  this._nav_nm = hh("&#x203a;", 1, 1);
  this._nav_nm.ttip = Calendar._TT["NEXT_MONTH"];

  this._nav_ny = hh("&#x00bb;", 1, 2);
  this._nav_ny.ttip = Calendar._TT["NEXT_YEAR"];

  // day names
  row = Calendar.createElement("tr", thead);
  row.className = "daynames";
  if (this.weekNumbers) {
    cell = Calendar.createElement("td", row);
    cell.className = "name wn";
    cell.innerHTML = Calendar._TT["WK"];
  }
  for (var i = 7; i > 0; --i) {
    cell = Calendar.createElement("td", row);
    if (!i) {
      cell.navtype = 100;
      cell.calendar = this;
      Calendar._add_evs(cell);
    }
  }
  this.firstdayname = (this.weekNumbers) ? row.firstChild.nextSibling : row.firstChild;
  this._displayWeekdays();

  var tbody = Calendar.createElement("tbody", table);
  this.tbody = tbody;

  for (i = 6; i > 0; --i) {
    row = Calendar.createElement("tr", tbody);
    if (this.weekNumbers) {
      cell = Calendar.createElement("td", row);
    }
    for (var j = 7; j > 0; --j) {
      cell = Calendar.createElement("td", row);
      cell.calendar = this;
      Calendar._add_evs(cell);
    }
  }

  if (this.showsTime) {
    row = Calendar.createElement("tr", tbody);
    row.className = "time";

    cell = Calendar.createElement("td", row);
    cell.className = "time";
    cell.colSpan = 2;
    cell.innerHTML = Calendar._TT["TIME"] || "&nbsp;";

    cell = Calendar.createElement("td", row);
    cell.className = "time";
    cell.colSpan = this.weekNumbers ? 4 : 3;

    (function(){
      function makeTimePart(className, init, range_start, range_end) {
        var part = Calendar.createElement("span", cell);
        part.className = className;
        part.innerHTML = init;
        part.calendar = cal;
        part.ttip = Calendar._TT["TIME_PART"];
        part.navtype = 50;
        part._range = [];
        if (typeof range_start != "number")
          part._range = range_start;
        else {
          for (var i = range_start; i <= range_end; ++i) {
            var txt;
            if (i < 10 && range_end >= 10) txt = '0' + i;
            else txt = '' + i;
            part._range[part._range.length] = txt;
          }
        }
        Calendar._add_evs(part);
        return part;
      };
      var hrs = cal.date.getHours();
      var mins = cal.date.getMinutes();
      var t12 = !cal.time24;
      var pm = (hrs > 12);
      if (t12 && pm) hrs -= 12;
      var H = makeTimePart("hour", hrs, t12 ? 1 : 0, t12 ? 12 : 23);
      var span = Calendar.createElement("span", cell);
      span.innerHTML = ":";
      span.className = "colon";
      var M = makeTimePart("minute", mins, 0, 59);
      var AP = null;
      cell = Calendar.createElement("td", row);
      cell.className = "time";
      cell.colSpan = 2;
      if (t12)
        AP = makeTimePart("ampm", pm ? "pm" : "am", ["am", "pm"]);
      else
        cell.innerHTML = "&nbsp;";

      cal.onSetTime = function() {
        var pm, hrs = this.date.getHours(),
          mins = this.date.getMinutes();
        if (t12) {
          pm = (hrs >= 12);
          if (pm) hrs -= 12;
          if (hrs == 0) hrs = 12;
          AP.innerHTML = pm ? "pm" : "am";
        }
        H.innerHTML = (hrs < 10) ? ("0" + hrs) : hrs;
        M.innerHTML = (mins < 10) ? ("0" + mins) : mins;
      };

      cal.onUpdateTime = function() {
        var date = this.date;
        var h = parseInt(H.innerHTML, 10);
        if (t12) {
          if (/pm/i.test(AP.innerHTML) && h < 12)
            h += 12;
          else if (/am/i.test(AP.innerHTML) && h == 12)
            h = 0;
        }
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        date.setHours(h);
        date.setMinutes(parseInt(M.innerHTML, 10));
        date.setFullYear(y);
        date.setMonth(m);
        date.setDate(d);
        this.dateClicked = false;
        this.callHandler();
      };
    })();
  } else {
    this.onSetTime = this.onUpdateTime = function() {};
  }

  var tfoot = Calendar.createElement("tfoot", table);

  row = Calendar.createElement("tr", tfoot);
  row.className = "footrow";

  cell = hh(Calendar._TT["SEL_DATE"], this.weekNumbers ? 8 : 7, 300);
  cell.className = "ttip";
  if (this.isPopup) {
    cell.ttip = Calendar._TT["DRAG_TO_MOVE"];
    cell.style.cursor = "move";
  }
  this.tooltips = cell;

  div = Calendar.createElement("div", this.element);
  this.monthsCombo = div;
  div.className = "combo";
  for (i = 0; i < Calendar._MN.length; ++i) {
    var mn = Calendar.createElement("div");
    mn.className = Calendar.is_ie ? "label-IEfix" : "label";
    mn.month = i;
    mn.innerHTML = Calendar._SMN[i];
    div.appendChild(mn);
  }

  div = Calendar.createElement("div", this.element);
  this.yearsCombo = div;
  div.className = "combo";
  for (i = 12; i > 0; --i) {
    var yr = Calendar.createElement("div");
    yr.className = Calendar.is_ie ? "label-IEfix" : "label";
    div.appendChild(yr);
  }

  this._init(this.firstDayOfWeek, this.date);
  parent.appendChild(this.element);
};

/** keyboard navigation, only for popup calendars */
Calendar._keyEvent = function(ev) {
  var cal = window._dynarch_popupCalendar;
  if (!cal || cal.multiple)
    return false;
  (Calendar.is_ie) && (ev = window.event);
  var act = (Calendar.is_ie || ev.type == "keypress"),
    K = ev.keyCode;
  if (ev.ctrlKey) {
    switch (K) {
        case 37: // KEY left
      act && Calendar.cellClick(cal._nav_pm);
      break;
        case 38: // KEY up
      act && Calendar.cellClick(cal._nav_py);
      break;
        case 39: // KEY right
      act && Calendar.cellClick(cal._nav_nm);
      break;
        case 40: // KEY down
      act && Calendar.cellClick(cal._nav_ny);
      break;
        default:
      return false;
    }
  } else switch (K) {
      case 32: // KEY space (now)
    Calendar.cellClick(cal._nav_now);
    break;
      case 27: // KEY esc
    act && cal.callCloseHandler();
    break;
      case 37: // KEY left
      case 38: // KEY up
      case 39: // KEY right
      case 40: // KEY down
    if (act) {
      var prev, x, y, ne, el, step;
      prev = K == 37 || K == 38;
      step = (K == 37 || K == 39) ? 1 : 7;
      function setVars() {
        el = cal.currentDateEl;
        var p = el.pos;
        x = p & 15;
        y = p >> 4;
        ne = cal.ar_days[y][x];
      };setVars();
      function prevMonth() {
        var date = new Date(cal.date);
        date.setDate(date.getDate() - step);
        cal.setDate(date);
      };
      function nextMonth() {
        var date = new Date(cal.date);
        date.setDate(date.getDate() + step);
        cal.setDate(date);
      };
      while (1) {
        switch (K) {
            case 37: // KEY left
          if (--x >= 0)
            ne = cal.ar_days[y][x];
          else {
            x = 6;
            K = 38;
            continue;
          }
          break;
            case 38: // KEY up
          if (--y >= 0)
            ne = cal.ar_days[y][x];
          else {
            prevMonth();
            setVars();
          }
          break;
            case 39: // KEY right
          if (++x < 7)
            ne = cal.ar_days[y][x];
          else {
            x = 0;
            K = 40;
            continue;
          }
          break;
            case 40: // KEY down
          if (++y < cal.ar_days.length)
            ne = cal.ar_days[y][x];
          else {
            nextMonth();
            setVars();
          }
          break;
        }
        break;
      }
      if (ne) {
        if (!ne.disabled)
          Calendar.cellClick(ne);
        else if (prev)
          prevMonth();
        else
          nextMonth();
      }
    }
    break;
      case 13: // KEY enter
    if (act)
      Calendar.cellClick(cal.currentDateEl, ev);
    break;
      default:
    return false;
  }
  return Calendar.stopEvent(ev);
};

/**
 *  (RE)Initializes the calendar to the given date and firstDayOfWeek
 */
Calendar.prototype._init = function (firstDayOfWeek, date) {
  var today = new Date(),
    TY = today.getFullYear(),
    TM = today.getMonth(),
    TD = today.getDate();
  this.table.style.visibility = "hidden";
  var year = date.getFullYear();
  if (year < this.minYear) {
    year = this.minYear;
    date.setFullYear(year);
  } else if (year > this.maxYear) {
    year = this.maxYear;
    date.setFullYear(year);
  }
  this.firstDayOfWeek = firstDayOfWeek;
  this.date = new Date(date);
  var month = date.getMonth();
  var mday = date.getDate();
  var no_days = date.getMonthDays();

  // calendar voodoo for computing the first day that would actually be
  // displayed in the calendar, even if it's from the previous month.
  // WARNING: this is magic. ;-)
  date.setDate(1);
  var day1 = (date.getDay() - this.firstDayOfWeek) % 7;
  if (day1 < 0)
    day1 += 7;
  date.setDate(-day1);
  date.setDate(date.getDate() + 1);

  var row = this.tbody.firstChild;
  var MN = Calendar._SMN[month];
  var ar_days = this.ar_days = new Array();
  var weekend = Calendar._TT["WEEKEND"];
  var dates = this.multiple ? (this.datesCells = {}) : null;
  for (var i = 0; i < 6; ++i, row = row.nextSibling) {
    var cell = row.firstChild;
    if (this.weekNumbers) {
      cell.className = "day wn";
      cell.innerHTML = date.getWeekNumber();
      cell = cell.nextSibling;
    }
    row.className = "daysrow";
    var hasdays = false, iday, dpos = ar_days[i] = [];
    for (var j = 0; j < 7; ++j, cell = cell.nextSibling, date.setDate(iday + 1)) {
      iday = date.getDate();
      var wday = date.getDay();
      cell.className = "day";
      cell.pos = i << 4 | j;
      dpos[j] = cell;
      var current_month = (date.getMonth() == month);
      if (!current_month) {
        if (this.showsOtherMonths) {
          cell.className += " othermonth";
          cell.otherMonth = true;
        } else {
          cell.className = "emptycell";
          cell.innerHTML = "&nbsp;";
          cell.disabled = true;
          continue;
        }
      } else {
        cell.otherMonth = false;
        hasdays = true;
      }
      cell.disabled = false;
      cell.innerHTML = this.getDateText ? this.getDateText(date, iday) : iday;
      if (dates)
        dates[date.print("%Y%m%d")] = cell;
      if (this.getDateStatus) {
        var status = this.getDateStatus(date, year, month, iday);
        if (this.getDateToolTip) {
          var toolTip = this.getDateToolTip(date, year, month, iday);
          if (toolTip)
            cell.title = toolTip;
        }
        if (status === true) {
          cell.className += " disabled";
          cell.disabled = true;
        } else {
          if (/disabled/i.test(status))
            cell.disabled = true;
          cell.className += " " + status;
        }
      }
      if (!cell.disabled) {
        cell.caldate = new Date(date);
        cell.ttip = "_";
        if (!this.multiple && current_month
            && iday == mday && this.hiliteToday) {
          cell.className += " selected";
          this.currentDateEl = cell;
        }
        if (date.getFullYear() == TY &&
            date.getMonth() == TM &&
            iday == TD) {
          cell.className += " today";
          cell.ttip += Calendar._TT["PART_TODAY"];
        }
        if (weekend.indexOf(wday.toString()) != -1)
          cell.className += cell.otherMonth ? " oweekend" : " weekend";
      }
    }
    if (!(hasdays || this.showsOtherMonths))
      row.className = "emptyrow";
  }
  this.title.innerHTML = Calendar._MN[month] + ", " + year;
  this.onSetTime();
  this.table.style.visibility = "visible";
  this._initMultipleDates();
  // PROFILE
  // this.tooltips.innerHTML = "Generated in " + ((new Date()) - today) + " ms";
};

Calendar.prototype._initMultipleDates = function() {
  if (this.multiple) {
    for (var i in this.multiple) {
      var cell = this.datesCells[i];
      var d = this.multiple[i];
      if (!d)
        continue;
      if (cell)
        cell.className += " selected";
    }
  }
};

Calendar.prototype._toggleMultipleDate = function(date) {
  if (this.multiple) {
    var ds = date.print("%Y%m%d");
    var cell = this.datesCells[ds];
    if (cell) {
      var d = this.multiple[ds];
      if (!d) {
        Calendar.addClass(cell, "selected");
        this.multiple[ds] = date;
      } else {
        Calendar.removeClass(cell, "selected");
        delete this.multiple[ds];
      }
    }
  }
};

Calendar.prototype.setDateToolTipHandler = function (unaryFunction) {
  this.getDateToolTip = unaryFunction;
};

/**
 *  Calls _init function above for going to a certain date (but only if the
 *  date is different than the currently selected one).
 */
Calendar.prototype.setDate = function (date) {
  if (!date.equalsTo(this.date)) {
    this._init(this.firstDayOfWeek, date);
  }
};

/**
 *  Refreshes the calendar.  Useful if the "disabledHandler" function is
 *  dynamic, meaning that the list of disabled date can change at runtime.
 *  Just * call this function if you think that the list of disabled dates
 *  should * change.
 */
Calendar.prototype.refresh = function () {
  this._init(this.firstDayOfWeek, this.date);
};

/** Modifies the "firstDayOfWeek" parameter (pass 0 for Synday, 1 for Monday, etc.). */
Calendar.prototype.setFirstDayOfWeek = function (firstDayOfWeek) {
  this._init(firstDayOfWeek, this.date);
  this._displayWeekdays();
};

/**
 *  Allows customization of what dates are enabled.  The "unaryFunction"
 *  parameter must be a function object that receives the date (as a JS Date
 *  object) and returns a boolean value.  If the returned value is true then
 *  the passed date will be marked as disabled.
 */
Calendar.prototype.setDateStatusHandler = Calendar.prototype.setDisabledHandler = function (unaryFunction) {
  this.getDateStatus = unaryFunction;
};

/** Customization of allowed year range for the calendar. */
Calendar.prototype.setRange = function (a, z) {
  this.minYear = a;
  this.maxYear = z;
};

/** Calls the first user handler (selectedHandler). */
Calendar.prototype.callHandler = function () {
  if (this.onSelected) {
    this.onSelected(this, this.date.print(this.dateFormat));
  }
};

/** Calls the second user handler (closeHandler). */
Calendar.prototype.callCloseHandler = function () {
  if (this.onClose) {
    this.onClose(this);
  }
  this.hideShowCovered();
};

/** Removes the calendar object from the DOM tree and destroys it. */
Calendar.prototype.destroy = function () {
  var el = this.element.parentNode;
  el.removeChild(this.element);
  Calendar._C = null;
  window._dynarch_popupCalendar = null;
};

/**
 *  Moves the calendar element to a different section in the DOM tree (changes
 *  its parent).
 */
Calendar.prototype.reparent = function (new_parent) {
  var el = this.element;
  el.parentNode.removeChild(el);
  new_parent.appendChild(el);
};

// This gets called when the user presses a mouse button anywhere in the
// document, if the calendar is shown.  If the click was outside the open
// calendar this function closes it.
Calendar._checkCalendar = function(ev) {
  var calendar = window._dynarch_popupCalendar;
  if (!calendar) {
    return false;
  }
  var el = Calendar.is_ie ? Calendar.getElement(ev) : Calendar.getTargetElement(ev);
  for (; el != null && el != calendar.element; el = el.parentNode);
  if (el == null) {
    // calls closeHandler which should hide the calendar.
    window._dynarch_popupCalendar.callCloseHandler();
    return Calendar.stopEvent(ev);
  }
};

/** Shows the calendar. */
Calendar.prototype.show = function () {
  var rows = this.table.getElementsByTagName("tr");
  for (var i = rows.length; i > 0;) {
    var row = rows[--i];
    Calendar.removeClass(row, "rowhilite");
    var cells = row.getElementsByTagName("td");
    for (var j = cells.length; j > 0;) {
      var cell = cells[--j];
      Calendar.removeClass(cell, "hilite");
      Calendar.removeClass(cell, "active");
    }
  }
  this.element.style.display = "block";
  this.hidden = false;
  if (this.isPopup) {
    window._dynarch_popupCalendar = this;
    Calendar.addEvent(document, "keydown", Calendar._keyEvent);
    Calendar.addEvent(document, "keypress", Calendar._keyEvent);
    Calendar.addEvent(document, "mousedown", Calendar._checkCalendar);
  }
  this.hideShowCovered();
};

/**
 *  Hides the calendar.  Also removes any "hilite" from the class of any TD
 *  element.
 */
Calendar.prototype.hide = function () {
  if (this.isPopup) {
    Calendar.removeEvent(document, "keydown", Calendar._keyEvent);
    Calendar.removeEvent(document, "keypress", Calendar._keyEvent);
    Calendar.removeEvent(document, "mousedown", Calendar._checkCalendar);
  }
  this.element.style.display = "none";
  this.hidden = true;
  this.hideShowCovered();
};

/**
 *  Shows the calendar at a given absolute position (beware that, depending on
 *  the calendar element style -- position property -- this might be relative
 *  to the parent's containing rectangle).
 */
Calendar.prototype.showAt = function (x, y) {
  var s = this.element.style;
  s.left = x + "px";
  s.top = y + "px";
  this.show();
};

/** Shows the calendar near a given element. */
Calendar.prototype.showAtElement = function (el, opts) {
  var self = this;
  var p = Calendar.getAbsolutePos(el);
  if (!opts || typeof opts != "string") {
    this.showAt(p.x, p.y + el.offsetHeight);
    return true;
  }
  function fixPosition(box) {
    if (box.x < 0)
      box.x = 0;
    if (box.y < 0)
      box.y = 0;
    var cp = document.createElement("div");
    var s = cp.style;
    s.position = "absolute";
    s.right = s.bottom = s.width = s.height = "0px";
    document.body.appendChild(cp);
    var br = Calendar.getAbsolutePos(cp);
    document.body.removeChild(cp);
    if (Calendar.is_ie) {
      br.y += document.body.scrollTop;
      br.x += document.body.scrollLeft;
    } else {
      br.y += window.scrollY;
      br.x += window.scrollX;
    }
    var tmp = box.x + box.width - br.x;
    if (tmp > 0) box.x -= tmp;
    tmp = box.y + box.height - br.y;
    if (tmp > 0) box.y -= tmp;
  };
  this.element.style.display = "block";
  Calendar.continuation_for_the_fucking_khtml_browser = function() {
    var w = self.element.offsetWidth;
    var h = self.element.offsetHeight;
    self.element.style.display = "none";
    var valign = opts.substr(0, 1);
    var halign = "l";
    if (opts.length > 1) {
      halign = opts.substr(1, 1);
    }
    // vertical alignment
    switch (valign) {
        case "T": p.y -= h; break;
        case "B": p.y += el.offsetHeight; break;
        case "C": p.y += (el.offsetHeight - h) / 2; break;
        case "t": p.y += el.offsetHeight - h; break;
        case "b": break; // already there
    }
    // horizontal alignment
    switch (halign) {
        case "L": p.x -= w; break;
        case "R": p.x += el.offsetWidth; break;
        case "C": p.x += (el.offsetWidth - w) / 2; break;
        case "l": p.x += el.offsetWidth - w; break;
        case "r": break; // already there
    }
    p.width = w;
    p.height = h + 40;
    self.monthsCombo.style.display = "none";
    fixPosition(p);
    self.showAt(p.x, p.y);
  };
  if (Calendar.is_khtml)
    setTimeout("Calendar.continuation_for_the_fucking_khtml_browser()", 10);
  else
    Calendar.continuation_for_the_fucking_khtml_browser();
};

/** Customizes the date format. */
Calendar.prototype.setDateFormat = function (str) {
  this.dateFormat = str;
};

/** Customizes the tooltip date format. */
Calendar.prototype.setTtDateFormat = function (str) {
  this.ttDateFormat = str;
};

/**
 *  Tries to identify the date represented in a string.  If successful it also
 *  calls this.setDate which moves the calendar to the given date.
 */
Calendar.prototype.parseDate = function(str, fmt) {
  if (!fmt)
    fmt = this.dateFormat;
  this.setDate(Date.parseDate(str, fmt));
};

Calendar.prototype.hideShowCovered = function () {
  if (!Calendar.is_ie && !Calendar.is_opera)
    return;
  function getVisib(obj){
    var value = obj.style.visibility;
    if (!value) {
      if (document.defaultView && typeof (document.defaultView.getComputedStyle) == "function") { // Gecko, W3C
        if (!Calendar.is_khtml)
          value = document.defaultView.
            getComputedStyle(obj, "").getPropertyValue("visibility");
        else
          value = '';
      } else if (obj.currentStyle) { // IE
        value = obj.currentStyle.visibility;
      } else
        value = '';
    }
    return value;
  };

  var tags = new Array("applet", "iframe", "select");
  var el = this.element;

  var p = Calendar.getAbsolutePos(el);
  var EX1 = p.x;
  var EX2 = el.offsetWidth + EX1;
  var EY1 = p.y;
  var EY2 = el.offsetHeight + EY1;

  for (var k = tags.length; k > 0; ) {
    var ar = document.getElementsByTagName(tags[--k]);
    var cc = null;

    for (var i = ar.length; i > 0;) {
      cc = ar[--i];

      p = Calendar.getAbsolutePos(cc);
      var CX1 = p.x;
      var CX2 = cc.offsetWidth + CX1;
      var CY1 = p.y;
      var CY2 = cc.offsetHeight + CY1;

      if (this.hidden || (CX1 > EX2) || (CX2 < EX1) || (CY1 > EY2) || (CY2 < EY1)) {
        if (!cc.__msh_save_visibility) {
          cc.__msh_save_visibility = getVisib(cc);
        }
        cc.style.visibility = cc.__msh_save_visibility;
      } else {
        if (!cc.__msh_save_visibility) {
          cc.__msh_save_visibility = getVisib(cc);
        }
        cc.style.visibility = "hidden";
      }
    }
  }
};

/** Internal function; it displays the bar with the names of the weekday. */
Calendar.prototype._displayWeekdays = function () {
  var fdow = this.firstDayOfWeek;
  var cell = this.firstdayname;
  var weekend = Calendar._TT["WEEKEND"];
  for (var i = 0; i < 7; ++i) {
    cell.className = "day name";
    var realday = (i + fdow) % 7;
    if (i) {
      cell.ttip = Calendar._TT["DAY_FIRST"].replace("%s", Calendar._DN[realday]);
      cell.navtype = 100;
      cell.calendar = this;
      cell.fdow = realday;
      Calendar._add_evs(cell);
    }
    if (weekend.indexOf(realday.toString()) != -1) {
      Calendar.addClass(cell, "weekend");
    }
    cell.innerHTML = Calendar._SDN[(i + fdow) % 7];
    cell = cell.nextSibling;
  }
};

/** Internal function.  Hides all combo boxes that might be displayed. */
Calendar.prototype._hideCombos = function () {
  this.monthsCombo.style.display = "none";
  this.yearsCombo.style.display = "none";
};

/** Internal function.  Starts dragging the element. */
Calendar.prototype._dragStart = function (ev) {
  if (this.dragging) {
    return;
  }
  this.dragging = true;
  var posX;
  var posY;
  if (Calendar.is_ie) {
    posY = window.event.clientY + document.body.scrollTop;
    posX = window.event.clientX + document.body.scrollLeft;
  } else {
    posY = ev.clientY + window.scrollY;
    posX = ev.clientX + window.scrollX;
  }
  var st = this.element.style;
  this.xOffs = posX - parseInt(st.left);
  this.yOffs = posY - parseInt(st.top);
  with (Calendar) {
    addEvent(document, "mousemove", calDragIt);
    addEvent(document, "mouseup", calDragEnd);
  }
};

// BEGIN: DATE OBJECT PATCHES

/** Adds the number of days array to the Date object. */
Date._MD = new Array(31,28,31,30,31,30,31,31,30,31,30,31);

/** Constants used for time computations */
Date.SECOND = 1000 /* milliseconds */;
Date.MINUTE = 60 * Date.SECOND;
Date.HOUR   = 60 * Date.MINUTE;
Date.DAY    = 24 * Date.HOUR;
Date.WEEK   =  7 * Date.DAY;

Date.parseDate = function(str, fmt) {
  var today = new Date();
  var y = 0;
  var m = -1;
  var d = 0;
  var a = str.split(/\W+/);
  var b = fmt.match(/%./g);
  var i = 0, j = 0;
  var hr = 0;
  var min = 0;
  for (i = 0; i < a.length; ++i) {
    if (!a[i])
      continue;
    switch (b[i]) {
        case "%d":
        case "%e":
      d = parseInt(a[i], 10);
      break;

        case "%m":
      m = parseInt(a[i], 10) - 1;
      break;

        case "%Y":
        case "%y":
      y = parseInt(a[i], 10);
      (y < 100) && (y += (y > 29) ? 1900 : 2000);
      break;

        case "%b":
        case "%B":
      for (j = 0; j < 12; ++j) {
        if (Calendar._MN[j].substr(0, a[i].length).toLowerCase() == a[i].toLowerCase()) { m = j; break; }
      }
      break;

        case "%H":
        case "%I":
        case "%k":
        case "%l":
      hr = parseInt(a[i], 10);
      break;

        case "%P":
        case "%p":
      if (/pm/i.test(a[i]) && hr < 12)
        hr += 12;
      else if (/am/i.test(a[i]) && hr >= 12)
        hr -= 12;
      break;

        case "%M":
      min = parseInt(a[i], 10);
      break;
    }
  }
  if (isNaN(y)) y = today.getFullYear();
  if (isNaN(m)) m = today.getMonth();
  if (isNaN(d)) d = today.getDate();
  if (isNaN(hr)) hr = today.getHours();
  if (isNaN(min)) min = today.getMinutes();
  if (y != 0 && m != -1 && d != 0)
    return new Date(y, m, d, hr, min, 0);
  y = 0; m = -1; d = 0;
  for (i = 0; i < a.length; ++i) {
    if (a[i].search(/[a-zA-Z]+/) != -1) {
      var t = -1;
      for (j = 0; j < 12; ++j) {
        if (Calendar._MN[j].substr(0, a[i].length).toLowerCase() == a[i].toLowerCase()) { t = j; break; }
      }
      if (t != -1) {
        if (m != -1) {
          d = m+1;
        }
        m = t;
      }
    } else if (parseInt(a[i], 10) <= 12 && m == -1) {
      m = a[i]-1;
    } else if (parseInt(a[i], 10) > 31 && y == 0) {
      y = parseInt(a[i], 10);
      (y < 100) && (y += (y > 29) ? 1900 : 2000);
    } else if (d == 0) {
      d = a[i];
    }
  }
  if (y == 0)
    y = today.getFullYear();
  if (m != -1 && d != 0)
    return new Date(y, m, d, hr, min, 0);
  return today;
};

/** Returns the number of days in the current month */
Date.prototype.getMonthDays = function(month) {
  var year = this.getFullYear();
  if (typeof month == "undefined") {
    month = this.getMonth();
  }
  if (((0 == (year%4)) && ( (0 != (year%100)) || (0 == (year%400)))) && month == 1) {
    return 29;
  } else {
    return Date._MD[month];
  }
};

/** Returns the number of day in the year. */
Date.prototype.getDayOfYear = function() {
  var now = new Date(this.getFullYear(), this.getMonth(), this.getDate(), 0, 0, 0);
  var then = new Date(this.getFullYear(), 0, 0, 0, 0, 0);
  var time = now - then;
  return Math.floor(time / Date.DAY);
};

/** Returns the number of the week in year, as defined in ISO 8601. */
Date.prototype.getWeekNumber = function() {
  var d = new Date(this.getFullYear(), this.getMonth(), this.getDate(), 0, 0, 0);
  var DoW = d.getDay();
  d.setDate(d.getDate() - (DoW + 6) % 7 + 3); // Nearest Thu
  var ms = d.valueOf(); // GMT
  d.setMonth(0);
  d.setDate(4); // Thu in Week 1
  return Math.round((ms - d.valueOf()) / (7 * 864e5)) + 1;
};

/** Checks date and time equality */
Date.prototype.equalsTo = function(date) {
  return ((this.getFullYear() == date.getFullYear()) &&
    (this.getMonth() == date.getMonth()) &&
    (this.getDate() == date.getDate()) &&
    (this.getHours() == date.getHours()) &&
    (this.getMinutes() == date.getMinutes()));
};

/** Set only the year, month, date parts (keep existing time) */
Date.prototype.setDateOnly = function(date) {
  var tmp = new Date(date);
  this.setDate(1);
  this.setFullYear(tmp.getFullYear());
  this.setMonth(tmp.getMonth());
  this.setDate(tmp.getDate());
};

/** Prints the date in a string according to the given format. */
Date.prototype.print = function (str) {
  var m = this.getMonth();
  var d = this.getDate();
  var y = this.getFullYear();
  var wn = this.getWeekNumber();
  var w = this.getDay();
  var s = {};
  var hr = this.getHours();
  var pm = (hr >= 12);
  var ir = (pm) ? (hr - 12) : hr;
  var dy = this.getDayOfYear();
  if (ir == 0)
    ir = 12;
  var min = this.getMinutes();
  var sec = this.getSeconds();
  s["%a"] = Calendar._SDN[w]; // abbreviated weekday name [FIXME: I18N]
  s["%A"] = Calendar._DN[w]; // full weekday name
  s["%b"] = Calendar._SMN[m]; // abbreviated month name [FIXME: I18N]
  s["%B"] = Calendar._MN[m]; // full month name
  // FIXME: %c : preferred date and time representation for the current locale
  s["%C"] = 1 + Math.floor(y / 100); // the century number
  s["%d"] = (d < 10) ? ("0" + d) : d; // the day of the month (range 01 to 31)
  s["%e"] = d; // the day of the month (range 1 to 31)
  // FIXME: %D : american date style: %m/%d/%y
  // FIXME: %E, %F, %G, %g, %h (man strftime)
  s["%H"] = (hr < 10) ? ("0" + hr) : hr; // hour, range 00 to 23 (24h format)
  s["%I"] = (ir < 10) ? ("0" + ir) : ir; // hour, range 01 to 12 (12h format)
  s["%j"] = (dy < 100) ? ((dy < 10) ? ("00" + dy) : ("0" + dy)) : dy; // day of the year (range 001 to 366)
  s["%k"] = hr;    // hour, range 0 to 23 (24h format)
  s["%l"] = ir;    // hour, range 1 to 12 (12h format)
  s["%m"] = (m < 9) ? ("0" + (1+m)) : (1+m); // month, range 01 to 12
  s["%M"] = (min < 10) ? ("0" + min) : min; // minute, range 00 to 59
  s["%n"] = "\n";    // a newline character
  s["%p"] = pm ? "PM" : "AM";
  s["%P"] = pm ? "pm" : "am";
  // FIXME: %r : the time in am/pm notation %I:%M:%S %p
  // FIXME: %R : the time in 24-hour notation %H:%M
  s["%s"] = Math.floor(this.getTime() / 1000);
  s["%S"] = (sec < 10) ? ("0" + sec) : sec; // seconds, range 00 to 59
  s["%t"] = "\t";    // a tab character
  // FIXME: %T : the time in 24-hour notation (%H:%M:%S)
  s["%U"] = s["%W"] = s["%V"] = (wn < 10) ? ("0" + wn) : wn;
  s["%u"] = w + 1;  // the day of the week (range 1 to 7, 1 = MON)
  s["%w"] = w;    // the day of the week (range 0 to 6, 0 = SUN)
  // FIXME: %x : preferred date representation for the current locale without the time
  // FIXME: %X : preferred time representation for the current locale without the date
  s["%y"] = ('' + y).substr(2, 2); // year without the century (range 00 to 99)
  s["%Y"] = y;    // year with the century
  s["%%"] = "%";    // a literal '%' character

  var re = /%./g;
  if (!Calendar.is_ie5 && !Calendar.is_khtml)
    return str.replace(re, function (par) { return s[par] || par; });

  var a = str.match(re);
  for (var i = 0; i < a.length; i++) {
    var tmp = s[a[i]];
    if (tmp) {
      re = new RegExp(a[i], 'g');
      str = str.replace(re, tmp);
    }
  }

  return str;
};

Date.prototype.__msh_oldSetFullYear = Date.prototype.setFullYear;
Date.prototype.setFullYear = function(y) {
  var d = new Date(this);
  d.__msh_oldSetFullYear(y);
  if (d.getMonth() != this.getMonth())
    this.setDate(28);
  this.__msh_oldSetFullYear(y);
};

// END: DATE OBJECT PATCHES


// global object that remembers the calendar
window._dynarch_popupCalendar = null;
  
  </script>

  <!-- language for the calendar -->
  <script type="text/javascript">
// ** I18N

// Calendar EN language
// Author: Mihai Bazon, <mihai_bazon@yahoo.com>
// Encoding: any
// Distributed under the same terms as the calendar itself.

// For translators: please use UTF-8 if possible.  We strongly believe that
// Unicode is the answer to a real internationalized world.  Also please
// include your contact information in the header, as can be seen above.

// full day names
Calendar._DN = new Array
("Sunday",
 "Monday",
 "Tuesday",
 "Wednesday",
 "Thursday",
 "Friday",
 "Saturday",
 "Sunday");

// Please note that the following array of short day names (and the same goes
// for short month names, _SMN) isn't absolutely necessary.  We give it here
// for exemplification on how one can customize the short day names, but if
// they are simply the first N letters of the full name you can simply say:
//
//   Calendar._SDN_len = N; // short day name length
//   Calendar._SMN_len = N; // short month name length
//
// If N = 3 then this is not needed either since we assume a value of 3 if not
// present, to be compatible with translation files that were written before
// this feature.

// short day names
Calendar._SDN = new Array
("Sun",
 "Mon",
 "Tue",
 "Wed",
 "Thu",
 "Fri",
 "Sat",
 "Sun");

// First day of the week. "0" means display Sunday first, "1" means display
// Monday first, etc.
Calendar._FD = 0;

// full month names
Calendar._MN = new Array
("January",
 "February",
 "March",
 "April",
 "May",
 "June",
 "July",
 "August",
 "September",
 "October",
 "November",
 "December");

// short month names
Calendar._SMN = new Array
("Jan",
 "Feb",
 "Mar",
 "Apr",
 "May",
 "Jun",
 "Jul",
 "Aug",
 "Sep",
 "Oct",
 "Nov",
 "Dec");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "About the calendar";

Calendar._TT["ABOUT"] =
"DHTML Date/Time Selector\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + // don't translate this this ;-)
"For latest version visit: http://www.dynarch.com/projects/calendar/\n" +
"Distributed under GNU LGPL.  See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"Date selection:\n" +
"- Use the \xab, \xbb buttons to select year\n" +
"- Use the " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " buttons to select month\n" +
"- Hold mouse button on any of the above buttons for faster selection.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Time selection:\n" +
"- Click on any of the time parts to increase it\n" +
"- or Shift-click to decrease it\n" +
"- or click and drag for faster selection.";

Calendar._TT["PREV_YEAR"] = "Prev. year (hold for menu)";
Calendar._TT["PREV_MONTH"] = "Prev. month (hold for menu)";
Calendar._TT["GO_TODAY"] = "Go Today";
Calendar._TT["NEXT_MONTH"] = "Next month (hold for menu)";
Calendar._TT["NEXT_YEAR"] = "Next year (hold for menu)";
Calendar._TT["SEL_DATE"] = "Select date";
Calendar._TT["DRAG_TO_MOVE"] = "Drag to move";
Calendar._TT["PART_TODAY"] = " (today)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "Display %s first";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "Close";
Calendar._TT["TODAY"] = "Today";
Calendar._TT["TIME_PART"] = "(Shift-)Click or drag to change value";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d";
Calendar._TT["TT_DATE_FORMAT"] = "%a, %b %e";

Calendar._TT["WK"] = "wk";
Calendar._TT["TIME"] = "Time:";
  
  </script>

  <!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript">
/*  Copyright Mihai Bazon, 2002, 2003  |  http://dynarch.com/mishoo/
 * ---------------------------------------------------------------------------
 *
 * The DHTML Calendar
 *
 * Details and latest version at:
 * http://dynarch.com/mishoo/calendar.epl
 *
 * This script is distributed under the GNU Lesser General Public License.
 * Read the entire license text here: http://www.gnu.org/licenses/lgpl.html
 *
 * This file defines helper functions for setting up the calendar.  They are
 * intended to help non-programmers get a working calendar on their site
 * quickly.  This script should not be seen as part of the calendar.  It just
 * shows you what one can do with the calendar, while in the same time
 * providing a quick and simple method for setting it up.  If you need
 * exhaustive customization of the calendar creation process feel free to
 * modify this code to suit your needs (this is recommended and much better
 * than modifying calendar.js itself).
 */

// $Id: calendar-setup.js,v 1.25 2005/03/07 09:51:33 mishoo Exp $

/**
 *  This function "patches" an input field (or other element) to use a calendar
 *  widget for date selection.
 *
 *  The "params" is a single object that can have the following properties:
 *
 *    prop. name   | description
 *  -------------------------------------------------------------------------------------------------
 *   inputField    | the ID of an input field to store the date
 *   displayArea   | the ID of a DIV or other element to show the date
 *   button        | ID of a button or other element that will trigger the calendar
 *   eventName     | event that will trigger the calendar, without the "on" prefix (default: "click")
 *   ifFormat      | date format that will be stored in the input field
 *   daFormat      | the date format that will be used to display the date in displayArea
 *   singleClick   | (true/false) wether the calendar is in single click mode or not (default: true)
 *   firstDay      | numeric: 0 to 6.  "0" means display Sunday first, "1" means display Monday first, etc.
 *   align         | alignment (default: "Br"); if you don't know what's this see the calendar documentation
 *   range         | array with 2 elements.  Default: [1900, 2999] -- the range of years available
 *   weekNumbers   | (true/false) if it's true (default) the calendar will display week numbers
 *   flat          | null or element ID; if not null the calendar will be a flat calendar having the parent with the given ID
 *   flatCallback  | function that receives a JS Date object and returns an URL to point the browser to (for flat calendar)
 *   disableFunc   | function that receives a JS Date object and should return true if that date has to be disabled in the calendar
 *   onSelect      | function that gets called when a date is selected.  You don't _have_ to supply this (the default is generally okay)
 *   onClose       | function that gets called when the calendar is closed.  [default]
 *   onUpdate      | function that gets called after the date is updated in the input field.  Receives a reference to the calendar.
 *   date          | the date that the calendar will be initially displayed to
 *   showsTime     | default: false; if true the calendar will include a time selector
 *   timeFormat    | the time format; can be "12" or "24", default is "12"
 *   electric      | if true (default) then given fields/date areas are updated for each move; otherwise they're updated only on close
 *   step          | configures the step of the years in drop-down boxes; default: 2
 *   position      | configures the calendar absolute position; default: null
 *   cache         | if "true" (but default: "false") it will reuse the same calendar object, where possible
 *   showOthers    | if "true" (but default: "false") it will show days from other months too
 *
 *  None of them is required, they all have default values.  However, if you
 *  pass none of "inputField", "displayArea" or "button" you'll get a warning
 *  saying "nothing to setup".
 */
Calendar.setup = function (params) {
  function param_default(pname, def) { if (typeof params[pname] == "undefined") { params[pname] = def; } };

  param_default("inputField",     null);
  param_default("displayArea",    null);
  param_default("button",         null);
  param_default("eventName",      "click");
  param_default("ifFormat",       "%Y/%m/%d");
  param_default("daFormat",       "%Y/%m/%d");
  param_default("singleClick",    true);
  param_default("disableFunc",    null);
  param_default("dateStatusFunc", params["disableFunc"]);  // takes precedence if both are defined
  param_default("dateText",       null);
  param_default("firstDay",       null);
  param_default("align",          "Br");
  param_default("range",          [1900, 2999]);
  param_default("weekNumbers",    true);
  param_default("flat",           null);
  param_default("flatCallback",   null);
  param_default("onSelect",       null);
  param_default("onClose",        null);
  param_default("onUpdate",       null);
  param_default("date",           null);
  param_default("showsTime",      false);
  param_default("timeFormat",     "24");
  param_default("electric",       true);
  param_default("step",           2);
  param_default("position",       null);
  param_default("cache",          false);
  param_default("showOthers",     false);
  param_default("multiple",       null);

  var tmp = ["inputField", "displayArea", "button"];
  for (var i in tmp) {
    if (typeof params[tmp[i]] == "string") {
      params[tmp[i]] = document.getElementById(params[tmp[i]]);
    }
  }
  if (!(params.flat || params.multiple || params.inputField || params.displayArea || params.button)) {
    alert("Calendar.setup:\n  Nothing to setup (no fields found).  Please check your code");
    return false;
  }

  function onSelect(cal) {
    var p = cal.params;
    var update = (cal.dateClicked || p.electric);
    if (update && p.inputField) {
      p.inputField.value = cal.date.print(p.ifFormat);
      if (typeof p.inputField.onchange == "function")
        p.inputField.onchange();
    }
    if (update && p.displayArea)
      p.displayArea.innerHTML = cal.date.print(p.daFormat);
    if (update && typeof p.onUpdate == "function")
      p.onUpdate(cal);
    if (update && p.flat) {
      if (typeof p.flatCallback == "function")
        p.flatCallback(cal);
    }
    if (update && p.singleClick && cal.dateClicked)
      cal.callCloseHandler();
  };

  if (params.flat != null) {
    if (typeof params.flat == "string")
      params.flat = document.getElementById(params.flat);
    if (!params.flat) {
      alert("Calendar.setup:\n  Flat specified but can't find parent.");
      return false;
    }
    var cal = new Calendar(params.firstDay, params.date, params.onSelect || onSelect);
    cal.showsOtherMonths = params.showOthers;
    cal.showsTime = params.showsTime;
    cal.time24 = (params.timeFormat == "24");
    cal.params = params;
    cal.weekNumbers = params.weekNumbers;
    cal.setRange(params.range[0], params.range[1]);
    cal.setDateStatusHandler(params.dateStatusFunc);
    cal.getDateText = params.dateText;
    if (params.ifFormat) {
      cal.setDateFormat(params.ifFormat);
    }
    if (params.inputField && typeof params.inputField.value == "string") {
      cal.parseDate(params.inputField.value);
    }
    cal.create(params.flat);
    cal.show();
    return false;
  }

  var triggerEl = params.button || params.displayArea || params.inputField;
  triggerEl["on" + params.eventName] = function() {
    var dateEl = params.inputField || params.displayArea;
    var dateFmt = params.inputField ? params.ifFormat : params.daFormat;
    var mustCreate = false;
    var cal = window.calendar;
    if (dateEl)
      params.date = Date.parseDate(dateEl.value || dateEl.innerHTML, dateFmt);
    if (!(cal && params.cache)) {
      window.calendar = cal = new Calendar(params.firstDay,
                   params.date,
                   params.onSelect || onSelect,
                   params.onClose || function(cal) { cal.hide(); });
      cal.showsTime = params.showsTime;
      cal.time24 = (params.timeFormat == "24");
      cal.weekNumbers = params.weekNumbers;
      mustCreate = true;
    } else {
      if (params.date)
        cal.setDate(params.date);
      cal.hide();
    }
    if (params.multiple) {
      cal.multiple = {};
      for (var i = params.multiple.length; --i >= 0;) {
        var d = params.multiple[i];
        var ds = d.print("%Y%m%d");
        cal.multiple[ds] = d;
      }
    }
    cal.showsOtherMonths = params.showOthers;
    cal.yearStep = params.step;
    cal.setRange(params.range[0], params.range[1]);
    cal.params = params;
    cal.setDateStatusHandler(params.dateStatusFunc);
    cal.getDateText = params.dateText;
    cal.setDateFormat(dateFmt);
    if (mustCreate)
      cal.create();
    cal.refresh();
    if (!params.position)
      cal.showAtElement(params.button || params.displayArea || params.inputField, params.align);
    else
      cal.showAt(params.position[0], params.position[1]);
    return false;
  };

  return cal;
};
  
  </script>
<script type="text/javascript">
function check_date (d)
{
  var strMistakes="";

  var datePattern = /^\d{4}-\d{2}-\d{2}$/gi;
  var testDate = true;
  if (String(d).match(datePattern) == null) testDate = false;

  if (testDate)
  {
   var theDate, theMonth, theYear
     
   theDate = parseInt(d.substr(8,2));
   theMonth = parseInt(d.substr(5,2));
   theYear = parseInt(d.substr(0,4));
     
   if (theMonth < 0 || theMonth > 12) strMistakes = "Month is invalid\n";
   if (theDate < 0 || theDate > 31) strMistakes = "Date is invalid\n";  
   
   if (theDate >= 1 && theDate <= 31)
   {
    if (theMonth == 2)
    {
     if (theYear % 4 == 0)
     {
      if (theDate < 0 || theDate > 29) strMistakes = "Date is invalid\n";
     }
     else
     {
      if (theDate < 0 || theDate > 28) strMistakes = "Date is invalid\n";
     }
    }
   }
  }
  else
  {
   strMistakes = "Date format is invalid\n";
  }
  return strMistakes;
}

function checkDate(d){
	var valid_date = check_date(d);
	if (valid_date == "") {
		//alert("Valid Date");
	} else {
		alert(valid_date)
	}
}

/*function validateTask()
{
var x=document.forms["task"]["consultant"].value;
if (x==null || x=="")
  {
  alert("Please select the consultant name");
  return false;
  }
  
var y=document.forms["task"]["allocated_task"].value;
if (y==null || y=="")
  {
  alert("Please select the task ");
  return false;
  }
  

  
  var a=document.forms["task"]["allocated_to"].value;
if (a==null || a=="")
  {
  alert("Please select allocated person");
  return false;
  }
  
  var b=document.forms["task"]["due_date"].value;
if (b==null || b=="")
  {
  alert("Please enter the due date");
  return false;
  }
  var c=document.forms["taskr"]["allocated_to"].value;
if (c==null || c=="")
  {
  alert("Please select a staff");
  return false;
  }
  
    var d=document.forms["task"]["allocated_task"].value;
if (d==null || d=="")
  {
  alert("Please select a task");
  return false;
  }
  
  var d=document.forms["task"]["details"].value;
if (d==null || d=="")
  {
  alert("Please search for the client");
  return false;
  }
  
}
*/
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
<script>

$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});
        $("#addTask").click(function(){
		var valid = '';
		var isr = ' is required.';
		var consultant = $("#consultant").val();
		var allocated_task = $("#allocated_task").val();
		var due_date = $("#subject").val();
		var details = $("#details").val();
		if (consultant.length<1) {
			valid += '<br /> Consultant'+isr;
		}
		if (allocated_task.length<1) {
			valid += '<br />Allocated task'+isr;
		}
		if (due_date.length<1) {
			valid += '<br />Date'+isr;
		}
                if (details.length<1) {
			valid += '<br />details'+isr;
		}
		if (valid!='') {
			$("#response").fadeIn("slow");
			$("#response").html("Error:"+valid);
		}
                if (valid!='') {
			$("#response").fadeIn("slow");
			$("#response").html("Error:"+valid);
		}
		else {
			var datastr ='consultant=' + name + '&Allocated_task=' + mail + '&due_date=' + due_date + '&details=' + details;
			$("#response").css("display", "block");
			$("#response").html("Sending message .... ");
			$("#response").fadeIn("slow");
			setTimeout("send('"+datastr+"')",2000);
		}
		return false;
	});
	
});

</script>

<table class="tab" width="100%" cellspacing="0" cellpadding="0" border="0" bordercolor="#0000FF">


    <tr><td><h3><b style="color: #0000FF; text-decoration: underline; font: Helvetica, Arial, sans-serif;">Task Allocation</b> </h3> <div class='cssmenu'> <ul><li><a href="index.php?m=sent_task" alt="Sent Tasks">Sent Tasks</a></li></ul></div>
            <br/>

            <br/>
			<script type="text/javascript" src="jquery.js"></script>
<script type='text/javascript' src='jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<script type="text/javascript">
    function validateForm()
{
var x=document.forms["search"]["name"].value;
if (x==null || x=="")
  {
  alert("Please enter a search string");
  return false;
  }
}

$().ready(function() {
	$("#client").autocomplete("get_course_list.php", {
		width: 260,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
});

$(document).ready(function(){
	$("#service").click(function(){
        $("#shadow").fadeIn("normal");
         $("#login_form").fadeIn("normal");
         $("#user_name").focus();
    });
	$("#cancel_hide").click(function(){
        $("#login_form").fadeOut("normal");
        $("#shadow").fadeOut();
   });
   $("#login").click(function(){
    
                   consultant = $("#consultant").val();
		 allocated_task = $("#allocated_task").val();
		 due_date = $("#subject").val();
		 details = $("#details").val();
         $.ajax({
            type: "POST",
            url: "add_task.php",
            data: "consultant="+consultant+"&allocated_task="+allocated_task+"&due_date="+due_datek+"&details="+details,
            success: function(html){
              if(html=='true')
              {
                $("#login_form").fadeOut("normal");
				$("#shadow").fadeOut();
				$("#profile").html("<a href='logout.php' id='logout'>Logout</a>");
				
              }
              else
              {
                    $("#add_err").html("Wrong username or password");
              }
            },
            beforeSend:function()
			{
                 $("#add_err").html("Loading...")
            }
        });
         return false;
    });
});
</script>
    
            Search for a client who you like to allocate task for
            <form name="search" action="" method="post">
                <table width="20%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td valign="top"><input type="text" name="name" id="client" autocomplete="off"/></td>
                        <td  valign="top"><input  type="submit" name="submit" id="search-submit" value="Search" class="login"/>&nbsp;&nbsp;</td>
                    </tr>
                </table>
            </form>
            
            <?
            $name = $_POST['name'];
            //connect  to the database 
            $db = mysql_connect("localhost", "root", "") or die('I cannot connect to the database  because: ' . mysql_error());
            //-select  the database to use 
            $mydb = mysql_select_db("globalmigration_db");
            //-query  the database table 
            $sql = "SELECT  *FROM client_details WHERE firstnames LIKE '%" . $name . "%' OR surname LIKE '%" . $name . "%' OR CONCAT(firstnames, ' ', surname) LIKE '%" . $name . "%' LIMIT 1";
            //-run  the query against the mysql query function 
            $userID = $row['clientID'];
            $result = mysql_query($sql);
            $numrows = mysql_num_rows($result);

            if (isset($_POST['submit'])) {
                if (preg_match("/^[  a-zA-Z]+/", $_POST['name'])) {

                    //-create  while loop and loop through result set 
                    while ($row = mysql_fetch_array($result)) {
                        $firstname = $row['firstnames'];
                        $surname = $row['surname'];
                        $file_no = $row['file_no'];
                        $userID = $row['clientID'];
                        $isSearchFound = true;
                        if ($isSearchFound) {
                            //-display the result of the array 

                            echo "<ul>\n";
                            echo "<li>" . "<a style='color: #0000FF;'  href=\"#\">" . $firstname . " &nbsp;&nbsp;&nbsp;  " . $surname . "   &nbsp;&nbsp;&nbsp; " . $file_no . "</a></li>\n";
                            echo "</ul>";
                        } else {
                            echo "<h1>No results found.</h1>";
                        }
                    }
                } else {
                    echo " <br/> <p>Please enter a search query</p>";
                }
            }
           
            ?>
		<center><div style="border: 1px solid #0000FF; width:90%;">	</div></center
        </td></tr>
    <tr><td>
            </div>
            </font>&nbsp;
            <form name="task" action="add_task.php" method="post" class="uniForm" onsubmit="return validateTask()">
                <? 
                if($userID){
                $permit = "SELECT  *FROM permit_applications WHERE clientID=$userID";

                   $permR = mysql_query($permit);
             
           while ($row = mysql_fetch_array($permR)) {
            $someWords = $row['service'];
           if($someWords){
  
                echo "<br/>&nbsp;<a id='service' href='#' class='button'> click here to send task </a>"; 
             
            } 
             }}
             ?>
                <table width="50%" border="0" cellspacing="3" cellpadding="0">
                    <tr>
                        <td>&nbsp;</td>
                        <td><?
            if (isset($_SESSION['msg'])) {
                echo '<span id="msg"><b>' . $_SESSION['msg'] . '</span></b>';
                unset($_SESSION['msg']);
            }
            if (isset($_SESSION['error'])) {
                echo '<span id="error"><b>' . $_SESSION['error'] . '</span></b/>';
                unset($_SESSION['error']);
            }
            ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="hidden" name="clientID" value="<? echo $userID; ?>" id="clientID" /></td>
                    </tr>
                    <tr>
                        <td>Consultant</td>
                        <td>
                            <select name="consultant" id="consultant">
                                <option value="">   Select    </option>  
                                <option value="Elsa">Elsa Van Loggerenberg</option>
                                <option value="Kabelo">Kabelo</option>
                                <option value="Keith">Keith Lykert</option>
                                <option value="Eldorette">Eldorette Isaacson</option>
                                <option value="Kim ">Kim Van Niekerk</option>
                                <option value="Lisa">Lisa Haggard</option>
                                <option value="Elissa">Elissa Davie</option>
                                <option value="Leon ">Leon Isaacson</option>
                           </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Allocated task </td>
                        <td>
                            <select name="allocated_task" id="allocated_task">
                                <option value=""> Select  </option>

                                <option value="Advert - draft"> Advert - draft</option>
                                <option value="Advert - placement"/>Advert - placement</option>
                                <option value="Assistance with Doctor">Assistance with Doctor</option>
                                <option value="Benchmarking"/>Benchmarking</option>
                                <option value="Business Plan"/>Business Plan</option>
                                <option value="Call out Fees"/>Call out Fees</option>
                                <option value="Chartered Accountant Certificate"/>Chartered Accountant Certificate</option>
                                <option value="Company Registration (CC, Pty, Vat, etc)"/>Company Registration (CC, Pty, Vat, etc)</option>
                                <option value="Courier"/>Courier</option>
                                <option value="Courier services">Courier services</option>
                                <option value="Good Cause Period"/>Good Cause Period</option>
                                <option value="Handling Fees"/>Handling Fees</option>
                                <option value="Labour"/>Labour</option>
                                <option value="Legalisation"/>Legalisation</option>
                                <option value="Medical"/>Medical</option>
                                <option value="Other"/>Other</option>
                                <option value="Other Services (CVs, Letters, etc)"/>Other Services (CVs, Letters, etc)</option>
                                <option value="Permit application"/>Permit application</option>
                                <option value="PR Attendance at Interviews"/>PR Attendance at Interviews</option>
                                <option value="Professional Fees"/>Professional Fees</option>
                                <option value="Request refund of overstay fine"/>Request refund of overstay fine</option>
                                <option value="Review - follow up"/>Review - follow up</option
                                <option value="Review - submit"/>Review - submit</option>
                                <option value="SAQA"/>SAQA</option>
                                <option value="Send copy of application to the hub"/>Send copy of application to the hub</option>
                                <option value="Telephonic follow up with the hub"/>Telephonic follow up with the hub</option>
                                <option value="Translation"/>Translation</option>
                                <option value="Urgent Applications"/>Urgent Applications</option>
                                <option value="Waiver- follow up"/>Waiver- follow up</option>
                                <option value="Waiver Request"/>Waiver Request</option>
                               
                                
                                
                                
                             
                            </select>

                        </td>
                    </tr>


                    <input type="hidden" name="allocated_by" id="allocated_by" value="<? echo $_SESSION['log']; ?>" />

                    <tr>
                        <td>Allocated to </td>
                        <td>
                            <select name="allocated_to" id="allocated_to">
            
                                <option value="">Select</option>
                                <option value="Bilkees">Bilkees David-Ammed</option>
                                <option value="Eldorette">Eldorette Isaacson</option>
                                <option value="Elsa ">Elsa Van Loggerenberg</option>                                
                                <option value="Gillianm">Gillian Mackay</option>
                                <option value="Gillianv">Gillian von Willingh</option>
                                <option value="Gordon">Gordon Wakefield</option>
                                <option value="Keith">Keith Lykert</option>
                                <option value="Leon">Leon Isaacson</option>
                                <option value="Linde">Linde' van Zyl</option>
                                <option value="Lucia">Lucia Lamla</option>
                                <option value="Muzeina">Muzeina Snell</option>
                                <option value="Octavius">Octavius Lamla</option>
                                <option value="Ria">Ria Pasella</option>
                                <option value="Taryn">Taryn Barry</option>
                                <option value="Tina">Tina Li</option>
                                <option value="Wendy">Wendy Fourie</option>
                                <option value="staff">Staff</option>
                                <option value="consultant">Consultant</option>


                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Due date </td>
                        <td><input type="text" name="due_date" id="f_date_a" autocomplete="off"/>

<script type="text/javascript">
    function catcalc(cal) {
        var date = cal.date;
        var time = date.getTime()
        // use the _other_ field
        var field = document.getElementById("f_calcdate");
        if (field == cal.params.inputField) {
            field = document.getElementById("f_date_a");
            time -= Date.WEEK; // substract one week
        } else {
            time += Date.WEEK; // add one week
        }
        var date2 = new Date(time);
        field.value = date2.print("%Y-%m-%d %H:%M");
    }
    Calendar.setup({
        inputField     :    "f_date_a",   // id of the input field
        ifFormat       :    "%Y-%m-%d %H:%M",       // format of the input field
        showsTime      :    true,
        timeFormat     :    "24",
        onUpdate       :    catcalc
    });
   
</script>

</td>
                    </tr>
                   
                    <tr>
                        <td valign="top">Details</td>
                        <td><textarea name="details" id="details" cols="19" rows="5"><?if($userID){echo $firstname . " " . $surname . " " . $file_no;
                                } else {
                                 }?></textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;
</td>
                        
                        <td><input type="submit" name="Submit" value="Send task" class="login"onclick="checkDate(document.getElementById('date').value)" /></td>
                    </tr>
                </table>
            </form>
            <p>&nbsp;</p><p>&nbsp;</p>
        </td>
    </tr>
</table>
<div id="login_form">
        <div class="err" id="add_err"></div>
			<? require 'services.php'; ?>
			
		
    </div>
	<div id="shadow" class="popup"></div>