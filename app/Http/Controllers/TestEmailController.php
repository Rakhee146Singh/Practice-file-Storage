<?php

namespace App\Http\Controllers;

use App\Jobs\TestSendEmail;
use Illuminate\Http\Request;

class TestEmailController extends Controller
{
    public function sendTestEmails()
    {
        $abc = 'xyz@gmail.com';
        $emailJobs = new TestSendEmail($abc);
        $abc = $this->dispatch($emailJobs);
    }
}
