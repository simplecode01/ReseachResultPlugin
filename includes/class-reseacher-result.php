<?php
class ResearcherResult{
    protected $version;

    public function __construct(){
        if(defined('ResearcherResult_Version')){
            $this->version = ResearcherResult_Version;
        }
        else{
            $this->version = '1.0.0';
        }
    }

    public function run(){
        if(is_admin()){
            //Code for admin run only so the public cant see this : )
        }
        $this->setup1();
    }
    //This is for Researcher result data
    public function setup1(){
        require_once plugin_dir_path(dirname(__file__)).'admin/cpts1.php';
        add_action('init', 'create_research_result', 0);
        add_filter('single_template', 'researchers_result_single');
    }
    public function get_version(){
        return $this->version;
    }
}