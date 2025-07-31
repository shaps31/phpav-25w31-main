<?php
namespace App\Service\Calendar;

class WorkingDayCalculator
{
    public function computeWorkingDays(\DateTimeImmutable $from, \DateTimeImmutable $to): int
    {
        if ($from > $to) {
            throw new \InvalidArgumentException('Start date cannot be greater than end date');
        }

        $allDays = $from->diff($to)->days + 1;
        $fullWeeks = intdiv($allDays, 7);
        $extraDays = $allDays % 7;
        $extraWorkingDays = 0;
        for ($i = 0, $cur = $to; $i < $extraDays; $i++) {
            if (6 > $cur->format('N')) {
                ++$extraWorkingDays;
            }
            $cur = $cur->modify('-1 day');
        }

        return 5 * $fullWeeks + $extraWorkingDays;
    }
}
