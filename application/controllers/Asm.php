<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asm extends CI_Controller {

	 public function index()
		{
			//$this->load->view('common/header');
			//$this->load->view('login');
		}
    public function createAsm()
    {
        $this->load->model('UserModel');
        $data['asm'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ASM));
        $this->load->view('common/header');
        $this->load->view('createasm',$data);
    }
    public function addAsm()
    {
         $this->load->model('UserModel');
         $data['username'] = $this->input->post('username');
         if(!$this->UserModel->userEmailCheck($data['username'])){
                 $data['ID'] = $this->input->post('asmid');
                 $data['name'] = $this->input->post('name');
                 $data['password'] = md5($this->input->post('password'));
                 $data['mobile'] = $this->input->post('mobile');
                 $data['doj'] = $this->input->post('doj');
                 $data['role_id'] = $this->UserModel->getRoleId(ASM);
                 $insert =  $this->db->insert('bs_user',$data);
                 if($insert)
                 {
                   $message = $this->session->set_flashdata('message', $data['ID'].' Account Name:'.$data['name'].' has been successfully created');
                   redirect(base_url('Asm/viewAsm/'), 'refresh', $message);

                 }

       }else{
         $message = $this->session->set_flashdata('error', 'Email already exists!');
         redirect(base_url('Asm/createAsm/'), 'refresh', $message);
       }
    }
		public function viewAsm()
		{
				$this->load->model('UserModel');
				$data['asmlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ASM));
				$this->load->view('common/header');
				$this->load->view('viewasm',$data);
		}
		public function editAsm($user_id = null)
		{
				$this->load->model('UserModel');
				$data['editasm'] = $this->UserModel->loadUserProfile($user_id);
				$this->load->view('common/header');
				$this->load->view('editasm',$data);
		}
		public function updateAsm($user_id = null)
		{
			$this->load->model('UserModel');
			$data['password'] = md5($this->input->post('password'));
			$update = $this->UserModel->updateUser($user_id, $data);
			if($update){
				$message = $this->session->set_flashdata('message', 'Updated successfully !');
				redirect(base_url('Asm/viewAsm'), 'refresh',$message);
			}
		}
		public function deleteAsm($user_id = null)
		{
			$this->load->model('UserModel');
			$deleteasm = $this->UserModel->deleteUser($user_id);
			if($deleteasm){
				$message = $this->session->set_flashdata('message', 'Account Deleted !');
				redirect(base_url('Asm/viewAsm'), 'refresh', $message);
			}
		}
		public function selectStore($asm_id = null)
		 {
			 $this->load->model('StoreModel');
			 $this->load->model('UserModel');
			 $data['storelist'] = $this->StoreModel->getStore();
			 $data['asmstorelist'] = $this->StoreModel->getStoreByAsmId($asm_id);
			 $data['asmdetail'] = $this->UserModel->getUser($asm_id);
			 $this->load->view('common/header');
			 $this->load->view('allocatestoreasm',$data);
		 }
		 public function allocateStore(){
			 $this->load->model('StoreModel');
			 $asm_id = $this->input->post('asmid');
			 $store_ids = $this->input->post('store');
			 //print_r($this->input->post());die;
			 $allocated = $this->StoreModel->allocatestore($store_ids, $asm_id);
			 if($allocated)
			 {
				 $message = $this->session->set_flashdata('message', 'Store successfully allocated!');
				 redirect(base_url('Asm/viewAsm/'), 'refresh', $message);

			 }
		 }
		 //------------------------ASM Panel------------------------------------
		 public function rateStore()
		 {
			   $this->load->model('StoreModel');
			   $asm_id = $this->session->userdata['ID'];
				 $role = $this->session->userdata['role'];
				 $data['asmstorelist'] = $this->StoreModel->getStoreByAsmId($asm_id);
				 $this->load->view('common/header');
				 $this->load->view('asmratestore', $data);
		 }
		 public function Profile()
		 {
				 $this->load->model('UserModel');
				 $asm_id = $this->session->userdata['ID'];
				 $role = $this->session->userdata['role'];
				 $data['profileasm'] = $this->UserModel->getUser($asm_id);
				 $this->load->view('common/header');
				 $this->load->view('profileasm', $data);
		 }
		 public function calendarDetails()
		 {
				 $this->load->model('MeetingModel');
				 $data['meetinglist'] = $this->MeetingModel->getTodayMeetings();
				 $this->load->view('common/header');
				 $this->load->view('asmcalendardetails',$data);
		 }
		 public function visitReportStore($store_id = null)
		 {
				 //$this->load->model('UserModel');
				 //$data['asmlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ASM));
				 $data['store_id'] = $store_id;
				 $this->load->view('common/header');
				 $this->load->view('asmvisitreport',$data);
		 }
		 public function visitReportEmployee($store_id = null)
		 {
				 //$this->load->model('UserModel');
				 //$data['asmlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ASM));
				 $data['store_id'] = $store_id;
				 $this->load->view('common/header');
				 $this->load->view('asmvisitreportemployee',$data);
		 }
		 public function createMeeting()
		 {
				 $this->load->model('StoreModel');
				 $asm_id = $this->session->userdata['ID'];
				 $data['storelist'] = $this->StoreModel->getStoreByAsmId($asm_id);
				 $this->load->view('common/header');
				 $this->load->view('asmcreatemeeting',$data);
		 }
		 public function assignMeeting()
		 {

					$asm_id = $this->session->userdata['ID'];
					$mdate = $this->input->post('meetingdate');
					$mtime =  $this->input->post('meetingtime');
					$mdatetime = $mdate.' '.$mtime;
					$meeting_date = date('Y-m-d H:i:s',strtotime($mdatetime));
					$data['store_id'] = $this->input->post('store');
					$data['meeting_date'] = $meeting_date;
					$data['meeting_time'] = $this->input->post('meetingtime');
					$data['status'] = 'Pending';
					$data['assigned_by'] = $asm_id;
					$insert =  $this->db->insert('bs_store_meeting',$data);
					if($insert)
					{
							$message = $this->session->set_flashdata('message', 'Meeting has been successfully assigned!');
							redirect(base_url('AdminPanel/Dasboard'), 'refresh', $message);

					}else{
							$message = $this->session->set_flashdata('error', 'Database Error!');
							redirect(base_url('AdminPanel/Dasboard'), 'refresh', $message);
				  }
		 }
		 public function StoreLastMeeting()
		 {
			  $this->load->model('MeetingModel');
			  $store_id = $this->input->post('store_id');
				$lastmeeting = $this->MeetingModel->getLastMeetingByStore($store_id);
				$table = "<table class='table'>
                    <thead>
                      <tr>
                        <th>Meeting Date</th>
                        <th>Meeting Time</th>
                        <th>Assigned By</th>
												<th>Status</th>
                      </tr>
                    </thead>
                    <tbody>";
									 foreach($lastmeeting as $row){
										 $mdate = date('Y-m-d',strtotime($row['meeting_date']));
										 $mtime = $row['meeting_time'];
										 $assigned_by = $row['name'].' ['.$row['role'].']';
										 $status = $row['status'];
										 $table .=  "<tr>
				                         <td>$mdate</td>
				                         <td>$mtime</td>
				                         <td>$assigned_by</td>
				                         <td>
				                           <span class='label label-outline-success'>$status</span>
				                         </td>
				                       </tr>";
									 }

                  $table .="</tbody>
                  </table>";
									echo $table;
		 }
		 public function getMeetingsByDate()
		 {
				$this->load->model('MeetingModel');
				$caldate = $this->input->post('caldate');
				$meetings = $this->MeetingModel->getMeetingsByDate($caldate);
				$table = "<div class='row' style='margin-bottom:10px'>
								<div class='col-sm-6'>
										<p><b>Date :</b>&nbsp;$caldate</p>
								</div>
						</div>"; $i=1;
									 foreach($meetings as $row){

										 $mtime = $row['meeting_time'];
										 $storename = $row['store_name'];
										 $status = $row['status'];
										 $table .=  "<div class='row'>
										 							<div class='col-sm-4'>
										 									<p><b>$i.Time :</b>&nbsp;$mtime</p>
										 							</div>
										 							<div class='col-sm-4'>
										 									<p><b>Store :</b>&nbsp;$storename</p>
										 							</div>
										 							<div class='col-sm-4'>
										 									<p><b>Status :</b>&nbsp;$status</p>
										 							</div>
										 					</div>";
									 $i++; }

									echo $table;
		 }

		 public function saveVisitReportStore($store_id)
		 {
					$this->load->model('UserModel');
					$asm_id = $this->session->userdata['ID'];

					$data['sales_front_facade'] = $this->input->post('salesFrontFacade');
					$data['sales_front_facade_remark'] = $this->input->post('salesFrontFacadeRemark');
					//$data['sales_front_facade_image'] = $this->input->post('salesFrontFacadeImage');

					$data['sales_overall_ambience'] = $this->input->post('salesOverallAmbience');
					$data['sales_overall_ambience_remark'] = $this->input->post('salesOverallAmbienceRemark');
					//$data['sales_overall_ambience_image'] = $this->input->post('salesOverallAmbienceImage');

					$data['sales_vm'] = $this->input->post('salesVm');
					$data['sales_vm_remark'] = $this->input->post('salesVmRemark');
					//$data['sales_vm_image'] = $this->input->post('salesVmImage');

					$data['sales_cash_till'] = $this->input->post('salesCashTill');
					$data['sales_cash_till_remark'] = $this->input->post('salesCashTillRemark');
					//$data['sales_cash_till_image'] = $this->input->post('salesCashTillImage');

					$data['sales_window_communication'] = $this->input->post('salesWindowCommunication');
					$data['sales_window_communication_remark'] = $this->input->post('salesWindowCommunicationRemark');
					//$data['sales_window_communication_image'] = $this->input->post('salesWindowCommunicationImage');
					 //-------
					$data['store_about_manager'] = $this->input->post('storeAboutManager');
					$data['store_about_manager_remark'] = $this->input->post('storeAboutManagerRemark');
					//$data['store_about_manager_image'] = $this->input->post('storeAboutManagerImage');

					$data['store_about_team'] = $this->input->post('storeAboutTeam');
					$data['store_about_team_remark'] = $this->input->post('storeAboutTeamRemark');
					//$data['store_about_team_image'] = $this->input->post('storeAboutTeamImage');

					$data['store_manager_communication'] = $this->input->post('storeManagerCommunication');
					$data['store_manager_communication_remark'] = $this->input->post('storeManagerCommunicationRemark');
					//$data['store_manager_communication_image'] = $this->input->post('storeManagerCommunicationImage');

					$data['store_staff_avalibility'] = $this->input->post('storeStaffAvalibility');
					$data['store_staff_avalibility_remark'] = $this->input->post('storeStaffAvalibilityRemark');
					//$data['store_staff_avalibility_image'] = $this->input->post('storeStaffAvalibilityImage');

					$data['store_uniform'] = $this->input->post('storeUniform');
					$data['store_uniform_remark'] = $this->input->post('storeUniformRemark');
					//$data['store_uniform_remark_image'] = $this->input->post('storeUniformRemarkImage');
					//--------
					$data['trial_lock_light'] = $this->input->post('trialLockLight');
					$data['trial_lock_light_remark'] = $this->input->post('trialLockLightRemark');
					//$data['trial_lock_light_image'] = $this->input->post('trialLockLightImage');

					$data['trial_overall_ambience'] = $this->input->post('trialOverallAmbience');
					$data['trial_overall_ambience_remark'] = $this->input->post('trialOverallAmbienceRemark');
					//$data['trial_overall_ambience_image'] = $this->input->post('trialOverallAmbienceImage');

					$data['trial_stock_wrack'] = $this->input->post('trialStockWrack');
					$data['trial_stock_wrack_remark'] = $this->input->post('trialStockWrackRemark');
					//$data['trial_stock_wrack_image'] = $this->input->post('trialStockWrackImage');

					$data['trial_back_store'] = $this->input->post('trialBackStore');
					$data['trial_back_store_remark'] = $this->input->post('trialBackStoreRemark');
					//$data['trial_back_store_image'] = $this->input->post('trialBackStoreImage');

					$data['trial_communication'] = $this->input->post('trialCommunication');
					$data['trial_communication_remark'] = $this->input->post('trialCommunicationRemark');
					//$data['trial_communication_image'] = $this->input->post('trialCommunicationImage');

					$data['store_id'] = $store_id;
					$asm_id = $this->session->userdata['ID'];
					$data['rated_by'] = $asm_id;
					$insert =  $this->db->insert('bs_store_rating_review',$data);
					if($insert)
					{
							$message = $this->session->set_flashdata('message', 'Report has been successfully saved!');
							redirect(base_url('Asm/visitReportEmployee/').$store_id, 'refresh', $message);

					}else{
							$message = $this->session->set_flashdata('error', 'Database Error!');
							redirect(base_url('Asm/calendarDetails/'), 'refresh', $message);
				}
		 }
		 public function saveVisitReportEmployee($store_id)
		 {
					$this->load->model('UserModel');
					$asm_id = $this->session->userdata['ID'];

					$data['dress_proper'] = $this->input->post('dressProper');
					$data['dress_proper_remark'] = $this->input->post('dressProperRemark');
					//$data['dress_proper_image'] = $this->input->post('dressProperImage');

					$data['dress_hygiene'] = $this->input->post('dressHygiene');
					$data['dress_hygiene_remark'] = $this->input->post('dressHygieneRemark');
					//$data['dress_hygiene_image'] = $this->input->post('dressHygieneImage');

					$data['gest_welcome'] = $this->input->post('gestWelcome');
					$data['gest_welcome_remark'] = $this->input->post('gestWelcomeRemark');
					//$data['gest_welcome_image'] = $this->input->post('gestWelcomeImage');

					$data['gest_help'] = $this->input->post('gestHelp');
					$data['gest_help_remark'] = $this->input->post('gestHelpRemark');
					//$data['gest_help_image'] = $this->input->post('gestHelpImage');

					$data['gest_need'] = $this->input->post('gestNeed');
					$data['gest_need_remark'] = $this->input->post('gestNeedRemark');
					//$data['gest_need_image'] = $this->input->post('gestNeedImage');
					 //-------
					$data['gest_relationship'] = $this->input->post('gestRelationship');
					$data['gest_relationship_remark'] = $this->input->post('gestRelationshipRemark');
					//$data['gest_relationship_image'] = $this->input->post('gestRelationshipImage');

					$data['gest_upt_qpc'] = $this->input->post('gestUptQpc');
					$data['gest_upt_qpc_remark'] = $this->input->post('gestUptQpcRemark');
					//$data['gest_upt_qpc_image'] = $this->input->post('gestUptQpcImage');

					$data['gest_wow_moment'] = $this->input->post('gestWowMoment');
					$data['gest_wow_moment_remark'] = $this->input->post('gestWowMomentRemark');
					//$data['gest_wow_moment_image'] = $this->input->post('gestWowMomentImage');

					$data['awareness_current_offers'] = $this->input->post('awarenessCurrentOffers');
					$data['awareness_current_offers_remark'] = $this->input->post('awarenessCurrentOffersRemark');
					//$data['awareness_current_offers_image'] = $this->input->post('awarenessCurrentOffersImage');

					$data['awareness_product_categories'] = $this->input->post('awarenessProductCategories');
					$data['awareness_product_categories_remark'] = $this->input->post('awarenessProductCategoriesRemark');
					//$data['awareness_product_categories_image'] = $this->input->post('awarenessProductCategoriesImage');
					//--------
					$data['awareness_brand'] = $this->input->post('awarenessBrand');
					$data['awareness_brand_remark'] = $this->input->post('awarenessBrandRemark');
					//$data['awareness_brand_image'] = $this->input->post('awarenessBrandImage');

					$data['awareness_targets'] = $this->input->post('awarenessTargets');
					$data['awareness_targets_remark'] = $this->input->post('awarenessTargetsRemark');
					//$data['awareness_targets_image'] = $this->input->post('awarenessTargetsImage');

					$data['drive_commitment'] = $this->input->post('driveCommitment');
					$data['drive_commitment_remark'] = $this->input->post('driveCommitmentRemark');
					//$data['drive_commitment_image'] = $this->input->post('driveCommitmentImage');

					$data['drive_monitors_actions'] = $this->input->post('driveMonitorsActions');
					$data['drive_monitors_actions_remark'] = $this->input->post('driveMonitorsActionsRemark');
					//$data['drive_monitors_actions_image'] = $this->input->post('driveMonitorsActionsImage');

					$data['drive_adapt_changes'] = $this->input->post('driveAdaptChanges');
					$data['drive_adapt_changes_remark'] = $this->input->post('driveAdaptChangesRemark');
					//$data['drive_adapt_changes_image'] = $this->input->post('driveAdaptChangesImage');

					$data['store_id'] = $store_id;
					$asm_id = $this->session->userdata['ID'];
					$data['rated_by'] = $asm_id;
					$insert =  $this->db->insert('bs_employee_rating_review',$data);
					if($insert)
					{
							$message = $this->session->set_flashdata('message', 'Report has been successfully saved!');
							redirect(base_url('Asm/calendarDetails/'), 'refresh', $message);

					}else{
							$message = $this->session->set_flashdata('error', 'Database Error!');
							redirect(base_url('Asm/calendarDetails/'), 'refresh', $message);
				}
		 }
}
