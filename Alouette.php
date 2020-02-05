<?php
class Alouette {
	/** Méthode titre
	 * Retourne le titre tel qu'affiché dans le head et le h1 de la page
	 * @param string $oiseau - Le nom de l'oiseau (Alouette)
	 * @param string $qualite - La qualité que l'on donne à l'oiseau (gentille)
	 * @return string
	 */
	function titre($oiseau="",$qualite=""){

	}

	/** Méthode chanson
	 * Retourne la chanson au complet dans un div.chanson
	 * @param string $oiseau - Le nom de l'oiseau (Alouette)
	 * @param string $qualite - La qualité que l'on donne à l'oiseau (gentille)
	 * @param string $action - L'action que l'on fera subire à l'oiseau (plumerai)
	 * @param array $membres - Les membres à traiter
	 * @uses strophe
	 * @return string
	 */
	
	
	/** Méthode strophe
	 * Retourne une strophe au complet
	 * @param string $oiseau - Le nom de l'oiseau (Alouette)
	 * @param string $qualite - La qualité que l'on donne à l'oiseau (gentille)
	 * @param string $action - L'action que l'on fera subire à l'oiseau (plumerai)
	 * @param string $membre - Le membre (la tête)
	 * @param array $membresDits - Les membres à énumérer
	 * @uses refrain
	 * @uses couplet
	 * @return string
	 */
	
	
	/** Méthode refrain
	 * Retourne les 2 phrases du refrain dans des div. Le tout répété 2 fois à l'aide
	 *   de appelReponse et regroupé dans un dans un div.refrain
	 * @param string $oiseau - Le nom de l'oiseau (Alouette)
	 * @param string $qualite - La qualité que l'on donne à l'oiseau (gentille)
	 * @param string $action - L'action que l'on fera subire à l'oiseau (plumerai)
	 * @uses titre
	 * @uses appelReponse
	 * @return string
	 */
	

	/** Méthode couplet
	 * Génère l'appel puis la réponse d'une phrase de la chanson passée en paramètre.
	 * @param string $oiseau - Le nom de l'oiseau (Alouette)
	 * @param string $action - L'action que l'on fera subire à l'oiseau (plumerai)
	 * @param string $membre - Le membre (la tête)
	 * @param array $membresDits - Les membres à énumérer
	 * @uses actionMembre
	 * @uses enumMembres
	 * @uses appelReponse
	 * @return string
	 * @note L'appel est dans un div.appel et la réponse, dans un div.reponse
	 */
	
	
	 /** Méthode appelReponse
	 * Génère l'appel puis la réponse d'une phrase de la chanson passée en paramètre.
	 * @param string $phrase - La phrase à répéter
	 * @return string
	 * @note L'appel est dans un div.appel et la réponse, dans un div.reponse
	 */


	/** Méthode enumMembres
	 * Génère l'énumération des membres passée en paramètre.
	 * @param array $membres - Les membres à énumérer
	 * @uses appelReponse
	 * @return string
	 */

	
	/** Méthode actionMembre
	 * Génère la menace faite à l'oiseau sur son membre.
	 * @param string $action - L'action
	 * @param string $membre - Le membre
	 * @uses appelReponse
	 * @return string
	 */

	 static public function actionMembre($action="", $membre=""){
		$resultat ='<div class="appel"> Je te '.$action.' '.$membre.'</div>';
		$resultat.='<div class="reponse"> Je te '.$action.' '.$membre.'</div>';
		return $resultat;
	 }

}
