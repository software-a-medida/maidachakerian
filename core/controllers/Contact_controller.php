<?php

defined('_EXEC') or die;

class Contact_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (Format::exist_ajax_request() == true)
		{
			$errors = [];

			if (!isset($_POST['fullname']) OR empty($_POST['fullname']))
				array_push($errors, '{$lang.not_empty_fullname}');

			if (!isset($_POST['email']) OR empty($_POST['email']))
				array_push($errors, '{$lang.not_empty_email}');

			if (!isset($_POST['phone']) OR empty($_POST['phone']))
				array_push($errors, '{$lang.not_empty_phone}');
			
			if (empty($errors))
			{
				$mail = new Mailer(true);

				try
				{
					$mail->setFrom('noreply@' . Configuration::$domain, Configuration::$web_page);
					$mail->addAddress(Configuration::$contact_email, Configuration::$web_page);
					$mail->Subject = 'Nuevo contacto';
					$mail->Body = 'Nombre completo: ' . $_POST['fullname'] . '<br>Email: ' . $_POST['email'] . '<br>Teléfono: ' . $_POST['phone'] . '<br>Mensaje: ' . $_POST['message'];
					$mail->send();
				}
				catch (Exception $e) {}

				echo json_encode([
					'status' => 'success',
					'message' => '{$lang.thank_for_contact_us}'
				]);
			}
			else
			{
				echo json_encode([
					'status' => 'error',
					'errors' => $errors
				]);
			}
		}
		else
		{
			$template = $this->view->render($this, 'index');

			define('_title', Configuration::$web_page . ' {$lang.contact}');

			echo $template;
		}
	}
}