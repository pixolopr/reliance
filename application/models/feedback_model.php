<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class feedback_model extends CI_Model
{
public function create($salutation,$firstname,$lastname,$middlename,$email,$contact,$designation,$organisation,$comments)
{
$data=array("salutation" => $salutation,"firstname" => $firstname,"lastname" => $lastname,"middlename" => $middlename,"email" => $email,"contact" => $contact,"designation"=>$designation,"organisation"=>$organisation,"comments"=>$comments);
$query=$this->db->insert( "reliance_feedback", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
   
        public function getsalutiondropdown()
    {
       	$query=$this->db->query("SELECT * FROM  `salutation`")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
	  return $return;
    }
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("reliance_feedback")->row();
return $query;
}
function getsinglefeedback($id){
$this->db->where("id",$id);
$query=$this->db->get("reliance_feedback")->row();
return $query;
}
public function edit($id,$salutation,$firstname,$lastname,$middlename,$email,$contact,$designation,$organisation,$comments)
{
$data=array("salutation" => $salutation,"firstname" => $firstname,"lastname" => $lastname,"middlename" => $middlename,"email" => $email,"contact" => $contact,"designation"=>$designation,"organisation"=>$organisation,"comments"=>$comments);
$this->db->where( "id", $id );
$query=$this->db->update( "reliance_feedback", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `reliance_feedback` WHERE `id`='$id'");
return $query;
}
    public function sendfb($s, $f, $m, $l)
    {
        $query=$this->db->query("INSERT INTO `reliance_feedback` (`salutation`,`firstname`,`middlename`,`lastname`)
VALUES ('$s','$f','$m','$l')");
        $id = $this->db->insert_id();
        return $id;
    }
    public function sendfbd($i, $d, $o, $e, $f)
    {
        $query=$this->db->query("UPDATE `reliance_feedback` SET `designation` = '$d', `organisation` = '$o', `email` = '$e' , `comments`='$c' WHERE `id` = '$i'");
        return $query; 
        
         
    }
    public function getsalutions()
    {
        $query=$this->db->query("SELECT * FROM `salutation`")->result();
        return $query; 
    }
    
}
?>
