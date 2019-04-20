<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _assetic_c477fb1
        if ($pathinfo === '/js/c477fb1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c477fb1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c477fb1',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // mail
        if ($pathinfo === '/mail/list_mail') {
            return array (  '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::indexAction',  '_route' => 'mail',);
        }

        // send_mail
        if ($pathinfo === '/mail/send') {
            return array (  '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::sendMailAction',  '_route' => 'send_mail',);
        }

        // add_mail
        if ($pathinfo === '/mail/mailTemplate/add') {
            return array (  '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::addMailTemplateAction',  '_route' => 'add_mail',);
        }

        // edit_mail
        if (0 === strpos($pathinfo, '/mail/mailTemplate/edit') && preg_match('#^/mail/mailTemplate/edit/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::editMailTemplateAction',)), array('_route' => 'edit_mail'));
        }

        // loadTypeMails
        if ($pathinfo === '/mail/loadTypeMails') {
            return array (  '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::loadTypeMailsAction',  '_route' => 'loadTypeMails',);
        }

        // addType_mail
        if ($pathinfo === '/mail/addTypeMail') {
            return array (  '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::addTypeMailAction',  '_route' => 'addType_mail',);
        }

        // editType_mail
        if (0 === strpos($pathinfo, '/mail/edit') && preg_match('#^/mail/edit/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::editTypeMailAction',)), array('_route' => 'editType_mail'));
        }

        // mailType_delete
        if (0 === strpos($pathinfo, '/mail') && preg_match('#^/mail/(?<id>[^/]+)/deleteType$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mailType_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::deleteMailTypeAction',)), array('_route' => 'mailType_delete'));
        }
        not_mailType_delete:

        // ctrv_tracker_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\TrackerBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ctrv_tracker_default_index'));
        }

        // groupe
        if ($pathinfo === '/groupe/list') {
            return array (  '_controller' => 'CTRV\\FlowBundle\\Controller\\GroupeController::loadGroupAction',  '_route' => 'groupe',);
        }

        // groupe_block
        if (0 === strpos($pathinfo, '/groupe/block') && preg_match('#^/groupe/block/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\FlowBundle\\Controller\\GroupeController::blockAction',)), array('_route' => 'groupe_block'));
        }

        // groupe_deblock
        if (0 === strpos($pathinfo, '/groupe/deblock') && preg_match('#^/groupe/deblock/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\FlowBundle\\Controller\\GroupeController::deblockAction',)), array('_route' => 'groupe_deblock'));
        }

        // groupe_delete
        if (0 === strpos($pathinfo, '/groupe') && preg_match('#^/groupe/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_groupe_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\FlowBundle\\Controller\\GroupeController::deleteAction',)), array('_route' => 'groupe_delete'));
        }
        not_groupe_delete:

        // publicMessage
        if ($pathinfo === '/publicMessage/list') {
            return array (  '_controller' => 'CTRV\\FlowBundle\\Controller\\PublicMessageController::loadPublicMessageAction',  '_route' => 'publicMessage',);
        }

        // publicMessageAbuse
        if ($pathinfo === '/publicMessage/publicMessageAbuse') {
            return array (  '_controller' => 'CTRV\\FlowBundle\\Controller\\PublicMessageController::publicMessageAbuseAction',  '_route' => 'publicMessageAbuse',);
        }

        // publicmessage_delete
        if (0 === strpos($pathinfo, '/publicMessage') && preg_match('#^/publicMessage/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_publicmessage_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\FlowBundle\\Controller\\PublicMessageController::deleteAction',)), array('_route' => 'publicmessage_delete'));
        }
        not_publicmessage_delete:

        // eventComment
        if ($pathinfo === '/event/eventComment') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventCommentController::loadEventCommentAction',  '_route' => 'eventComment',);
        }

        // agendaComment
        if ($pathinfo === '/event/agendaComment') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventCommentController::loadAgendaCommentAction',  '_route' => 'agendaComment',);
        }

        // event
        if ($pathinfo === '/event/listevent') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadEventAction',  '_route' => 'event',);
        }

        // eventUpdated
        if ($pathinfo === '/event/eventUpdated') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadEventUpdatedAction',  '_route' => 'eventUpdated',);
        }

        // updatePerEvent
        if (0 === strpos($pathinfo, '/event/updatePerEvent') && preg_match('#^/event/updatePerEvent/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadUpdatePerEventAction',)), array('_route' => 'updatePerEvent'));
        }

        // validateEventUpdated
        if (0 === strpos($pathinfo, '/event/validate') && preg_match('#^/event/validate/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::validateEventUpdatedAction',)), array('_route' => 'validateEventUpdated'));
        }

        // eventPassed
        if ($pathinfo === '/event/eventPassed') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadEventPassedAction',  '_route' => 'eventPassed',);
        }

        // agenda
        if ($pathinfo === '/event/listagenda') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadAgendaAction',  '_route' => 'agenda',);
        }

        // passedAgenda
        if ($pathinfo === '/event/passedAgenda') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadPassedAgendaAction',  '_route' => 'passedAgenda',);
        }

        // ajouter_evenement
        if ($pathinfo === '/event/ajouter') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::addEventTypeAction',  '_route' => 'ajouter_evenement',);
        }

        // modifier_evenement
        if (0 === strpos($pathinfo, '/event/modifier') && preg_match('#^/event/modifier/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::updateEventTypeAction',)), array('_route' => 'modifier_evenement'));
        }

        // loadTypeEvents
        if ($pathinfo === '/event/loadTypeEvents') {
            return array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadTypeEventsAction',  '_route' => 'loadTypeEvents',);
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

        // eventType_delete
        if (0 === strpos($pathinfo, '/event') && preg_match('#^/event/(?<id>[^/]+)/deleteType$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_eventType_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::deleteTypeAction',)), array('_route' => 'eventType_delete'));
        }
        not_eventType_delete:

        // placeComment
        if ($pathinfo === '/placeComment/placeComment') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceCommentController::loadPlaceCommentAction',  '_route' => 'placeComment',);
        }

        // delete_double
        if ($pathinfo === '/place/delete_double') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::autoDeleteDoubleAction',  '_route' => 'delete_double',);
        }

        // rechercher_place
        if ($pathinfo === '/place/rechercher') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::rechercherPlaceAction',  '_route' => 'rechercher_place',);
        }

        // addNew_place
        if ($pathinfo === '/place/addNewPlace') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::addNewPlaceAction',  '_route' => 'addNew_place',);
        }

        // ajouter_place
        if ($pathinfo === '/place/ajouter') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::ajouterTypeAction',  '_route' => 'ajouter_place',);
        }

        // modifier_place
        if (0 === strpos($pathinfo, '/place/modifier') && preg_match('#^/place/modifier/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::modifierTypeAction',)), array('_route' => 'modifier_place'));
        }

        // update_place
        if (0 === strpos($pathinfo, '/place/updatePlace') && preg_match('#^/place/updatePlace/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::updatePlaceAction',)), array('_route' => 'update_place'));
        }

        // saisir_lat_long
        if (0 === strpos($pathinfo, '/place/saisir') && preg_match('#^/place/saisir/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::saisirLatLongAction',)), array('_route' => 'saisir_lat_long'));
        }

        // saisir_description
        if (0 === strpos($pathinfo, '/place/saisirDescrition') && preg_match('#^/place/saisirDescrition/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::saisirDescriptionAction',)), array('_route' => 'saisir_description'));
        }

        // rechercher_place_result
        if ($pathinfo === '/place/rechercherResult') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::rechercherPlaceResultAction',  '_route' => 'rechercher_place_result',);
        }

        // import_place
        if ($pathinfo === '/place/import') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::importAction',  '_route' => 'import_place',);
        }

        // calculate_Lat_Lng
        if ($pathinfo === '/place/calculate_Lat_Lng') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::calculateLatLngAction',  '_route' => 'calculate_Lat_Lng',);
        }

        // place
        if ($pathinfo === '/place/list') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::indexAction',  '_route' => 'place',);
        }

        // loadPlacesByType
        if ($pathinfo === '/place/loadPlacesByType') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::loadPlacesByTypeAction',  '_route' => 'loadPlacesByType',);
        }

        // loadAllPlacesByTypeOrNot
        if ($pathinfo === '/place/loadAllPlacesByTypeOrNot') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::loadAllPlacesByTypeOrNotAction',  '_route' => 'loadAllPlacesByTypeOrNot',);
        }

        // placeWithoutLatLong
        if ($pathinfo === '/place/placeWithoutLatLong') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::placeWithoutLatLongAction',  '_route' => 'placeWithoutLatLong',);
        }

        // placeWithoutDescription
        if ($pathinfo === '/place/placeWithoutDescription') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::placeWithoutDescriptionAction',  '_route' => 'placeWithoutDescription',);
        }

        // loadTypePlaces
        if ($pathinfo === '/place/loadTypePlaces') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::loadTypePlacesAction',  '_route' => 'loadTypePlaces',);
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

        // place_list_delete
        if ($pathinfo === '/place/deleteList') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::deleteListAction',  '_route' => 'place_list_delete',);
        }

        // placeWithSameAddress
        if ($pathinfo === '/place/placeWithSameAddress') {
            return array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::placeWithSameAddressAction',  '_route' => 'placeWithSameAddress',);
        }

        // placeType_delete
        if (0 === strpos($pathinfo, '/place') && preg_match('#^/place/(?<id>[^/]+)/deleteType$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_placeType_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::deletePlaceTypeAction',)), array('_route' => 'placeType_delete'));
        }
        not_placeType_delete:

        // abuse
        if ($pathinfo === '/abuse/list') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\AbusController::allAbuseAction',  '_route' => 'abuse',);
        }

        // abuse_delete
        if (0 === strpos($pathinfo, '/abuse') && preg_match('#^/abuse/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_abuse_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\AbusController::deleteAction',)), array('_route' => 'abuse_delete'));
        }
        not_abuse_delete:

        // insufficient_access
        if ($pathinfo === '/insufficient_access') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\AuthController::insufficientAccessAction',  '_route' => 'insufficient_access',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\AuthController::registerAction',  '_route' => 'register',);
        }

        // city
        if ($pathinfo === '/city/list') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CityController::getAllCitiesAction',  '_route' => 'city',);
        }

        // addCity
        if ($pathinfo === '/city/add') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CityController::addCityAction',  '_route' => 'addCity',);
        }

        // edit_city
        if (0 === strpos($pathinfo, '/city/editCity') && preg_match('#^/city/editCity/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CityController::editCityAction',)), array('_route' => 'edit_city'));
        }

        // city_delete
        if (0 === strpos($pathinfo, '/city') && preg_match('#^/city/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_city_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CityController::deleteAction',)), array('_route' => 'city_delete'));
        }
        not_city_delete:

        // eventCommentAbuse
        if ($pathinfo === '/comment/eventCommentAbuse') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CommentController::eventCommentAbuseAction',  '_route' => 'eventCommentAbuse',);
        }

        // placeCommentAbuse
        if ($pathinfo === '/comment/placeCommentAbuse') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CommentController::placeCommentAbuseAction',  '_route' => 'placeCommentAbuse',);
        }

        // comment_delete
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comment_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CommentController::deleteAction',)), array('_route' => 'comment_delete'));
        }
        not_comment_delete:

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CommonController::indexAction',  '_route' => 'home',);
        }

        // set_city_session
        if ($pathinfo === '/set_city_session') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\CommonController::citySession',  '_route' => 'set_city_session',);
        }

        // utilisateur
        if ($pathinfo === '/utilisateur/list') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::loadUserAction',  '_route' => 'utilisateur',);
        }

        // userConnectedByCity
        if ($pathinfo === '/utilisateur/connected') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::loadUserConnectedByCityAction',  '_route' => 'userConnectedByCity',);
        }

        // userAll
        if ($pathinfo === '/utilisateur/all') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::statsUserAction',  '_route' => 'userAll',);
        }

        // user_active
        if (0 === strpos($pathinfo, '/utilisateur/active') && preg_match('#^/utilisateur/active/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::activeAction',)), array('_route' => 'user_active'));
        }

        // user_desactive
        if (0 === strpos($pathinfo, '/utilisateur/desactive') && preg_match('#^/utilisateur/desactive/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::desactiveAction',)), array('_route' => 'user_desactive'));
        }

        // user_block
        if (0 === strpos($pathinfo, '/utilisateur/block') && preg_match('#^/utilisateur/block/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::blockAction',)), array('_route' => 'user_block'));
        }

        // user_deblock
        if (0 === strpos($pathinfo, '/utilisateur/deblock') && preg_match('#^/utilisateur/deblock/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::deblockAction',)), array('_route' => 'user_deblock'));
        }

        // rechercher_user_result
        if ($pathinfo === '/utilisateur/rechercherResult') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::rechercherUserResultAction',  '_route' => 'rechercher_user_result',);
        }

        // user_edit
        if (0 === strpos($pathinfo, '/utilisateur/userEdit') && preg_match('#^/utilisateur/userEdit/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::userEditAction',)), array('_route' => 'user_edit'));
        }

        // _security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'CTRV\\CommonBundle\\Controller\\AuthController::loginAction',  '_route' => '_security_login',);
        }

        // _security_check
        if ($pathinfo === '/login_check') {
            return array('_route' => '_security_check');
        }

        // _security_logout
        if ($pathinfo === '/logout') {
            return array('_route' => '_security_logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
