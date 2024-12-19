<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * demoProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class demoProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        $host = $this->context->getHost();

        if (preg_match('#^localhost$#si', $host, $hostMatches)) {
            // synapse_admin_template_init
            if (preg_match('#^/(?P<_locale>en|fr)/templates/init/(?P<templateType>[^/]++)/(?P<contentType>[^/]++)(?:/(?P<contentId>\\d*))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_synapse_admin_template_init;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_template_init')), array (  '_controller' => 'Synapse\\Admin\\Bundle\\Controller\\TemplateAdminController::initAction',  'contentId' => NULL,  '_locale' => 'fr',));
            }
            not_synapse_admin_template_init:

            // synapse_admin_template_edition
            if (preg_match('#^/(?P<_locale>en|fr)/templates/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_synapse_admin_template_edition;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_template_edition')), array (  '_controller' => 'Synapse\\Admin\\Bundle\\Controller\\TemplateAdminController::editAction',  '_locale' => 'fr',));
            }
            not_synapse_admin_template_edition:

            // synapse_admin_template_add_component
            if (preg_match('#^/(?P<_locale>en|fr)/templates/(?P<id>\\d+)/zone/(?P<zoneTypeId>[^/]++)/add_component/(?P<componentTypeId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_synapse_admin_template_add_component;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_template_add_component')), array (  '_controller' => 'Synapse\\Admin\\Bundle\\Controller\\TemplateAdminController::addComponentAction',  '_locale' => 'fr',));
            }
            not_synapse_admin_template_add_component:

            // synapse_admin_template_list
            if (preg_match('#^/(?P<_locale>en|fr)/templates/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'synapse_admin_template_list');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_template_list')), array (  '_controller' => 'Synapse\\Admin\\Bundle\\Controller\\TemplateAdminController::listAction',  '_locale' => 'fr',));
            }

            // synapse_admin_component_delete
            if (preg_match('#^/(?P<_locale>en|fr)/zones/(?P<zoneId>[^/]++)/(?P<componentId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_synapse_admin_component_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_component_delete')), array (  '_controller' => 'Synapse\\Admin\\Bundle\\Controller\\ZoneAdminController::deleteAction',  '_locale' => 'fr',));
            }
            not_synapse_admin_component_delete:

            // synapse_admin_media_list
            if (preg_match('#^/(?P<_locale>en|fr)/medias/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'synapse_admin_media_list');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_media_list')), array (  '_controller' => 'synapse.media.admin_controller:listAction',  '_locale' => 'fr',));
            }

            // synapse_admin_media_xhr_upload
            if (preg_match('#^/(?P<_locale>en|fr)/medias/xhr/upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_media_xhr_upload')), array (  '_controller' => 'synapse.media.admin_controller:xhrFileUploadAction',  '_locale' => 'fr',));
            }

            // synapse_admin_image_edition
            if (preg_match('#^/(?P<_locale>en|fr)/medias/images/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_synapse_admin_image_edition;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_image_edition')), array (  '_controller' => 'synapse.image.admin_controller:editAction',  '_locale' => 'fr',));
            }
            not_synapse_admin_image_edition:

            // synapse_admin_image_xhr_format
            if (preg_match('#^/(?P<_locale>en|fr)/medias/images/(?P<id>\\d+)/xhr/format/(?P<formatName>\\w+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_image_xhr_format')), array (  '_controller' => 'synapse.image.admin_controller:xhrFormatAction',  '_locale' => 'fr',));
            }

            // synapse_admin_page_list
            if (preg_match('#^/(?P<_locale>en|fr)/pages/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'synapse_admin_page_list');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_page_list')), array (  '_controller' => 'synapse.page.admin_controller:listAction',  '_locale' => 'fr',));
            }

            // synapse_admin_page_creation
            if (preg_match('#^/(?P<_locale>en|fr)/pages/create$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_synapse_admin_page_creation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_page_creation')), array (  '_controller' => 'synapse.page.admin_controller:createAction',  '_locale' => 'fr',));
            }
            not_synapse_admin_page_creation:

            // synapse_admin_page_edition
            if (preg_match('#^/(?P<_locale>en|fr)/pages/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_synapse_admin_page_edition;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_page_edition')), array (  '_controller' => 'synapse.page.admin_controller:editAction',  '_locale' => 'fr',));
            }
            not_synapse_admin_page_edition:

            // synapse_admin_page_preview
            if (preg_match('#^/(?P<_locale>en|fr)/pages/(?P<id>\\d+)/preview$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_synapse_admin_page_preview;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_admin_page_preview')), array (  '_controller' => 'Synapse\\Page\\Bundle\\Controller\\PageContentController::previewAction',  '_locale' => 'fr',));
            }
            not_synapse_admin_page_preview:

            // default_admin
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'default_admin');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/fr/pages',  'permanent' => true,  '_route' => 'default_admin',);
            }

        }

        if (preg_match('#^demo\\.synapse\\.dev$#si', $host, $hostMatches)) {
            // synapse_content_type_page
            if (preg_match('#^/(?P<_locale>en|fr)/(?P<path>[^.]*)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'synapse_content_type_page')), array (  '_controller' => 'Synapse\\Page\\Bundle\\Controller\\PageContentController::renderAction',  '_format' => 'html',  '_locale' => 'fr',));
            }

            // default_front
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'default_front');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/fr',  'permanent' => true,  '_route' => 'default_front',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
