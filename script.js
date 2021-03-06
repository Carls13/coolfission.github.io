"use strict";

var about = function() { 
  
  function open() {
    $("#about-closed").attr("id", "about");
        $("body").css({"background": "rgba(0,0,0,0.9)"});
        $("body *").not("#about *").css({"color": "#000"});
        $("#about").css({"color": "#fff"});
  }
  $("a[style='cursor: pointer']").click(function() {
    open();
  });

  var url = window.location.href;
  var lastPart = url.substr(url.lastIndexOf('#') + 1);
  if (lastPart === "about") {
     open();
  }
  else if(lastPart === "") {
    close();
  }
  else {
    close();
  }

  function close() {
    $("#about").attr("id", "about-closed");
        $("body").css({"background": "#ddd"});
        $("body *").css({"color": ""});
  }
  shortcut.add("Esc", function() {
    close();
    location.hash = "";
  });

  $("i[class='far fa-times-circle']").click(function() {
    close();
  });

};

$(document).ready(about);


var typed = function() {

  var options = {
    strings: ["Building Webpages", "Developing Apps", "Assembling Software"],
    typeSpeed: 20,
    startDelay: 500,
    backSpeed: 20,
    backDelay: 3000,
    loop: true
  };
//  var type = new Typed("#typed", options);
  $("#typed").typed(options);
};
$(document).ready(typed); 

var time = function() {
  var today = new Date();
  var hour = today.getHours();
  var greeting;
  if(hour >= 18) {
    greeting = "Good Evening!";
  }
  else if(hour >= 12) {
    greeting = "Good Afternoon!";
  }
  else if(hour > 0) {
    greeting = "Good Morning!";
  }
  else {
    greeting = "Welcome!";
  }
  var changeTime = document.getElementById("time");
  changeTime.innerHTML = greeting;
};
$(document).ready(time);
















