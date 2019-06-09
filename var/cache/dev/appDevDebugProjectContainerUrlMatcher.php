<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // scrum_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'scrum_default_index');
            }

            return array (  '_controller' => 'ScrumBundle\\Controller\\DefaultController::indexAction',  '_route' => 'scrum_default_index',);
        }

        if (0 === strpos($pathinfo, '/epic')) {
            // scrum_epics_showepics
            if (preg_match('#^/epic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_epics_showepics;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrum_epics_showepics')), array (  '_controller' => 'ScrumBundle\\Controller\\EpicsController::showEpics',));
            }
            not_scrum_epics_showepics:

            // scrum_epics_deleteepic
            if (preg_match('#^/epic/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_epics_deleteepic;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrum_epics_deleteepic')), array (  '_controller' => 'ScrumBundle\\Controller\\EpicsController::deleteEpic',));
            }
            not_scrum_epics_deleteepic:

            // scrum_epics_updateepics
            if (preg_match('#^/epic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_epics_updateepics;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrum_epics_updateepics')), array (  '_controller' => 'ScrumBundle\\Controller\\EpicsController::UpdateEpics',));
            }
            not_scrum_epics_updateepics:

        }

        elseif (0 === strpos($pathinfo, '/new')) {
            // scrum_epics_createepics
            if ('/new/epic' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_epics_createepics;
                }

                return array (  '_controller' => 'ScrumBundle\\Controller\\EpicsController::CreateEpics',  '_route' => 'scrum_epics_createepics',);
            }
            not_scrum_epics_createepics:

            // scrum_project_createproject
            if ('/new/project' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_project_createproject;
                }

                return array (  '_controller' => 'ScrumBundle\\Controller\\ProjectController::CreateProject',  '_route' => 'scrum_project_createproject',);
            }
            not_scrum_project_createproject:

            // scrum_userstory_createstory
            if ('/new/story' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_userstory_createstory;
                }

                return array (  '_controller' => 'ScrumBundle\\Controller\\UserStoryController::CreateStory',  '_route' => 'scrum_userstory_createstory',);
            }
            not_scrum_userstory_createstory:

        }

        elseif (0 === strpos($pathinfo, '/project')) {
            // show_project
            if (preg_match('#^/project/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_show_project;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_project')), array (  '_controller' => 'ScrumBundle\\Controller\\ProjectController::showProject',));
            }
            not_show_project:

            // list_projects
            if ('/projects' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_list_projects;
                }

                return array (  '_controller' => 'ScrumBundle\\Controller\\ProjectController::listProject',  '_route' => 'list_projects',);
            }
            not_list_projects:

            // scrum_project_updateproject
            if (preg_match('#^/project/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_project_updateproject;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrum_project_updateproject')), array (  '_controller' => 'ScrumBundle\\Controller\\ProjectController::UpdateProject',));
            }
            not_scrum_project_updateproject:

            // scrum_project_deleteproject
            if (preg_match('#^/project/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_project_deleteproject;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrum_project_deleteproject')), array (  '_controller' => 'ScrumBundle\\Controller\\ProjectController::deleteProject',));
            }
            not_scrum_project_deleteproject:

            // scrum_project_projectbyid
            if ('/projectId' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_project_projectbyid;
                }

                return array (  '_controller' => 'ScrumBundle\\Controller\\ProjectController::ProjectById',  '_route' => 'scrum_project_projectbyid',);
            }
            not_scrum_project_projectbyid:

        }

        // scrum_project_filtre
        if ('/filtre' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_scrum_project_filtre;
            }

            return array (  '_controller' => 'ScrumBundle\\Controller\\ProjectController::filtreAction',  '_route' => 'scrum_project_filtre',);
        }
        not_scrum_project_filtre:

        // scrum_project_adduserstoproject
        if ('/addUsers' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_scrum_project_adduserstoproject;
            }

            return array (  '_controller' => 'ScrumBundle\\Controller\\ProjectController::AddUsersToProject',  '_route' => 'scrum_project_adduserstoproject',);
        }
        not_scrum_project_adduserstoproject:

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        if (0 === strpos($pathinfo, '/story')) {
            // scrum_userstory_showuserstory
            if (preg_match('#^/story/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_userstory_showuserstory;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrum_userstory_showuserstory')), array (  '_controller' => 'ScrumBundle\\Controller\\UserStoryController::showUserStory',));
            }
            not_scrum_userstory_showuserstory:

            // scrum_userstory_updatestory
            if (preg_match('#^/story/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_userstory_updatestory;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrum_userstory_updatestory')), array (  '_controller' => 'ScrumBundle\\Controller\\UserStoryController::UpdateStory',));
            }
            not_scrum_userstory_updatestory:

            // scrum_userstory_deleteuserstory
            if (preg_match('#^/story/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_scrum_userstory_deleteuserstory;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrum_userstory_deleteuserstory')), array (  '_controller' => 'ScrumBundle\\Controller\\UserStoryController::deleteUserStory',));
            }
            not_scrum_userstory_deleteuserstory:

        }

        // scrum_userstory_draganddrop
        if (0 === strpos($pathinfo, '/drag') && preg_match('#^/drag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_scrum_userstory_draganddrop;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrum_userstory_draganddrop')), array (  '_controller' => 'ScrumBundle\\Controller\\UserStoryController::DragAndDrop',));
        }
        not_scrum_userstory_draganddrop:

        // app_user_login
        if ('/login' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_app_user_login;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'app_user_login',);
        }
        not_app_user_login:

        // app_user_newuser
        if ('/register' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_app_user_newuser;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::newUser',  '_route' => 'app_user_newuser',);
        }
        not_app_user_newuser:

        if (0 === strpos($pathinfo, '/user')) {
            // app_user_updateuser
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_app_user_updateuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_updateuser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::UpdateUser',));
            }
            not_app_user_updateuser:

            // app_user_deleteuser
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_app_user_deleteuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_deleteuser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteUser',));
            }
            not_app_user_deleteuser:

            // app_user_showuser
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_app_user_showuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_showuser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showUser',));
            }
            not_app_user_showuser:

            // app_user_listuser
            if ('/users' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_app_user_listuser;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::listUser',  '_route' => 'app_user_listuser',);
            }
            not_app_user_listuser:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
