<?php

namespace Tests\Feature;

use App\Mail\MailSendTest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class SendMailTest extends TestCase
{
    /**
     * @test
     */
    public function sendMail() {
        $this->withoutExceptionHandling();
        Mail::fake();
        $send = Mail::to('ayoub@gmail.com')->send(new MailSendTest());
        Mail::assertSent( MailSendTest::class);
    }
}
