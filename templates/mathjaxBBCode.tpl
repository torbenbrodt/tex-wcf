<script src="{@RELATIVE_WCF_DIR}js/BBCodeTeX.class.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
onloadEvents.push(function() {
	var tex = new BBCodeTeX();
	tex.write({@$tex_data});
	return function() {
		tex.show();
	};
}());
//]]>
</script>
