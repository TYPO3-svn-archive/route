<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2013 - Dirk Wildt <http://wildt.at.die-netzmacher.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
* Class provides methods for the extension manager.
*
* @author    Dirk Wildt <http://wildt.at.die-netzmacher.de>
* @package    TYPO3
* @subpackage    route
* @version  2.0.0
* @since    2.0.0
*/


  /**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   49: class tx_route_userfunc
 *   67:     function promptCheckUpdate()
 *  102:     function promptCurrIP()
 *
 * TOTAL FUNCTIONS: 2
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */
class tx_route_userfunc
{
  
 /**
  * Extension key
  *
  * @var string
  */
  public $extKey = 'route';

 /**
  * Extension configuration
  *
  * @var array
  */
  private $arr_extConf = null;
  
 /**
  * Max width of div tags
  *
  * @var string
  */
  private $maxWidth = "600px";
  
 /**
  * Version of TYPO3 (sample: 4.7.7 -> 4007007)
  *
  * @var string
  */
  public $typo3Version = null;
  

  
  /***********************************************
   *
   * Extension Management
   *
   **********************************************/

 /**
  * extMgmVersion( ): Returns the version of an extension as an interger and a string.
  *                   I.e
  *                   * int: 4007007
  *                   * str: 4.7.7
  *
  * @param    string        $_EXTKEY    : extension key
  * @return    array        $arrReturn  : version as int (integer) and str (string)
  * @access public
  * @version 0.0.1
  * @since 0.0.1
  */
  public function extMgmVersion( $_EXTKEY )
  {
    $arrReturn = null;
    
    if( ! t3lib_extMgm::isLoaded( $_EXTKEY ) )
    {
      $arrReturn['int'] = 0;
      $arrReturn['str'] = 0;
      return $arrReturn;
    }

      // Do not use require_once!
    require( t3lib_extMgm::extPath( $_EXTKEY ) . 'ext_emconf.php');
    $strVersion = $EM_CONF[$_EXTKEY]['version'];

      // Set version as integer (sample: 4.7.7 -> 4007007)
    list( $main, $sub, $bugfix ) = explode( '.', $strVersion );
    $intVersion = ( ( int ) $main ) * 1000000;
    $intVersion = $intVersion + ( ( int ) $sub ) * 1000;
    $intVersion = $intVersion + ( ( int ) $bugfix ) * 1;
      // Set version as integer (sample: 4.7.7 -> 4007007)
    
    $arrReturn['int'] = $intVersion;
    $arrReturn['str'] = $strVersion;
    return $arrReturn;
  }
 
  
  
  /***********************************************
   *
   * Prompts
   *
   **********************************************/    

  /**
   * promptCurrIP( ): Displays the IP of the current backend user
   *
   * @return    string        message wrapped in HTML
   * @access  public
   * @version 0.0.1
   * @since   0.0.1
   */
  public function promptCurrIP( )
  {
      $prompt = null;

      $prompt = $prompt.'
<div class="typo3-message message-information">
  <div class="message-body">
    ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptCurrIPBody') . ': ' . t3lib_div :: getIndpEnv('REMOTE_ADDR') . '
  </div>
</div>';

    return $prompt;
  }
  
  /**
   * promptEvaluatorTYPO3version(): Displays the quick start message.
   *
   * @return  string    message wrapped in HTML
   * @access  public
   * @version 2.0.0
   * @since   2.0.0
   */
  public function promptEvaluatorTYPO3version()
  {
//.message-notice
//.message-information
//.message-ok
//.message-warning
//.message-error

    $prompt = null;

    $this->set_TYPO3Version( );
    
    switch( true )
    {
      case( $this->typo3Version < 4005000 ):
          // Smaller than 4.5
        $prompt = $prompt . '
          <div class="typo3-message message-warning" style="max-width:' . $this->maxWidth . ';">
            <div class="message-body">
              ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptEvaluatorTYPO3version45smaller'). '
            </div>
          </div>
          ';
//        $prompt = $prompt . '
//          <div class="typo3-message message-information" style="max-width:' . $this->maxWidth . ';">
//            <div class="message-body">
//              ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptEvaluatorIncludeCss4-6'). '
//            </div>
//          </div>
//          ';
        break;
      case( $this->typo3Version < 4006000 ):
          // Greater than 4.7
        $prompt = $prompt . '
          <div class="typo3-message message-ok" style="max-width:' . $this->maxWidth . ';">
            <div class="message-body">
              ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptEvaluatorTYPO3version46smaller'). '
            </div>
          </div>
          ';
//        $prompt = $prompt . '
//          <div class="typo3-message message-information" style="max-width:' . $this->maxWidth . ';">
//            <div class="message-body">
//              ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptEvaluatorIncludeCss4-6'). '
//            </div>
//          </div>
//          ';
        break;
      case( $this->typo3Version < 4007000 ):
          // Greater than 4.7
        $prompt = $prompt . '
          <div class="typo3-message message-ok" style="max-width:' . $this->maxWidth . ';">
            <div class="message-body">
              ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptEvaluatorTYPO3version47smaller'). '
            </div>
          </div>
          ';
//        $prompt = $prompt . '
//          <div class="typo3-message message-information" style="max-width:' . $this->maxWidth . ';">
//            <div class="message-body">
//              ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptEvaluatorIncludeCss4-6'). '
//            </div>
//          </div>
//          ';
        break;
      case( $this->typo3Version < 4008000 ):
          // Greater than 4.7
        $prompt = $prompt . '
          <div class="typo3-message message-ok" style="max-width:' . $this->maxWidth . ';">
            <div class="message-body">
              ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptEvaluatorTYPO3version48smaller'). '
            </div>
          </div>
          ';
        break;
//      case( ( $this->typo3Version >= 4006000 ) && ( $this->typo3Version < 4007000 ) ):
      default:
          // Equal to 4.6
        $prompt = $prompt . '
          <div class="typo3-message message-ok" style="max-width:' . $this->maxWidth . ';">
            <div class="message-body">
              ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptEvaluatorTYPO3version48orGreater'). '
            </div>
          ';
        break;
    }
        
    return $prompt;
  }

  
  
  /**
   * promptExternalLinks(): Displays the quick start message.
   *
   * @return  string    message wrapped in HTML
   * @access  public
   * @version 2.0.0
   * @since   2.0.0
   */
  public function promptExternalLinks()
  {
//.message-notice
//.message-information
//.message-ok
//.message-warning
//.message-error

      $prompt = null;

      $prompt = $prompt . '
<div class="message-body" style="max-width:600px;">
  ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptExternalLinksBody') . '
</div>';

    return $prompt;
  }
  
  /**
   * promptSponsors( ): Displays the quick start message.
   *
   * @return  string    message wrapped in HTML
   * @access  public
   * @version 2.0.0
   * @since   2.0.0
   */
  public function promptSponsors()
  {
//.message-notice
//.message-information
//.message-ok
//.message-warning
//.message-error

      $prompt = null;

      $prompt = $prompt . '
<div class="message-body" style="max-width:600px;">
  ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:promptSponsors') . '
</div>';

    return $prompt;
  }
   
  
  
  /***********************************************
   *
   * TYPO3
   *
   **********************************************/    

 /**
   * set_TYPO3Version( ):
   *
   * @return  void
   * @access  private
   * @version 2.0.0
   * @since 2.0.0
   */
  private function set_TYPO3Version( )
  {
      // RETURN : typo3Version is set
    if( $this->typo3Version !== null )
    {
      return;
    }
      // RETURN : typo3Version is set
    
      // Set TYPO3 version as integer (sample: 4.7.7 -> 4007007)
    list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
    $version = ( ( int ) $main ) * 1000000;
    $version = $version + ( ( int ) $sub ) * 1000;
    $version = $version + ( ( int ) $bugfix ) * 1;
    $this->typo3Version = $version;
      // Set TYPO3 version as integer (sample: 4.7.7 -> 4007007)

    if( $this->typo3Version < 3000000 )
    {
      $prompt = '<h1>ERROR</h1>
        <h2>Unproper TYPO3 version</h2>
        <ul>
          <li>
            TYPO3 version is smaller than 3.0.0
          </li>
          <li>
            constant TYPO3_version: ' . TYPO3_version . '
          </li>
          <li>
            integer $this->typo3Version: ' . ( int ) $this->typo3Version . '
          </li>
        </ul>
          ';
      die ( $prompt );
    }
  }
  
  
  
  /***********************************************
   *
   * Typoscript
   *
   **********************************************/
    
/**
 * typoscriptCheck( ): 
 *
 * @return	void
 * @access    private
 * @version 2.0.0
 * @since 2.0.0
 */
  private function typoscriptCheck( )
  {
    $this->typoscriptInit( );

    if( ! empty( $this->conf['pluginCheck'] ) )
    {
      return;
    }

    $prompt = '
      <div class="typo3-message message-error" style="max-width:' . $this->maxWidth . ';">
        <div class="message-body">
          ' . $GLOBALS['LANG']->sL('LLL:EXT:route/lib/userfunc/locallang.xml:typoscriptMissing'). '
        </div>
      </div>
      ';
    
    return $prompt;
  }
   
/**
 * typoscriptInit( ): 
 *
 * @return	void
 * @access    private
 * @version 2.0.0
 * @since 2.0.0
 */
  private function typoscriptInit( )
  {
    //$this->conf = $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_route_pi1.']; // get ts

      // Init page id and the page object
    $this->typoscriptInitPageUid( );
    $this->typoscriptInitPageObj( );

      // Init agregrated TypoScript
    $arr_rows_of_all_pages_inRootLine = $this->pageObject->getRootLine( $this->pid );
    if( empty( $arr_rows_of_all_pages_inRootLine ) )
    {
      return;
    }
    $this->typoscriptInitTsObj( $arr_rows_of_all_pages_inRootLine );

    $this->conf = $this->typoscriptObject->setup['plugin.']['tx_route_pi1.'];

    return;
  }

/**
 * typoscriptInitPageObj(): Initiate an page object.
 *
 * @return	void
 * @access    private
 * @version 2.0.0
 * @since 2.0.0
 */
  private function typoscriptInitPageObj( )
  {
    if( ! empty( $this->pageObject ) )
    {
      return;
    }

      // Set current page object
    require_once( PATH_t3lib . 'class.t3lib_page.php' );
    $this->pageObject = t3lib_div::makeInstance( 't3lib_pageSelect' );

    return;
  }

  /**
 * typoscriptInitPageUid(): Initiate the page uid.
 *
 * @return	void
 * @access    private
 * @version 2.0.0
 * @since 2.0.0
 */
  private function typoscriptInitPageUid( )
  {
    if( ! empty( $this->pid ) )
    {
      return;
    }

      // Update: Get current page id from the plugin
    $int_pid = false;
    if( $this->row['pid'] > 0 )
    {
      $int_pid = $this->row['pid'];
    }
      // Update: Get current page id from the plugin

      // New: Get current page id from the current URL
    if( ! $int_pid )
    {
        // Get backend URL - something like .../alt_doc.php?returnUrl=db_list.php&id%3D2926%26table%3D%26imagemode%3D1&edit[tt_content][1734]=edit
      $str_url = $_GET['returnUrl'];
        // Get curent page id
      $int_pid = intval( substr( $str_url, strpos( $str_url, 'id=' ) + 3 ) );
    }
      // New: Get current page id from the current URL

      // Set current page id
    $this->pid = $int_pid;

    return;
  }

  /**
 * typoscriptInitTsObj(): Initiate the TypoScript of the current page.
 *
 * @param	array		$arr_rows_of_all_pages_inRootLine: Agregate the TypoScript of all pages in the rootline
 * @return	void
 * @access    private
 * @version 2.0.0
 * @since 2.0.0
 */
  private function typoscriptInitTsObj( $arr_rows_of_all_pages_inRootLine )
  {
    if( ! empty( $this->typoscriptObject ) )
    {
      return;
    }

    require_once( PATH_t3lib . 'class.t3lib_tstemplate.php' );
    require_once( PATH_t3lib . 'class.t3lib_tsparser_ext.php' );

    $this->typoscriptObject = t3lib_div::makeInstance( 't3lib_tsparser_ext' );
    $this->typoscriptObject->tt_track = 0;
    $this->typoscriptObject->init( );
    $this->typoscriptObject->runThroughTemplates( $arr_rows_of_all_pages_inRootLine );
    $this->typoscriptObject->generateConfig( );

    return;
  }
  


}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/route/lib/class.tx_route_userfunc.php'])
{
  include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/route/lib/class.tx_route_userfunc.php']);
}

?>