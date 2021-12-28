//------------------------  Allgemeine Infos zum Projektteam -------------------------//

Projekt: Ludomo
Studenten:
            - 8528264   (Mohamed Haji)
            - 4873531   (Lukas Hauzinger)
            - 8233288   (Dominic Merkle)

Beschreibung: Es wird hierbei an einem webbasiertes CMS (Content Management System) gearbeitet.
              Die Idee ist es, einen Gaming Shop zu erstellen, wo Admins die Website verwalten können.
              Natürlich können auch normal Benutzer (Nicht Admin) auf die Website zugreifen und surfen.
              Nur nicht verwalten und Optionen ändern.


//------------------------  Allgemeine Infos zum Projekt -------------------------//

- Für die Darstellung der Website verwenden wir unser eigener CSS Code und verzichten auf Frameworks.
- Fontawesome wird lediglich, um das Warenkorb-Icon anzuzeigen.
- Wir benötigen keine spezielle Funktionen für z.B. das PDF erstellen, daher benutzen wir auch keine PHP-Libraries
- Für das PopUp Fenster haben wir einen JavaScript Funktion benötigt (alert() & window.location), da wir sonst keine PHP-Funktionen gefunden haben.
- Unser Branding ist selbst erstellt/entwickelt (Logo, etc...).
- Unser Quelltxt wurde oft auf Errors geprüft. Wir habe alle Errors behoben.
  Also ist unsere Website fehlerfrei, jedoch können Fehler auftreten bei falscher Verwaltung des Systems.
  Beispiel: Produkt hinzufügen und dabei vergessen einen Bild dafür auszuwählen oder die falsche Datei-Format hochladen.
- Die Datenbank wird initialisiert und mit den Daten vom BackUP befüllt. Dies erfolgt nur beim Laden der Home Seite,
  wenn die Datenbank noch nicht angelegt ist.
- Unter Account sind bereits zwei Admins angelegt.
  Wir empfehlen daher einen weiteren Account zu regestrieren, um die Funktionalität besser in Erfahrungen zu bringen.



//------------------------  Funktionale Anforderungen -------------------------//

A = Administrator | R = Registrierter Benutzer | B = Besucher (Nicht registriert)

1. CRUD:
  - Alle Nutzer können auf das eigene Profil zugreifen. (A, R)
  - Nur Admin kann auf alle Benutzerkonten zugreifen. (A)
  - Admins können Produkte hinzufügen/löschen/verändern (A)
  - Alle Website-Nutzer können einen Warenkorb haben. (A, R, B)
  - Alle Website-Nutzer können die Produkte anschauen (A, R, B)
  - Admin kann Benutzerkonten verwalten (Feature). (A)
  - User können ihren eigenen Account löschen (Feature) (A, R)

2. Listenansicht:
  - Admins können Benutzerkonten auflisten dazu noch verwalten (Feature). (A)
  - Alle Website-Nutzer können die Produkte auflisten. (A, R, B)
  - Admins können gelistete Produkte verändern. (A)

3. Sortierung & Filterung nach:
  - FSK
  - Platform
  - Preis (maximal Preis)
  - Preis (Aufsteigend oder Absteigend)
  - Genre
  - Brand (Feature)
  - Game-Mode wie Singleplayer oder Multiplayer (Feature)

4. Sonstiges:
  - Automatischer Wechselnder Hintergrund (Zeit basiert)
  - Produktbeschreibung anzeigen. (A, R, B) + Verändern (Feature). (A)
  - Die allgemeine Verwaltung des Systems kann nur ein Admin übernehmen. (A)


//------------------------          Hinweise      -------------------------//

- Die Videos zu der Website & Quellcode sind im Footer des Websites (Verlinkt) zu finden.
  Wir wünschen Ihnen viel Spaß beim Zuschauen.
- Sollte die Bildqualtität der Videos schlecht sein, klicken Sie oben rechts auf dem Pfeil um das Video über Google Drive herunterzuladen.
  Dann muss die Bildqualtität besser sein.
- Projekt is auch in GitHub zu finden unter: https://github.com/Moha-01/ludomo.

Probieren SIe dies aus: https://areyousure.netlify.app/
