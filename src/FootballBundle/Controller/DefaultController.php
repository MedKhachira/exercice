<?php

namespace FootballBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function searchTeamsByLeagueAction($league,Request $request)
    {
    	$appFootball = $this->get('app.football');
    	$league_name = $request->get('league-name');
    	if(!empty($league)){
    		$league_name = $league;
    	}
    	$teams = $appFootball->getTeamsByLigue($league_name);
    	if(!isset($teams['teams'])){
			$teams['teams'] = array();
    	}
    	return $this->render('@Football\Default\listTeams.html.twig',array("teams"=>$teams['teams'],"league"=>$league_name));
    }

    public function listPlayersByTeamAction($team,$league)
    {
    	$appFootball = $this->get('app.football');
    	$players = $appFootball->getPlayersByTeam($team);
    	return $this->render('@Football\Default\listPlayers.html.twig',array("players"=>$players['player'],"team"=>$team,"league"=>$league));
    }
}
