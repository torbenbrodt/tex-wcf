<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * overwrites tex button
 *
 * @author	Torben Brodt
 * @package	de.easy-coding.wcf.tex
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-3.0.html>
 */
class TexMessageFormListener implements EventListener {
	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		WCF::getTPL()->append('additionalTabs', '<script type="text/javascript" src="http://www.codecogs.com/components/equationeditor/equationeditor.js"></script>
							<script type="text/javascript">
								//<![CDATA[
								onloadEvents.push(function() {
									var d = document.getElementById("mce_editor_0_tex");
									if(d) {	
										d.href = "javascript:void(0)";
										d.onclick = function() {
											OpenLatexEditor(\'mce_editor_0_codeview\',\'phpBB\',\'\');
										}
									}
								});
								//]]>
							</script>');
	}
}
?>
