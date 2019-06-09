<?php

namespace AppBundle\Controller;


use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Services\Helpers;
use AppBundle\Services\JwtAuth;

use AppBundle\Entity\User;

class UserController extends Controller{

    /**
     * @Route("/login")
     * @Method("POST")
     * @param Request $request
     * @return JsonResponse
     */


    public function loginAction(Request $request){

        $helpers = $this->get(Helpers::class);
        $parametersAsArray = [];

        if ($content = $request->getContent()) {
            $parametersAsArray = json_decode($content, true);
        }
        $data = array(
            'status'=>'error',
            'data'=>'Send json via post.'
        );

        if($parametersAsArray != null){
            $email = (isset($parametersAsArray['email'])) ? $parametersAsArray['email'] : null;
            $password = (isset($parametersAsArray['password'])) ? $parametersAsArray['password'] : null;
            $getHash = (isset($parametersAsArray['password'])) ? $parametersAsArray['password'] : null;
            $emailConstraint = new Assert\Email();
            $emailConstraint->message = "This email is not valid!";
            $validate_email = $this->get('validator')->validate($email, $emailConstraint);
            $pwd = hash('sha256', $password);

            if(count($validate_email) == 0 && $password != null){
                $jwt_auth = $this->get(JwtAuth::class);
                if($getHash == null || $getHash == false){
                    $signup = $jwt_auth->signup($email, $pwd);
                }else{
                    $signup = $jwt_auth->signup($email, $pwd, true);
                }

                return $this->json($signup);
            }else{
                $data = array(
                    'data'=>'Email or password Incorrect.'
                );
            }
        }
        return $helpers->json($data);
    }

    /**
     * @Route("/register")
     * @Method("POST")
     * @param Request $request
     * @return JsonResponse
     */

	public function newUser(Request $request){

	    $helpers = $this->get(Helpers::class);
		
		$parametersAsArray = [];
    	if ($content = $request->getContent()) {
        $parametersAsArray = json_decode($content, true);
    	}
		
		$data = array(
            'message'=>'user Not created, send data!',
            'result'=>null
		);

		if($parametersAsArray !=null){
			//role par défaut user sinn db tvioo

		    $role = 'user';

			$email = (isset($parametersAsArray['email'])) ? $parametersAsArray['email'] : null;
			$name = (isset($parametersAsArray['name'])) ? $parametersAsArray['name'] : null;
			$password = (isset($parametersAsArray['password'])) ? $parametersAsArray['password'] : null;

			$emailConstraint = new Assert\Email();
			$emailConstraint->message = "This email is not valid!";
            $validate_email = $this->get("validator")->validate($email, $emailConstraint);

			if($email != null && count($validate_email)==0 && $password != null && $name != null){

				$user = new User();
				$user->setRole($role);
				$user->setEmail($email);
				$user->setName($name);

				$pwd = hash('sha256',$password);
				$user->setPassword($pwd);

				$em = $this->getDoctrine()->getManager();
				$isset_user = $em->getRepository('AppBundle:User')->findBy(array(
					"email" => $email
				));

				if(count($isset_user)==0){
					$em->persist($user);
					$em->flush();

					$data = array(
                        'message'=>'user created !',
                        'errors'=>null,
                        'result'=>null
					);
				}else{
					$data = array(

                        'message'=>'user Not created !',
                        'errors'=>null,
                        'result'=>null

                    );
				}
			}

		}

		//return $helpers->json($data);
        return new JsonResponse($data);
		
	}

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="update user with token verification",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "description"="The user unique identifier."
     *         }
     *     },
     *     section="user"
     * )
     * @Route("/user/{id}/edit")
     * @Method({"POST"})
     * @param $id
     * @param Request $request
     * @return
     */
    public function UpdateUser($id, Request $request)
    {

        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);
        if ($authCheck) {
            //  $identity = $jwt_auth->checkToken($token, true);
            //  $parametersAsArray = [];
            if ($content = $request->getContent()) {
                $parametersAsArray = json_decode($content, true);


                if ($parametersAsArray != null) {


                    $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);

                    $em = $this->getDoctrine()->getManager();

                    $name = (isset($parametersAsArray['name'])) ? $parametersAsArray['name'] : null;
                    $password = (isset($parametersAsArray['password'])) ? $parametersAsArray['password'] : null;
                    $email = (isset($parametersAsArray['email'])) ? $parametersAsArray['email'] : null;
                    $emailConstraint = new Assert\Email();
                    $emailConstraint->message = "This email is not valid!";
                    $validate_email = $this->get("validator")->validate($email, $emailConstraint);

                    if ($email != null && count($validate_email) == 0 && $password != null && $name != null) {

                        $user->setName($parametersAsArray['name']);
                        $user->setEmail($parametersAsArray['email']);

                        $pass = hash('sha256', $parametersAsArray['password']);
                        $user->setPassword($pass);


                        $em->persist($user);
                        $em->flush();

                        $data = array(
                            "data" => "user updated",
                            'errors' => null,
                            'result' => null
                        );


                    }
                }else {
                    $data = array(
                        "data" => "parameters failed",
                        'result' => null
                    );


                }

            }


        }
        else{
            $data = array(
                "data" => "Failed ! check your token validation !!"
            );


        }

        return $helpers->json($data);
    }


    /**
     * @ApiDoc(
     *     resource=true,
     *     description="delete user with token verification",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "description"="The user unique identifier."
     *         }
     *     },
     *     section="user"
     * )
     *
     * @Route("/user/{id}/delete")
     * @Method("POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */


    public function deleteUser($id,Request $request )
    {
        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization",null);
        $authCheck = $jwt_auth->checkToken($token);

        if($authCheck){


            $identity = $jwt_auth->checkToken($token, true);


        $user=$this->getDoctrine()->getRepository('AppBundle:User')->find($id);

        if (empty($user)) {

            $response=array(

                'message'=>'user Not found !',
                'errors'=>null,
                'result'=>null

            );
            return new JsonResponse($response);
        }

        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        $data=array(

            'message'=>'user deleted !',
            'errors'=>null,
            'result'=>null

        );

        }else{

            $data = array(
                'data'	=>'Failed ! check your token validation'
            );
        }

        return $helpers->json($data);

    }


    /**
     * @ApiDoc(
     *     resource=true,
     *     description="show user with token verification",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "description"="The user unique identifier."
     *         }
     *     },
     *     section="user"
     * )
     * @Route("/user/{id}")
     * @Method("POST")
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    public function showUser($id, Request $request)
    {
        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);
        if ($authCheck) {
            $identity = $jwt_auth->checkToken($token, true);
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);


        if (empty($user)) {
            $response = array(
                'message' => 'user not found',
                'error' => null,
                'result' => null
            );

            return new JsonResponse($response);
        }

        $data = $this->get('jms_serializer')->serialize($user, 'json');


        $response = array(

            'message' => 'success',
            'errors' => null,
            'result' => json_decode($data)

        );

        return new JsonResponse($response, 200);

        }
        else{
            $data = array(
                "data" => "Failed ! check your token validation !!"
            );
        }

        return $helpers->json($data);



    }

    /**
     * @ApiDoc(
     *     resource=true,
     *     description="update user with token verification",
     *
     *     section="user"
     * )
     * @Route("/users")
     * @Method("POST")
     * @param Request $request
     * @return JsonResponse
     */

    public function listUser(Request $request)
    {

        $helpers = $this->get(Helpers::class);
        $jwt_auth = $this->get(JwtAuth::class);

        $token = $request->get("authorization", null);
        $authCheck = $jwt_auth->checkToken($token);
        if ($authCheck) {
            $identity = $jwt_auth->checkToken($token, true);

        $users=$this->getDoctrine()->getRepository('AppBundle:User')->findAll();

        if (!count($users)){
            $response=array(

                'message'=>'No users found!',
                'errors'=>null,
                'result'=>null

            );


            return new JsonResponse($response, Response::HTTP_NOT_FOUND);
        }


        $data=$this->get('jms_serializer')->serialize($users,'json');

        $response=array(

            'message'=>'success',
            'errors'=>null,
            'result'=>json_decode($data)

        );

        return new JsonResponse($response,200);


        }
        else{
            $data = array(
                "data" => "Failed ! check your token validation !!"
            );
        }
        return new JsonResponse($data,200);
        //return $helpers->json($data);


    }



}