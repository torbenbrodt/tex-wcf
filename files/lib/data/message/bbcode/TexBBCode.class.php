<?php
require_once(WCF_DIR.'lib/data/message/bbcode/BBCodeParser.class.php');
require_once(WCF_DIR.'lib/data/message/bbcode/BBCode.class.php');

/**
 * BBCode for [tex] Tag
 *
 * @author      Torben Brodt
 * @package     com.woltlab.wcf.data.message.bbcode.tex
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 */
class TexBBCode implements BBCode {
	/**
	 * @see BBCode::getParsedTag()
	 */
	public function getParsedTag($openingTag, $content, $closingTag, BBCodeParser $parser) {
		if ($parser->getOutputType() == 'text/html') {
			return $content;
		}
		else if ($parser->getOutputType() == 'text/plain') {
			return $content;
		}
	}
}
?>
