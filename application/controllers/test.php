<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: application/json');

class test extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('test_model');
      // $this->load->library('redis');
       $this->load->driver('cache', array('adapter' => 'redis', 'backup' => 'file'));
      // $redis = $this->redis->config();
	}
	// function delete(){
    //     $redis = $this->redis->config();
    //     $del = $redis->del('Data1');
    //     if($del){
    //         echo "deleted successfully";
    //     }
    //     else{
    //         echo "error";
    //     }
    // }
	// function index(){
    //     $redis = $this->redis->config();
    //     $get = $redis->get('Data1');
    //     if(isset($get) && !empty($get)){
    //         echo "success";
    //         echo $get;
    //     }
    //     else{
    //         echo "fail";
    //         $data = $this->test_model->getData();
    //         $myArray = json_encode($data); 
    //         $set = $redis->set('Data1',$myArray);
    //         $get = $redis->get('Data1');
    //     }
        
    // }
    
    public function cache(){
        
       //$this->cache->delete('foo2');
        if ( ! $data1 = $this->cache->get('Data1'))
        {
            echo 'Saving to the cache!<br />';
            $data = $this->test_model->getData();
            $myArray = json_encode($data); 
            //$foo = 'foobarbaz!';

            // Save into the cache for 5 minutes
            $this->cache->save('Data1', $myArray, 300);
        }

        echo  $this->cache->get('Data1');
 
    }
    public function delete_cache(){
        $this->cache->delete('Data1');
    }

}
