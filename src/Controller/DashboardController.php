<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(EntityManagerInterface $entityManager)
    {
        $categories = $entityManager->createQuery('SELECT COUNT(c) FROM App\Entity\Categorie c')->getSingleScalarResult();
        $quizzs = $entityManager->createQuery('SELECT COUNT(q) FROM App\Entity\Quizz q')->getSingleScalarResult();
        $questions = $entityManager->createQuery('SELECT COUNT(q) FROM App\Entity\Question q')->getSingleScalarResult();
        $users = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\User u')->getSingleScalarResult();
        return $this->render('dashboard/index.html.twig', [
            'stats'=>compact('categories', 'quizzs', 'questions','users')
        ]);
    }
}
