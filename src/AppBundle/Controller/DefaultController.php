<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DefaultController extends Controller
{

  /**
  *@route("/{_locale}/blog/mon-premier-blog", name="mon blog")
  */

  public function  testAction()
  {
    return $this->render('default/index.html.twig');
  }


    /**
     * @Route("/{_locale}/presentation", name="presentation")
     */

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
        ]);
    }


    /**
	   * @Route("/{_locale}/home", name="home")
	   */

	     public function homePage(Request $request)
	      {
		        return $this->render('default/home.html.twig', [

            ]);
	      }



      /**
        * @Route("/{_locale}/CV", name="cv")
        */

        public function cvAction(Request $request)
        {
       // replace this example code with whatever you need
       return $this->render('default/cv.html.twig', [
          ]);
        }


    /**
     * @Route("/{_locale}/Contact", name="contact")
     */

     public function contactAction()
     {
       $formBuilder = $this->createFormBuilder();

       $formBuilder

        ->add('name', TextType::class, [
            'required'=> true,
            'label'=> 'Nom',
            'translation_domain'=>'contact;'
          ])

          ->add('Prenom', TextType::class, [
            'required'=> true,
            'label'=> 'Prenom',
            'translation_domain'=>'contact;'
          ])

          ->add('email', EmailType::class, [
            'required'=> true,
            'label'=> 'email',
            'translation_domain'=>'contact;'
          ])

          ->add('choices', ChoiceType::class, [
            'required'=> true,
            'label'=> 'Choix possible',
            'choices'=>[
                'Contact' => 'y',
                'Demande informations' => 'n',
                'Signaler bug' => 'y',
                'Prise de rendez-vous'=>'y'
            ],

          ])


          ->add('text', TextareaType::class,[
            'required'=> true,
            'label'=> 'texte',
            'translation_domain'=>'contact;'
          ]);

        $form = $formBuilder->getForm();

        return $this->render('default/contact.html.twig', ['form' => $form->createView(),
          ]);

     }

     /**
        * @Route("/{_locale}/feedbackform", name="feedbackform")
        */

     Public function successContactAction()
     {
       return $this->render('default/feedbackform.html.twig', [
       ]);
     }
}
