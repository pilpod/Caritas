<?php

namespace Tests\Unit;

use App\View\Components\modals\DonationComponent;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_format_bank_account()
    {
        $donation = new DonationComponent;

        $response = $donation->formatBankAccount('ES1212341234123412341234');

        $this->assertEquals('ES12-1234-1234-1234-1234-1234', $response);
    }
}
