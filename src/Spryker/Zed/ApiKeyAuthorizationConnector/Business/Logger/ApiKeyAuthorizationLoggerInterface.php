<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ApiKeyAuthorizationConnector\Business\Logger;

use Generated\Shared\Transfer\AuthorizationRequestTransfer;

interface ApiKeyAuthorizationLoggerInterface
{
    public function logInfo(AuthorizationRequestTransfer $authorizationRequestTransfer, string $apiKey): void;
}
