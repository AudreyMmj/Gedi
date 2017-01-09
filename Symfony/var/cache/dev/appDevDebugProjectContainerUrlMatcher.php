<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
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

        if (0 === strpos($pathinfo, '/groupe')) {
            // groupe_index
            if (rtrim($pathinfo, '/') === '/groupe') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_groupe_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'groupe_index');
                }

                return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\GroupeController::indexAction',  '_route' => 'groupe_index',);
            }
            not_groupe_index:

            // groupe_new
            if ($pathinfo === '/groupe/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_groupe_new;
                }

                return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\GroupeController::newAction',  '_route' => 'groupe_new',);
            }
            not_groupe_new:

            // groupe_show
            if (preg_match('#^/groupe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_groupe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_show')), array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\GroupeController::showAction',));
            }
            not_groupe_show:

            // groupe_edit
            if (preg_match('#^/groupe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_groupe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_edit')), array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\GroupeController::editAction',));
            }
            not_groupe_edit:

            // groupe_delete
            if (preg_match('#^/groupe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_groupe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_delete')), array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\GroupeController::deleteAction',));
            }
            not_groupe_delete:

        }

        if (0 === strpos($pathinfo, '/document')) {
            // document_index
            if (rtrim($pathinfo, '/') === '/document') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_document_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'document_index');
                }

                return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\DocumentController::indexAction',  '_route' => 'document_index',);
            }
            not_document_index:

            // document_new
            if ($pathinfo === '/document/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_document_new;
                }

                return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\DocumentController::newAction',  '_route' => 'document_new',);
            }
            not_document_new:

            // document_show
            if (preg_match('#^/document/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_document_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_show')), array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\DocumentController::showAction',));
            }
            not_document_show:

            // document_edit
            if (preg_match('#^/document/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_document_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_edit')), array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\DocumentController::editAction',));
            }
            not_document_edit:

            // document_delete
            if (preg_match('#^/document/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_document_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_delete')), array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\DocumentController::deleteAction',));
            }
            not_document_delete:

        }

        if (0 === strpos($pathinfo, '/projet')) {
            // projet_index
            if (rtrim($pathinfo, '/') === '/projet') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'projet_index');
                }

                return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\ProjetController::indexAction',  '_route' => 'projet_index',);
            }
            not_projet_index:

            // projet_new
            if ($pathinfo === '/projet/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_projet_new;
                }

                return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\ProjetController::newAction',  '_route' => 'projet_new',);
            }
            not_projet_new:

            // projet_show
            if (preg_match('#^/projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_show')), array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\ProjetController::showAction',));
            }
            not_projet_show:

            // projet_edit
            if (preg_match('#^/projet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_projet_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_edit')), array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\ProjetController::editAction',));
            }
            not_projet_edit:

            // projet_delete
            if (preg_match('#^/projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_projet_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_delete')), array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\ProjetController::deleteAction',));
            }
            not_projet_delete:

        }

        // delete_user
        if ($pathinfo === '/users_admin/suppression') {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_delete_user;
            }

            return array (  '_controller' => 'Gedi\\AdminBundle\\Controller\\UtilisateurController::deleteAction',  '_route' => 'delete_user',);
        }
        not_delete_user:

        // start
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'start');
            }

            return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\BaseController::startAction',  '_route' => 'start',);
        }

        // home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\BaseController::homeAction',  '_route' => 'home',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\BaseController::registerAction',  '_route' => 'register',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\BaseController::contactAction',  '_route' => 'contact',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Gedi\\BaseBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // home_admin
            if ($pathinfo === '/admin/home_admin') {
                return array (  '_controller' => 'Gedi\\AdminBundle\\Controller\\AdminController::homeAction',  '_route' => 'home_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/users_admin')) {
                // users_admin
                if ($pathinfo === '/admin/users_admin') {
                    return array (  '_controller' => 'Gedi\\AdminBundle\\Controller\\AdminController::usersAction',  '_route' => 'users_admin',);
                }

                // del_user
                if ($pathinfo === '/admin/users_admin/del_user') {
                    return array (  '_controller' => 'Gedi\\AdminBundle\\Controller\\AdminController::deleteAction',  '_route' => 'del_user',);
                }

            }

            // groups_admin
            if ($pathinfo === '/admin/groups_admin') {
                return array (  '_controller' => 'Gedi\\AdminBundle\\Controller\\AdminController::groupsAction',  '_route' => 'groups_admin',);
            }

            // projects_admin
            if ($pathinfo === '/admin/projects_admin') {
                return array (  '_controller' => 'Gedi\\AdminBundle\\Controller\\AdminController::projectsAction',  '_route' => 'projects_admin',);
            }

            // docs_admin
            if ($pathinfo === '/admin/docs_admin') {
                return array (  '_controller' => 'Gedi\\AdminBundle\\Controller\\AdminController::documentsAction',  '_route' => 'docs_admin',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // home_user
            if ($pathinfo === '/user/home_user') {
                return array (  '_controller' => 'Gedi\\UserBundle\\Controller\\UserController::homeAction',  '_route' => 'home_user',);
            }

            // account_user
            if ($pathinfo === '/user/account_user') {
                return array (  '_controller' => 'Gedi\\UserBundle\\Controller\\UserController::accountAction',  '_route' => 'account_user',);
            }

            // recent_user
            if ($pathinfo === '/user/recent_user') {
                return array (  '_controller' => 'Gedi\\UserBundle\\Controller\\UserController::recentAction',  '_route' => 'recent_user',);
            }

            // shared_user
            if ($pathinfo === '/user/shared_user') {
                return array (  '_controller' => 'Gedi\\UserBundle\\Controller\\UserController::sharedAction',  '_route' => 'shared_user',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
