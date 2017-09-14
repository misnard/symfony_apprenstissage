<?php

namespace MI\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MI\FrontBundle\Entity\Articles;

class MainController extends Controller
{
    public function indexAction()
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('MIFrontBundle:Articles');
        $listProduct = $repository->findAll();

        return $this->render('MIFrontBundle:Default:index.html.twig', array('products' => $listProduct));
    }

    public function productAction()
    {

    }

    public function commandStep1Action()
    {

    }
}
