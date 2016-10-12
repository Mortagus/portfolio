<?php

namespace Mortagus\Modules\HomeModule\Controller;

use Mortagus\Library\Intern\Controller;

class HomeController extends Controller {

    public function homeAction() {
        $this->getPb()->appendTitle('Welcome');
        $html = $this->render($this->getViewPath('Home', 'Home') . DS . 'home.html.php');
        $this->getPb()->appendDivContent('content', $html);
        $this->getPb()->addCss('mingEffect', INT_GLB_RSC_URL . DS . 'css' . DS . 'mingEffect.css');
        $this->getPb()->addCss('homepage', INT_GLB_RSC_URL . DS . 'css' . DS . 'homepage.css');
        $this->getPb()->printHtml();
    }

}