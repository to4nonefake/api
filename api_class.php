<?php
class Api {

	private $url = 'https://vrdemo.virtreg.ru/vr-api';
	private $auth = array('login' => 'demo', 'password' => 'demo');
	private $log;

	function GetInfo($id){
		$method = 'domainInfo';
		$params = [
			'auth'=>$this->auth,
			'id'=>$id
		];
		$response = $this->Execute($method, $params);
	}
	
	function DomainCreateById($id, $name, $vendorId, $period, $comment){
		$method = 'domainCreate';
		$params = [
			'auth'=>$this->auth,
			'clientId'=> $id,
			'vendorId'=> $vendorId,
			'period' => $period,
			'domain'=>[
            	'name'=>$name,
            	'comment'=> $comment
            ]
		];

		$response = $this->Execute($method, $params);

		if ($response->result->handle != null){
			return 'Домен успешно создан!';
		}
		$this->log->LogPrint('Ошибка создания домена.',$response->error->message);
		return 'Ошибка создания домена!</br>'.$response->error->message;
	}

	function ClientCreate($nameLocal, $birthday, $type, $series, $number, $issuer, $issued, $emails, $phones, $index, $country, $city, $street, $name, $period, $comment){
		$method = 'clientCreate';
		$params = [
			'auth' => $this->auth,
			'client' => [
				'legal' => 'person',
				'nameLocal' => $nameLocal,
				'birthday' => $birthday,
				'identity' => [
					'type' => $type,
					'series' => $series,
					'number' => $number,
					'issuer' => $issuer,
					'issued' => $issued,
				],
				'emails' => $emails,
				'phones' => $phones,
				'addressLocal' => [
					'index' => $index,
					'country' => $country,
					'city' => $city,
					'street' => $street
				]
			]
		];
		
		$response = $this->Execute($method, $params);

		if ($response->result->handle != null){
			$CreateDomainResult = $this->DomainCreateById($response->result->id, $name, null, $period, $comment);
			if($CreateDomainResult == 'Домен успешно создан!'){
				return 'Пользователь и домен успешно созданы!';
			} else { 
				return 'Пользователь успешно создан, но произошла</br>'.$CreateDomainResult;
			}
			
		}
		$this->log->LogPrint('Ошибка создания пользователя.',$response->error->message);
		return 'Ошибка создания пользователя!</br>'.$response->error->message;
	}

	function DNSChange($id, $clientId, $nservers, $nservers2){
		$method = 'domainUpdate';
		$params = [
			'auth' => $this->auth,
			'id'=>$id,
			'clientId'=> $clientId,
			'domain'=>[
				'delegated'=>true,
            	'nservers'=>[$nservers, $nservers2]
            ]
        ];

		$response = $this->Execute($method, $params);

		if ($response->result->handle != null){
			return 'Домен успешно делегирован!';
		}
		$this->log->LogPrint('Ошибка назначения домена.',$response->error->message);
		return 'Ошибка назначения домена!</br>'.$response->error->message;
	}

	function Execute($method, $params){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$params = json_encode($params, JSON_UNESCAPED_UNICODE);
		$params = str_replace(' ' , '\u0020', $params);
		$params = str_replace('+' , '%2B', $params);
		curl_setopt($ch, CURLOPT_URL, $this->url.'?method='.$method.'&params='.$params);
		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, false);
		return $response;
	}

	function __construct() {
		require_once 'log_class.php';
		$this->log = new LogClass;
	}
}