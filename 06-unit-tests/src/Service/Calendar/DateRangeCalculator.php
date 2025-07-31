<?php

namespace App\Service\Calendar;

use App\DataType\DateRangeImmutable;

readonly class DateRangeCalculator
{
    public function __construct(
        private WorkingDayCalculator $workingDayCalculator
    ) {
    }

    /**
     * @param array<DateRangeImmutable> $ranges
     */
    public function sumAllLeaves(array $ranges): int
    {
        $sum = 0;
        foreach ($ranges as $range) {
            $sum += $this->workingDayCalculator->computeWorkingDays($range->getFrom(), $range->getTo());
        }

        return $sum;
    }
}