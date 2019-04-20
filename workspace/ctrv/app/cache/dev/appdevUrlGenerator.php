<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_assetic_c477fb1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c477fb1',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c477fb1.js',    ),  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'mail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mail/list_mail',    ),  ),),
        'send_mail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::sendMailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mail/send',    ),  ),),
        'add_mail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::addMailTemplateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mail/mailTemplate/add',    ),  ),),
        'edit_mail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::editMailTemplateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/mail/mailTemplate/edit',    ),  ),),
        'loadTypeMails' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::loadTypeMailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mail/loadTypeMails',    ),  ),),
        'addType_mail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::addTypeMailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mail/addTypeMail',    ),  ),),
        'editType_mail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::editTypeMailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/mail/edit',    ),  ),),
        'mailType_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\MailBundle\\Controller\\MailController::deleteMailTypeAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deleteType',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/mail',    ),  ),),
        'ctrv_tracker_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'CTRV\\TrackerBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'groupe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\FlowBundle\\Controller\\GroupeController::loadGroupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupe/list',    ),  ),),
        'groupe_block' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\FlowBundle\\Controller\\GroupeController::blockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/groupe/block',    ),  ),),
        'groupe_deblock' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\FlowBundle\\Controller\\GroupeController::deblockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/groupe/deblock',    ),  ),),
        'groupe_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\FlowBundle\\Controller\\GroupeController::deleteAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/groupe',    ),  ),),
        'publicMessage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\FlowBundle\\Controller\\PublicMessageController::loadPublicMessageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/publicMessage/list',    ),  ),),
        'publicMessageAbuse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\FlowBundle\\Controller\\PublicMessageController::publicMessageAbuseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/publicMessage/publicMessageAbuse',    ),  ),),
        'publicmessage_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\FlowBundle\\Controller\\PublicMessageController::deleteAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/publicMessage',    ),  ),),
        'eventComment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventCommentController::loadEventCommentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/eventComment',    ),  ),),
        'agendaComment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventCommentController::loadAgendaCommentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/agendaComment',    ),  ),),
        'event' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/listevent',    ),  ),),
        'eventUpdated' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadEventUpdatedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/eventUpdated',    ),  ),),
        'updatePerEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadUpdatePerEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/event/updatePerEvent',    ),  ),),
        'validateEventUpdated' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::validateEventUpdatedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/event/validate',    ),  ),),
        'eventPassed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadEventPassedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/eventPassed',    ),  ),),
        'agenda' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadAgendaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/listagenda',    ),  ),),
        'passedAgenda' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadPassedAgendaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/passedAgenda',    ),  ),),
        'ajouter_evenement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::addEventTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/ajouter',    ),  ),),
        'modifier_evenement' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::updateEventTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/event/modifier',    ),  ),),
        'loadTypeEvents' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::loadTypeEventsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event/loadTypeEvents',    ),  ),),
        'event_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::deleteAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/event',    ),  ),),
        'eventType_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\EventBundle\\Controller\\EventController::deleteTypeAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deleteType',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/event',    ),  ),),
        'placeComment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceCommentController::loadPlaceCommentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/placeComment/placeComment',    ),  ),),
        'delete_double' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::autoDeleteDoubleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/delete_double',    ),  ),),
        'rechercher_place' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::rechercherPlaceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/rechercher',    ),  ),),
        'addNew_place' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::addNewPlaceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/addNewPlace',    ),  ),),
        'ajouter_place' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::ajouterTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/ajouter',    ),  ),),
        'modifier_place' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::modifierTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/place/modifier',    ),  ),),
        'update_place' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::updatePlaceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/place/updatePlace',    ),  ),),
        'saisir_lat_long' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::saisirLatLongAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/place/saisir',    ),  ),),
        'saisir_description' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::saisirDescriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/place/saisirDescrition',    ),  ),),
        'rechercher_place_result' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::rechercherPlaceResultAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/rechercherResult',    ),  ),),
        'import_place' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/import',    ),  ),),
        'calculate_Lat_Lng' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::calculateLatLngAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/calculate_Lat_Lng',    ),  ),),
        'place' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/list',    ),  ),),
        'loadPlacesByType' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::loadPlacesByTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/loadPlacesByType',    ),  ),),
        'loadAllPlacesByTypeOrNot' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::loadAllPlacesByTypeOrNotAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/loadAllPlacesByTypeOrNot',    ),  ),),
        'placeWithoutLatLong' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::placeWithoutLatLongAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/placeWithoutLatLong',    ),  ),),
        'placeWithoutDescription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::placeWithoutDescriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/placeWithoutDescription',    ),  ),),
        'loadTypePlaces' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::loadTypePlacesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/loadTypePlaces',    ),  ),),
        'place_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::deleteAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/place',    ),  ),),
        'place_list_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::deleteListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/deleteList',    ),  ),),
        'placeWithSameAddress' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::placeWithSameAddressAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/place/placeWithSameAddress',    ),  ),),
        'placeType_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\PlaceBundle\\Controller\\PlaceController::deletePlaceTypeAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deleteType',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/place',    ),  ),),
        'abuse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\AbusController::allAbuseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/abuse/list',    ),  ),),
        'abuse_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\AbusController::deleteAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/abuse',    ),  ),),
        'insufficient_access' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\AuthController::insufficientAccessAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/insufficient_access',    ),  ),),
        'register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\AuthController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),),
        'city' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\CityController::getAllCitiesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/city/list',    ),  ),),
        'addCity' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\CityController::addCityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/city/add',    ),  ),),
        'edit_city' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\CityController::editCityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/city/editCity',    ),  ),),
        'city_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\CityController::deleteAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/city',    ),  ),),
        'eventCommentAbuse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\CommentController::eventCommentAbuseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comment/eventCommentAbuse',    ),  ),),
        'placeCommentAbuse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\CommentController::placeCommentAbuseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comment/placeCommentAbuse',    ),  ),),
        'comment_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\CommentController::deleteAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/comment',    ),  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\CommonController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'set_city_session' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\CommonController::citySession',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/set_city_session',    ),  ),),
        'utilisateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::loadUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/list',    ),  ),),
        'userConnectedByCity' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::loadUserConnectedByCityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/connected',    ),  ),),
        'userAll' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::statsUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/all',    ),  ),),
        'user_active' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::activeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/active',    ),  ),),
        'user_desactive' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::desactiveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/desactive',    ),  ),),
        'user_block' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::blockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/block',    ),  ),),
        'user_deblock' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::deblockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/deblock',    ),  ),),
        'rechercher_user_result' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::rechercherUserResultAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/rechercherResult',    ),  ),),
        'user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\UserController::userEditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/userEdit',    ),  ),),
        '_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CTRV\\CommonBundle\\Controller\\AuthController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),),
        '_security_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
