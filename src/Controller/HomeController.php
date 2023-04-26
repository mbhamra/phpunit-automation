<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/keyword/{test}', name: 'blog_list')]
    public function showKeyword($test = 'hello')
    {
        return $this->json(['message' => $test]);
    }
}