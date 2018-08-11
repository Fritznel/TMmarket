## Rootline [BEGIN]

lib.rootline = HMENU

# Rootline type
lib.rootline.special = rootline
//area of rootline, where I start, where I stop. ex: -6|-1
lib.rootline.special.range = rootline

# Premier niveau, textuelle
lib.rootline.1 = TMENU

## DEFINE LANGUAGE [BEGIN]

## DEFAULT LANGUAGE
		lib.rootline.1.wrap = <ul id="rootline"><li class="{$rootlineMsgClass}">{$rootlineMsg_0}</li> |</ul><div class="clearBoth"></div>

## LANGUAGE 1
	[globalVar = GP:L = 1]
		lib.rootline.1.wrap = <ul id="rootline"><li class="{$rootlineMsgClass}">{$rootlineMsg_1}</li> |</ul><div class="clearBoth"></div>
	[global]
## LANGUAGE 2
	[globalVar = GP:L = 2]
		lib.rootline.1.wrap = <ul id="rootline"><li class="{$rootlineMsgClass}">{$rootlineMsg_2}</li> |</ul><div class="clearBoth"></div>
	[global]


## DEFINE LANGUAGE [END]

lib.rootline.1.NO{
	linkWrap = <li class="{$rootlineClass}">|</li>
	subst_elementUid = 1
}

//effects on current element
lib.rootline.1.CUR = 1
lib.rootline.1.CUR {
	linkWrap = <li class="{$rootlineActifClass}">|</li>
	doNotLinkIt = 1
}

## Rootline [END]
