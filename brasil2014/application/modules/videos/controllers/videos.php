<?php
class Videos extends MY_Controller{
    public $model = 'mdl_videos';
    public function __construct(){
        parent::__construct();
    }

    function view(){
        $videos = $this->mdlvideos->getAllVideosByFecha();
        return $this->load->view ("videosOpen", FALSE, TRUE );
    }

    function viewVideosHeader(){
        $data['listavideos']  = $this->mdl_videos->getAllVideos();
        return $this->load->view ("videosheader", FALSE, TRUE );
    }
}