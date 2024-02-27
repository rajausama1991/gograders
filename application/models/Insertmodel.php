<?php
class Insertmodel extends CI_Model{

  public function insertRevision($arr){
      // echo '<pre>';print_r($arr);exit;
      $q = $this->db->insert('revisions', $arr);
      
    //   echo $this->db->insert_id() . '<br>' . $this->db->affected_rows();exit;
      if($q){
        return true;
      }else{
        return false;
      }

  }
    public function insertContactUsForm($arr){
        // echo '<pre>';print_r($arr);exit;
        $q = $this->db->insert('contact_us', $arr);
        if($q){
          return true;
        }else{
          return false;
        }

    }
    public function insertOrder($arr){
        // echo '<pre>';print_r($arr);exit;
        $q = $this->db->insert('orders', $arr);
        if($q){
          return true;
        }else{
          return false;
        }

    }
    public function insertCheckout($arr){
        // echo '<pre>';print_r($arr);exit;
        $arr['email'] = $arr['stripeEmail'];
        unset($arr['name'], $arr['card_number'], $arr['cvc'], $arr['expiry_month'], $arr['expiry_year'], $arr['stripeToken'],
      $arr['stripeTokenType'], $arr['stripeEmail']);
        $q = $this->db->insert('orders', $arr);
        return true;
    }


}
