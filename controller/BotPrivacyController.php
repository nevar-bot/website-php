<?php
namespace App\Controller;

class BotPrivacyController extends BaseController {

    public bool $hasNoModel = true;
    public function __construct(string $controllerName) {
        parent::__construct($controllerName);
    }

    public function index(array $params): void {
        $this->view->setVariable("title", "Bot-Datenschutz");
        $this->view->render("bot-privacy");
    }

}