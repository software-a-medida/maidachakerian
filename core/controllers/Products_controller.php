<?php

defined('_EXEC') or die;

class Products_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (Format::exist_ajax_request() == true)
		{
			if ($_POST['action'] == 'get_unique_product')
			{
				$data = Functions::api(['get_unique_product', $_POST['id']]);

				if (!empty($data))
				{
					$main_1_categories = Functions::array_to_hash_string([$data['categories'], '1', 'all', 'string']);
					$main_2_categories = Functions::array_to_hash_string([$data['categories'], '2', 'all', 'string']);
					$main_3_categories = Functions::array_to_hash_string([$data['categories'], '3', 'all', 'string']);
					$color_categories = Functions::array_to_hash_string([$data['categories'], '5', 'all', 'array']);
					$size_categories = Functions::array_to_hash_string([$data['categories'], '4', 'all', 'array']);

					$data['categories'] = [
						'main' => $main_1_categories . ' ' . $main_2_categories . ' ' . $main_3_categories,
						'color' => $color_categories,
						'size' => $size_categories
					];

					echo json_encode([
						'status' => 'success',
						'data' => $data
					]);
				}
				else
				{
					echo json_encode([
						'status' => 'error'
					]);
				}
			}

			if ($_POST['action'] == 'filters')
			{
				$filters = [];

				if (!empty($_POST['categories']))
				{
					$data = Functions::api(['get_filters_products', Functions::array_to_url_string([$_POST['categories']])]);

					if (!empty($data))
					{
						$filters['products'] = $data;
						$filters['categories'] = $_POST['categories'];
					}
				}

				Session::set_value('filters', $filters);

				echo json_encode([
					'status' => 'success'
				]);
			}
		}
		else
		{
			$template = $this->view->render($this, 'index');

			define('_title', Configuration::$web_page . ' {$lang.products}');

			echo $template;
		}
	}
}