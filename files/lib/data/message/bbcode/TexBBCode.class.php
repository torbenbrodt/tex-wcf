<?php
require_once(WCF_DIR.'lib/data/message/bbcode/BBCodeParser.class.php');
require_once(WCF_DIR.'lib/data/message/bbcode/BBCode.class.php');

/**
 * BBCode for [tex] Tag
 *
 * @author      Torben Brodt <easy-coding.de>
 * @package     de.easy-coding.wcf.data.message.bbcode.tex
 * @url		http://trac.easy-coding.de/trac/wcf/wiki/TeX
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-3.0.html>
 */
class TexBBCode implements BBCode {

	/**
	 * @see BBCode::getParsedTag()
	 */
	public function getParsedTag($openingTag, $content, $closingTag, BBCodeParser $parser) {
		if ($parser->getOutputType() == 'text/html') {
			WCF::getTPL()->assign(array(
				// let us trust in mathjax, that there are no xss possibilities
				'tex_data' => json_encode(StringUtil::encodeHTML($content))
			));
			return WCF::getTPL()->fetch('mathjaxBBCode');
		}
		else if ($parser->getOutputType() == 'text/plain') {
			return $content;
		}
	}
}
?>
