#### SETUP ####
# Eigenes Stylesheet einbinden
## CSS einbinden
##page.includeCSS {
  ##10 = fileadmin/user_upload/shop/tt_products.css
##}
config.no_cache = 1
page=PAGE
page.typeNum = 0

page.stylesheet=fileadmin/user_upload/shop/tt_products.css


# Default Stylesheet deaktivieren
plugin.tt_products._CSS_DEFAULT_STYLE =
plugin.tt_products.statusCodes {
# 1: Eingehende Bestellung
1 = Bestellung
# 2-49: Nutzung durch Shopadmin
2 = Ihre Bestellung ist eingegangen
10 = Der Shop erwartet Waren eines Drittanbieters
11 = Der Shop erwartet Ihren Zahlungseingang
12 = Der Shop erwartet Ihre Materiallieferung
13 = Die Bestellung ist bezahlt
20 = Ihre Bestellung wurde versandt
21 = Geschenkgutscheine wurden versandt
30 = Die Waren mussten für Sie bestellt werden.
# 50-99: Nutzung durch den Kunden
# 50-59: Generelle, statische Meldungen vom Kunden (Drop-Down Kommentar-Header)
50 = Kunde möchte Bestellung stornieren
51 = Nachricht des Kunden an den Shop
# 60-69: Spezielle Meldungen
60 = Send gift certificate message to receiver
# 100-299 : Bestellung abgeschlossen.
100 = Die Bestellung ist versandt und abgeschlossen
101 = Die Bestellung ist abgeschlossen
200 = Die Bestellung wurd storniert

statusDate_stdWrap.strftime= %e-%m-%y %H:%M
orderDate_stdWrap.strftime= %e-%m-%y
}

stdSearchFieldExt = subtitle
}

### Bezahlungsoptionen ###

# Bezahlmethoden zurücksetzen
plugin.tt_products.payment >

# Eigene Bezahlmethoden festlegen
plugin.tt_products.payment {

  radio=0
  # Steuersatz
  TAXpercentage = 20

  # Bezahlung mit Rechnung
  10.title = Rechnung
  10.priceTax =
  10.calculationScript = EXT:tt_products/pi1/products_comp_calcScript.inc

  # Barzahlung
  20.title = Barzahlung
  20.image.file =
  20.priceTax =

  # Bezahlung per Nachnahme
  30.title = Nachnahme
}

### Versandoptionen ###
plugin.tt_products.shipping {
  # Steuersatz
  TAXpercentage = 20

  # Titel
  10.title = Versand innerhalb Österreichs

  # Welche Länder sind in der Combobox zu sehen?
  # Hier nur Österreich
  10.where.static_countries = cn_iso_2 = 'AT'

  # Preis
  10.price = 4.50

  # Steuer bereits enthalten?
  10.TAXincluded = 1

  # Auswahl der Zahlungsmethoden Einschränken
  # Barzahlung oder Nachnahme bei Versand nicht möglich
  10.excludePayment = 20, 30

  20.title = Selbstabholer
  20.where.static_countries = cn_iso_2 = 'AT'
  20.price = 0
  20.TAXincluded = 1
  # Rechnung und Nachnahme bei Selbstabholer nicht möglich
  20.excludePayment = 10, 30

  30.title = Nachnahme innerhalb Österreichs
  30.where.static_countries = cn_iso_2 = 'AT'
  30.price = 8.50
  30.TAXincluded = 1
  # Rechnung und Barzahlung bei Nachnahme nicht möglich
  30.excludePayment = 10, 20
}

page.10.marks.CONTENT_RIGHT = COA
page.10.marks.CONTENT_RIGHT {
  # Kategorienbaum einfügen
  10 < plugin.tt_products
  10.code >
  10.code = MENUCAT
  # Sysfolder mit den Kategorien
  10.pid_list = {$id_shopsyskategorien}
  10.expAll = 1
}
page.10.marks.CONTENT_RIGHT {
  20 < plugin.tt_products
  20.code >
  20.code = OVERVIEW
  20.pid_list = {$id_shopsysprodukte}
}

# manuelle Sortierung ermöglichen
plugin.tt_products.conf.tt_products_cat.ALL.orderBy = sorting
plugin.tt_products.conf.tt_products.LIST.orderBy = sorting
