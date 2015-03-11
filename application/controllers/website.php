<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Website extends CI_Controller
{
	public function index( )
	{
		$data["title"]="Reliance";
        $data["eventmenu"]=$this->events_model->geteventmenu();
        $data["salutations"]=$this->feedback_model->getsalutions();
        //$data['indexphotos']=$this->photos_model->getalbumfirstphotos();
        $data['indexphotos']=$this->photos_model->get1000photos();
        $this->load->view("frontend/index",$data);
	}
    public function sendfeedback()
    {
        $salut = $this->input->get_post("salut");
        $fname = $this->input->get_post("fname");
        $mname = $this->input->get_post("mname");
        $lname = $this->input->get_post("lname");
        $data['message']=$this->feedback_model->sendfb($salut,$fname,$mname,$lname);
        
        //$data['message']=$this->photos_model->getphotosbyfilter($albumid);
        $this->load->view( 'json', $data );	
    }
    public function sendfeedbackdetails()
    {
        $id = $this->input->get_post("id");
        $designation = $this->input->get_post("designation");
        $organization = $this->input->get_post("organization");
        $email = $this->input->get_post("email");
        $feedback = $this->input->get_post("comments");
        $data['message']=$this->feedback_model->sendfbd($id,$designation,$organization,$email,$feedback);
        $details=$data['message'];
        $this->load->library('email');

        $this->email->from('info@reliance.com', 'Your Name');
        $this->email->to('yesha@gozoop.in'); 

        $this->email->subject('Submit Form Reliance');
        $this->email->message("Firstname: $details->firstname \n Middlename: $details->middlename \n Lastname: $details->lastname \n Designation: $designation \n Organization: $organization \n Email: $email \n Comments: $feedback");	

        $this->email->send();


        //'INSERT INTO '
        //$data['message']=$this->photos_model->getphotosbyfilter($albumid);
        $this->load->view( 'json', $data );	
    }
    public function event( )
	{
        $eventid = $this->input->get_post("id");
		$data["title"]="Event";
        $data["eventmenu"]=$this->events_model->geteventmenu();
        //retrive data of the event
        $data['eventdata'] = $this->events_model->beforeedit($eventid);
        //retrieve photos of events photoalbum
        $data['eventphotos'] = $this->events_model->getphotos($data['eventdata']->photoalbum);
        //retrieve videos of events photoalbum
        $data['eventvideos'] = $this->events_model->getvideos($data['eventdata']->videoalbum);
        //$data["newss"]=$this->news_model->getall();
        $this->load->view("frontend/events",$data);
	}
    public function photogallery( )
	{
        /*$albumid = $this->input->get_post("id");
        if(!$albumid)
        {
            $data["photos"]=$this->photos_model->getallphotos();
        }else{
            $data["photos"]=$this->photos_model->getphotos($albumid);
        };*/
		$data["title"]="Photo Gallery";
        $data["eventmenu"]=$this->events_model->geteventmenu();
        //get list of albums
        $data["photoalbums"]=$this->photoalbum_model->getall();
        //get all images
        //$data["photos"]=$this->photos_model->getphotos($albumid);
        //$data["newss"]=$this->news_model->getall();
        $this->load->view("frontend/photo-gallery",$data);
	}
    public function albumfilter() 
    {
        $albumid=$this->input->get_post("id");
         if($albumid == 0)
         {  
            $data['message']=$this->photos_model->getallphotos();
         }else{
            $data['message']=$this->photos_model->getphotosbyfilter($albumid);
         }
        //$data['message']=$this->photos_model->getphotosbyfilter($albumid);
        $this->load->view( 'json', $data );	
    }
    public function videogallery( )
	{
		$data["title"]="Video Gallery";
        $data["eventmenu"]=$this->events_model->geteventmenu();
        //$data["newss"]=$this->news_model->getall();
        //get all video albums
        $data["videoalbums"]=$this->videoalbum_model->getall();
        $this->load->view("frontend/video-gallery",$data);
	}
    public function videofilter() 
    {
        $albumid=$this->input->get_post("id");
         if($albumid == 0)
         {  
            $data['message']=$this->videos_model->getallvideos();
         }else{
            $data['message']=$this->videos_model->getvideosbyfilter($albumid);
         }
        //$data['message']=$this->photos_model->getphotosbyfilter($albumid);
        $this->load->view( 'json', $data );	
    }

}
?>
