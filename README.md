Symfony Testing Workshop
========================

Currently Using

- Symfony ~2.7
- Behat 3.0
- PHPUnit 5

Installation from Composer
--------------------------

Perform these steps in your shell:

    git clone https://github.com/QafooLabs/symfony-testing.git
    cd symfony-testing
    composer install

Sometimes you need to generate a token for Github API, follow this docs:

https://getcomposer.org/doc/articles/troubleshooting.md#api-rate-limit-and-oauth-tokens

Installation from ZIP/Tarball
-----------------------------

1. Go to [Release page](https://github.com/QafooLabs/symfony-testing)
2. Download latest ZIP or Tarball with Vendors
3. Unzip the downloaded file, it will create a "symfony-testing" folder.

Usage
-----

Run PHPUnit

    php bin/phpunit

Run Behat

    php bin/behat

PHPUnit Assertions API
----------------------

| Method                                                    | Description                              |
|-----------------------------------------------------------|------------------------------------------|
| $this->assertEquals($expected, $actual)                   | Compare two values with PHPs == operator |
| $this->assertSame($expected, $actual)                     | Compare two values with PHPs === operator|
| $this->assertContains($haystack, $needle)                 | Check if a string contains substring     |
| $this->assertCount($expectedCount, $arrayOrCountable)     | Check size of array or Countable         |

Mink Session API
----------------

| Method                                                    | Description                               |
|-----------------------------------------------------------|-------------------------------------------|
| $session->getPage()->visit($url)                          | Visit the page with given url.            |
| $session->getPage()->getContent()                         | Return response body of last visited page.|
| $session->getPage()->clickLink($locator)                  | Click Link (will visit page)              |
| $session->getPage()->pressButton($locator)                | Press the selected button                 |
| $session->getPage()->fillField($locator, $value)          | Fill input of a form                      |
| $session->getPage()->checkField($locator)                 | Check a checkbox                          |
| $session->getPage()->uncheckField($locator)               | Uncheck a checkbox                        |
| $session->getPage()->selectFieldOption($locator, $value)  | Select an option                          |
