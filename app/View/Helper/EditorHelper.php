<?php
class EditorHelper extends Helper
{
 function loadCK($id){
 $buff = "<script type=\"text/javascript\">
 //<![CDATA[
 var editor_$id = CKEDITOR.replace('$id', {customConfig : '/js/editor/config_".LANG.".js'});
 CKFinder.SetupCKEditor( editor_$id, '/js/ckfinder/' );
 //]]>
 </script>";
 return $buff;
 }
}
?>