<?php
namespace App\tests\Service\Calendar;

use App\Service\Calendar\WorkingDayCalculator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(WorkingDayCalculator::class)]
class WorkingDayCalculatorTest extends TestCase
{
    #[DataProvider('provideComputeWorkingDays')]
    public function testComputeWorkingDays(string $from, string $to, int $expected): void
    {
        $calculator = new WorkingDayCalculator();

        $count = $calculator->computeWorkingDays(new \DateTimeImmutable($from), new \DateTimeImmutable($to));
        $this->assertEquals($expected, $count);
    }

    public function testComputeWorkingDaysException(): void
    {
        $calculator = new WorkingDayCalculator();
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Start date cannot be greater than end date');
        $calculator->computeWorkingDays(new \DateTimeImmutable('2025-08-01'), new \DateTimeImmutable('2025-07-28'));
    }

    public static function provideComputeWorkingDays(): array
    {
        return [
            'only working days' => ['2025-07-28', '2025-08-01', 5],
            'covering a weekend' => ['2025-07-28', '2025-08-08', 10],
            'starting a weekend' => ['2025-07-26', '2025-08-01', 5],
            'ending a weekend' => ['2025-07-28', '2025-08-03', 5],
        ];
    }
}
