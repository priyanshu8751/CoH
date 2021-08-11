<?php
    class crud
    {
        //Private database object
        private $db;

        //construct to intialize a private varieble 
        //to the database connection
        function __construct($conn)
        {
            $this->db=$conn;
        }

        //Insert new file to patients database
        public function insert($fname, $lname, $d,$m, $y, $sex, $phno, $email,$symp, $al)
        {
                try {
                    $sql="INSERT INTO patient(firstname,lastname,D,M,Y,sex,phno,email,symptoms,allergies) VALUES(:fname, :lname, :d, :m, :y,:sex, :phno, :email, :symp, :al)";
                    $stmt=$this->db->prepare($sql);

                    $stmt->bindparam(':fname', $fname);
                    $stmt->bindparam(':lname', $lname);
                    $stmt->bindparam(':d', $d);
                    $stmt->bindparam(':m', $m);
                    $stmt->bindparam(':y', $y);
                    $stmt->bindparam(':sex', $sex);
                    $stmt->bindparam(':phno', $phno);
                    $stmt->bindparam(':email', $email);
                    $stmt->bindparam(':symp', $symp);
                    $stmt->bindparam(':al', $al);

                    $stmt->execute();
                    return true;

                } 
                catch (PDOException $e)
                {
                    echo $e->getMessage();
                    return false;
                    //throw $th;
                }
        }
        public function getPatients()
        {
            $sql = "SELECT * FROM `patient`;";
            $result=$this->db->query($sql);
            return $result;
        }
        public function getPatientdetails($id)
        {
            $sql=" select * from patient where PId= :id";
            $stmt=$this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result=$stmt->fetch();
            return $result;
        }
        public function deletePatient($id)
        {
            $sql="delete from patient where PId=:id";
            $stmt=$this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            return true;

        }
    

        }
?>
