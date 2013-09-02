<?php
if (!defined ('TYPO3_MODE')) 
{
  die ('Access denied.');
}



  ////////////////////////////////////////////////////////////////////////////
  // 
  // INDEX
  
  // Set TYPO3 version
  // Configuration by the extension manager
  //    Localization support
  // Enables the Include Static Templates
  // Add pagetree icons
  // TCA tables
  //    tx_awomrhein
  //    tx_awomrhein_attendance
  //    tx_awomrhein_cat
  //    tx_awomrhein_certificate
  //    tx_awomrhein_corporation
  //    tx_awomrhein_responsible



  ////////////////////////////////////////////////////////////////////////////
  //
  // Set TYPO3 version

  // Set TYPO3 version as integer (sample: 4.7.7 -> 4007007)
list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$version = ( ( int ) $main ) * 1000000;
$version = $version + ( ( int ) $sub ) * 1000;
$version = $version + ( ( int ) $bugfix ) * 1;
$typo3Version = $version;
  // Set TYPO3 version as integer (sample: 4.7.7 -> 4007007)

if( $typo3Version < 3000000 ) 
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
  // Set TYPO3 version

    

  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 
  // Configuration by the extension manager
  
$confArr  = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);

  // Language for labels of static templates and page tsConfig
$llStatic = $confArr['LLstatic'];
switch( true ) 
{
  case( $llStatic == 'German' ):
    $llStatic = 'de';
    break;
  default:
    $llStatic = 'default';
}
  // Language for labels of static templates and page tsConfig



  ////////////////////////////////////////////////////////////////////////////
  // 
  // Enables the Include Static Templates

  // Case $llStatic
switch(true) {
  case($llStatic == 'de'):
      // German
    t3lib_extMgm::addStaticFile($_EXTKEY,'static/views/51370/',                 'AWO Mittelrhein' );
    t3lib_extMgm::addStaticFile($_EXTKEY,'static/views/51370/downgrade/4.5.4/', 'AWO Mittelrhein: +Browser < v4.6' );
//    switch( true )
//    {
//      case( $typo3Version < 4007000 ):
//        t3lib_extMgm::addStaticFile($_EXTKEY,'static/base/typo3/4.6/',    'AWO Mittelrhein: +Basis fuer TYPO3 < 4.7 (einbinden!)');
//        break;
//      default:
//        t3lib_extMgm::addStaticFile($_EXTKEY,'static/base/typo3/4.6/',    'AWO Mittelrhein: +Basis fuer TYPO3 < 4.7 (NICHT einbinden!)');
//        break;
//    }
    break;
  default:
      // English
    t3lib_extMgm::addStaticFile($_EXTKEY,'static/views/51370/',                 'AWO Mittelrhein' );
    t3lib_extMgm::addStaticFile($_EXTKEY,'static/views/51370/downgrade/4.5.4/', 'AWO Mittelrhein: +Browser < v4.6' );
//    switch( true )
//    {
//      case( $typo3Version < 4007000 ):
//        t3lib_extMgm::addStaticFile($_EXTKEY,'static/base/typo3/4.6/',    'AWO Mittelrhein: +Basis for TYPO3 < 4.7 (obligate!)');
//        break;
//      default:
//        t3lib_extMgm::addStaticFile($_EXTKEY,'static/base/typo3/4.6/',    'AWO Mittelrhein: +Basis for TYPO3 < 4.7 (don\'t use it!)');
//        break;
//    }
}
  // Case $llStatic
  // Enables the Include Static Templates



  ////////////////////////////////////////////////////////////////////////////
  // 
  // Add pagetree icons

  // Case $llStatic
switch(true) {
  case($llStatic == 'de'):
      // German
    $TCA['pages']['columns']['module']['config']['items'][] = 
       array('AWO Mittelrhein', 'awomrhein', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif');
    break;
  default:
      // English
    $TCA['pages']['columns']['module']['config']['items'][] = 
       array('AWO Mittelrhein', 'awomrhein', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif');
}
  // Case $llStatic

  //  @see #34858, 120719, uherrmann
t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-awomrhein',
         t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif');

  // Add pagetree icons



  ////////////////////////////////////////////////////////////////////////////
  // 
  // TCA tables

$TCA['tx_awomrhein'] = array (
  'ctrl' => array (
    'title'             => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein',
    'label'             => 'facility',
    'tstamp'            => 'tstamp',
    'crdate'            => 'crdate',
    'cruser_id'         => 'cruser_id',
    'default_sortby'    => 'ORDER BY facility',
    'delete'            => 'deleted',
    'enablecolumns'     => array (
      'disabled'  => 'hidden',
    ),
    'dividers2tabs'     => true,
    'hideAtCopy'        => false,
    'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
    'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon/awomrhein.gif',
    'tx_browser'        => array (
      'geoupdate' => array (
        'address' => array (
          'country'     => 'country',
          'areaLevel1'  => 'areaLevel1',
          'areaLevel2'  => 'areaLevel2',
          'location'    => array (
            'zip'   => 'zip',  
            'city'  => 'city',  
          ),
          'street'  => array (
            'name'    => 'address1',  
            'number'  => null,  
          ),
        ),
        'api' => array (
          'prompt'    => 'geoupdateprompt',  
          'forbidden' => 'geoupdateforbidden',  
        ),
        'geodata' => array (
          'lat'     => 'lat',  
          'lon'     => 'lon',  
        ),
        'update'  => true,  
      ),
    ),
  ),
);

$TCA['tx_awomrhein_attendance'] = array (
  'ctrl' => array (
    'title'             => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_attendance',
    'label'             => 'title',
    'tstamp'            => 'tstamp',
    'crdate'            => 'crdate',
    'cruser_id'         => 'cruser_id',
    'default_sortby'    => 'ORDER BY title',
    'delete'            => 'deleted',
    'enablecolumns'     => array (
      'disabled'  => 'hidden',
    ),
    'readOnly'          => $confArr['databaseReadonly'],
    'dividers2tabs'     => true,
    'hideAtCopy'        => false,
    'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
    'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon/awomrhein.gif',
  ),
);

$TCA['tx_awomrhein_cat'] = array (
  'ctrl' => array (
    'title'             => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_cat',
    'label'             => 'title',
    'tstamp'            => 'tstamp',
    'crdate'            => 'crdate',
    'cruser_id'         => 'cruser_id',
    'default_sortby'    => 'ORDER BY title',
    'delete'            => 'deleted',
    'enablecolumns'     => array (
      'disabled'  => 'hidden',
    ),
    'readOnly'          => $confArr['databaseReadonly'],
    'dividers2tabs'     => true,
    'hideAtCopy'        => false,
    'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
    'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon/awomrhein.gif',
  ),
);

$TCA['tx_awomrhein_certificate'] = array (
  'ctrl' => array (
    'title'             => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_certificate',
    'label'             => 'title',
    'tstamp'            => 'tstamp',
    'crdate'            => 'crdate',
    'cruser_id'         => 'cruser_id',
    'default_sortby'    => 'ORDER BY title',
    'delete'            => 'deleted',
    'enablecolumns'     => array (
      'disabled'  => 'hidden',
    ),
    'readOnly'          => $confArr['databaseReadonly'],
    'dividers2tabs'     => true,
    'hideAtCopy'        => false,
    'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
    'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon/awomrhein.gif',
  ),
);

$TCA['tx_awomrhein_corporation'] = array (
  'ctrl' => array (
    'title'             => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_corporation',
    'label'             => 'title',
    'tstamp'            => 'tstamp',
    'crdate'            => 'crdate',
    'cruser_id'         => 'cruser_id',
    'default_sortby'    => 'ORDER BY title',
    'delete'            => 'deleted',
    'enablecolumns'     => array (
      'disabled'  => 'hidden',
    ),
    'readOnly'          => $confArr['databaseReadonly'],
    'dividers2tabs'     => true,
    'hideAtCopy'        => false,
    'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
    'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon/awomrhein.gif',
  ),
);

$TCA['tx_awomrhein_responsible'] = array (
  'ctrl' => array (
    'title'             => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_responsible',
    'label'             => 'title',
    'tstamp'            => 'tstamp',
    'crdate'            => 'crdate',
    'cruser_id'         => 'cruser_id',
    'default_sortby'    => 'ORDER BY title',
    'delete'            => 'deleted',
    'enablecolumns'     => array (
      'disabled'  => 'hidden',
    ),
    'readOnly'          => $confArr['databaseReadonly'],
    'dividers2tabs'     => true,
    'hideAtCopy'        => false,
    'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
    'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon/awomrhein.gif',
  ),
);
  // TCA tables //////////////////////////////////////////////////////////////

?>
