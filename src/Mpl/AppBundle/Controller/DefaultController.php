<?php

namespace Mpl\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        //test modif comment
        return $this->render('MplAppBundle:Default:index.html.php', array('name' => $name));
    }
}
