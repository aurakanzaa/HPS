<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

    protected $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = "mobil";
        $this->load->model('m_query');
    }
    

    public function index()
    {
        // Set Data
        $this->load->view('partials/header');
        $data["tb_kendaraan"] = "mobil";
        $this->load->view('konten',$data);
        $this->load->view('partials/footer');
    }

    public function get_merek(){
        $tabel = post('tabel');
        $where = post('where');
        $respone = $this->m_query->fetch_table('distinct(merk) as merek',$tabel,$where);
        if(count($respone)>0){
            json_true($respone);
        }else{
            json_false(array('head' => 'Denied', 'body' => 'Akses ditolak!'),"","");
        }
    }

    public function get_tipe(){
        $tabel = post('tabel');
        $merek = post('merek');
        $where = array("merk"=>$merek);
        $respone = $this->m_query->fetch_table('distinct(type) as tipe',$tabel,$where);
        if(count($respone)>0){
            json_true($respone);
        }else{
            json_false(array('head' => 'Denied', 'body' => 'Akses ditolak!'),"","");
        }
    }

    public function get_tahun(){
        $tabel = post('tabel');
        $merek = post('merek');
        $tipe  = post('tipe'); 
        $where = array("merk"=>$merek,"type"=>$tipe);
        $respone = $this->m_query->fetch_table('distinct(tahun) as tahun',$tabel,$where,"desc","tahun");
        if(count($respone)>0){
            json_true($respone);
        }else{
            json_false(array('head' => 'Denied', 'body' => 'Akses ditolak!'),"","");
        }
    }

    public function get_kendaraan($tabel){
        $merek = post('merek');
        $tipe = post('tipe');
        $tahun = post('tahun');
        $where = array("merk"=>$merek,"type"=>$tipe,"tahun"=>$tahun);
        $response = $this->m_query->fetch_table('*',$tabel,$where);
         json_true($response);
    }





}

/* End of file Mobil.php */
