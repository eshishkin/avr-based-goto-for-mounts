function isCompatible(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/mediawiki/load.php","apiScript":"/mediawiki/api.php"}});mw.loader.register([["site","1487799370",[],"site"],["noscript","1487799370",[],"noscript"],["startup","1503165150",[],"startup"],["filepage","1487799370"],["user.groups","1487799370",[],"user"],["user","1487799370",[],"user"],["user.cssprefs","1487799370",["mediawiki.user"],"private"],["user.options","1487799370",[],"private"],["user.tokens","1487799370",[],"private"],["mediawiki.language.data","1503165150",["mediawiki.language.init"]],["skins.chick","1487799370"],["skins.cologneblue","1487799370"],["skins.modern","1487799370"],["skins.monobook","1487799370"],["skins.nostalgia","1487799370"],["skins.simple","1487799370"],["skins.standard","1487799370"],["skins.vector","1487799370"],[
"skins.vector.js","1487799370"],["jquery","1487799370"],["jquery.appear","1487799370"],["jquery.arrowSteps","1487799370"],["jquery.async","1487799370"],["jquery.autoEllipsis","1487799370",["jquery.highlightText"]],["jquery.badge","1487799370",["mediawiki.language"]],["jquery.byteLength","1487799370"],["jquery.byteLimit","1487799370",["jquery.byteLength"]],["jquery.checkboxShiftClick","1487799370"],["jquery.client","1487799370"],["jquery.color","1487799370",["jquery.colorUtil"]],["jquery.colorUtil","1487799370"],["jquery.cookie","1487799370"],["jquery.delayedBind","1487799370"],["jquery.expandableField","1487799370",["jquery.delayedBind"]],["jquery.farbtastic","1487799370",["jquery.colorUtil"]],["jquery.footHovzer","1487799370"],["jquery.form","1487799370"],["jquery.getAttrs","1487799370"],["jquery.hidpi","1487799370"],["jquery.highlightText","1487799370",["jquery.mwExtension"]],["jquery.hoverIntent","1487799370"],["jquery.json","1487799370"],["jquery.localize","1487799370"],[
"jquery.makeCollapsible","1487799488"],["jquery.mockjax","1487799370"],["jquery.mw-jump","1487799370"],["jquery.mwExtension","1487799370"],["jquery.placeholder","1487799370"],["jquery.qunit","1487799370"],["jquery.qunit.completenessTest","1487799370",["jquery.qunit"]],["jquery.spinner","1487799370"],["jquery.jStorage","1487799370",["jquery.json"]],["jquery.suggestions","1487799370",["jquery.autoEllipsis"]],["jquery.tabIndex","1487799370"],["jquery.tablesorter","1487799515",["jquery.mwExtension"]],["jquery.textSelection","1487799370",["jquery.client"]],["jquery.validate","1487799370"],["jquery.xmldom","1487799370"],["jquery.tipsy","1487799370"],["jquery.ui.core","1487799370",["jquery"],"jquery.ui"],["jquery.ui.widget","1487799370",[],"jquery.ui"],["jquery.ui.mouse","1487799370",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1487799370",[],"jquery.ui"],["jquery.ui.draggable","1487799370",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable"
,"1487799370",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1487799370",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1487799370",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1487799370",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1487799370",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1487799370",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1487799370",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1487799370",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1487799370",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1487799370",[
"jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1487799370",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1487799370",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1487799370",["jquery"],"jquery.ui"],["jquery.effects.blind","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale",
"1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1487799370",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1487799370",["jquery.effects.core"],"jquery.ui"],["mediawiki","1487799370"],["mediawiki.api","1487799370",["mediawiki.util"]],["mediawiki.api.category","1487799370",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1487799370",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1487799370",["mediawiki.api"]],["mediawiki.api.watch","1487799370",["mediawiki.api","user.tokens"]],["mediawiki.debug","1487799370",["jquery.footHovzer"]],["mediawiki.debug.init","1487799370",["mediawiki.debug"]],["mediawiki.feedback","1487799370",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.hidpi","1487799370",["jquery.hidpi"]],["mediawiki.htmlform","1487799370"],["mediawiki.notification","1487799370",[
"mediawiki.page.startup"]],["mediawiki.notify","1487799370"],["mediawiki.searchSuggest","1487799488",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions"]],["mediawiki.Title","1487799370",["mediawiki.util"]],["mediawiki.Uri","1487799370"],["mediawiki.user","1487799370",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1487799380",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1487799370",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.preview","1487799370",["jquery.form","jquery.spinner"]],["mediawiki.action.history","1487799370",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1487799370",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1487799370",["mediawiki.util","mediawiki.page.startup"]],["mediawiki.action.view.metadata","1487799370"],["mediawiki.action.view.postEdit","1487799370",["jquery.cookie"]],[
"mediawiki.action.view.rightClickEdit","1487799370"],["mediawiki.action.watch.ajax","1487799370",["mediawiki.page.watch.ajax"]],["mediawiki.language","1487799370",["mediawiki.language.data","mediawiki.cldr"]],["mediawiki.cldr","1487799370",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1487799370"],["mediawiki.language.init","1487799370"],["mediawiki.jqueryMsg","1487799370",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1487799370"],["mediawiki.page.ready","1487799370",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1487799370",["jquery.client","mediawiki.util"]],["mediawiki.page.patrol.ajax","1489070018",["mediawiki.page.startup","mediawiki.api","mediawiki.util","mediawiki.Title","mediawiki.notify","jquery.spinner","user.tokens"]],["mediawiki.page.watch.ajax","1487799540",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util",
"mediawiki.notify","jquery.mwExtension"]],["mediawiki.special","1487799370"],["mediawiki.special.block","1487799370",["mediawiki.util"]],["mediawiki.special.changeemail","1487893179",["mediawiki.util"]],["mediawiki.special.changeslist","1487799370",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1487799370",["jquery.byteLimit"]],["mediawiki.special.preferences","1487799370"],["mediawiki.special.recentchanges","1487799370",["mediawiki.special"]],["mediawiki.special.search","1487799539"],["mediawiki.special.undelete","1487799370"],["mediawiki.special.upload","1488105357",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin.signup","1487799370"],["mediawiki.special.javaScriptTest","1487799370",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1487799370",["jquery.getAttrs","jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1487799370",["mediawiki.util","mediawiki.legacy.wikibits"
]],["mediawiki.legacy.commonPrint","1487799370"],["mediawiki.legacy.config","1487799370",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1487799370",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1487799370",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1487799370"],["mediawiki.legacy.oldshared","1487799370"],["mediawiki.legacy.upload","1487799370",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.wikibits","1487799370",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1487799370"],["ext.cite","1487799370",["jquery.tooltip"]],["jquery.tooltip","1487799370"],["ext.rtlcite","1487799370"],["ext.math.mathjax","1487799370",[],"ext.math.mathjax"],["ext.math.mathjax.enabler","1487799370"],["ext.nuke","1487799370"],["ext.categoryTree","1487799866"],["ext.categoryTree.css","1487799370"],["ext.lazyload","1487799370",["jquery","mediawiki","mediawiki.hidpi"]]]);mw.config.set({"wgLoadScript":"/mediawiki/load.php","debug"
:false,"skin":"vector","stylepath":"/mediawiki/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"/mediawiki","wgScriptExtension":".php","wgScript":"/mediawiki/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://reprap.org","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.21.1","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"RepRapWiki","5":"RepRapWiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","274":"Widget","275":"Widget talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk"
:1,"user":2,"user_talk":3,"reprapwiki":4,"reprapwiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"widget":274,"widget_talk":275,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"RepRapWiki","wgFileExtensions":["png","jpg","jpeg","svg","amf","stl","sch","gbr","pcb","brd","scad","pdf","tar.gz","zip"],"wgDBname":"mediawiki_121","wgFileCanRotate":true,"wgAvailableSkins":{"cologneblue":"CologneBlue","standard":"Standard","simple":"Simple","modern":"Modern","monobook":"MonoBook","vector":"Vector","nostalgia":"Nostalgia","chick":"Chick","myskin":"MySkin"},"wgExtensionAssetsPath":"/mediawiki/extensions","wgCookiePrefix":"mediawiki_121","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[]});};if(isCompatible()){document.write(
"\x3cscript src=\"/mediawiki/load.php?debug=false\x26amp;lang=en\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=vector\x26amp;version=20130528T131929Z\"\x3e\x3c/script\x3e");}delete isCompatible;
/* cache key: mediawiki_121:resourceloader:filter:minify-js:7:117e22bd03ec0d68fed0689a851ff375 */