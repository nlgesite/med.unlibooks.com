<?php
class Support_Model extends Model{
	public function __construct() {
		parent::__construct();
	}
	
	function sendMessage(){
		
		$tblSupport=new tblSupport();
		
		
       // $tblSupport->orgId = Session::getSession('medorgid');
		
		//$tblSupport->id=0;
		$tblSupport->title=$_POST["title"];
		$tblSupport->message=$_POST["message"];
		//$tblSupport->userId=$_POST["user_id"];
		$tblSupport->userId = Session::getSession('meduser');
		$tblSupport->status="open";
		/* print_r($tblSupport);
		exit;  */
		DAOFactory::getTblSupportDAO()->insert($tblSupport);
		
		
		// ****** Email Sending ******* //
		
		$subject = 'Concern';
		$to = 'Unlibooks Administrator<ndmonteagudo@scp-ph.com>';
		//$to = 'ndmonteagudo@scp-ph.com';
		$from = $_POST['title'].'<'.$_POST['message'].'>';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from."\r\n";
		$headers .= 'BCC: <ndmonteagudo@scp-ph.com>'."\r\n";
		
		$message = 
				'<html>
					<body>
						<p><b>Users Concern:</b></p>
						<table>
							<tr>
								<td>Title: </td>
								<td>'.$_POST['title'].'</td>
							</tr>
							
						</table>
						<p>
							<p>Message:</p>
							<p><i>'.$_POST['message'].'</i></p>
						</p>
					</body>
				</html>';
		
		
		
		if (!mail($to,$subject,$message,$headers)){
			echo 'There is an error while sending your request. Please try to check your internet connection and send a request again.';
			exit;
		}
	return $tblSupport;
		
   } 
	
	
	
	function sendComments(){
		
		$tblComment=new tblComment();
		
		
       // $tblSupport->orgId = Session::getSession('medorgid');
		
		//$tblSupport->id=0;
		$tblComment->title=$_POST["title"];
		$tblComment->message=$_POST["message"];
		//$tblSupport->userId=$_POST["user_id"];
		$tblComment->userId = Session::getSession('meduser');
		$tblComment->status="open";
		/* print_r($tblSupport);
		exit;  */
		DAOFactory::getTblCommentDAO()->insert($tblComment);
		
		
		// ****** Email Sending ******* //
		
		$subject = 'Concern';
		$to = 'Unlibooks Administrator<ndmonteagudo@scp-ph.com>';
		//$to = 'ndmonteagudo@scp-ph.com';
		$from = $_POST['title'].'<'.$_POST['message'].'>';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from."\r\n";
		$headers .= 'BCC: <ndmonteagudo@scp-ph.com>'."\r\n";
		
		$message = 
				'<html>
					<body>
						<p><b>Users Concern:</b></p>
						<table>
							<tr>
								<td>Title: </td>
								<td>'.$_POST['title'].'</td>
							</tr>
							
						</table>
						<p>
							<p>Message:</p>
							<p><i>'.$_POST['message'].'</i></p>
						</p>
					</body>
				</html>';
		
		
		
		if (!mail($to,$subject,$message,$headers)){
			echo 'There is an error while sending your request. Please try to check your internet connection and send a request again.';
			exit;
		}
	return $tblComment2;
		
   } 
	
	
	function sendReferrals(){
		
		$tblReferral=new tblReferral();
		
		//$tblSupport->id=0;
		$tblReferral->title=$_POST["title"];
		$tblReferral->subject=$_POST["subject"];
		$tblReferral->message=$_POST["message"];
		$tblReferral->emailOfFriend=$_POST["emailOfFriend"];
		$tblReferral->nameOfFriend=$_POST["nameOfFriend"];
		$tblReferral->userId = Session::getSession('meduser');
		/* print_r($tblSupport);
		exit;  */
		DAOFactory::getTblReferralDAO()->insert($tblReferral);
		
		
		// ****** Email Sending ******* //
		
		$subject = 'Concern';
		$to = 'Unlibooks Administrator<ndmonteagudo@scp-ph.com>';
		//$to = 'ndmonteagudo@scp-ph.com';
		$from = $_POST['title'].'<'.$_POST['message'].'>';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from."\r\n";
		$headers .= 'BCC: <ndmonteagudo@scp-ph.com>'."\r\n";
		
		$message = 
				'<html>
					<body>
						<p><b>Users Concern:</b></p>
						<table>
							<tr>
								<td>Name of freind: </td>
								<td>'.$_POST['nameOfFriend'].'</td>
							</tr>
							<tr>
								<td>Email of freind: </td>
								<td>'.$_POST['emailOfFriend'].'</td>
							</tr>
							
						</table>
						<p>
							<p>Message:</p>
							<p><i>'.$_POST['message'].'</i></p>
						</p>
					</body>
				</html>';
		
		
		
		if (!mail($to,$subject,$message,$headers)){
			echo 'There is an error while sending your request. Please try to check your internet connection and send a request again.';
			exit;
		}
	return $tblReferral2;
		
   } 
		
		
}
?>