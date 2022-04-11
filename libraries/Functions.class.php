<?php

defined('_EXEC') or die;

class Functions
{
    /* public static function api($params)
    {
        $connection = curl_init();

        $request = '/' . Configuration::$foxior_id_account;

        if ($params[0] == 'get_unique_product')
            $request .= '/products/get_unique_product/' . $params[1];
        else if ($params[0] == 'get_all_products')
            $request .= '/products/get_all_products';
        else if ($params[0] == 'get_new_arrivals_products')
            $request .= '/products/get_products_by_category/' . Configuration::$foxior_id_new_arrivals_products_category;
        else if ($params[0] == 'get_we_recommend_you_products')
            $request .= '/products/get_products_by_category/' . Configuration::$foxior_id_we_recommend_you_products_category;
        else if ($params[0] == 'get_filters_products')
            $request .= '/products/get_products_by_category/' . $params[1];
        else if ($params[0] == 'get_all_categories')
            $request .= '/products/get_all_categories';
        else if ($params[0] == 'get_main_1_categories')
            $request .= '/products/get_categories_by_level/' . Configuration::$foxior_id_main_1_categories_level;
        else if ($params[0] == 'get_main_2_categories')
            $request .= '/products/get_categories_by_level/' . Configuration::$foxior_id_main_2_categories_level;
        else if ($params[0] == 'get_main_3_categories')
            $request .= '/products/get_categories_by_level/' . Configuration::$foxior_id_main_3_categories_level;
        else if ($params[0] == 'get_color_categories')
            $request .= '/products/get_categories_by_level/' . Configuration::$foxior_id_color_categories_level;
        else if ($params[0] == 'get_size_categories')
            $request .= '/products/get_categories_by_level/' . Configuration::$foxior_id_size_categories_level;
        else if ($params[0] == 'get_all_areas')
            $request .= '/onlineshop/get_all_areas';
        else if ($params[0] == 'get_unique_account')
            $request .= '/accounts/get_unique_account';

        curl_setopt($connection, CURLOPT_URL, Configuration::$foxior_id_connection . $request);
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($connection);

        curl_close($connection);

        $response = json_decode($response, true);

        if ($response['status'] == 'success')
            return $response['data'];
        else
            return [];
    } */

    public static function api($params)
    {
        $request[0] = Configuration::$foxior_id_account;

        if ($params[0] == 'get_unique_product')
        {
            $request[1] = 'get_unique_product';
            $request[2] = $params[1];
        }
        else if ($params[0] == 'get_all_products')
            $request[1] = 'get_all_products';
        else if ($params[0] == 'get_new_arrivals_products')
        {
            $request[1] = 'get_products_by_category';
            $request[2] = Configuration::$foxior_id_new_arrivals_products_category;
        }
        else if ($params[0] == 'get_we_recommend_you_products')
        {
            $request[1] = 'get_products_by_category';
            $request[2] = Configuration::$foxior_id_we_recommend_you_products_category;
        }
        else if ($params[0] == 'get_all_categories')
            $request[1] = 'get_all_categories';
        else if ($params[0] == 'get_main_1_categories')
        {
            $request[1] = 'get_categories_by_level';
            $request[2] = Configuration::$foxior_id_main_1_categories_level;
        }
        else if ($params[0] == 'get_main_2_categories')
        {
            $request[1] = 'get_categories_by_level';
            $request[2] = Configuration::$foxior_id_main_2_categories_level;
        }
        else if ($params[0] == 'get_main_3_categories')
        {
            $request[1] = 'get_categories_by_level';
            $request[2] = Configuration::$foxior_id_main_3_categories_level;
        }
        else if ($params[0] == 'get_color_categories')
        {
            $request[1] = 'get_categories_by_level';
            $request[2] = Configuration::$foxior_id_color_categories_level;
        }
        else if ($params[0] == 'get_size_categories')
        {
            $request[1] = 'get_categories_by_level';
            $request[2] = Configuration::$foxior_id_size_categories_level;
        }
        else if ($params[0] == 'get_all_areas')
            $request[1] = 'get_all_areas';
        else if ($params[0] == 'get_unique_account')
            $request[1] = 'get_unique_account';

        $response = Functions::read($request);

        if (!empty($response))
            return $response;
        else
            return [];
    }

    public static function read($params)
    {
        $database = new Medoo();
        $query = null;

        if ($params[1] == 'get_unique_product')
        {
            $query = $database->select('products', [
                '[>]accounts' => [
                    'account' => 'id'
                ],
                '[>]products_unities' => [
                    'unity' => 'id'
                ]
            ], [
                'products.id',
                'products.avatar',
                'products.name',
                'products.description',
                'products_unities.name(unity)',
                'products.price',
                'accounts.currency',
                'products.categories',
                'products.gallery'
            ], [
                'products.id' => $params[2]
            ]);

            if (!empty($query))
            {
                $query[0]['unity'] = json_decode($query[0]['unity'], true);
                $query[0]['categories'] = json_decode($query[0]['categories'], true);

                foreach ($query[0]['categories'] as $key => $value)
                {
                    $value = $database->select('products_categories', [
                        'id',
                        'name',
                        'level'
                    ], [
                        'id' => $value
                    ]);

                    if (!empty($value))
                        $query[0]['categories'][$key] = $value[0];
                    else
                        unset($query[0]['categories'][$key]);
                }

                $query[0]['gallery'] = json_decode($query[0]['gallery'], true);
                $query = $query[0];
            }
        }
        else if ($params[1] == 'get_all_products' OR $params[1] == 'get_products_by_category')
        {
            $query = $database->select('products', [
                '[>]accounts' => [
                    'account' => 'id'
                ]
            ], [
                'products.id',
                'products.avatar',
                'products.name',
                'products.description',
                'products.price',
                'accounts.currency',
                'products.categories'
            ], [
                'AND' => [
                    'products.account' => $params[0],
                    'products.type' => 'sale_menu',
                    'products.online_shop' => true,
                    'products.blocked' => false
                ]
            ]);

            if ($params[1] == 'get_products_by_category')
            {
                $params[2] = explode('-', $params[2]);
                $filters = [];

                foreach ($query as $key => $value)
                {
                    $query[$key]['categories'] = json_decode($value['categories'], true);

                    foreach ($params[2] as $subkey => $subvalue)
                    {
                        if (in_array($subvalue, $query[$key]['categories']))
                            array_push($filters, $query[$key]);
                    }
                }

                $query = $filters;
            }

            foreach ($query as $key => $value)
            {
                if ($params[1] == 'get_all_products')
                    $query[$key]['categories'] = json_decode($value['categories'], true);

                foreach ($query[$key]['categories'] as $subkey => $subvalue)
                {
                    $subvalue = $database->select('products_categories', [
                        'name',
                        'level'
                    ], [
                        'id' => $subvalue
                    ]);

                    if (!empty($subvalue))
                        $query[$key]['categories'][$subkey] = $subvalue[0];
                    else
                        unset($query[$key]['categories'][$subkey]);
                }
            }
        }
        else if ($params[1] == 'get_all_categories' OR $params[1] == 'get_categories_by_level')
        {
            $AND = [
                'account' => $params[0],
                'sale_menu' => true,
                'online_shop' => true,
                'blocked' => false
            ];

            if ($params[1] == 'get_categories_by_level')
                $AND['level'] = $params[2];

            $query = $database->select('products_categories', [
                'id',
                'avatar',
                'name'
            ], [
                'AND' => $AND
            ]);
        }
        else if ($params[1] == 'get_all_areas')
        {
            $query = $database->select('online_shop_areas', [
                '[>]accounts' => [
                    'account' => 'id'
                ]
            ], [
                'online_shop_areas.id',
                'online_shop_areas.name',
                'online_shop_areas.price',
                'accounts.currency'
            ], [
                'AND' => [
                    'online_shop_areas.account' => $params[0],
                    'online_shop_areas.blocked' => false
                ]
            ]);
        }
        else if ($params[1] == 'get_unique_account')
        {
            $query = $database->select('accounts', [
                'id',
                'currency'
            ], [
                'id' => $params[0]
            ]);

            if (!empty($query))
                $query = $query[0];
        }

        return $query;
    }

    public static function array_to_hash_string($params)
    {
        foreach ($params[0] as $key => $value)
        {
            if ($value['level'] != $params[1])
                unset($params[0][$key]);
        }

        if (!empty($params[0]))
        {
            $params[0] = array_values($params[0]);

            if ($params[2] == 'one')
            {
                if ($params[3] == 'array')
                    return $params[0][0];
                else if ($params[3] == 'string')
                    return '#' . $params[0][0]['name'];
            }
            else if ($params[2] == 'all')
            {
                if ($params[3] == 'array')
                    return $params[0];
                else if ($params[3] == 'string')
                {
                    $str = '';

                    foreach ($params[0] as $value)
                        $str .= '#' . $value['name'] . ' ';

                    $str = substr($str, 0, -1);

                    return $str;
                }
            }
            else if ($params[2] == 'resumed')
                return (count($params[0]) == 1) ? '#' . $params[0][0]['name'] : '#{$lang.many}' . ' ' . $params[4];
        }
        else
        {
            if ($params[3] == 'array')
                return [];
            else if ($params[3] == 'string')
                return '';
        }
    }

    public static function array_to_url_string($params)
    {        
        if (!empty($params[0]))
        {
            $str = '';

            foreach ($params[0] as $value)
                $str .= $value . '-';

            $str = substr($str, 0, -1);

            return $str;
        }
        else
            return '';
    }

    public static function string_to_short($params)
	{
        if (!empty($params[0]))
		    return (strlen(strip_tags($params[0])) > $params[1]) ? substr(strip_tags($params[0]), 0, $params[1]) . '. . .' : substr(strip_tags($params[0]), 0, $params[1]);
        else
            return '';
    }
}