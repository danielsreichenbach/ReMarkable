<?php

/**
 * This file is part of the ReMarkable library.
 *
 * Copyright (c) 2012 Kroc Camen <kroccamen@gmail.com>
 * Copyright (c) 2013 Daniel S. Reichenbach <daniel@kogitoapp.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this bundle.
 *
 * @link http://github.com/danielsreichenbach/ReMarkable/ "ReMarkable - source code repositories"
 * @link http://github.com/Kroc/ReMarkable/ "ReMarkable - Original source code repositories"
 */

namespace marenkay\remarkable;

/**
 * Interface definition for a ReMarkable parser.
 */
interface RemarkableParserInterface
{
    /**
     * Transform ReMarkable markup into HTML.
     *
     * @param string $text A ReMarkable text string
     *
     * @return string $markup The resulting HTML
     */
    public function transformReMarkable($text);
}
