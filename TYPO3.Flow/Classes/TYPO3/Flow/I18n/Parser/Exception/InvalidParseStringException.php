<?php
namespace TYPO3\Flow\I18n\Parser\Exception;

/*
 * This file is part of the TYPO3.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\Flow\I18n;

/**
 * The "Invalid Parse String" exception
 *
 * It is thrown when concrete parser encounters a character sequence which
 * cannot be parsed. This exception is only used internally.
 *
 * @api
 */
class InvalidParseStringException extends I18n\Exception
{
}