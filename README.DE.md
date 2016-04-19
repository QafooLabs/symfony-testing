# Symfony Functional Testing Workshop

Vorrausetzungen:

- PHP 5.5.9+
- PDO Sqlite oder MySQL Installation
- Entwicklungsumgebung mit Editor oder IDE
- Qafoo Symfony Testing Edition installieren (https://github.com/QafooLabs/symfony-testing)

Es gibt zwei Möglichkeiten der Installation der Testing Edition. Bei Fragen oder Problemen beim Setup
bitte eine e-Mail an benjamin@qafoo.com schreiben.

## Installation mit Git

Für die Installation aus den Git Quellen sind folgende Schritte auf der Shell notwendig:

    git clone https://github.com/QafooLabs/symfony-testing.git
    cd symfony-testing
    composer install

Wenn kein Composer installiert ist bitte den Instruktionen auf der Composer Webseite folgen:

https://getcomposer.org/doc/00-intro.md

Manchmal stößt man beim Installieren via Composer an das Github RateLimit, Lösung dafür:

https://getcomposer.org/doc/articles/troubleshooting.md#api-rate-limit-and-oauth-tokens

## Installation mit ZIP

1. ZIP Datei des Repositories herunterladen: https://github.com/QafooLabs/symfony-testing/archive/master.zip

2. In Arbeitsverzeichnis entpacken und enthaltenen Ordner in "symfony-testing" umbennen.

3. Ins Verzeichnis wechseln und "composer install" aufrufen.

## Lauffähigkeit testen

Auf der Shell im "symfony-testing" Verzeichnis folgedes

    php app/console server:run

Dann auf die URL im Output klicken, es sollte eine Symfony Success + Willkommensseite angezeigt werden.
