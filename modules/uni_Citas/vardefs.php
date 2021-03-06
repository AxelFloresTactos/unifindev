<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['uni_Citas'] = array(
    'table' => 'uni_citas',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'account_id_c' => 
  array (
    'required' => false,
    'name' => 'account_id_c',
    'vname' => 'LBL_CLIENTE_ID_ACCOUNT_ID',
    'type' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  ),
  'cliente_id' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'cliente_id',
    'vname' => 'LBL_CLIENTE_ID',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'account_id_c',
    'ext2' => 'Accounts',
    'module' => 'Accounts',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'duracion_cita' => 
  array (
    'required' => false,
    'name' => 'duracion_cita',
    'vname' => 'LBL_DURACION_CITA',
    'type' => 'int',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '10',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'duracion_traslado' => 
  array (
    'required' => false,
    'name' => 'duracion_traslado',
    'vname' => 'LBL_DURACION_TRASLADO',
    'type' => 'enum',
    'massupdate' => true,
    'default' => '0',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'duration_intervals',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'referenciada' => 
  array (
    'required' => false,
    'name' => 'referenciada',
    'vname' => 'LBL_REFERENCIADA',
    'type' => 'bool',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'user_id_c' => 
  array (
    'required' => false,
    'name' => 'user_id_c',
    'vname' => 'LBL_ACOMPANIANTE_USER_ID',
    'type' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  ),
  'acompaniante' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'acompaniante',
    'vname' => 'LBL_ACOMPANIANTE',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'user_id_c',
    'ext2' => 'Users',
    'module' => 'Users',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'objetivo' => 
  array (
    'required' => false,
    'name' => 'objetivo',
    'vname' => 'LBL_OBJETIVO',
    'type' => 'enum',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'objetivo_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'estatus' => 
  array (
    'required' => false,
    'name' => 'estatus',
    'vname' => 'LBL_ESTATUS',
    'type' => 'enum',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'estatus_cita',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'resultado' => 
  array (
    'required' => false,
    'name' => 'resultado',
    'vname' => 'LBL_RESULTADO',
    'type' => 'enum',
    'massupdate' => true,
    'default' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'resultado_list',
    'studio' => 'visible',
    'dependency' => false,
    'visibility_grid' => 
    array (
      'trigger' => 'estatus',
      'values' => 
      array (
        1 => 
        array (
          0 => '1',
          1 => '2',
          2 => '3',
          3 => '4',
          4 => '5',
          5 => '6',
          6 => '7',
        ),
        2 => 
        array (
          0 => '8',
        ),
        3 => 
        array (
          0 => '8',
        ),
        '' => 
        array (
        ),
      ),
    ),
  ),
  'meeting_id_c' => 
  array (
    'required' => false,
    'name' => 'meeting_id_c',
    'vname' => 'LBL_ID_MEETING_MEETING_ID',
    'type' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  ),
  'id_meeting' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'id_meeting',
    'vname' => 'LBL_ID_MEETING',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'meeting_id_c',
    'ext2' => 'Meetings',
    'module' => 'Meetings',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'duracion_cita_controller' => 
  array (
    'required' => false,
    'name' => 'duracion_cita_controller',
    'vname' => 'LBL_DURACION_CITA_CONTROLLER',
    'type' => 'int',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '10',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'duracion_traslado_controller' => 
  array (
    'required' => false,
    'name' => 'duracion_traslado_controller',
    'vname' => 'LBL_DURACION_TRASLADO_CONTROLLER',
    'type' => 'enum',
    'massupdate' => true,
    'default' => '0',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'duration_intervals',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'referenciada_controller' => 
  array (
    'required' => false,
    'name' => 'referenciada_controller',
    'vname' => 'LBL_REFERENCIADA_CONTROLLER',
    'type' => 'bool',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'objetivo_controller' => 
  array (
    'required' => false,
    'name' => 'objetivo_controller',
    'vname' => 'LBL_OBJETIVO_CONTROLLER',
    'type' => 'enum',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'objetivo_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'estatus_controller' => 
  array (
    'required' => false,
    'name' => 'estatus_controller',
    'vname' => 'LBL_ESTATUS_CONTROLLER',
    'type' => 'enum',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'estatus_cita',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'resultado_controller' => 
  array (
    'required' => false,
    'name' => 'resultado_controller',
    'vname' => 'LBL_RESULTADO_CONTROLLER',
    'type' => 'enum',
    'massupdate' => true,
    'default' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'resultado_list',
    'studio' => 'visible',
    'dependency' => false,
    'visibility_grid' => 
    array (
      'trigger' => 'estatus',
      'values' => 
      array (
        1 => 
        array (
          0 => '1',
          1 => '2',
          2 => '3',
          3 => '4',
          4 => '5',
          5 => '6',
          6 => '7',
        ),
        2 => 
        array (
          0 => '8',
        ),
        3 => 
        array (
          0 => '8',
        ),
        '' => 
        array (
        ),
      ),
    ),
  ),
  'user_id1_c' => 
  array (
    'required' => false,
    'name' => 'user_id1_c',
    'vname' => 'LBL_ACOMPANIANTE_CONTROLLER_USER_ID',
    'type' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  ),
  'acompaniante_controller' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'acompaniante_controller',
    'vname' => 'LBL_ACOMPANIANTE_CONTROLLER',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'user_id1_c',
    'ext2' => 'Users',
    'module' => 'Users',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'account_id1_c' => 
  array (
    'required' => false,
    'name' => 'account_id1_c',
    'vname' => 'LBL_CLIENTE_ID_CONTROLLER_ACCOUNT_ID',
    'type' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  ),
  'cliente_id_controller' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'cliente_id_controller',
    'vname' => 'LBL_CLIENTE_ID_CONTROLLER',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'account_id1_c',
    'ext2' => 'Accounts',
    'module' => 'Accounts',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);

if (!class_exists('VardefManager')){
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('uni_Citas','uni_Citas', array('basic','team_security','assignable'));