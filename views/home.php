<form method="POST" action="parse.php">
	<div class="span2" position="relative">
		<div>
		<?php
			$count = true;
			foreach($lang as $key=>$item){
				echo '<label class="radio">';
				echo "<input id=\"lang{$key}\"index=\"{$key}\" type=\"radio\" name=\"compileType\" value=\"{$item['lang']}\" mode=\"{$item['mime']}\" ";
				if($count)
					echo "checked";
				echo ">{$item['val']}<br />";
				echo '</label>';
				$count = false;
			}
		?>
		</div>
		<div class="bottom">
			<select class="span12" id="bindType" name="bindType">
				<option index="0" selected>Default</option>
				<option index="1" >Emacs</option>
				<option index="2" >Vim</option>
			</select>
		</div>
	</div>
	<div class="span7">
	<small><textarea id="codeIn" name="codeIn" rows="20" class="pull-right span12" autofocus></textarea></small>
	</div>
	<div class="span3"><small>
		<table class="table table-condensed">
			<caption><b>Useful Shortcuts</b></caption>
  			<tbody>
				<tr><td>Ctrl+Space</td><td>Toggle Full Screen</td><tr>
				<tr><td>Ctrl+L</td><td>Change Language</td><tr>
				<tr><td>Ctrl+B</td><td>Compile</td><tr>
				<tr><td>Ctrl+Z</td><td>Undo</td><tr>
				<tr><td>Ctrl+Shift+Z</td><td>Redo</td><tr>
				<tr><td>Ctrl+F</td><td>Find</td><tr>
				<tr><td>Ctrl+G</td><td>Find Next</td><tr>
				<tr><td>Ctrl+Shift+F</td><td>Replace</td><tr>
			</tbody>
		</table>
	</small></div>
	<input id="submit" type="submit" value="Compile" class="btn btn-primary pull-right span4">
</form>

<script>
	var editor = CodeMirror.fromTextArea(document.getElementById("codeIn"), {
		lineNumbers: true,
		mode: "text/x-csrc",
		autoCloseBrackets: true,
		theme: "default",
		extraKeys: {
			 "Ctrl-Space": function(cm) {
			 		setFullScreen(cm, !isFullScreen(cm));
			 	},
			},
      });
	$("input[name=compileType]").click(function() {
		editor.setOption("mode", $(this).attr('mode'));
	});
	$("select#bindType").change(function() {
		if($(this).val() == "Default" ) {
			editor.setOption("keyMap", "");
		} else if($(this).val() == "Emacs" ) {
			editor.setOption("keyMap", "emacs");
		} else if($(this).val() == "Vim" ) {
			editor.setOption("keyMap", "vim");
		} 
		alert($(this).val());
	});
	function isFullScreen(cm) {
		return /\bCodeMirror-fullscreen\b/.test(cm.getWrapperElement().className);
	}
	function winHeight() {
		return window.innerHeight || (document.documentElement || document.body).clientHeight;
	}
	function setFullScreen(cm, full) {
		var wrap = cm.getWrapperElement();
		if (full) {
			wrap.className += " CodeMirror-fullscreen";
			wrap.style.height = winHeight() + "px";
			document.documentElement.style.overflow = "hidden";
		} else {
			wrap.className = wrap.className.replace(" CodeMirror-fullscreen", "");
			wrap.style.height = "";
			document.documentElement.style.overflow = "";
		}	
		cm.refresh();
	}
	CodeMirror.on(window, "resize", function() {
		var showing = document.body.getElementsByClassName("CodeMirror-fullscreen")[0];
		if (!showing) return;
		showing.CodeMirror.getWrapperElement().style.height = winHeight() + "px";
	});
	shortcut.add("Ctrl+B",function() {
		$(document.getElementById("submit")).trigger('click')
	});
	shortcut.add("Ctrl+L", function() {
		toggleLanguage();
	});
	shortcut.add("Ctrl+Alt+M", function(){
		alert($('#bindType').val())
		$('#bindType').selectmenu("value", (parseInt($('option:selected', this).attr('index'))+1) % 3);
	}) ;
	function toggleLanguage() {
		var index = (parseInt($('input[name=compileType]:checked').attr('index'))+1) % <?= count($lang) ?>;
		$('input[name=compileType]:checked').prop("checked", false);
		$(document.getElementById("lang" + index)).click();//prop("checked", true);
	}
</script>