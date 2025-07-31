<?php

namespace App\tests\Service\Calendar;

use App\DataType\DateRangeImmutable;
use App\Service\Calendar\DateRangeCalculator;
use App\Service\Calendar\WorkingDayCalculator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DateRangeCalculator::class)]
class DateRangeCalculatorTest extends TestCase
{
    public function testSumAllLeaves(): void
    {
        $workingDayCalculator = $this->createStub(WorkingDayCalculator::class);
        $workingDayCalculator->method('computeWorkingDays')->willReturn(5);

        $dateRangeCalculator = new DateRangeCalculator($workingDayCalculator);

        $sum = $dateRangeCalculator->sumAllLeaves([
            new DateRangeImmutable(new \DateTimeImmutable('2012-05-27'), new \DateTimeImmutable('2013-05-27')),
            new DateRangeImmutable(new \DateTimeImmutable('2019-02-27'), new \DateTimeImmutable('2019-03-14')),
            new DateRangeImmutable(new \DateTimeImmutable('2015-05-27'), new \DateTimeImmutable('2015-06-10')),
        ]);

        $this->assertEquals(15, $sum);

    }

}