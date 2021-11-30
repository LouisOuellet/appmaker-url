<?php
class urlAPI extends API {
  public function load($request = null, $data = null){
    if(isset($data)){
			if(!is_array($data)){ $data = json_decode($data, true); }
      return [
        "success" => $this->Language->Field["Record successfull"],
        "request" => $request,
        "data" => $data,
        "output" => [
          "plugin" => $this->Settings['plugins']['url']['settings']['plugin'],
          "view" => $this->Settings['plugins']['url']['settings']['view'],
          "id" => $this->Settings['plugins']['url']['settings']['id'],
        ],
      ];
    }
  }
}
