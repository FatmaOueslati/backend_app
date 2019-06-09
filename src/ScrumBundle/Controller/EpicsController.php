<?php

namespace ScrumBundle\Controller;

use AppBundle\Services\Helpers;
use AppBundle\Services\JwtAuth;
use ScrumBundle\Entity\Epics;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EpicsController extends Controller
{
    /**
     *
     * @Route("/epic/{id}")
     * @Method("POST")
     */
    public function showEpics($id, Request $request)
    {
        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){
            $identity = $jwt_auth->checkToken($token, true);
             $epic = $this->getDoctrine()->getRepository('ScrumBundle:Epics')->find($id);


        if (empty($epic)) {
            $response = array(
                'message' => 'Epic not found',
                'error' => null,
                'result' => null
            );

            return new JsonResponse($response);
        }

        $data = $this->get('jms_serializer')->serialize($epic, 'json');


        $response = array(
            'message' => 'success',
            'errors' => null,
            'result' => json_decode($data)

        );

        return new JsonResponse($response);

    }else{

            $data = array(
                    'data'	=>'Failed ! check your token validation'
            );
          }

              return $helpers->json($data);

    }

    /**
     * @Route("/new/epic")
     * @Method({"POST"})
     */
    public function CreateEpics(Request $request)
    {

        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);
        if ($authCheck) {
            $identity = $jwt_auth->checkToken($token, true);
            $parametersAsArray = [];
            if ($content = $request->getContent()) {
                $parametersAsArray = json_decode($content, true);
                $em = $this->getDoctrine()->getManager();

                if ($parametersAsArray != null) {


                    $epic = new Epics();

                   $project_id= $parametersAsArray['project_id'];

                   $projet=$this->getDoctrine()->getManager()->getRepository('ScrumBundle:Project')->find($project_id);

                    $epic->setName($parametersAsArray['name']);
                    $epic->setDescription($parametersAsArray['description']);
                    $epic->setSommeComplex($parametersAsArray['sommeComplex']);
                    $epic->setEpics($projet);


                    $em->persist($epic);
                    $em->flush();

                    $data = array(
                        "data" => "epic created !",
                        'error' => null,
                        'result' => null
                    );
                } else {
                    $data = array(
                        "data" => "parameters failed"
                    );


                }
            }
            else{
                $data = array(
                    "data" => "Failed ! check your token validation !!"
                );
            }

            return $helpers->json($data);

        }


    }


    /**
     *
     * @Route("/epic/{id}/delete")
     * @Method("POST")
     */
    public function deleteEpic($id, Request $request)
    {

        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){
            $identity = $jwt_auth->checkToken($token, true);
            $epic=$this->getDoctrine()->getRepository('ScrumBundle:Epics')->find($id);

            if (empty($epic)) {

                $response=array(
                    'message'=>'epic Not found !',
                    'errors'=>null,
                    'result'=>null
                );

                return new JsonResponse($response, Response::HTTP_NOT_FOUND);
            }

            $em=$this->getDoctrine()->getManager();
            $em->remove($epic);
            $em->flush();
            $response=array(
                'message'=>'epic deleted !',
                'errors'=>null,
                'result'=>null
            );

            return new JsonResponse($response,200);

        }else{

            $data = array(
                'data'	=>'Failed ! check your token validation'
            );
        }

        return $helpers->json($data);


    }

    /**
     * @Route("/epic/{id}/edit")
     * @Method({"POST"})
     */
    public function UpdateEpics($id,Request $request)
    {

        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);
        if ($authCheck) {
            $identity = $jwt_auth->checkToken($token, true);
            $parametersAsArray = [];
            if ($content = $request->getContent()) {
                $parametersAsArray = json_decode($content, true);
                $em = $this->getDoctrine()->getManager();


                if ($parametersAsArray != null) {


                    $epicUpdate=$this->getDoctrine()->getRepository('ScrumBundle:Epics')->find($id);

                    $project_id= $parametersAsArray['project_id'];

                    $projet=$this->getDoctrine()->getManager()->getRepository('ScrumBundle:Project')->find($project_id);

                    $epicUpdate->setName($parametersAsArray['name']);
                    $epicUpdate->setDescription($parametersAsArray['description']);
                    $epicUpdate->setSommeComplex($parametersAsArray['sommeComplex']);
                    $epicUpdate->setEpics($projet);


                    $em->persist($epicUpdate);
                    $em->flush();

                    $data = array(
                        "data" => "epic updated !",
                        'error' => null,
                        'result' => null
                    );
                } else {
                    $data = array(
                        "data" => "parameters failed"
                    );


                }
            }
            else{
                $data = array(
                    "data" => "Failed ! check your token validation !!"
                );
            }

            return $helpers->json($data);

        }


    }
}
