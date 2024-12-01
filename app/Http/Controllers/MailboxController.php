<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MailboxController extends Controller
{
    public function open()
    {
        return Inertia::render('Mailbox');
    }
}
