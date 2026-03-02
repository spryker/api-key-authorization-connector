<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\ApiKeyAuthorizationConnector\Communication\Plugin;

use Codeception\Test\Unit;
use Spryker\Zed\ApiKeyAuthorizationConnector\Communication\Plugin\Authorization\ApiKeyAuthorizationStrategyPlugin;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Zed
 * @group ApiKeyAuthorizationConnector
 * @group Communication
 * @group Plugin
 * @group ApiKeyAuthorizationStrategyPluginTest
 * Add your own group annotations below this line
 */
class ApiKeyAuthorizationStrategyPluginTest extends Unit
{
    /**
     * @var \SprykerTest\Zed\ApiKeyAuthorizationConnector\ApiKeyAuthorizationConnectorCommunicationTester
     */
    protected $tester;

    public function testNotAutorizedWhenIdentifierIsMissing(): void
    {
        //Arrange
        $authorizationRequestTransfer = $this->tester->getAuthorizationRequestTransferWithoutIdentifier();
        $apiKeyAuthorizationStrategyPlugin = $this->getApiKeyAuthorizationStrategyPlugin();

        //Act
        $autorized = $apiKeyAuthorizationStrategyPlugin->authorize($authorizationRequestTransfer);

        //Assert
        $this->assertFalse($autorized);
    }

    public function testNotAutorizedWhenIdentifierIsWrong(): void
    {
        //Arrange
        $authorizationRequestTransfer = $this->tester->getAuthorizationRequestTransferWithIdentity();
        $apiKeyAuthorizationStrategyPlugin = $this->getApiKeyAuthorizationStrategyPlugin();

        //Act
        $autorized = $apiKeyAuthorizationStrategyPlugin->authorize($authorizationRequestTransfer);

        //Assert
        $this->assertFalse($autorized);
    }

    protected function getApiKeyAuthorizationStrategyPlugin(): ApiKeyAuthorizationStrategyPlugin
    {
        return new ApiKeyAuthorizationStrategyPlugin();
    }
}
