<?php
/**
 * @author      Torben Brodt
 * @package     com.woltlab.wcf.data.message.bbcode.tex
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 */

system('cd mimetex; cc -DAA mimetex.c gifsave.c -lm -o mimetex.cgi');
system('mv mimetex.cgi cgi-bin/');
?>
