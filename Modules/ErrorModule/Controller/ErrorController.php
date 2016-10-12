<?php
/**
 * Created by PhpStorm.
 * User: Benouz
 * Date: 24/03/2016
 * Time: 10:03
 */

namespace Mortagus\Modules\ErrorModule\Controller;


use Mortagus\Library\Intern\Controller;

class ErrorController extends Controller {

    public function accessDeniedAction() {
        $this->getPb()->appendTitle('ACCESS DENIED');
        $this->getPb()->appendDivContent('content', $this->buildErrorHtml('votre demande d\'accès est refusé.'));
        $this->getPb()->printHtml();
    }

    public function notDefinedPageAction() {
        $this->getPb()->appendTitle('NOT DEFINED PAGE');
        $this->getPb()->appendDivContent('content', $this->buildErrorHtml('la page demandée n\'existe pas.'));
        $this->getPb()->printHtml();
    }

    public function errorOccurredAction() {
        $this->getPb()->appendTitle('NOT DEFINED PAGE');
        $this->getPb()->appendDivContent('content', $this->buildErrorHtml('une erreur est survenue. Veuillez contacter votre WebMaster pour de plus ample informations.'));
        $this->getPb()->printHtml();
    }

    public function exceptionOccurredAction() {
        $this->getPb()->appendTitle('NOT DEFINED PAGE');
        $this->getPb()->appendDivContent('content', $this->buildErrorHtml('une exception est survenue. Veuillez contacter votre WebMaster pour de plus ample informations.'));
        $this->getPb()->printHtml();
    }

    private function buildErrorHtml($message, $title = 'Chère Utilisateur', $class = '') {
        return $this->render($this->getViewPath('Error', 'Error') . DS . 'error.html.php', array(
            'class' => $class,
            'title' => $title,
            'text' => $message
        ));
    }

}