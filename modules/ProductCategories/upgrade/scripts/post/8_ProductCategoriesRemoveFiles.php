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
 * Recreate hierarchy search stored procedures
 */
class SugarUpgradeProductCategoriesRemoveFiles extends UpgradeScript
{
    public $order = 8501;
    public $type = self::UPGRADE_CORE;

    public function run()
    {

        // we only need to remove these files if the from_version is less than 7.0.0
        if (version_compare($this->from_version, '7.0', '<')) {
            // files to delete
            $files = array(
                'modules/ProductCategories/controller.php',
                'modules/ProductCategories/Delete.php',
                'modules/ProductCategories/field_arrays.php',
                'modules/ProductCategories/index.php',
                'modules/ProductCategories/ListView.html',
                'modules/ProductCategories/ListView.php',
                'modules/ProductCategories/Menu.php',
                'modules/ProductCategories/Save.php',
                'modules/ProductCategories/views/view.detail.php',
                'modules/ProductCategories/views/view.edit.php',
                'modules/ProductCategories/metadata/editviewdefs.php',
            );

            $this->upgrader->fileToDelete($files, $this);
        }
    }
}
