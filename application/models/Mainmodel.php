<?php
class Mainmodel extends CI_model{
    public function tbtreg($a,$b){
        $this->db->insert("tb_login",$b);
        $loginid = $this->db->insert_id();
        $a['loginid']=$loginid;
        $this->db->insert("tb_trainer",$a);
    }
    public function encpass($pass){
        return password_hash($pass,PASSWORD_BCRYPT);
    }
 
 
//office staff mainmodel
 
public function register($a)
{
    $this->db->insert("tb_staff",$a);
 
}
 
public function newtb($a,$b)
{
    $this->db->insert("tb_login",$b);
    $loginid=$this->db->insert_id();
    $a['loginid']=$loginid;
    $this->db->insert("tb_staff",$a);
}
 
public function reg1()
          {
              $this->db->select('*');
              $this->db->join('tb_login','tb_login.id=tb_staff.loginid','inner');
              $cab=$this->db->get("tb_staff");
               return $cab;
          }
//student (athulya)registarion /updation
 
public function reg_access($a,$b) 
  {
      $this->db->insert("tb_login",$b);
      $loginid=$this->db->insert_id();
      $a['loginid']=$loginid;
      $this->db->insert("tb_student",$a);
      
  } 
  public function encpass1($pass)
  {
    return password_hash($pass,PASSWORD_BCRYPT);
  }
   public function view()
  {
    $this->db->select('*');
    $this->db->join('tb_login','tb_login.id=tb_student.loginid','inner');
    $qry=$this->db->get("tb_student");
    return $qry;
  }
 
 
  public function updatedetails1($b,$c,$id)
             {
              $this->db->select("*");
               $qry=$this->db->where("tb_student.loginid",$id);
               $qry=$this->db->join('tb_login','tb_login.id=tb_student.loginid','inner');
               $qry=$this->db->update("tb_student",$b);
               $qry=$this->db->where("tb_login.id",$id);
                $qry=$this->db->update("tb_login",$c);
                return $qry;
                
 
             }
//view job vacancy table



public function views()
          {
              $this->db->select('*');
              $cab=$this->db->get("tb_vacancy");
              return $cab;
          }
 
          public function newpasslog($email,$password)
          {
              $this->db->select('password');
              $this->db->from("tb_login");
              $this->db->where("user_name",$email);
              $qry=$this->db->get()->row('password');
              return $this->verifypass($password,$qry);
          }
          public function verifypass($password,$qry)
          {
              return password_verify($password,$qry);
          }
          public function getuserid($email)
{
    $this->db->select('id');
    $this->db->from("tb_login");
    $this->db->where("user_name",$email);
    return $this->db->get()->row('id');
}
public function getuser($id)
{
    $this->db->select('*');
    $this->db->from("tb_login");
    $this->db->where("id",$id);
    return $this->db->get()->row();

}
//rubiya
public function notitech($a)
{
    $this->db->insert("tb_staff",$a);
    
}
public function notifun()
{
    $this->db->select('*');
    $this->db->join('tb_login','tb_login.id=tb_staff.loginid','inner');
    $qry=$this->db->get("tb_staff");
    return $qry;
}
public function view1()
{
    $this->db->select('*');
    $this->db->join('tb_login','tb_login.id=tb_staff.loginid','inner');
    $qry=$this->db->get("tb_staff");
    return $qry;
}


public function aprovedetails($id)
{
    /*$this->db->select('*');*/
    $qry=$this->db->where("id",$id);
    $qry= $this->db->set("status",'1');
   $qry= $this->db->update("tb_login");
   return $qry;
}
public function rejecteddetails($id)
{
    /*$this->db->select('*');*/
    $qry=$this->db->where("id",$id);
    $qry= $this->db->set("status",'2');
   $qry= $this->db->update("tb_login");
   return $qry;
}

public function stud($a)
{
    $this->db->insert("tb_student",$a);
    
}
    
public function funnoti()
{
    $this->db->select('*');
    $this->db->join('tb_login','tb_login.id=tb_student.loginid','inner');
    $qry=$this->db->get("tb_student");
    return $qry;
}
public function aprovedetail($id)
{
    $qry=$this->db->where("id",$id);
    $qry= $this->db->set("status",'1');
   $qry= $this->db->update("tb_login");
   return $qry;
}
public function rejecteddetail($id)
{
    /*$this->db->select('*');*/
    $qry=$this->db->where("id",$id);
    $qry= $this->db->set("status",'2');
   $qry= $this->db->update("tb_login");
   return $qry;
}

//admin view trainee
public function traine($a)
{
    $this->db->insert("tb_trainer",$a);
    
}

public function trainenoti()
{
    $this->db->select('*');
    $this->db->join('tb_login','tb_login.id=tb_trainer.loginid','inner');
    $qry=$this->db->get("tb_trainer");
    return $qry;
}
public function aprovedetaill($id)
{
    /*$this->db->select('*');*/
    $qry=$this->db->where("id",$id);
    $qry= $this->db->set("status",'1');
   $qry= $this->db->update("tb_login");
   return $qry;
}
public function rejecteddetaill($id)
{
    /*$this->db->select('*');*/
    $qry=$this->db->where("id",$id);
    $qry= $this->db->set("status",'2');
   $qry= $this->db->update("tb_login");
   return $qry;
}
 
public function notes_add($a)
{
  $this->db->insert('tb_note',$a);
}

//insert the complaint
           
public function notiteach($a)
{
$this->db->insert("tb_complaint",$a);

}

//view complaint by athulya
public function addno()
  {
    $this->db->select('*');
    $this->db->join('tb_student','tb_student.loginid=tb_complaint.loginid','inner');
    $qry=$this->db->get("tb_complaint");
    return $qry;
  }

  public function addone($id)
  {
    $this->db->select('*');
 
    $qry=$this->db->get("tb_complaint");
    return $qry;
  }


  //note insert (athulya)
/*public function notes_add($a)
{
  $this->db->insert('tb_note',$a);
}*/
public function notes_join()
  {
    $this->db->select('*');
    $this->db->join('tb_trainer','tb_trainer.loginid=tb_note.loginid','inner');
    $qry=$this->db->get("tb_note");
    return $qry;
  }
  public function note_get($id)
  {
    $this->db->select('*');
 
    $qry=$this->db->get("tb_note");
    return $qry;
  }

  
//job application anisha

  public function newtb2($a)
          {
              $this->db->insert("tb_vacancy",$a);
              
          }
public function views2()
          {
              $this->db->select('*');
              $cab=$this->db->get("tb_vacancy");
              return $cab;
          }
public function views1()
          {
              $this->db->select('*');
              $cab=$this->db->get("tb_vacancy");
              return $cab;
          }
public function applying($a)
          {
              $this->db->insert("tb_job_apply",$a);
          }
//tb_comliant by anisha
 public function deletedetails($id)
          {
              $this->db->where("id",$id);
              $this->db->delete("tb_complaint");
          }
          public function role($a)
          {
              $this->db->insert("tb_replay",$a);
          }
        /*  public function replay_join()
        {
              $this->db->select('*');
              $this->db->join('tb_staff','tb_staff.loginid=tb_.loginid','inner');
              $qry=$this->db->get("tb_note");
              return $qry;
        }*/
  public function  replay_get()
  {
    $this->db->select('*');
 
    $qry=$this->db->get("tb_replay");
    return $qry;
  }
//applyed student list view
  public function  stu_aplay_get()
  {
    $this->db->select('*');
 
    $qry=$this->db->get("tb_job_apply");
    return $qry;
  }

//job aplay student by Anisha





//update traine by rubiya
public function view_train($id)
  {
    $this->db->select('*');
    $this->db->join('tb_login','tb_login.id=tb_trainer.loginid','inner');
    $qry=$this->db->where("tb_trainer.loginid",$id);
    $qry=$this->db->get("tb_trainer");
    return $qry;
  }

public function updatedetails($b,$c,$id)
             {
              $this->db->select("*");
               $qry=$this->db->where("tb_trainer.loginid",$id);
               $qry=$this->db->join('tb_login','tb_login.id=tb_trainer.loginid','inner');
               $qry=$this->db->update("tb_trainer",$b);
               $qry=$this->db->where("tb_login.id",$id);
                $qry=$this->db->update("tb_login",$c);
                return $qry;
               
 
}
//bill add by Athulya
public function bill_add($a)
{
  $this->db->insert('tb_bill',$a);
}

 public function bill_join()
  {
    $this->db->select('*');
    $this->db->join('tb_trainer','tb_trainer.loginid=tb_bill.loginid','inner');
    $qry=$this->db->get("tb_bill");
    return $qry;
  }
  public function bill_get($id)
  {
    $this->db->select('*');
 
    $qry=$this->db->get("tb_bill");
    return $qry;
  }


}