<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts_model extends CI_Model
{

    // get all postings
    function getPosts($limit = NULL)
    {
        return $this->db->get('posts', $limit);
    }
}
