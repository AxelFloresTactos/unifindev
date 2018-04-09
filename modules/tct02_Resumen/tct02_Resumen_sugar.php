<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN tct02_Resumen
 */


class tct02_Resumen_sugar extends Basic {
    public $new_schema = true;
    public $module_dir = 'tct02_Resumen';
    public $object_name = 'tct02_Resumen';
    public $table_name = 'tct02_resumen';
    public $importable = false;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $tag;
    public $tag_link;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $activities;
    public $following;
    public $following_link;
    public $my_favorite;
    public $favorite_link;
    public $locked_fields;
    public $locked_fields_link;
    public $id_persona;
    public $leasing_fecha_pago;
    public $leasing_anexos_activos;
    public $leasing_anexos_historicos;
    public $factoring_fecha_pago;
    public $factoring_anexos_activos;
    public $factoring_anexos_historicos;
    public $cauto_fecha_pago;
    public $cauto_anexos_activos;
    public $cauto_anexos_historicos;
        public $disable_row_level_security = true;
    
    public function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
    
}