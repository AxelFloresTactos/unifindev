<?php
// created: 2018-04-04 18:35:40
$dictionary["uni_citas_users_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'uni_citas_users_1' => 
    array (
      'lhs_module' => 'uni_Citas',
      'lhs_table' => 'uni_citas',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'uni_citas_users_1_c',
      'join_key_lhs' => 'uni_citas_users_1uni_citas_ida',
      'join_key_rhs' => 'uni_citas_users_1users_idb',
    ),
  ),
  'table' => 'uni_citas_users_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
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
      'default' => 0,
    ),
    'uni_citas_users_1uni_citas_ida' => 
    array (
      'name' => 'uni_citas_users_1uni_citas_ida',
      'type' => 'id',
    ),
    'uni_citas_users_1users_idb' => 
    array (
      'name' => 'uni_citas_users_1users_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_uni_citas_users_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_uni_citas_users_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'uni_citas_users_1uni_citas_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_uni_citas_users_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'uni_citas_users_1users_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'uni_citas_users_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'uni_citas_users_1users_idb',
      ),
    ),
  ),
);