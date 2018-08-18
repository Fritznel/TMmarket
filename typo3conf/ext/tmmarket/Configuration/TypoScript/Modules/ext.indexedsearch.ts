## Dokumentation: https://docs.typo3.org/typo3cms/extensions/indexed_search/latest/Introduction/Index.html

plugin.tx_indexedsearch.view.partialRootPaths.100 = EXT:tmmarket/Resources/Private/indexed_search/Partials/
plugin.tx_indexedsearch.view.templateRootPaths.100 = EXT:tmmarket/Resources/Private/indexed_search/Templates/

plugin.tx_indexedsearch.settings {
	targetPid = 64
	rootPidList = {$rootId}
}

plugin.tx_indexedsearch.settings.results.markupSW_summaryMax = 120

lib.search = RECORDS
lib.search {
	tables = tt_content
	source = 29
	dontCheckPid = 1
}

[globalVar = TSFE:id=64]
lib.search >
[global]
