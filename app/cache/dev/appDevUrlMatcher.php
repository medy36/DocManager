<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/ce36db3')) {
                // _assetic_ce36db3
                if ($pathinfo === '/css/ce36db3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ce36db3',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ce36db3',);
                }

                if (0 === strpos($pathinfo, '/css/ce36db3_part_1_')) {
                    if (0 === strpos($pathinfo, '/css/ce36db3_part_1_bootstrap')) {
                        // _assetic_ce36db3_0
                        if ($pathinfo === '/css/ce36db3_part_1_bootstrap_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ce36db3',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ce36db3_0',);
                        }

                        // _assetic_ce36db3_1
                        if ($pathinfo === '/css/ce36db3_part_1_bootstrap.min_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ce36db3',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_ce36db3_1',);
                        }

                    }

                    // _assetic_ce36db3_2
                    if ($pathinfo === '/css/ce36db3_part_1_shop-item_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ce36db3',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_ce36db3_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/a2438c7')) {
                // _assetic_a2438c7
                if ($pathinfo === '/css/a2438c7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a2438c7',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a2438c7',);
                }

                // _assetic_a2438c7_0
                if ($pathinfo === '/css/a2438c7_shop-item_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a2438c7',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a2438c7_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/47fc26e')) {
            // _assetic_47fc26e
            if ($pathinfo === '/js/47fc26e.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '47fc26e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_47fc26e',);
            }

            if (0 === strpos($pathinfo, '/js/47fc26e_')) {
                // _assetic_47fc26e_0
                if ($pathinfo === '/js/47fc26e_custom_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '47fc26e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_47fc26e_0',);
                }

                // _assetic_47fc26e_1
                if ($pathinfo === '/js/47fc26e_angularCtrls_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '47fc26e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_47fc26e_1',);
                }

            }

        }

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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // dm_user_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dm_user_homepage')), array (  '_controller' => 'DM\\Bundle\\UserBundle\\Controller\\DefaultController::indexAction',));
            }

            // dm_resource_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dm_resource_homepage')), array (  '_controller' => 'DM\\Bundle\\ResourceBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // angularjs_test
        if ($pathinfo === '/angularjs') {
            return array (  '_controller' => 'DM\\Bundle\\ResourceBundle\\Controller\\DefaultController::ngtestAction',  '_route' => 'angularjs_test',);
        }

        // new_document_page
        if ($pathinfo === '/new/document') {
            return array (  '_controller' => 'DM\\Bundle\\DocumentBundle\\Controller\\DefaultController::newDocumentAction',  '_route' => 'new_document_page',);
        }

        // list_documents
        if ($pathinfo === '/list/documents') {
            return array (  '_controller' => 'DM\\Bundle\\DocumentBundle\\Controller\\DefaultController::listDocumentsAction',  '_route' => 'list_documents',);
        }

        // api_list
        if ($pathinfo === '/api/list') {
            return array (  '_controller' => 'DM\\Bundle\\DocumentBundle\\Controller\\DefaultController::apiListAction',  '_route' => 'api_list',);
        }

        // post_new_document
        if ($pathinfo === '/post/document') {
            return array (  '_controller' => 'DM\\Bundle\\DocumentBundle\\Controller\\DefaultController::postDocumentAction',  '_route' => 'post_new_document',);
        }

        // document_details
        if (0 === strpos($pathinfo, '/document/details') && preg_match('#^/document/details/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_details')), array (  '_controller' => 'DM\\Bundle\\DocumentBundle\\Controller\\DefaultController::documentDetailsAction',));
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
