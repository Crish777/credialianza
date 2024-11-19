<?php 
/**
 * Template Name: z- Send By Mail
 *
 */
get_header(); 

$postID = get_the_ID();
$sendData = false;
$errorType = '';

if(isset($_POST['request']) && ($_POST['request']=='contact')){
	
	$contactFName = (isset($_POST['contactFName']))?$_POST['contactFName']:'';
	$contactLName = (isset($_POST['contactLName']))?$_POST['contactLName']:'';
	$contactEmail = (isset($_POST['contactEmail']))?$_POST['contactEmail']:'';
	$contactPhone = (isset($_POST['contactPhone']))?$_POST['contactPhone']:'';	
	
	$emailTo1 = '';
	$emailTo2 = '';	
	
	if(trim($contactFName)!='' && trim($contactLName)!='' && trim($contactEmail)!='' && trim($contactPhone)!=''){
		
		if(is_email($contactEmail)){
			
			$email_to = $emailTo1 .', '. $emailTo2;
			
			$email_subject = 'Email from the pillar page.';
			
			$email_message .= 'First Name: ' . $contactFName . "\n";
			$email_message .= 'Last Name: ' . $contactLName . "\n";
			$email_message .= 'Phone: ' . $contactPhone . "\n";
			
			$headers = 'From: '.$contactEmail."\r\n".
			'Reply-To: '.$contactEmail."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			
			$mail = mail($email_to, $email_subject, $email_message, $headers);			
			
			if($mail){
				
				$sendData = true;
				
			}else{
				
				$errorType="There's been an error. Please try again.";
				
			}
			
		}else{
			
			$errorType='Invalid Email.';
			
		}
		
	}else{
		
		$errorType='Incomplete or non-existent information.';
		
	}	
	
}

?>

		
        
<?php get_footer(); ?>
