<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "caddy".
 *
 * Auto generated 05-03-2013 01:26
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Route - with GoogleMaps or OpenStreetMap',
	'description' =>  'Publish your routes with GoogleMaps or OpenStreetMap. ' 
                        . 'Routes have points of interest (POI). ' 
                        . 'You can categorise and filter both: routes and POI. '
                        . 'Address data can geocoded automatically. '
                        ,
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.1.3',
	'dependencies' => 'browser',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Dirk Wildt (Die Netzmacher)',
	'author_email' => 'http://wildt.at.die-netzmacher.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'browser' => '',
			'typo3' => '4.5.0-6.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:290:{s:9:"ChangeLog";s:4:"a68e";s:21:"ext_conf_template.txt";s:4:"8e14";s:12:"ext_icon.gif";s:4:"eab1";s:17:"ext_localconf.php";s:4:"bc5b";s:14:"ext_tables.php";s:4:"0318";s:14:"ext_tables.sql";s:4:"9a6f";s:16:"locallang_db.xml";s:4:"3c7c";s:7:"tca.php";s:4:"e590";s:26:"files/img/caddy_000_13.png";s:4:"e13f";s:26:"files/img/caddy_050_01.png";s:4:"ce0b";s:26:"files/img/caddy_050_02.png";s:4:"c9c0";s:26:"files/img/caddy_050_03.png";s:4:"6d47";s:26:"files/img/caddy_050_04.png";s:4:"67de";s:26:"files/img/caddy_050_05.png";s:4:"5255";s:26:"files/img/caddy_050_06.png";s:4:"0a46";s:26:"files/img/caddy_050_07.png";s:4:"fd3a";s:26:"files/img/caddy_050_08.png";s:4:"a206";s:26:"files/img/caddy_050_09.png";s:4:"f103";s:26:"files/img/caddy_050_10.png";s:4:"d424";s:26:"files/img/caddy_050_11.png";s:4:"0466";s:26:"files/img/caddy_050_12.png";s:4:"20a0";s:26:"files/img/caddy_050_13.png";s:4:"cd6f";s:26:"files/img/caddy_080_01.png";s:4:"4a57";s:26:"files/img/caddy_080_02.png";s:4:"3b95";s:26:"files/img/caddy_080_03.png";s:4:"ab89";s:26:"files/img/caddy_080_04.png";s:4:"7845";s:26:"files/img/caddy_080_05.png";s:4:"c089";s:26:"files/img/caddy_080_06.png";s:4:"67a6";s:26:"files/img/caddy_080_07.png";s:4:"f2e7";s:26:"files/img/caddy_080_08.png";s:4:"71e0";s:26:"files/img/caddy_080_09.png";s:4:"01d9";s:26:"files/img/caddy_080_10.png";s:4:"b530";s:26:"files/img/caddy_080_11.png";s:4:"3101";s:26:"files/img/caddy_080_12.png";s:4:"4cb3";s:26:"files/img/caddy_080_13.png";s:4:"3022";s:26:"files/img/caddy_100_01.png";s:4:"294a";s:26:"files/img/caddy_100_02.png";s:4:"061c";s:26:"files/img/caddy_100_03.png";s:4:"9e75";s:26:"files/img/caddy_100_04.png";s:4:"2333";s:26:"files/img/caddy_100_05.png";s:4:"333b";s:26:"files/img/caddy_100_06.png";s:4:"78bf";s:26:"files/img/caddy_100_07.png";s:4:"cc51";s:26:"files/img/caddy_100_08.png";s:4:"0ecd";s:26:"files/img/caddy_100_09.png";s:4:"927d";s:26:"files/img/caddy_100_10.png";s:4:"1ca6";s:26:"files/img/caddy_100_11.png";s:4:"4b5e";s:26:"files/img/caddy_100_12.png";s:4:"5fad";s:26:"files/img/caddy_100_13.png";s:4:"3849";s:20:"files/img/delete.gif";s:4:"ad76";s:27:"files/img/delete_000_13.png";s:4:"6acf";s:27:"files/img/delete_050_01.png";s:4:"4787";s:27:"files/img/delete_050_02.png";s:4:"e224";s:27:"files/img/delete_050_03.png";s:4:"54e8";s:27:"files/img/delete_050_04.png";s:4:"cb39";s:27:"files/img/delete_050_05.png";s:4:"350b";s:27:"files/img/delete_050_06.png";s:4:"bb31";s:27:"files/img/delete_050_07.png";s:4:"bab7";s:27:"files/img/delete_050_08.png";s:4:"1696";s:27:"files/img/delete_050_09.png";s:4:"d3d7";s:27:"files/img/delete_050_10.png";s:4:"c8bb";s:27:"files/img/delete_050_11.png";s:4:"433c";s:27:"files/img/delete_050_12.png";s:4:"5283";s:27:"files/img/delete_050_13.png";s:4:"c61e";s:27:"files/img/delete_080_01.png";s:4:"475b";s:27:"files/img/delete_080_02.png";s:4:"e92d";s:27:"files/img/delete_080_03.png";s:4:"83f9";s:27:"files/img/delete_080_04.png";s:4:"a51e";s:27:"files/img/delete_080_05.png";s:4:"6b26";s:27:"files/img/delete_080_06.png";s:4:"f760";s:27:"files/img/delete_080_07.png";s:4:"9cb7";s:27:"files/img/delete_080_08.png";s:4:"b0be";s:27:"files/img/delete_080_09.png";s:4:"ae09";s:27:"files/img/delete_080_10.png";s:4:"9538";s:27:"files/img/delete_080_11.png";s:4:"ffd7";s:27:"files/img/delete_080_12.png";s:4:"fbff";s:27:"files/img/delete_080_13.png";s:4:"a59e";s:27:"files/img/delete_100_01.png";s:4:"6c5e";s:27:"files/img/delete_100_02.png";s:4:"07de";s:27:"files/img/delete_100_03.png";s:4:"86a8";s:27:"files/img/delete_100_04.png";s:4:"579d";s:27:"files/img/delete_100_05.png";s:4:"8e1c";s:27:"files/img/delete_100_06.png";s:4:"fca9";s:27:"files/img/delete_100_07.png";s:4:"9806";s:27:"files/img/delete_100_08.png";s:4:"7228";s:27:"files/img/delete_100_09.png";s:4:"7980";s:27:"files/img/delete_100_10.png";s:4:"1b8d";s:27:"files/img/delete_100_11.png";s:4:"9b5e";s:27:"files/img/delete_100_12.png";s:4:"1018";s:27:"files/img/delete_100_13.png";s:4:"a098";s:25:"files/img/icon_delete.gif";s:4:"ad76";s:40:"files/pdf/de/typo3-quick-shop-agb_A4.pdf";s:4:"0d3d";s:49:"files/pdf/de/typo3-quick-shop-lieferschein_A4.pdf";s:4:"93af";s:45:"files/pdf/de/typo3-quick-shop-rechnung_A4.pdf";s:4:"6443";s:45:"files/pdf/default/typo3-quick-shop-agb_A4.pdf";s:4:"0d3d";s:54:"files/pdf/default/typo3-quick-shop-lieferschein_A4.pdf";s:4:"93af";s:50:"files/pdf/default/typo3-quick-shop-rechnung_A4.pdf";s:4:"6443";s:26:"files/templates/caddy.html";s:4:"5b0f";s:32:"files/templates/caddy_table.html";s:4:"7230";s:30:"files/templates/pdf_table.html";s:4:"34b6";s:27:"lib/class.tx_caddy_calc.php";s:4:"e2ad";s:37:"lib/class.tx_caddy_dynamicmarkers.php";s:4:"98ae";s:36:"lib/class.tx_caddy_powermail_146.php";s:4:"6ab1";s:29:"lib/class.tx_caddy_render.php";s:4:"2785";s:30:"lib/class.tx_caddy_session.php";s:4:"02b7";s:31:"lib/class.tx_caddy_template.php";s:4:"5f41";s:32:"lib/user_caddy_powermailCart.php";s:4:"4cc7";s:28:"lib/caddy/class.tx_caddy.php";s:4:"37e7";s:30:"lib/drs/class.tx_caddy_drs.php";s:4:"df88";s:25:"lib/icons/caddy_80x80.gif";s:4:"afb6";s:41:"lib/icons/die-netzmacher-logo-quadrat.png";s:4:"a7d4";s:38:"lib/icons/made-in-nature.de_120x90.gif";s:4:"1bea";s:31:"lib/icons/your-logo_de-blue.gif";s:4:"19f7";s:31:"lib/icons/your-logo_de-grey.gif";s:4:"1fbc";s:36:"lib/icons/your-logo_default-blue.gif";s:4:"710c";s:36:"lib/icons/your-logo_default-grey.gif";s:4:"6fdc";s:30:"lib/pdf/class.tx_caddy_pdf.php";s:4:"a987";s:25:"lib/pdf/fpdi/fpdf_tpl.php";s:4:"ad01";s:21:"lib/pdf/fpdi/fpdi.php";s:4:"3b90";s:34:"lib/pdf/fpdi/fpdi2tcpdf_bridge.php";s:4:"1219";s:32:"lib/pdf/fpdi/fpdi_pdf_parser.php";s:4:"5a7a";s:28:"lib/pdf/fpdi/pdf_context.php";s:4:"37d3";s:27:"lib/pdf/fpdi/pdf_parser.php";s:4:"7f2f";s:38:"lib/pdf/fpdi/filters/FilterASCII85.php";s:4:"af0a";s:43:"lib/pdf/fpdi/filters/FilterASCII85_FPDI.php";s:4:"4a06";s:34:"lib/pdf/fpdi/filters/FilterLZW.php";s:4:"fa77";s:39:"lib/pdf/fpdi/filters/FilterLZW_FPDI.php";s:4:"4a39";s:28:"lib/pdf/tcpdf/2dbarcodes.php";s:4:"a380";s:26:"lib/pdf/tcpdf/barcodes.php";s:4:"1a77";s:27:"lib/pdf/tcpdf/CHANGELOG.TXT";s:4:"252b";s:28:"lib/pdf/tcpdf/datamatrix.php";s:4:"dff0";s:32:"lib/pdf/tcpdf/encodings_maps.php";s:4:"1e63";s:28:"lib/pdf/tcpdf/htmlcolors.php";s:4:"58fc";s:25:"lib/pdf/tcpdf/LICENSE.TXT";s:4:"5c87";s:24:"lib/pdf/tcpdf/pdf417.php";s:4:"5eb1";s:24:"lib/pdf/tcpdf/qrcode.php";s:4:"abcc";s:24:"lib/pdf/tcpdf/README.TXT";s:4:"617f";s:28:"lib/pdf/tcpdf/spotcolors.php";s:4:"2587";s:22:"lib/pdf/tcpdf/sRGB.icc";s:4:"060e";s:23:"lib/pdf/tcpdf/tcpdf.crt";s:4:"c137";s:23:"lib/pdf/tcpdf/tcpdf.fdf";s:4:"96f8";s:23:"lib/pdf/tcpdf/tcpdf.p12";s:4:"7e07";s:23:"lib/pdf/tcpdf/tcpdf.php";s:4:"764f";s:31:"lib/pdf/tcpdf/tcpdf_filters.php";s:4:"602e";s:30:"lib/pdf/tcpdf/tcpdf_parser.php";s:4:"6aaf";s:30:"lib/pdf/tcpdf/unicode_data.php";s:4:"7c25";s:38:"lib/pdf/tcpdf/cache/chapter_demo_1.txt";s:4:"b06c";s:38:"lib/pdf/tcpdf/cache/chapter_demo_2.txt";s:4:"0b28";s:39:"lib/pdf/tcpdf/cache/table_data_demo.txt";s:4:"2fa9";s:32:"lib/pdf/tcpdf/cache/utf8test.txt";s:4:"bd29";s:37:"lib/pdf/tcpdf/config/tcpdf_config.php";s:4:"d582";s:41:"lib/pdf/tcpdf/config/tcpdf_config_alt.php";s:4:"3db2";s:33:"lib/pdf/tcpdf/config/lang/afr.php";s:4:"d2e3";s:33:"lib/pdf/tcpdf/config/lang/ara.php";s:4:"88c3";s:33:"lib/pdf/tcpdf/config/lang/aze.php";s:4:"0d94";s:33:"lib/pdf/tcpdf/config/lang/bel.php";s:4:"aaa9";s:33:"lib/pdf/tcpdf/config/lang/bra.php";s:4:"2b9a";s:33:"lib/pdf/tcpdf/config/lang/cat.php";s:4:"3b18";s:33:"lib/pdf/tcpdf/config/lang/ces.php";s:4:"a21b";s:33:"lib/pdf/tcpdf/config/lang/chi.php";s:4:"d30b";s:33:"lib/pdf/tcpdf/config/lang/cym.php";s:4:"8cb4";s:33:"lib/pdf/tcpdf/config/lang/dan.php";s:4:"0fe1";s:33:"lib/pdf/tcpdf/config/lang/eng.php";s:4:"af88";s:33:"lib/pdf/tcpdf/config/lang/est.php";s:4:"3fa8";s:33:"lib/pdf/tcpdf/config/lang/eus.php";s:4:"e0b1";s:33:"lib/pdf/tcpdf/config/lang/far.php";s:4:"47a6";s:33:"lib/pdf/tcpdf/config/lang/fra.php";s:4:"f056";s:33:"lib/pdf/tcpdf/config/lang/ger.php";s:4:"8fbb";s:33:"lib/pdf/tcpdf/config/lang/gle.php";s:4:"658b";s:33:"lib/pdf/tcpdf/config/lang/glg.php";s:4:"aeed";s:33:"lib/pdf/tcpdf/config/lang/hat.php";s:4:"119c";s:33:"lib/pdf/tcpdf/config/lang/heb.php";s:4:"8b87";s:33:"lib/pdf/tcpdf/config/lang/hrv.php";s:4:"ee77";s:33:"lib/pdf/tcpdf/config/lang/hun.php";s:4:"7973";s:33:"lib/pdf/tcpdf/config/lang/hye.php";s:4:"ae6d";s:33:"lib/pdf/tcpdf/config/lang/ind.php";s:4:"c139";s:33:"lib/pdf/tcpdf/config/lang/ita.php";s:4:"d74f";s:33:"lib/pdf/tcpdf/config/lang/jpn.php";s:4:"5767";s:33:"lib/pdf/tcpdf/config/lang/kat.php";s:4:"53f4";s:33:"lib/pdf/tcpdf/config/lang/kor.php";s:4:"e527";s:33:"lib/pdf/tcpdf/config/lang/mkd.php";s:4:"8719";s:33:"lib/pdf/tcpdf/config/lang/mlt.php";s:4:"49fe";s:33:"lib/pdf/tcpdf/config/lang/msa.php";s:4:"446f";s:33:"lib/pdf/tcpdf/config/lang/nld.php";s:4:"dc17";s:33:"lib/pdf/tcpdf/config/lang/nob.php";s:4:"80c2";s:33:"lib/pdf/tcpdf/config/lang/pol.php";s:4:"2a19";s:33:"lib/pdf/tcpdf/config/lang/por.php";s:4:"4e5e";s:33:"lib/pdf/tcpdf/config/lang/ron.php";s:4:"97a5";s:33:"lib/pdf/tcpdf/config/lang/rus.php";s:4:"154d";s:33:"lib/pdf/tcpdf/config/lang/slv.php";s:4:"482e";s:33:"lib/pdf/tcpdf/config/lang/spa.php";s:4:"d94a";s:33:"lib/pdf/tcpdf/config/lang/sqi.php";s:4:"8e2d";s:33:"lib/pdf/tcpdf/config/lang/srp.php";s:4:"cbb3";s:33:"lib/pdf/tcpdf/config/lang/swa.php";s:4:"28dd";s:33:"lib/pdf/tcpdf/config/lang/swe.php";s:4:"3426";s:33:"lib/pdf/tcpdf/config/lang/urd.php";s:4:"db5c";s:33:"lib/pdf/tcpdf/config/lang/yid.php";s:4:"3514";s:33:"lib/pdf/tcpdf/config/lang/zho.php";s:4:"ad33";s:28:"lib/pdf/tcpdf/doc/index.html";s:4:"39c0";s:37:"lib/pdf/tcpdf/fonts/aealarabiya.ctg.z";s:4:"5408";s:35:"lib/pdf/tcpdf/fonts/aealarabiya.php";s:4:"6a63";s:33:"lib/pdf/tcpdf/fonts/aealarabiya.z";s:4:"74cb";s:33:"lib/pdf/tcpdf/fonts/aefurat.ctg.z";s:4:"cbd3";s:31:"lib/pdf/tcpdf/fonts/aefurat.php";s:4:"fe5d";s:29:"lib/pdf/tcpdf/fonts/aefurat.z";s:4:"3b5c";s:30:"lib/pdf/tcpdf/fonts/cid0cs.php";s:4:"4d82";s:30:"lib/pdf/tcpdf/fonts/cid0ct.php";s:4:"42d2";s:30:"lib/pdf/tcpdf/fonts/cid0jp.php";s:4:"832d";s:30:"lib/pdf/tcpdf/fonts/cid0kr.php";s:4:"bf6b";s:31:"lib/pdf/tcpdf/fonts/courier.php";s:4:"2894";s:32:"lib/pdf/tcpdf/fonts/courierb.php";s:4:"baad";s:33:"lib/pdf/tcpdf/fonts/courierbi.php";s:4:"f938";s:32:"lib/pdf/tcpdf/fonts/courieri.php";s:4:"afdc";s:33:"lib/pdf/tcpdf/fonts/helvetica.php";s:4:"2a31";s:34:"lib/pdf/tcpdf/fonts/helveticab.php";s:4:"3daa";s:35:"lib/pdf/tcpdf/fonts/helveticabi.php";s:4:"c22f";s:34:"lib/pdf/tcpdf/fonts/helveticai.php";s:4:"e0a7";s:44:"lib/pdf/tcpdf/fonts/hysmyeongjostdmedium.php";s:4:"51f6";s:38:"lib/pdf/tcpdf/fonts/kozgopromedium.php";s:4:"2c5e";s:40:"lib/pdf/tcpdf/fonts/kozminproregular.php";s:4:"78fd";s:37:"lib/pdf/tcpdf/fonts/msungstdlight.php";s:4:"c940";s:35:"lib/pdf/tcpdf/fonts/pdfacourier.php";s:4:"35b7";s:33:"lib/pdf/tcpdf/fonts/pdfacourier.z";s:4:"01d8";s:36:"lib/pdf/tcpdf/fonts/pdfacourierb.php";s:4:"5aeb";s:34:"lib/pdf/tcpdf/fonts/pdfacourierb.z";s:4:"accf";s:37:"lib/pdf/tcpdf/fonts/pdfacourierbi.php";s:4:"1f23";s:35:"lib/pdf/tcpdf/fonts/pdfacourierbi.z";s:4:"a218";s:36:"lib/pdf/tcpdf/fonts/pdfacourieri.php";s:4:"8702";s:34:"lib/pdf/tcpdf/fonts/pdfacourieri.z";s:4:"aaa9";s:37:"lib/pdf/tcpdf/fonts/pdfahelvetica.php";s:4:"b8f1";s:35:"lib/pdf/tcpdf/fonts/pdfahelvetica.z";s:4:"e4e0";s:38:"lib/pdf/tcpdf/fonts/pdfahelveticab.php";s:4:"36cc";s:36:"lib/pdf/tcpdf/fonts/pdfahelveticab.z";s:4:"a2a1";s:39:"lib/pdf/tcpdf/fonts/pdfahelveticabi.php";s:4:"351c";s:37:"lib/pdf/tcpdf/fonts/pdfahelveticabi.z";s:4:"1075";s:38:"lib/pdf/tcpdf/fonts/pdfahelveticai.php";s:4:"fa8a";s:36:"lib/pdf/tcpdf/fonts/pdfahelveticai.z";s:4:"5701";s:34:"lib/pdf/tcpdf/fonts/pdfasymbol.php";s:4:"a874";s:32:"lib/pdf/tcpdf/fonts/pdfasymbol.z";s:4:"d1cd";s:33:"lib/pdf/tcpdf/fonts/pdfatimes.php";s:4:"287c";s:31:"lib/pdf/tcpdf/fonts/pdfatimes.z";s:4:"6a0d";s:34:"lib/pdf/tcpdf/fonts/pdfatimesb.php";s:4:"8f55";s:32:"lib/pdf/tcpdf/fonts/pdfatimesb.z";s:4:"138a";s:35:"lib/pdf/tcpdf/fonts/pdfatimesbi.php";s:4:"2937";s:33:"lib/pdf/tcpdf/fonts/pdfatimesbi.z";s:4:"6ca7";s:34:"lib/pdf/tcpdf/fonts/pdfatimesi.php";s:4:"e0d0";s:32:"lib/pdf/tcpdf/fonts/pdfatimesi.z";s:4:"fc03";s:40:"lib/pdf/tcpdf/fonts/pdfazapfdingbats.php";s:4:"34b9";s:38:"lib/pdf/tcpdf/fonts/pdfazapfdingbats.z";s:4:"9b56";s:38:"lib/pdf/tcpdf/fonts/stsongstdlight.php";s:4:"eb85";s:30:"lib/pdf/tcpdf/fonts/symbol.php";s:4:"20e2";s:29:"lib/pdf/tcpdf/fonts/times.php";s:4:"a750";s:30:"lib/pdf/tcpdf/fonts/timesb.php";s:4:"ad48";s:31:"lib/pdf/tcpdf/fonts/timesbi.php";s:4:"a5f3";s:30:"lib/pdf/tcpdf/fonts/timesi.php";s:4:"8fd8";s:36:"lib/pdf/tcpdf/fonts/uni2cid_ac15.php";s:4:"96c6";s:36:"lib/pdf/tcpdf/fonts/uni2cid_ag15.php";s:4:"0f60";s:36:"lib/pdf/tcpdf/fonts/uni2cid_aj16.php";s:4:"c458";s:36:"lib/pdf/tcpdf/fonts/uni2cid_ak12.php";s:4:"7ad3";s:36:"lib/pdf/tcpdf/fonts/zapfdingbats.php";s:4:"191b";s:42:"lib/powermail/class.tx_caddy_powermail.php";s:4:"51ef";s:52:"lib/updatewizard/class.tx_caddy_pi1_updatewizard.php";s:4:"4c60";s:60:"lib/updatewizard/class.tx_caddy_pi1_updatewizard_checker.php";s:4:"a081";s:60:"lib/updatewizard/class.tx_caddy_pi1_updatewizard_tickets.php";s:4:"6c05";s:30:"lib/updatewizard/locallang.xml";s:4:"b632";s:40:"lib/userfunc/class.tx_caddy_userfunc.php";s:4:"37c1";s:26:"lib/userfunc/locallang.xml";s:4:"1058";s:26:"pi1/class.tx_caddy_pi1.php";s:4:"4bee";s:32:"pi1/class.tx_caddy_pi1_clean.php";s:4:"7b8f";s:35:"pi1/class.tx_caddy_pi1_flexform.php";s:4:"7bb0";s:16:"pi1/flexform.xml";s:4:"502a";s:36:"pi1/flexform_sheet_deliveryorder.xml";s:4:"82e5";s:28:"pi1/flexform_sheet_email.xml";s:4:"2b10";s:27:"pi1/flexform_sheet_help.xml";s:4:"e73f";s:30:"pi1/flexform_sheet_invoice.xml";s:4:"dbc1";s:29:"pi1/flexform_sheet_origin.xml";s:4:"cd4d";s:28:"pi1/flexform_sheet_paths.xml";s:4:"743d";s:27:"pi1/flexform_sheet_sDEF.xml";s:4:"8f08";s:31:"pi1/flexform_sheet_sponsors.xml";s:4:"e078";s:17:"pi1/locallang.xml";s:4:"617c";s:26:"pi1/locallang_flexform.xml";s:4:"996d";s:32:"pi2/class.tx_caddy_evalprice.php";s:4:"97cd";s:26:"pi2/class.tx_caddy_pi2.php";s:4:"0a36";s:16:"pi2/flexform.xml";s:4:"cd46";s:17:"pi2/locallang.xml";s:4:"632b";s:26:"pi3/class.tx_caddy_pi3.php";s:4:"ec44";s:16:"pi3/flexform.xml";s:4:"e3f1";s:17:"pi3/locallang.xml";s:4:"b936";s:20:"static/constants.txt";s:4:"f5ac";s:16:"static/setup.txt";s:4:"bc86";s:20:"static/css/setup.txt";s:4:"9436";}',
	'suggests' => array(
	),
);

?>