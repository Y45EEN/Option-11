<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon\Doctrine;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use DateTimeInterface;
use Doctrine\DBAL\Platforms\AbstractPlatform;
<<<<<<< Updated upstream:option115/vendor/nesbot/carbon/src/Carbon/Doctrine/CarbonTypeConverter.php
use Doctrine\DBAL\Types\ConversionException;
=======
use Doctrine\DBAL\Platforms\DB2Platform;
use Doctrine\DBAL\Platforms\OraclePlatform;
use Doctrine\DBAL\Platforms\SQLitePlatform;
use Doctrine\DBAL\Platforms\SQLServerPlatform;
use Doctrine\DBAL\Types\Exception\InvalidType;
use Doctrine\DBAL\Types\Exception\ValueNotConvertible;
>>>>>>> Stashed changes:breeze3/vendor/carbonphp/carbon-doctrine-types/src/Carbon/Doctrine/CarbonTypeConverter.php
use Exception;

/**
 * @template T of CarbonInterface
 */
trait CarbonTypeConverter
{
    /**
     * @return class-string<T>
     */
    protected function getCarbonClassName(): string
    {
        return Carbon::class;
    }

    /**
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
<<<<<<< Updated upstream:option115/vendor/nesbot/carbon/src/Carbon/Doctrine/CarbonTypeConverter.php
        $precision = $fieldDeclaration['precision'] ?: 10;

        if ($fieldDeclaration['secondPrecision'] ?? false) {
            $precision = 0;
        }

        if ($precision === 10) {
            $precision = DateTimeDefaultPrecision::get();
        }
=======
        $precision = min(
            $fieldDeclaration['precision'] ?? DateTimeDefaultPrecision::get(),
            $this->getMaximumPrecision($platform),
        );
>>>>>>> Stashed changes:breeze3/vendor/carbonphp/carbon-doctrine-types/src/Carbon/Doctrine/CarbonTypeConverter.php

        $type = parent::getSQLDeclaration($fieldDeclaration, $platform);

        if (!$precision) {
            return $type;
        }

        if (str_contains($type, '(')) {
            return preg_replace('/\(\d+\)/', "($precision)", $type);
        }

        [$before, $after] = explode(' ', "$type ");

        return trim("$before($precision) $after");
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     *
     * @return T|null
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $class = $this->getCarbonClassName();

        if ($value === null || is_a($value, $class)) {
            return $value;
        }

        if ($value instanceof DateTimeInterface) {
            return $class::instance($value);
        }

        $date = null;
        $error = null;

        try {
            $date = $class::parse($value);
        } catch (Exception $exception) {
            $error = $exception;
        }

        if (!$date) {
            throw ConversionException::conversionFailedFormat(
                $value,
                $this->getName(),
                'Y-m-d H:i:s.u or any format supported by '.$class.'::parse()',
                $error
            );
        }

        return $date;
    }

<<<<<<< Updated upstream:option115/vendor/nesbot/carbon/src/Carbon/Doctrine/CarbonTypeConverter.php
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     *
     * @return string|null
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value === null) {
            return $value;
        }

        if ($value instanceof DateTimeInterface) {
            return $value->format('Y-m-d H:i:s.u');
        }

        throw ConversionException::conversionFailedInvalidType(
            $value,
            $this->getName(),
            ['null', 'DateTime', 'Carbon']
        );
=======
    private function getMaximumPrecision(AbstractPlatform $platform): int
    {
        if ($platform instanceof DB2Platform) {
            return 12;
        }

        if ($platform instanceof OraclePlatform) {
            return 9;
        }

        if ($platform instanceof SQLServerPlatform || $platform instanceof SQLitePlatform) {
            return 3;
        }

        return 6;
>>>>>>> Stashed changes:breeze3/vendor/carbonphp/carbon-doctrine-types/src/Carbon/Doctrine/CarbonTypeConverter.php
    }
}
