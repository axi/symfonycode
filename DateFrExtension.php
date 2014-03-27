<?php

namespace Axi\AdminBundle\Twig;
 
class DateFrExtension extends \Twig_Extension
{
	public function getName() {
		return 'datefr';
	}
 
	public function getFilters()
	{
		return array('datefr' => new \Twig_Filter_Method($this, 'dateFr'));
	}
	 
	public function dateFr($date)
	{
		$moisfr = array(
			1 => 'janvier', 2 => 'février', 3 => 'mars',
			4 => 'avril', 5 => 'mai', 6 => 'juin',
			7 => 'juillet', 8 => 'août', 9 => 'septembre',
			10 => 'octobre', 11 => 'novembre', 12 => 'décembre'
		);
		$joursfr = array(
			1 => 'lundi', 2 => 'mardi', 3 => 'mercredi', 4 => 'jeudi',
			5 => 'vendredi', 6 => 'samedi', 7 => 'dimanche');
		
		return 	$joursfr[$date->format('N')].' '.
				$date->format('d').' '.
				$moisfr[$date->format('n')].' '.
				$date->format('Y');
	}
}