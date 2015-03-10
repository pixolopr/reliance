<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class photos_model extends CI_Model
{
            public function getphotoalbumdropdown()
    {
       	$query=$this->db->query("SELECT * FROM  `reliance_photoalbum`")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
	  return $return;
    }
public function create($name,$order,$image,$photoalbum)
{
$data=array("name" => $name,"order" => $order,"image" => $image,"photoalbum" => $photoalbum);
$query=$this->db->insert( "reliance_photos", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("reliance_photos")->row();
return $query;
}
function getsinglephotos($id){
$this->db->where("id",$id);
$query=$this->db->get("reliance_photos")->row();
return $query;
}
public function edit($id,$name,$order,$image,$photoalbum)
{
$data=array("name" => $name,"order" => $order,"image" => $image,"photoalbum" => $photoalbum);
$this->db->where( "id", $id );
$query=$this->db->update( "reliance_photos", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `reliance_photos` WHERE `id`='$id'");
return $query;
}
    public function getallphotos()
    {
        $query=$this->db->query("SELECT * FROM `reliance_photos` ORDER BY `order`")->result();
        return $query; 
    }
    public function getphotosbyfilter($id)
    {
        $query=$this->db->query("SELECT * FROM `reliance_photos` WHERE `photoalbum`= '$id' ORDER BY `order`")->result();
        return $query;
    }
    public function getalbumfirstphotos()
    {
        $query=$this->db->query("SELECT `reliance_photos`.`image` as `image`,`reliance_photoalbum`.`id` as `id`  FROM `reliance_photos` INNER JOIN `reliance_photoalbum` ON `reliance_photoalbum`.`id` = `reliance_photos`.`photoalbum` GROUP BY `reliance_photos`.`photoalbum` ORDER BY `reliance_photos`.`order`")->result();
        return $query;
    }
}
?>
