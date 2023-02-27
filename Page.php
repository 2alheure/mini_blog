<?php

class Page {
    private $twig;

    public function __construct() {
        $twig = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
        $this->twig = new \Twig\Environment($twig);

        session_start();
    }

    public function sAfficher(string $nomDuTemplate, array $arguments) {
        $this->twig->render($nomDuTemplate, $arguments);
    }

    public function rediriger(string $autre_page) {
        header('location: ' . $autre_page);
    }
}
