<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hasil extends CI_Controller {

    public function index(){
        
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $this->load->view("hasil", $data);
    }

    public function P1(){
        $labels_p1 = ['(a). Sangat Sesuai', '(b). Sesuai', '(c). Kurang Sesuai', '(d). Tidak Sesuai'];
        $data["labels"] = $labels_p1;
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p1_j1();
        $data["p1_j2"] =  $this->hasil_model->p1_j2();
        $data["p1_j3"] =  $this->hasil_model->p1_j3();
        $data["p1_j4"] =  $this->hasil_model->p1_j4();
            
        $label_info_p1 = [
            'Sangat Baik' => 'Sangat Sesuai',
            'Baik' => 'Sesuai',
            'Cukup' => 'Kurang Sesuai',
            'Buruk' => 'Tidak Sesuai'
        ];
        $data["label_info"] = $label_info_p1;

        $this->load->view("hasil", $data);
    }

    public function P2(){
        $labels_p2 = ['(a). Sangat Mudah', '(b). Mudah', '(c). Kurang Mudah', '(d). Tidak Mudah'];
        $data["labels"] = $labels_p2;
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p2_j1();
        $data["p1_j2"] =  $this->hasil_model->p2_j2();
        $data["p1_j3"] =  $this->hasil_model->p2_j3();
        $data["p1_j4"] =  $this->hasil_model->p2_j4();

        $label_info_p2 = [
            'Sangat Baik' => 'Sangat Mudah',
            'Baik' => 'Mudah',
            'Cukup' => 'Kurang Mudah',
            'Buruk' => 'Tidak Mudah'
        ];
        $data["label_info"] = $label_info_p2;

        $this->load->view("hasil", $data);
    }

    public function P3(){
        $labels_p3 = ['(a). Sangat Cepat', '(b). Cepat', '(c). Kurang Cepat', '(d). Tidak Cepat'];
        $data["labels"] = $labels_p3;
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p3_j1();
        $data["p1_j2"] =  $this->hasil_model->p3_j2();
        $data["p1_j3"] =  $this->hasil_model->p3_j3();
        $data["p1_j4"] =  $this->hasil_model->p3_j4();

        $label_info_p3 = [
            'Sangat Baik' => 'Sangat Cepat',
            'Baik' => 'Cepat',
            'Cukup' => 'Kurang Cepat',
            'Buruk' => 'Tidak Cepat'
        ];
        $data["label_info"] = $label_info_p3;
        $this->load->view("hasil", $data);
    }

    public function P4(){
        $labels_p4 = ['(a). Gratis', '(b). Murah', '(c). Cukup Mahal', '(d). Sangat Mahal'];
        $data["labels"] = $labels_p4;
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p4_j1();
        $data["p1_j2"] =  $this->hasil_model->p4_j2();
        $data["p1_j3"] =  $this->hasil_model->p4_j3();
        $data["p1_j4"] =  $this->hasil_model->p4_j4();

        $label_info_p4 = [
            'Sangat Baik' => 'Gratis',
            'Baik' => 'Murah',
            'Cukup' => 'Cukup Mahal',
            'Buruk' => 'Sangat Mahal'
        ];
        $data["label_info"] = $label_info_p4;
        $this->load->view("hasil", $data);
    }

    public function P5(){
        $labels_p5 = ['(a). Sangat Sesuai', '(b). Sesuai', '(c). Kurang Sesuai', '(d). Tidak Sesuai'];
        $data["labels"] = $labels_p5;
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p5_j1();
        $data["p1_j2"] =  $this->hasil_model->p5_j2();
        $data["p1_j3"] =  $this->hasil_model->p5_j3();
        $data["p1_j4"] =  $this->hasil_model->p5_j4();
        // $data["data"] =  "data data";

        $label_info_p5 = [
            'Sangat Baik' => 'Sangat Sesuai',
            'Baik' => 'Sesuai',
            'Cukup' => 'Kurang Sesuai',
            'Buruk' => 'Tidak Sesuai'
        ];
        $data["label_info"] = $label_info_p5;
        $this->load->view("hasil", $data);
    }

    public function P6(){
        $labels_p6 = ['(a). Sangat Kompeten', '(b). Kompeten', '(c). Kurang Kompeten', '(d). Tidak Kompeten'];
        $data["labels"] = $labels_p6;
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p6_j1();
        $data["p1_j2"] =  $this->hasil_model->p6_j2();
        $data["p1_j3"] =  $this->hasil_model->p6_j3();
        $data["p1_j4"] =  $this->hasil_model->p6_j4();
        // $data["data"] =  "data data";

        $label_info_p6 = [
            'Sangat Baik' => 'Sangat Kompeten',
            'Baik' => 'Kompeten',
            'Cukup' => 'Kurang Kompeten',
            'Buruk' => 'Tidak Kompeten'
        ];
        $data["label_info"] = $label_info_p6;
        $this->load->view("hasil", $data);
    }

    public function P7(){
        $labels_p7 = ['(a). Sangat Kompeten', '(b). Kompeten', '(c). Kurang Kompeten', '(d). Tidak Kompeten'];
        $data["labels"] = $labels_p7;
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p7_j1();
        $data["p1_j2"] =  $this->hasil_model->p7_j2();
        $data["p1_j3"] =  $this->hasil_model->p7_j3();
        $data["p1_j4"] =  $this->hasil_model->p7_j4();
        // $data["data"] =  "data data";

        $label_info_p7 = [
            'Sangat Baik' => 'Sangat Kompeten',
            'Baik' => 'Kompeten',
            'Cukup' => 'Kurang Kompeten',
            'Buruk' => 'Tidak Kompeten'
        ];
        $data["label_info"] = $label_info_p7;
        $this->load->view("hasil", $data);
    }

    public function P8(){
        $labels_p8 = ['(a). Sangat Kompeten', '(b). Kompeten', '(c). Kurang Kompeten', '(d). Tidak Kompeten'];
        $data["labels"] = $labels_p8;
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p8_j1();
        $data["p1_j2"] =  $this->hasil_model->p8_j2();
        $data["p1_j3"] =  $this->hasil_model->p8_j3();
        $data["p1_j4"] =  $this->hasil_model->p8_j4();
        // $data["data"] =  "data data";

        $label_info_p8 = [
            'Sangat Baik' => 'Sangat Kompeten',
            'Baik' => 'Kompeten',
            'Cukup' => 'Kurang Kompeten',
            'Buruk' => 'Tidak Kompeten'
        ];
        $data["label_info"] = $label_info_p8;
        $this->load->view("hasil", $data);
    }

    public function P9(){
        $labels_p9 = ['(a). Sangat Kompeten', '(b). Kompeten', '(c). Kurang Kompeten', '(d). Tidak Kompeten'];
        $data["labels"] = $labels_p9;
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p9_j1();
        $data["p1_j2"] =  $this->hasil_model->p9_j2();
        $data["p1_j3"] =  $this->hasil_model->p9_j3();
        $data["p1_j4"] =  $this->hasil_model->p9_j4();
        // $data["data"] =  "data data";

        $label_info_p9 = [
            'Sangat Baik' => 'Sangat Kompeten',
            'Baik' => 'Kompeten',
            'Cukup' => 'Kurang Kompeten',
            'Buruk' => 'Tidak Kompeten'
        ];
        $data["label_info"] = $label_info_p9;
        $this->load->view("hasil", $data);
    }

    public function getData() {

        $this->load->model('hasil_model');
        $data["p1_j1"] =  $this->hasil_model->p9_j1();
        $data["p1_j2"] =  $this->hasil_model->p9_j2();
        $data["p1_j3"] =  $this->hasil_model->p9_j3();
        $data["p1_j4"] =  $this->hasil_model->p9_j4();
        $cek = json_encode($data);
        print_r($cek);
        exit();
    }



}