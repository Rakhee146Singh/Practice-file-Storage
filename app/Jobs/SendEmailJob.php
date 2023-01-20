<?php

namespace App\Jobs;

use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;


class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    //protected $sendMail;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($sendMail)
    {
        //$this->sendMail = $sendMail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $email = new SendMail();
        // Mail::to($this->sendMail)->send($email);
    }
}
