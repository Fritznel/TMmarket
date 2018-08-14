<?php
/**
 * Compiled ext_localconf.php cache file
 */

global $TYPO3_CONF_VARS, $T3_SERVICES, $T3_VAR;

/**
 * Extension: core
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/core/ext_localconf.php
 */

$_EXTKEY = 'core';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

/** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);

// FAL security checks for backend users
$signalSlotDispatcher->connect(
    \TYPO3\CMS\Core\Resource\ResourceFactory::class,
    \TYPO3\CMS\Core\Resource\ResourceFactoryInterface::SIGNAL_PostProcessStorage,
    \TYPO3\CMS\Core\Resource\Security\StoragePermissionsAspect::class,
    'addUserPermissionsToStorage'
);

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Hooks\BackendUserGroupIntegrityCheck::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/alt_doc.php']['makeEditForm_accessCheck'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class . '->isAllowedToShowEditForm';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms_inline.php']['checkAccess'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class . '->isAllowedToShowEditForm';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class;

    // PACKAGE MANAGEMENT
    $signalSlotDispatcher->connect(
        'PackageManagement',
        'packagesMayHaveChanged',
        \TYPO3\CMS\Core\Package\PackageManager::class,
        'scanAvailablePackages'
    );
}

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\ResourceStorageInterface::SIGNAL_PostFileDelete,
    \TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect::class,
    'removeFromRepository'
);

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\ResourceStorageInterface::SIGNAL_PostFileAdd,
    \TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect::class,
    'cleanupProcessedFilesPostFileAdd'
);

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\ResourceStorageInterface::SIGNAL_PostFileReplace,
    \TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect::class,
    'cleanupProcessedFilesPostFileReplace'
);

if (!\TYPO3\CMS\Core\Core\Bootstrap::usesComposerClassLoading()) {
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
        'afterExtensionInstall',
        \TYPO3\CMS\Core\Core\ClassLoadingInformation::class,
        'dumpClassLoadingInformation'
    );
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
        'afterExtensionUninstall',
        \TYPO3\CMS\Core\Core\ClassLoadingInformation::class,
        'dumpClassLoadingInformation'
    );
}
$signalSlotDispatcher->connect(
    TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\Service\FileProcessingService::SIGNAL_PreFileProcess,
    \TYPO3\CMS\Core\Resource\OnlineMedia\Processing\PreviewProcessing::class,
    'processFile'
);

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Install\Service\SqlExpectedSchemaService::class,
    'tablesDefinitionIsBeingBuilt',
    \TYPO3\CMS\Core\DataHandling\DatabaseSchemaService::class,
    'getLocalizationRequiredDatabaseSchema'
);

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
    'tablesDefinitionIsBeingBuilt',
    \TYPO3\CMS\Core\DataHandling\DatabaseSchemaService::class,
    'getLocalizationRequiredDatabaseSchemaForExtension'
);

unset($signalSlotDispatcher);

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dumpFile'] = \TYPO3\CMS\Core\Controller\FileDumpController::class . '::dumpAction';

/** @var \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry $rendererRegistry */
$rendererRegistry = \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry::getInstance();
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer::class);
unset($rendererRegistry);

$textExtractorRegistry = \TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry::getInstance();
$textExtractorRegistry->registerTextExtractor(\TYPO3\CMS\Core\Resource\TextExtraction\PlainTextExtractor::class);
unset($textExtractorRegistry);

$extractorRegistry = \TYPO3\CMS\Core\Resource\Index\ExtractorRegistry::getInstance();
$extractorRegistry->registerExtractionService(\TYPO3\CMS\Core\Resource\OnlineMedia\Metadata\Extractor::class);
unset($extractorRegistry);


/**
 * Extension: extbase
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/extbase/ext_localconf.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// We set the default implementation for Storage Backend & Query Settings in Backend and Frontend.
// The code below is NO PUBLIC API!
/** @var $extbaseObjectContainer \TYPO3\CMS\Extbase\Object\Container\Container */
$extbaseObjectContainer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class);
// Singleton
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\QueryInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\Query::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\QueryResultInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\QueryResult::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\PersistenceManagerInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\Generic\Storage\BackendInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\Storage\Typo3DbBackend::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings::class);
unset($extbaseObjectContainer);

// Register type converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ArrayConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\BooleanConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FloatConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\IntegerConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ObjectStorageConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ObjectConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\StringConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\CoreTypeConverter::class);
// Experimental FAL<->extbase converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FileConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FileReferenceConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FolderBasedFileCollectionConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\StaticFileCollectionConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FolderConverter::class);

if (TYPO3_MODE === 'BE') {
    // registers Extbase at the cli_dispatcher with key "extbase".
    // Using cliKeys is deprecated as of TYPO3 v8 and will be removed in TYPO3 v9, use Configuration/Commands.php instead
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['extbase'] = [
        function () {
            $bootstrap = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Core\Bootstrap::class);
            echo $bootstrap->run('', []);
        }
    ];
    // register help command
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \TYPO3\CMS\Extbase\Command\HelpCommandController::class;
}


/**
 * Extension: install
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/install/ext_localconf.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// TYPO3 CMS 7
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['accessRightParameters'] = \TYPO3\CMS\Install\Updates\AccessRightParametersUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['languageIsoCode'] = \TYPO3\CMS\Install\Updates\LanguageIsoCodeUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['PageShortcutParent'] = \TYPO3\CMS\Install\Updates\PageShortcutParentUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['backendShortcuts'] = \TYPO3\CMS\Install\Updates\MigrateShortcutUrlsAgainUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['processedFilesChecksum'] = \TYPO3\CMS\Install\Updates\ProcessedFileChecksumUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['filesReplacePermission'] = \TYPO3\CMS\Install\Updates\FilesReplacePermissionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['tableCType'] = \TYPO3\CMS\Install\Updates\TableFlexFormToTtContentFieldsUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\FileListInAccessModuleListUpdate::class] = \TYPO3\CMS\Install\Updates\FileListInAccessModuleListUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate::class] = \TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate::class] = \TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['textmediaAssets'] = \TYPO3\CMS\Install\Updates\MigrateMediaToAssetsForTextMediaCe::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['compatibility6Extension'] = \TYPO3\CMS\Install\Updates\Compatibility6ExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['mediaceExtension'] = \TYPO3\CMS\Install\Updates\MediaceExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['openidExtension'] = \TYPO3\CMS\Install\Updates\OpenidExtractionUpdate::class;

$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$signalSlotDispatcher->connect(
    \TYPO3\CMS\Install\Service\SqlExpectedSchemaService::class,
    'tablesDefinitionIsBeingBuilt',
    \TYPO3\CMS\Core\Cache\DatabaseSchemaService::class,
    'addCachingFrameworkRequiredDatabaseSchemaForSqlExpectedSchemaService'
);
$signalSlotDispatcher->connect(
    \TYPO3\CMS\Install\Service\SqlExpectedSchemaService::class,
    'tablesDefinitionIsBeingBuilt',
    \TYPO3\CMS\Core\Category\CategoryRegistry::class,
    'addCategoryDatabaseSchemaToTablesDefinition'
);
unset($signalSlotDispatcher);

// Do not delete this wizard. This makes sure new installations get the TER repository set in the database.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\ExtensionManagerTables::class]
    = \TYPO3\CMS\Install\Updates\ExtensionManagerTables::class;

// Add update wizards below this line
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\WizardDoneToRegistry::class]
    = \TYPO3\CMS\Install\Updates\WizardDoneToRegistry::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate::class]
    = \TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\FrontendUserImageUpdateWizard::class]
    = \TYPO3\CMS\Install\Updates\FrontendUserImageUpdateWizard::class;
//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\DbalAndAdodbExtractionUpdate::class]
//    = \TYPO3\CMS\Install\Updates\DbalAndAdodbExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\DatabaseRowsUpdateWizard::class]
    = \TYPO3\CMS\Install\Updates\DatabaseRowsUpdateWizard::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\CommandLineBackendUserRemovalUpdate::class]
    = \TYPO3\CMS\Install\Updates\CommandLineBackendUserRemovalUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\FillTranslationSourceField::class]
    = \TYPO3\CMS\Install\Updates\FillTranslationSourceField::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\SectionFrameToFrameClassUpdate::class]
    = \TYPO3\CMS\Install\Updates\SectionFrameToFrameClassUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\SplitMenusUpdate::class]
    = \TYPO3\CMS\Install\Updates\SplitMenusUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\BulletContentElementUpdate::class]
    = \TYPO3\CMS\Install\Updates\BulletContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\UploadContentElementUpdate::class]
    = \TYPO3\CMS\Install\Updates\UploadContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\MigrateCscStaticTemplateUpdate::class]
    = \TYPO3\CMS\Install\Updates\MigrateCscStaticTemplateUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\MigrateFscStaticTemplateUpdate::class]
    = \TYPO3\CMS\Install\Updates\MigrateFscStaticTemplateUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\MigrateFeSessionDataUpdate::class]
    = \TYPO3\CMS\Install\Updates\MigrateFeSessionDataUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['compatibility7Extension']
    = \TYPO3\CMS\Install\Updates\Compatibility7ExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['formLegacyExtractionUpdate']
    = \TYPO3\CMS\Install\Updates\FormLegacyExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['rtehtmlareaExtension']
    = \TYPO3\CMS\Install\Updates\RteHtmlAreaExtractionUpdate::class;


/**
 * Extension: frontend
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/frontend/ext_localconf.php
 */

$_EXTKEY = 'frontend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'FE' && !isset($_REQUEST['eID'])) {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
        \TYPO3\CMS\Core\Resource\Index\MetaDataRepository::class,
        'recordPostRetrieval',
        \TYPO3\CMS\Frontend\Aspect\FileMetadataOverlayAspect::class,
        'languageAndWorkspaceOverlay'
    );
}

// Register all available content objects
$GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'], [
    'TEXT'             => \TYPO3\CMS\Frontend\ContentObject\TextContentObject::class,
    'CASE'             => \TYPO3\CMS\Frontend\ContentObject\CaseContentObject::class,
    'COA'              => \TYPO3\CMS\Frontend\ContentObject\ContentObjectArrayContentObject::class,
    'COA_INT'          => \TYPO3\CMS\Frontend\ContentObject\ContentObjectArrayInternalContentObject::class,
    'USER'             => \TYPO3\CMS\Frontend\ContentObject\UserContentObject::class,
    'USER_INT'         => \TYPO3\CMS\Frontend\ContentObject\UserInternalContentObject::class,
    'FILE'             => \TYPO3\CMS\Frontend\ContentObject\FileContentObject::class,
    'FILES'            => \TYPO3\CMS\Frontend\ContentObject\FilesContentObject::class,
    'IMAGE'            => \TYPO3\CMS\Frontend\ContentObject\ImageContentObject::class,
    'IMG_RESOURCE'     => \TYPO3\CMS\Frontend\ContentObject\ImageResourceContentObject::class,
    'CONTENT'          => \TYPO3\CMS\Frontend\ContentObject\ContentContentObject::class,
    'RECORDS'          => \TYPO3\CMS\Frontend\ContentObject\RecordsContentObject::class,
    'HMENU'            => \TYPO3\CMS\Frontend\ContentObject\HierarchicalMenuContentObject::class,
    'LOAD_REGISTER'    => \TYPO3\CMS\Frontend\ContentObject\LoadRegisterContentObject::class,
    'RESTORE_REGISTER' => \TYPO3\CMS\Frontend\ContentObject\RestoreRegisterContentObject::class,
    'TEMPLATE'         => \TYPO3\CMS\Frontend\ContentObject\TemplateContentObject::class,
    'FLUIDTEMPLATE'    => \TYPO3\CMS\Frontend\ContentObject\FluidTemplateContentObject::class,
    'SVG'              => \TYPO3\CMS\Frontend\ContentObject\ScalableVectorGraphicsContentObject::class,
    'EDITPANEL'        => \TYPO3\CMS\Frontend\ContentObject\EditPanelContentObject::class
]);

// Register eID provider for showpic
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['tx_cms_showpic'] = \TYPO3\CMS\Frontend\Controller\ShowImageController::class . '::processRequest';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocView = 1
	options.saveDocNew = 1
	options.saveDocNew.pages = 0
	options.saveDocNew.sys_file = 0
	options.saveDocNew.sys_file_metadata = 0
	options.disableDelete.sys_file = 1
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '
# Content selection
styles.content.get = CONTENT
styles.content.get {
    table = tt_content
    select {
        orderBy = sorting
        where = {#colPos}=0
    }
}


# Content element rendering
tt_content = CASE
tt_content {
    key {
        field = CType
    }
    default = TEXT
    default {
        field = CType
        htmlSpecialChars = 1
        wrap = <p style="background-color: yellow; padding: 0.5em 1em;"><strong>ERROR:</strong> Content Element with uid "{field:uid}" and type "|" has no rendering definition!</p>
        wrap.insertData = 1
    }
}
    '
);

// Registering hooks for the tree list cache
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;

// Register hook to show preview info
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['hook_previewInfo']['cms'] = \TYPO3\CMS\Frontend\Hooks\FrontendHooks::class . '->hook_previewInfo';

// Register for hookss to show preview of tt_content elements in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['image'] =
    \TYPO3\CMS\Frontend\Hooks\PageLayoutView\ImagePreviewRenderer::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['textpic'] =
    \TYPO3\CMS\Frontend\Hooks\PageLayoutView\TextpicPreviewRenderer::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['text'] =
    \TYPO3\CMS\Frontend\Hooks\PageLayoutView\TextPreviewRenderer::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['textmedia'] =
    \TYPO3\CMS\Frontend\Hooks\PageLayoutView\TextmediaPreviewRenderer::class;

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';

// Register URL handler for external pages.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['urlProcessing']['urlHandlers']['frontendExternalUrl'] = [
    'handler' => \TYPO3\CMS\Frontend\Page\ExternalPageUrlHandler::class,
];

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class)
    ->registerIcon(
        'wizard-backendlayout',
        \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
        ['name' => 'table']
    );

// Include new content elements to modWizards
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:frontend/Configuration/TSconfig/Page/Mod/Wizards/NewContentElement.txt">'
);
// Include FormEngine adjustments
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:frontend/Configuration/TSconfig/Page/TCEFORM.txt">'
);


/**
 * Extension: css_styled_content
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/css_styled_content/ext_localconf.php
 */

$_EXTKEY = 'css_styled_content';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Mark the delivered TypoScript templates as "content rendering template"
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/Configuration/TypoScript/';

// TYPO3 CMS 8 is the last version that supports CSS styled content.
// This extension will only receive security updates in the future,
// and will finally be removed from the TYPO3 Core in CMS 9.
//
// Fluid styled content and CSS styled content are now sharing the same featureset
// so you can now benefit from more flexible templates and adjustments without
// leaving any nessesary features behind.
\TYPO3\CMS\Core\Utility\GeneralUtility::deprecationLog(
    'The core extension CSS styled content has been deprecated since TYPO3 CMS 8 and will be removed in TYPO3 CMS 9.'
);


/**
 * Extension: fluid_styled_content
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/fluid_styled_content/ext_localconf.php
 */

$_EXTKEY = 'fluid_styled_content';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Define TypoScript as content rendering template
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'fluidstyledcontent/Configuration/TypoScript/';


/**
 * Extension: extensionmanager
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/extensionmanager/ext_localconf.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register extension list update task
$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['extensionmanager'], ['allowed_classes' => false]);
if (empty($extConf['offlineMode'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Extensionmanager\Task\UpdateExtensionListTask::class] = [
        'extension' => 'extensionmanager',
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
        'description' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
        'additionalFields' => '',
    ];
}

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \TYPO3\CMS\Extensionmanager\Command\ExtensionCommandController::class;
    if (!(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
        $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
        $signalSlotDispatcher->connect(
            \TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService::class,
            'willInstallExtensions',
            \TYPO3\CMS\Core\Package\PackageManager::class,
            'scanAvailablePackages'
        );
        $signalSlotDispatcher->connect(
            \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
            'tablesDefinitionIsBeingBuilt',
            \TYPO3\CMS\Core\Cache\DatabaseSchemaService::class,
            'addCachingFrameworkRequiredDatabaseSchemaForInstallUtility'
        );
        $signalSlotDispatcher->connect(
            \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
            'tablesDefinitionIsBeingBuilt',
            \TYPO3\CMS\Core\Category\CategoryRegistry::class,
            'addExtensionCategoryDatabaseSchemaToTablesDefinition'
        );
        unset($signalSlotDispatcher);
    }
}

unset($extConf);


/**
 * Extension: lang
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/lang/ext_localconf.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register language update command controller
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \TYPO3\CMS\Lang\Command\LanguageCommandController::class;


/**
 * Extension: rte_ckeditor
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/rte_ckeditor/ext_localconf.php
 */

$_EXTKEY = 'rte_ckeditor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register FormEngine node type resolver hook to render RTE in FormEngine if enabled
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeResolver'][1480314091] = [
    'nodeName' => 'text',
    'priority' => 50,
    'class' => \TYPO3\CMS\RteCKEditor\Form\Resolver\RichTextNodeResolver::class,
];

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_CLI)) {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Page\PageRenderer::class
    )->addRequireJsConfiguration([
        'shim' => [
            'ckeditor' => ['exports' => 'CKEDITOR']
        ],
        'paths' => [
            'ckeditor' => \TYPO3\CMS\Core\Utility\PathUtility::getAbsoluteWebPath(
                    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('rte_ckeditor', 'Resources/Public/JavaScript/Contrib/')
                ) . 'ckeditor'
        ]
    ]);
}

// Register the presets

if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:rte_ckeditor/Configuration/RTE/Default.yaml';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'] = 'EXT:rte_ckeditor/Configuration/RTE/Minimal.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'] = 'EXT:rte_ckeditor/Configuration/RTE/Full.yaml';
}


/**
 * Extension: rsaauth
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/rsaauth/ext_localconf.php
 */

$_EXTKEY = 'rsaauth';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add the service
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService('rsaauth', 'auth', \TYPO3\CMS\Rsaauth\RsaAuthService::class, [
    'title' => 'RSA authentication',
    'description' => 'Authenticates users by using encrypted passwords',
    'subtype' => 'processLoginDataBE,processLoginDataFE',
    'available' => true,
    'priority' => 60,
    // tx_svauth_sv1 has 50, t3sec_saltedpw has 55. This service must have higher priority!
    'quality' => 60,
    // tx_svauth_sv1 has 50. This service must have higher quality!
    'os' => '',
    'exec' => '',
    // Do not put a dependency on openssh here or service loading will fail!
    'className' => \TYPO3\CMS\Rsaauth\RsaAuthService::class
]);

// Add hook for user setup module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/setup/mod/index.php']['setupScriptHook']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\UserSetupHook::class . '->getLoginScripts';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/setup/mod/index.php']['modifyUserDataBeforeSave']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\UserSetupHook::class . '->decryptPassword';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = \TYPO3\CMS\Rsaauth\RsaEncryptionEncoder::class . '->enableEncryptionFromBackendControllerPostConstructor';
// Add a hook to the FE login form (felogin system extension)
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['loginFormOnSubmitFuncs']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\FrontendLoginHook::class . '->loginFormHook';
// Add a hook to show Backend warnings
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['displayWarningMessages']['rsaauth'] = \TYPO3\CMS\Rsaauth\BackendWarnings::class;

// eID for FrontendLoginRsaPublicKey
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['RsaPublicKeyGenerationController'] = \TYPO3\CMS\Rsaauth\Controller\RsaPublicKeyGenerationController::class . '::processRequest';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
    \TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider::class,
    \TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider::SIGNAL_getPageRenderer,
    \TYPO3\CMS\Rsaauth\Slot\UsernamePasswordProviderSlot::class,
    'getPageRenderer'
);

// Register automatic decryption in DataHandler
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\DecryptionHook::class;

// Add own form element
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1436965601] = [
    'nodeName' => 'rsaInput',
    'priority' => '70',
    'class' => \TYPO3\CMS\Rsaauth\Form\Element\RsaInputElement::class,
];


/**
 * Extension: saltedpasswords
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/saltedpasswords/ext_localconf.php
 */

$_EXTKEY = 'saltedpasswords';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Form evaluation function for fe_users
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][\TYPO3\CMS\Saltedpasswords\Evaluation\FrontendEvaluator::class] = '';
// Form evaluation function for be_users
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][\TYPO3\CMS\Saltedpasswords\Evaluation\BackendEvaluator::class] = '';

// Hook for processing "forgotPassword" in felogin
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['password_changed'][] = \TYPO3\CMS\Saltedpasswords\Utility\SaltedPasswordsUtility::class . '->feloginForgotPasswordHook';

// Extension may register additional salted hashing methods in this array
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/saltedpasswords']['saltMethods'] = [];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService('saltedpasswords', 'auth', \TYPO3\CMS\Saltedpasswords\SaltedPasswordService::class, [
    'title' => 'FE/BE Authentification salted',
    'description' => 'Salting of passwords for Frontend and Backend',
    'subtype' => 'authUserFE,authUserBE',
    'available' => true,
    'priority' => 70,
    // must be higher than \TYPO3\CMS\Sv\AuthenticationService (50) and rsaauth (60) but lower than OpenID (75)
    'quality' => 70,
    'os' => '',
    'exec' => '',
    'className' => \TYPO3\CMS\Saltedpasswords\SaltedPasswordService::class
]);

// Register bulk update task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Saltedpasswords\Task\BulkUpdateTask::class] = [
    'extension' => 'saltedpasswords',
    'title' => 'LLL:EXT:saltedpasswords/Resources/Private/Language/locallang.xlf:ext.saltedpasswords.tasks.bulkupdate.name',
    'description' => 'LLL:EXT:saltedpasswords/Resources/Private/Language/locallang.xlf:ext.saltedpasswords.tasks.bulkupdate.description',
    'additionalFields' => \TYPO3\CMS\Saltedpasswords\Task\BulkUpdateFieldProvider::class
];


/**
 * Extension: backend
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/backend/ext_localconf.php
 */

$_EXTKEY = 'backend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// sys_category tree check, which only affects Backend Users
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
    \TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider::class,
    \TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider::SIGNAL_PostProcessTreeData,
    \TYPO3\CMS\Backend\Security\CategoryPermissionsAspect::class,
    'addUserPermissionsToCategoryTreeData'
);

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433106] = \TYPO3\CMS\Backend\Backend\ToolbarItems\ClearCacheToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433107] = \TYPO3\CMS\Backend\Backend\ToolbarItems\HelpToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433108] = \TYPO3\CMS\Backend\Backend\ToolbarItems\LiveSearchToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433109] = \TYPO3\CMS\Backend\Backend\ToolbarItems\ShortcutToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433110] = \TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433111] = \TYPO3\CMS\Backend\Backend\ToolbarItems\UserToolbarItem::class;

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][1433416747] = [
        'provider' => \TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider::class,
        'sorting' => 50,
        'icon-class' => 'fa-key',
        'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.link'
    ];

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['avatarProviders']['defaultAvatarProvider'] = [
        'provider' => \TYPO3\CMS\Backend\Backend\Avatar\DefaultAvatarProvider::class
    ];

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1460321142] = [
        'nodeName' => 'belayoutwizard',
        'priority' => 40,
        'class' => \TYPO3\CMS\Backend\View\Wizard\Element\BackendLayoutWizardElement::class,
    ];
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tsfebeuserauth.php']['frontendEditingController']['default'] = \TYPO3\CMS\Core\FrontendEditing\FrontendEditingController::class;

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';

// Include base TSconfig setup
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:backend/Configuration/TSconfig/Page/Mod/Wizards/NewContentElement.ts">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:backend/Configuration/TSconfig/User/Options.ts">');


/**
 * Extension: belog
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/belog/ext_localconf.php
 */

$_EXTKEY = 'belog';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)
        ->connect(
            \TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem::class,
            'loadMessages',
            \TYPO3\CMS\Belog\Controller\SystemInformationController::class,
            'appendMessage'
        );
}


/**
 * Extension: beuser
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/beuser/ext_localconf.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['logoff_pre_processing'][] = \TYPO3\CMS\Beuser\Hook\SwitchBackUserHook::class . '->switchBack';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = \TYPO3\CMS\Beuser\Hook\BackendControllerHook::class . '->addJavaScript';


/**
 * Extension: documentation
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/documentation/ext_localconf.php
 */

$_EXTKEY = 'documentation';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Open extension manual from within Extension Manager
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)
    ->connect(
        \TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::class,
        'processActions',
        \TYPO3\CMS\Documentation\Slots\ExtensionManager::class,
        'processActions'
    );


/**
 * Extension: felogin
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/felogin/ext_localconf.php
 */

$_EXTKEY = 'felogin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add a default TypoScript for the CType "login"
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(
    '
# customsubcategory=01_Storage=Storage
# customsubcategory=02_Template=Template
# customsubcategory=03_Features=Features
# customsubcategory=04_EMail=E-Mail
# customsubcategory=05_Redirects=Redirects
# customsubcategory=06_Security=Security

styles.content.loginform {
    # cat=Frontend Login/01_Storage/100; type=int+; label= Storage Folder: Define the Storage Folder with the Website User Records, using a comma separated list or single value
    pid = 0
    # cat=Frontend Login/01_Storage/101; type=boolean; label= Recursive: If set, also any subfolders of the storagePid will be used
    recursive = 0

    # cat=Frontend Login/02_Template/100; type=string; label= Login template: Enter the path for the HTML template to be used
    templateFile = EXT:felogin/Resources/Private/Templates/FrontendLogin.html
    # cat=Frontend Login/02_Template/101; type=string; label= BaseURL for generated links: Base url if something other than the system base URL is needed
    feloginBaseURL =
    # cat=Frontend Login/02_Template/102; type=string; label= Date format: Format for the link is valid until message (forget password email)
    dateFormat = Y-m-d H:i

    # cat=Frontend Login/03_Features/100; type=boolean; label= Display Password Recovery Link: If set, the section in the template to display the link to the forget password dialogue is visible.
    showForgotPasswordLink = 0
    # cat=Frontend Login/03_Features/101; type=boolean; label= Display Remember Login Option: If set, the section in the template to display the option to remember the login (with a cookie) is visible.
    showPermaLogin = 0
    # cat=Frontend Login/03_Features/102; type=boolean; label= Disable redirect after successful login, but display logout-form: If set, the logout form will be displayed immediately after successful login.
    showLogoutFormAfterLogin = 0

    # cat=Frontend Login/04_EMail/100; type=string; label= E-Mail Sender Address: E-Mail address used as sender of the change password emails
    emailFrom =
    # cat=Frontend Login/04_EMail/101; type=string; label= E-Mail Sender Name: Name used as sender of the change password emails
    emailFromName =
    # cat=Frontend Login/04_EMail/102; type=string; label= Reply To E-Mail Address: Reply-to address used in the change password emails
    replyToEmail =

    # cat=Frontend Login/05_Redirects/101; type=string; label= Redirect Mode: Comma separated list of redirect modes. Possible values: groupLogin, userLogin, login, getpost, referer, refererDomains, loginError, logout
    redirectMode =
    # cat=Frontend Login/05_Redirects/102; type=boolean; label= Use First Supported Mode from Selection: If set the first method from redirectMode which is possible will be used
    redirectFirstMethod = 0
    # cat=Frontend Login/05_Redirects/103; type=int+; label= After Successful Login Redirect to Page: Page id to redirect to after Login
    redirectPageLogin = 0
    # cat=Frontend Login/05_Redirects/104; type=int+; label= After Failed Login Redirect to Page: Page id to redirect to after Login Error
    redirectPageLoginError = 0
    # cat=Frontend Login/05_Redirects/105; type=int+; label= After Logout Redirect to Page: Page id to redirect to after Logout
    redirectPageLogout = 0
    # cat=Frontend Login/05_Redirects/106; type=boolean; label= Disable Redirect: If set redirecting is disabled
    redirectDisable = 0

    # cat=Frontend Login/06_Security/100; type=int+; label= Time in hours how long the link for forget password is valid: How many hours the link for forget password is valid
    forgotLinkHashValidTime = 12
    # cat=Frontend Login/06_Security/101; type=int+; label= Minimum amount of characters, when setting a new password: Minimum length of the new password a user sets
    newPasswordMinLength = 6
    # cat=Frontend Login/06_Security/102; type=string; label= Allowed Referrer-Redirect-Domains: Comma separated list of domains which are allowed for the referrer redirect mode
    domains =
    # cat=Frontend Login/06_Security/103; type=boolean; label= Expose existing users: Expose the information on whether or not the account for which a new password was requested exists. By default, that information is not disclosed for privacy reasons.
    exposeNonexistentUserInForgotPasswordDialog = 0
}
    '
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '
# Setting "felogin" plugin TypoScript
plugin.tx_felogin_pi1 = USER_INT
plugin.tx_felogin_pi1 {
    userFunc = TYPO3\CMS\Felogin\Controller\FrontendLoginController->main

    # Storage
    storagePid = {$styles.content.loginform.pid}
    recursive = {$styles.content.loginform.recursive}

    # Template
    templateFile = {$styles.content.loginform.templateFile}
    feloginBaseURL = {$styles.content.loginform.feloginBaseURL}
    dateFormat = {$styles.content.loginform.dateFormat}

    # Features
    showForgotPasswordLink = {$styles.content.loginform.showForgotPasswordLink}
    showPermaLogin = {$styles.content.loginform.showPermaLogin}
    showLogoutFormAfterLogin = {$styles.content.loginform.showLogoutFormAfterLogin}

    # E-Mail Settings
    email_from = {$styles.content.loginform.emailFrom}
    email_fromName = {$styles.content.loginform.emailFromName}
    replyTo = {$styles.content.loginform.replyToEmail}

    # Redirects
    redirectMode = {$styles.content.loginform.redirectMode}
    redirectFirstMethod = {$styles.content.loginform.redirectFirstMethod}
    redirectPageLogin = {$styles.content.loginform.redirectPageLogin}
    redirectPageLoginError = {$styles.content.loginform.redirectPageLoginError}
    redirectPageLogout = {$styles.content.loginform.redirectPageLogout}
    redirectDisable = {$styles.content.loginform.redirectDisable}

    # Security
    forgotLinkHashValidTime = {$styles.content.loginform.forgotLinkHashValidTime}
    newPasswordMinLength = {$styles.content.loginform.newPasswordMinLength}
    domains = {$styles.content.loginform.domains}
    exposeNonexistentUserInForgotPasswordDialog = {$styles.content.loginform.exposeNonexistentUserInForgotPasswordDialog}

    # should a wrapper class be set for this content element
    wrapContentInBaseClass = 1

    # typolink-configuration for links / urls
    # parameter and additionalParams are set by extension
    linkConfig {
        target =
        ATagParams = rel="nofollow"
    }

    # preserve GET vars - define "all" or comma separated list of GET-vars that should be included by link generation
    preserveGETvars = all

    welcomeHeader_stdWrap {
        required = 1
        wrap = <h3>|</h3>
        htmlSpecialChars = 1
    }
    successHeader_stdWrap < .welcomeHeader_stdWrap
    logoutHeader_stdWrap < .welcomeHeader_stdWrap
    errorHeader_stdWrap < .welcomeHeader_stdWrap
    forgotHeader_stdWrap < .welcomeHeader_stdWrap
    changePasswordHeader_stdWrap < .welcomeHeader_stdWrap

    welcomeMessage_stdWrap {
        required = 1
        wrap = <div>|</div>
        htmlSpecialChars = 1
    }
    successMessage_stdWrap < .welcomeMessage_stdWrap
    logoutMessage_stdWrap < .welcomeMessage_stdWrap
    errorMessage_stdWrap < .welcomeMessage_stdWrap
    forgotMessage_stdWrap < .welcomeMessage_stdWrap
    forgotErrorMessage_stdWrap < .welcomeMessage_stdWrap
    forgotResetMessageEmailSentMessage_stdWrap < .welcomeMessage_stdWrap
    changePasswordNotValidMessage_stdWrap < .welcomeMessage_stdWrap
    changePasswordTooShortMessage_stdWrap < .welcomeMessage_stdWrap
    changePasswordNotEqualMessage_stdWrap < .welcomeMessage_stdWrap
    changePasswordMessage_stdWrap < .welcomeMessage_stdWrap
    changePasswordDoneMessage_stdWrap < .welcomeMessage_stdWrap

    cookieWarning_stdWrap {
        required = 1
        wrap = <p style="color:red; font-weight:bold;">|</p>
        htmlSpecialChars = 1
    }

    # stdWrap for fe_users fields used in Messages
    userfields {
        username {
            htmlSpecialChars = 1
            wrap = <strong>|</strong>
        }
    }
}

# Setting "felogin" plugin TypoScript
tt_content.login =< lib.contentElement
tt_content.login {
    templateName = Generic
    variables {
        content =< plugin.tx_felogin_pi1
    }
}
    '
);

// Add login to new content element wizard
if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
        mod.wizards.newContentElement.wizardItems.forms {
            elements.login {
                iconIdentifier = content-elements-login
                title = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:forms_login_title
                description = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:forms_login_description
                tt_content_defValues {
                    CType = login
                }
            }
            show :=addToList(login)
        }
    ');
}

// Page module hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['felogin'] = \TYPO3\CMS\Felogin\Hooks\CmsLayout::class;


/**
 * Extension: filelist
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/filelist/ext_localconf.php
 */

$_EXTKEY = 'filelist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = \TYPO3\CMS\Filelist\Hook\BackendControllerHook::class . '->addJavaScript';


/**
 * Extension: form
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/form/ext_localconf.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

call_user_func(function () {
    if (TYPO3_MODE === 'BE') {
        // Hook to enrich tt_content form flex element with finisher settings and form list drop down
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][
            \TYPO3\CMS\Form\Hooks\DataStructureIdentifierHook::class
        ] = \TYPO3\CMS\Form\Hooks\DataStructureIdentifierHook::class;

        // Hook to count used forms elements in tt_content
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['softRefParser']['formPersistenceIdentifier'] =
            \TYPO3\CMS\Form\Hooks\SoftReferenceParserHook::class;

        // Register for hook to show preview of tt_content element of CType="form_formframework" in page module
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['form_formframework'] =
            \TYPO3\CMS\Form\Hooks\FormPagePreviewRenderer::class;

        // Add a bunch of icons to icon registry
        $iconIdentifiers = [
            'advanced-password',
            'checkbox',
            'content-element',
            'date-picker',
            'duplicate',
            'fieldset',
            'file-upload',
            'finisher',
            'form-element-selector',
            'gridcontainer',
            'gridrow',
            'hidden',
            'image-upload',
            'insert-after',
            'insert-in',
            'multi-checkbox',
            'multi-select',
            'page',
            'password',
            'radio-button',
            'single-select',
            'static-text',
            'summary-page',
            'text',
            'textarea',
            'validator'
        ];
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($iconIdentifiers as $iconIdentifier) {
            $iconRegistry->registerIcon(
                't3-form-icon-' . $iconIdentifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:form/Resources/Public/Images/' . $iconIdentifier . '.svg']
            );
        }

        // Add new content element wizard entry
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:form/Configuration/PageTS/modWizards.ts">'
        );
    }

    if (TYPO3_MODE === 'FE') {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterSubmit'][1489772699]
            = \TYPO3\CMS\Form\Hooks\FormElementsOnSubmitHooks::class;

        // FE file upload processing
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterBuildingFinished'][1489772699]
            = \TYPO3\CMS\Form\Mvc\Property\PropertyMappingConfiguration::class;

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(
            \TYPO3\CMS\Form\Mvc\Property\TypeConverter\UploadedFileReferenceConverter::class
        );
    }

    // Register "formvh:" namespace
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['formvh'][] = 'TYPO3\\CMS\\Form\\ViewHelpers';

    // Register FE plugin
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'TYPO3.CMS.Form',
        'Formframework',
        ['FormFrontend' => 'render, perform'],
        ['FormFrontend' => 'perform'],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
});


/**
 * Extension: impexp
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/impexp/ext_localconf.php
 */

$_EXTKEY = 'impexp';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = \TYPO3\CMS\Impexp\Hook\BackendControllerHook::class . '->addJavaScript';


/**
 * Extension: indexed_search
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/indexed_search/ext_localconf.php
 */

$_EXTKEY = 'indexed_search';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// register extbase plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin('TYPO3.CMS.IndexedSearch', 'Pi2', ['Search' => 'form,search,noTypoScript'], ['Search' => 'form,search']);

// Attach to hooks:
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['pageIndexing'][] = \TYPO3\CMS\IndexedSearch\Indexer::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['headerNoCache']['tx_indexedsearch'] = \TYPO3\CMS\IndexedSearch\Hook\TypoScriptFrontendHook::class . '->headerNoCache';
// Register with "crawler" extension:
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['crawler']['procInstructions']['tx_indexedsearch_reindex'] = 'Re-indexing';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['crawler']['cli_hooks']['tx_indexedsearch_crawl'] = \TYPO3\CMS\IndexedSearch\Hook\CrawlerHook::class;
// Register with DataHandler:
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['tx_indexedsearch'] = \TYPO3\CMS\IndexedSearch\Hook\CrawlerHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['tx_indexedsearch'] = \TYPO3\CMS\IndexedSearch\Hook\CrawlerHook::class;
// Configure default document parsers:
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['indexed_search']['external_parsers'] = [
    'pdf'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'doc'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'docx' => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'dotx' => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'pps'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'ppsx' => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'ppt'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'pptx' => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'potx' => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'xls'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'xlsx' => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'xltx' => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'sxc'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'sxi'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'sxw'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'ods'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'odp'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'odt'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'rtf'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'txt'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'html' => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'htm'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'csv'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'xml'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'jpg'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'jpeg' => \TYPO3\CMS\IndexedSearch\FileContentParser::class,
    'tif'  => \TYPO3\CMS\IndexedSearch\FileContentParser::class
];

// unserializing the configuration so we can use it here:
$extConf = [];
if (isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['indexed_search'])) {
    $extConf = unserialize(
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['indexed_search'],
        ['allowed_classes' => false]
    );
}

if (isset($extConf['useMysqlFulltext']) && $extConf['useMysqlFulltext'] === '1') {
    // Use all index_* tables except "index_rel" and "index_words"
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['indexed_search']['use_tables'] =
        'index_phash,index_fulltext,index_section,index_grlist,index_stat_search,index_stat_word,index_debug,index_config';
    // Register schema analyzer slot to hook in required fulltext index definition
    $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Install\Service\SqlExpectedSchemaService::class,
        'tablesDefinitionIsBeingBuilt',
        \TYPO3\CMS\IndexedSearch\Service\DatabaseSchemaService::class,
        'addMysqlFulltextIndex'
    );
    unset($signalSlotDispatcher);
} else {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['indexed_search']['use_tables'] =
        'index_phash,index_fulltext,index_rel,index_words,index_section,index_grlist,index_stat_search,index_stat_word,index_debug,index_config';
}

// Add search to new content element wizard
if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    mod.wizards.newContentElement.wizardItems.forms {
        elements.search {
            iconIdentifier = content-elements-searchform
            title = LLL:EXT:indexed_search/Resources/Private/Language/locallang_pi.xlf:pi_wizard_title
            description = LLL:EXT:indexed_search/Resources/Private/Language/locallang_pi.xlf:pi_wizard_description
            tt_content_defValues {
                CType = list
                list_type = indexedsearch_pi2
            }
        }
        show :=addToList(search)
    }
    ');
}

// Use the advanced doubleMetaphone parser instead of the internal one (usage of metaphone parsers is generally disabled by default)
if (isset($extConf['enableMetaphoneSearch']) && (int)$extConf['enableMetaphoneSearch'] == 2) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['indexed_search']['metaphone'] = \TYPO3\CMS\IndexedSearch\Utility\DoubleMetaPhoneUtility::class;
}
unset($extConf);


/**
 * Extension: lowlevel
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/lowlevel/ext_localconf.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Setting up scripts that can be run from the cli_dispatch.phpsh script.
    // Using cliKeys is deprecated as of TYPO3 v8 and will be removed in TYPO3 v9, use Configuration/Commands.php instead
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_cleaner'] = [
        function () {
            $cleanerObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Lowlevel\CleanerCommand::class);
            $cleanerObj->cli_main($_SERVER['argv']);
        }
    ];
}


/**
 * Extension: recordlist
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/recordlist/ext_localconf.php
 */

$_EXTKEY = 'recordlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register default link handlers
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    TCEMAIN.linkHandler {
        page {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\PageLinkHandler
            label = LLL:EXT:lang/Resources/Private/Language/locallang_browse_links.xlf:page
        }
        file {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FileLinkHandler
            label = LLL:EXT:lang/Resources/Private/Language/locallang_browse_links.xlf:file
            displayAfter = page
            scanAfter = page
        }
        folder {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FolderLinkHandler
            label = LLL:EXT:lang/Resources/Private/Language/locallang_browse_links.xlf:folder
            displayAfter = file
            scanAfter = file
        }
        url {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\UrlLinkHandler
            label = LLL:EXT:lang/Resources/Private/Language/locallang_browse_links.xlf:extUrl
            displayAfter = folder
            scanAfter = mail
        }
        mail {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\MailLinkHandler
            label = LLL:EXT:lang/Resources/Private/Language/locallang_browse_links.xlf:email
            displayAfter = url
        }
    }
');


/**
 * Extension: recycler
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/recycler/ext_localconf.php
 */

$_EXTKEY = 'recycler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Recycler\Task\CleanerTask::class] = [
    'extension' => 'recycler',
    'title' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskTitle',
    'description' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskDescription',
    'additionalFields' => \TYPO3\CMS\Recycler\Task\CleanerFieldProvider::class
];


/**
 * Extension: reports
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/reports/ext_localconf.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Reports\Task\SystemStatusUpdateTask::class] = [
    'extension' => 'reports',
    'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskTitle',
    'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskDescription',
    'additionalFields' => \TYPO3\CMS\Reports\Task\SystemStatusUpdateTaskNotificationEmailField::class
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['displayWarningMessages']['tx_reports_WarningMessagePostProcessor'] = \TYPO3\CMS\Reports\Report\Status\WarningMessagePostProcessor::class;


/**
 * Extension: scheduler
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/scheduler/ext_localconf.php
 */

$_EXTKEY = 'scheduler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register the Scheduler as a possible key for CLI calls
// Using cliKeys is deprecated as of TYPO3 v8 and will be removed in TYPO3 v9, use Configuration/Commands.php instead
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['scheduler'] = [
    function ($input, $output) {
        $app = new \Symfony\Component\Console\Application('TYPO3 Scheduler', TYPO3_version);
        $app->add(new \TYPO3\CMS\Scheduler\Command\SchedulerCommand('scheduler'));
        $app->setDefaultCommand('scheduler');
        $app->run($input, $output);
    }
];

// Get the extensions's configuration
$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['scheduler'], ['allowed_classes' => false]);
// If sample tasks should be shown,
// register information for the test and sleep tasks
if (!empty($extConf['showSampleTasks'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Example\TestTask::class] = [
        'extension' => 'scheduler',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:testTask.name',
        'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:testTask.description',
        'additionalFields' => \TYPO3\CMS\Scheduler\Example\TestTaskAdditionalFieldProvider::class
    ];
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Example\SleepTask::class] = [
        'extension' => 'scheduler',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:sleepTask.name',
        'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:sleepTask.description',
        'additionalFields' => \TYPO3\CMS\Scheduler\Example\SleepTaskAdditionalFieldProvider::class
    ];
}

// Add caching framework garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionAdditionalFieldProvider::class
];

// Add task to index file in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\FileStorageIndexingTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\FileStorageIndexingAdditionalFieldProvider::class
];

// Add task for extracting metadata from files in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\FileStorageExtractionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\FileStorageExtractionAdditionalFieldProvider::class

];

// Add recycler directory cleanup task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionAdditionalFieldProvider::class
];

// Save any previous option array for table garbage collection task
// to temporary variable so it can be pre-populated by other
// extensions and LocalConfiguration/AdditionalConfiguration
$garbageCollectionTaskOptions = [];
if (is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options'])) {
    $garbageCollectionTaskOptions = $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options'];
}
// Initialize tables sub-array if not set already
if (!is_array($garbageCollectionTaskOptions['tables'])) {
    $garbageCollectionTaskOptions['tables'] = [];
}
// Add table garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\TableGarbageCollectionAdditionalFieldProvider::class,
    'options' => $garbageCollectionTaskOptions
];
unset($garbageCollectionTaskOptions);

// Register sys_log and sys_history table in table garbage collection task
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_log'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_log'] = [
        'dateField' => 'tstamp',
        'expirePeriod' => 180
    ];
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_history'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_history'] = [
        'dateField' => 'tstamp',
        'expirePeriod' => 30
    ];
}

// Add task for optimizing database tables
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableAdditionalFieldProvider::class

];


/**
 * Extension: sv
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/sv/ext_localconf.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register base authentication service
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService(
    'sv',
    'auth',
    \TYPO3\CMS\Sv\AuthenticationService::class,
    [
        'title' => 'User authentication',
        'description' => 'Authentication with username/password.',
        'subtype' => 'getUserBE,getUserFE,authUserFE,getGroupsFE,processLoginDataBE,processLoginDataFE',
        'available' => true,
        'priority' => 50,
        'quality' => 50,
        'os' => '',
        'exec' => '',
        'className' => \TYPO3\CMS\Sv\AuthenticationService::class
    ]
);


/**
 * Extension: sys_note
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/sys_note/ext_localconf.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register "switchableControllerActions" manually because there is no plugin or module for sys_note available
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['extbase']['extensions']['SysNote']['modules']['Note']['controllers'] = [
    'Note' => [
        'actions' => ['list']
    ]
];

// Hook into the list module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['recordlist/Modules/Recordlist/index.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\RecordListHook::class . '->render';
// Hook into the page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\PageHook::class . '->render';
// Hook into the info module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/web_info/class.tx_cms_webinfo.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\InfoModuleHook::class . '->render';


/**
 * Extension: t3editor
 * File: C:/xampp/htdocs/TMmarket/typo3/sysext/t3editor/ext_localconf.php
 */

$_EXTKEY = 't3editor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Register hooks for tstemplate module
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] = \TYPO3\CMS\T3editor\Hook\TypoScriptTemplateInfoHook::class . '->preStartPageHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/tstemplate_info/class.tx_tstemplateinfo.php']['postOutputProcessingHook'][] = \TYPO3\CMS\T3editor\Hook\TypoScriptTemplateInfoHook::class . '->postOutputProcessingHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/t3editor/classes/class.tx_t3editor.php']['ajaxSaveCode']['tx_tstemplateinfo'] = \TYPO3\CMS\T3editor\Hook\TypoScriptTemplateInfoHook::class . '->save';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/t3editor/classes/class.tx_t3editor.php']['ajaxSaveCode']['file_edit'] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->save';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->preStartPageHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/file_edit.php']['preOutputProcessingHook'][] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->preOutputProcessingHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/file_edit.php']['postOutputProcessingHook'][] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->postOutputProcessingHook';
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1433089350] = [
    'nodeName' => 't3editor',
    'priority' => 40,
    'class' => \TYPO3\CMS\T3editor\Form\Element\T3editorElement::class,
];


/**
 * Extension: div2007
 * File: C:/xampp/htdocs/TMmarket/typo3conf/ext/div2007/ext_localconf.php
 */

$_EXTKEY = 'div2007';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];



if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

if (!defined ('DIV2007_EXT')) {
    define('DIV2007_EXT', 'div2007');
}

$emClass = '\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility';

if (
    class_exists($emClass) &&
    method_exists($emClass, 'extPath')
) {
    // nothing
} else {
    $emClass = 't3lib_extMgm';
}


if (!defined ('PATH_BE_DIV2007')) {
    $bePath = call_user_func($emClass . '::extPath', DIV2007_EXT);
    define('PATH_BE_DIV2007', $bePath);
}


if (!defined ('PATH_FE_DIV2007_REL')) {
    define('PATH_FE_DIV2007_REL', call_user_func($emClass . '::siteRelPath', DIV2007_EXT));
}


if (!defined ('STATIC_INFO_TABLES_EXT')) {
    define('STATIC_INFO_TABLES_EXT', 'static_info_tables');
}

// constants for the TCA fields

if (version_compare(TYPO3_version, '8.0.0', '>=')) {
    // 'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',

    define('DIV2007_LANGUAGE_LGL', 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.');
} else {
    // 'label' => 'LLL:EXT:lang/locallang_general.php:LGL.starttime',
    define('DIV2007_LANGUAGE_LGL', 'LLL:EXT:lang/locallang_general.php:LGL.');
}

define('DIV2007_LANGUAGE_SUBPATH', '/Resources/Private/Language/');
define('DIV2007_ICONS_SUBPATH', 'Resources/Public/Images/Icons/');


/**
 * Extension: table
 * File: C:/xampp/htdocs/TMmarket/typo3conf/ext/table/ext_localconf.php
 */

$_EXTKEY = 'table';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}


/**
 * Extension: tsparser
 * File: C:/xampp/htdocs/TMmarket/typo3conf/ext/tsparser/ext_localconf.php
 */

$_EXTKEY = 'tsparser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) {
	die('Access denied.');
}

if (
	defined('TYPO3_version') &&
	version_compare(TYPO3_version, '6.0.0', '>=')
) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\TypoScript\\ExtendedTemplateService'] =
		array(
			'className' => 'JambageCom\\Tsparser\\TypoScript\\ExtendedTemplateService',
		);
}


/**
 * Extension: tt_products
 * File: C:/xampp/htdocs/TMmarket/typo3conf/ext/tt_products/ext_localconf.php
 */

$_EXTKEY = 'tt_products';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE'))	die ('Access denied.');

$_EXTCONF = unserialize($_EXTCONF);    // unserializing the configuration so we can use it here:

$emClass = '\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility';
$divClass = '\\TYPO3\\CMS\\Core\\Utility\\GeneralUtility';

if (
	class_exists($emClass) &&
	method_exists($emClass, 'extPath')
) {
	// nothing
} else {
	$emClass = 't3lib_extMgm';
	$divClass = 't3lib_div';
}

// these constants shall be used in the future:
if (!defined ('TT_PRODUCTS_EXT')) {
	define('TT_PRODUCTS_EXT', $_EXTKEY);
}


if (!defined ('TT_PRODUCTS_EXT')) {
	define('TT_PRODUCTS_EXT', $_EXTKEY);
}

if (!defined ('PATH_BE_TTPRODUCTS')) {
	define('PATH_BE_TTPRODUCTS', call_user_func($emClass . '::extPath', $_EXTKEY));
}


if (version_compare(TYPO3_version, '7.0.0', '>=')) {
    if (!defined ('PATH_TTPRODUCTS_ICON_TABLE_REL')) {
        define('PATH_TTPRODUCTS_ICON_TABLE_REL', 'EXT:' . $_EXTKEY . '/res/icons/table/');
    }
} else {
    if (!defined ('PATH_BE_TTPRODUCTS_REL')) {
        define('PATH_BE_TTPRODUCTS_REL', call_user_func($emClass . '::extRelPath', $_EXTKEY));
    }

    if (!defined ('PATH_TTPRODUCTS_ICON_TABLE_REL')) {
        define('PATH_TTPRODUCTS_ICON_TABLE_REL', PATH_BE_TTPRODUCTS_REL . 'res/icons/table/');
    }
}

if (!defined ('PATH_FE_TTPRODUCTS_REL')) {
	define('PATH_FE_TTPRODUCTS_REL', call_user_func($emClass . '::siteRelPath', $_EXTKEY));
}


if (!defined ('ADDONS_EXT')) {
	define('ADDONS_EXT', 'addons_tt_products');
}

if (!defined ('PARTY_EXT')) {
	define('PARTY_EXT', 'party');
}

if (!defined ('TT_ADDRESS_EXT')) {
	define('TT_ADDRESS_EXT', 'tt_address');
}

if (!defined ('PARTNER_EXT')) {
	define('PARTNER_EXT', 'partner');
}

if (!defined ('POOL_EXT')) {
	define('POOL_EXT', 'pool');
}


// deprecated constants
if (!defined ('TT_PRODUCTS_EXTkey')) {
	define('TT_PRODUCTS_EXTkey', $_EXTKEY);
}


if (!defined ('PATH_BE_ttproducts')) {
	define('PATH_BE_ttproducts', call_user_func($emClass . '::extPath', TT_PRODUCTS_EXT));
}

if (!defined ('PATH_FE_ttproducts_rel')) {
	define('PATH_FE_ttproducts_rel', call_user_func($emClass . '::siteRelPath', TT_PRODUCTS_EXT));
}

if (!defined ('TABLE_EXTkey')) {
	define('TABLE_EXTkey','table');
}

if (call_user_func($emClass . '::isLoaded', TABLE_EXTkey)) {
	if (!defined ('PATH_BE_table')) {
		define('PATH_BE_table', call_user_func($emClass . '::extPath', TABLE_EXTkey));
	}
}

if (!defined ('ADDONS_EXTkey')) {
	define('ADDONS_EXTkey','addons_tt_products');
}

if (!defined ('TT_ADDRESS_EXTkey')) {
	define('TT_ADDRESS_EXTkey','tt_address');
}

if (!defined ('PARTNER_EXTkey')) {
	define('PARTNER_EXTkey','partner');
}

if (!defined ('PARTY_EXTkey')) {
	define('PARTY_EXTkey','party');
}

if (!defined ('DIV2007_EXTkey')) {
	define('DIV2007_EXTkey','div2007');
}

if (!defined ('POOL_EXTkey')) {
	define('POOL_EXTkey','pool');
}

if (call_user_func($emClass . '::isLoaded', DIV2007_EXTkey)) {
	if (!defined ('PATH_BE_div2007')) {
		define('PATH_BE_div2007', call_user_func($emClass . '::extPath', DIV2007_EXTkey));
	}
}

if (call_user_func($emClass . '::isLoaded', POOL_EXTkey)) {
	if (!defined ('PATH_BE_pool')) {
		define('PATH_BE_pool', call_user_func($emClass . '::extPath', POOL_EXTkey));
	}
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/pool/mod_main/index.php']['addClass'][] = 'EXT:'.TT_PRODUCTS_EXT.'/hooks/class.tx_ttproducts_hooks_pool.php:&tx_ttproducts_hooks_pool';
}

if (!defined ('TT_PRODUCTS_DIV_DLOG')) {
	define('TT_PRODUCTS_DIV_DLOG', '0');	// for development error logging
}

if (!defined ('TAXAJAX_EXT')) {
	define('TAXAJAX_EXT','taxajax');
}

if (!defined ('DAM_EXTkey')) {
	define('DAM_EXTkey','dam');
}

if (!defined ('STATIC_INFO_TABLES_TAXES_EXTkey')) {
	define('STATIC_INFO_TABLES_TAXES_EXTkey','static_info_tables_taxes');
}

if (call_user_func($emClass . '::isLoaded', TAXAJAX_EXT)) {
    if (!defined ('PATH_BE_taxajax')) {
        define('PATH_BE_taxajax', call_user_func($emClass . '::extPath', TAXAJAX_EXT));
    }
	$GLOBALS['TYPO3_CONF_VARS'] ['FE']['eID_include'][TT_PRODUCTS_EXT] =  'EXT:'.TT_PRODUCTS_EXT.'/eid/class.tx_ttproducts_eid.php' ;
}

call_user_func($emClass . '::addUserTSConfig', 'options.saveDocNew.tt_products=1');
call_user_func($emClass . '::addUserTSConfig', 'options.saveDocNew.tt_products_cat=1');
call_user_func($emClass . '::addUserTSConfig', 'options.saveDocNew.tt_products_articles=1');

if (isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT]) && is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT]))	{
	$tmpArray = $GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT];
} else {
	unset($tmpArray);
}


if (isset($_EXTCONF) && is_array($_EXTCONF)) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT] = $_EXTCONF;
	if (isset($tmpArray) && is_array($tmpArray)) {
		$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT] = array_merge($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT], $tmpArray);
	}
} else if (!isset($tmpArray)) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT] = array();
}


if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT]['useFlexforms'])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT]['useFlexforms'] = '1';
}

if (!defined($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tt_products']['MENU'])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tt_products'] = array (
		'default' => array(
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_default',
			'fList' =>  'title,image,itemnumber,ean,price,price2,directcost',
			'icon' => TRUE
		),
		'ext' => array (
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_ext',
			'fList' =>  'title,price2,category;inStock;weight;tax',
			'icon' => TRUE
		),
		'variants' => array(
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_variants',
			'fList' =>  'title,color;size;gradings,description',
			'icon' => TRUE
		)
	);

	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tt_products_language'] = array (
		'default' => array(
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_default',
			'fList' => 'sys_language_uid,prod_uid,title,subtitle,datasheet,www',
			'icon' => TRUE
		),
		'ext' => array (
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_ext',
			'fList' => 'sys_language_uid,prod_uid,note,note2',
			'icon' => TRUE
		),
	);

	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tt_products_articles'] = array (
		'default' => array(
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_default',
			'fList' =>  'title,itemnumber,price,inStock,image',
			'icon' => TRUE
		),
		'ext' => array(
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_ext',
			'fList' =>  'title;price2,color;size;gradings',
			'icon' => TRUE
		)
	);

	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tt_products_cat'] = array (
		'default' => array(
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_default',
			'fList' =>  'title,image',
			'icon' => TRUE
		)
	);

	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['tt_products_cat_language'] = array (
		'default' => array(
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_default',
			'fList' => 'sys_language_uid,title,subtitle,cat_uid',
			'icon' => TRUE
		),
		'ext' => array(
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_ext',
			'fList' => 'sys_language_uid,title,note',
			'icon' => TRUE
		)
	);

	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cms']['db_layout']['addTables']['sys_products_orders'] = array (
		'default' => array(
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_default',
			'fList' => 'name,zip,city,country,sys_language_uid,tracking_code,amount,tax_mode,pay_mode,date_of_payment,date_of_delivery,bill_no',
			'icon' => TRUE
		),
		'ext' => array(
			'MENU' => 'LLL:EXT:tt_products/locallang.xml:m_ext',
			'fList' => 'name,first_name,last_name,feusers_uid,address,telephone,email,date_of_birth,status,note',
			'icon' => TRUE
		)
	);
}

if (isset($_EXTCONF) && is_array($_EXTCONF)) {
	if (isset($_EXTCONF['where.']) && is_array($_EXTCONF['where.'])) {
		$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT]['where.'] = $_EXTCONF['where.'];
	}

	if (isset($_EXTCONF['exclude.']) && is_array($_EXTCONF['exclude.'])) {
		$excludeArray = array();
		foreach ($_EXTCONF['exclude.'] as $tablename => $excludefields) {
			if ($excludefields != '') {
				$excludeArray[$tablename] = call_user_func($divClass . '::trimExplode',  ',', $excludefields);
			}
		}

		if (count($excludeArray)) {
			$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT]['exclude'] = $excludeArray;
		}
	}
}


if (
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT]['useFlexforms']
) {
	// replace the output of the former CODE field with the flexform
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info'][5][] = 'EXT:'.TT_PRODUCTS_EXT.'/hooks/class.tx_ttproducts_hooks_cms.php:&tx_ttproducts_hooks_cms->pmDrawItem';
}

if (call_user_func($emClass . '::isLoaded', 'searchbox')) {

	$listType = TT_PRODUCTS_EXT.'_pi_search';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info'][$listType][] = 'EXT:'.TT_PRODUCTS_EXT.'/hooks/class.tx_ttproducts_hooks_cms.php:&tx_ttproducts_hooks_cms->pmDrawItem';
}

if (TYPO3_MODE == 'FE') { // hooks for FE extensions

	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['login_confirmed'][TT_PRODUCTS_EXT] = 'EXT:'.TT_PRODUCTS_EXT.'/hooks/class.tx_ttproducts_hooks_fe.php:&tx_ttproducts_hooks_fe->resetAdresses';

	if (call_user_func($emClass . '::isLoaded', 'patch10011')) {
		$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['patch10011']['includeLibs'][TT_PRODUCTS_EXT] = 'EXT:'.TT_PRODUCTS_EXT.'/hooks/class.tx_ttproducts_match_condition.php:&tx_ttproducts_match_condition';
	}

	// add the table enhancements to the FE
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_products']['extendingTCA'][] = TT_PRODUCTS_EXT;

	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['transactor']['listener'][TT_PRODUCTS_EXT] = 'tx_ttproducts_hooks_transactor';

    if (
        isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT]['hook.']) &&
        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][TT_PRODUCTS_EXT]['hook.']['setPageTitle'] &&
        version_compare(TYPO3_version, '6.1.0', '>') &&
        version_compare(PHP_VERSION, '5.5.0', '>=')
    ) {
        // TYPO3 page title
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output'][] = 'JambageCom\\TtProducts\\Hooks\\ContentPostProcessor->setPageTitle';

        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-cached'][] = 'JambageCom\\TtProducts\\Hooks\\ContentPostProcessor->setPageTitle';
    }
}

if (TYPO3_MODE == 'BE') {
		// class for displaying the category tree in BE forms.
	include_once(PATH_BE_ttproducts . 'hooks/class.tx_ttproducts_hooks_be.php');
}


$listType = TT_PRODUCTS_EXT.'_pi_int';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info'][$listType][] = 'EXT:' . TT_PRODUCTS_EXT . '/hooks/class.tx_ttproducts_hooks_cms.php:&tx_ttproducts_hooks_cms->pmDrawItem';


  // Extending TypoScript from static template uid=43 to set up userdefined tag:
call_user_func($emClass . '::addTypoScript', $_EXTKEY,'editorcfg','tt_content.CSS_editor.ch.tt_products = < plugin.tt_products.CSS_editor ',43);


$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/mydashboard/class.tx_mydashboard_widgetmgm.php']['addWidget']['tt_products_latest'] = 'EXT:' . TT_PRODUCTS_EXT . '/widgets/class.tx_ttproducts_latest.php:tx_ttproducts_latest';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals']['tx_double6'] = 'EXT:' . DIV2007_EXTkey . '/hooks/class.tx_div2007_hooks_eval.php';


if (isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']) && is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch'])) {
	// TYPO3 4.5 with livesearch
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch'] = array_merge(
		$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch'],
		array(
			'tt_products' => 'tt_products',
			'tt_products_language' => 'tt_products_language',
			'tt_products_articles' => 'tt_products_articles',
			'tt_products_articles_language' => 'tt_products_articles_language',
			'tt_products_cat' => 'tt_products_cat',
			'tt_products_cat_language' => 'tt_products_cat_language',
			'sys_products_orders' => 'sys_products_orders'
		)
	);
}


if (call_user_func($emClass . '::isLoaded', 'searchbox')) {
	call_user_func($emClass . '::addPItoST43', $_EXTKEY, 'pi_search/class.tx_ttproducts_pi_search.php', '_pi_search', 'list_type', 0 );
}

call_user_func($emClass . '::addPItoST43', $_EXTKEY, 'pi_int/class.tx_ttproducts_pi_int.php', '_pi_int', 'list_type', 0 );




// support for new Caching Framework

$optionsArray = array();
$backendCache = 't3lib_cache_backend_NullBackend';

// Register cache 'tt_products_cache'
if (
	version_compare(TYPO3_version, '7.0.0', '<') &&
	isset($_EXTCONF['cache.']) &&
	$_EXTCONF['cache.']['backend'] &&
	!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache'])
) {
	if (
		isset($_EXTCONF['cache.']['options.']) &&
		$_EXTCONF['cache.']['options.']['servers'] != ''
	) {
		$optionsArray['servers'] = array($_EXTCONF['cache.']['options.']['servers']);
	}

	if (
		extension_loaded('memcache') &&
		isset($optionsArray['servers']) &&
		is_array($optionsArray['servers'])
	) {
		$backendCache = 't3lib_cache_backend_MemcachedBackend';
	} else if (extension_loaded('apc') || extension_loaded('apcu')) {
		$backendCache = 't3lib_cache_backend_ApcBackend';
	} else if (extension_loaded('redis')) {
		$backendCache = 't3lib_cache_backend_RedisBackend';
	}
}

if (
	version_compare(TYPO3_version, '7.0.0', '<') &&
	!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache'])
) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache'] = array();
}

// Define string frontend as default frontend, this must be set with TYPO3 4.5 and below
// and overrides the default variable frontend of 4.6
if (
	version_compare(TYPO3_version, '7.0.0', '<') &&
	!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['frontend'])
) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['frontend'] = 't3lib_cache_frontend_StringFrontend';
}

if (
	version_compare(TYPO3_version, '4.6.0', '>=') &&
	version_compare(TYPO3_version, '7.0.0', '<')
) {
	if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['backend'])) {
		$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['backend'] = $backendCache;
	}

	if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['options'])) {
		$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['options'] = $optionsArray;
	}
}


if (version_compare(TYPO3_version, '4.6.0', '<')) {

	call_user_func($emClass . '::addPItoST43', $_EXTKEY, 'pi1/class.tx_ttproducts_pi1.php', '_pi1', 'list_type', 1);

	// Define database backend as backend for 4.5 and below (default in 4.6)
	if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['backend'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['backend'] = 't3lib_cache_backend_DbBackend';
    }
	// Define data and tags table for 4.5 and below (obsolete in 4.6)
	if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['options'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['options'] = array();
    }
	if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['options']['cacheTable'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['options']['cacheTable'] = 'tt_products_cache';
    }
	if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['options']['tagsTable'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tt_products_cache']['options']['tagsTable'] = 'tt_products_cache_tags';
    }

	t3lib_cache::initializeCachingFramework();
} else {
	// add missing setup for the tt_content "list_type = 5" which is used by tt_products
	$addLine = 'tt_content.list.20.5 = < plugin.tt_products';
	call_user_func($emClass . '::addTypoScript', TT_PRODUCTS_EXT, 'setup', '
	# Setting ' . TT_PRODUCTS_EXT . ' plugin TypoScript
	' . $addLine . '
	', 43);
}


if (
	version_compare(TYPO3_version, '7.0.0', '<') &&
	isset($GLOBALS['typo3CacheFactory']) &&
	is_object($GLOBALS['typo3CacheFactory']) &&
	(
		version_compare(TYPO3_version, '4.6.0', '>=') ||
		TYPO3_UseCachingFramework
	)
) {
    // register the cache in BE so it will be cleared with "clear all caches"
    try {
		$cacheName = 'tt_products_cache';
		if (!$GLOBALS['typo3CacheManager']->hasCache($cacheName)) {
			$GLOBALS['typo3CacheFactory']->create(
				'tt_products_cache',
				$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$cacheName]['frontend'],
				$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$cacheName]['backend'],
				$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$cacheName]['options']
			);
		}
    } catch (t3lib_cache_exception_DuplicateIdentifier $e) {
        // do nothing, a tt_products_cache cache already exists
    }
}


if (
    TYPO3_MODE == 'BE' &&
    version_compare(TYPO3_version, '7.5.0', '>')
) {
    $pageType = 'ttproducts'; // a maximum of 10 characters
    $icons = array(
        'apps-pagetree-folder-contains-' . $pageType => 'apps-pagetree-folder-contains-tt_products.svg'
    );
    $iconRegistry = call_user_func($divClass . '::makeInstance', 'TYPO3\\CMS\\Core\\Imaging\\IconRegistry');
    foreach ($icons as $identifier => $filename) {
        $iconRegistry->registerIcon(
            $identifier,
            $iconRegistry->detectIconProvider($filename),
            array('source' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/apps/' . $filename)
        );
    }
}


/**
 * Extension: tmmarket
 * File: C:/xampp/htdocs/TMmarket/typo3conf/ext/tmmarket/ext_localconf.php
 */

$_EXTKEY = 'tmmarket';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


/*defined( name:'TYPO3_MODE') || die('Acess denied.');*/
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'] = 'EXT:tmmarket/Configuration/RTE/Full.yaml';



#