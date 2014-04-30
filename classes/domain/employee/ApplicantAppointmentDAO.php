<?php
/**
 * Created by PhpStorm.
 * User: bslaght123
 * Date: 4/5/14
 * Time: 1:33 PM
 */

class ApplicantAppointmentDAO {

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Find
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function getCurrentAppointmentForApplicant($applicantID = null){

    if($applicantID){
        $inputApplicantID = $applicantID;
    }
    else{
        $inputApplicantID = $_SESSION['currentApplicant'];
    }

    $qGetAppointment = $this->db->prepare("
        select * from `applicant_set_appointment`
        where `asa_applicant_id` = ".$inputApplicantID." order by asa_id DESC Limit 1;
    ");

    try{
        $qGetAppointment->execute();
        $appointment = $this->mapAppointmentToObjects($qGetAppointment);

        return $appointment;
    }
    catch(Exception $e){
        return false;
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Create
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function createAppointment($applicantID,$date, $contactID, $officeID, $statusID, $note, $createEmployeeID){

    $qCreateAppointment = $this->db->prepare("
        INSERT INTO applicant_set_appointment (asa_applicant_id, asa_date, asa_contact_employee_id, asa_office_id, asa_as_id, asa_create_employee_id, asa_create_date)
        VALUES (:applicantID, :appointmentDate, :contactID, :officeID, :statusID, :createEmployeeID, :createDate )
    ");

    try{
        $qCreateAppointment->execute(array(
            ':applicantID' => $applicantID,
            ':appointmentDate'  => $date,
            ':contactID'    => $contactID,
            ':officeID' => $officeID,
            ':statusID' => $statusID,
            ':createEmployeeID' => $createEmployeeID,
            ':createDate'   => date('Y-m-d H:i:s')
        ));

        $appointmentID = $this->db->lastInsertId();

        if($note != ''){
            $NoteDAO = new NoteDAO($this->db);
            $createNote = $NoteDAO->createNote($applicantID,'First Interview Notes',$note,$appointmentID,$createEmployeeID);
        }

        if($appointmentID){
            $ApplicantActivityDAO = new ApplicantActivityDAO($this->db);
            $ApplicantActivityDAO->createActivity($statusID,$applicantID,2,$appointmentID);
        }


        return $appointmentID;

    }catch(PDOException $e){
        return false;
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Update
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function updateAppointmentStatus($appointmentID,$statusID){

    $qUpdateStatus = $this->db->prepare("
        UPDATE applicant_set_appointment SET asa_as_id = :statusID WHERE asa_id = ".$appointmentID.";
    ");

    try{
        $qUpdateStatus->execute(array(':statusID' => $statusID));

        return TRUE;
    }
    catch(PDOException $e){
        return FALSE;
    }

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Delete
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Mapping
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    protected function mapAppointmentToObjects(PDOStatement $stmt){

        $appointments = array(); //Array that will contain many appointments.
        try{
            //Checks to see if there are no appointments returned.
            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }
            do{
                //Creates new user profile object for each applicant selected.
                $appointment = new ApplicantAppointment();
                $appointment->setAppointmentID($aRow['asa_id']);
                $appointment->setApplicantID($aRow['asa_applicant_id']);
                $appointment->setAppointmentDate($aRow['asa_date']);
                $appointment->setAppointmentContactID($aRow['asa_contact_employee_id']);
                $appointment->setAppointmentOfficeID($aRow['asa_office_id']);
                $appointment->setAppointmentStatusID($aRow['asa_as_id']);
                $appointment->setAppointmentCreateUser($aRow['asa_create_employee_id']);
                $appointment->setAppointmentCreateDate(date('Y-m-d H:i:s'));
                $appointments[] = $appointment; // applicant to main array.
            } while(($aRow = $stmt->fetch()) !== false);
        } catch(Exception $e){
            //Error in initial SQL statement.
            echo $e;
        }
        //Final results will all the applicants.
        if(count($appointments) == 1){
            return $appointments[0];
        }
        else{
            return $appointments;
        }

    }
}