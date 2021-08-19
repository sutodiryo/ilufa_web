<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_job()
    {
        $q = $this->db->query("SELECT   id_job,posisi,deskripsi,lokasi,date_start,date_end,created,status,
                                            (SELECT branch_name FROM ilufa_master_branch WHERE id_branch=ilufa_job.lokasi) AS cabang,
                                            (SELECT name FROM ilufa_location_district WHERE id_location_district=(SELECT city FROM ilufa_master_branch WHERE id_branch=ilufa_job.lokasi)) AS kota,
                                            (SELECT name FROM ilufa_job_type WHERE id_job_type =ilufa_job.id_job_type ) AS tipe
                                    FROM ilufa_job
                                    WHERE status > 0")->result();

        return $q;
    }

    function get_job_by_id($id)
    {
        $q = $this->db->query("SELECT   id_job,posisi,deskripsi,lokasi,date_start,date_end,created,status,
                                        (SELECT branch_name FROM ilufa_master_branch WHERE id_branch=ilufa_job.lokasi) AS cabang,
                                        (SELECT name FROM ilufa_location_district WHERE id_location_district=(SELECT city FROM ilufa_master_branch WHERE id_branch=ilufa_job.lokasi)) AS kota,
                                        (SELECT name FROM ilufa_job_type WHERE id_job_type =ilufa_job.id_job_type ) AS tipe
                                FROM ilufa_job
                                WHERE id_job='$id'")->row();
        return $q;
    }

    function get_province()
    {
        $q = $this->db->query("SELECT * FROM ilufa_location_province ORDER BY id_location_province ASC")->result();
        return $q;
    }

    function get_district()
    {
        $q = $this->db->query("SELECT id_location_district,name,tipe FROM ilufa_location_district ORDER BY id_location_district ASC LIMIT 30")->result();
        return $q;
    }
}
