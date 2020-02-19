<?php
/*
*  Title: Email Helper
*  Version: 1.0 from 29 January 2017
*  Author: Fadli Saad
*  Website: https://fadli.my
*/
use Aura\Sql\ExtendedPdo;
Class Email_helper extends Controller {

	protected $mail;

	public function __construct()
	{
		$this->mail = new PHPMailer;
		$this->pdo = new ExtendedPdo(
		    'mysql:host='.getenv('DB_HOST').';dbname='.getenv('DB_NAME').'',
		    ''.getenv('DB_USER').'',
		    ''.getenv('DB_PASS').'',
		    [], // driver attributes/options as key-value pairs
		    []  // queries to execute after connection
		);
	}
	
	function send($data)
	{
		global $config;
		
		# Load env
		$dotenv = new Dotenv\Dotenv(ROOT_DIR);
		$dotenv->load();

		$email = $data['email'];
		$subject = $data['subject'];
		$content = $data['content'];

		$this->mail->isSMTP();
		//$this->mail->SMTPDebug = 4;
		$this->mail->Host = getenv('SMTP_HOST');
		$this->mail->Username = getenv('SMTP_USER');
		$this->mail->Password = getenv('SMTP_PASS');
		$this->mail->Port = getenv('SMTP_PORT');

		$this->mail->setFrom($config['from_email'], $config['from_name']);
		$this->mail->addAddress($email);

		$this->mail->IsHTML(true);
		$this->mail->Subject = $subject;
		$this->mail->Body = $content;
		$this->mail->AltBody = "Please use a compatible email viewer to display this email.";

		if(isset($data['attachment'])) $this->mail->addAttachment($data['attachment']);

		# Important setting for Mailtrap.io 
		if(getenv('ENVIRONMENT') == 'production'){

			$this->mail->SMTPAuth = true;
			$this->mail->SMTPSecure = 'tls';
			
		}else{

			$this->mail->SMTPAuth = false;
			$this->mail->SMTPOptions = array(
			    'ssl' => array(
			        'verify_peer' => false,
			        'verify_peer_name' => false,
			        'allow_self_signed' => true
			    )
			);
		}

		if(!$this->mail->send()) {
			$msg = false;
		} else {
			$msg = true;

			# add email to log
			$stm  = 'INSERT INTO email_log (recipient, subject, body) VALUE (:recipient, :subject, :body)';
			$bind = array(
				'recipient' => $data['email'],
				'subject' => $data['subject'],
				'body' => $data['content']
			);
			$this->pdo->fetchAffected($stm, $bind);
			$this->mail->clearAddresses(); # Important for sending 2 separate email in one connection
 		}
 		return $msg;
	}
}
