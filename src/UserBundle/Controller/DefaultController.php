<?php

namespace UserBundle\Controller;

use Symfony\Component\Security\Core\Security;
use UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function indexAction()
	{
		return $this->render('UserBundle:Default:subscribe.html.twig');
	}

	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function indexAgentAction()
	{
		return $this->render('UserBundle:Default:agent-subscribe.html.twig');
	}

	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
    public function ConnexionAction()
    {
        return $this->render('UserBundle:Default:modal-connexion.html.twig');
    }

	/**
	 * @return Response
	 */
	public function getTokenAction()
	{
		return new Response($this->get('security.csrf.token_manager')->getToken('authenticate')->getValue());
	}

	/**
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
	 */
	public function inscriptionAction(Request $request)
	{
		try {
			$post = $request->request;
			$user = new User();
			$user->setNom($post->get('nom'));
			$user->setRoles(['ROLE_USER']);
			$user->setUsername($post->get('email'));
			$user->setPrenom($post->get('prenom'));
			$user->setAdresse($post->get('adresse'));
			$user->setCodePostal($post->get('zipCode'));
			$user->setVille($post->get('ville'));
			$user->setPhone($post->get('phone'));
			$user->setDateNaissance($post->get('dateDeNaissance'));
			$user->setPlainPassword($post->get('password'));
			$user->setEmail($post->get('email'));
			$user->setEnabled(true);
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			return $this->redirectToRoute('im_front_homepage');
		}
		catch (\Exception $e){
			return $this->redirectToRoute('im_front_subscribe');
		}
	}

	/**
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
	 */
	public function inscriptionAgentAction(Request $request)
	{
		try {
			$post = $request->request;
			$user = new User();
			$role = $post->get('user_type'); //admin ou agent
			$user->setRoles(['ROLE_'.$role]);
			$user->setNom($post->get('nom'));
			$user->setUsername($post->get('email'));
			$user->setPrenom($post->get('prenom'));
			$user->setAdresse($post->get('adresse'));
			$user->setCodePostal($post->get('zipCode'));
			$user->setVille($post->get('ville'));
			$user->setPhone($post->get('phone'));
			$user->setDateNaissance($post->get('dateDeNaissance'));
			$user->setPlainPassword($post->get('password'));
			$user->setEmail($post->get('email'));
			$user->setEnabled(true);
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			return $this->redirectToRoute('im_front_homepage');
		}
		catch (\Exception $e){
			return $this->redirectToRoute('im_front_subscribe');
		}
	}

	/**
	 *
	 * Check if User Exist
	 *
	 * @param $email
	 * @return mixed
	 */
	public function haveUserAction($email)
	{
		$user = new User();
		$user->setEmail($email);
		$em = $this->getDoctrine()->getManager()->getRepository('UserBundle:User');
		return $em->findIsEmailExist($email);
	}

	/**
	 *
	 * Check if Credentials are valid for connexion
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function hasGoodCredentialsAction(Request $request)
	{
		$post = $request->query;
		$email = $post->get('email');
		$password = $post->get('password');
		$em = $this->getDoctrine()->getManager()->getRepository('UserBundle:User');
		if ($em->findIsEmailExist($email))
		{
			$user_manager = $this->get('fos_user.user_manager');
			$factory = $this->get('security.encoder_factory');
			$user = $user_manager->findUserByUsername($email);
			$encoder = $factory->getEncoder($user);
			$salt = $user->getSalt();
			if ($encoder->isPasswordValid($user->getPassword(), $password, $salt))
				$response = new Response('TRUE');
			else
				$response = new Response('Le mot de passe est invalide', Response::HTTP_CONFLICT);
		}
		else
			$response = new Response('L\'adresse email est invalide.', Response::HTTP_CONFLICT);
		return $response;
	}
}
