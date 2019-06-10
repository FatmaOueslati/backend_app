<?php

namespace ScrumBundle\Controller;


use AppBundle\Services\JwtAuth;
use ScrumBundle\Entity\Epics;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class EpicsController extends Controller
{
    /**
     *
     * @Route("/epic/{id}")
     * @Method("POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function showEpics($id, Request $request)
    {

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){

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
                'data'	=>'Failed !',
                'error' =>  'check your token validation',
                'result' => null
            );
          }

        return new JsonResponse($data);


    }

    /**
     * @Route("/new/epic")
     * @Method({"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function CreateEpics(Request $request)
    {


        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);

        if ($authCheck) {

            if ($content = $request->getContent()) {
                $parametersAsArray = json_decode($content, true);
                $em = $this->getDoctrine()->getManager();

                if ($parametersAsArray != null) {

                    $epic = new Epics();

                   $project_id= $parametersAsArray['project_id'];

                   $project=$this->getDoctrine()->getManager()->getRepository('ScrumBundle:Project')->find($project_id);

                    $epic->setName($parametersAsArray['name']);
                    $epic->setDescription($parametersAsArray['description']);
                    $epic->setSommeComplex($parametersAsArray['sommeComplex']);
                    $epic->setEpics($project);


                    $em->persist($epic);
                    $em->flush();

                    $data = array(
                        "data" => "epic created !",
                        'error' => null,
                        'result' => null
                    );

                    return new JsonResponse($data);


                } else {
                    $data = array(
                        "data" => "Failed !",
                        'error' => 'send data to create an epic',
                        'result' => null
                    );

                    return new JsonResponse($data);
                }
            }


        }
        else{
            $data = array(
                "data" => "Failed !",
                'error' => ' check your token validation !!',
                'result' => null
            );

        }

        return new JsonResponse($data);

    }


    /**
     *
     * @Route("/epic/{id}/delete")
     * @Method("POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function deleteEpic($id, Request $request)
    {

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){

            $epic=$this->getDoctrine()->getRepository('ScrumBundle:Epics')->find($id);

            if (empty($epic)) {

                $response=array(
                    'message'=>'epic Not found !',
                    'errors'=>null,
                    'result'=>null
                );

                return new JsonResponse($response);
            }

            $em=$this->getDoctrine()->getManager();
            $em->remove($epic);
            $em->flush();
            $response=array(
                'message'=>'epic deleted !',
                'errors'=>null,
                'result'=>null
            );

            return new JsonResponse($response);

        }else{

            $data = array(
                'data'	=>'Failed !',
                'errors'=>'check your token validation',
                'result'=>null
            );
        }
        return new JsonResponse($data);



    }

    /**
     * @Route("/epic/{id}/edit")
     * @Method({"POST"})
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function UpdateEpics($id,Request $request)
    {

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);

        if ($authCheck) {

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
                        "data" => "parameters failed",
                        'error' => null,
                        'result' => null
                    );

                }

                return new JsonResponse($data);

            }

        }
        else{
            $data = array(
                "data" => "Failed !",
                'error' => 'check your token validation !!',
                'result' => null
            );
        }

        return new JsonResponse($data);


    }
}
