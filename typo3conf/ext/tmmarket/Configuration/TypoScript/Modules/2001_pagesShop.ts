# Cache NUR in der Entwicklungsphase ausschalten
config.no_cache = 1

#### SETUP ####

# Eigenes Stylesheet einbinden
page.headerData.1025 = TEXT
page.headerData.1025.value (
   <link rel="stylesheet" type="text/css" href="fileadmin/user_upload/shop/tt_products.css" />
)

# Default Stylesheet deaktivieren
plugin.tt_products._CSS_DEFAULT_STYLE = 0


### Bezahlungsoptionen ###

# Bezahlmethoden zurücksetzen
plugin.tt_products.payment >

# Eigene Bezahlmethoden festlegen
plugin.tt_products.payment {
  # Steuersatz
  TAXpercentage = 20

  # Bezahlung mit Rechnung
  10.title = Rechnung

  # Barzahlung
  20.title = Barzahlung

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
