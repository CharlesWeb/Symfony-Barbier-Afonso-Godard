<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class APIController extends Controller
{
    /**
     * @Route("/api/students", name="api_students")
     */
    public function studentsAction()
    {
        // replace this example code with whatever you need
        $students = $this->getDoctrine()->getManager()
          ->getRepository('AppBundle:Student')
          ->findAll();
        $json = $this->get('jms_serializer')->serialize($students, 'json');

        return new Response($json, 200, [
          'Content-Type' => 'application/json'
          ]);
    }


    /**
     * @Route("/api/exams", name="api_exams")
     */
    public function examsAction()
    {
        // replace this example code with whatever you need
        $exams = $this->getDoctrine()->getManager()
          ->getRepository('AppBundle:Exam')
          ->findAll();
        $json = $this->get('jms_serializer')->serialize($exams, 'json');

        return new Response($json, 200, [
          'Content-Type' => 'application/json'
          ]);
    }

    /**
     * @Route("/api/admins", name="api_admins")
     */
    public function adminsAction()
    {
        // replace this example code with whatever you need
        $admins = $this->getDoctrine()->getManager()
          ->getRepository('AppBundle:Admin')
          ->findAll();
        $json = $this->get('jms_serializer')->serialize($admins, 'json');

        return new Response($json, 200, [
          'Content-Type' => 'application/json'
          ]);
    }
}
