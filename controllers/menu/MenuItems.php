<?php

namespace app\controllers\menu;

class MenuItems
{

    public function mainMenuBarItems()
    {
        return [
            "Category" => [
                "Kids" => "/category/kids",
                "Men" => "/category/men",
                "Ladies" => [
                    "Dress" => "/category/dress",
                    "Shoes" => "/category/shoes"
                ]
            ],
            "About" => "/about",
            "Contacts" => "/contact",
            "More" => [
                "FAQ" => "/faq",
                "Terms &amp; Conditions" => "/terms-conditions"
            ]
        ];
    }


    public function categoryMenu()
    {

        return [
            "Category" => "/category/category",
            "Category 1" => "/category/category",
            "Category 2" => "/category/category",
            "Category 3" => "/category/category",
            "Category 4" => "/category/category",
            "Category 5" => "/category/category",
            "Category 6" => "/category/category",
            "Category 7" => "/category/category",
            "Category 8" => "/category/category"
        ];
    }


    public function adminMenu()
    {
        return [
            "Orders" => "/admin/order/list",
            "Products" => [
                "List" => "/admin/product/list",
                "Register" => "/admin/product/register"
            ],
            "Customers" => "/admin/customer/list",
            "User" => [
                "Login" => "/admin/login",
                "Register" => "/admin/register"
            ]
        ];
    }
}
