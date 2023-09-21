<?php

class Hasil_model extends CI_ModeL {
    
    public function total()
    {
        return $this->db->count_all('t_kuisioner');
    }

    public function p1_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p1','Sangat Sesuai');
        return $this->db->count_all_results();
    }

    public function p1_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p1','Sesuai');
        return $this->db->count_all_results();
    }

    public function p1_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p1','Kurang Sesuai');
        return $this->db->count_all_results();
    }

    public function p1_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p1','Tidak Sesuai');
        return $this->db->count_all_results();
    }

    public function p2_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p2','Sangat Mudah');
        return $this->db->count_all_results();
    }

    public function p2_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p2','Mudah');
        return $this->db->count_all_results();
    }

    public function p2_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p2','Kurang Mudah');
        return $this->db->count_all_results();
    }

    public function p2_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p2','Tidak Mudah');
        return $this->db->count_all_results();
    }

    public function p3_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p3','Sangat Cepat');
        return $this->db->count_all_results();
    }

    public function p3_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p3','Cepat');
        return $this->db->count_all_results();
    }

    public function p3_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p3','Kurang Cepat');
        return $this->db->count_all_results();
    }

    public function p3_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p3','Tidak Cepat');
        return $this->db->count_all_results();
    }

    public function p4_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p4','Gratis');
        return $this->db->count_all_results();
    }

    public function p4_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p4','Murah');
        return $this->db->count_all_results();
    }

    public function p4_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p4','Cukup Mahal');
        return $this->db->count_all_results();
    }

    public function p4_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p4','Sangat Mahal');
        return $this->db->count_all_results();
    }

    public function p5_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p5','Sangat Sesuai');
        return $this->db->count_all_results();
    }

    public function p5_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p5','Sesuai');
        return $this->db->count_all_results();
    }

    public function p5_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p5','Kurang Sesuai');
        return $this->db->count_all_results();
    }

    public function p5_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p5','Tidak Sesuai');
        return $this->db->count_all_results();
    }

    public function p6_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p6','Sangat Kompeten');
        return $this->db->count_all_results();
    }

    public function p6_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p6','Kompeten');
        return $this->db->count_all_results();
    }

    public function p6_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p6','Kurang Kompeten');
        return $this->db->count_all_results();
    }

    public function p6_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p6','Tidak Kompeten');
        return $this->db->count_all_results();
    }

    public function p7_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p7','Sangat Kompeten');
        return $this->db->count_all_results();
    }

    public function p7_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p7','Kompeten');
        return $this->db->count_all_results();
    }

    public function p7_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p7','Kurang Kompeten');
        return $this->db->count_all_results();
    }

    public function p7_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p7','Tidak Kompeten');
        return $this->db->count_all_results();
    }
    public function p8_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p8','Sangat Kompeten');
        return $this->db->count_all_results();
    }

    public function p8_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p8','Kompeten');
        return $this->db->count_all_results();
    }

    public function p8_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p8','Kurang Kompeten');
        return $this->db->count_all_results();
    }

    public function p8_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p8','Tidak Kompeten');
        return $this->db->count_all_results();
    }

    public function p9_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p9','Sangat Kompeten');
        return $this->db->count_all_results();
    }

    public function p9_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p9','Kompeten');
        return $this->db->count_all_results();
    }

    public function p9_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p9','Kurang Kompeten');
        return $this->db->count_all_results();
    }

    public function p9_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p9','Tidak Kompeten');
        return $this->db->count_all_results();
    }

    public function getMahasiswa()
    {
        $query = $this->db->query("SELECT * FROM t_kuisioner ");
        return $query;
    }
    


}
?>

