<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{

      protected $db;

      public function __construct()
      {
        $this->db = \Config\Database::connect('default', false);

      }

      public function getRow($table,$where)
      {
        $builder = $this->db->table($table);
        $query = $builder->getWhere($where);

        return $query->getRow();
      }

      public function getResult($table,$where=false)
      {
        $builder = $this->db->table($table);

        if($where){
          $query = $builder->getWhere($where);
        }else{
          $query = $builder->get();
        }

        return $query->getResult();
      }

      public function getCount($table,$field,$where)
      {
        $builder = $this->db->table($table);
        $builder->selectSum($field);
        $query = $builder->getWhere($where);

        return $query->getRow();
      }

      public function query($query)
      {
        $query = $this->db->query($query);
        return $query;
      }

      public function getDpt()
      {
        $query = $this->db->query("SELECT SUM(tps_dpt) AS jumlah FROM tps")->getRow();
        return $query;
      }

      public function getMasukDpt()
      {
        $query = $this->db->query("SELECT SUM(tps_dpt) AS jumlah FROM qc_tps
                                  RIGHT JOIN qc_suara
                                  ON qc_suara.tps_id = qc_tps.tps_id
        ")->getRow();
        return $query;
      }

      public function getSuara()
      {
        $query = $this->db->query("SELECT SUM(kandidat_1) AS kandidat1, SUM(kandidat_2) AS kandidat2 FROM suara")->getRow();
        return $query;
      }

      public function getSuaraLimit($limit)
      {
        $query = $this->db->query("SELECT SUM(kandidat_1) AS kandidat1, SUM(kandidat_2) AS kandidat2 FROM suara ORDER BY created_at ASC LIMIT 0,$limit")->getRow();
        return $query;
      }

      public function getProgres()
      {
        $tps = $this->db->query("SELECT COUNT(*) AS tps FROM tps")->getRow();
        $suara = $this->db->query("SELECT COUNT(*) AS suara FROM suara")->getRow();

        $percent = shortdec(($suara->suara/$tps->tps)*100);
        return $percent;
      }

      public function getSuaraZona()
      {
        $query = $this->db->query("SELECT
                                    zona.zona_name,
                                    tps.zona_id, 
                                    SUM(tps.tps_dpt) AS dpt,
                                    COUNT(tps.tps_id) AS sampel,
                                    (SELECT SUM(kandidat_1) FROM suara WHERE zona_id=tps.zona_id) kandidat1,
                                    (SELECT SUM(kandidat_2) FROM suara WHERE zona_id=tps.zona_id) kandidat2
                                    FROM
                                        tps
                                        INNER JOIN
                                        zona
                                        ON 
                                            tps.zona_id = zona.zona_id
                                    GROUP BY
                                        tps.zona_id")->getResult();
        return $query;
      }

      public function getSuaraKecamatan($id)
      {
        $query = $this->db->query("SELECT
                                    kecamatan.kecamatan_name,
                                    tps.kecamatan_id, 
                                    SUM(tps.tps_dpt) AS dpt,
                                    (SELECT SUM(kandidat_1) FROM suara WHERE kecamatan_id=tps.kecamatan_id) kandidat1,
                                    (SELECT SUM(kandidat_2) FROM suara WHERE kecamatan_id=tps.kecamatan_id) kandidat2
                                    FROM
                                        tps
                                        INNER JOIN
                                        kecamatan
                                        ON 
                                            tps.kecamatan_id = kecamatan.kecamatan_id
                                    WHERE tps.zona_id = '$id'
                                    GROUP BY
                                        tps.kecamatan_id")->getResult();
        return $query;
      }

      public function getSuaraKelurahan($id)
      {
        $query = $this->db->query("SELECT
                                    kelurahan.kelurahan_name,
                                    tps.kelurahan_id, 
                                    SUM(tps.tps_dpt) AS dpt,
                                    (SELECT SUM(kandidat_1) FROM suara WHERE kelurahan_id=tps.kelurahan_id) kandidat1,
                                    (SELECT SUM(kandidat_2) FROM suara WHERE kelurahan_id=tps.kelurahan_id) kandidat2
                                    FROM
                                        tps
                                        INNER JOIN
                                        kelurahan
                                        ON 
                                            tps.kelurahan_id = kelurahan.kelurahan_id
                                    WHERE tps.kecamatan_id = '$id'
                                    GROUP BY
                                        tps.kelurahan_id")->getResult();
        return $query;
      }

      public function getSuaraTps($id)
      {
        $query = $this->db->query("SELECT
                                    tps.tps_id,
                                    tps.tps_name,
                                    tps.tps_dpt,
                                    (SELECT SUM(kandidat_1) FROM suara WHERE tps_id=tps.tps_id) kandidat1,
                                    (SELECT SUM(kandidat_2) FROM suara WHERE tps_id=tps.tps_id) kandidat2
                                  FROM
                                    tps
                                  WHERE tps.kelurahan_id='$id'")->getResult();
        return $query;
      }

      public function getData()
      {
        $query = $this->db->query("SELECT
                                    tps.*, 
                                    suara.kandidat_1, 
                                    suara.kandidat_2, 
                                    suara.lampiran, 
                                    suara.created_at
                                  FROM
                                    tps
                                    LEFT JOIN
                                    suara
                                    ON 
                                      tps.tps_id = suara.tps_id")->getResult();
        return $query;
      }
}
