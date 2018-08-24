<?php
return array (
  'tca' => 
  array (
    'be_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'adminOnly' => true,
        'rootLevel' => 1,
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-backend',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups',
        'useColumnsForDefaultValues' => 'lockToDomain, file_permissions',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title, db_mountpoints, file_mountpoints, file_permissions, tables_select, tables_modify, pagetypes_select, non_exclude_fields, groupMods, lockToDomain, description',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:db_mountpoints',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
                1 => 0,
              ),
            ),
            'default' => 0,
          ),
        ),
        'pagetypes_select' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'pagetypes',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 20,
          ),
        ),
        'tables_modify' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'tables_select' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'non_exclude_fields' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'exclude',
            'size' => 25,
            'autoSizeMax' => 50,
          ),
        ),
        'explicit_allowdeny' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'explicitValues',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'languages',
          ),
        ),
        'custom_options' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'custom',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'lockToDomain' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'groupMods' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListGroup',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'hide_in_lists' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.hide_in_lists',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'subgroup' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT(be_groups.uid = ###THIS_UID###) ORDER BY be_groups.title',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 20,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
                'maxLevels' => 99,
              ),
            ),
            'size' => 20,
            'minitems' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.base_rights,groupMods,tables_select,tables_modify,pagetypes_select,non_exclude_fields,explicit_allowdeny,allowed_languages,custom_options,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces,workspace_perms,db_mountpoints,file_mountpoints,file_permissions,category_perms,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.options,lockToDomain,TSconfig,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,hide_in_lists,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'be_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'rootLevel' => 1,
        'default_sortby' => 'admin, username',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'admin',
        'typeicon_column' => 'admin',
        'typeicon_classes' => 
        array (
          0 => 'status-user-backend',
          1 => 'status-user-admin',
          'default' => 'status-user-backend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,lockToDomain,options,db_mountpoints,file_mountpoints,file_permissions,userMods',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'username,email,realName',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'username,description,usergroup,db_mountpoints,file_mountpoints,admin,options,file_permissions,userMods,lockToDomain,realName,email,disable,starttime,endtime,lastlogin',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'nospace,trim,lower,unique,required',
            'autocomplete' => false,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 100,
            'eval' => 'trim,required,TYPO3\\CMS\\Saltedpasswords\\Evaluation\\BackendEvaluator,password',
            'autocomplete' => false,
            'renderType' => 'rsaInput',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'ORDER BY be_groups.title',
            'size' => 5,
            'maxitems' => 20,
            'enableMultiSelectFilterTextfield' => true,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_list_title',
                ),
              ),
            ),
          ),
        ),
        'avatar' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'avatar',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
            'maxitems' => 1,
          ),
        ),
        'lockToDomain' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
            'softref' => 'email[subst]',
          ),
        ),
        'realName' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'disable' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'disableIPlock' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.disableIPlock',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'admin' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
                1 => 0,
              ),
            ),
            'default' => 3,
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
                1 => 0,
              ),
            ),
            'default' => 1,
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'lang' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.lang',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'English',
                1 => '',
              ),
              1 => 
              array (
                0 => 'Afrikaans',
                1 => 'af',
              ),
              2 => 
              array (
                0 => 'Albanian',
                1 => 'sq',
              ),
              3 => 
              array (
                0 => 'Arabic',
                1 => 'ar',
              ),
              4 => 
              array (
                0 => 'Basque',
                1 => 'eu',
              ),
              5 => 
              array (
                0 => 'Bosnian',
                1 => 'bs',
              ),
              6 => 
              array (
                0 => 'Brazilian Portuguese',
                1 => 'pt_BR',
              ),
              7 => 
              array (
                0 => 'Bulgarian',
                1 => 'bg',
              ),
              8 => 
              array (
                0 => 'Catalan',
                1 => 'ca',
              ),
              9 => 
              array (
                0 => 'Chinese (Simpl.)',
                1 => 'ch',
              ),
              10 => 
              array (
                0 => 'Chinese (Trad.)',
                1 => 'zh',
              ),
              11 => 
              array (
                0 => 'Croatian',
                1 => 'hr',
              ),
              12 => 
              array (
                0 => 'Czech',
                1 => 'cs',
              ),
              13 => 
              array (
                0 => 'Danish',
                1 => 'da',
              ),
              14 => 
              array (
                0 => 'Dutch',
                1 => 'nl',
              ),
              15 => 
              array (
                0 => 'Esperanto',
                1 => 'eo',
              ),
              16 => 
              array (
                0 => 'Estonian',
                1 => 'et',
              ),
              17 => 
              array (
                0 => 'Faroese',
                1 => 'fo',
              ),
              18 => 
              array (
                0 => 'Finnish',
                1 => 'fi',
              ),
              19 => 
              array (
                0 => 'French',
                1 => 'fr',
              ),
              20 => 
              array (
                0 => 'French (Canada)',
                1 => 'fr_CA',
              ),
              21 => 
              array (
                0 => 'Galician',
                1 => 'gl',
              ),
              22 => 
              array (
                0 => 'Georgian',
                1 => 'ka',
              ),
              23 => 
              array (
                0 => 'German',
                1 => 'de',
              ),
              24 => 
              array (
                0 => 'Greek',
                1 => 'el',
              ),
              25 => 
              array (
                0 => 'Greenlandic',
                1 => 'kl',
              ),
              26 => 
              array (
                0 => 'Hebrew',
                1 => 'he',
              ),
              27 => 
              array (
                0 => 'Hindi',
                1 => 'hi',
              ),
              28 => 
              array (
                0 => 'Hungarian',
                1 => 'hu',
              ),
              29 => 
              array (
                0 => 'Icelandic',
                1 => 'is',
              ),
              30 => 
              array (
                0 => 'Italian',
                1 => 'it',
              ),
              31 => 
              array (
                0 => 'Japanese',
                1 => 'ja',
              ),
              32 => 
              array (
                0 => 'Khmer',
                1 => 'km',
              ),
              33 => 
              array (
                0 => 'Korean',
                1 => 'ko',
              ),
              34 => 
              array (
                0 => 'Latvian',
                1 => 'lv',
              ),
              35 => 
              array (
                0 => 'Lithuanian',
                1 => 'lt',
              ),
              36 => 
              array (
                0 => 'Malay',
                1 => 'ms',
              ),
              37 => 
              array (
                0 => 'Norwegian',
                1 => 'no',
              ),
              38 => 
              array (
                0 => 'Persian',
                1 => 'fa',
              ),
              39 => 
              array (
                0 => 'Polish',
                1 => 'pl',
              ),
              40 => 
              array (
                0 => 'Portuguese',
                1 => 'pt',
              ),
              41 => 
              array (
                0 => 'Romanian',
                1 => 'ro',
              ),
              42 => 
              array (
                0 => 'Russian',
                1 => 'ru',
              ),
              43 => 
              array (
                0 => 'Serbian',
                1 => 'sr',
              ),
              44 => 
              array (
                0 => 'Slovak',
                1 => 'sk',
              ),
              45 => 
              array (
                0 => 'Slovenian',
                1 => 'sl',
              ),
              46 => 
              array (
                0 => 'Spanish',
                1 => 'es',
              ),
              47 => 
              array (
                0 => 'Swedish',
                1 => 'sv',
              ),
              48 => 
              array (
                0 => 'Thai',
                1 => 'th',
              ),
              49 => 
              array (
                0 => 'Turkish',
                1 => 'tr',
              ),
              50 => 
              array (
                0 => 'Ukrainian',
                1 => 'uk',
              ),
              51 => 
              array (
                0 => 'Vietnamese',
                1 => 'vi',
              ),
            ),
          ),
        ),
        'userMods' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListUser',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'languages',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTablator' => true,
            'fixedFont' => true,
          ),
        ),
        'createdByAction' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'lastlogin' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
                'maxLevels' => 99,
              ),
            ),
            'size' => 20,
            'minitems' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,admin,username,password,avatar,usergroup,realName,email,lang,lastlogin,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.rights,userMods,allowed_languages,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.mounts_and_workspaces,workspace_perms,db_mountpoints,options,file_mountpoints,file_permissions,category_perms,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,lockToDomain,disableIPlock,TSconfig,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,admin,username,password,avatar,usergroup,realName,email,lang,lastlogin,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,disableIPlock,TSconfig,db_mountpoints,options,file_mountpoints,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'pages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:pages',
        'type' => 'doktype',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'doktype',
        'typeicon_classes' => 
        array (
          1 => 'apps-pagetree-page-default',
          '1-hideinmenu' => 'apps-pagetree-page-not-in-menu',
          '1-root' => 'apps-pagetree-page-domain',
          3 => 'apps-pagetree-page-shortcut-external',
          '3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
          '3-root' => 'apps-pagetree-page-shortcut-external-root',
          4 => 'apps-pagetree-page-shortcut',
          '4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
          '4-root' => 'apps-pagetree-page-shortcut-root',
          6 => 'apps-pagetree-page-backend-users',
          '6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
          '6-root' => 'apps-pagetree-page-backend-users-root',
          7 => 'apps-pagetree-page-mountpoint',
          '7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
          '7-root' => 'apps-pagetree-page-mountpoint-root',
          199 => 'apps-pagetree-spacer',
          '199-hideinmenu' => 'apps-pagetree-spacer',
          '199-root' => 'apps-pagetree-page-domain',
          254 => 'apps-pagetree-folder-default',
          '254-hideinmenu' => 'apps-pagetree-folder-default',
          '254-root' => 'apps-pagetree-page-domain',
          255 => 'apps-pagetree-page-recycler',
          '255-hideinmenu' => 'apps-pagetree-page-recycler',
          'contains-shop' => 'apps-pagetree-folder-contains-shop',
          'contains-approve' => 'apps-pagetree-folder-contains-approve',
          'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
          'contains-board' => 'apps-pagetree-folder-contains-board',
          'contains-news' => 'apps-pagetree-folder-contains-news',
          'page-contentFromPid' => 'apps-pagetree-page-content-from-page',
          'page-contentFromPid-root' => 'apps-pagetree-page-content-from-page-root',
          'page-contentFromPid-hideinmenu' => 'apps-pagetree-page-content-from-page-hideinmenu',
          'default' => 'apps-pagetree-page-default',
          'contains-ttproducts' => 'apps-pagetree-folder-contains-ttproducts',
        ),
        'searchFields' => 'title,alias,nav_title,subtitle,url,keywords,description,abstract,author,author_email',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'doktype,title,alias,hidden,starttime,endtime,fe_group,url,target,no_cache,shortcut,keywords,description,abstract,newUntil,lastUpdated,cache_timeout,cache_tags,backend_layout,backend_layout_next_level,categories',
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50,
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                1 => '1',
                2 => 'apps-pagetree-page-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                1 => '6',
                2 => 'apps-pagetree-page-backend-users',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                1 => '--div--',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                1 => '4',
                2 => 'apps-pagetree-page-shortcut',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                1 => '7',
                2 => 'apps-pagetree-page-mountpoint',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                1 => '3',
                2 => 'apps-pagetree-page-shortcut-external',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                1 => '--div--',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                1 => '254',
                2 => 'apps-pagetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                1 => '255',
                2 => 'apps-filetree-folder-recycler',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                1 => '199',
                2 => 'apps-pagetree-spacer',
              ),
            ),
            'default' => '1',
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'TSconfig:',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'php_tree_stop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:php_tree_stop',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
          ),
        ),
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 7,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
          ),
        ),
        'extendToSubpages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_hide' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'target' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 80,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'eval' => 'trim',
          ),
        ),
        'alias' => 
        array (
          'exclude' => true,
          'displayCond' => 'VERSION:IS:false',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.alias',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 32,
            'eval' => 'nospace,alphanum_x,lower,unique',
            'softref' => 'notify',
          ),
        ),
        'url' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
            'eval' => 'trim,required',
            'softref' => 'url',
          ),
        ),
        'urltype' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.automatic',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'http://',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'https://',
                1 => '4',
              ),
              3 => 
              array (
                0 => 'ftp://',
                1 => '2',
              ),
              4 => 
              array (
                0 => 'mailto:',
                1 => '3',
              ),
            ),
            'default' => 1,
          ),
        ),
        'lastUpdated' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'newUntil' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 0,
          ),
        ),
        'cache_timeout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.1',
                1 => 60,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.2',
                1 => 300,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.3',
                1 => 900,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.4',
                1 => 1800,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.5',
                1 => 3600,
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.6',
                1 => 14400,
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.7',
                1 => 86400,
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.8',
                1 => 172800,
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.9',
                1 => 604800,
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.10',
                1 => 2678400,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cache_tags' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_tags',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => '',
          ),
        ),
        'no_cache' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_cache',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_cache_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'no_search' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, alias, url',
              ),
            ),
            'default' => 0,
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                1 => 3,
              ),
            ),
            'default' => 0,
          ),
        ),
        'content_from_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'mount_pid' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'softref' => 'email[subst]',
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'is_siteroot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'mount_pid_ol' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.1',
                1 => 1,
              ),
            ),
          ),
        ),
        'module' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module.I.4',
                1 => 'fe_users',
                2 => 'status-user-frontend',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang.xml:pageModule.plugin',
                1 => 'ttproducts',
                2 => 'apps-pagetree-folder-contains-ttproducts',
              ),
            ),
            'default' => '',
          ),
        ),
        'fe_login_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enable',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableAll',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableGroups',
                1 => 3,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enableAgain',
                1 => 2,
              ),
            ),
          ),
        ),
        'l18n_cfg' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.1',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.2',
                1 => '',
              ),
            ),
          ),
        ),
        'backend_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'backend_layout_next_level' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
              0 => 
              array (
                0 => 'EXT:tt_products :: Restrict pages to tt_products records (ttproducts)',
                1 => 'EXT:ttproducts/Configuration/TSconfig/Page/folder_tables.txt',
              ),
            ),
            'enableMultiSelectFilterTextfield' => true,
            'softref' => 'ext_fileref',
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'pages',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.replace;replace,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.caching;caching,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module;module,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.external;external,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.shortcut;shortcut,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.shortcutpage;shortcutpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        7 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.mountpoint;mountpoint,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.mountpage;mountpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        199 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        254 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;backend_layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module;module,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;adminsonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        255 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;adminsonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, extendToSubpages',
        ),
        2 => 
        array (
          'showitem' => 'layout, lastUpdated, newUntil, no_search',
        ),
        3 => 
        array (
          'showitem' => 'alias, target, no_cache, cache_timeout, cache_tags',
        ),
        5 => 
        array (
          'showitem' => 'author, author_email',
        ),
        6 => 
        array (
          'showitem' => 'php_tree_stop, editlock',
        ),
        7 => 
        array (
          'showitem' => 'is_siteroot',
        ),
        8 => 
        array (
          'showitem' => 'backend_layout_next_level',
        ),
        'standard' => 
        array (
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'mountpoint' => 
        array (
          'showitem' => 'mount_pid_ol;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol_formlabel',
        ),
        'mountpage' => 
        array (
          'showitem' => 'mount_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'urltype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.urltype_formlabel, url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel',
        ),
        'title' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel',
        ),
        'visibility' => 
        array (
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel, nav_hide;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_formlabel',
        ),
        'hiddenonly' => 
        array (
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel, extendToSubpages;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages_formlabel, --linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_group_formlabel, --linebreak--, fe_login_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode_formlabel, --linebreak--,editlock',
        ),
        'abstract' => 
        array (
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'editorial' => 
        array (
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel, lastUpdated;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated_formlabel',
        ),
        'layout' => 
        array (
          'showitem' => 'layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout_formlabel, newUntil;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil_formlabel, --linebreak--, backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'backend_layout' => 
        array (
          'showitem' => 'backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'module' => 
        array (
          'showitem' => 'module;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module_formlabel',
        ),
        'replace' => 
        array (
          'showitem' => 'content_from_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid_formlabel',
        ),
        'links' => 
        array (
          'showitem' => 'alias;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.alias_formlabel, --linebreak--, target;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target_formlabel',
        ),
        'caching' => 
        array (
          'showitem' => 'cache_timeout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout_formlabel, cache_tags, no_cache;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_cache_formlabel',
        ),
        'language' => 
        array (
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'miscellaneous' => 
        array (
          'showitem' => 'is_siteroot;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot_formlabel, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel,LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.editlock_formlabel, php_tree_stop;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.php_tree_stop_formlabel',
        ),
        'adminsonly' => 
        array (
          'showitem' => 'editlock;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.editlock_formlabel',
        ),
        'media' => 
        array (
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
        'config' => 
        array (
          'showitem' => 'tsconfig_includes;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes, --linebreak--, TSconfig;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.TSconfig_formlabel',
        ),
      ),
    ),
    'sys_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'rootLevel' => -1,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'title,description',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_category',
        ),
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,description',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,parent,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.items,items,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND sys_category.uid=###REC_FIELD_l10n_parent### AND sys_category.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.title',
          'config' => 
          array (
            'type' => 'input',
            'width' => 200,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.description',
          'config' => 
          array (
            'type' => 'text',
            'default' => '',
          ),
        ),
        'parent' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.parent',
          'config' => 
          array (
            'minitems' => 0,
            'maxitems' => 1,
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1,0) ORDER BY sys_category.sorting ASC',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
            'default' => 0,
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.items',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => '*',
            'MM' => 'sys_category_record_mm',
            'MM_oppositeUsage' => 
            array (
              'pages' => 
              array (
                0 => 'categories',
              ),
              'sys_file_metadata' => 
              array (
                0 => 'categories',
              ),
              'tt_content' => 
              array (
                0 => 'categories',
              ),
            ),
            'size' => 10,
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'sys_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'descriptionColumn' => 'description',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'rootLevel' => -1,
        'searchFields' => 'title,description',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-clipboard-list',
          'static' => 'apps-clipboard-list',
          'filter' => 'actions-system-tree-search-open',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title, description, table_name, items',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'table_name' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.table_name',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'tables',
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.items',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'prepend_tname' => true,
            'allowed' => '*',
            'MM' => 'sys_collection_entries',
            'MM_hasUidField' => true,
            'multiple' => true,
            'size' => 5,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 60,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 60,
            'rows' => 5,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.type.static',
                1 => 'static',
              ),
            ),
            'default' => 'static',
          ),
        ),
      ),
      'types' => 
      array (
        'static' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,table_name,items,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,fe_group,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'type' => 'type',
        'hideTable' => true,
        'rootLevel' => true,
        'default_sortby' => 'name ASC',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          1 => 'mimetypes-text-text',
          2 => 'mimetypes-media-image',
          3 => 'mimetypes-media-audio',
          4 => 'mimetypes-media-video',
          5 => 'mimetypes-application',
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'name, type, mime_type, sha1',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'storage, name, type, mime_type, size, sha1, missing',
      ),
      'columns' => 
      array (
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'user',
            'renderType' => 'fileInfo',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.storage',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'foreign_table_where' => 'ORDER BY sys_file_storage.name',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.identifier',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.name',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.unknown',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.text',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.image',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.audio',
                1 => 3,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.video',
                1 => 4,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.software',
                1 => 5,
              ),
            ),
          ),
        ),
        'mime_type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.mime_type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sha1' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.sha1',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'size' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.size',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 8,
            'max' => 30,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'missing' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.missing',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'metadata' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.metadata',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'inline',
            'foreign_table' => 'sys_file_metadata',
            'foreign_field' => 'file',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'fileinfo, storage, missing',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_file_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-filetree-folder-media',
          'static' => 'apps-clipboard-images',
          'folder' => 'apps-filetree-folder-media',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'files,title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,files,title',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.0',
                1 => 'static',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.1',
                1 => 'folder',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.2',
                1 => 'category',
              ),
            ),
          ),
        ),
        'files' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.files',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'files',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.storage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'foreign_table_where' => 'ORDER BY sys_file_storage.name',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'folder' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.folder',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
            'default' => '',
          ),
        ),
        'recursive' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.recursive',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.category',
          'config' => 
          array (
            'minitems' => 0,
            'maxitems' => 1,
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1,0) ORDER BY sys_category.sorting ASC',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'static' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'folder' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,storage,folder,recursive,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'category' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,category,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file_metadata' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'file:type',
        'hideTable' => true,
        'rootLevel' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'file,title,description,alternative',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'file, title, description, alternative,categories',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_metadata',
            'foreign_table_where' => 'AND sys_file_metadata.uid=###REC_FIELD_l10n_parent### AND sys_file_metadata.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'user',
            'renderType' => 'fileInfo',
          ),
        ),
        'file' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:=:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file',
            'minitems' => 1,
            'maxitems' => 1,
            'size' => 1,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.title',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'placeholder' => '__row|file|name',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'alternative' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'width' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => true,
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.width',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'height' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => true,
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.height',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'sys_file_metadata',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        'visible' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.visible',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
        'status' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.1',
                1 => 1,
                2 => 'filemetadata-status-1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.2',
                1 => 2,
                2 => 'filemetadata-status-2',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.3',
                1 => 3,
                2 => 'filemetadata-status-3',
              ),
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'placeholder' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:placeholder.keywords',
          ),
        ),
        'caption' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.caption',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'creator_tool' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.creator_tool',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
          ),
        ),
        'download_name' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.download_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'creator' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.creator',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'publisher' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.publisher',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
          ),
        ),
        'source' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
          ),
        ),
        'copyright' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.copyright',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'location_country' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'location_region' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_region',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'location_city' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'latitude' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.latitude',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
            'default' => '0.00000000000000',
          ),
        ),
        'longitude' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.longitude',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
            'default' => '0.00000000000000',
          ),
        ),
        'ranking' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.ranking',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'minitems' => 1,
            'maxitems' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 0,
                1 => 0,
              ),
              1 => 
              array (
                0 => 1,
                1 => 1,
              ),
              2 => 
              array (
                0 => 2,
                1 => 2,
              ),
              3 => 
              array (
                0 => 3,
                1 => 3,
              ),
              4 => 
              array (
                0 => 4,
                1 => 4,
              ),
              5 => 
              array (
                0 => 5,
                1 => 5,
              ),
            ),
          ),
        ),
        'content_creation_date' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.content_creation_date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 1535113250,
          ),
        ),
        'content_modification_date' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.content_modification_date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 1535113250,
          ),
        ),
        'note' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
          ),
        ),
        'unit' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.px',
                1 => 'px',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.cm',
                1 => 'cm',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.in',
                1 => 'in',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.mm',
                1 => 'mm',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.m',
                1 => 'm',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.p',
                1 => 'p',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.pt',
                1 => 'pt',
              ),
            ),
            'default' => '',
            'readOnly' => true,
          ),
        ),
        'duration' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.duration',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'color_space' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.RGB',
                1 => 'RGB',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.sRGB',
                1 => 'sRGB',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.CMYK',
                1 => 'CMYK',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.CMY',
                1 => 'CMY',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.YUV',
                1 => 'YUV',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.grey',
                1 => 'grey',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.indx',
                1 => 'indx',
              ),
            ),
            'default' => '',
            'readOnly' => true,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.pages',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'readOnly' => true,
          ),
        ),
        'language' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fe_groups' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;25,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,language,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.geo_location;40,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;25,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.geo_location;40,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        2 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;20,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,language,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.geo_location;40,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.gps;30,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.content_date;60,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.camera,color_space,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.metrics;50,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;25,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,language,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.content_date;60,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.audio,duration,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;25,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,language,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.content_date;60,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.video,duration,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        5 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;25,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,language,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.geo_location;40,pages,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.metrics;50,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.content_date;60,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
        10 => 
        array (
          'showitem' => 'visible, status',
        ),
        20 => 
        array (
          'showitem' => 'alternative, --linebreak--, caption, --linebreak--, download_name',
        ),
        25 => 
        array (
          'showitem' => 'caption, --linebreak--, download_name',
        ),
        30 => 
        array (
          'showitem' => 'latitude, longitude',
        ),
        40 => 
        array (
          'showitem' => 'location_country, location_region, location_city',
        ),
        50 => 
        array (
          'showitem' => 'width, height, unit',
        ),
        60 => 
        array (
          'showitem' => 'content_creation_date, content_modification_date',
        ),
      ),
    ),
    'sys_file_reference' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference',
        'label' => 'uid_local',
        'formattedLabel_userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService->getInlineLabel',
        'formattedLabel_userFunc_options' => 
        array (
          'sys_file' => 
          array (
            0 => 'title',
            1 => 'name',
          ),
        ),
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'uid_local:type',
        'hideTable' => true,
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'rootLevel' => -1,
        'shadowColumnsForMovePlaceholders' => 'tablenames,fieldname,uid_local,table_local,uid_foreign',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'uid_local,uid_foreign,tablenames,fieldname,title,description',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,uid_local,uid_foreign,tablenames,fieldname,sorting_foreign,table_local,title,description',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_table_where' => 'AND sys_file_reference.uid=###REC_FIELD_l10n_parent### AND sys_file_reference.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'uid_local' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_local',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'size' => 1,
            'eval' => 'int',
            'maxitems' => 1,
            'minitems' => 0,
            'allowed' => 'sys_file',
            'hideSuggest' => true,
          ),
        ),
        'uid_foreign' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'eval' => 'int',
          ),
        ),
        'tablenames' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.tablenames',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.fieldname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.sorting_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'table_local' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.table_local',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'default' => 'sys_file',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 20,
            'max' => 1024,
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'description' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'alternative' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.alternative',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|alternative',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'crop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
          'config' => 
          array (
            'type' => 'imageManipulation',
          ),
        ),
        'autoplay' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.autoplay',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        2 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        3 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        4 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        5 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
      ),
      'palettes' => 
      array (
        'basicoverlayPalette' => 
        array (
          'showitem' => 'title,description',
        ),
        'imageoverlayPalette' => 
        array (
          'showitem' => '
				title,alternative,--linebreak--,
				link,description,--linebreak--,crop
				',
        ),
        'videoOverlayPalette' => 
        array (
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'audioOverlayPalette' => 
        array (
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'filePalette' => 
        array (
          'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_storage' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'rootLevel' => true,
        'versioningWS_alwaysAllowLiveEdit' => true,
        'enablecolumns' => 
        array (
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_file_storage',
        ),
        'searchFields' => 'name,description',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'name,description,driver,processingfolder,configuration,auto_extract_metadata',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'is_browsable' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_browsable',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'is_default' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_default',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'eval' => 'maximumRecordsChecked',
            'validation' => 
            array (
              'maximumRecordsChecked' => 1,
            ),
          ),
        ),
        'is_public' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_public',
          'config' => 
          array (
            'default' => true,
            'type' => 'user',
            'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserStorageCapabilityService->renderIsPublic',
          ),
        ),
        'is_writable' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_writable',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'is_online' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_online',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'auto_extract_metadata' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.auto_extract_metadata',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'processingfolder' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder',
          'config' => 
          array (
            'type' => 'input',
            'placeholder' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder.placeholder',
            'size' => 20,
          ),
        ),
        'driver' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.driver',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              'Local' => 
              array (
                0 => 'Local filesystem',
                1 => 'Local',
              ),
            ),
            'default' => 'Local',
            'onChange' => 'reload',
          ),
        ),
        'configuration' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.configuration',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'driver',
            'ds' => 
            array (
              'Local' => 'FILE:EXT:core/Configuration/Resource/Driver/LocalDriverFlexForm.xml',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,name,driver,configuration,is_default,auto_extract_metadata,processingfolder,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:accesscapabilities,--palette--;Capabilities;capabilities,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,is_online,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'capabilities' => 
        array (
          'showitem' => 'is_browsable, is_public, is_writable',
        ),
      ),
    ),
    'sys_filemounts' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_filemounts',
        ),
        'useColumnsForDefaultValues' => 'path,base',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title,path',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,path,base,description',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 30,
            'eval' => 'required,trim',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => '2000',
          ),
        ),
        'base' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.baseStorage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file_storage',
            'allowNonIdValues' => true,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => 'required',
            'range' => 
            array (
              'lower' => 1,
            ),
          ),
        ),
        'path' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.folder',
          'displayCond' => 'FIELD:base:>:0',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
          ),
        ),
        'read_only' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.read_only',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,base,path,read_only,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_history' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_history',
        'label' => 'tablename',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => true,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'sys_log_uid' => 
        array (
          'label' => 'sys_log_uid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'history_data' => 
        array (
          'label' => 'history_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'fieldlist' => 
        array (
          'label' => 'fieldlist',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'history_files' => 
        array (
          'label' => 'history_files',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'snapshot' => 
        array (
          'label' => 'snapshot',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_log_uid, history_data, fieldlist, recuid, tablename, tstamp, history_files, snapshot',
        ),
      ),
    ),
    'sys_language' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language',
        'adminOnly' => true,
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_column' => 'flag',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_language',
          'mask' => 'flags-###TYPE###',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'trim,required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'language_isocode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language.language_isocode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Service\\IsoCodeService->renderIsoCodeSelectDropdown',
          ),
        ),
        'flag' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language.flag',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
                2 => '',
              ),
              1 => 
              array (
                0 => 'multiple',
                1 => 'multiple',
                2 => 'flags-multiple',
              ),
              2 => 
              array (
                0 => 'ad',
                1 => 'ad',
                2 => 'flags-ad',
              ),
              3 => 
              array (
                0 => 'ae',
                1 => 'ae',
                2 => 'flags-ae',
              ),
              4 => 
              array (
                0 => 'af',
                1 => 'af',
                2 => 'flags-af',
              ),
              5 => 
              array (
                0 => 'ag',
                1 => 'ag',
                2 => 'flags-ag',
              ),
              6 => 
              array (
                0 => 'ai',
                1 => 'ai',
                2 => 'flags-ai',
              ),
              7 => 
              array (
                0 => 'al',
                1 => 'al',
                2 => 'flags-al',
              ),
              8 => 
              array (
                0 => 'am',
                1 => 'am',
                2 => 'flags-am',
              ),
              9 => 
              array (
                0 => 'an',
                1 => 'an',
                2 => 'flags-an',
              ),
              10 => 
              array (
                0 => 'ao',
                1 => 'ao',
                2 => 'flags-ao',
              ),
              11 => 
              array (
                0 => 'ar',
                1 => 'ar',
                2 => 'flags-ar',
              ),
              12 => 
              array (
                0 => 'as',
                1 => 'as',
                2 => 'flags-as',
              ),
              13 => 
              array (
                0 => 'at',
                1 => 'at',
                2 => 'flags-at',
              ),
              14 => 
              array (
                0 => 'au',
                1 => 'au',
                2 => 'flags-au',
              ),
              15 => 
              array (
                0 => 'aw',
                1 => 'aw',
                2 => 'flags-aw',
              ),
              16 => 
              array (
                0 => 'ax',
                1 => 'ax',
                2 => 'flags-ax',
              ),
              17 => 
              array (
                0 => 'az',
                1 => 'az',
                2 => 'flags-az',
              ),
              18 => 
              array (
                0 => 'ba',
                1 => 'ba',
                2 => 'flags-ba',
              ),
              19 => 
              array (
                0 => 'bb',
                1 => 'bb',
                2 => 'flags-bb',
              ),
              20 => 
              array (
                0 => 'bd',
                1 => 'bd',
                2 => 'flags-bd',
              ),
              21 => 
              array (
                0 => 'be',
                1 => 'be',
                2 => 'flags-be',
              ),
              22 => 
              array (
                0 => 'bf',
                1 => 'bf',
                2 => 'flags-bf',
              ),
              23 => 
              array (
                0 => 'bg',
                1 => 'bg',
                2 => 'flags-bg',
              ),
              24 => 
              array (
                0 => 'bh',
                1 => 'bh',
                2 => 'flags-bh',
              ),
              25 => 
              array (
                0 => 'bi',
                1 => 'bi',
                2 => 'flags-bi',
              ),
              26 => 
              array (
                0 => 'bj',
                1 => 'bj',
                2 => 'flags-bj',
              ),
              27 => 
              array (
                0 => 'bm',
                1 => 'bm',
                2 => 'flags-bm',
              ),
              28 => 
              array (
                0 => 'bn',
                1 => 'bn',
                2 => 'flags-bn',
              ),
              29 => 
              array (
                0 => 'bo',
                1 => 'bo',
                2 => 'flags-bo',
              ),
              30 => 
              array (
                0 => 'br',
                1 => 'br',
                2 => 'flags-br',
              ),
              31 => 
              array (
                0 => 'bs',
                1 => 'bs',
                2 => 'flags-bs',
              ),
              32 => 
              array (
                0 => 'bt',
                1 => 'bt',
                2 => 'flags-bt',
              ),
              33 => 
              array (
                0 => 'bv',
                1 => 'bv',
                2 => 'flags-bv',
              ),
              34 => 
              array (
                0 => 'bw',
                1 => 'bw',
                2 => 'flags-bw',
              ),
              35 => 
              array (
                0 => 'by',
                1 => 'by',
                2 => 'flags-by',
              ),
              36 => 
              array (
                0 => 'bz',
                1 => 'bz',
                2 => 'flags-bz',
              ),
              37 => 
              array (
                0 => 'ca',
                1 => 'ca',
                2 => 'flags-ca',
              ),
              38 => 
              array (
                0 => 'catalonia',
                1 => 'catalonia',
                2 => 'flags-catalonia',
              ),
              39 => 
              array (
                0 => 'cc',
                1 => 'cc',
                2 => 'flags-cc',
              ),
              40 => 
              array (
                0 => 'cd',
                1 => 'cd',
                2 => 'flags-cd',
              ),
              41 => 
              array (
                0 => 'cf',
                1 => 'cf',
                2 => 'flags-cf',
              ),
              42 => 
              array (
                0 => 'cg',
                1 => 'cg',
                2 => 'flags-cg',
              ),
              43 => 
              array (
                0 => 'ch',
                1 => 'ch',
                2 => 'flags-ch',
              ),
              44 => 
              array (
                0 => 'ci',
                1 => 'ci',
                2 => 'flags-ci',
              ),
              45 => 
              array (
                0 => 'ck',
                1 => 'ck',
                2 => 'flags-ck',
              ),
              46 => 
              array (
                0 => 'cl',
                1 => 'cl',
                2 => 'flags-cl',
              ),
              47 => 
              array (
                0 => 'cm',
                1 => 'cm',
                2 => 'flags-cm',
              ),
              48 => 
              array (
                0 => 'cn',
                1 => 'cn',
                2 => 'flags-cn',
              ),
              49 => 
              array (
                0 => 'co',
                1 => 'co',
                2 => 'flags-co',
              ),
              50 => 
              array (
                0 => 'cr',
                1 => 'cr',
                2 => 'flags-cr',
              ),
              51 => 
              array (
                0 => 'cs',
                1 => 'cs',
                2 => 'flags-cs',
              ),
              52 => 
              array (
                0 => 'cu',
                1 => 'cu',
                2 => 'flags-cu',
              ),
              53 => 
              array (
                0 => 'cv',
                1 => 'cv',
                2 => 'flags-cv',
              ),
              54 => 
              array (
                0 => 'cx',
                1 => 'cx',
                2 => 'flags-cx',
              ),
              55 => 
              array (
                0 => 'cy',
                1 => 'cy',
                2 => 'flags-cy',
              ),
              56 => 
              array (
                0 => 'cz',
                1 => 'cz',
                2 => 'flags-cz',
              ),
              57 => 
              array (
                0 => 'de',
                1 => 'de',
                2 => 'flags-de',
              ),
              58 => 
              array (
                0 => 'dj',
                1 => 'dj',
                2 => 'flags-dj',
              ),
              59 => 
              array (
                0 => 'dk',
                1 => 'dk',
                2 => 'flags-dk',
              ),
              60 => 
              array (
                0 => 'dm',
                1 => 'dm',
                2 => 'flags-dm',
              ),
              61 => 
              array (
                0 => 'do',
                1 => 'do',
                2 => 'flags-do',
              ),
              62 => 
              array (
                0 => 'dz',
                1 => 'dz',
                2 => 'flags-dz',
              ),
              63 => 
              array (
                0 => 'ec',
                1 => 'ec',
                2 => 'flags-ec',
              ),
              64 => 
              array (
                0 => 'ee',
                1 => 'ee',
                2 => 'flags-ee',
              ),
              65 => 
              array (
                0 => 'eg',
                1 => 'eg',
                2 => 'flags-eg',
              ),
              66 => 
              array (
                0 => 'eh',
                1 => 'eh',
                2 => 'flags-eh',
              ),
              67 => 
              array (
                0 => 'en-us-gb',
                1 => 'en-us-gb',
                2 => 'flags-en-us-gb',
              ),
              68 => 
              array (
                0 => 'england',
                1 => 'england',
                2 => 'flags-gb-eng',
              ),
              69 => 
              array (
                0 => 'er',
                1 => 'er',
                2 => 'flags-er',
              ),
              70 => 
              array (
                0 => 'es',
                1 => 'es',
                2 => 'flags-es',
              ),
              71 => 
              array (
                0 => 'et',
                1 => 'et',
                2 => 'flags-et',
              ),
              72 => 
              array (
                0 => 'eu',
                1 => 'eu',
                2 => 'flags-eu',
              ),
              73 => 
              array (
                0 => 'fm',
                1 => 'fm',
                2 => 'flags-fm',
              ),
              74 => 
              array (
                0 => 'fi',
                1 => 'fi',
                2 => 'flags-fi',
              ),
              75 => 
              array (
                0 => 'fj',
                1 => 'fj',
                2 => 'flags-fj',
              ),
              76 => 
              array (
                0 => 'fk',
                1 => 'fk',
                2 => 'flags-fk',
              ),
              77 => 
              array (
                0 => 'fm',
                1 => 'fm',
                2 => 'flags-fm',
              ),
              78 => 
              array (
                0 => 'fo',
                1 => 'fo',
                2 => 'flags-fo',
              ),
              79 => 
              array (
                0 => 'fr',
                1 => 'fr',
                2 => 'flags-fr',
              ),
              80 => 
              array (
                0 => 'ga',
                1 => 'ga',
                2 => 'flags-ga',
              ),
              81 => 
              array (
                0 => 'gb',
                1 => 'gb',
                2 => 'flags-gb',
              ),
              82 => 
              array (
                0 => 'gd',
                1 => 'gd',
                2 => 'flags-gd',
              ),
              83 => 
              array (
                0 => 'ge',
                1 => 'ge',
                2 => 'flags-ge',
              ),
              84 => 
              array (
                0 => 'gf',
                1 => 'gf',
                2 => 'flags-gf',
              ),
              85 => 
              array (
                0 => 'gh',
                1 => 'gh',
                2 => 'flags-gh',
              ),
              86 => 
              array (
                0 => 'gi',
                1 => 'gi',
                2 => 'flags-gi',
              ),
              87 => 
              array (
                0 => 'gl',
                1 => 'gl',
                2 => 'flags-gl',
              ),
              88 => 
              array (
                0 => 'gm',
                1 => 'gm',
                2 => 'flags-gm',
              ),
              89 => 
              array (
                0 => 'gn',
                1 => 'gn',
                2 => 'flags-gn',
              ),
              90 => 
              array (
                0 => 'gp',
                1 => 'gp',
                2 => 'flags-gp',
              ),
              91 => 
              array (
                0 => 'gq',
                1 => 'gq',
                2 => 'flags-gq',
              ),
              92 => 
              array (
                0 => 'gr',
                1 => 'gr',
                2 => 'flags-gr',
              ),
              93 => 
              array (
                0 => 'gs',
                1 => 'gs',
                2 => 'flags-gs',
              ),
              94 => 
              array (
                0 => 'gt',
                1 => 'gt',
                2 => 'flags-gt',
              ),
              95 => 
              array (
                0 => 'gu',
                1 => 'gu',
                2 => 'flags-gu',
              ),
              96 => 
              array (
                0 => 'gw',
                1 => 'gw',
                2 => 'flags-gw',
              ),
              97 => 
              array (
                0 => 'gy',
                1 => 'gy',
                2 => 'flags-gy',
              ),
              98 => 
              array (
                0 => 'hk',
                1 => 'hk',
                2 => 'flags-hk',
              ),
              99 => 
              array (
                0 => 'hm',
                1 => 'hm',
                2 => 'flags-hm',
              ),
              100 => 
              array (
                0 => 'hn',
                1 => 'hn',
                2 => 'flags-hn',
              ),
              101 => 
              array (
                0 => 'hr',
                1 => 'hr',
                2 => 'flags-hr',
              ),
              102 => 
              array (
                0 => 'ht',
                1 => 'ht',
                2 => 'flags-ht',
              ),
              103 => 
              array (
                0 => 'hu',
                1 => 'hu',
                2 => 'flags-hu',
              ),
              104 => 
              array (
                0 => 'id',
                1 => 'id',
                2 => 'flags-id',
              ),
              105 => 
              array (
                0 => 'ie',
                1 => 'ie',
                2 => 'flags-ie',
              ),
              106 => 
              array (
                0 => 'il',
                1 => 'il',
                2 => 'flags-il',
              ),
              107 => 
              array (
                0 => 'in',
                1 => 'in',
                2 => 'flags-in',
              ),
              108 => 
              array (
                0 => 'io',
                1 => 'io',
                2 => 'flags-io',
              ),
              109 => 
              array (
                0 => 'iq',
                1 => 'iq',
                2 => 'flags-iq',
              ),
              110 => 
              array (
                0 => 'ir',
                1 => 'ir',
                2 => 'flags-ir',
              ),
              111 => 
              array (
                0 => 'is',
                1 => 'is',
                2 => 'flags-is',
              ),
              112 => 
              array (
                0 => 'it',
                1 => 'it',
                2 => 'flags-it',
              ),
              113 => 
              array (
                0 => 'jm',
                1 => 'jm',
                2 => 'flags-jm',
              ),
              114 => 
              array (
                0 => 'jo',
                1 => 'jo',
                2 => 'flags-jo',
              ),
              115 => 
              array (
                0 => 'jp',
                1 => 'jp',
                2 => 'flags-jp',
              ),
              116 => 
              array (
                0 => 'ke',
                1 => 'ke',
                2 => 'flags-ke',
              ),
              117 => 
              array (
                0 => 'kg',
                1 => 'kg',
                2 => 'flags-kg',
              ),
              118 => 
              array (
                0 => 'kh',
                1 => 'kh',
                2 => 'flags-kh',
              ),
              119 => 
              array (
                0 => 'ki',
                1 => 'ki',
                2 => 'flags-ki',
              ),
              120 => 
              array (
                0 => 'km',
                1 => 'km',
                2 => 'flags-km',
              ),
              121 => 
              array (
                0 => 'kn',
                1 => 'kn',
                2 => 'flags-kn',
              ),
              122 => 
              array (
                0 => 'kp',
                1 => 'kp',
                2 => 'flags-kp',
              ),
              123 => 
              array (
                0 => 'kr',
                1 => 'kr',
                2 => 'flags-kr',
              ),
              124 => 
              array (
                0 => 'kw',
                1 => 'kw',
                2 => 'flags-kw',
              ),
              125 => 
              array (
                0 => 'ky',
                1 => 'ky',
                2 => 'flags-ky',
              ),
              126 => 
              array (
                0 => 'kz',
                1 => 'kz',
                2 => 'flags-kz',
              ),
              127 => 
              array (
                0 => 'la',
                1 => 'la',
                2 => 'flags-la',
              ),
              128 => 
              array (
                0 => 'lb',
                1 => 'lb',
                2 => 'flags-lb',
              ),
              129 => 
              array (
                0 => 'lc',
                1 => 'lc',
                2 => 'flags-lc',
              ),
              130 => 
              array (
                0 => 'li',
                1 => 'li',
                2 => 'flags-li',
              ),
              131 => 
              array (
                0 => 'lk',
                1 => 'lk',
                2 => 'flags-lk',
              ),
              132 => 
              array (
                0 => 'lr',
                1 => 'lr',
                2 => 'flags-lr',
              ),
              133 => 
              array (
                0 => 'ls',
                1 => 'ls',
                2 => 'flags-ls',
              ),
              134 => 
              array (
                0 => 'lt',
                1 => 'lt',
                2 => 'flags-lt',
              ),
              135 => 
              array (
                0 => 'lu',
                1 => 'lu',
                2 => 'flags-lu',
              ),
              136 => 
              array (
                0 => 'lv',
                1 => 'lv',
                2 => 'flags-lv',
              ),
              137 => 
              array (
                0 => 'ly',
                1 => 'ly',
                2 => 'flags-ly',
              ),
              138 => 
              array (
                0 => 'ma',
                1 => 'ma',
                2 => 'flags-ma',
              ),
              139 => 
              array (
                0 => 'mc',
                1 => 'mc',
                2 => 'flags-mc',
              ),
              140 => 
              array (
                0 => 'md',
                1 => 'md',
                2 => 'flags-md',
              ),
              141 => 
              array (
                0 => 'me',
                1 => 'me',
                2 => 'flags-me',
              ),
              142 => 
              array (
                0 => 'mg',
                1 => 'mg',
                2 => 'flags-mg',
              ),
              143 => 
              array (
                0 => 'mh',
                1 => 'mh',
                2 => 'flags-mh',
              ),
              144 => 
              array (
                0 => 'mk',
                1 => 'mk',
                2 => 'flags-mk',
              ),
              145 => 
              array (
                0 => 'ml',
                1 => 'ml',
                2 => 'flags-ml',
              ),
              146 => 
              array (
                0 => 'mm',
                1 => 'mm',
                2 => 'flags-mm',
              ),
              147 => 
              array (
                0 => 'mn',
                1 => 'mn',
                2 => 'flags-mn',
              ),
              148 => 
              array (
                0 => 'mo',
                1 => 'mo',
                2 => 'flags-mo',
              ),
              149 => 
              array (
                0 => 'mp',
                1 => 'mp',
                2 => 'flags-mp',
              ),
              150 => 
              array (
                0 => 'mq',
                1 => 'mq',
                2 => 'flags-mq',
              ),
              151 => 
              array (
                0 => 'mr',
                1 => 'mr',
                2 => 'flags-mr',
              ),
              152 => 
              array (
                0 => 'ms',
                1 => 'ms',
                2 => 'flags-ms',
              ),
              153 => 
              array (
                0 => 'mt',
                1 => 'mt',
                2 => 'flags-mt',
              ),
              154 => 
              array (
                0 => 'mu',
                1 => 'mu',
                2 => 'flags-mu',
              ),
              155 => 
              array (
                0 => 'mv',
                1 => 'mv',
                2 => 'flags-mv',
              ),
              156 => 
              array (
                0 => 'mw',
                1 => 'mw',
                2 => 'flags-mw',
              ),
              157 => 
              array (
                0 => 'mx',
                1 => 'mx',
                2 => 'flags-mx',
              ),
              158 => 
              array (
                0 => 'my',
                1 => 'my',
                2 => 'flags-my',
              ),
              159 => 
              array (
                0 => 'mz',
                1 => 'mz',
                2 => 'flags-mz',
              ),
              160 => 
              array (
                0 => 'na',
                1 => 'na',
                2 => 'flags-na',
              ),
              161 => 
              array (
                0 => 'nc',
                1 => 'nc',
                2 => 'flags-nc',
              ),
              162 => 
              array (
                0 => 'ne',
                1 => 'ne',
                2 => 'flags-ne',
              ),
              163 => 
              array (
                0 => 'nf',
                1 => 'nf',
                2 => 'flags-nf',
              ),
              164 => 
              array (
                0 => 'ng',
                1 => 'ng',
                2 => 'flags-ng',
              ),
              165 => 
              array (
                0 => 'ni',
                1 => 'ni',
                2 => 'flags-ni',
              ),
              166 => 
              array (
                0 => 'nl',
                1 => 'nl',
                2 => 'flags-nl',
              ),
              167 => 
              array (
                0 => 'no',
                1 => 'no',
                2 => 'flags-no',
              ),
              168 => 
              array (
                0 => 'np',
                1 => 'np',
                2 => 'flags-np',
              ),
              169 => 
              array (
                0 => 'nr',
                1 => 'nr',
                2 => 'flags-nr',
              ),
              170 => 
              array (
                0 => 'nu',
                1 => 'nu',
                2 => 'flags-nu',
              ),
              171 => 
              array (
                0 => 'nz',
                1 => 'nz',
                2 => 'flags-nz',
              ),
              172 => 
              array (
                0 => 'om',
                1 => 'om',
                2 => 'flags-om',
              ),
              173 => 
              array (
                0 => 'pa',
                1 => 'pa',
                2 => 'flags-pa',
              ),
              174 => 
              array (
                0 => 'pe',
                1 => 'pe',
                2 => 'flags-pe',
              ),
              175 => 
              array (
                0 => 'pf',
                1 => 'pf',
                2 => 'flags-pf',
              ),
              176 => 
              array (
                0 => 'pg',
                1 => 'pg',
                2 => 'flags-pg',
              ),
              177 => 
              array (
                0 => 'ph',
                1 => 'ph',
                2 => 'flags-ph',
              ),
              178 => 
              array (
                0 => 'pk',
                1 => 'pk',
                2 => 'flags-pk',
              ),
              179 => 
              array (
                0 => 'pl',
                1 => 'pl',
                2 => 'flags-pl',
              ),
              180 => 
              array (
                0 => 'pm',
                1 => 'pm',
                2 => 'flags-pm',
              ),
              181 => 
              array (
                0 => 'pn',
                1 => 'pn',
                2 => 'flags-pn',
              ),
              182 => 
              array (
                0 => 'pr',
                1 => 'pr',
                2 => 'flags-pr',
              ),
              183 => 
              array (
                0 => 'ps',
                1 => 'ps',
                2 => 'flags-ps',
              ),
              184 => 
              array (
                0 => 'pt',
                1 => 'pt',
                2 => 'flags-pt',
              ),
              185 => 
              array (
                0 => 'pw',
                1 => 'pw',
                2 => 'flags-pw',
              ),
              186 => 
              array (
                0 => 'py',
                1 => 'py',
                2 => 'flags-py',
              ),
              187 => 
              array (
                0 => 'qa',
                1 => 'qa',
                2 => 'flags-qa',
              ),
              188 => 
              array (
                0 => 'qc',
                1 => 'qc',
                2 => 'flags-qc',
              ),
              189 => 
              array (
                0 => 're',
                1 => 're',
                2 => 'flags-re',
              ),
              190 => 
              array (
                0 => 'ro',
                1 => 'ro',
                2 => 'flags-ro',
              ),
              191 => 
              array (
                0 => 'rs',
                1 => 'rs',
                2 => 'flags-rs',
              ),
              192 => 
              array (
                0 => 'ru',
                1 => 'ru',
                2 => 'flags-ru',
              ),
              193 => 
              array (
                0 => 'rw',
                1 => 'rw',
                2 => 'flags-rw',
              ),
              194 => 
              array (
                0 => 'sa',
                1 => 'sa',
                2 => 'flags-sa',
              ),
              195 => 
              array (
                0 => 'sb',
                1 => 'sb',
                2 => 'flags-sb',
              ),
              196 => 
              array (
                0 => 'sc',
                1 => 'sc',
                2 => 'flags-sc',
              ),
              197 => 
              array (
                0 => 'scotland',
                1 => 'scotland',
                2 => 'flags-scotland',
              ),
              198 => 
              array (
                0 => 'sd',
                1 => 'sd',
                2 => 'flags-sd',
              ),
              199 => 
              array (
                0 => 'se',
                1 => 'se',
                2 => 'flags-se',
              ),
              200 => 
              array (
                0 => 'sg',
                1 => 'sg',
                2 => 'flags-sg',
              ),
              201 => 
              array (
                0 => 'sh',
                1 => 'sh',
                2 => 'flags-sh',
              ),
              202 => 
              array (
                0 => 'si',
                1 => 'si',
                2 => 'flags-si',
              ),
              203 => 
              array (
                0 => 'sj',
                1 => 'sj',
                2 => 'flags-sj',
              ),
              204 => 
              array (
                0 => 'sk',
                1 => 'sk',
                2 => 'flags-sk',
              ),
              205 => 
              array (
                0 => 'sl',
                1 => 'sl',
                2 => 'flags-sl',
              ),
              206 => 
              array (
                0 => 'sm',
                1 => 'sm',
                2 => 'flags-sm',
              ),
              207 => 
              array (
                0 => 'sn',
                1 => 'sn',
                2 => 'flags-sn',
              ),
              208 => 
              array (
                0 => 'so',
                1 => 'so',
                2 => 'flags-so',
              ),
              209 => 
              array (
                0 => 'sr',
                1 => 'sr',
                2 => 'flags-sr',
              ),
              210 => 
              array (
                0 => 'st',
                1 => 'st',
                2 => 'flags-st',
              ),
              211 => 
              array (
                0 => 'sv',
                1 => 'sv',
                2 => 'flags-sv',
              ),
              212 => 
              array (
                0 => 'sy',
                1 => 'sy',
                2 => 'flags-sy',
              ),
              213 => 
              array (
                0 => 'sz',
                1 => 'sz',
                2 => 'flags-sz',
              ),
              214 => 
              array (
                0 => 'tc',
                1 => 'tc',
                2 => 'flags-tc',
              ),
              215 => 
              array (
                0 => 'td',
                1 => 'td',
                2 => 'flags-td',
              ),
              216 => 
              array (
                0 => 'tf',
                1 => 'tf',
                2 => 'flags-tf',
              ),
              217 => 
              array (
                0 => 'tg',
                1 => 'tg',
                2 => 'flags-tg',
              ),
              218 => 
              array (
                0 => 'th',
                1 => 'th',
                2 => 'flags-th',
              ),
              219 => 
              array (
                0 => 'tj',
                1 => 'tj',
                2 => 'flags-tj',
              ),
              220 => 
              array (
                0 => 'tk',
                1 => 'tk',
                2 => 'flags-tk',
              ),
              221 => 
              array (
                0 => 'tl',
                1 => 'tl',
                2 => 'flags-tl',
              ),
              222 => 
              array (
                0 => 'tm',
                1 => 'tm',
                2 => 'flags-tm',
              ),
              223 => 
              array (
                0 => 'tn',
                1 => 'tn',
                2 => 'flags-tn',
              ),
              224 => 
              array (
                0 => 'to',
                1 => 'to',
                2 => 'flags-to',
              ),
              225 => 
              array (
                0 => 'tr',
                1 => 'tr',
                2 => 'flags-tr',
              ),
              226 => 
              array (
                0 => 'tt',
                1 => 'tt',
                2 => 'flags-tt',
              ),
              227 => 
              array (
                0 => 'tv',
                1 => 'tv',
                2 => 'flags-tv',
              ),
              228 => 
              array (
                0 => 'tw',
                1 => 'tw',
                2 => 'flags-tw',
              ),
              229 => 
              array (
                0 => 'tz',
                1 => 'tz',
                2 => 'flags-tz',
              ),
              230 => 
              array (
                0 => 'ua',
                1 => 'ua',
                2 => 'flags-ua',
              ),
              231 => 
              array (
                0 => 'ug',
                1 => 'ug',
                2 => 'flags-ug',
              ),
              232 => 
              array (
                0 => 'um',
                1 => 'um',
                2 => 'flags-um',
              ),
              233 => 
              array (
                0 => 'us',
                1 => 'us',
                2 => 'flags-us',
              ),
              234 => 
              array (
                0 => 'uy',
                1 => 'uy',
                2 => 'flags-uy',
              ),
              235 => 
              array (
                0 => 'uz',
                1 => 'uz',
                2 => 'flags-uz',
              ),
              236 => 
              array (
                0 => 'va',
                1 => 'va',
                2 => 'flags-va',
              ),
              237 => 
              array (
                0 => 'vc',
                1 => 'vc',
                2 => 'flags-vc',
              ),
              238 => 
              array (
                0 => 've',
                1 => 've',
                2 => 'flags-ve',
              ),
              239 => 
              array (
                0 => 'vg',
                1 => 'vg',
                2 => 'flags-vg',
              ),
              240 => 
              array (
                0 => 'vi',
                1 => 'vi',
                2 => 'flags-vi',
              ),
              241 => 
              array (
                0 => 'vn',
                1 => 'vn',
                2 => 'flags-vn',
              ),
              242 => 
              array (
                0 => 'vu',
                1 => 'vu',
                2 => 'flags-vu',
              ),
              243 => 
              array (
                0 => 'wales',
                1 => 'wales',
                2 => 'flags-wales',
              ),
              244 => 
              array (
                0 => 'wf',
                1 => 'wf',
                2 => 'flags-wf',
              ),
              245 => 
              array (
                0 => 'ws',
                1 => 'ws',
                2 => 'flags-ws',
              ),
              246 => 
              array (
                0 => 'ye',
                1 => 'ye',
                2 => 'flags-ye',
              ),
              247 => 
              array (
                0 => 'yt',
                1 => 'yt',
                2 => 'flags-yt',
              ),
              248 => 
              array (
                0 => 'za',
                1 => 'za',
                2 => 'flags-za',
              ),
              249 => 
              array (
                0 => 'zm',
                1 => 'zm',
                2 => 'flags-zm',
              ),
              250 => 
              array (
                0 => 'zw',
                1 => 'zw',
                2 => 'flags-zw',
              ),
            ),
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'static_lang_isocode' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language.isocode',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'static_languages',
            'foreign_table' => 'static_languages',
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'pidList' => '0',
                'additionalSearchFields' => 'lg_name_local',
              ),
            ),
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
              'tableList' => 
              array (
                'disabled' => true,
              ),
            ),
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,language_isocode,static_lang_isocode,flag,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_log' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_log',
        'label' => 'details',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => true,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'userid' => 
        array (
          'label' => 'userid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'action' => 
        array (
          'label' => 'action',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recpid' => 
        array (
          'label' => 'recpid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'error' => 
        array (
          'label' => 'error',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details' => 
        array (
          'label' => 'details',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'type' => 
        array (
          'label' => 'type',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details_nr' => 
        array (
          'label' => 'details_nr',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'IP' => 
        array (
          'label' => 'IP',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'log_data' => 
        array (
          'label' => 'log_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'event_pid' => 
        array (
          'label' => 'event_pid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'workspace' => 
        array (
          'label' => 'workspace',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'NEWid' => 
        array (
          'label' => 'NEWid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'tstamp, userid, action, recuid, tablename, recpid, error, details, type, details_nr, IP, log_data, event_pid, workspace, NEWid',
        ),
      ),
    ),
    'sys_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'adminOnly' => true,
        'rootLevel' => true,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_news',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,content,starttime,endtime',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 5,
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,content,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-backend_layout',
        ),
        'selicon_field' => 'icon',
        'selicon_field_path' => 'uploads/media',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,config,description,hidden,icon',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 25,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'jpg,gif,png',
            'uploadfolder' => 'uploads/media',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,icon,config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'fe_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups',
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-frontend',
        ),
        'useColumnsForDefaultValues' => 'lockToDomain',
        'searchFields' => 'title,description',
        'type' => 'tx_extbase_type',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,subgroup,lockToDomain,description',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'subgroup' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'AND NOT(fe_groups.uid = ###THIS_UID###) AND fe_groups.hidden=0 ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
            'size' => 6,
            'autoSizeMax' => 10,
            'minitems' => 0,
            'maxitems' => 20,
          ),
        ),
        'lockToDomain' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'TSconfig:',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup',
                1 => 'Tx_Extbase_Domain_Model_FrontendUserGroup',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUserGroup' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
      ),
    ),
    'fe_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'default_sortby' => 'username',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'status-user-frontend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,lockToDomain,disable,starttime,endtime',
        'searchFields' => 'username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company,description,tt_products_vouchercode,comments,tt_products_organisation_form',
        'type' => 'tx_extbase_type',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'username,password,usergroup,lockToDomain,name,first_name,middle_name,last_name,title,company,address,zip,city,country,email,www,telephone,fax,disable,starttime,endtime,lastlogin,description',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'nospace,trim,lower,uniqueInPid,required',
            'autocomplete' => false,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 100,
            'eval' => 'trim,required,TYPO3\\CMS\\Saltedpasswords\\Evaluation\\FrontendEvaluator,password',
            'autocomplete' => false,
            'renderType' => 'rsaInput',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
            'size' => 6,
            'minitems' => 1,
            'maxitems' => 50,
          ),
        ),
        'lockToDomain' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'eval' => 'trim',
            'max' => 160,
          ),
        ),
        'first_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'middle_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.middle_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'last_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 3,
          ),
        ),
        'telephone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.phone',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 30,
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 255,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title_person',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => '40',
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 10,
            'max' => '10',
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'www' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'company' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
            'maxitems' => 6,
            'minitems' => 0,
          ),
        ),
        'disable' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'TSconfig:',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'lastlogin' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
                1 => 'Tx_Extbase_Domain_Model_FrontendUser',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'felogin_forgotHash' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_forgotHash',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tt_products_memoItems' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_memoItems',
          'config' => 
          array (
            'type' => 'input',
            'size' => '50',
            'max' => '256',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'tt_products_memodam' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_memodam',
          'config' => 
          array (
            'type' => 'input',
            'size' => '50',
            'max' => '256',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'tt_products_discount' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_discount',
          'config' => 
          array (
            'type' => 'input',
            'size' => '4',
            'max' => '8',
            'eval' => 'trim,double2',
            'range' => 
            array (
              'upper' => '1000',
              'lower' => '0',
            ),
            'default' => 0,
          ),
        ),
        'tt_products_creditpoints' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_creditpoints',
          'config' => 
          array (
            'type' => 'input',
            'size' => '5',
            'max' => '20',
            'eval' => 'trim,integer',
          ),
        ),
        'tt_products_vouchercode' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_vouchercode',
          'config' => 
          array (
            'type' => 'input',
            'size' => '20',
            'max' => '256',
          ),
        ),
        'tt_products_vat' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_vat',
          'config' => 
          array (
            'type' => 'input',
            'size' => '15',
            'max' => '15',
          ),
        ),
        'tt_products_business_partner' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_business_partner',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_business_partner.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_business_partner.I.1',
                1 => '1',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'tt_products_organisation_form' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.A1',
                1 => 'A1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.A2',
                1 => 'A2',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.A3',
                1 => 'A3',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.BH',
                1 => 'BH',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.E1',
                1 => 'E1',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.E2',
                1 => 'E2',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.E3',
                1 => 'E3',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.E4',
                1 => 'E4',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G1',
                1 => 'G1',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G2',
                1 => 'G2',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G3',
                1 => 'G3',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G4',
                1 => 'G4',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G5',
                1 => 'G5',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G6',
                1 => 'G6',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G7',
                1 => 'G7',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.K2',
                1 => 'K2',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.K3',
                1 => 'K3',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.KG',
                1 => 'KG',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.KO',
                1 => 'KO',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.O1',
                1 => 'O1',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.P',
                1 => 'P',
              ),
              21 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.S1',
                1 => 'S1',
              ),
              22 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.S2',
                1 => 'S2',
              ),
              23 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.S3',
                1 => 'S3',
              ),
              24 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.U',
                1 => 'U',
              ),
              25 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.V1',
                1 => 'V1',
              ),
              26 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.Z1',
                1 => 'Z1',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,username,password,usergroup,lastlogin,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,company,title,name,--palette--;;2,address,zip,city,country,telephone,fax,email,www,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type,tt_products_creditpoints,tt_products_vouchercode,tt_products_memoItems,tt_products_memodam,tt_products_discount,tt_products_vat,tt_products_business_partner,tt_products_organisation_form',
        ),
        'Tx_Extbase_Domain_Model_FrontendUser' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,username,password,usergroup,lastlogin,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,company,title,name,--palette--;;2,address,zip,city,country,telephone,fax,email,www,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type,tt_products_creditpoints,tt_products_vouchercode,tt_products_memoItems,tt_products_memodam,tt_products_discount,tt_products_vat,tt_products_business_partner,tt_products_organisation_form',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        2 => 
        array (
          'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
        ),
      ),
    ),
    'pages_language_overlay' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages_language_overlay',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'hideAtCopy' => 1,
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'transOrigPointerField' => 'pid',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'shadowColumnsForNewPlaceholders' => 'title',
        'languageField' => 'sys_language_uid',
        'type' => 'doktype',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-page-language-overlay',
        ),
        'searchFields' => 'title,subtitle,nav_title,keywords,description,abstract,author,author_email,url',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,starttime,endtime,keywords,description,abstract',
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                1 => '1',
                2 => 'apps-pagetree-page-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                1 => '6',
                2 => 'apps-pagetree-page-backend-users',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                1 => '--div--',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                1 => '4',
                2 => 'apps-pagetree-page-shortcut',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                1 => '7',
                2 => 'apps-pagetree-page-mountpoint',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                1 => '3',
                2 => 'apps-pagetree-page-shortcut-external',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                1 => '--div--',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                1 => '254',
                2 => 'apps-pagetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                1 => '255',
                2 => 'apps-filetree-folder-recycler',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                1 => '199',
                2 => 'apps-pagetree-spacer',
              ),
            ),
            'default' => '1',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'softref' => 'email[subst]',
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'url' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
            'eval' => 'trim',
            'softref' => 'url',
          ),
        ),
        'urltype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.automatic',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'http://',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'https://',
                1 => '4',
              ),
              3 => 
              array (
                0 => 'ftp://',
                1 => '2',
              ),
              4 => 
              array (
                0 => 'mailto:',
                1 => '3',
              ),
            ),
            'default' => '1',
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                1 => 3,
              ),
            ),
            'default' => 0,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.sorting',
            'items' => 
            array (
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.external;external,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.shortcut;shortcut,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.shortcutpage;shortcutpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        7 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        199 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        254 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        255 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        5 => 
        array (
          'showitem' => 'author,author_email',
        ),
        'standard' => 
        array (
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'urltype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.urltype_formlabel, url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel',
        ),
        'title' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel',
        ),
        'hiddenonly' => 
        array (
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel',
        ),
        'abstract' => 
        array (
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'editorial' => 
        array (
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel',
        ),
        'language' => 
        array (
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'media' => 
        array (
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
      ),
    ),
    'sys_domain' => 
    array (
      'ctrl' => 
      array (
        'label' => 'domainName',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-domain',
        ),
        'searchFields' => 'domainName,redirectTo',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,domainName,redirectTo',
      ),
      'columns' => 
      array (
        'domainName' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.domainName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 255,
            'eval' => 'required,unique,lower,trim,domainname',
            'softref' => 'substitute',
          ),
        ),
        'redirectTo' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectTo',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 255,
            'default' => '',
            'eval' => 'trim',
            'softref' => 'substitute',
          ),
        ),
        'redirectHttpStatusCode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.301',
                1 => '301',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.302',
                1 => '302',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.303',
                1 => '303',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.307',
                1 => '307',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'prepend_params' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.prepend_params',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'forced' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.forced',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,domainName,--palette--;;1,prepend_params,forced,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'redirectTo, redirectHttpStatusCode',
        ),
      ),
    ),
    'sys_template' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'root',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-template-extension',
          1 => 'mimetypes-x-content-template',
        ),
        'searchFields' => 'title,constants,config',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,clear,root,basedOn,nextLevel,sitetitle,description,hidden,starttime,endtime',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'root' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.root',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'clear' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clear',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'Constants',
                1 => '',
              ),
              1 => 
              array (
                0 => 'Setup',
                1 => '',
              ),
            ),
            'cols' => 2,
          ),
        ),
        'sitetitle' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.sitetitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
          ),
        ),
        'constants' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.constants',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 10,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'nextLevel' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.nextLevel',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'sys_template',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => '',
          ),
        ),
        'include_static_file' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_file',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'maxitems' => 100,
            'items' => 
            array (
              0 => 
              array (
                0 => 'TypoScript Content Elements (css_styled_content)',
                1 => 'EXT:css_styled_content/Configuration/TypoScript/',
              ),
              1 => 
              array (
                0 => 'TypoScript Content Elements CSS (optional) (css_styled_content)',
                1 => 'EXT:css_styled_content/Configuration/TypoScript/Styling/',
              ),
              2 => 
              array (
                0 => 'Fluid Content Elements (fluid_styled_content)',
                1 => 'EXT:fluid_styled_content/Configuration/TypoScript/',
              ),
              3 => 
              array (
                0 => 'Fluid Content Elements CSS (optional) (fluid_styled_content)',
                1 => 'EXT:fluid_styled_content/Configuration/TypoScript/Styling/',
              ),
              4 => 
              array (
                0 => 'Form (form)',
                1 => 'EXT:form/Configuration/TypoScript/',
              ),
              5 => 
              array (
                0 => 'Indexed Search (Extbase & Fluid based) (indexed_search)',
                1 => 'EXT:indexed_search/Configuration/TypoScript',
              ),
              6 => 
              array (
                0 => 'Static Info Tables (static_info_tables)',
                1 => 'EXT:static_info_tables/Configuration/TypoScript/Static',
              ),
            ),
            'enableMultiSelectFilterTextfield' => true,
            'softref' => 'ext_fileref',
          ),
        ),
        'basedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'sys_template',
            'maxitems' => 50,
            'autoSizeMax' => 10,
            'minitems' => 0,
            'default' => '',
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_edit',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_add',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'includeStaticAfterBasedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.config',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'static_file_mode' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,sitetitle,constants,config,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.options,clear,root,nextLevel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.include,includeStaticAfterBasedOn,include_static_file,basedOn,static_file_mode,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tt_content' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'subheader,bodytext',
        'descriptionColumn' => 'rowDescription',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'type' => 'CType',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType',
        'shadowColumnsForNewPlaceholders' => 'colPos',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'CType',
        'typeicon_classes' => 
        array (
          'header' => 'mimetypes-x-content-header',
          'text' => 'mimetypes-x-content-text',
          'textpic' => 'mimetypes-x-content-text-picture',
          'image' => 'mimetypes-x-content-image',
          'textmedia' => 'mimetypes-x-content-text-media',
          'bullets' => 'mimetypes-x-content-list-bullets',
          'table' => 'mimetypes-x-content-table',
          'uploads' => 'mimetypes-x-content-list-files',
          'list' => 'mimetypes-x-content-plugin',
          'login' => 'mimetypes-x-content-login',
          'shortcut' => 'mimetypes-x-content-link',
          'script' => 'mimetypes-x-content-script',
          'div' => 'mimetypes-x-content-divider',
          'html' => 'mimetypes-x-content-html',
          'default' => 'mimetypes-x-content-text',
          'menu_abstract' => 'content-menu-abstract',
          'menu_categorized_content' => 'content-menu-categorized',
          'menu_categorized_pages' => 'content-menu-categorized',
          'menu_pages' => 'content-menu-pages',
          'menu_subpages' => 'content-menu-pages',
          'menu_recently_updated' => 'content-menu-recently-updated',
          'menu_related_pages' => 'content-menu-related',
          'menu_sitemap' => 'content-menu-sitemap',
          'menu_sitemap_pages' => 'content-menu-sitemap-pages',
          'menu_section' => 'content-menu-section',
          'menu_section_pages' => 'content-menu-section',
          'form_formframework' => 'content-form',
        ),
        'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform',
      ),
      'interface' => 
      array (
        'always_description' => 0,
        'showRecordFieldList' => 'CType,header,rowDescription,header_link,bodytext,image,media,imagewidth,imageorient,records,colPos,starttime,endtime,fe_group,categories',
      ),
      'columns' => 
      array (
        'CType' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.0',
                1 => 'header',
                2 => 'content-header',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.1',
                1 => 'text',
                2 => 'content-text',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.2',
                1 => 'textpic',
                2 => 'content-textpic',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.3',
                1 => 'image',
                2 => 'content-image',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia',
                1 => 'textmedia',
                2 => 'content-textmedia',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
                1 => '--div--',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.4',
                1 => 'bullets',
                2 => 'content-bullets',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.5',
                1 => 'table',
                2 => 'content-table',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.6',
                1 => 'uploads',
                2 => 'content-special-uploads',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
                1 => '--div--',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract',
                1 => 'menu_abstract',
                2 => 'content-menu-abstract',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content',
                1 => 'menu_categorized_content',
                2 => 'content-menu-categorized',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages',
                1 => 'menu_categorized_pages',
                2 => 'content-menu-categorized',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages',
                1 => 'menu_pages',
                2 => 'content-menu-pages',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages',
                1 => 'menu_subpages',
                2 => 'content-menu-pages',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated',
                1 => 'menu_recently_updated',
                2 => 'content-menu-recently-updated',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages',
                1 => 'menu_related_pages',
                2 => 'content-menu-related',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section',
                1 => 'menu_section',
                2 => 'content-menu-section',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages',
                1 => 'menu_section_pages',
                2 => 'content-menu-section',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap',
                1 => 'menu_sitemap',
                2 => 'content-menu-sitemap',
              ),
              21 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages',
                1 => 'menu_sitemap_pages',
                2 => 'content-menu-sitemap-pages',
              ),
              22 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
                1 => '--div--',
              ),
              23 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.13',
                1 => 'shortcut',
                2 => 'content-special-shortcut',
              ),
              24 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.14',
                1 => 'list',
                2 => 'content-plugin',
              ),
              25 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.16',
                1 => 'div',
                2 => 'content-special-div',
              ),
              26 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.17',
                1 => 'html',
                2 => 'content-special-html',
              ),
              27 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.forms',
                1 => '--div--',
              ),
              28 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.10',
                1 => 'login',
                2 => 'content-elements-login',
              ),
              29 => 
              array (
                0 => 'Form',
                1 => 'form_formframework',
                2 => 'content-form',
              ),
            ),
            'default' => 'text',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
        ),
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l18n_parent' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'frame_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_before',
                1 => 'ruler-before',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_after',
                1 => 'ruler-after',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent',
                1 => 'indent',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_left',
                1 => 'indent-left',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_right',
                1 => 'indent-right',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.none',
                1 => 'none',
              ),
            ),
            'default' => 'default',
          ),
        ),
        'space_before_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'space_after_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'bullets_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'colPos' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->colPosListItemProcFunc',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.0',
                1 => '1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.normal',
                1 => '0',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 0,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                1 => '5',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                1 => '100',
              ),
            ),
            'default' => 0,
          ),
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                1 => 'center',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                1 => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'bodytext' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,images,email[subst],url',
            'search' => 
            array (
              'andWhere' => 'CType=\'text\' OR CType=\'textpic\' OR CType=\'textmedia\'',
            ),
          ),
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'assets' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'assets',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'imagewidth' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagewidth',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'upper' => 1999,
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageheight' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageheight',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'upper' => 1999,
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageorient' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                1 => 0,
                2 => 'content-beside-text-img-above-center',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
                1 => 1,
                2 => 'content-beside-text-img-above-right',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
                1 => 2,
                2 => 'content-beside-text-img-above-left',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                1 => 8,
                2 => 'content-beside-text-img-below-center',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
                1 => 9,
                2 => 'content-beside-text-img-below-right',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
                1 => 10,
                2 => 'content-beside-text-img-below-left',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
                1 => 17,
                2 => 'content-inside-text-img-right',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
                1 => 18,
                2 => 'content-inside-text-img-left',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.8',
                1 => '--div--',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                1 => 25,
                2 => 'content-beside-text-img-right',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                1 => 26,
                2 => 'content-beside-text-img-left',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'imageborder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageborder',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '1',
                1 => 1,
              ),
              1 => 
              array (
                0 => '2',
                1 => 2,
              ),
              2 => 
              array (
                0 => '3',
                1 => 3,
              ),
              3 => 
              array (
                0 => '4',
                1 => 4,
              ),
              4 => 
              array (
                0 => '5',
                1 => 5,
              ),
              5 => 
              array (
                0 => '6',
                1 => 6,
              ),
              6 => 
              array (
                0 => '7',
                1 => 7,
              ),
              7 => 
              array (
                0 => '8',
                1 => 8,
              ),
            ),
            'default' => 2,
          ),
        ),
        'cols' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => '1',
                1 => '1',
              ),
              2 => 
              array (
                0 => '2',
                1 => '2',
              ),
              3 => 
              array (
                0 => '3',
                1 => '3',
              ),
              4 => 
              array (
                0 => '4',
                1 => '4',
              ),
              5 => 
              array (
                0 => '5',
                1 => '5',
              ),
              6 => 
              array (
                0 => '6',
                1 => '6',
              ),
              7 => 
              array (
                0 => '7',
                1 => '7',
              ),
              8 => 
              array (
                0 => '8',
                1 => '8',
              ),
              9 => 
              array (
                0 => '9',
                1 => '9',
              ),
            ),
            'default' => 0,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.startingpoint',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 50,
            'minitems' => 0,
          ),
        ),
        'recursive' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.recursive',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.5',
                1 => '250',
              ),
            ),
            'default' => 0,
          ),
        ),
        'list_type' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
              ),
              1 => 
              array (
                0 => 'Indexed Search (Extbase & Fluid based)',
                1 => 'indexedsearch_pi2',
                2 => 'EXT:indexed_search/Resources/Public/Icons/Extension.png',
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Frontend\\Hooks\\TableColumnHooks->sortPluginList',
            'default' => '',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
        ),
        'file_collections' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'localizeReferencesAtParentLocalization' => true,
            'allowed' => 'sys_file_collection',
            'foreign_table' => 'sys_file_collection',
            'minitems' => 0,
            'size' => 5,
          ),
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'filelink_size' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'filelink_sorting' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.extension',
                1 => 'extension',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.name',
                1 => 'name',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.type',
                1 => 'type',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.size',
                1 => 'size',
              ),
            ),
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'default' => '',
          ),
        ),
        'records' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_content',
            'size' => 5,
            'maxitems' => 200,
            'minitems' => 0,
          ),
        ),
        'sectionIndex' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'linkToTop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'pi_flexform' => 
        array (
          'l10n_display' => 'hideDiff',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pi_flexform',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'list_type,CType',
            'ds' => 
            array (
              'default' => '
                        <T3DataStructure>
                          <ROOT>
                            <type>array</type>
                            <el>
                                <!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
                              <xmlTitle>
                                <TCEforms>
                                    <label>The Title:</label>
                                    <config>
                                        <type>input</type>
                                        <size>48</size>
                                    </config>
                                </TCEforms>
                              </xmlTitle>
                            </el>
                          </ROOT>
                        </T3DataStructure>
                    ',
              '*,login' => 'FILE:EXT:felogin/Configuration/FlexForms/Login.xml',
              '*,form_formframework' => 'FILE:EXT:form/Configuration/FlexForms/FormFramework.xml',
            ),
            'search' => 
            array (
              'andWhere' => 'CType=\'list\'',
            ),
          ),
        ),
        'accessibility_title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'accessibility_bypass' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'accessibility_bypass_text' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'selected_categories' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:selected_categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND sys_category.sys_language_uid IN (0,-1) ORDER BY sys_category.title ASC',
            'size' => 20,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
              ),
            ),
          ),
        ),
        'category_field' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:category_field',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Category\\CategoryRegistry->getCategoryFieldsForTable',
            'itemsProcConfig' => 
            array (
              'table' => 'tt_content',
            ),
          ),
        ),
        'table_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.default',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.striped',
                1 => 'striped',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.bordered',
                1 => 'bordered',
              ),
            ),
            'default' => '',
          ),
        ),
        'table_caption' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_caption',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'table_delimiter' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.124',
                1 => 124,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.59',
                1 => 59,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.44',
                1 => 44,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.58',
                1 => 58,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.9',
                1 => 9,
              ),
            ),
            'default' => 124,
          ),
        ),
        'table_enclosure' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.39',
                1 => 39,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.34',
                1 => 34,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_header_position' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_tfoot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_tfoot',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xml:labels.enabled',
                1 => 1,
              ),
            ),
          ),
        ),
        'uploads_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_description',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xml:labels.enabled',
                1 => 1,
              ),
            ),
          ),
        ),
        'uploads_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tt_content',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'CType,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories',
        ),
        'bullets' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bullets_type,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'div' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'header' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'text' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'textpic' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,image,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'textmedia' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,assets,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'image' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,image,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'html' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 't3editor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
        ),
        'list' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,list_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type_formlabel,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,recursive,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'subtype_value_field' => 'list_type',
          'subtypes_excludelist' => 
          array (
            'indexedsearch_pi2' => 'layout,pages,recursive',
          ),
        ),
        'menu_categorized_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,selected_categories,category_field,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'pages',
                ),
              ),
            ),
          ),
        ),
        'menu_categorized_content' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,selected_categories,category_field,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'tt_content',
                ),
              ),
            ),
          ),
        ),
        'menu_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_subpages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_sitemap' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_section' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_abstract' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_recently_updated' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_related_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_section_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'menu_sitemap_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'shortcut' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'table' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.table.bodytext,--palette--;;tableconfiguration,table_caption,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.table_layout;tablelayout,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'textTable',
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'uploads' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media;uploads,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.uploads_layout;uploadslayout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'login' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pi_flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'form_formframework' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,pi_flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'showitem' => '
                CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel,
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel
            ',
        ),
        'headers' => 
        array (
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
                --linebreak--,
                subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel
            ',
        ),
        'gallerySettings' => 
        array (
          'showitem' => '
                imageorient;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient_formlabel,
                imagecols;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols_formlabel
            ',
        ),
        'mediaAdjustments' => 
        array (
          'showitem' => '
                imagewidth;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imagewidth,
                imageheight;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageheight,
                imageborder;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageborder
            ',
        ),
        'imagelinks' => 
        array (
          'showitem' => '
                image_zoom;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom_formlabel
            ',
        ),
        'uploads' => 
        array (
          'showitem' => '
                media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                --linebreak--,
                file_collections;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections.ALT.uploads_formlabel,
                --linebreak--,
                filelink_sorting,
                target
            ',
        ),
        'menu_accessibility' => 
        array (
          'showitem' => '
                accessibility_title;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_title_formlabel,
                --linebreak--,
                accessibility_bypass;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_formlabel,
                accessibility_bypass_text;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_text_formlabel
            ',
        ),
        'hidden' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden
            ',
        ),
        'language' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
            ',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'uploadslayout' => 
        array (
          'showitem' => '
                filelink_size;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size_formlabel,
                uploads_description,
                uploads_type
            ',
        ),
        'appearanceLinks' => 
        array (
          'showitem' => '
                sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel,
                linkToTop;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop_formlabel
            ',
        ),
        'frames' => 
        array (
          'showitem' => '
                layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
                frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
                space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
                space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
            ',
        ),
        'tableconfiguration' => 
        array (
          'showitem' => '
                table_delimiter,
                table_enclosure
            ',
        ),
        'tablelayout' => 
        array (
          'showitem' => '
                cols,
                table_class,
                table_header_position,
                table_tfoot
            ',
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_extension' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => true,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'extension_key,version,integer_version,title,description,state,category,last_updated,update_comment,author_name,author_email,md5hash,serialized_dependencies',
      ),
      'columns' => 
      array (
        'extension_key' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.extensionkey',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.version',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'alldownloadcounter' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'integer_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.integerversion',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.state',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.category',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'last_updated' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.lastupdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
          ),
        ),
        'update_comment' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.updatecomment',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'author_name' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authorname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'author_email' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authoremail',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'current_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.currentversion',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'review_state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.reviewstate',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'md5hash' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.md5hash',
          'config' => 
          array (
            'type' => 'input',
            'size' => 1,
          ),
        ),
        'serialized_dependencies' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_extension.serializedDependencies',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'extensionkey, version, integer_version, title, description, state, category, last_updated, update_comment, author_name, author_email, review_state, md5hash, serialized_dependencies',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_repository' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => true,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,description,wsdl_url_mirror_list_url,last_update,extension_count',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_repository.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_repository.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'wsdl_url' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_repository.wsdlUrl',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'mirror_list_url' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_repository.mirrorListUrl',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
          ),
        ),
        'last_update' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_repository.lastUpdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'extension_count' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/locallang_db.xlf:tx_extensionmanager_domain_model_repository.extensionCount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, description, wsdl_url, mirror_list_url, last_update, extension_count',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'index_config' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'type',
        'default_sortby' => 'crdate',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-index_config',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,starttime,title,description,type,depth,table2index,alternative_source_pid,get_params,chashcalc,filepath,extensions',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 2,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.5',
                1 => '5',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'depth' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.depth',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.depth_0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.depth_1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.depth_2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.depth_3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.depth_4',
                1 => '4',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'table2index' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.table2index',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.table2index.I.0',
                1 => '0',
              ),
            ),
            'special' => 'tables',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'alternative_source_pid' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.alternative_source_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'indexcfgs' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.indexcfgs',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'index_config,pages',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 200,
          ),
        ),
        'get_params' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.get_params',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'fieldlist' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.fields',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'externalUrl' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.externalUrl',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'chashcalc' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.chashcalc',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'filepath' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.filepath',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'extensions' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.extensions',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'url_deny' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.url_deny',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 2,
          ),
        ),
        'records_indexonchange' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.records_indexonchange',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'timer_next_indexing' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_next_indexing',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
        ),
        'timer_offset' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_offset',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'time',
            'default' => 3600,
          ),
        ),
        'timer_frequency' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency.I.0',
                1 => '3600',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency.I.1',
                1 => '86400',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency.I.2',
                1 => '604800',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 86400,
          ),
        ),
        'recordsbatch' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.recordsbatch',
          'config' => 
          array (
            'type' => 'input',
            'size' => 8,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'set_id' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.set_id',
          'config' => 
          array (
            'type' => 'none',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,timer_next_indexing,timer_offset,timer_frequency,set_id,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,timer_next_indexing,timer_offset,timer_frequency,set_id,table2index,alternative_source_pid,fieldlist,get_params,chashcalc,recordsbatch,records_indexonchange,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        2 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,timer_next_indexing,timer_offset,timer_frequency,set_id,filepath,extensions,depth,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,timer_next_indexing,timer_offset,timer_frequency,set_id,externalUrl,depth,url_deny,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,timer_next_indexing,timer_offset,timer_frequency,set_id,alternative_source_pid;LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.rootpage,depth,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        5 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,indexcfgs,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'tx_scheduler_task_group' => 
    array (
      'ctrl' => 
      array (
        'label' => 'groupName',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-tx_scheduler_task_group',
        ),
        'adminOnly' => true,
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'searchFields' => 'groupName',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,groupName',
      ),
      'columns' => 
      array (
        'groupName' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.groupName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'required,unique,trim',
            'softref' => 'substitute',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,groupName,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_note' => 
    array (
      'ctrl' => 
      array (
        'label' => 'subject',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_note',
        ),
        'sortby' => 'sorting',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'category,subject,message,personal',
      ),
      'columns' => 
      array (
        'category' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '0',
                2 => 'sysnote-type-0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.1',
                1 => '1',
                2 => 'sysnote-type-1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.3',
                1 => '3',
                2 => 'sysnote-type-3',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.4',
                1 => '4',
                2 => 'sysnote-type-4',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.2',
                1 => '2',
                2 => 'sysnote-type-2',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'subject' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.subject',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
          ),
        ),
        'message' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => '15',
          ),
        ),
        'personal' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.personal',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,category,subject,message,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,personal,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_products_accounts' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_accounts',
        'label' => 'ac_number',
        'label_userFunc' => 'tx_ttproducts_table_label->getLabel',
        'default_sortby' => 'ORDER BY ac_number',
        'tstamp' => 'tstamp',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'iconfile' => 'EXT:tt_products/res/icons/table/sys_products_accounts.gif',
        'searchFields' => 'owner_name,ac_number',
      ),
      'columns' => 
      array (
        'ac_number' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_accounts.ac_number',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
            'eval' => 'required,trim',
          ),
        ),
        'owner_name' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
          ),
        ),
        'bic' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_accounts.bic',
          'config' => 
          array (
            'type' => 'input',
            'size' => '11',
            'max' => '11',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'ac_number, owner_name, bic',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'sys_products_cards' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_cards',
        'label' => 'cc_number',
        'default_sortby' => 'ORDER BY cc_number',
        'tstamp' => 'tstamp',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'iconfile' => 'EXT:tt_products/res/icons/table/sys_products_cards.gif',
        'searchFields' => 'owner_name,cc_number',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'cc_number,owner_name,cc_type,cvv2,endtime',
      ),
      'columns' => 
      array (
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'cc_number' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_cards.cc_number',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
            'eval' => 'required,trim',
          ),
        ),
        'owner_name' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
          ),
        ),
        'cc_type' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_cards.cc_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_cards.cc_type.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_cards.cc_type.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_cards.cc_type.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_cards.cc_type.I.3',
                1 => '3',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'cvv2' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_cards.cvv2',
          'config' => 
          array (
            'type' => 'input',
            'size' => '4',
            'eval' => 'int',
            'max' => '4',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'cc_number, owner_name, cc_type, cvv2, endtime',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'sys_products_orders' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders',
        'label' => 'name',
        'label_alt' => 'last_name',
        'default_sortby' => 'ORDER BY name',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'mainpalette' => 1,
        'iconfile' => 'EXT:tt_products/res/icons/table/sys_products_orders.gif',
        'dividers2tabs' => '1',
        'searchFields' => 'uid,name,first_name,last_name,vat_id,address,zip,city,telephone,email,giftcode,bill_no,tracking_code',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,sys_language_uid,name,first_name,last_name,company,vat_id,salutation,address,zip,city,country,email,business_partner,organisation_form,payment,shipping,amount,tax_mode,pay_mode,email_notify,tracking_code,status,agb,feusers_id,creditpoints,creditpoints_spended,creditpoints_saved,creditpoints_gifts,desired_date,desired_time,note,giftservice,date_of_payment,date_of_delivery,bill_no,radio1',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'name' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
            'eval' => 'required,trim',
          ),
        ),
        'first_name' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '50',
            'eval' => 'trim',
          ),
        ),
        'last_name' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '50',
            'eval' => 'trim',
          ),
        ),
        'company' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
            'eval' => 'trim',
          ),
        ),
        'vat_id' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.vat_id',
          'config' => 
          array (
            'type' => 'input',
            'size' => '15',
            'max' => '15',
          ),
        ),
        'salutation' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.salutation',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.salutation.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.salutation.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.salutation.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.salutation.I.3',
                1 => '3',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'address' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'input',
            'size' => '50',
            'max' => '256',
          ),
        ),
        'zip' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '20',
            'eval' => 'trim',
          ),
        ),
        'city' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '50',
            'eval' => 'trim',
          ),
        ),
        'country' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '60',
            'eval' => 'trim',
          ),
        ),
        'email' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => '20',
            'max' => '80',
          ),
        ),
        'business_partner' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_business_partner',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_business_partner.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_business_partner.I.1',
                1 => '1',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'organisation_form' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.A1',
                1 => 'A1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.A2',
                1 => 'A2',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.A3',
                1 => 'A3',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.BH',
                1 => 'BH',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.E1',
                1 => 'E1',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.E2',
                1 => 'E2',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.E3',
                1 => 'E3',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.E4',
                1 => 'E4',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G1',
                1 => 'G1',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G2',
                1 => 'G2',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G3',
                1 => 'G3',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G4',
                1 => 'G4',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G5',
                1 => 'G5',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G6',
                1 => 'G6',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.G7',
                1 => 'G7',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.K2',
                1 => 'K2',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.K3',
                1 => 'K3',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.KG',
                1 => 'KG',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.KO',
                1 => 'KO',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.O1',
                1 => 'O1',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.P',
                1 => 'P',
              ),
              21 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.S1',
                1 => 'S1',
              ),
              22 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.S2',
                1 => 'S2',
              ),
              23 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.S3',
                1 => 'S3',
              ),
              24 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.U',
                1 => 'U',
              ),
              25 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.V1',
                1 => 'V1',
              ),
              26 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:fe_users.tt_products_organisation_form.Z1',
                1 => 'Z1',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'payment' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.payment',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
          ),
        ),
        'shipping' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.shipping',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
          ),
        ),
        'amount' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.amount',
          'config' => 
          array (
            'type' => 'input',
            'size' => '20',
            'max' => '20',
            'eval' => 'trim,double2',
          ),
        ),
        'tax_mode' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.tax_mode',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.tax_mode.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.tax_mode.I.1',
                1 => '1',
              ),
            ),
            'default' => '0',
          ),
        ),
        'pay_mode' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.5',
                1 => '5',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.6',
                1 => '6',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.7',
                1 => '7',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.8',
                1 => '8',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.9',
                1 => '9',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.10',
                1 => '10',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.11',
                1 => '11',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.12',
                1 => '12',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.13',
                1 => '13',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.14',
                1 => '14',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.15',
                1 => '15',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.16',
                1 => '16',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.pay_mode.I.17',
                1 => '17',
              ),
            ),
            'default' => '0',
          ),
        ),
        'email_notify' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.email_notify',
          'config' => 
          array (
            'type' => 'input',
            'size' => '4',
            'max' => '4',
          ),
        ),
        'tracking_code' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.tracking_code',
          'config' => 
          array (
            'type' => 'input',
            'size' => '32',
            'max' => '64',
          ),
        ),
        'status' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.status',
          'config' => 
          array (
            'type' => 'input',
            'size' => '4',
            'max' => '4',
          ),
        ),
        'status_log' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.status_log',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '4',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'orderData' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.orderData',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '160',
            'rows' => '160',
            'wrap' => 'off',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'orderHtml' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.orderHtml',
          'config' => 
          array (
            'type' => 'user',
            'size' => '30',
            'db' => 'passthrough',
            'userFunc' => 'EXT:tt_products/hooks/class.tx_ttproducts_hooks_be.php:tx_ttproducts_hooks_be->displayOrderHtml',
            'parameters' => 
            array (
              'format' => 'html',
            ),
          ),
        ),
        'agb' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.agb',
          'config' => 
          array (
            'type' => 'input',
            'size' => '2',
            'max' => '2',
            'readOnly' => '1',
          ),
        ),
        'feusers_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.feusers_uid',
          'config' => 
          array (
            'type' => 'input',
            'size' => '11',
            'max' => '11',
          ),
        ),
        'creditpoints' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.creditpoints',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '10',
          ),
        ),
        'creditpoints_spended' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.creditpoints_spended',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '10',
          ),
        ),
        'creditpoints_saved' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.creditpoints_saved',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '10',
          ),
        ),
        'creditpoints_gifts' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.creditpoints_gifts',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '10',
          ),
        ),
        'desired_date' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.desired_date',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '10',
          ),
        ),
        'desired_time' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.desired_time',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '10',
          ),
        ),
        'note' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'giftservice' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.giftservice',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'foundby' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.foundby',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.foundby.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.foundby.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.foundby.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.foundby.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.foundby.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.foundby.I.5',
                1 => '5',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.foundby.I.6',
                1 => '6',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'giftcode' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.order_code',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'max' => '80',
          ),
        ),
        'date_of_payment' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.date_of_payment',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'date_of_delivery' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.date_of_delivery',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'bill_no' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.bill_no',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'max' => '80',
          ),
        ),
        'radio1' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.radio1',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.radio1.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.radio1.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.radio1.I.2',
                1 => '2',
              ),
            ),
            'default' => '0',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'columnsOverrides' => 
          array (
            'note' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
          ),
          'showitem' => 'hidden,--palette--;;1,name,sys_language_uid,first_name,last_name,company,vat_id,salutation,address,zip,city,country,email,payment,shipping,amount,tax_mode,pay_mode,email_notify,tracking_code,status,business_partner,organisation_form,agb,feusers_uid,creditpoints,creditpoints_spended,creditpoints_saved,creditpoints_gifts,desired_date,desired_time,note,giftservice,foundby,giftcode,date_of_payment,date_of_delivery,bill_no,radio1,--div--;LLL:EXT:tt_products/locallang_db.xml:sys_products_orders.orderHtmlDiv,orderHtml',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'tstamp, crdate',
        ),
      ),
    ),
    'tt_products' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products',
        'label' => 'title',
        'label_alt' => 'subtitle',
        'default_sortby' => 'ORDER BY title',
        'tstamp' => 'tstamp',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'thumbnail' => 'image',
        'useColumnsForDefaultValues' => 'category',
        'mainpalette' => 1,
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products.gif',
        'dividers2tabs' => '1',
        'searchFields' => 'uid,title,subtitle,itemnumber,ean,note,note2,www',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,starttime,endtime,fe_group,title,subtitle,accessory_uid,related_uid,itemnumber,ean,price,price2,creditpoints,graduated_price_uid,tax,article_uid,note,note2,note_uid,text_uid,category,address,inStock,basketminquantity,weight,usebydate,bulkily,offer,highlight,bargain,directcost,color,color2,color3,size,size2,size3,description,gradings,material,quality,additional,unit,unit_factor,www,datasheet,special_preparation,image,sellstarttime,sellendtime,shipping,shipping2,handling',
      ),
      'columns' => 
      array (
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '256',
            'default' => ' ',
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.subtitle',
          'config' => 
          array (
            'type' => 'text',
            'rows' => '3',
            'cols' => '20',
            'max' => '512',
            'default' => NULL,
          ),
        ),
        'prod_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.prod_uid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_products',
            'foreign_table' => 'tt_products',
            'foreign_table_where' => ' ORDER BY tt_products.uid',
            'size' => 3,
            'minitems' => 0,
            'maxitems' => 3,
          ),
        ),
        'itemnumber' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.itemnumber',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'eval' => 'trim',
            'max' => '120',
          ),
        ),
        'ean' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.ean',
          'config' => 
          array (
            'type' => 'input',
            'size' => '48',
            'eval' => 'trim',
            'max' => '48',
          ),
        ),
        'price' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.price',
          'config' => 
          array (
            'type' => 'input',
            'size' => '20',
            'eval' => 'trim,double2',
            'max' => '20',
          ),
        ),
        'price2' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.price2',
          'config' => 
          array (
            'type' => 'input',
            'size' => '20',
            'eval' => 'trim,double2',
            'max' => '20',
          ),
        ),
        'tax' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.tax',
          'config' => 
          array (
            'type' => 'input',
            'size' => '12',
            'max' => '19',
            'eval' => 'trim,double2',
          ),
        ),
        'creditpoints' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.creditpoints',
          'config' => 
          array (
            'type' => 'input',
            'size' => '12',
            'eval' => 'int',
            'max' => '12',
          ),
        ),
        'graduated_price_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.graduated_price_uid',
          'config' => 
          array (
            'type' => 'inline',
            'appearance' => 
            array (
              'collapseAll' => true,
              'newRecordLinkAddTitle' => true,
              'useCombination' => true,
            ),
            'foreign_table' => 'tt_products_mm_graduated_price',
            'foreign_field' => 'product_uid',
            'foreign_sortby' => 'productsort',
            'foreign_label' => 'graduated_price_uid',
            'foreign_selector' => 'graduated_price_uid',
            'foreign_unique' => 'graduated_price_uid',
            'maxitems' => 10,
          ),
        ),
        'note' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'default' => NULL,
          ),
        ),
        'note2' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note2',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '2',
            'default' => NULL,
          ),
        ),
        'note_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note_uid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'MM' => 'tt_products_products_note_pages_mm',
            'size' => '2',
            'autoSizeMax' => '12',
            'minitems' => '0',
            'maxitems' => '30',
          ),
        ),
        'text_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.text_uid',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tt_products_texts',
            'foreign_field' => 'parentid',
            'foreign_table_field' => 'parenttable',
            'maxitems' => 20,
          ),
        ),
        'unit_factor' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.unit_factor',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'eval' => 'double',
            'default' => '1',
            'max' => '6',
          ),
        ),
        'unit' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.unit',
          'config' => 
          array (
            'type' => 'input',
            'size' => '20',
            'eval' => 'trim',
            'max' => '20',
          ),
        ),
        'www' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => '30',
            'max' => '160',
          ),
        ),
        'category' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tt_products_cat',
            'foreign_table_where' => '',
          ),
        ),
        'inStock' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.inStock',
          'config' => 
          array (
            'type' => 'input',
            'size' => '6',
            'max' => '6',
            'eval' => 'int',
            'default' => '1',
          ),
        ),
        'basketminquantity' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.basketminquantity',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'eval' => 'trim,double2',
            'max' => '10',
          ),
        ),
        'datasheet' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.datasheet',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'doc,htm,html,pdf,sxw,txt,xls,gif,jpg,png',
            'max_size' => NULL,
            'uploadfolder' => 'uploads/tx_ttproducts/datasheet',
            'size' => '3',
            'maxitems' => '20',
            'minitems' => '0',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'weight' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.weight',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '20',
            'eval' => 'trim,tx_double6',
          ),
        ),
        'usebydate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.usebydate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'bulkily' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.bulkily',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'offer' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.offer',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'highlight' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.highlight',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'bargain' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.bargain',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'directcost' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.directcost',
          'config' => 
          array (
            'type' => 'input',
            'size' => '12',
            'eval' => 'trim,double2',
            'max' => '20',
          ),
        ),
        'accessory_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.accessory_uid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_products',
            'MM' => 'tt_products_accessory_products_products_mm',
            'foreign_table' => 'tt_products',
            'foreign_table_where' => ' ORDER BY tt_products.uid',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 12,
          ),
        ),
        'related_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.related_uid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_products',
            'MM' => 'tt_products_related_products_products_mm',
            'foreign_table' => 'tt_products',
            'foreign_table_where' => ' ORDER BY tt_products.uid',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 50,
          ),
        ),
        'color' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.color',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'color2' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.color2',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'color3' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.color3',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'size' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.size',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'size2' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.size2',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'size3' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.size3',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'description' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'gradings' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.gradings',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'material' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.material',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'quality' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.quality',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'additional_type' => 
        array (
          'label' => 'LLL:EXT:cms/locallang_ttc.php:list_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
            'default' => '',
            'authMode' => 'explicitAllow',
          ),
        ),
        'additional' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.additional',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'additional_type',
            'ds' => 
            array (
              'default' => '
						<T3DataStructure>
							<ROOT>
								<type>array</type>
								<el>
								<isSingle>
									<TCEforms>
										<label>LLL:EXT:tt_products/locallang_db.xml:tt_products.additional.isSingle</label>
										<config>
											<type>check</type>
										</config>
									</TCEforms>
								</isSingle>
								<isImage>
									<TCEforms>
										<label>LLL:EXT:tt_products/locallang_db.xml:tt_products.additional.isImage</label>
										<config>
											<type>check</type>
										</config>
									</TCEforms>
								</isImage>
								<alwaysInStock>
									<TCEforms>
										<label>LLL:EXT:tt_products/locallang_db.xml:tt_products.additional.alwaysInStock</label>
										<config>
											<type>check</type>
										</config>
									</TCEforms>
								</alwaysInStock>
								<noMinPrice>
									<TCEforms>
										<label>LLL:EXT:tt_products/locallang_db.xml:tt_products.additional.noMinPrice</label>
										<config>
											<type>check</type>
										</config>
									</TCEforms>
								</noMinPrice>
								<noGiftService>
									<TCEforms>
										<label>LLL:EXT:tt_products/locallang_db.xml:tt_products.additional.noGiftService</label>
										<config>
											<type>check</type>
										</config>
									</TCEforms>
								</noGiftService>
								</el>
							</ROOT>
							<meta>
								<langDisable>1</langDisable>
							</meta>
						</T3DataStructure>
						',
            ),
            'eval' => 'null',
          ),
        ),
        'special_preparation' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.special_preparation',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'image' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'max_size' => NULL,
            'uploadfolder' => 'uploads/pics',
            'size' => '5',
            'maxitems' => '30',
            'minitems' => '0',
            'default' => NULL,
          ),
        ),
        'shipping' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.shipping',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '20',
            'eval' => 'trim,double2',
          ),
        ),
        'shipping2' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.shipping2',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '20',
            'eval' => 'trim,double2',
          ),
        ),
        'handling' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.handling',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '20',
            'eval' => 'trim,double2',
          ),
        ),
        'delivery' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.delivery',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.delivery.availableNot',
                1 => '-1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.delivery.availableDemand',
                1 => '0',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.delivery.availableImmediate',
                1 => '1',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.delivery.availableShort',
                1 => '2',
              ),
            ),
            'size' => '6',
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'sellstarttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.sellstarttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'sellendtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.sellendtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => false,
              'lower' => 1532383200,
            ),
          ),
        ),
        'address' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'fe_users',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'columnsOverrides' => 
          array (
            'note' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
            'note2' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
          ),
          'showitem' => 'title,--palette--;;7,itemnumber,--palette--;;2,category,address,price,--palette--;;3,tax,--palette--;;4,offer,--palette--;;6,weight,--palette--;;8,creditpoints,hidden,--palette--;;1,--div--;LLL:EXT:tt_products/locallang_db.xml:tt_products.descriptions,note,note2,note_uid,text_uid,image,datasheet,--div--;LLL:EXT:tt_products/locallang_db.xml:tt_products.variants,color,color2,--palette--;;9,size,size2,--palette--;;10,description,gradings,material,quality,--palette--,additional,--palette--;;11,--div--;LLL:EXT:tt_products/locallang_db.xml:tt_products.graduated,graduated_price_uid,--div--;LLL:EXT:tt_products/locallang_db.xml:tt_products.relations,related_uid,accessory_uid,--div--;LLL:EXT:tt_products/locallang_db.xml:tt_products.shippingdiv,shipping,shipping2,handling,delivery',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'sellstarttime,sellendtime,starttime,endtime,fe_group',
        ),
        2 => 
        array (
          'showitem' => 'inStock,basketminquantity,ean',
        ),
        3 => 
        array (
          'showitem' => 'price2,directcost',
        ),
        4 => 
        array (
          'showitem' => 'tax_dummy',
        ),
        6 => 
        array (
          'showitem' => 'highlight,bargain',
        ),
        7 => 
        array (
          'showitem' => 'subtitle,www',
        ),
        8 => 
        array (
          'showitem' => 'bulkily,special_preparation,unit,unit_factor',
        ),
        9 => 
        array (
          'showitem' => 'color3',
        ),
        10 => 
        array (
          'showitem' => 'size3',
        ),
        11 => 
        array (
          'showitem' => 'usebydate',
        ),
      ),
    ),
    'tt_products_articles' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_articles',
        'label' => 'title',
        'label_alt' => 'subtitle',
        'default_sortby' => 'ORDER BY title',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'thumbnail' => 'image',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products_articles.gif',
        'dividers2tabs' => '1',
        'searchFields' => 'title,subtitle,itemnumber,note,note2',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,starttime,endtime,fe_group,title,subtitle,uid_product,itemnumber,price,price2,weight,inStock,basketminquantity,color,color2,color3,size,size2,size3,description,gradings,material,quality,note,note2,image',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
            'eval' => 'trim',
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.subtitle',
          'config' => 
          array (
            'type' => 'text',
            'rows' => '3',
            'cols' => '20',
            'max' => '512',
          ),
        ),
        'itemnumber' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.itemnumber',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'eval' => 'trim',
            'max' => '120',
          ),
        ),
        'price' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.price',
          'config' => 
          array (
            'type' => 'input',
            'size' => '12',
            'eval' => 'trim,double2',
            'max' => '20',
          ),
        ),
        'price2' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.price2',
          'config' => 
          array (
            'type' => 'input',
            'size' => '12',
            'eval' => 'trim,double2',
            'max' => '20',
          ),
        ),
        'note' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'note2' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note2',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'inStock' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.inStock',
          'config' => 
          array (
            'type' => 'input',
            'size' => '6',
            'max' => '6',
            'eval' => 'int',
            'default' => '1',
          ),
        ),
        'basketminquantity' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.basketminquantity',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'eval' => 'trim,double2',
            'max' => '10',
          ),
        ),
        'weight' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.weight',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '20',
            'eval' => 'trim,tx_double6',
          ),
        ),
        'color' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.color',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'default' => NULL,
            'eval' => 'null',
          ),
        ),
        'color2' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.color2',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'color3' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.color3',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'size' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.size',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'size2' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.size2',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'size3' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.size3',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'description' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'gradings' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.gradings',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'material' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.material',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'quality' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.quality',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '46',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'config_type' => 
        array (
          'label' => 'LLL:EXT:cms/locallang_ttc.php:list_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
            'default' => '',
            'authMode' => 'explicitAllow',
          ),
        ),
        'config' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_articles.config',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'config_type',
            'ds' => 
            array (
              'default' => '
						<T3DataStructure>
							<ROOT>
								<type>array</type>
								<el>
								<isAddedPrice>
									<TCEforms>
										<label>LLL:EXT:tt_products/locallang_db.xml:tt_products_articles.config.isaddedprice</label>
										<config>
											<type>check</type>
										</config>
									</TCEforms>
								</isAddedPrice>
								</el>
							</ROOT>
							<meta>
								<langDisable>1</langDisable>
							</meta>
						</T3DataStructure>
						',
            ),
            'eval' => 'null',
          ),
        ),
        'image' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'max_size' => NULL,
            'uploadfolder' => 'uploads/pics',
            'size' => '3',
            'maxitems' => '10',
            'minitems' => '0',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'uid_product' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_articles.uid_product',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_products',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'columnsOverrides' => 
          array (
            'note' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
            'note2' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
          ),
          'showitem' => 'hidden,--palette--;;1,uid_product,title,--palette--;;3,itemnumber,inStock,basketminquantity,price,--palette--;;2,weight,color,color2,color3,size,size2,size3,description,gradings,material,quality,note,note2,image',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, fe_group',
        ),
        2 => 
        array (
          'showitem' => 'price2, config',
        ),
        3 => 
        array (
          'showitem' => 'subtitle',
        ),
      ),
    ),
    'tt_products_articles_language' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_articles_language',
        'label' => 'title',
        'label_alt' => 'subtitle',
        'default_sortby' => 'ORDER BY title',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products_articles_language.gif',
        'languageField' => 'sys_language_uid',
        'mainpalette' => 1,
        'searchFields' => 'title,subtitle,itemnumber,note,note2',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid,hidden,starttime,endtime,fe_group,article_uid,title,subtitle,note,note2',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'article_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_articles_language.article_uid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_products_articles',
            'foreign_table' => 'tt_products_articles',
            'foreign_table_where' => 'AND tt_products_articles.pid IN (###CURRENT_PID###,###STORAGE_PID###) ORDER BY tt_products_articles.title',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '256',
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'subtitle' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.subtitle',
          'config' => 
          array (
            'type' => 'text',
            'rows' => '3',
            'cols' => '20',
            'max' => '512',
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'note' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'note2' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note2',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'columnsOverrides' => 
          array (
            'note' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
            'note2' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
          ),
          'showitem' => 'sys_language_uid,l18n_diffsource,hidden,--palette--;;1,article_uid,title,--palette--;;2,note,note2',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime,endtime,fe_group',
        ),
        2 => 
        array (
          'showitem' => 'subtitle',
        ),
      ),
    ),
    'tt_products_cat' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_cat',
        'label' => 'title',
        'label_alt' => 'subtitle',
        'default_sortby' => ' ORDER BY title',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'thumbnail' => 'image',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products_cat.gif',
        'searchFields' => 'uid,title,subtitle,note,note2',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,starttime,endtime,fe_group,title, subtitle, note, note2, image, email_uid',
      ),
      'columns' => 
      array (
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '256',
            'default' => ' ',
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.subtitle',
          'config' => 
          array (
            'type' => 'text',
            'rows' => '3',
            'cols' => '20',
            'max' => '512',
            'default' => NULL,
          ),
        ),
        'note' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'note2' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note2',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'image' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'max_size' => NULL,
            'uploadfolder' => 'uploads/pics',
            'size' => '3',
            'maxitems' => '10',
            'minitems' => '0',
            'eval' => 'null',
            'default' => NULL,
          ),
        ),
        'email_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_cat.email_uid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_products_emails',
            'foreign_table' => 'tt_products_emails',
            'foreign_table_where' => ' ORDER BY tt_products_emails.name',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'columnsOverrides' => 
          array (
            'note' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
            'note2' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
          ),
          'showitem' => 'title,subtitle,note,note2,email_uid,image,hidden,--palette--;;1',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, fe_group',
        ),
      ),
    ),
    'tt_products_cat_language' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_cat_language',
        'label' => 'title',
        'label_alt' => 'subtitle',
        'default_sortby' => 'ORDER BY title',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products_cat_language.gif',
        'languageField' => 'sys_language_uid',
        'mainpalette' => 1,
        'searchFields' => 'title,subtitle,catid,note,note2',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid,l18n_diffsource,hidden,starttime,endtime,fe_group,title,subtitle,note,note2,cat_uid',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '256',
            'default' => ' ',
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'subtitle' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.subtitle',
          'config' => 
          array (
            'type' => 'text',
            'rows' => '3',
            'cols' => '20',
            'max' => '512',
            'eval' => 'null',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'note' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'note2' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note2',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'eval' => 'null',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'cat_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_cat_language.cat_uid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_products_cat',
            'foreign_table' => 'tt_products_cat',
            'foreign_table_where' => 'AND tt_products_cat.pid IN (###CURRENT_PID###,###STORAGE_PID###) ORDER BY tt_products_cat.uid',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'columnsOverrides' => 
          array (
            'note' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
            'note2' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
          ),
          'showitem' => 'sys_language_uid,l18n_diffsource,hidden,--palette--;;1,cat_uid,title,subtitle,note,note2',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, fe_group',
        ),
      ),
    ),
    'tt_products_emails' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_emails',
        'label' => 'name',
        'default_sortby' => 'ORDER BY name',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'mainpalette' => 1,
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products_emails.gif',
        'searchFields' => 'name,email',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'name,email,hidden,starttime,endtime,fe_group',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '80',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'hidden,--palette--;;1,name,email',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, fe_group',
        ),
      ),
    ),
    'tt_products_graduated_price' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_graduated_price',
        'label' => 'title',
        'default_sortby' => 'ORDER BY title',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products_cat.gif',
        'searchFields' => 'title,note',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,formula,startamount,note,parentid,items',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_graduated_price.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_graduated_price.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '256',
            'default' => ' ',
          ),
        ),
        'formula' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_graduated_price.formula',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '1',
            'default' => NULL,
          ),
        ),
        'startamount' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_graduated_price.startamount',
          'config' => 
          array (
            'type' => 'input',
            'size' => '12',
            'eval' => 'trim,double2',
            'max' => '20',
          ),
        ),
        'note' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '2',
            'default' => NULL,
          ),
        ),
        'items' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_graduated_price.items',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tt_products_mm_graduated_price',
            'foreign_field' => 'graduated_price_uid',
            'foreign_sortby' => 'graduatedsort',
            'foreign_label' => 'product_uid',
            'size' => 6,
            'minitems' => 0,
            'maxitems' => 100,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'columnsOverrides' => 
          array (
            'note' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
          ),
          'showitem' => 'hidden,--palette--;;1,title,formula,startamount,note,items',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, fe_group',
        ),
      ),
    ),
    'tt_products_language' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_language',
        'label' => 'title',
        'label_alt' => 'subtitle',
        'default_sortby' => 'ORDER BY title',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products_language.gif',
        'languageField' => 'sys_language_uid',
        'mainpalette' => 1,
        'searchFields' => 'title,subtitle,itemnumber,ean,note,note2,www',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid,hidden,starttime,endtime,prod_uid,title,subtitle,unit,note,note2',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'prod_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_language.prod_uid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_products',
            'foreign_table' => 'tt_products',
            'foreign_table_where' => 'AND tt_products.pid IN (###CURRENT_PID###,###STORAGE_PID###) ORDER BY tt_products.uid',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '256',
            'default' => ' ',
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'subtitle' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.subtitle',
          'config' => 
          array (
            'type' => 'text',
            'rows' => '3',
            'cols' => '20',
            'max' => '512',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'itemnumber' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.itemnumber',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'eval' => 'trim',
            'max' => '120',
          ),
        ),
        'unit' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.unit',
          'config' => 
          array (
            'type' => 'input',
            'size' => '20',
            'eval' => 'trim',
            'max' => '20',
          ),
        ),
        'note' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'note2' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note2',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '2',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'columnsOverrides' => 
          array (
            'note' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
            'note2' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
          ),
          'showitem' => 'sys_language_uid,l18n_diffsource,hidden,--palette--;;1,prod_uid,title,--palette--;;2,unit,note,note2',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime,endtime,fe_group',
        ),
        2 => 
        array (
          'showitem' => 'subtitle, itemnumber',
        ),
      ),
    ),
    'tt_products_mm_graduated_price' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_mm_graduated_price',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products_cat.gif',
        'hideTable' => true,
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'product_uid,graduated_price_uid',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'product_uid' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_mm_graduated_price.product_uid',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_products',
            'maxitems' => 1,
          ),
        ),
        'graduated_price_uid' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_mm_graduated_price.graduated_price_uid',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_products_graduated_price',
            'maxitems' => 1,
          ),
        ),
        'productsort' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'graduatedsort' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'hidden,--palette--;;1,product_uid,graduated_price_uid',
        ),
      ),
    ),
    'tt_products_texts' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_texts',
        'label' => 'title',
        'default_sortby' => 'ORDER BY title',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products_texts.gif',
        'searchFields' => 'title,marker,note',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,marker,note',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '256',
            'default' => ' ',
          ),
        ),
        'marker' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_texts.marker',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '256',
          ),
        ),
        'note' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'default' => NULL,
          ),
        ),
        'parentid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_texts.parentid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_products',
            'prepend_tname' => false,
            'foreign_table_where' => 'AND tt_products.pid IN (###CURRENT_PID###,###STORAGE_PID###) ORDER BY tt_products.title',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'parenttable' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_texts.parenttable',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'tt_products',
                1 => 'tt_products',
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'columnsOverrides' => 
          array (
            'note' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
          ),
          'showitem' => 'hidden,--palette--;;1,title,marker,note,parentid,parenttable',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime,endtime,fe_group',
        ),
      ),
    ),
    'tt_products_texts_language' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_texts_language',
        'label' => 'title',
        'default_sortby' => 'ORDER BY title',
        'tstamp' => 'tstamp',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'iconfile' => 'EXT:tt_products/res/icons/table/tt_products_texts_language.gif',
        'languageField' => 'sys_language_uid',
        'searchFields' => 'title,note',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid,hidden,starttime,endtime,fe_group,title,note',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tstamp',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:crdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1830207600,
              'lower' => 1532383200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '40',
            'max' => '256',
            'default' => ' ',
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'note' => 
        array (
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '48',
            'rows' => '5',
            'default' => NULL,
          ),
          'l10n_mode' => 'prefixLangTitle',
        ),
        'text_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:tt_products/locallang_db.xml:tt_products_texts_language.text_uid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_products_texts',
            'foreign_table' => 'tt_products_texts',
            'foreign_table_where' => 'AND tt_products_texts.pid IN (###CURRENT_PID###,###STORAGE_PID###) ORDER BY tt_products_texts.uid',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'columnsOverrides' => 
          array (
            'note' => 
            array (
              'config' => 
              array (
                'enableRichtext' => '1',
              ),
            ),
          ),
          'showitem' => 'sys_language_uid,l18n_diffsource,hidden,--palette--;;1,text_uid,title,note,parenttable',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, fe_group',
        ),
      ),
    ),
    'static_countries' => 
    array (
      'ctrl' => 
      array (
        'label' => 'cn_short_en',
        'label_alt' => 'cn_iso_2',
        'label_alt_force' => 1,
        'label_userFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\FormDataProvider\\TcaLabelProcessor->addIsoCodeToLabel',
        'adminOnly' => true,
        'rootLevel' => 1,
        'is_static' => 1,
        'readOnly' => 1,
        'default_sortby' => 'ORDER BY cn_short_en',
        'delete' => 'deleted',
        'title' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries.title',
        'iconfile' => 'EXT:static_info_tables/Resources/Public/Images/Icons/static_countries.svg',
        'searchFields' => 'cn_short_en,cn_official_name_local,cn_official_name_en',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'cn_iso_2,cn_iso_3,cn_iso_nr,cn_official_name_local,cn_official_name_en,cn_capital,cn_tldomain,cn_currency_iso_3,cn_currency_iso_nr,cn_phone,cn_uno_member,cn_eu_member,cn_address_format,cn_short_en',
      ),
      'columns' => 
      array (
        'deleted' => 
        array (
          'readonly' => 1,
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:deleted',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'cn_iso_2' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_iso_2',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '4',
            'max' => '2',
            'eval' => '',
            'default' => '',
          ),
        ),
        'cn_iso_3' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_iso_3',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '5',
            'max' => '3',
            'eval' => '',
            'default' => '',
          ),
        ),
        'cn_iso_nr' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_iso_nr',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '7',
            'max' => '7',
            'eval' => 'int',
            'default' => '0',
          ),
        ),
        'cn_parent_territory_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_parent_territory_uid',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'static_territories',
            'foreign_table_where' => 'ORDER BY static_territories.tr_name_en',
            'itemsProcFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\FormDataProvider\\TcaSelectItemsProcessor->translateTerritoriesSelector',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'cn_parent_tr_iso_nr' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'cn_official_name_local' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_official_name_local',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '25',
            'max' => '128',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'cn_official_name_en' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_official_name_en',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '25',
            'max' => '50',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'cn_capital' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_capital',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '15',
            'max' => '45',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'cn_tldomain' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_tldomain',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '5',
            'max' => '',
            'eval' => '',
            'default' => '',
          ),
        ),
        'cn_currency_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_currency_uid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'static_currencies',
            'foreign_table' => 'static_currencies',
            'foreign_table_where' => 'ORDER BY static_currencies.cu_name_en',
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'pidList' => '0',
              ),
            ),
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
              'tableList' => 
              array (
                'disabled' => true,
              ),
            ),
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'cn_currency_iso_nr' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'cn_currency_iso_3' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'cn_phone' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_phone',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'max' => '20',
            'eval' => '',
            'default' => '0',
          ),
        ),
        'cn_eu_member' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_eu_member',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'cn_uno_member' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_uno_member',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'cn_address_format' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_address_format',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_address_format_1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_address_format_2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_address_format_3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_address_format_4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_address_format_5',
                1 => '5',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_address_format_6',
                1 => '6',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_address_format_7',
                1 => '7',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_address_format_8',
                1 => '8',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_address_format_9',
                1 => '9',
              ),
            ),
            'default' => '0',
          ),
        ),
        'cn_zone_flag' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_zone_flag',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'cn_short_local' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_short_local',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '25',
            'max' => '50',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'cn_short_en' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_short_en',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '25',
            'max' => '50',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'cn_country_zones' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_country_zones',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'static_country_zones',
            'foreign_field' => 'zn_country_uid',
            'foreign_table_field' => 'zn_country_table',
            'foreign_default_sortby' => 'zn_name_local',
            'maxitems' => '200',
            'appearance' => 
            array (
              'expandSingle' => 1,
              'newRecordLinkAddTitle' => 1,
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'cn_short_local,cn_official_name_local,cn_official_name_en,--palette--;;1,--palette--;;5,--palette--;;2,--palette--;;3,--palette--;;6,--palette--;;4,cn_short_en,cn_country_zones',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'cn_iso_nr,cn_iso_2,cn_iso_3',
          'canNotCollapse' => '1',
        ),
        2 => 
        array (
          'showitem' => 'cn_currency_uid,cn_currency_iso_nr,cn_currency_iso_3',
          'canNotCollapse' => '1',
        ),
        3 => 
        array (
          'showitem' => 'cn_capital,cn_uno_member,cn_eu_member',
          'canNotCollapse' => '1',
        ),
        4 => 
        array (
          'showitem' => 'cn_address_format,cn_zone_flag',
          'canNotCollapse' => '1',
        ),
        5 => 
        array (
          'showitem' => 'cn_parent_territory_uid,cn_parent_tr_iso_nr',
          'canNotCollapse' => '1',
        ),
        6 => 
        array (
          'showitem' => 'cn_phone,cn_tldomain',
          'canNotCollapse' => '1',
        ),
      ),
    ),
    'static_country_zones' => 
    array (
      'ctrl' => 
      array (
        'label' => 'zn_name_local',
        'label_alt' => 'zn_name_local,zn_code',
        'adminOnly' => true,
        'rootLevel' => 1,
        'is_static' => 1,
        'readOnly' => 1,
        'default_sortby' => 'ORDER BY zn_name_local',
        'delete' => 'deleted',
        'title' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_country_zones.title',
        'iconfile' => 'EXT:static_info_tables/Resources/Public/Images/Icons/static_country_zones.svg',
        'searchFields' => 'zn_name_en,zn_name_local',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'zn_country_iso_nr,zn_country_iso_2,zn_country_iso_3,zn_code,zn_name_local,zn_name_en',
      ),
      'columns' => 
      array (
        'deleted' => 
        array (
          'readonly' => 1,
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:deleted',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'zn_country_uid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'zn_country_table' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'zn_country_iso_nr' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'zn_country_iso_2' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'zn_country_iso_3' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'zn_code' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_country_zones_item.zn_code',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '18',
            'max' => '45',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'zn_name_local' => 
        array (
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.name',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '18',
            'max' => '45',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'zn_name_en' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_country_zones_item.zn_name_en',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '18',
            'max' => '45',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'zn_name_local,zn_code,--palette--;;1,zn_name_en',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'zn_country_uid,zn_country_iso_nr,zn_country_iso_2,zn_country_iso_3',
          'canNotCollapse' => '1',
        ),
      ),
    ),
    'static_currencies' => 
    array (
      'ctrl' => 
      array (
        'label' => 'cu_name_en',
        'label_alt' => 'cu_iso_3',
        'label_alt_force' => 1,
        'label_userFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\FormDataProvider\\TcaLabelProcessor->addIsoCodeToLabel',
        'adminOnly' => true,
        'rootLevel' => 1,
        'is_static' => 1,
        'readOnly' => 1,
        'default_sortby' => 'ORDER BY cu_name_en',
        'delete' => 'deleted',
        'title' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies.title',
        'iconfile' => 'EXT:static_info_tables/Resources/Public/Images/Icons/static_currencies.svg',
        'searchFields' => 'cu_name_en',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'cu_iso_3,cu_iso_nr,cu_name_en,cu_symbol_left,cu_symbol_right,cu_thousands_point,cu_decimal_point,cu_decimal_digits,cu_sub_name_en,cu_sub_divisor,cu_sub_symbol_left,cu_sub_symbol_right',
      ),
      'columns' => 
      array (
        'deleted' => 
        array (
          'readonly' => 1,
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:deleted',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'cu_iso_3' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_iso_3',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '5',
            'max' => '3',
            'eval' => '',
            'default' => '',
          ),
        ),
        'cu_iso_nr' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_iso_nr',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '7',
            'max' => '3',
            'eval' => '',
            'default' => '0',
          ),
        ),
        'cu_name_en' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_name_en',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '18',
            'max' => '40',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'cu_sub_name_en' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_sub_name_en',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '18',
            'max' => '20',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'cu_symbol_left' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_symbol_left',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'max' => '12',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'cu_symbol_right' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_symbol_right',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'max' => '12',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'cu_thousands_point' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_thousands_point',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '3',
            'max' => '1',
            'eval' => '',
            'default' => '',
          ),
        ),
        'cu_decimal_point' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_decimal_point',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '3',
            'max' => '1',
            'eval' => '',
            'default' => '',
          ),
        ),
        'cu_decimal_digits' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_decimal_digits',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '5',
            'max' => '',
            'eval' => 'int',
            'default' => '',
          ),
        ),
        'cu_sub_divisor' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_sub_divisor',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'max' => '20',
            'eval' => 'int',
            'default' => '1',
          ),
        ),
        'cu_sub_symbol_left' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_sub_symbol_left',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'max' => '12',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'cu_sub_symbol_right' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_currencies_item.cu_sub_symbol_right',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'max' => '12',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'cu_name_en,--palette--;;1,--palette--;;2,cu_sub_name_en,--palette--;;3',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'cu_iso_nr,cu_iso_3',
          'canNotCollapse' => '1',
        ),
        2 => 
        array (
          'showitem' => 'cu_symbol_left,cu_symbol_right,cu_thousands_point,cu_decimal_point',
          'canNotCollapse' => '1',
        ),
        3 => 
        array (
          'showitem' => 'cu_sub_symbol_left,cu_sub_symbol_right,cu_decimal_digits,cu_sub_divisor',
          'canNotCollapse' => '1',
        ),
      ),
    ),
    'static_languages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'lg_name_en',
        'label_alt' => 'lg_iso_2',
        'label_alt_force' => 1,
        'label_userFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\FormDataProvider\\TcaLabelProcessor->addIsoCodeToLabel',
        'adminOnly' => true,
        'rootLevel' => 1,
        'is_static' => 1,
        'readOnly' => 1,
        'default_sortby' => 'ORDER BY lg_name_en',
        'delete' => 'deleted',
        'title' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_languages.title',
        'iconfile' => 'EXT:static_info_tables/Resources/Public/Images/Icons/static_languages.svg',
        'searchFields' => 'lg_name_en,lg_name_local',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'lg_name_local,lg_name_en,lg_iso_2,lg_typo3,lg_country_iso_2,lg_collate_locale,lg_sacred,lg_constructed',
      ),
      'columns' => 
      array (
        'deleted' => 
        array (
          'readonly' => 1,
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:deleted',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'lg_iso_2' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_languages_item.lg_iso_2',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '4',
            'max' => '2',
            'eval' => '',
            'default' => '',
          ),
        ),
        'lg_name_local' => 
        array (
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.name',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '25',
            'max' => '50',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'lg_name_en' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_languages_item.lg_name_en',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '18',
            'max' => '40',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
        'lg_typo3' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_languages_item.lg_typo3',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '3',
            'max' => '2',
            'eval' => '',
            'default' => '',
          ),
        ),
        'lg_country_iso_2' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_countries_item.cn_iso_2',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '3',
            'max' => '2',
            'eval' => '',
            'default' => '',
          ),
        ),
        'lg_collate_locale' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_languages_item.lg_collate_locale',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '5',
            'max' => '5',
            'eval' => '',
            'default' => '',
          ),
        ),
        'lg_sacred' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_languages_item.lg_sacred',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'lg_constructed' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_languages_item.lg_constructed',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'lg_name_local,lg_name_en,lg_iso_2,lg_typo3,lg_country_iso_2,lg_collate_locale,lg_sacred,lg_constructed',
        ),
      ),
    ),
    'static_territories' => 
    array (
      'ctrl' => 
      array (
        'label' => 'tr_name_en',
        'label_alt' => 'tr_iso_nr',
        'label_alt_force' => 1,
        'label_userFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\FormDataProvider\\TcaLabelProcessor->addIsoCodeToLabel',
        'adminOnly' => true,
        'rootLevel' => 1,
        'is_static' => 1,
        'readOnly' => 1,
        'default_sortby' => 'ORDER BY tr_name_en',
        'delete' => 'deleted',
        'title' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_territories.title',
        'iconfile' => 'EXT:static_info_tables/Resources/Public/Images/Icons/static_territories.svg',
        'searchFields' => 'tr_name_en',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'tr_iso_nr,tr_parent_iso_nr,tr_name_en',
      ),
      'columns' => 
      array (
        'deleted' => 
        array (
          'readonly' => 1,
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:deleted',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'tr_iso_nr' => 
        array (
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_territories_item.tr_iso_nr',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '7',
            'max' => '7',
            'eval' => 'int',
            'default' => '0',
          ),
        ),
        'tr_parent_territory_uid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:static_info_tables/Resources/Private/Language/locallang_db.xlf:static_territories_item.tr_parent_territory_uid',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'static_territories',
            'foreign_table_where' => 'ORDER BY static_territories.tr_name_en',
            'itemsProcFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\FormDataProvider\\TcaSelectItemsProcessor->translateTerritoriesSelector',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'tr_parent_iso_nr' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tr_name_en' => 
        array (
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.name',
          'exclude' => '0',
          'config' => 
          array (
            'type' => 'input',
            'size' => '18',
            'max' => '45',
            'eval' => 'trim',
            'default' => '',
            '_is_string' => '1',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'tr_iso_nr,tr_name_en,fk_billing_country,--palette--;;1',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'tr_parent_territory_uid,tr_parent_iso_nr',
          'canNotCollapse' => '1',
        ),
      ),
    ),
  ),
  'categoryRegistry' => 'O:40:"TYPO3\\CMS\\Core\\Category\\CategoryRegistry":4:{s:11:"' . "\0" . '*' . "\0" . 'registry";a:3:{s:5:"pages";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}s:17:"sys_file_metadata";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}s:10:"tt_content";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}}s:13:"' . "\0" . '*' . "\0" . 'extensions";a:1:{s:4:"core";a:3:{s:5:"pages";a:1:{s:10:"categories";s:10:"categories";}s:17:"sys_file_metadata";a:1:{s:10:"categories";s:10:"categories";}s:10:"tt_content";a:1:{s:10:"categories";s:10:"categories";}}}s:20:"' . "\0" . '*' . "\0" . 'addedCategoryTabs";a:3:{s:5:"pages";s:5:"pages";s:17:"sys_file_metadata";s:17:"sys_file_metadata";s:10:"tt_content";s:10:"tt_content";}s:11:"' . "\0" . '*' . "\0" . 'template";s:68:"


CREATE TABLE %s (
  %s int(11) DEFAULT \'0\' NOT NULL
);


";}',
);
#