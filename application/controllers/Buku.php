<?php
Class Buku extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://falahwebservice.pythonanywhere.com/";
    }
    
    // menampilkan data buku
    function index(){
        $data['books'] = json_decode($this->curl->simple_get($this->API.'/books/'));
        $this->load->view('buku/list',$data);
    }

    public function detail($id) {
        $data['books'] = json_decode($this->curl->simple_get($this->API.'/books/'.$id));
        $this->load->view('buku/detail', $data);
    }
    
    // insert data buku
    function create(){
        if(isset($_POST['submit'])){
            /* API URL */
        $url = 'http://falahwebservice.pythonanywhere.com/books';
   
        /* Init cURL resource */
        $ch = curl_init($url);
            $data_array = array(
                'title'       =>  $this->input->post('title'),
                'author'      =>  $this->input->post('author'),
                'first_sentence'=>  $this->input->post('first_sentence'),
                'published'    =>  $this->input->post('published'));
          
        $payload = json_encode($data_array);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            
        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            
        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
        /* execute request */
        $result = curl_exec($ch);
             
        /* close cURL resource */
        curl_close($ch);
        
        redirect('buku');
        } else{
            $this->load->view('buku/create');
        }
    }
    
    // edit data books
    function edit(){
        if(isset($_POST['submit'])){

            $data_array = array(
                'title'       =>  $this->input->post('title'),
                'author'      =>  $this->input->post('author'),
                'first_sentence'=>  $this->input->post('first_sentence'),
                'published'    =>  $this->input->post('published')
            );
          
                       /* API URL */
                       $id = $this->input->post('slug');
                       $url = 'http://falahwebservice.pythonanywhere.com/books/'.$id.'/';
                /* Init cURL resource */
                $ch = curl_init($url);
        $payload = json_encode($data_array);

        
        /* set return type json */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

        /* set the content type json */
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

            
        /* execute request */
        $result = curl_exec($ch);
             
        /* close cURL resource */
        curl_close($ch);
        
        redirect('buku');
        }else{
            $id = $this->uri->segment(3);
            $data['books'] = json_decode($this->curl->simple_get($this->API.'/books/'.$id));
            $this->load->view('buku/edit', $data);
        }
    }
    
    // delete data mahasiswa
    function delete($id){
        if(empty($id)){
            redirect('buku');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/books/'.$id); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('buku');
        }
    }
}