<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

  /**
   * @Route("/", name="formtopdf_index")
   */
  public function index(ContainerBagInterface $params)
  {
    return $this->render('views/index.html.twig', [
      "formGroup" => $params->get('cerfa_contrat_pro')["form"]
    ]);
  }
}