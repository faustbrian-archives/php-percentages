<?php

declare(strict_types=1);

use Konceiver\Percentage\SafePercentage;

it('can calculate simple percentage differences', function (): void {
    expect(SafePercentage::differenceBetween(0, 0))->toBe(0.0);
});

it('can calculate how much percentage a is of b', function (): void {
    expect(SafePercentage::calculate(0, 0))->toBe(0.0);
});

it('can get the percentage value of a number', function (): void {
    expect(SafePercentage::of(0, 0))->toBe(0.0);
});

it('can get the percentage extension value', function (): void {
    expect(SafePercentage::extension(0, 0, 0))->toBe(0.0);
});
