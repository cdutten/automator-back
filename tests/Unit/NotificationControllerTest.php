<?php

namespace Tests\Unit;

use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class NotificationControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     * @return void
     */
    public function Given_WhenISendAServiceAndAReceipt_ThenTheReceiptIsUploadedAndRespondWithAMessage()
    {
        $file = UploadedFile::fake()->create('document.pdf', 1000, 'application/pdf');
        $service = "Edenor";

        $response = $this->json('POST', 'api/notify', ['service' => $service, 'receipt' => $file]);
        $response
            ->assertStatus(200)
            ->assertJson([
                "message" => "Done processing {$service}",
            ]);
    }
}
