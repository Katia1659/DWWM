<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\RegistrationType;
use App\Service\Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class RegistrationController extends AbstractController 
{
    private UserPasswordHasherInterface $passwordHasher;
    /**
     * @var Mailer
     */
    private $mailer;
/**
     * @var UserRepository
     */
    private $userRepository;
    public function __construct(UserPasswordHasherInterface $passwordHasher, Mailer $mailer)
    {
        $this->passwordHasher = $passwordHasher;
        $this->mailer = $mailer;
    }


/**
 * @Route("/inscription", name="register")
 * @param Request $request
 * @return Response
 */

    public function register(Request $request): Response
    {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() ) {

            $plainPassword = $form->get('password')->getData();
            $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);

            $user->setToken($this->generateToken());
            


            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->mailer->sendEmail($user->getEmail(), $user->getToken());
            

            $this->addFlash("success","Inscription réussi");
        }


        return $this->render('registration/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/confirmer-mon-compte/{token}", name="confirm_account")
     * @param string $token
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
public function confirmAccount(string $token) 
{
    $user = $this->userRepository->findOneBy(["token => $token"]);

    if ($user) {
        $user->setToken(null);
        $user->setEnabled(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $this->addFlash("success","Compte actif");
        return $this->redirectToRoute('home');


    } else {

        $this->addFlash("error","Ce compte n'existe pas");
        return $this->redirectToRoute('home');
    }
}

    /**
     * @return String
     * @throws \Exception
     */

     private function generateToken()
     {
        return rtrim(strtr(base64_encode(random_bytes(length:32)), '+/', '-_'),'=');
     }
}