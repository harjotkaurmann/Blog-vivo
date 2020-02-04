<?php
// src/Controller/BlogController.php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController
{
	   /**
+      * @Route("/blog/firstblog")
+      */
   public function blog() { 
      return new Response('My First Blog'); 
   } 
	
	/** 
   * @Route("/blog/display", name="app_blog_display") 
*/ 
public function displayAction() { 
   $bk = $this->getDoctrine()
   ->getRepository('AppBundle:Blog') 
   ->findAll(); 
   return $this->render('blog/display.html.twig', array('data' => $bk)); 
}
}