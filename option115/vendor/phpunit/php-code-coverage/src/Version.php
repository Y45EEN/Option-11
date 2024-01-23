<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage;

use function dirname;
use SebastianBergmann\Version as VersionId;

final class Version
{
    private static string $version = '';

    public static function id(): string
    {
        if (self::$version === '') {
<<<<<<< Updated upstream:option115/vendor/phpunit/php-code-coverage/src/Version.php
            self::$version = (new VersionId('10.1.7', dirname(__DIR__)))->asString();
=======
            self::$version = (new VersionId('10.1.10', dirname(__DIR__)))->asString();
>>>>>>> Stashed changes:breeze3/vendor/phpunit/php-code-coverage/src/Version.php
        }

        return self::$version;
    }
}
