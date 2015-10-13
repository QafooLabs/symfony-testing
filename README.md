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

| Method                                                      | Description                              |
|-------------------------------------------------------------|------------------------------------------|
| `$this->assertEquals($expected, $actual)`                   | Compare two values with PHPs == operator |
| `$this->assertSame($expected, $actual)`                     | Compare two values with PHPs === operator|
| `$this->assertContains($haystack, $needle)`                 | Check if a string contains substring     |
| `$this->assertCount($expectedCount, $arrayOrCountable)`     | Check size of array or Countable         |

Symfony BrowserKit API
----------------------

| Method                            | Description                           |
|-----------------------------------|---------------------------------------|
| `$client->request($method, $uri)` | Send a Request, returns a `Crawler`   |
| `$client->getResponse()`          | Access to the last response.          |
| `$client->click(Link $link)`      | Go to the page of the passed `Link`   |
| `$client->submit(Form $form)`     | Send form data to page in `Form`      |
| `$client->followRedirects($flag)  | Follow redirects automatically now    |
| `$client->followRedirect()        | Follow redirect of current response   |

Symfony Browser Client::request() Parameters
--------------------------------------------

| Parameter             | Description                                   |
|-----------------------|-----------------------------------------------|
| `$method`             | HTTP Method, i.e. GET, PUT                    |
| `$uri`                | Relative Uri to page including query string   |
| `$parameters`         | Array of POST Form Fields (optional)          |
| `$files`              | Array of `UploadedFile` (optional)            |
| `$server`             | Array of `$_SERVER` variables (optional)      |
| `$content`            | String of HTTP Request Payload/Body           |

Symfony DomCrawler API
----------------------

The `Client::request()` method returns a `Crawler` instance with the following methods:

| Method                        | Description                                       |
|-------------------------------|---------------------------------------------------|
| `$crawler->filter($css)       | Return a new crawler with nodes matching selector |
| `$crawler->filterXpath($xpath)| Return a new crawler with nodes matching XPath    |
| `$crawler->html()`            | Return the HTML of all children                   |
| `$crawler->text()`            | Return the Text of all children (DOM nodeValue)   |
| `$crawler->attr($name)`       | Return the attribute value of the first node      |
| `$crawler->selectLink($name)`  | Selects links by name or alt value for clickable images. |
| `$crawler->selectButton($name)`| Selects a button by name or alt value for images. |

Mink Session API
----------------

| Method                                                      | Description                               |
|-------------------------------------------------------------|-------------------------------------------|
| `$session->getPage()->visit($url)`                          | Visit the page with given url.            |
| `$session->getPage()->getContent()`                         | Return response body of last visited page.|
| `$session->getPage()->clickLink($locator)`                  | Click Link (will visit page)`             |
| `$session->getPage()->pressButton($locator)`                | Press the selected button                 |
| `$session->getPage()->fillField($locator, $value)`          | Fill input of a form                      |
| `$session->getPage()->checkField($locator)`                 | Check a checkbox                          |
| `$session->getPage()->uncheckField($locator)`               | Uncheck a checkbox                        |
| `$session->getPage()->selectFieldOption($locator, $value)`  | Select an option                          |
