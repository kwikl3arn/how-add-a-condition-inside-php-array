$data2 = array(

                         'regdt_refno' => $result[0]->trcode_code . date('ym') . $tot,
                         'regdt_attrelation' => $_REQUEST['attrelation'],
                         'regdt_attname' => $_REQUEST['attname'],
                         'regdt_attmobile' => $_REQUEST['attmn'],
                         'regdt_patientcat' => $_REQUEST['patient_cat'],
                         'regdt_pc_staff_empid' =>!empty($_REQUEST['pc_staff_empid'])? $_REQUEST['pc_staff_empid'] : NULL,
                         'regdt_pc_staff_empname'=>!empty($_REQUEST['pc_staff_empname'])?$_REQUEST['pc_staff_empname']: NULL,
                         'regdt_ref_hospital'=>!empty($_REQUEST['ref_hospital'])?$_REQUEST['ref_hospital']: NULL,
                         'regdt_refaboutus' => $_REQUEST['how_u_know'],
                         'regdt_entered_by' => $username


        );
        $this->db->insert('user_registration_dt', $data2);
