<meta charset = "UTF-8">
<script type="text/javascript" src="js_comments.js"> </script>
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<!--Инициализируем Тини-->
<script type="text/javascript">
tinyMCE.init({
    mode : "textareas",
    theme : "simple"
 });
</script>

<center>
<div id="coments">
<div class="title">
	<span>
		<h2>Заголовок</h2>
		<a href="#article">лололо</a>
	</span>
</div>
<div class="top">
<img id="addcomentbutton"  onClick="toggle('addcoment'); location.href='#addcoment';" src="images/add_coment.png"/>
</div>
<div id="addcoment" class="addcoment" style="display:none;">
<form name="comment">
<div id="statusbox">ПУСТЬ ТУТ ЧТО ТО БУДЕТ НАПИСАНО!</div>
<input id="name" type="text" name="name" value="Имя (Обязательно)" maxlength="60" onfocus="clearText(this)" onblur="clearText(this)"/>
<input id="mail" type="text" name="mail" value="Почта (Обязательно, непубликуется) " maxlength="60" onfocus="clearText(this)" onblur="clearText(this)"/>
<textarea id="text" name="text" onfocus="clearText(this)" onblur="clearText(this)"></textarea>
<span>
<br/><input id="nr" onClick="document.getElementById('nr').value='nerobot';" type="checkbox" name="nr"/>
<b>я не робот!</b>
</span>
<img class="button_add" src="images/button_add.png" onclick='ajax({
url:"add_comment.php?id_article=1",
statbox:"statusbox",
method:"POST",
data:
	{
	   name:document.getElementById("name").value,
	   mail:document.getElementById("mail").value,
	   text:document.getElementById("text").value,
	   nr:document.getElementById("nr").value,
	},
success:function(data){document.getElementById("statusbox").innerHTML=data;}
})'
/>
</form>
</div>
<?php
include("show_comments.php");
show_comments('1');
?>
</div>
</center>