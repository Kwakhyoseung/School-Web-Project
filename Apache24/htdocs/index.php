<!DOCTYPE html>
<head>
<title> H.E.A.T </title>
<meta charset="utf-8">
<meta name="viewport" content="width=divice-width, initial-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
<style>
html{
  background: url('./HEAT.jpg') no-repeat center center fixed;
  background-size: cover;
}
h1{
  font-size: 100px;
  text-align: center;
}
*{
margin: 0;
padding: 0;
box-sizing: border-box;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
}
a:link, a:hover, a:visited{
  color: black;
  text-decoration: none;
  text-shadow: 1px 1px 0 orange;
}
nav{
  width: 100%;
  height: auto;
  background: orange;
  font-size: 1.2em;
  font-weight: bold;
  position: relative;
}
nav ul{
  display: block;
  height: auto;
}
nav ul li{
  display: block;
  width: 100%;
  text-align: center;
  border-bottom: 50px;
}
nav ul li a{
  line-height: 50px;
}
@media screen and (min-width: 721px){
  nav{
    height: 40px;
    border-bottom: 2px solid orange;
  }
  nav ul{
    display: block;
    width: 720px;
    height: 40px;
    padding: 0;
    margin: 0 auto;
  }
  nav ul li{
    display: inline-block;
    width: 120px;
    border-bottom: 0;
    border-right: 1px solid #f1c40f;
    margin-right: -6px;
  }
  nav ul li:last-child{
    border-right: 0;
  }nav ul li a{
    font-size: 1em;
    line-height: 40px;
  }
  nav a#trigger{
    display: none;
  }
}
.videoContainer{
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
}
.videoContainer iframe{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
aside{
  text-align: right;
}
.info{
  display: block;
  width: 60px;
  height: 30px;
  border: 2px solid #f1c40f;
  
}
</style>
</head>
<body>
  <header>
  <h1>H.E.A.T</h1>
  </header>
  <nav>
  <ul>
<?php
  if($_SERVER['QUERY_STRING'] != '' && $_GET['page'] == 'smtm'){
    echo "<li><a href=\"./SMTM3.html\" class=\"SMTM\">쇼미더머니3</a></li>\n";
    echo "<li><a href=\"./SMTM4.html\" class=\"SMTM\">쇼미더머니4</a></li>\n";
    echo "<li><a href=\"./SMTM5.html\" class=\"SMTM\">쇼미더머니5</a></li>\n";
    echo "<li><a href=\"./SMTM6.html\" class=\"SMTM\">쇼미더머니6</a></li>\n";
    echo "<li><a href=\"./SMTM7.html\" class=\"SMTM\">쇼미더머니7</a></li>\n";
  } else {
    echo "<li><a href=\"./?page=high\" class=\"HEAT\">고등래퍼</a></li>\n";
    echo "<li><a href=\"./?page=smtm\" class=\"HEAT\">쇼미더머니</a></li>\n";
    echo "<li><a href=\"./?page=top100\" class=\"HEAT\">TOP100</a></li>\n";
    echo "<li><a href=\"./PLAYLIST.html\" class=\"HEAT\">playlist</a></li>\n";
    echo "<li><a href=\"./POST.html\" class=\"HEAT\" >게시판</a></li>\n";
    echo "<li><a href=\"./GUEST.html\" class=\"HEAT\">고객문의</a></li>\n";
  }
?>
  </ul>
  </nav>
  <form>
        <p class="info">
          <aside>
    <a href="login.html" class="colorbutton">로그인</a>
	<a href="join.html" class="colorbutton">회원가입</a>
        </aside>
        </p>
  </form>
<?php
  if($_SERVER['QUERY_STRING'] == ''){
    echo "<div class=\"videoContainer\">\n";
    echo "<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/watch?v=94duUKgFR8o\" frameborder=\"0\" allowfullscreen></iframe>\n";
    echo "</div>\n";
  } else {
    if($_GET['page'] == 'smtm'){
      if(isset($_GET['sno'])){
        if($_GET['sno'] == 3){
        } else if($_GET['sno'] == 4){
        } else {
        }
      } else {
      }
    }
  }
?>
</body>
<footer>Copyright &copy; H.E.A.T</footer>
</html>