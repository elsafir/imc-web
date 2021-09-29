<?php 

namespace App\Models;
 use CodeIgniter\Model;
 
class Mteam extends Model{

	protected $table = 'community';

	public function tampilCEO(){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Chief Executive Officer'");
  return $query;	 
  }

  public function tampilGeneralSecretary(){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'General Secretary' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilSecretary(){
      $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Secretary' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilCOO(){
      $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Chief Operating Officer' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilHeadFinance(){
      $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Head Finance' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilFinance(){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Finance' AND region.region= 'Pusat'");
  return $query;
  }
  
  public function tampilFunding(){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Funding' AND region.region= 'Pusat'");
		return $query;
  }
  
  public function tampilHeadRC (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Head Regional Coordinator' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilRC (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Regional Coordinator' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilCPO (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Chief Project Officer' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilCHRO (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Chief Human Resource Officer' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilCMO (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Chief Marketing Officer' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilHeadHRD (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Head Human Resources Development' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilHRD (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Human Resource Development' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilHeadHRR (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Head Human Resources Recruitment' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilHRR (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Human Resource Recruitment' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilHeadBs (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Head Business Development' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilBs (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Business Development' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilHeadMedia (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Head Media' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilCm (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Content Manager' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilPicV (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'PIC Video Editor' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilV (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Video Editor' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilPicD (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'PIC Graphic Designer' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilD (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Graphic Designer' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilPicWD (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'PIC Web Development' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilWD (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Web Development' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilHeadEdu (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Head Education Project' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilEdu (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Education Project' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilHeadEco (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Head Economy Project' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilEco (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Economy Project' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilHeadSos (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Head Social Project' AND region.region= 'Pusat'");
  return $query;
  }

  public function tampilSos (){
    $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE jabatan.jabatan = 'Social Project' AND region.region= 'Pusat'");
  return $query;
  }
  
}