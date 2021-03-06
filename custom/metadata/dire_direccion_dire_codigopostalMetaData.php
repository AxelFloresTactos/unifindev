<?php
// created: 2018-02-16 20:35:05
$dictionary['dire_direccion_dire_codigopostal'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dire_direccion_dire_codigopostal' => 
    array (
      'lhs_module' => 'dire_CodigoPostal',
      'lhs_table' => 'dire_codigopostal',
      'lhs_key' => 'id',
      'rhs_module' => 'dire_Direccion',
      'rhs_table' => 'dire_direccion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dire_direccion_dire_codigopostal_c',
      'join_key_lhs' => 'dire_direccion_dire_codigopostaldire_codigopostal_ida',
      'join_key_rhs' => 'dire_direccion_dire_codigopostaldire_direccion_idb',
    ),
  ),
  'table' => 'dire_direccion_dire_codigopostal_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    'dire_direccion_dire_codigopostaldire_codigopostal_ida' => 
    array (
      'name' => 'dire_direccion_dire_codigopostaldire_codigopostal_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'dire_direccion_dire_codigopostaldire_direccion_idb' => 
    array (
      'name' => 'dire_direccion_dire_codigopostaldire_direccion_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'dire_direccion_dire_codigopostalspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'dire_direccion_dire_codigopostal_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_direccion_dire_codigopostaldire_codigopostal_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'dire_direccion_dire_codigopostal_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dire_direccion_dire_codigopostaldire_direccion_idb',
      ),
    ),
  ),
);