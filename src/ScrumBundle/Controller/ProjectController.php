<?php

namespace ScrumBundle\Controller;

use AppBundle\Services\Helpers;
use AppBundle\Services\JwtAuth;


use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use ScrumBundle\Entity\Project;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class ProjectController extends Controller
{
    /**
     * @ApiDoc(
     *     resource=true,
     *
     *     description="Get project with token verification",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "description"="The project unique identifier."
     *         }
     *     },
     *     section="projects"

     * )
     * @Route("/project/{id}", name="show_project")
     * @Method({"POST"})
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function showProject($id, Request $request)
    {

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){

             $project = $this->getDoctrine()->getRepository('ScrumBundle:Project')->find($id);

        if (empty($project)) {
            $data = array(
                'message' => 'project not found',
                'error' => null,
                'result' => null
            );

            return new JsonResponse($data);

        }

        $data = $this->get('jms_serializer')->serialize($project, 'json');


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

            return new JsonResponse($data);
        }


    }

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="Get project with token verification",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "description"="The project unique identifier."
     *         }
     *     },
     *     section="projects"
     * )
     * @Route("/projects" , name="list_projects")
     * @Method("POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function listProject(Request $request)
    {
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){

        $projects=$this->getDoctrine()->getRepository('ScrumBundle:Project')->findAll();

        if (!count($projects)){
            $response=array(

                'message'=>'No projects found!',
                'errors'=>null,
                'result'=>null

            );

            return new JsonResponse($response);
        }


        $data=$this->get('jms_serializer')->serialize($projects,'json');

        $response=array(

            'message'=>'success',
            'errors'=>null,
            'result'=>json_decode($data)

        );

        return new JsonResponse($response);

        }else{

            $data = array(
                'data'	=>'Failed ! check your token validation'
            );


            return new JsonResponse($data);
        }



    }


    /**
     * @ApiDoc(
     *     resource=true,
     *     description="update project with token verification",
     *
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "description"="The project unique identifier."
     *         }
     *     },
     *     section="projects"
     *
     *
     * )
     * @Route("/project/{id}/edit")
     * @Method({"POST"})
     * @param $id
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function UpdateProject($id, Request $request)
    {

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);

        if ($authCheck) {


            if ($content = $request->getContent()) {

                $parametersAsArray = json_decode($content, true);

                if ($parametersAsArray != null) {

                    $project = $this->getDoctrine()->getRepository('ScrumBundle:Project')->find($id);

                    $em = $this->getDoctrine()->getManager();


                    $project->setName($parametersAsArray['name']);
                    $project->setDescription($parametersAsArray['description']);
                    $project->setStatut($parametersAsArray['statut']);
                    $project->setDateDebut(new \DateTime($parametersAsArray['dateDebut']));
                    $project->setDateFin(new \DateTime($parametersAsArray['dateFin']));


                    $em->persist($project);
                    $em->flush();

                    $data = array(
                        "data" => "project updated",
                        'errors' => null,
                        'result' => null
                    );
                } else {
                    $data = array(
                        'data' => "failed",
                        'errors' => "send data to update the project",
                        'result' => null
                    );


                }

                return new JsonResponse($data);
        }


        } else {
            $data = array(
                'data' => 'Failed !',
                'errors' => 'check your token validation !',
                'result' => null
            );

        }

        return new JsonResponse($data);


    }

    /**
     * @Route("/project/{id}/delete")
     * @Method({"POST"})
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */

    public function deleteProject($id, Request $request)
    {

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){

            $project=$this->getDoctrine()->getRepository('ScrumBundle:Project')->find($id);

        if (empty($project)) {

            $response=array(
                'message'=>'project Not found !',
                'errors'=>null,
                'result'=>null
            );

            return new JsonResponse($response);
        }

        $em=$this->getDoctrine()->getManager();
        $em->remove($project);
        $em->flush();

        $response=array(
            'message'=>'project deleted !',
            'errors'=>null,
            'result'=>null
        );

        return new JsonResponse($response);

        }else{

            $data = array(
                'data'	=>'Failed ! ',
                'errors'=>'check your token validation',
                'result'=>null
            );

            return new JsonResponse($data);
        }


    }

    /**
     * @Route("/new/project")
     * @Method({"POST"})
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function CreateProject(Request $request)
    {

        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);
        if ($authCheck) {


            if ($content = $request->getContent()) {
                $parametersAsArray = json_decode($content, true);

                if ($parametersAsArray != null) {

                    $project = new Project();

                    $em = $this->getDoctrine()->getManager();

                    $project->setName($parametersAsArray['name']);
                    $project->setDescription($parametersAsArray['description']);
                    $project->setStatut('en cours');
                    $project->setDateDebut(new \DateTime($parametersAsArray['dateDebut']));
                    $project->setDateFin(new \DateTime($parametersAsArray['dateFin']));


                    $usersAsArray []= $parametersAsArray['users'];
                    //var_dump($usersAsArray);
                    //die();
                    for($i=0; $i<count($usersAsArray[0]); $i++){
                        $user=$this->getDoctrine()->getRepository('AppBundle:User')->find($usersAsArray[0][$i]);
                      // var_dump($user);

                       $project->addUser($user);
                      //  var_dump($project);
                      //  die();
                    }

                    var_dump($project);

                    $em->persist($project);
                    $em->flush();
                    var_dump($project);
                    $data = array(
                        "data" => "project created",
                        'errors' => null,
                        'result' => null
                    );
                } else {
                    $data = array(
                        "data" => "parameters failed",
                        'errors' => null,
                        'result' => null
                    );


                }
                return new JsonResponse($data);
            }

        }
        else {
            $resp = array(
                "data" => "Failed ! check your token validation !!",
                'errors' => null,
                'result' => null
            );
        }

        return new JsonResponse($resp);

    }


    /**
     * @Route("/filtre")
     * @Method("POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function filtreAction(Request $request){

        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){

            if ($content = $request->getContent()) {
                $parametersAsArray = json_decode($content, true);

                $project = $this->getDoctrine()->getRepository('ScrumBundle:Project')->findBy(array(
                    "statut" => $parametersAsArray['statut']
                ));

            }
            //return new JsonResponse($project);

            $data=$this->get('jms_serializer')->serialize($project,'json');

            $response = array(
                'data' => 'success',
                'errors' => null,
                'result' =>json_decode($data)
            );

            return new JsonResponse($response);

        }
        else{
            $data = array(
                 'data' => 'Failed !',
                 'errors' => 'check your token validation !!',
                 'result' => null
            );
        }

        return new JsonResponse($data);
    }

//filtre pour afficher les projets par id de l'utilisateur connecté
    /**
     * @Route("/projectId")
     * @Method("POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function ProjectById(Request $request){

        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){

            if ($content = $request->getContent()) {
                $parametersAsArray = json_decode($content, true);
                // hedhi id user eli 3mal creation mazel id user eli affecte lil projet
                $project = $this->getDoctrine()->getRepository('ScrumBundle:Project')->findBy(array(
                    "id_user" => $parametersAsArray['id_user']
                ));

            }
            //return new JsonResponse($project);

            return $helpers->json($project);
        }
        else{
            $data = array(
                "data" => "Failed ! check your token validation !!"
            );
        }

        return new JsonResponse($data);



    }

    /**
     * @Route("/addUsers")
     * @Method("POST")
     * @param $id
     * @param Request $request
     */
    public function AddUsersToProject($id, Request $request)
    {

        $parametersAsArray = [];
        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);

        if ($authCheck) {


            if ($content = $request->getContent()) {
                $parametersAsArray = json_decode($content, true);
            }
        }


        $project_id= $parametersAsArray['project_id'];

        $projet=$this->getDoctrine()->getManager()->getRepository('ScrumBundle:Project')->find($project_id);


    }
}


