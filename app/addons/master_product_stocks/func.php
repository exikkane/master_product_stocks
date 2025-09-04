<?php

function fn_master_product_stocks_get_products_before_select(&$params) {
    if (isset($params['is_vendor_products_list']) && $params['is_vendor_products_list']) {
        $params['hide_out_of_stock_products'] = true;
    }
}