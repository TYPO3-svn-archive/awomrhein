<?php

if (!defined ('TYPO3_MODE'))
{
  die ('Access denied.');
}



  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 
  // INDEX
  // -----
  // Configuration by the extension manager
  //    Localization support
  //    Store record configuration
  // General Configuration
  // Wizards and config drafts
  // TCA
  //   tx_awomrhein



  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 
  // Configuration by the extension manager

//$bool_LL = false;
//$confArr = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['awomrhein']);

  // Configuration by the extension manager



    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // 
    // General Configuration
    
    // JSopenParams for all wizards
  $JSopenParams     = 'height=680,width=800,status=0,menubar=0,scrollbars=1';
    // General Configuration



  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 
  // Wizards and config drafts

  $conf_datetime = array (
    'type'    => 'input',
    'size'    => '10',
    'max'     => '20',
    'eval'    => 'datetime',
    'default' => mktime(date('H'),date('i'),0,date('m'),date('d'),date('Y')),
  );
  
  $conf_datetimeend = $conf_datetime;
  unset($conf_datetimeend['default']);

  $conf_input_30_trim = array (
    'type' => 'input',
    'size' => '30',
    'eval' => 'trim'
  );

  $conf_input_30_trimRequired = array (
    'type' => 'input',
    'size' => '30',
    'eval' => 'trim,required'
  );
  
  $conf_input_80_trim = array (
    'type' => 'input',
    'size' => '80',
    'eval' => 'trim'
  );
  $conf_text_50_10 = array (
    'type' => 'text',
    'cols' => '50', 
    'rows' => '10',
  );
  
  $conf_text_rte = array (
    'type' => 'text',
    'cols' => '30',
    'rows' => '5',
    'wizards' => array(
      '_PADDING' => 2,
      'RTE' => array(
        'notNewRecords' => 1,
        'RTEonly'       => 1,
        'type'          => 'script',
        'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
        'icon'          => 'wizard_rte2.gif',
        'script'        => 'wizard_rte.php',
      ),
    ),
  );

  $conf_hidden = array (
    'exclude' => $bool_exclude_default,
    'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
    'config'  => array (
      'type'    => 'check',
      'default' => '0'
    )
  );
  // Other wizards and config drafts



  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //
  // tx_awomrhein - without any localisation support

$TCA['tx_awomrhein'] = array (
  'ctrl' => $TCA['tx_awomrhein']['ctrl'],
  'interface' => array (
    'showRecordFieldList' => '
        externalid, title,bookedup,bookingurl,eventbegin,eventend,spaceoftime,staff1,staff2,price1,price2,price3,tx_awomrhein_cat,bodytext,skills,details,category
      , tx_awomrhein_cat
      , location1,location2,location3,location4,location5
      , day1,day2,day3,day4,day5
      , hours1,hours2,hours3,hours4,hours5
      , hidden,fe_group
      , keywords,description'
  ),
  'feInterface' => $TCA['tx_awomrhein']['feInterface'],
  'columns' => array (
    'externalid' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.externalid',
      'config'  => $conf_input_30_trimRequired,
    ),
    'title' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.title',
      'config'  => $conf_input_30_trimRequired,
    ),
    'bookedup' => array (
      'exclude' => $bool_exclude_none,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.bookedup',
      'config' => array (
        'type' => 'check'
      )
    ),
    'bookingurl' => array (
      'exclude' => $bool_exclude_default,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.bookingurl',
      'config' => array (
        'type' => 'text',
        'cols' => '30',
        'rows' => '3',
        'wizards' => array(
          '_PADDING' => 2,
          'link' => array(
            'type' => 'popup',
            'title' => 'Link',
            'icon' => 'link_popup.gif',
            'script' => 'browse_links.php?mode=wizard',
            'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
          )
        ),
        'softref' => 'typolink[linkList]'
      )
    ),
    'eventbegin' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.eventbegin',
      'config'  => $conf_datetime,
    ),
    'eventend' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.eventend',
      'config'  => $conf_datetimeend,
    ),
    'spaceoftime' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.spaceoftime',
      'config'  => $conf_input_30_trim,
    ),
    'staff1' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.staff1',
      'config'  => $conf_input_30_trim,
    ),
    'staff2' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.staff2',
      'config'  => $conf_input_30_trim,
    ),
    'price1' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.price1',
      'config'  => $conf_input_30_trim,
    ),
    'price2' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.price2',
      'config'  => $conf_input_30_trim,
    ),
    'price3' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.price3',
      'config'  => $conf_input_30_trim,
    ),
    'tx_awomrhein_cat' => array (
      'exclude'   => $bool_exclude_default,
      'label'     => 'LLL:EXTawomrheinlocallang_db.xml:tx_awomrhein.tx_awomrhein_cat',
      'config'    => array (
        'type'                => 'select',
        'size'                => 10,
        'minitems'            => 0,
        'maxitems'            => 99,
        'MM'                  => 'tx_awomrhein_mm_tx_awomrhein_cat',
        'foreign_table'       => 'tx_awomrhein_cat',
//        'foreign_table_where' => 'AND tx_awomrhein_cat.' . $str_store_record_conf . ' AND tx_awomrhein_cat.deleted = 0 AND tx_awomrhein_cat.hidden = 0 ORDER BY tx_awomrhein_cat.title',
        'foreign_table_where' => 'AND  tx_awomrhein_cat.deleted = 0 AND tx_awomrhein_cat.hidden = 0 ORDER BY tx_awomrhein_cat.title',
        'form_type'           => 'user',
        'userFunc'            => 'tx_cpstcatree->getTree',
        'treeView'            => 1,
        'expandable'          => 1,
        'expandFirst'         => 0,
        'expandAll'           => 0,
        'wizards' => array (
          '_PADDING'  => 2,
          '_VERTICAL' => 0,
          'add' => array (
            'type'   => 'script',
            'title'  => 'LLL:EXTawomrheinlocallang_db.xml:wizard.tx_awomrhein_cat.add',
            'icon'   => 'add.gif',
            'params' => array (
              'table'    => 'tx_awomrhein_cat',
              'pid'      => $str_marker_pid,
              'setValue' => 'prepend'
            ),
            'script' => 'wizard_add.php',
          ),
          'list' => array (
            'type'   => 'script',
            'title'  => 'LLL:EXTawomrheinlocallang_db.xml:wizard.tx_awomrhein_cat.list',
            'icon'   => 'list.gif',
            'params' => array (
              'table' => 'tx_awomrhein_cat',
              'pid'   => $str_marker_pid,
            ),
            'script' => 'wizard_list.php',
          ),
          'edit' => array (
            'type'                      => 'popup',
            'title'                     => 'LLL:EXTawomrheinlocallang_db.xml:wizard.tx_awomrhein_cat.edit',
            'script'                    => 'wizard_edit.php',
            'popup_onlyOpenIfSelected'  => 1,
            'icon'                      => 'edit2.gif',
            'JSopenParams'              => $JSopenParams,
          ),
        ),
      ),
    ),
    'bodytext' => array (
      'exclude' => $bool_exclude_default,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.bodytext',
      'config'  => $conf_text_rte,
    ),
    'skills' => array (
      'exclude' => $bool_exclude_default,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.skills',
      'config'  => $conf_text_50_10,
    ),
    'details' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.details',
      'config'  => $conf_text_50_10,
    ),
    'category' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.category',
      'config'  => $conf_input_80_trim,
    ),
    'price1' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.price1',
      'config'  => $conf_input_80_trim,
    ),
    'price2' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.price2',
      'config'  => $conf_input_80_trim,
    ),
    'price3' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.price3',
      'config'  => $conf_input_80_trim,
    ),
    'day1' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.day1',
      'config'  => $conf_input_80_trim,
    ),
    'day2' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.day2',
      'config'  => $conf_input_80_trim,
    ),
    'day3' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.day3',
      'config'  => $conf_input_80_trim,
    ),
    'day4' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.day4',
      'config'  => $conf_input_80_trim,
    ),
    'day5' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.day5',
      'config'  => $conf_input_80_trim,
    ),
    'hours1' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.hours1',
      'config'  => $conf_input_80_trim,
    ),
    'hours2' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.hours2',
      'config'  => $conf_input_80_trim,
    ),
    'hours3' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.hours3',
      'config'  => $conf_input_80_trim,
    ),
    'hours4' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.hours4',
      'config'  => $conf_input_80_trim,
    ),
    'hours5' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.hours5',
      'config'  => $conf_input_80_trim,
    ),
    'hidden'    => $conf_hidden,
    'fe_group'  => $conf_fegroup,
    'keywords'  => array (
      'label'     => 'LLL:EXT:org/locallang_db.xml:tca_phrase.keywords',
      'l10n_mode' => 'prefixLangTitle',
      'exclude'   => $bool_exclude_default,
      'config'    => $conf_input_80_trim,
    ),
    'description' => array (
      'label'     => 'LLL:EXT:org/locallang_db.xml:tca_phrase.description',
      'l10n_mode' => 'prefixLangTitle',
      'exclude'   => $bool_exclude_default,
      'config'    => $conf_text_50_10,
    ),
  ),
  'types' =>  array 
  (
    '0' =>  array
    (
      'showitem' => '
            --div--;LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.div_event
          , externalid
          , title 
          , bookedup
          , bookingurl
          , eventbegin
          , eventend
          , spaceoftime
          , staff1
          , staff2
          , price1
          , price2
          , price3
          , tx_awomrhein_cat
          , details
          , category
          , bodytext;;;richtext[]:rte_transform[mode=ts];
          , skills
          , --div--;LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.div_location
          , location1
          , location2
          , location3
          , location4
          , location5
          , --div--;LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.div_days
          , day1
          , day2
          , day3
          , day4
          , day5
          , --div--;LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.div_hours
          , hours1
          , hours2
          , hours3
          , hours4
          , hours5
          , --div--;LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.div_control
          , hidden
          ,fe_group
          , --div--;LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.div_seo
          , keywords
          , description' 
        ,
    ),
  ),
  'palettes' => array ( )
);
  // tx_awomrhein - without any localisation support



  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 
  // tx_awomrhein_cat
  
$TCA['tx_awomrhein_cat'] = array (
  'ctrl' => $TCA['tx_awomrhein_cat']['ctrl'],
  'interface' => array (
    'showRecordFieldList' => '
        title
      , uid_parent
      , hidden',
  ),
  'columns' => array (
    'title' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_cat.title',
      'config'  => $conf_input_30_trimRequired,
    ),
    'uid_parent' => array (
      'exclude'   => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_cat.uid_parent',
      'config'    => array (
        'type'          => 'select',
        'size'          => 1,
        'minitems'      => 0,
        'maxitems'      => 2,
        'trueMaxItems'  => 1,
        'form_type'     => 'user',
        'userFunc'      => 'tx_cpstcatree->getTree',
        'foreign_table' => 'tx_awomrhein_cat',
        'treeView'      => 1,
        'expandable'    => 1,
        'expandFirst'   => 0,
        'expandAll'     => 0,
      ),
    ),
    'hidden'    => $conf_hidden,
  ),
  'types' => array
  (
    '0' => array 
    (
      'showitem' => '
          title
        , uid_parent
        , hidden'
    ),
  ),
  'palettes' => array ( ),
);
  // tx_awomrhein_cat