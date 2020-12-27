<?php

declare(strict_types=1);

use Konceiver\Percentage\Percentage;

it('can calculate simple percentage differences', function (): void {
    expect(Percentage::differenceBetween(100, 120))->toBe(20.0);
    expect(Percentage::differenceBetween(100, 80))->toBe(-20.0);
    expect(Percentage::absoluteDifferenceBetween(100, 80))->toBe(20.0);
    expect(round(Percentage::differenceBetween(862, 447), 0))->toBe(-48.0);
});

it('can calculate how much percentage a is of b', function (): void {
    expect(Percentage::calculate(120, 100))->toBe(120.0);
    expect(Percentage::calculate(50, 100))->toBe(50.0);
});

it('can get the percentage value of a number', function (): void {
    expect(Percentage::of(20, 200))->toBe(40.0);
    expect(Percentage::of(50, 200))->toBe(100.0);
    expect(Percentage::of(-20, 200))->toBe(-40.0);
});

it('can get the percentage extension value', function (): void {
    expect(Percentage::extension(140, 3, 2))->toBe(1.6);
    expect(Percentage::extension(140, 1, 2))->toBe(2.4);
});
