<?php

namespace App\Controller;

use App\Model\Contact;
use App\Controller\ErrorController;

class ContactController
{
    public function index(): string
    {
        $response = '<h1>Contact</h1>';

        foreach (Contact::all() as $contact) {
            $response .= "<p>$contact->last_name - $contact->first_name ($contact->email)</p>";
        }

        return $response;
    }

    public function new(): string
    {
        $contact = new Contact();
        $contact->last_name = $_GET['last_name'];
        $contact->first_name = $_GET['first_name'];
        $contact->email = $_GET['email'];
        $contact->save();

        return 'Le contact a été enregistré';
    }

    public function show(): string
    {
        $contact = Contact::find($_GET['id']);

        if (!$contact) {
            return (new ErrorController())->notFound();
        }

        return $contact->first_name . ' ' . $contact->last_name;
    }
}
