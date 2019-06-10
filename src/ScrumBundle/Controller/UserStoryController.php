<?php

namespace ScrumBundle\Controller;


use AppBundle\Services\JwtAuth;
use ScrumBundle\Entity\UserStory;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class UserStoryController extends Controller
{


    /**
     *
     * @Route("/story/{id}")
     * @Method("POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function showUserStory($id, Request $request)
    {

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){

            $story = $this->getDoctrine()->getRepository('ScrumBundle:UserStory')->find($id);

            if (empty($story)) {
                 $response = array(
                    'message' => 'User Story not found',
                    'error' => null,
                    'data' => null
                 );

                 return new JsonResponse($response);
            }


           $data = $this->get('jms_serializer')->serialize($story, 'json');

                $response = array(
                 'message' => 'success',
                 'errors' => null,
                 'data' => json_decode($data)
                 );

           return new JsonResponse($response);


        }else{

            $data = array(
                'message' => 'Failed ! check your token validation',
                'error' => null,
                'data'	=> null
            );
        }

        return new JsonResponse($data);
    }


    /**
     * @Route("/new/story")
     * @Method({"POST"})
     * @param Request $request
     * @return JsonResponse
     */
    public function CreateStory(Request $request)
    {

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);

        if ($authCheck) {


            if ($content = $request->getContent()) {

                $parametersAsArray = json_decode($content, true);

                if ($parametersAsArray != null) {

                    $story = new UserStory();
                    $em = $this->getDoctrine()->getManager();

                    $epic_id=$parametersAsArray['epic_id'];

                    $epic=$this->getDoctrine()->getManager()->getRepository('ScrumBundle:Epics')->find($epic_id);

                    $story->setName($parametersAsArray['name']);
                    $story->setDescription($parametersAsArray['description']);
                    $story->setStatut('new');
                    $story->setPriorite($parametersAsArray['priorite']);
                    $story->setBV($parametersAsArray['bV']);
                    $story->setPtComplex($parametersAsArray['ptComplex']);
                    $story->setStory($epic);


                    $em->persist($story);
                    $em->flush();

                    $data = array(
                        'message' => 'success',
                        'errors' => null,
                        "data" => null
                    );
                } else {
                    $data = array(
                        'message' => 'failed',
                        'errors' => null,
                        'data' => null
                    );

                }

                return new JsonResponse($data);
            }


        }
        else{
            $data = array(
                'message' => 'Failed !',
                'errors' => 'check your token validation !!',
                "data" => null
            );
        }

        return new JsonResponse($data);
    }


    /**
     * @Route("/story/{id}/edit")
     * @Method({"POST"})
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function UpdateStory($id, Request $request)
    {

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);

        if ($authCheck) {

            if ($content = $request->getContent()) {

                $parametersAsArray = json_decode($content, true);


                if ($parametersAsArray != null) {


                    $storyUpdate=$this->getDoctrine()->getRepository('ScrumBundle:UserStory')->find($id);

                    $em = $this->getDoctrine()->getManager();

                    $epic_id=$parametersAsArray['epic_id'];

                    $epic=$this->getDoctrine()->getManager()->getRepository('ScrumBundle:Epics')->find($epic_id);

                    $storyUpdate->setName($parametersAsArray['name']);
                    $storyUpdate->setDescription($parametersAsArray['description']);
                    $storyUpdate->setPriorite($parametersAsArray['priorite']);
                    $storyUpdate->setBV($parametersAsArray['bV']);
                    $storyUpdate->setPtComplex($parametersAsArray['ptComplex']);
                    $storyUpdate->setStory($epic);



                    $em->persist($storyUpdate);
                    $em->flush();

                    $response = array(
                        'message' => 'story updated ! ',
                        'errors' => null,
                        "data" => null
                    );
                } else {
                    $response = array(
                        "message" => "failed",
                        'errors' => "send data to update your User Story",
                        "data" => null
                    );


                }

                return new JsonResponse($response);
            }

        }
        else{
            $data = array(
                "message" => "Failed !",
                'errors' => "check your token validation !!",
                "data" => null
            );
        }


        return new JsonResponse($data);


    }

    /**
     *
     * @Route("/story/{id}/delete")
     * @Method("POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function deleteUserStory($id, Request $request)
    {


        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){

            $story=$this->getDoctrine()->getRepository('ScrumBundle:UserStory')->find($id);

              if (empty($story)) {

                $response=array(
                   'message'=>'User Story Not found !',
                   'errors'=>null,
                   'result'=>null

                );

                return new JsonResponse($response);

              }

              $em=$this->getDoctrine()->getManager();
              $em->remove($story);
              $em->flush();

              $response=array(
                    'message'=>'User Story deleted !',
                    'errors'=>null,
                    'result'=>null

              );



              return new JsonResponse($response);


        }else{

            $data = array(
                'data'	=>'Failed !',
                'errors'=> 'check your token validation',
                'result'=> null
            );
        }

        return new JsonResponse($data);



    }

    /**
     *
     * @Route("/drag/{id}")
     * @Method("POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */

    public function DragAndDrop ($id ,Request $request){

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);
        if ($authCheck) {

            if ($content = $request->getContent()) {
                $parametersAsArray = json_decode($content, true);


                if ($parametersAsArray != null) {


                    $storyUpdate=$this->getDoctrine()->getRepository('ScrumBundle:UserStory')->find($id);

                    $em = $this->getDoctrine()->getManager();


                    $storyUpdate->setStatut($parametersAsArray['statut']);


                    $em->persist($storyUpdate);
                    $em->flush();

                    $data = array(
                        'message' => 'status updated ! ',
                        'errors' => null,
                        "data" => null
                    );
                }
            }


        }
        else{
            $data = array(
                "message" => "Failed !",
                'errors' =>  'check your token validation !!',
                "data" => null
            );
        }

        return new JsonResponse($data);
    }


}
