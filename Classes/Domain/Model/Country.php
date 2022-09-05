<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (LT)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameLt = '';

    /**
     * @return string
     */
    public function getShortNameLt(): string
    {
        return $this->shortNameLt;
    }

    /**
     * @param string $shortNameLt
     */
    public function setShortNameLt(string $shortNameLt): void
    {
        $this->shortNameLt = $shortNameLt;
    }
}
