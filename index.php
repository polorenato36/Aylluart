<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>


<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
</head>

<body>
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="#">Inicio</a>
    <ul>
      <li><a href="#">Elemento 1.1</a></li>
      <li><a href="#">Elemento 1.2</a></li>
      <li><a href="#">Elemento 1.3</a></li>
    </ul>
  </li>
  <li><a href="#">Elemento 2</a></li>
  <li><a class="MenuBarItemSubmenu" href="#">Elemento 3</a>
    <ul>
      <li><a class="MenuBarItemSubmenu" href="#">Elemento 3.1</a>
        <ul>
          <li><a href="#">Elemento 3.1.1</a></li>
          <li><a href="#">Elemento 3.1.2</a></li>
        </ul>
      </li>
      <li><a href="#">Elemento 3.2</a></li>
      <li><a href="#">Elemento 3.3</a></li>
    </ul>
  </li>
  <li><a href="#">Elemento 4</a></li>
</ul>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>