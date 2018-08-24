rootId = 49
siteTitle = Cange Global Supermarket


##Für den shop!##

#### CONSTANTS ####

# Seiten IDs in Konstanten auslagern
id_shoproot = 49
id_shopangebote = 55
id_shopkategorien = 52
id_shopsuche = 54
id_shopdetail = 53
id_shopwarenkorb = 58
id_shopkontrolle = 51
id_shopabschliessen = 56
id_shopagb = 59



# Sysfolder IDs
id_shopsysprodukte = 50
id_shopsyskategorien = 57

############
### PIDs ###
############

# Sysfolder mit den Produkten #
plugin.tt_products.pid_list = {$id_shopsysprodukte}

# Rootseite des Shops
plugin.tt_products.PIDstoreRoot = {$id_shoproot}

# Seiten ID für Listenansicht
plugin.tt_products.PIDlistDisplay = {$id_shopkategorien}

# Seiten ID für Warenkorbabsicht
plugin.tt_products.PIDbasket = {$id_shopwarenkorb}

# Seiten ID für Einzelansicht
plugin.tt_products.PIDitemDisplay = {$id_shopdetail}

# Seiten ID für Kontrolle und Bezahlung
plugin.tt_products.PIDpayment = {$id_shopkontrolle}

# Seiten ID für Bestellung abschließen
plugin.tt_products.PIDfinalize = {$id_shopabschliessen}

# Seiten ID für AGB
plugin.tt_products.PIDagb = {$id_shopagb}

# AGB im selben Fenster öffnen
plugin.tt_products.AGBtarget = _parent

# Seiten ID für Suche
plugin.tt_products.PIDsearch = {$id_shopsuche}

###################################
### Email und Web Einstellungen ###
###################################

# Titel des Emails
plugin.tt_products.orderEmail_subject = www.mydomain.at: Ihre Bestellung

# Absende Adresse des Emails
plugin.tt_products.orderEmail_from = fritznel.aedifex@gmail.com

 # Absender des Emails
plugin.tt_products.orderEmail_fromName = Cange Supermarket

# Email mit der Bestellung geht an
plugin.tt_products.orderEmail_to = fritznel.aedifex@gmail.com

# Domaine auf der der Shop läuft
plugin.tt_products.domain = https://localhost/TMmarket/typo3/

################################
### Template Datei einbinden ###
################################

plugin.tt_products.file.templateFile = fileadmin/user_upload/shop/tt_products_css.html

############################
### Grafik Einstellungen ###
############################

# Eigens Symbol für den Shoppingcart definieren
plugin.tt_products.basketPic = fileadmin/user_upload/shop/icons/basket-big.gif

# Maximale Breite der Bilder in der Listenansicht
plugin.tt_products.maxW_list = 120

# Maximale Breite der Bilder in der Singelansicht
plugin.tt_products.maxW_single = 300

# Maximale Breite und Höhe der Popup Bilder
plugin.tt_products.maxW_popup = 550
plugin.tt_products.maxH_popup = 350

# Maximale Breite der Bilder im Warenkorb
plugin.tt_products.maxW_basket = 60

################
### Diverses ###
################

# maximale Anzahl des selben Produktes
plugin.tt_products.basketMaxQuantity = 50

# Pflichtfelder
plugin.tt_products.requiredInfoFields = name, address, city, zip, email

# Email nur als Plaintext
plugin.tt_products.htmlmail = 0

# Maximale Anzahl der Bilder in der Listenansicht
plugin.tt_products.limitImage = 1

# Maximal Produkte in der Listenansicht, danach Pagebrowser
plugin.tt_products.limit = 10


# Damit die Combobox für die Länderauswahl angezeigt wird
plugin.tt_products.useStaticInfoCountry = 1

# Default Sprache festlegen
plugin.tx_staticinfotables_pi1.languageCode = AT

# Default Land festlegen
plugin.tx_staticinfotables_pi1.countryCode = AUT

# Default Country Zone festlegen
plugin.tx_staticinfotables_pi1.countryZoneCode = AT-3

# Default Währung festlegen
plugin.tx_staticinfotables_pi1.currencyCode = EUR
plugin.tt_products.TAXpercentage = 19
plugin.tt_products.noZeroDecimalPoint = 0
plugin.tt_products.percentNoZeroDecimalPoint = 0
plugin.tt_products.debug = 0
plugin.tt_products.test = 815
plugin.tt_products.currencySymbol = HT
plugin.tt_products.rootPageID = 49
