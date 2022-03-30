<?php

defined('_EXEC') or die;

class Functions
{
    public static function api($params)
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

        curl_setopt($connection, CURLOPT_URL, Configuration::$foxior_id_connection . $request);
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($connection);

        curl_close($connection);

        $response = json_decode($response, true);

        if ($response['status'] == 'success')
            return $response['data'];
        else
            return [];
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