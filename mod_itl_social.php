<?php
/**
 * ITL Social by iThemesLab
 * 
 * @package    itl_social
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://ithemeslab.com
 */
 
// No direct access
defined('_JEXEC') or die;

//Get data from module paramater
$facebook 		= $params->get('facebook_url');
$twitter 		= $params->get('twitter_url');
$youtube 		= $params->get('youtube_url');
$pinterest 		= $params->get('pinterest_url');
$dribbble 		= $params->get('dribbble_url');
$behance 		= $params->get('behance_url');
$instagram 		= $params->get('instagram_url');
$tiktok 		= $params->get('tiktok_url');
$git 	 		= $params->get('git_url');
$linkedin 		= $params->get('linkedin_url');

require JModuleHelper::getLayoutPath('mod_itl_social', $params->get('layout'));