<?php

namespace App\Controllers;

use App\Application\Views\View;
use App\Models\Report;

class ContactsControlle
{
    public function submit(array $data): void
    {
        $report = new Report();
        $report->setEmail($data['email']);
        $report->setSubject($data['subject']);
        $report->setMessage(trim($data['message']));
        
        $report->store();
    }

}