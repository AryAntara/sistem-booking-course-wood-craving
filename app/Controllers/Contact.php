<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use Config\Services;

class Contact extends BaseController
{
    /**
     * @return string
     */
    public function index(): string
    {
        return view('pages/contact', ['page' => 'contact']);
    }

    /**
     * Send a email to admin email
     * @return RedirectResponse
     */
    public function send_email(): RedirectResponse
    {

        $message = $this->request->getPost('message');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $subject = "Pesan dari : $name";

        $service_email = Services::email();
        $service_email->setFrom($email, $name);
        $service_email->setTo(env('owner.email', 'xinjiangcrosin@gmail.com'));
        $service_email->setSubject($subject);
        $service_email->setMessage("Email : $email" . "\n" . $message);
        if (!$service_email->send()) {
            dd($service_email->printDebugger());
        }

        // set the message into a flash data
        $session = session();
        $session->set([
            'message' => 'Email sudah terkirim!'
        ]);
        $session->markAsFlashdata('message');
    }
}
