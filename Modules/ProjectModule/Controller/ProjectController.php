<?php
/**
 * Created by PhpStorm.
 * User: Benouz
 * Date: 13/07/2016
 * Time: 22:15
 */

namespace Mortagus\Modules\ProjectModule\Controller;

use Mortagus\Library\Intern\Controller;

class ProjectController extends Controller {

    public function listAction() {
        $this->getPb()->appendTitle('Welcome');
        $html = $this->render($this->getViewPath('Project', 'Project') . DS . 'list.html.php', array(
            'brandPowerUrl' => '#',
            'ogameProjectUrl' => '#',
            'youtubeProjectUrl' => '#'
        ));
        $this->getPb()->appendDivContent('content', $html);
        $this->getPb()->printHtml();
    }

}