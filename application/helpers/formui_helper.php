<?php
function select_form($arrayList,$fieldid,$field,$name,$select){
	$dropdown = "<select class=\"form-control\" id=\"".$name."\" name=\"".$name."\">\n";
	$dropdown .= "<option value=\"\"></option>\n";
	foreach($arrayList as $row):
		$selected = "";
		if($select==$row[$fieldid]){
			$selected =" selected";
		}
		$dropdown .= "<option value=\"".$row[$fieldid]."\"".$selected.">".$row[$field]."</option>\n";
	endforeach;
	$dropdown .="</select>\n";
	echo $dropdown;
}

?>
