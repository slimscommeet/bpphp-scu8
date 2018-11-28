<?php
/**
 * @Author: ido_alit
 * @Date:   2015-11-12 18:45:37
 * @Last Modified by:   ido_alit
 * @Last Modified time: 2015-11-22 19:23:00
 */

/*
=========================
Be sure that this file not accessed directly
=========================
*/
if (!defined('INDEX_AUTH')) {
  die("can not access this file directly");
} elseif (INDEX_AUTH != 1) {
  die("can not access this file directly");
}

/*
=========================
Define current public template directory
=========================
*/
define('CURRENT_TEMPLATE_DIR', $sysconf['template']['dir'].'/'.$sysconf['template']['theme'].'/');

/*
=========================
Load config template
=========================
*/
include 'tinfo.inc.php';
utility::loadSettings($dbs);

/*
=========================
Load custome function
=========================
*/
include 'function.php';

/*
=========================
Load header
- open html tag
- head tag
- open body tag
=========================
*/
include 'part/head.php';

//Div Template Bagian Atas Taruh Disini //////

include 'part/header.php';
include 'part/banner-area.php';

if (!isset($_GET['p']) AND !isset($_GET['search']) ){
	include 'part/feature-area.php';
	include 'part/search-course-area.php';
	include 'part/review-area.php';
	include 'part/cta-one-area.php';
}

//if (!isset($_GET['p']) AND !isset($_GET['search']) ){
	//include 'part/feature.php';
//}

// Template List Buku
include 'part/pages_template.php';

//Div Template Bagian Bawah Footer Taruh Disini /////
include 'part/footer-area.php';

?>