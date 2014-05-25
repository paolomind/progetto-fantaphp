<?php
class Controller_CaricamentoBatch extends Controller {
	
	public function action_index() {
		echo "no default action - loadDeputati, loadPunteggi";
	}
	
	public function action_loadDeputati() {

		$query = DB::delete('fanta_deputato_punteggi');
		$query->execute();
		
		$query = DB::delete('fanta_deputato');
		$query->execute();
		
		$sparql = 'select distinct * where {
?deputato a ocd:deputato; foaf:firstName ?nome; foaf:surname ?cognome; ocd:rif_leg <http://dati.camera.it/ocd/legislatura.rdf/repubblica_17>; ocd:rif_mandatoCamera ?mandato.
FILTER NOT EXISTS {
?mandato ocd:endDate ?date
}
} ORDER BY ?cognome ?nome';
		$jsonobj = Controller_CaricamentoBatch::eseguiQueryJSON($sparql);
		$objs=$jsonobj->results->bindings;
		$i=0;
		foreach ($objs as $obj) {
			$deputatoModel = new Model_FantaDeputato();
			$deputatoModel->nome= $obj->nome->value ;
			$deputatoModel->cognome=$obj->cognome->value;
			$deputatoModel->uri=$obj->deputato->value;
			$deputatoModel->save();
			echo Debug::vars($deputatoModel);
			if(++$i>=100) break;
		}
		
		
	}
	
	public function action_loadPunteggi() {

		$query = DB::delete('fanta_deputato_punteggi');
		$query->execute();
		
		$query = DB::delete('fanta_punteggio_tipo');
		$query->execute();
		
		$deputatoModel = new Model_FantaDeputato();
		$deputatoModel = $deputatoModel->find_all();
						echo Debug::vars($deputatoModel);
		$fatto=false;
		$i=0;
		foreach ($deputatoModel as $deputato) 
		{
			sleep(0.2);

// 		'.$id.'	http://dati.camera.it/ocd/deputato.rdf/d305898_17
			
			$id=$deputato->uri;
			$sparql = 'select count(distinct ?attoP) as ?primoFirmaAtto
 count(distinct ?attoA) as ?altroFirmaAtto
 count(distinct ?aicP) as ?primoFirmaAIC
 count(distinct ?aicA) as ?altroFirmaAIC
 count(distinct ?intervento) as ?interventi
 count(distinct ?voto) as ?voti
  where {
  {?attoP ocd:primo_firmatario <'.$id.'>. ?attoP a ocd:atto.}
UNION {?attoA ocd:altro_firmatario <'.$id.'> . ?attoA a ocd:atto.}

 UNION {?aicP ocd:primo_firmatario <'.$id.'>. ?aicP a ocd:aic.}
 UNION {?aicA ocd:altro_firmatario <'.$id.'> . ?aicA a ocd:aic.}

 UNION {?intervento ocd:rif_deputato <'.$id.'>. ?intervento a ocd:intervento.} 

 UNION {?voto ocd:rif_deputato <'.$id.'>. ?voto a ocd:voto.} 
} ';

			$jsonobj = null;
			try {
				$jsonobj = Controller_CaricamentoBatch::eseguiQueryJSON($sparql);
			} catch (Exception $e) {
				echo ('errore nella query: '.$sparql."\n<br>\n<br>");
			}
			if($jsonobj!=null) {
				if($fatto===false) {
					$hobjs=$jsonobj->head->vars;
					$i=1;
					foreach ($hobjs as $value) {
						$model = new Model_FantaPunteggio();
						$model->id=$i++;
						$model->nomeid=$value;
						$model->peso=1;
						$model->save();
						$fatto[$value]=$i;
					}
				}
				$robjs=$jsonobj->results->bindings;
				foreach ($robjs as $robj) {
					foreach ($robj as $k => $v) {
							$record=array($deputato->id*1,$fatto[$k],$v->value*1,);
						try {
							echo Debug::vars($record);
							$query = DB::insert('fanta_deputato_punteggi', 
									array('deputato_id', 'punteggio_id','valore'))
									->values($record);
							$query->execute();
						} catch (Exception $e) {
							echo "insert error: ".Debug::vars($record);
						}
					}
				}
			}
		}
	}
	
	private static function eseguiQueryJSON($sparql) {

		$params = array ('query' => $sparql,
				'format' => 'application/sparql-results+json',
				'timeout' => '0',
				'debug'=>'on',
				'default-graph-uri' => '');
		
		$query = http_build_query ($params);
		
		$contextData = array (
				'method' => 'POST',
				'header' => "Connection: close\r\n".
				"Content-Length: ".strlen($query)."\r\n".
				"Content-Type: application/x-www-form-urlencoded",
				'content'=> $query );
		$context = stream_context_create (array ( 'http' => $contextData ));

		// Read page rendered as result of your POST request
		$strjson =  file_get_contents (
				'http://dati.camera.it/sparql',  // page url
				false,
				$context);
		
		return json_decode($strjson);
	}
	
	private static function calcolaValoreComplessivo($deputati) {
// 		@TODO implementare 
		/*
		 * per ogni deputato:
		 * calcolaPunteggioComplessivo();
		 * 
		 * max valore = punti minimi di un nuovo utente;
		 * 
		 * max valore / max punteggio complessivo deputato = unità moltiplicativa
		 * 
		 * per ogni deputato
		 * punteggio deputato complessivo * unità moltiplicativa = valore deputato;
		 */
	}
	
	private static function calcolaPunteggioComplessivo($deputato) {
// 		@TODO implementare 
		/*
		 * per ogni attivita:
		 * conteggio*peso=punteggio
		 */
	}
}