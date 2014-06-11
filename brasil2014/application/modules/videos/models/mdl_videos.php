<?php
class Mdl_videos extends MY_Model
{

    public $table_name = "videos";
    public $primary_key = "id";
    public $joins;
    public $select_fields;
    public $total_rows;
    public $page_links;
    public $current_page;
    public $num_pages;
    public $optional_params;
    public $order_by;
    public $form_values = array();

    public $estados_afp = array();
    public $estados_desc = array();
    public $local = array();
    public $posiciones = array();

    public function __construct()
    {
        parent::__construct();

    }

    public function getAllVideos()
    {
        $this->load->module('videos');

        $videos = $this->get(array( "where" => array("inicia >" => "NOW()"), "order_by" => "inicia ", "limit" => 1));


        $last = $this->db->last_query();
        return $videos;
    }

/*                             UNION
                            ( SELECT * FROM videos WHERE inicia <= NOW) ORDER BY inicia DESC )
                            ORDER BY inicia DESC "
            ));
    */

}