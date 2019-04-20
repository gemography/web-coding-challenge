<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // ctrv_tracker_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\TrackerBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ctrv_tracker_default_index'));
        }

        // ctrv_flow_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\FlowBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ctrv_flow_default_index'));
        }

        // agenda_comment_edit
        if (0 === strpos($pathinfo, '/agendaComment') && preg_match('#^/agendaComment/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\AgendaCommentController::editAction',)), array('_route' => 'agenda_comment_edit'));
        }

        // agenda_comment_delete
        if (0 === strpos($pathinfo, '/agendaComment') && preg_match('#^/agendaComment/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_agenda_comment_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\AgendaCommentController::deleteAction',)), array('_route' => 'agenda_comment_delete'));
        }
        not_agenda_comment_delete:

        // agenda
        if ($pathinfo === '/agenda/list') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\AgendaController::indexAction',  '_route' => 'agenda',);
        }

        // agenda_delete
        if (0 === strpos($pathinfo, '/agenda') && preg_match('#^/agenda/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_agenda_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\AgendaController::deleteAction',)), array('_route' => 'agenda_delete'));
        }
        not_agenda_delete:

        // event
        if ($pathinfo === '/eventcomment/list') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventCommentController::indexAction',  '_route' => 'event',);
        }

        // event_comment_edit
        if (0 === strpos($pathinfo, '/eventcomment') && preg_match('#^/eventcomment/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventCommentController::editAction',)), array('_route' => 'event_comment_edit'));
        }

        // event_comment_delete
        if (0 === strpos($pathinfo, '/eventcomment') && preg_match('#^/eventcomment/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_event_comment_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventCommentController::deleteAction',)), array('_route' => 'event_comment_delete'));
        }
        not_event_comment_delete:

        // event_edit
        if (0 === strpos($pathinfo, '/event') && preg_match('#^/event/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::editAction',)), array('_route' => 'event_edit'));
        }

        // event_delete
        if (0 === strpos($pathinfo, '/event') && preg_match('#^/event/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_event_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::deleteAction',)), array('_route' => 'event_delete'));
        }
        not_event_delete:

        // ctrv_user_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\UserBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ctrv_user_default_index'));
        }

        // import_place
        if ($pathinfo === '/place/import') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::importAction',  '_route' => 'import_place',);
        }

        // place
        if ($pathinfo === '/place/list') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::indexAction',  '_route' => 'place',);
        }

        // loadPlacesByType
        if ($pathinfo === '/place/loadPlacesByType') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::loadPlacesByTypeAction',  '_route' => 'loadPlacesByType',);
        }

        // lat_lng
        if ($pathinfo === '/place/lat_lng') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::getLatitudeLongitudePlace',  '_route' => 'lat_lng',);
        }

        // place_edit
        if (0 === strpos($pathinfo, '/place') && preg_match('#^/place/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::editAction',)), array('_route' => 'place_edit'));
        }

        // place_delete
        if (0 === strpos($pathinfo, '/place') && preg_match('#^/place/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_place_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::deleteAction',)), array('_route' => 'place_delete'));
        }
        not_place_delete:

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CommonController::indexAction',  '_route' => 'home',);
        }

        // city_session
        if ($pathinfo === '/session/city') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CommonController::setCitySession',  '_route' => 'city_session',);
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
