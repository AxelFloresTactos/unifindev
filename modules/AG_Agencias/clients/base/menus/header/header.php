<?php

/* This file was generated by the 7_FixIconNameChanges upgrader */
$viewdefs['AG_Agencias']['base']['menu']['header'] =  array (
  0 => 
  array (
    'route' => '#AG_Agencias/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'AG_Agencias',
    'icon' => 'fa-plus',
  ),
  1 => 
  array (
    'route' => '#AG_Agencias',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'AG_Agencias',
    'icon' => 'fa-bars',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=AG_Agencias&return_module=AG_Agencias&return_action=index',
    'label' => 'LBL_IMPORT',
    'acl_action' => 'import',
    'acl_module' => 'AG_Agencias',
    'icon' => 'fa-upload',
  ),
);
