/*
  Copyright (c) 2008-present InnAnTech Industries
  Author: Dave Guindon
  Web: www.DaveGuindon.info
  Support: www.DaveGuindonSupport.com
  Product: www.ExitSplash.com
  Product Help: www.ExitSplash.com/help
  
  Please send bug reports, suggestions and/or feedback to the support
  website given above.
  
  ExitSplash is a commercial software. Any distribution is strictly prohibited
  unless a resale rights license was delivered along with this software.
  */
  
  /* ============= FUNCTIONS ============= */
  
  function addLoadEvent(func) { 
	  var oldonload = window.onload; 
	  if (typeof window.onload != 'function') { 
		  window.onload = func; 
	  } else { 
		  window.onload = function() { 
			  if (oldonload) { oldonload(); }  
			  func(); 
		  }
	  }
  }
  
  function addClickEvent(a,i,func) { 
	  if (typeof a[i].onclick != 'function') { 
		  a[i].onclick = func; 
	  } 
  }   
  
  disablelinksfunc = function(){
	  var a = document.getElementsByTagName('A'); 
	  for (var i = 0; i < a.length; i++) { 
		  if(a[i].target !== '_blank') {
			  addClickEvent(a,i, function(){ PreventExitSplash=true; });
		  } else {
			  addClickEvent(a,i, function(){ PreventExitSplash=false;});
		  }
	  }
  }
  
  disableformsfunc = function(){ 
	  var f = document.getElementsByTagName('FORM'); 
	  for (var i=0;i<f.length;i++) {
		  if(f[i].target !== '_blank') {
			  if (!f[i].onclick) { 
				  f[i].onclick=function(){ PreventExitSplash=true; } 
			  } else if (!f[i].onsubmit) { 
				  f[i].onsubmit=function(){ PreventExitSplash=true; }
			  }
		  }
	  }
  }
  
  function esuniqid() {
	  var newDate = new Date;
	  return newDate.getTime();
  }
  
  function createESCookie(name,value,seconds) {
	  if (seconds) {
		  var date = new Date();
		  date.setTime(date.getTime()+(seconds*1000));
		  var expires = "; expires="+date.toGMTString();
	  }
	  else var expires = "";
	  document.cookie = name+"="+value+expires+"; path=/";
  }
  
  function readESCookie(name) {
	  var nameEQ = name + "=";
	  var ca = document.cookie.split(';');
	  for(var i=0;i < ca.length;i++) {
		  var c = ca[i];
		  while (c.charAt(0)==' ') c = c.substring(1,c.length);
		  if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	  }
	  return null;
  }
  
  function eraseESCookie(name) {
	  createCookie(name,"",-1);
  }
  
  
  
  /* ============= MAIN ============= */
  
  //advanced settings
  if (exitperiodrb == 1){
	  PreventExitSplash = true;
	  setTimeout(function(){ PreventExitSplash=false; }, periodEnable*1000);
  }else if (exitperiodrb == 2){
	  setTimeout(function(){ PreventExitSplash=true; }, peroidDisable*1000);
  }else if (exitperiodrb == 3){
	  if (readESCookie('eswpcookie'+ESRecordId) != null){
		  PreventExitSplash = true;
	  }else{	
		  createESCookie('eswpcookie'+ESRecordId,'yes',displayFrequency);
		  PreventExitSplash = false;
	  }
  }else{
	  if (readESCookie('eswpcookie'+ESRecordId) != null) eraseESCookie('eswpcookie'+ESRecordId);	
  }
  
  //disable exits for on-page links and forms avoiding script conflicts
  addLoadEvent(disablelinksfunc);
  addLoadEvent(disableformsfunc);
  
  window.onbeforeunload = function(){ 

	  if(PreventExitSplash == false){	
		  PreventExitSplash=true;				
		  window.scrollTo(0,0); 		
		  jQuery("#ExitBackDiv").show();
		  jQuery("#ExitDiv").show();	
		  setTimeout('window.location="'+exitsplashpage+'"', 10);										
		  var ua = jQuery.browser;
		  var ver = ua.version.slice(1,1);
		  var verInt = parseInt(ver);

		  if ((UseAlert == 0) && (ua.mozilla) && (verInt >= 2)){	//special condition only for FireFox v4+		
			  if (confirm(exitsplashmessage)){				
				  if(UseHelper == 1){
				  jQuery("#ExitImage").attr('src','/exit.jpg');	
				  }							
				  return exitsplashmessage;
			  }			
		  }else{
			  if(UseAlert == 1){ window.alert(alertmessage);}
			  return exitsplashmessage;									
		  }			
	  }
  }