<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (AR)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

use SJBR\StaticInfoTables\Domain\Model\Country;

return [
    Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameLt' => [
                'fieldName' => 'cn_short_lt',
            ],
        ],
    ],
];
