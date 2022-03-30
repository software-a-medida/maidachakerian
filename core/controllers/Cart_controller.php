<?php

defined('_EXEC') or die;

class Cart_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (Format::exist_ajax_request() == true)
		{
			if ($_POST['action'] == 'add_to_cart')
			{
				$errors = [];

				if (!isset($_POST['color']) OR empty($_POST['color']))
					array_push($errors, '{$lang.not_empty_color}');

				if (!isset($_POST['size']) OR empty($_POST['size']))
					array_push($errors, '{$lang.not_empty_size}');

				if (!isset($_POST['amount']) OR empty($_POST['amount']))
					array_push($errors, '{$lang.not_empty_amount}');
				
				if (empty($errors))
				{
					$data = Functions::api(['get_unique_product', $_POST['id']]);

					if (!empty($data))
					{
						if (!empty(Session::get_value('cart')))
							$cart = Session::get_value('cart');
						else
						{
							$cart = [
								'products' => [],
								'amount' => 0,
								'total' => 0
							];
						}

						$cart['products'][$data['id']] = [
							'details' => $data,
							'color' => $_POST['color'],
							'size' => $_POST['size'],
							'amount' => $_POST['amount'],
							'total' => $data['price'] * $_POST['amount']
						];

						foreach ($cart['products'][$data['id']]['details']['categories'] as $value)
						{
							if ($_POST['color'] == $value['id'])
								$cart['products'][$data['id']]['color'] = $value;

							if ($_POST['size'] == $value['id'])
								$cart['products'][$data['id']]['size'] = $value;
						}

						$cart['amount'] = 0;
						$cart['total'] = 0;

						foreach ($cart['products'] as $value)
						{
							$cart['amount'] = $cart['amount'] + $value['amount'];
							$cart['total'] = $cart['total'] + $value['total'];
						}

						Session::set_value('cart', $cart);

						echo json_encode([
							'status' => 'success',
							'message' => '{$lang.product_added_to_cart}'
						]);
					}
					else
					{
						array_push($errors, '{$lang.not_product_added_to_cart}');

						echo json_encode([
							'status' => 'error',
							'errors' => $errors
						]);
					}
				}
				else
				{
					echo json_encode([
						'status' => 'error',
						'errors' => $errors
					]);
				}
			}

			if ($_POST['action'] == 'remove_to_cart')
			{
				$cart = Session::get_value('cart');

				unset($cart['products'][$_POST['id']]);

				$cart['amount'] = 0;
				$cart['total'] = 0;

				foreach ($cart['products'] as $value)
				{
					$cart['amount'] = $cart['amount'] + $value['amount'];
					$cart['total'] = $cart['total'] + $value['total'];
				}

				Session::set_value('cart', $cart);

				echo json_encode([
					'status' => 'success',
					'message' => '{$lang.product_removed_to_cart}'
				]);
			}
		}
		else
		{
			$template = $this->view->render($this, 'index');

			define('_title', Configuration::$web_page . ' {$lang.cart}');

			echo $template;
		}
	}
}
