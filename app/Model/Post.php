<?php

App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {
	

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }

    public function getData($search){

    	$query= $this->query("SELECT * FROM posts As Post Where (`article code` Like '%". $search ."%')
		OR (`Brand Name` Like '%". $search ."%')
    		OR (`Generic Name` Like '%". $search ."%')
		OR (`Composition` Like '%".$search."%')
    		OR (`Category` Like '%". $search ."%')
    		OR (`Indication` Like '%". $search ."%')
    		OR (`dosage` Like '%". $search ."%')
    		OR (`side effect` Like '%". $search ."%')
    		OR (`Other brand Name` Like '%". $search ."%')
    		LIMIT 20");


    	/*
    	$this->query("SELECT id,`brand name`,`generic name`,category,indication,substr(dosage,1,30) As dosage, substr(`side effect`,1,30) As `side effect`, `other brand name`,created, modified FROM Posts As Post Where (`Brand Name` Like '%". $search ."%')
    		OR (`Generic Name` Like '%". $search ."%')
    		OR (`Category` Like '%". $search ."%')
    		OR (`Indication` Like '%". $search ."%')
    		OR (`dosage` Like '%". $search ."%')
    		OR (`side effect` Like '%". $search ."%')
    		OR (`Other brand Name` Like '%". $search ."%')
    		LIMIT 20");
    	*/
    	return $query;
    }
    
}
?>
