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

$dictionary['uni_Brujula'] = array(
    'table' => 'uni_brujula',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'id_brujula' => 
  array (
    'required' => false,
    'name' => 'id_brujula',
    'vname' => 'LBL_ID_BRUJULA',
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
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'fecha_reporte' => 
  array (
    'required' => true,
    'name' => 'fecha_reporte',
    'vname' => 'LBL_FECHA_REPORTE',
    'type' => 'date',
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
    'size' => '20',
    'enable_range_search' => false,
  ),
  'date_entered' => 
  array (
    'name' => 'date_entered',
    'vname' => 'LBL_DATE_ENTERED',
    'type' => 'datetime',
    'group' => 'created_by_name',
    'comment' => 'Date record created',
    'enable_range_search' => false,
    'options' => 'date_range_search_dom',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'duplicate_on_record_copy' => 'no',
    'readonly' => true,
    'massupdate' => false,
    'required' => false,
    'no_default' => false,
    'comments' => 'Date record created',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'size' => '20',
    'dbType' => 'datetime',
  ),
  'extemporaneo' => 
  array (
    'required' => false,
    'name' => 'extemporaneo',
    'vname' => 'LBL_EXTEMPORANEO',
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
  'contactos_numero' => 
  array (
    'required' => false,
    'name' => 'contactos_numero',
    'vname' => 'LBL_CONTACTOS_NUMERO',
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
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'contactos_duracion' => 
  array (
    'required' => false,
    'name' => 'contactos_duracion',
    'vname' => 'LBL_CONTACTOS_DURACION',
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
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'contactos_no_localizados' => 
  array (
    'required' => false,
    'name' => 'contactos_no_localizados',
    'vname' => 'LBL_CONTACTOS_NO_LOCALIZADOS',
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
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'contactos_no_interesados' => 
  array (
    'required' => false,
    'name' => 'contactos_no_interesados',
    'vname' => 'LBL_CONTACTOS_NO_INTERESADOS',
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
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'contactos_seguimiento_futuro' => 
  array (
    'required' => false,
    'name' => 'contactos_seguimiento_futuro',
    'vname' => 'LBL_CONTACTOS_SEGUIMIENTO_FUTURO',
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
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'contactos_siguiente_llamada' => 
  array (
    'required' => false,
    'name' => 'contactos_siguiente_llamada',
    'vname' => 'LBL_CONTACTOS_SIGUIENTE_LLAMADA',
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
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'contactos_por_visitar' => 
  array (
    'required' => false,
    'name' => 'contactos_por_visitar',
    'vname' => 'LBL_CONTACTOS_POR_VISITAR',
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
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'contactos_enviaran_informacion' => 
  array (
    'required' => false,
    'name' => 'contactos_enviaran_informacion',
    'vname' => 'LBL_CONTACTOS_ENVIARAN_INFORMACION',
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
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'tiempo_prospeccion' => 
  array (
    'required' => false,
    'name' => 'tiempo_prospeccion',
    'vname' => 'LBL_TIEMPO_PROSPECCION',
    'type' => 'decimal',
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
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
  ),
  'tiempo_armado_expedientes' => 
  array (
    'required' => false,
    'name' => 'tiempo_armado_expedientes',
    'vname' => 'LBL_TIEMPO_ARMADO_EXPEDIENTES',
    'type' => 'decimal',
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
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'default' => '0.00',
  ),
  'tiempo_seguimiento_expedientes' => 
  array (
    'required' => false,
    'name' => 'tiempo_seguimiento_expedientes',
    'vname' => 'LBL_TIEMPO_SEGUIMIENTO_EXPEDIENTES',
    'type' => 'decimal',
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
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'default' => '0.00',
  ),
  'tiempo_operacion' => 
  array (
    'required' => false,
    'name' => 'tiempo_operacion',
    'vname' => 'LBL_TIEMPO_OPERACION',
    'type' => 'decimal',
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
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'default' => '0.00',
  ),
  'tiempo_liberacion' => 
  array (
    'required' => false,
    'name' => 'tiempo_liberacion',
    'vname' => 'LBL_TIEMPO_LIBERACION',
    'type' => 'decimal',
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
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'default' => '0.00',
  ),
  'tiempo_servicio_cliente' => 
  array (
    'required' => false,
    'name' => 'tiempo_servicio_cliente',
    'vname' => 'LBL_TIEMPO_SERVICIO_CLIENTE',
    'type' => 'decimal',
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
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'default' => '0.00',
  ),
  'tiempo_otras_actividades' => 
  array (
    'required' => false,
    'name' => 'tiempo_otras_actividades',
    'vname' => 'LBL_TIEMPO_OTRAS_ACTIVIDADES',
    'type' => 'decimal',
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
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'default' => '0.00',
  ),
  'tiempo_total' => 
  array (
    'required' => false,
    'name' => 'tiempo_total',
    'vname' => 'LBL_TIEMPO_TOTAL',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => 'true',
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '8',
    'formula' => 'add($tiempo_prospeccion,$tiempo_armado_expedientes,$tiempo_seguimiento_expedientes,$tiempo_operacion,$tiempo_liberacion,$tiempo_servicio_cliente,$tiempo_otras_actividades)',
    'enforced' => true,
  ),
  'porcentaje_prospeccion' => 
  array (
    'required' => false,
    'name' => 'porcentaje_prospeccion',
    'vname' => 'LBL_PORCENTAJE_PROSPECCION',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => '1',
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'formula' => 'divide(multiply($tiempo_prospeccion,100),$tiempo_total)',
    'enforced' => true,
  ),
  'porcentaje_armado_expedientes' => 
  array (
    'required' => false,
    'name' => 'porcentaje_armado_expedientes',
    'vname' => 'LBL_PORCENTAJE_ARMADO_EXPEDIENTES',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => '1',
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'formula' => 'divide(multiply($tiempo_armado_expedientes,100),$tiempo_total)',
    'enforced' => true,
  ),
  'porcentaje_seguimiento_expedie' => 
  array (
    'required' => false,
    'name' => 'porcentaje_seguimiento_expedie',
    'vname' => 'LBL_PORCENTAJE_SEGUIMIENTO_EXPEDIE',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => '1',
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'formula' => 'divide(multiply($tiempo_seguimiento_expedientes,100),$tiempo_total)',
    'enforced' => true,
  ),
  'porcentaje_operacion' => 
  array (
    'required' => false,
    'name' => 'porcentaje_operacion',
    'vname' => 'LBL_PORCENTAJE_OPERACION',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => '1',
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'formula' => 'divide(multiply($tiempo_operacion,100),$tiempo_total)',
    'enforced' => true,
  ),
  'porcentaje_liberacion' => 
  array (
    'required' => false,
    'name' => 'porcentaje_liberacion',
    'vname' => 'LBL_PORCENTAJE_LIBERACION',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => '1',
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'formula' => 'divide(multiply($tiempo_liberacion,100),$tiempo_total)',
    'enforced' => true,
  ),
  'porcentaje_servicio_cliente' => 
  array (
    'required' => false,
    'name' => 'porcentaje_servicio_cliente',
    'vname' => 'LBL_PORCENTAJE_SERVICIO_CLIENTE',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => '1',
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'formula' => 'divide(multiply($tiempo_servicio_cliente,100),$tiempo_total)',
    'enforced' => true,
  ),
  'porcentaje_otras_actividades' => 
  array (
    'required' => false,
    'name' => 'porcentaje_otras_actividades',
    'vname' => 'LBL_PORCENTAJE_OTRAS_ACTIVIDADES',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => '1',
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
    'formula' => 'divide(multiply($tiempo_otras_actividades,100),$tiempo_total)',
    'enforced' => true,
  ),
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'link' => true,
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => true,
    'full_text_search' => 
    array (
      'boost' => '3',
      'enabled' => true,
    ),
    'required' => false,
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'merge_filter' => 'disabled',
    'duplicate_on_record_copy' => 'always',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'calculated' => false,
    'formula' => 'concat("","")',
    'enforced' => true,
    'size' => '20',
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
VardefManager::createVardef('uni_Brujula','uni_Brujula', array('basic','team_security','assignable'));