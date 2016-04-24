<?php
ini_set("display_errors",true);

class Funcs {
    
    public function dateToBR($dataAmericana){
     $d = explode('-',$dataAmericana);
     $dOK = $d[2].'/'.$d[1].'/'.$d[0];
     return $dOK;        
    }
    
    public function dateToUS($dataBrasil){
     $d = explode('/',$dataBrasil);
     $dOK = $d[2].'-'.$d[1].'-'.$d[0];
     return $dOK;        
    }    
    
    public function dateTimeToBR($data_americana_his){
        $d = explode(' ',$data_americana_his);
        $ok =$this->dateToBR($d[0]).' '.$d[1];
        return $ok;        
    }
    
    public function dateTimeToUS($data_br_his){
        $d = explode(' ',$data_br_his);
        $ok = $this->dateToUS($d[0]).' '.$d[1];
        return $ok;        
    }
    
    public function debug($variable)
    {
        echo "<pre>";
        print_r($variable);
        echo "</pre>";
    }
    
}
?>
