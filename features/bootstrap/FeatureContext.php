<?php
// Using https://github.com/KnpLabs/behat-webapi-demo/blob/master/features/bootstrap/FeatureContext.php as example
// but with our own Buzz\Browser

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Buzz\Browser;
use Buzz\Client;

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
  private $browser;

  /**
   * Initializes context.
   * Every scenario gets its own context object.
   *
   * @param array $parameters context parameters (set them up through behat.yml)
   */
  public function __construct(array $parameters)
  {
    $this->browser = new Browser(new Client\Curl());
    $this->useContext('api',
      new Behat\CommonContexts\WebApiContext($parameters['base_url'], $this->browser)
    );

    $this->getSubcontext('api')
      ->setPlaceHolder('BASE_URL', rtrim($parameters['base_url'], '/'));
  }

  /**
   * @Given /^response should have at least (\d+) json objects$/
   */
  public function responseShouldHaveAtLeastJsonObjects($expected)
  {
    $res = json_decode($this->browser->getLastResponse()->getContent(), true);
    assertGreaterThanOrEqual($expected, count($res));
  }
}
