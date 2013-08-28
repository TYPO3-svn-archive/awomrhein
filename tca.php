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
  
  $conf_hidden = array (
    'exclude' => $bool_exclude_default,
    'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.hidden',
    'config'  => array (
      'type'    => 'check',
      'default' => '0'
    )
  );
  // Other wizards and config drafts

  $str_marker_pid = '###CURRENT_PID###';


  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //
  // tx_awomrhein - without any localisation support

$TCA['tx_awomrhein'] = array (
  'ctrl' => $TCA['tx_awomrhein']['ctrl'],
  'interface' => array (
    'showRecordFieldList' => '
        address1
      , address2
      , attendance2
      , attendance3
      , attendance4
      , attendance5
      , attendance6
      , attendance7
      , city
      , description
      , email
      , facility
      , fax
      , hidden
      , keywords
      , lat
      , lon
      , phone
      , status
      , tx_awomrhein_attendance
      , tx_awomrhein_cat
      , tx_awomrhein_certificate
      , tx_awomrhein_corporation
      , tx_awomrhein_responsible
      , url
      , zip
      '
  ),
  'feInterface' => $TCA['tx_awomrhein']['feInterface'],
  'columns' => array (
    'address1' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.address1',
      'config'  => $conf_input_30_trim,
    ),
    'address2' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.address2',
      'config'  => $conf_input_30_trim,
    ),
    'attendance2' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.attendance2',
      'config'  => $conf_input_30_trim,
    ),
    'attendance3' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.attendance3',
      'config'  => $conf_input_30_trim,
    ),
    'attendance4' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.attendance4',
      'config'  => $conf_input_30_trim,
    ),
    'attendance5' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.attendance5',
      'config'  => $conf_input_30_trim,
    ),
    'attendance6' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.attendance6',
      'config'  => $conf_input_30_trim,
    ),
    'attendance7' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.attendance7',
      'config'  => $conf_input_30_trim,
    ),
    'city' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.city',
      'config'  => $conf_input_30_trim,
    ),
    'description' => array (
      'label'     => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.description',
      'l10n_mode' => 'prefixLangTitle',
      'exclude'   => $bool_exclude_default,
      'config'    => $conf_text_50_10,
    ),
    'email' => array (
      'exclude' => $bool_exclude_default,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.email',
      'config' => array (
        'type' => 'text',
        'cols' => '80',
        'rows' => '1',
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
    'facility' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.facility',
      'config'  => $conf_input_30_trimRequired,
    ),
    'fax' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.fax',
      'config'  => $conf_input_30_trim,
    ),
    'hidden'    => $conf_hidden,
    'keywords'  => array (
      'label'     => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.keywords',
      'l10n_mode' => 'prefixLangTitle',
      'exclude'   => $bool_exclude_default,
      'config'    => $conf_input_80_trim,
    ),
    'lat' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.lat',
      'config'  => $conf_input_30_trim,
    ),
    'lon' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.lon',
      'config'  => $conf_input_30_trim,
    ),
    'phone' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.phone',
      'config'  => $conf_input_30_trim,
    ),
    'status' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.status',
      'config'  => $conf_datetime,
    ),
    'tx_awomrhein_attendance' => array (
      'exclude'   => $bool_exclude_default,
      'label'     => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.tx_awomrhein_attendance',
      'config'    => array (
        'type'                => 'select',
        'size'                => 10,
        'minitems'            => 0,
        'maxitems'            => 99,
        'MM'                  => 'tx_awomrhein_mm_tx_awomrhein_attendance',
        'foreign_table'       => 'tx_awomrhein_attendance',
//        'foreign_table_where' => 'AND tx_awomrhein_attendance.' . $str_store_record_conf . ' AND tx_awomrhein_attendance.deleted = 0 AND tx_awomrhein_attendance.hidden = 0 ORDER BY tx_awomrhein_attendance.title',
        'foreign_table_where' => 'AND  tx_awomrhein_attendance.deleted = 0 AND tx_awomrhein_attendance.hidden = 0 ORDER BY tx_awomrhein_attendance.title',
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
            'title'  => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_attendance.add',
            'icon'   => 'add.gif',
            'params' => array (
              'table'    => 'tx_awomrhein_attendance',
              'pid'      => $str_marker_pid,
              'setValue' => 'prepend'
            ),
            'script' => 'wizard_add.php',
          ),
          'list' => array (
            'type'   => 'script',
            'title'  => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_attendance.list',
            'icon'   => 'list.gif',
            'params' => array (
              'table' => 'tx_awomrhein_attendance',
              'pid'   => $str_marker_pid,
            ),
            'script' => 'wizard_list.php',
          ),
          'edit' => array (
            'type'                      => 'popup',
            'title'                     => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_attendance.edit',
            'script'                    => 'wizard_edit.php',
            'popup_onlyOpenIfSelected'  => 1,
            'icon'                      => 'edit2.gif',
            'JSopenParams'              => $JSopenParams,
          ),
        ),
      ),
    ),
    'tx_awomrhein_cat' => array (
      'exclude'   => $bool_exclude_default,
      'label'     => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.tx_awomrhein_cat',
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
            'title'  => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_cat.add',
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
            'title'  => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_cat.list',
            'icon'   => 'list.gif',
            'params' => array (
              'table' => 'tx_awomrhein_cat',
              'pid'   => $str_marker_pid,
            ),
            'script' => 'wizard_list.php',
          ),
          'edit' => array (
            'type'                      => 'popup',
            'title'                     => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_cat.edit',
            'script'                    => 'wizard_edit.php',
            'popup_onlyOpenIfSelected'  => 1,
            'icon'                      => 'edit2.gif',
            'JSopenParams'              => $JSopenParams,
          ),
        ),
      ),
    ),
    'tx_awomrhein_certificate' => array (
      'exclude'   => $bool_exclude_default,
      'label'     => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.tx_awomrhein_certificate',
      'config'    => array (
        'type'                => 'select',
        'size'                => 10,
        'minitems'            => 0,
        'maxitems'            => 99,
        'MM'                  => 'tx_awomrhein_mm_tx_awomrhein_certificate',
        'foreign_table'       => 'tx_awomrhein_certificate',
//        'foreign_table_where' => 'AND tx_awomrhein_certificate.' . $str_store_record_conf . ' AND tx_awomrhein_certificate.deleted = 0 AND tx_awomrhein_certificate.hidden = 0 ORDER BY tx_awomrhein_certificate.title',
        'foreign_table_where' => 'AND  tx_awomrhein_certificate.deleted = 0 AND tx_awomrhein_certificate.hidden = 0 ORDER BY tx_awomrhein_certificate.title',
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
            'title'  => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_certificate.add',
            'icon'   => 'add.gif',
            'params' => array (
              'table'    => 'tx_awomrhein_certificate',
              'pid'      => $str_marker_pid,
              'setValue' => 'prepend'
            ),
            'script' => 'wizard_add.php',
          ),
          'list' => array (
            'type'   => 'script',
            'title'  => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_certificate.list',
            'icon'   => 'list.gif',
            'params' => array (
              'table' => 'tx_awomrhein_certificate',
              'pid'   => $str_marker_pid,
            ),
            'script' => 'wizard_list.php',
          ),
          'edit' => array (
            'type'                      => 'popup',
            'title'                     => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_certificate.edit',
            'script'                    => 'wizard_edit.php',
            'popup_onlyOpenIfSelected'  => 1,
            'icon'                      => 'edit2.gif',
            'JSopenParams'              => $JSopenParams,
          ),
        ),
      ),
    ),
    'tx_awomrhein_corporation' => array (
      'exclude'   => $bool_exclude_default,
      'label'     => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.tx_awomrhein_corporation',
      'config'    => array (
        'type'                => 'select',
        'size'                => 10,
        'minitems'            => 0,
        'maxitems'            => 99,
        'MM'                  => 'tx_awomrhein_mm_tx_awomrhein_corporation',
        'foreign_table'       => 'tx_awomrhein_corporation',
//        'foreign_table_where' => 'AND tx_awomrhein_corporation.' . $str_store_record_conf . ' AND tx_awomrhein_corporation.deleted = 0 AND tx_awomrhein_corporation.hidden = 0 ORDER BY tx_awomrhein_corporation.title',
        'foreign_table_where' => 'AND  tx_awomrhein_corporation.deleted = 0 AND tx_awomrhein_corporation.hidden = 0 ORDER BY tx_awomrhein_corporation.title',
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
            'title'  => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_corporation.add',
            'icon'   => 'add.gif',
            'params' => array (
              'table'    => 'tx_awomrhein_corporation',
              'pid'      => $str_marker_pid,
              'setValue' => 'prepend'
            ),
            'script' => 'wizard_add.php',
          ),
          'list' => array (
            'type'   => 'script',
            'title'  => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_corporation.list',
            'icon'   => 'list.gif',
            'params' => array (
              'table' => 'tx_awomrhein_corporation',
              'pid'   => $str_marker_pid,
            ),
            'script' => 'wizard_list.php',
          ),
          'edit' => array (
            'type'                      => 'popup',
            'title'                     => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_corporation.edit',
            'script'                    => 'wizard_edit.php',
            'popup_onlyOpenIfSelected'  => 1,
            'icon'                      => 'edit2.gif',
            'JSopenParams'              => $JSopenParams,
          ),
        ),
      ),
    ),
    'tx_awomrhein_responsible' => array (
      'exclude'   => $bool_exclude_default,
      'label'     => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.tx_awomrhein_responsible',
      'config'    => array (
        'type'                => 'select',
        'size'                => 1,
        'minitems'            => 1,
        'maxitems'            => 1,
        'MM'                  => 'tx_awomrhein_mm_tx_awomrhein_responsible',
        'foreign_table'       => 'tx_awomrhein_responsible',
        'foreign_table_where' => 'AND  tx_awomrhein_responsible.deleted = 0 AND tx_awomrhein_responsible.hidden = 0 ORDER BY tx_awomrhein_responsible.title',
        'wizards' => array (
          '_PADDING'  => 2,
          '_VERTICAL' => 0,
          'add' => array (
            'type'   => 'script',
            'title'  => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_responsible.add',
            'icon'   => 'add.gif',
            'params' => array (
              'table'    => 'tx_awomrhein_responsible',
              'pid'      => $str_marker_pid,
              'setValue' => 'prepend'
            ),
            'script' => 'wizard_add.php',
          ),
          'list' => array (
            'type'   => 'script',
            'title'  => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_responsible.list',
            'icon'   => 'list.gif',
            'params' => array (
              'table' => 'tx_awomrhein_responsible',
              'pid'   => $str_marker_pid,
              'pid'   => null,
            ),
            'script' => 'wizard_list.php',
          ),
          'edit' => array (
            'type'                      => 'popup',
            'title'                     => 'LLL:EXT:awomrhein/locallang_db.xml:wizard.tx_awomrhein_responsible.edit',
            'script'                    => 'wizard_edit.php',
            'popup_onlyOpenIfSelected'  => 1,
            'icon'                      => 'edit2.gif',
            'JSopenParams'              => $JSopenParams,
          ),
        ),
      ),
    ),
    'url' => array (
      'exclude' => $bool_exclude_default,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.url',
      'config' => array (
        'type' => 'text',
        'cols' => '80',
        'rows' => '1',
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
    'zip' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.zip',
      'config'  => $conf_input_30_trim,
    ),
  ),
  'types' =>  array 
  (
    '0' =>  array
    (
      'showitem' => '
            --div--;LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.div_facility
          , facility
          , tx_awomrhein_responsible
          , tx_awomrhein_cat
          , tx_awomrhein_certificate
          , tx_awomrhein_corporation
          , --div--;LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.div_address
          , address2
          , address1
          , zip
          , city
          , fax
          , phone
          , email
          , url
          , lon
          , lat
          , --div--;LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.div_attendance
          , tx_awomrhein_attendance
          , attendance2
          , attendance3
          , attendance4
          , attendance5
          , attendance6
          , attendance7
          , status
          , --div--;LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein.div_control
          , hidden
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
  // tx_awomrhein_attendance
  
$TCA['tx_awomrhein_attendance'] = array (
  'ctrl' => $TCA['tx_awomrhein_attendance']['ctrl'],
  'interface' => array (
    'showRecordFieldList' => '
        title
      , uid_parent
      , hidden',
  ),
  'columns' => array (
    'title' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_attendance.title',
      'config'  => $conf_input_30_trimRequired,
    ),
    'uid_parent' => array (
      'exclude'   => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_attendance.uid_parent',
      'config'    => array (
        'type'          => 'select',
        'size'          => 1,
        'minitems'      => 0,
        'maxitems'      => 2,
        'trueMaxItems'  => 1,
        'form_type'     => 'user',
        'userFunc'      => 'tx_cpstcatree->getTree',
        'foreign_table' => 'tx_awomrhein_attendance',
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
  // tx_awomrhein_attendance



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



  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 
  // tx_awomrhein_certificate
  
$TCA['tx_awomrhein_certificate'] = array (
  'ctrl' => $TCA['tx_awomrhein_certificate']['ctrl'],
  'interface' => array (
    'showRecordFieldList' => '
        title
      , uid_parent
      , hidden',
  ),
  'columns' => array (
    'title' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_certificate.title',
      'config'  => $conf_input_30_trimRequired,
    ),
    'uid_parent' => array (
      'exclude'   => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_certificate.uid_parent',
      'config'    => array (
        'type'          => 'select',
        'size'          => 1,
        'minitems'      => 0,
        'maxitems'      => 2,
        'trueMaxItems'  => 1,
        'form_type'     => 'user',
        'userFunc'      => 'tx_cpstcatree->getTree',
        'foreign_table' => 'tx_awomrhein_certificate',
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
  // tx_awomrhein_certificate



  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 
  // tx_awomrhein_corporation
  
$TCA['tx_awomrhein_corporation'] = array (
  'ctrl' => $TCA['tx_awomrhein_corporation']['ctrl'],
  'interface' => array (
    'showRecordFieldList' => '
        title
      , uid_parent
      , hidden',
  ),
  'columns' => array (
    'title' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_corporation.title',
      'config'  => $conf_input_30_trimRequired,
    ),
    'uid_parent' => array (
      'exclude'   => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_corporation.uid_parent',
      'config'    => array (
        'type'          => 'select',
        'size'          => 1,
        'minitems'      => 0,
        'maxitems'      => 2,
        'trueMaxItems'  => 1,
        'form_type'     => 'user',
        'userFunc'      => 'tx_cpstcatree->getTree',
        'foreign_table' => 'tx_awomrhein_corporation',
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
  // tx_awomrhein_corporation



  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 
  // tx_awomrhein_responsible
  
$TCA['tx_awomrhein_responsible'] = array (
  'ctrl' => $TCA['tx_awomrhein_responsible']['ctrl'],
  'interface' => array (
    'showRecordFieldList' => '
        title
      , uid_parent
      , hidden',
  ),
  'columns' => array (
    'title' => array (
      'exclude' => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_responsible.title',
      'config'  => $conf_input_30_trimRequired,
    ),
    'uid_parent' => array (
      'exclude'   => 0,
      'label'   => 'LLL:EXT:awomrhein/locallang_db.xml:tx_awomrhein_responsible.uid_parent',
      'config'    => array (
        'type'          => 'select',
        'size'          => 1,
        'minitems'      => 0,
        'maxitems'      => 2,
        'trueMaxItems'  => 1,
        'form_type'     => 'user',
        'userFunc'      => 'tx_cpstcatree->getTree',
        'foreign_table' => 'tx_awomrhein_responsible',
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
  // tx_awomrhein_responsible