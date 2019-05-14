<?php

require_once('Okay.php');

class Novaposhta extends Okay {

    public function get_contact_person_by_cp($ref = '') {
        if (empty($ref)) {
            return false;
        }
        $request = array(
            "apiKey" => $this->settings->newpost_key,
            "modelName" => "Counterparty",
            "calledMethod" => "getCounterpartyContactPersons",
            "methodProperties" => array(
                "Ref" => $ref
            )
        );
        return $this->request_novaposhta($request);
    }

    public function get_counterparties($filter = array('cp_property'=>'Recipient')) {

        if (empty($filter)) {
            return false;
        }
        $request = array(
            "apiKey" => $this->settings->newpost_key,
            "modelName" => "Counterparty",
            "calledMethod" => "getCounterparties",
            "methodProperties" => array(
                'CounterpartyProperty' => $filter['cp_property']
            )
        );
        return $this->request_novaposhta($request);
    }

    public function add_counterparty($order = null) {
        if (empty($order) || !$order->city) {
            return false;
        }


        $request = array(
            "apiKey" => $this->settings->newpost_key,
            "modelName" => "Counterparty",
            "calledMethod" => "save",
            "methodProperties" => array(
                'CounterpartyProperty' => 'Recipient',
                'CityRef' => $order->city,
                'CounterpartyType' => 'PrivatePerson',
                'FirstName' => $order->name,
                'LastName' => $order->lastname,
                'Phone' => $order->phone
            )
        );
        return $this->request_novaposhta($request);
    }

    public function request_novaposhta($request = array()) {
        if (empty($request)) {
            return false;
        }
        $request = json_encode($request);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.novaposhta.ua/v2.0/json/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response);;
    }

}