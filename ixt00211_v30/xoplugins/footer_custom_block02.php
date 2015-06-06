<?php
/*
* Qualitative Themes for XOOPS
*
* @license       http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @project       IXThemes Project, http://ixthemes.org
* @theme_name    ixt00211
* @theme_release 3.0
* @theme_demo    http://ixthemes.sourceforge.net/demo/x/index.php?xoops_theme_select=ixt00211
* @theme_author  Alexander Galochkin (algalochkin at users.sourceforge.net)
* @version       $Id: footer_custom_block02.php 2835 2010-04-26 16:00:15Z algalochkin $
*
* Thanks you, that you have left this header untouched!!!
*/
$block = array(
	'id'        => '1002',
	'title'     => 'Follow Us!!!',
	'content'   => '
	<div align="center">
	<a href="http://twitter.com/ixthemes"><img title="IXThemes on Twitter" alt="IXThemes on Twitter" src="'.XOOPS_URL.'/themes/'.$theme.'/img/twitter-follow-me.png" /></a>
 <p>&nbsp;</p>
 <a href="http://ixthemes.org"><img title="IXThemes Project" alt="The Best FREE XOOPS Themes" src="'.XOOPS_URL.'/themes/'.$theme.'/img/logo.png" /></a>
 <p>&nbsp;</p>
 </div>
	',
);
$this->assign('fblock', $block);
?>
