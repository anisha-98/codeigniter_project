<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class amsctrl extends CI_Controller {
 
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('hello');
    }
    public function kk()
    {
        $this->load->view('hello');
    }
    public function trainer(){
        $this->load->view('trainerRegistration');
    }
    public function trainerAction(){
        $this->load->library('form_validation');
        $this->load->model('Mainmodel');
        $this->form_validation->set_rules("name","techername",'required');
        $this->form_validation->set_rules("address","address",'required');
        $this->form_validation->set_rules("district","phonenumber",'required');
        $this->form_validation->set_rules("pincode","district",'required');
        $this->form_validation->set_rules("phone","pincode",'required');
        $this->form_validation->set_rules("dob","age",'required');
        $this->form_validation->set_rules("gender","gender",'required');
        $this->form_validation->set_rules("subject","subject",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("pass","password",'required');
        if($this->form_validation->run()){
			$config['upload_path']='./uploads';
			$config['allowed_types']='jpg|gif|pdf|png|doc';
			$config['max_size']=1000;
			$config['max_height']=700;
			$config['max_width']=1024;
			$this->load->library('upload',$config);
            if(!$this->upload->do_upload('pic'))
            {
                $error=array('error'=>$this->upload->display_errors());
            }
            else{
                $data=array('pic'=>$this->upload->data());
                $img=$data['pic']['file_name'];
            }
            $pass=$this->input->post("pass");
            $encpass=$this->Mainmodel->encpass($pass);
            $b=array("user_name"=>$this->input->post("email"),
            "password"=>$encpass,
            "user_type"=>'2',"status"=>'0');
            $a=array("name"=>$this->input->post("name"),
            "address"=>$this->input->post("address"),
            "district"=>$this->input->post("district"),
            "pincode"=>$this->input->post("pincode"),
            "phoneno"=>$this->input->post("phone"),
            "dob"=>$this->input->post("dob"),
            "gender"=>$this->input->post("gender"),
            "subject"=>$this->input->post("subject"),
        "img_details"=>$img);          
            $this->Mainmodel->tbtreg($a,$b);
            redirect('amsctrl/trainer','refresh');
            }
            echo "<script> alert("."Do you want to insert"."); </script>";
            
    }

 
//office staff registration
public function newer()
    {
        $this->load->view('staff_registration');    
    }
public function student_index()
{
	$this->load->view('student_index');
}
public function admin_index()
{
	$this->load->view('admin_index');
}
public function trainer_index()
{
	$this->load->view('trainer_index');
}
public function staff_index()
{
	$this->load->view('staff_index');
}
    public function register()
    {
        $this->load->library('form_validation');
        $this->load->model('Mainmodel');
        $this->form_validation->set_rules("Name","name of user",'required');
        $this->form_validation->set_rules("Address","address of user",'required');
        $this->form_validation->set_rules("district","district of user",'required');
        $this->form_validation->set_rules("Pincode","pincode of user",'required');
        $this->form_validation->set_rules("Phoneno","Phoneno of user",'required');
        $this->form_validation->set_rules("dob","dob of user",'required');
        $this->form_validation->set_rules("gender","gender of user",'required');
        $this->form_validation->set_rules("section","section of user",'required');
        $this->form_validation->set_rules("email","email of user",'required');
        $this->form_validation->set_rules("password","password of user",'required');
        if($this->form_validation->run())
        {
            $config['upload_path']='./uploads';
			$config['allowed_types']='jpg|gif|pdf|png|doc';
			$config['max_size']=1000;
			$config['max_height']=700;
			$config['max_width']=1024;
			$this->load->library('upload',$config);
            if(!$this->upload->do_upload('pic'))
            {
                $error=array('error'=>$this->upload->display_errors());
                print_r($error);
            }
            else{
                $data=array('pic'=>$this->upload->data());
                $img=$data['pic']['file_name'];
            }
            $pass=$this->input->post("password");
            $encpass=$this->Mainmodel->encpass($pass);
            $a=array("name"=>$this->input->post("Name"),
                    "address"=>$this->input->post("Address"),
                    "district"=>$this->input->post("district"),
                    "pincode"=>$this->input->post("Pincode"),
                    "phoneno"=>$this->input->post("Phoneno"),
                    "dob"=>$this->input->post("dob"),
                    "gender"=>$this->input->post("gender"),
                    "section"=>$this->input->post("section"),
                    "img_details"=>$img);   
            $b=array("user_name"=>$this->input->post("email"),
                    "password"=>$encpass,   
                  "user_type"=>'3',"status"=>'0');  
                    
            $this->Mainmodel->newtb($a,$b);
            redirect(base_url().'amsctrl/');
 
        }
    }

 
//student (athulya)updation/registarion
 
 
public function stu_reg()
	{
		$this->load->view('student_registration');
	}
	public function reg_access()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("name","username",'required');
		$this->form_validation->set_rules("fname","username",'required');
		$this->form_validation->set_rules("address","useraddress",'required');
		$this->form_validation->set_rules("dist","userdis",'required');
		$this->form_validation->set_rules("pincode","userpincode",'required');
		$this->form_validation->set_rules("phoneno","userphno",'required');
		$this->form_validation->set_rules("dob","userdob",'required');
		$this->form_validation->set_rules("gender","usergender",'required');
		$this->form_validation->set_rules("education","usereductn",'required');
		$this->form_validation->set_rules("course","usereductn",'required');
		$this->form_validation->set_rules("email","useremail",'required');
		$this->form_validation->set_rules("password","userpassword",'required');
		if($this->form_validation->run())
	   {
        $config['upload_path']='./uploads';
        $config['allowed_types']='jpg|gif|pdf|png|doc';
        $config['max_size']=1000;
        $config['max_height']=700;
        $config['max_width']=1024;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('pic'))
        {
            $error=array('error'=>$this->upload->display_errors());
            print_r($error);
        }
        else{
            $data=array('pic'=>$this->upload->data());
            $img=$data['pic']['file_name'];
        }
		$pass=$this->input->post("password");
		$encpass1=$this->Mainmodel->encpass1($pass);
		$a=array("s_name"=>$this->input->post("name"),
			"fathername"=>$this->input->post("fname"),
		"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),
		"district"=>$this->input->post("dist"),
		"pincode"=>$this->input->post("pincode"),
		"education"=>$this->input->post("education"),
		"mobileno"=>$this->input->post("phoneno"),
		"dob"=>$this->input->post("dob"),
		"course"=>$this->input->post("course"),
        "img_details"=>$img); 
		$b=array("user_name"=>$this->input->post("email"),
		"password"=>$encpass1,"user_type"=>'1');
		$this->Mainmodel->reg_access($a,$b);
		redirect(base_url().'amsctrl/stu_reg');
	
	}
 
	
}
 
public function stud_profile()
        {
            $this->load->model('Mainmodel');
            $id=$this->session->loginid;
           $data['user_data']=$this->Mainmodel->view($id);
            $this->load->view('student_updation',$data);
 
        }
 
public function update_det()
        {  
 echo "ghjkl";
        $b=array("s_name"=>$this->input->post("name"),
			"fathername"=>$this->input->post("fname"),
		"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),
		"district"=>$this->input->post("dist"),
		"pincode"=>$this->input->post("pincode"),
		"education"=>$this->input->post("education"),
		"mobileno"=>$this->input->post("phoneno"),
		"dob"=>$this->input->post("dob"),
		"course"=>$this->input->post("course")
		);
        print_r($b);
        $c=array("user_name"=>$this->input->post("email"));
       print_r($c);
        $this->load->model('Mainmodel');
            if($this->input->post("update"))
            {
            	 $id=$this->session->id;
                 echo $id;
            	
                $this->Mainmodel->updatedetails1($b,$c,$id);
               
                redirect(base_url().'amsctrl/stud_profile');
            }
               
    }
 
//Login part by rubiya
public function log()
    {
        $this->load->view('login');
    }
    
 
 
    public function loginAction()
    {
            $this->load->library('form_validation');
            $this->load->model('Mainmodel');
            $this->form_validation->set_rules("user_name","email",'required');
            $this->form_validation->set_rules("password","password",'required');
            if($this->form_validation->run())
        { 
            
            $this->load->model('Mainmodel');
                        $email=$this->input->post("user_name");
                        $password=$this->input->post("password");
                        $rslt=$this->Mainmodel->newpasslog($email,$password);
                            if($rslt)
                        {
                            $id=$this->Mainmodel->getuserid($email);
                            $user=$this->Mainmodel->getuser($id);
                            $this->load->library(array('session'));
                            $this->session->set_userdata(array('id'=>(int)$user->id,
                            'status'=>$user->status,
                            'user_type'=>$user->user_type));
 
                            if($_SESSION['status']=='1' && $_SESSION['user_type']=='0')
                        {
                            redirect('amsctrl/admin_index','refresh');
                        }
                            else if($_SESSION['status']=='1' && $_SESSION['user_type']=='1')
                        {
                            redirect('amsctrl/student_index','refresh');
                        }
                            else if($_SESSION['status']=='1' && $_SESSION['user_type']=='2')
                        {
                            redirect('amsctrl/trainer_index','refresh');
                        }
						else if($_SESSION['status']=='1' && $_SESSION['user_type']=='3')
                        {
                            redirect('amsctrl/staff_index','refresh');
                        }
                        
 
                        else
                        {                               
                        echo "Waitting for approval";
                    }
                }
            
                else{
                    echo "invalid user";
                }
            }
            else{
                redirect(base_url().'amsctrl/');
            }
    
        }
        public function viewstaff()
		{
			$this->load->view('view_staff');
		}
		public function staffview()
	{
			$this->load->library('form_validation');
			$this->load->model('Mainmodel');
			$this->form_validation->set_rules("Name","name",'required');
            $this->form_validation->set_rules("Address","address",'required');
            $this->form_validation->set_rules("district","district",'required');
            $this->form_validation->set_rules("Pincode","pincode",'required');
            $this->form_validation->set_rules("Phoneno","phoneno",'required');
            $this->form_validation->set_rules("gender","gender",'required');
            $this->form_validation->set_rules("dob","dob",'required');
            $this->form_validation->set_rules("section","section",'required');
            $this->form_validation->set_rules("pic","pic",'required');
			if($this->form_validation->run())
			{
				$id=$this->session->id;
			$a=array("name"=>$this->input->post("Name"),
                    "address"=>$this->input->post("Address"),
                    "district"=>$this->input->post("district"),
                    "pincode"=>$this->input->post("Pincode"),
                     "phoneno"=>$this->input->post("Phoneno"),
                    "gender"=>$this->input->post("gender"),
                    "dob"=>$this->input->post("dob"),
                    "section"=>$this->input->post("section"),
                    "img_details"=>$this->input->post("pic"));

						
			
						$this->Mainmodel->notitech($a);
						redirect(base_url().'','refresh');
			}
		}
		public function viewnoti()
		{
		
		$this->load->model('Mainmodel');
        
 	    $data['n']=$this->Mainmodel->notifun();
         
		$this->load->view("view_staff",$data);
	}

    
    public function approve($id)
{
	$this->load->model('Mainmodel');
	$id=$this->uri->segment(3);
	$this->Mainmodel->aprovedetails($id);
	redirect('amsctrl/viewnoti','refresh');			
				}
				

public function reject($id)
{
	$this->load->model('Mainmodel');
	$id=$this->uri->segment(3);
	$this->Mainmodel->rejecteddetails($id);
	redirect('amsctrl/viewnoti','refresh');			
}
				
				
//stud_view admin

public function viewstud()
		{
			$this->load->view('stud_view');
		}
		public function studview()
	{
			$this->load->library('form_validation');
			$this->load->model('Mainmodel');
			$this->form_validation->set_rules("Name","s_name",'required');
            $this->form_validation->set_rules("fathername","fathername",'required');
            $this->form_validation->set_rules("Address","address",'required');
            $this->form_validation->set_rules("Pincode","pincode",'required');
            $this->form_validation->set_rules("Phonenumber","mobileno",'required');
            $this->form_validation->set_rules("Dob","dob",'required');
            $this->form_validation->set_rules("Education","education",'required');
            $this->form_validation->set_rules("District","district",'required');
            $this->form_validation->set_rules("Course","course",'required');
            $this->form_validation->set_rules("Pic","img_details",'required');
            $this->form_validation->set_rules("Email","email",'required');
            
            
			if($this->form_validation->run())
			{
				$id=$this->session->id;
			$a=array("s_name"=>$this->input->post("Name"),
                    "fathername"=>$this->input->post("fathername"),
                    "address"=>$this->input->post("Address"),
                    "pincode"=>$this->input->post("Pincode"),
                     "mobileno"=>$this->input->post("Phoneno"),
                    "gender"=>$this->input->post("gender"),
                    "dob"=>$this->input->post("dob"),
                    "education"=>$this->input->post("Education"),
                    "district"=>$this->input->post("District"),
                    "course"=>$this->input->post("Course"),
                    "img_details"=>$this->input->post("pic"),
                    "email"=>$this->input->post("Email"),
                    "section"=>$this->input->post("section"),
                    );

						
			
						$this->Mainmodel->stud($a);
						redirect(base_url().'','refresh');
			}
		}
        public function view_noti()
		{
		
		$this->load->model('Mainmodel');
        
 	    $data['n']=$this->Mainmodel->funnoti();
         
		$this->load->view("stud_view",$data);
	}
    public function approvee($id)
{
	$this->load->model('Mainmodel');
	$id=$this->uri->segment(3);
	$this->Mainmodel->aprovedetail($id);
	redirect('amsctrl/view_noti','refresh');			
				}
				

public function rejectt($id)
{
	$this->load->model('Mainmodel');
	$id=$this->uri->segment(3);
	$this->Mainmodel->rejecteddetail($id);
	redirect('amsctrl/view_noti','refresh');			
}

//traine view  admin

public function viewtraine()
		{
			$this->load->view('traine_view');
		}
		public function traineview()
	{
			$this->load->library('form_validation');
			$this->load->model('Mainmodel');
			$this->form_validation->set_rules("Name","s_name",'required');
            $this->form_validation->set_rules("Address","address",'required');
            $this->form_validation->set_rules("District","district",'required');
            $this->form_validation->set_rules("Pincode","pincode",'required');
            $this->form_validation->set_rules("Phonenumber","phoneno",'required');
            $this->form_validation->set_rules("Gender","gender",'required');
            $this->form_validation->set_rules("DOB","dob",'required');
            $this->form_validation->set_rules("Subject","subject",'required');
            $this->form_validation->set_rules("Pic","img_details",'required');
            
            if($this->form_validation->run())
			{
				$id=$this->session->id;
			        $a=array("name"=>$this->input->post("Name"),
                    "address"=>$this->input->post("Address"),
                    "district"=>$this->input->post("District"),
                     "pincode"=>$this->input->post("Pincode"),
                    "phoneno"=>$this->input->post("Phonenumber"),
                    "gender"=>$this->input->post("Gender"),
                    "dob"=>$this->input->post("DOB"),
                    "subject"=>$this->input->post("Subject"),
                    "img_details"=>$this->input->post("pic"),
                    "email"=>$this->input->post("Email"),
                    );

						
			
						$this->Mainmodel->traine($a);
						redirect(base_url().'','refresh');
			}
		}  
        
        public function views()
		{
		
		$this->load->model('Mainmodel');
        
 	    $data['n']=$this->Mainmodel->trainenoti();
         
		$this->load->view("traine_view",$data);
	}

    public function approveee($id)
{
	$this->load->model('Mainmodel');
	$id=$this->uri->segment(3);
	$this->Mainmodel->aprovedetaill($id);
	redirect('amsctrl/views','refresh');			
				}
				

public function rejecttt($id)
{
	$this->load->model('Mainmodel');
	$id=$this->uri->segment(3);
	$this->Mainmodel->rejecteddetaill($id);
	redirect('amsctrl/views','refresh');			
}

//notes add(athulya)
public function note_add()
{
    $id=$this->session->id;
    
    $this->load->view('notes_add');
}


public function note_add_action(){

    $id=$this->session->id;
    $this->load->library('form_validation');
    $this->load->model('Mainmodel');
    //$this->form_validation->set_rules("note","techername",'required');
     $this->form_validation->set_rules("section","techername",'required');
   
    if($this->form_validation->run()){
        $config['upload_path']='./notes';
        $config['allowed_types']='jpg|gif|pdf|png|doc';
        $config['max_size']=1000;

   
       
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('note'))
        {
            $error=array('error'=>$this->upload->display_errors());
            print_r($error);
        }
        else{
            $data=array('note'=>$this->upload->data());
            $img=$data['note']['file_name'];
        }
        $a=array("note"=>$img,
        "subject"=>$this->input->post("section"),
        'loginid'=>$id);          
        $this->Mainmodel->notes_add($a);
        redirect('amsctrl/','refresh');
        }
        echo "<script> alert("."Do you want to insert"."); </script>";
       
}

public function logout(){
    $this->session->unset_userdata('id');
    $this->session->sess_destroy();
    redirect('amsctrl/log','refresh');
}

//complaint_reg by athulya

public function complaint_reg()


 {


    $this->load->view('complaint_reg');
 }
public function stu_complaint()
    {
        $this->load->library('form_validation');
        $this->load->model('Mainmodel');
       
        $this->form_validation->set_rules("not","usernam",'required');
        if($this->form_validation->run())
    {
       
        $id=$this->session->id;
       
       
        $a=array("complaint"=>$this->input->post("not"),
            "cm_date"=>date('y-m-d'),
            'loginid'=>$id);
        $this->Mainmodel->notiteach($a);
        redirect(base_url().'');

       
    }  
}

//complaint view table(by athulya)

public function notiview()
{

    $this->load->view('complaint_table_view');
}
public function view_notification()
{

    $this->load->model('Mainmodel');
    $data['b']=$this->Mainmodel->addno();
    $this->load->view('complaint_table_view',$data);
}
//note view table (by athulya)

public function note_view()
{

    $this->load->view('note_table_view');
}
public function view_note()
{
   
    $this->load->model('Mainmodel');
    $data['n']=$this->Mainmodel->notes_join();
    $this->load->view('note_table_view',$data);
}


//job view aneesha


    public function jobvacview()
    {
            $this->load->model('Mainmodel');
            $data['n']=$this->Mainmodel->views();
            $this->load->view('job_vac_view',$data);
    }

    //job vacanvcy  Add by Anisha


    public function job()
 {
     $this->load->view('jobform');
 }
 public function job2()
{
    $this->load->view('jobform');

}
public function job1()
    {
        $this->load->library('form_validation');
        $this->load->model('Mainmodel');
        $this->form_validation->set_rules("company","company of user",'required');
        $this->form_validation->set_rules("title","title of user",'required');
        $this->form_validation->set_rules("department","department of user",'required');
        $this->form_validation->set_rules("phoneno","Phoneno of user",'required');
        $this->form_validation->set_rules("mobile","mobileno of user",'required');
        $this->form_validation->set_rules("email","email of user",'required');
        if($this->form_validation->run())
        {
            
            $a=array("company"=>$this->input->post("company"),
                    "title"=>$this->input->post("title"),
                    "department"=>$this->input->post("department"),
                    "phoneno"=>$this->input->post("phoneno"),
                    "mobile"=>$this->input->post("mobile"),
                    "email"=>$this->input->post("email"));
                    $this->Mainmodel->newtb2($a);
                    redirect(base_url().'amsctrl/viewdetails');

        }
                    
    }

//complint replay by Athulya
public function reply()
    {
        $this->load->view('reply_complaint');
    }
    public function deletedetails()
    {
        $this->load->model('Mainmodel');
        $id=$this->uri->segment(3);
        $this->Mainmodel->deletedetails($id);
        redirect('amsctrl/view_notification','refresh');

    }
    public function ins_reply()
    {
        $this->load->library('form_validation');
        $this->load->model('Mainmodel');
        $this->form_validation->set_rules("reply","reply of user",'required');
        if($this->form_validation->run())
        {
           
            $a=array("replay"=>$this->input->post("reply"),"name"=>$this->input->post("name"));
            $this->Mainmodel->role($a);
            redirect(base_url().'amsctrl/reply');
       
        }
    }

   
//complaint replay table view by Athulya
    public function replay_table()
    {
        $this->load->view('replay_complaint_table');
    }
public function stud_complete()
{
    $this->load->view('stud_complete');
}

    public function view_replay()
{
   
    $this->load->model('Mainmodel');
    $data['b']=$this->Mainmodel->replay_get();
    $this->load->view('replay_complaint_table',$data);
}

public function job_view_staff()
    {
        $this->load->view('staff_job_view_table');
    }
    public function job_staff_table()
    {
            $this->load->model('Mainmodel');
            $data['n']=$this->Mainmodel->views();
            $this->load->view('staff_job_view_table',$data);
    }

// job aplly student view(by athulya)
public function   job_aplay_table()
    {
        $this->load->view('job_aplay_stu_table');
    }


    public function  stu_job_aplay_table()
{
   
    $this->load->model('Mainmodel');
    $data['b']=$this->Mainmodel->stu_aplay_get();
    $this->load->view('job_aply_stu_table',$data);
}

//job aplay student by Anisha
public function viewdetails()
    {
        
            $this->load->model('Mainmodel');
            $data['n']=$this->Mainmodel->views2();
            $this->load->view("jobtable",$data);
    }
   
    public function jobapply()
    {
        $this->load->view('job_apply');
    }

   //apply job by anisha
    public function apply()
    {
        $this->load->library('form_validation');
        $this->load->model('Mainmodel');
        $this->form_validation->set_rules("Name","name of user",'required');
        $this->form_validation->set_rules("Address","address of user",'required');
        $this->form_validation->set_rules("district","district of user",'required');
        $this->form_validation->set_rules("Phoneno","phoneno of user",'required');
        $this->form_validation->set_rules("dob","dob of user",'required');
        $this->form_validation->set_rules("gender","gender of user",'required');
        $this->form_validation->set_rules("qualification","qualification of user",'required');
        $this->form_validation->set_rules("email","email of user",'required');
        $this->form_validation->set_rules("title","title of user",'required');
        $this->form_validation->set_rules("department","department of user",'required');
        if($this->form_validation->run())
        {
            
            $a=array("Name"=>$this->input->post("Name"),
                    "Address"=>$this->input->post("Address"),
                    "District"=>$this->input->post("district"),
                    "Phoneno"=>$this->input->post("Phoneno"),
                    "dob"=>$this->input->post("dob"),
                    "gender"=>$this->input->post("gender"),
                    "qualification"=>$this->input->post("qualification"),
                    "email"=>$this->input->post("email"),
                    "title"=>$this->input->post("title"),
                    "department"=>$this->input->post("department"));
                    
        $this->Mainmodel->applying($a);
        redirect(base_url().'amsctrl/');

        }
    }


//update traine by Rubiya
public function trainer_profile()
        {
            $this->load->model('Mainmodel');
            $id=$this->session->id;
           $data['user_data']=$this->Mainmodel->view_train($id);
            $this->load->view('traine_update',$data);
 
        }
 
public function updatedet()
        {  
 
        $b=array("name"=>$this->input->post("name"),

"address"=>$this->input->post("address"),

"district"=>$this->input->post("district"),
"pincode"=>$this->input->post("pincode"),

"phoneno"=>$this->input->post("phoneno"),
"gender"=>$this->input->post("gender"),
"dob"=>$this->input->post("dob"),
"subject"=>$this->input->post("subject"));


        $c=array("user_name"=>$this->input->post("email"));
       
        $this->load->model('Mainmodel');
            if($this->input->post("update"))
            {
            $id=$this->session->id;
           
                $this->Mainmodel->updatedetails($b,$c,$id);
               
                redirect(base_url().'amsctrl/trainer_profile');
            }
               
    }

    //bill adding by athulya

public function bill_add()
{
    $id=$this->session->id;
    
    $this->load->view('bill_add');
}


public function bill_add_action(){

         $id=$this->session->id;
    $this->load->library('form_validation');
    $this->load->model('Mainmodel');
    //$this->form_validation->set_rules("note","techername",'required');
    $this->form_validation->set_rules("name","techername",'required');
   
    if($this->form_validation->run()){
        $config['upload_path']='./bill';
        $config['allowed_types']='jpg|gif|pdf|png|doc';
        $config['max_size']=1000;

   
       
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('bill'))
        {
            $error=array('error'=>$this->upload->display_errors());
            print_r($error);
        }
        else{
            $data=array('bill'=>$this->upload->data());
            $img=$data['bill']['file_name'];
        }
        $a=array("bill"=>$img,
            'name'=>$this->input->post('name'),
        'loginid'=>$id);          
        $this->Mainmodel->bill_add($a);
        redirect('amsctrl/','refresh');
        }
        echo "<script> alert("."Do you want to insert"."); </script>";
       
}


//salary view table (by athulya)

public function bill_view()
{

    $this->load->view('bill_view_table');
}
public function view_bill()
{
   
    $this->load->model('Mainmodel');
    $data['n']=$this->Mainmodel->bill_join();
    $this->load->view('bill_view_table',$data);
}
}

				

