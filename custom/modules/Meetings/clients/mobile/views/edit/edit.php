<?php
$viewdefs['Meetings'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
          'useTabs' => false,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 'name',
              1 => 
              array (
                'name' => 'date',
                'type' => 'fieldset',
                'related_fields' => 
                array (
                  0 => 'date_start',
                  1 => 'date_end',
                ),
                'label' => 'LBL_START_AND_END_DATE_DETAIL_VIEW',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_start',
                  ),
                  1 => 
                  array (
                    'name' => 'date_end',
                    'required' => true,
                    'readonly' => false,
                  ),
                ),
              ),
              2 => 'status',
              3 => 
              array (
                'name' => 'reminder',
                'type' => 'fieldset',
                'orientation' => 'horizontal',
                'related_fields' => 
                array (
                  0 => 'reminder_checked',
                  1 => 'reminder_time',
                ),
                'label' => 'LBL_REMINDER',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'reminder_checked',
                  ),
                  1 => 
                  array (
                    'name' => 'reminder_time',
                    'type' => 'enum',
                    'options' => 'reminder_time_options',
                  ),
                ),
              ),
              4 => 
              array (
                'name' => 'email_reminder',
                'type' => 'fieldset',
                'orientation' => 'horizontal',
                'related_fields' => 
                array (
                  0 => 'email_reminder_checked',
                  1 => 'email_reminder_time',
                ),
                'label' => 'LBL_EMAIL_REMINDER',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'email_reminder_checked',
                  ),
                  1 => 
                  array (
                    'name' => 'email_reminder_time',
                    'type' => 'enum',
                    'options' => 'reminder_time_options',
                  ),
                ),
              ),
              5 => 'description',
              6 => 'parent_name',
              7 => 'assigned_user_name',
              8 => 
              array (
                'name' => 'location',
                'comment' => 'Meeting location',
                'label' => 'LBL_LOCATION',
              ),
              9 => 
              array (
                'name' => 'direccion_street_c',
                'studio' => 'visible',
                'label' => 'LBL_DIRECCION_STREET',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
