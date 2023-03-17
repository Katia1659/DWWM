<?php

namespace App\Controller;

use App\Entity\Ingredient;
use App\Form\IngredientType;
use Doctrine\ORM\EntityManager;
use App\Repository\IngredientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IngredientController extends AbstractController
{

    
    /**
     * Méthode pour afficher les ingrédients
     *
     * @param IngredientRepository $repository
     * @return Response
     */
    #[Route('/ingredient', name: 'app_ingredient', methods: ['GET'] )]
    #[IsGranted('ROLE_USER')]
    public function index(IngredientRepository $repository, ): Response
    {
        $ingredients = $repository->findAll();
        

        return $this->render('pages/ingredient/index.html.twig', [
            'ingredient' => $ingredients
        ]);
    }

    
    /**
     * Méthodes pour créer un nouvelle ingrédient
     *
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/ingredient/nouveau', 'ingredient.new', methods: ['GET', 'POST'])] 
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $ingredient = new Ingredient();
        $form = $this->createForm(IngredientType::class, $ingredient);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ingredient = $form->getData();

            $manager->persist($ingredient);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre ingrédient a été crée!'
            );

           return $this->redirectToRoute('app_ingredient');
        }

        return $this->render('pages/ingredient/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    
    /**
     * Méthode pour update un ingrédient
     */
    #[Route('/ingredient/edition/{id}', 'ingredient.edit', methods: ['GET', 'POST'])] 
    #[IsGranted('ROLE_USER')]  
    public function edit( Ingredient $ingredient, Request $request, EntityManagerInterface $manager ): Response
    {
        
        $form = $this->createForm(IngredientType::class, $ingredient);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ingredient = $form->getData();

            $manager->persist($ingredient);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre ingrédient a été modifié avec succès'
            );

           return $this->redirectToRoute('app_ingredient');
        }

       

        return $this->render('pages/ingredient/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Méthode pour supprimer un ingrédient
     */
    #[Route('/ingredient/suppression/{id}', 'ingredient.delete', methods:['GET'])]  
    #[IsGranted('ROLE_USER')]
    public function delete(EntityManagerInterface $manager, Ingredient $ingredient): Response
    {
        

        $manager->remove($ingredient);
        $manager->flush();

        $this->addFlash(
            'success',
            'Votre ingrédient a été supprimé avec succès'
        );

        return $this->redirectToRoute('app_ingredient');
    }
}
