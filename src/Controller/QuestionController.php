<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController{

    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment)
    {
        /*
        // fun example of using the Twig service directly
        $html = $twigEnvironment->render('question/homepage.html.twig');
        
        return new Response($html);
        */
        
        return $this->render('question/homepage.html.twig');
    }  

    /**
     * @Route("/questions/{slug}", name="app_question_show") */ 
     public function show($slug){

        $answers = [
            'Yes',
            'No',
            'Maybe',
        ];

        dump($this);

        return $this-> render('question/show.html.twig', [
            'question' => ucwords(str_replace('-',' ',$slug)),
            'answers' => $answers,
        ]);

        //  return new Response(sprintf(
        //      'Future page to show the question "%s"!',
        //      ucwords(str_replace('-',' ',$slug))
        //      ));
     }
}

?>