<?php

require_once "model.php";

class Leads_Model extends Model {

	const LEAD_ADDRESS_ID = 2;

	/** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function getLeadsByIdUser($idUser, $limit, $offset) {
		$response = []; // Inicializar como array
	$limit=3000;
		$leadsResult = $this->selectPageBy('*', 'leads', 'idUser', $idUser, 'i', "LIMIT $offset, $limit");
		if (!is_null($leadsResult)) {
			foreach ($leadsResult as $row) {
				$lead = [
					'idLead' => $row['idLead'],
					'name' => $row['name'],
					'last_name' => $row['last_name'],
					'idEmail' => $row['idEmail']
				];
				
				$selectEmailResponse = $this->selectBy('*', 'emails', 'idEmail', $row['idEmail'], 'i');
				if (!is_null($selectEmailResponse)) {
					$lead['email'] = $selectEmailResponse[0]['email'];
					$lead['idEmailDomain'] = $selectEmailResponse[0]['idEmailDomain'];
					$selectEmailDomainResponse = $this->selectBy('domain', 'email_domains', 'idEmailDomain', $selectEmailResponse[0]['idEmailDomain'], 'i');
					if (!is_null($selectEmailDomainResponse)) {
						$lead['domain'] = $selectEmailDomainResponse[0]['domain'];
					}
				}
	
				if (!is_null($row['idPhone'])) {
					$lead['idPhone'] = $row['idPhone'];
					$selectPhoneResult = $this->selectBy('phone, idCountryCode', 'phones', 'idPhone', $row['idPhone'], 'i');
					if (!is_null($selectPhoneResult)) {
						$lead['phone'] = $selectPhoneResult[0]['phone'];
						$lead['idCountryCode'] = $selectPhoneResult[0]['idCountryCode'];
	
						$selectCountryCodeResult = $this->selectBy('country, code', 'country_codes', 'idCountryCode', $selectPhoneResult[0]['idCountryCode'], 'i');
						if (!is_null($selectCountryCodeResult)) {
							$lead['code_country_code'] = $selectCountryCodeResult[0]['code'];
							$lead['country_country_code'] = $selectCountryCodeResult[0]['country'];
						}
					}
				}
	
				if (isset($row['idAddress'])) {
					$lead['idAddress'] = $row['idAddress'];
					$selectAddressResult = $this->selectBy('address', 'addresses', 'idAddress', $row['idAddress'], 'i');
					if (!is_null($selectAddressResult)) {
						$lead['address'] = $selectAddressResult[0]['address'];
					}
				} else {
					$lead['idAddress'] = 0;
					$lead['address'] = '';
				}
	
				$selectLeadsInmovables = $this->selectBy('idProperty', 'leads_inmovables', 'idLead', $row['idLead'], 'i');
				if (!is_null($selectLeadsInmovables)) {
					$lead['num_inmovables'] = count($selectLeadsInmovables);
					$inmovablesData = [];
					foreach ($selectLeadsInmovables as $propertyRow) {
						$selectProperty = $this->selectBy('*', 'inmovables', 'idProperty', $propertyRow['idProperty'], 'i');
						$selectCondominium = $this->selectBy('condominium', 'condos', 'idCondominium', $selectProperty[0]['idCondominium'], 'i');
						$selectProperty[0]['condominium'] = $selectCondominium[0]['condominium'];
						$selecPropertyType = $this->selectBy('type, description, cost_m2', 'property_types', 'idPropertyType', $selectProperty[0]['idPropertyType'], 'i');
						$selectProperty[0]['property_type'] = $selecPropertyType[0];
						$inmovablesData[] = $selectProperty[0];
					}
					$lead['inmovables'] = $inmovablesData;
				} else {
					$lead['num_inmovables'] = 0;
				}
	
				$lead['idMedium'] = $row['idMedium'];
				$lead['idGender'] = $row['idGender'];
				$lead['status'] = $row['status'];
	
				$response[] = $lead;
			}
		}
		return json_encode($response);
	}
	
	public function getTotalLeadCount($idUser) {
		$result = $this->selectBy('COUNT(*) as count', 'leads', 'idUser', $idUser, 'i');
		return $result[0]['count'];
	}
	/** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function getLeads() {
		$response = NULL;
		$leadsResult = $this->selectBy('*', 'leads', 'status', 1, 'i');
		if (!is_null($leadsResult)) {
			foreach ($leadsResult as $leadRow) {
				if ($response != "") {$response .= ",";}
				$response .= '{"idLead": '.$leadRow['idLead'].',';
				$response .= '"idUser": '.$leadRow['idUser'].',';
				$response .= '"name": "'.$leadRow['name'].'",';
				$response .= '"last_name": "'.$leadRow['last_name'].'",';
				
				$response .= '"idEmail": '.$leadRow['idEmail'].',';
				$selectEmailResponse = $this->selectBy('*', 'emails', 'idEmail', $leadRow['idEmail'], 'i');
				if (!is_null($selectEmailResponse)) {
					$response .= '"email": "'.$selectEmailResponse[0]['email'].'",';
					$response .= '"idEmailDomain": '.$selectEmailResponse[0]['idEmailDomain'].',';
					$selectEmailDomainResponse = $this->selectBy('domain', 'email_domains', 'idEmailDomain', $selectEmailResponse[0]['idEmailDomain'], 'i');
					if (!is_null($selectEmailDomainResponse)) {
							$response .= '"domain": "'.$selectEmailDomainResponse[0]['domain'].'",';
					}
				}

				if (!is_null($leadRow['idPhone'])) {
					$response .= '"idPhone": '.$leadRow['idPhone'].',';
					$selectPhoneResult = $this->selectBy('phone, idCountryCode', 'phones', 'idPhone', $leadRow['idPhone'], 'i');
					if (!is_null($selectPhoneResult)) {
						$response .= '"phone": "'.$selectPhoneResult[0]['phone'].'",';
						$response .= '"idCountryCode": '.$selectPhoneResult[0]['idCountryCode'].',';
						
						$selectCountryCodeResult = $this->selectBy('country, code', 'country_codes', 'idCountryCode', $selectPhoneResult[0]['idCountryCode'], 'i');
						if (!is_null($selectCountryCodeResult)) {
							$response .= '"code_country_code": "'.$selectCountryCodeResult[0]['code'].'",';
							$response .= '"country_country_code": "'.$selectCountryCodeResult[0]['country'].'",';
						}
					}
				}

				if (isset($leadRow['idAddress'])) {
					$response .= '"idAddress": '.$leadRow['idAddress'].',';
					$selectAddressResult = $this->selectBy('address', 'addresses', 'idAddress', $leadRow['idAddress'], 'i');
					if (!is_null($selectAddressResult)) {
						$response .= '"address": "'.$selectAddressResult[0]['address'].'",';
					}
				} else {
					$response .= '"idAddress": 0,';
					$response .= '"address": "",';
				}

				$selectLeadsInmovables = $this->selectBy('idProperty', 'leads_inmovables', 'idLead', $leadRow['idLead'], 'i');
				if (!is_null($selectLeadsInmovables)) {
					$response .= '"inmovables": '.json_encode($selectLeadsInmovables).',';
					$response .= '"num_inmovables": '.count($selectLeadsInmovables).',';
				} else {
					$response .= '"num_inmovables": 0,';
				}

				$response .= '"idMedium": '.$leadRow['idMedium'].',';
				$response .= '"idGender": '.$leadRow['idGender'].',';
				$response .= '"status": '.$leadRow['status'].'}';
			}
		}
		return $response;
  }

    /** Method for get leads by idUser
     * @param $idUser
     * @return $response
     */
	public function insertLead($name, $lastName, $idEmail, $idUser, $idGender, $idMedium) {
		$insertLeadResponse = $this->insertABCDEF('leads', 'name', $name, 'last_name', $lastName, 'idEmail', $idEmail, 'idUser', $idUser, 'idGender', $idGender, 'idMedium', $idMedium, 'ssiiii');
		if (!is_null($insertLeadResponse)) {
			$this->errorReport['insertLeadResponse'] = $insertLeadResponse;
			return $insertLeadResponse;
		}
		$this->errorReport['insertLeadResponse'] = 0;
		return 0;
	}


	public function insertLeadFile($fileData) {
	$insertFileResponse = $this->insertABCD(
			'leads_archivos', 
			'URL', $fileData['URL'], 
			'Estatus', $fileData['Estatus'], 
			'Fecha', $fileData['Fecha'], 
			'idLead', $fileData['idLead'],
			'sssi'
		);
		if (!is_null($insertFileResponse)) {
			$this->errorReport['insertFileResponse'] = $insertFileResponse;
			return $insertFileResponse;
		}
		$this->errorReport['insertFileResponse'] = 0;
		return 0;
	}
	
	public function getLeadFiles($idLead) {
		$response = []; 
	
		// Obtener los archivos relacionados con el lead con estatus activo
		$additionalCondition = ' AND Estatus = \'activo\'';
		$filesResult = $this->selectBy('*', 'leads_archivos', 'idLead', $idLead, 'i', $additionalCondition);
		if (!is_null($filesResult)) {
			foreach ($filesResult as $fileRow) {
				$response[] = [
					'idArchivo' => $fileRow['idArchivo'],
					'URL' => $fileRow['URL'],
					'Estatus' => $fileRow['Estatus'],
					'Fecha' => $fileRow['Fecha']
				];
			}
		}
		return json_encode($response);
	}
	
	
	/*public function searchUser($input, $idUser) {
		error_log("User input: " . $input);
		$select = "e.email, p.phone_number, l.*";
		$join = "leads AS l 
				 INNER JOIN emails AS e ON l.idEmail = e.idEmail
				 LEFT JOIN phones AS p ON l.idPhone = p.idPhone";
		$where = "l.idUser = ? AND (l.name LIKE ? OR l.last_name LIKE ? OR e.email LIKE ? OR p.phone_number LIKE ?)";
		$values = "isss"
		return $this->find($select, $join, $where, $values);
	}*/
	
}


?>
