
<!DOCTYPE html>

<!-- 
  _____   _______  _______ _______                                         _____    _____         _______
 |     | |   |   |    |       |            |   /  |     |  |       |   /  |     |  |     | |\   |    |
 |_____| |   |   |    |       |            |__/   |     |  |       |__/   |_____|  |_____| | \  |    |
 |     | |       |    |       |            |  \   |     |  |       |  \   |     |  | \__   |  \ |    |
 |     | |       | ___|___    |            |   \  |_____|  |_____  |   \  |     |  |    \  |   \| ___|___   

 -->

<html class="task">
<head>
   <title>Amit Kulkarni</title>
   <link rel="shortcut icon" href="data:image/x-icon;base64,R0lGODlhEAAQAPECAFFUV////wAAAAAAACH5BAkyAAIAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAAQAAAC5wQAAAAAAAAAAAAAAAAAAAAAAAAAQBAAAAAAAAAAAAAAQBAEAAAAAAAAAAAAAAAQCAQAAAAAAAAAAAAAAAAIBAIAAAAAAAAAAAAAAAAEAgEAAAAAAAAAAAAAAAACgQAAAAAAAAAAAAAAAAAQEBAAAAAAAAAAAAAAAAAQEBAAAAAAAAAAAAAAAAAQEBAAAAAAAAAAAAAAAAAQEBAAAAAAAAAAAAAAAAAQEBAAAAAAEBAQEBAAAAAAEBAAAAAAABAQEBAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAh+QQJMgACACwAAAAAEAAQAAAC5wQAAAAAAAAAAAAAAAAAAAAAAAAAQBAAAAAAAAAAAAAAQBAEAAAAAAAAAAAAAAAQCAQAAAAAAAAAAAAAAAAIBAIAAAAAAAAAAAAAAAAEAgEAAAAAAAAAAAAAAAACgQAAAAAAAAAAAAAAAAAQEBAAAAAAAAAAAAAAAAAQEBAAAAAAAAAAAAAAAAAQEBAAAAAAAAAAAAAAAAAQEBAAAAAAAAAAAAAAAAAQEBAAAAAAAAAAAAAAAAAAEBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAA7" />
  <link rel="stylesheet" type="text/css" href="https://rawgit.com/FortAwesome/Font-Awesome/master/css/font-awesome.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
 
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
  <script src="
https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
  <script src="http://www.openjs.com/scripts/events/keyboard_shortcuts/shortcut.js"></script>
  <script src="https://rawgit.com/mattboldt/typed.js/master/js/typed.js"></script>
  <script src="script.js"></script> 

</head>

<body>

<?php
	echo "blah"; 
?>

<div id="about-closed">
  <i class="fa fa-times-circle-o"></i>
  <h1>About</h1>
  <p>Hello, my name is Amit Kulkarni. I started programming in 6th grade and continue to do so today. As of now, I do most of my work on the web with HTML, CSS, and JavaScript. To update the site, I use Github (view the repository on the bottom of the page). <br/><i class="fa fa-code"></i>In the future, I am planning to learn Objective C, Swift, and C++ to develop mobile apps. I am also thinking of improving my converter to make it more functional (make accordion-style tables instead of the current view). <br/><br/>In essence, thanks for visiting my website!<br/>I hope to see you soon again!<br/><br/><small>Click on the X button on the upper right screen to exit out</small></p>
</div>

<nav id="top">
  <a id="time">Welcome!</a>
  <a href="http://codepen.io/TechnoForced/full/vObNZE" target="_blank">Resume</a>
  <a href="mailto:amitkulkarni181@gmail.com?subject=From Anonymous User" target="_blank">Email</a> 
  <a style="cursor: pointer">About</a> 
</nav><br/><br/><br/><br/>

<div id="topic">
  <h1 id="name">Amit Kulkarni | 
    <span id="typed"></span>
  </h1> 

  <p>Hello and welcome to my home page! Here you can view my projects, learn more about me, or contact me</p>
</div><br/><br/></br/>

<fieldset id="projects">
<legend>My Projects</legend>
  <br/><br/><br/><a href="calculator/calculate.html" target="_blank">Calculator</a>

  <br/><br/><br/><br/><br/><a href="converter/convert.html" target="_blank">Converter</a>

  <br/><br/><br/><br/><br/><a href="conjugate/conjugate.html" target="_blank">Conjugator</a>

  <br/><br/><br/><p>You can view more of my projects on <a id="codepen" href="http://codepen.io/TechnoForced/" target="_blank">Codepen</a></p>
</fieldset><br/><br/><br/><br/><br/>

<div id="out-foot">
  <div id="footer">
    <h1>The Bottom</h1>
    <p>Thanks for visiting my website!</p>
    <p> Feel free to call me: <strong>770-410-9610</strong> or email me at <strong>amitkulkarni181@gmail.com</strong></p><br/>
    <div id="line"></div>
    <p>View on <a href="https://github.com/Coolfission/coolfission.github.io" target="_blank">Github</p>
  </div>
</div>

<nav id="context-menu" class="context-menu">
  <ul class="context-menu__items">
    <li class="context-menu__item">
      <a href="#" class="context-menu__link" id="context-menu__select" data-action="View"><i class="fa fa-i-cursor"></i>&nbsp;&nbsp;Select</a>
    </li>
    <li class="context-menu__item">
      <a href="#" class="context-menu__link" id="context-menu__print" data-action="Edit"><i class="fa fa-print"></i> Print</a>
    </li>
    <li class="context-menu__item">
      <a class="context-menu__link" id="context-menu__keyCode" data-action="Delete"><a href="view-source:http://coolfission.github.io" id="context-menu__a" target="_blank"> <i class="fa fa-eye"></i> Inspect Element</a></a>
    </li>
  </ul>
</nav>

</body>
</html>
