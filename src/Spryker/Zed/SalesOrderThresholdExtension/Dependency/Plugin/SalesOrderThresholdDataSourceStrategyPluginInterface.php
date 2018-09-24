<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesOrderThresholdExtension\Dependency\Plugin;

use Generated\Shared\Transfer\SalesOrderThresholdQuoteTransfer;

interface SalesOrderThresholdDataSourceStrategyPluginInterface
{
    /**
     * Specification:
     * - Checks if a threshold is applicable for the given Quote.
     * - Return the applicable threshold data.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\SalesOrderThresholdQuoteTransfer $salesOrderThresholdQuoteTransfer
     *
     * @return \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer[]
     */
    public function findApplicableThresholds(SalesOrderThresholdQuoteTransfer $salesOrderThresholdQuoteTransfer): array;
}
