<?php

declare(strict_types=1);

namespace PolemLasem\Shop\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class StaticPageController extends AbstractController
{
    public function page(string $slug): Response
    {
        return $this->render('static_page.html.twig');
    }
}
