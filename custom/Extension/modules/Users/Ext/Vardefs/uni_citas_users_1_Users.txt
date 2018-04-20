<?php
// created: 2018-04-04 18:35:40
$dictionary["User"]["fields"]["uni_citas_users_1"] = array (
  'name' => 'uni_citas_users_1',
  'type' => 'link',
  'relationship' => 'uni_citas_users_1',
  'source' => 'non-db',
  'module' => 'uni_Citas',
  'bean_name' => 'uni_Citas',
  'side' => 'right',
  'vname' => 'LBL_UNI_CITAS_USERS_1_FROM_USERS_TITLE',
  'id_name' => 'uni_citas_users_1uni_citas_ida',
  'link-type' => 'one',
);
$dictionary["User"]["fields"]["uni_citas_users_1_name"] = array (
  'name' => 'uni_citas_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNI_CITAS_USERS_1_FROM_UNI_CITAS_TITLE',
  'save' => true,
  'id_name' => 'uni_citas_users_1uni_citas_ida',
  'link' => 'uni_citas_users_1',
  'table' => 'uni_citas',
  'module' => 'uni_Citas',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["uni_citas_users_1uni_citas_ida"] = array (
  'name' => 'uni_citas_users_1uni_citas_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_UNI_CITAS_USERS_1_FROM_USERS_TITLE_ID',
  'id_name' => 'uni_citas_users_1uni_citas_ida',
  'link' => 'uni_citas_users_1',
  'table' => 'uni_citas',
  'module' => 'uni_Citas',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
