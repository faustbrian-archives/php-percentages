<?php

declare(strict_types=1);

/**
 * Copyright (c) Konceiver Oy <legal@konceiver.dev>.
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Konceiver\Percentage;

final class SafePercentage
{
    /**
     * What is the percentage increase or decrease from $a to $b ?
     */
    public static function differenceBetween(float $a, float $b): float
    {
        try {
            return Percentage::differenceBetween($a, $b);
        } catch (\Throwable $th) {
            return 0;
        }
    }

    /**
     * What is the absolute percentage increase or decrease from $a to $b ?
     */
    public static function absoluteDifferenceBetween(float $a, float $b): float
    {
        try {
            return Percentage::absoluteDifferenceBetween($a, $b);
        } catch (\Throwable $th) {
            return 0;
        }
    }

    /**
     * How much is $a of $b in percentages?
     */
    public static function calculate(float $a, float $b): float
    {
        try {
            return Percentage::calculate($a, $b);
        } catch (\Throwable $th) {
            return 0;
        }
    }

    /**
     * Get a percentage return from a number.
     */
    public static function of(float $percentage, float $number): float
    {
        try {
            return Percentage::of($percentage, $number);
        } catch (\Throwable $th) {
            return 0;
        }
    }

    /**
     * Get the absolute value if you extend range $a to $b with $percentage.
     */
    public static function extension(float $percentage, float $a, float $b): float
    {
        try {
            return Percentage::extension($percentage, $a, $b);
        } catch (\Throwable $th) {
            return 0;
        }
    }
}
