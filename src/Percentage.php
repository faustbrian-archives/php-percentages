<?php

declare(strict_types=1);

/**
 * Copyright (c) Konceiver Oy <legal@konceiver.dev>.
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Konceiver\Percentage;

final class Percentage
{
    /**
     * What is the percentage increase or decrease from $a to $b ?
     */
    public static function differenceBetween(float $a, float $b): float
    {
        return floatval(($b - $a) / $a * 100);
    }

    /**
     * What is the absolute percentage increase or decrease from $a to $b ?
     */
    public static function absoluteDifferenceBetween(float $a, float $b): float
    {
        return floatval(abs(static::differenceBetween($a, $b)));
    }

    /**
     * How much is $a of $b in percentages?
     */
    public static function calculate(float $a, float $b): float
    {
        return floatval($a * 100 / $b);
    }

    /**
     * Get a percentage return from a number.
     */
    public static function of(float $percentage, float $number): float
    {
        return floatval($number * ($percentage / 100));
    }

    /**
     * Get the absolute value if you extend range $a to $b with $percentage.
     */
    public static function extension(float $percentage, float $a, float $b): float
    {
        $movement = abs($a - $b);

        if ($a > $b) {
            return floatval($a - ($movement * $percentage / 100));
        }

        return floatval($a + ($movement * $percentage / 100));
    }
}
