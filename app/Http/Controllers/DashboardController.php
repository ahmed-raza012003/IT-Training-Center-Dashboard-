<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('content.index');
    }

    public function create()
    {
        return view('content.create');
    }

    public function list()
    {
        return view('content.list');
    }

    public function edit()
    {
        return view('content.edit');
    }

    public function catagory_create()
    {
        return view('content.catagory.create');
    }

    public function catagory_list()
    {
        return view('content.catagory.list');
    }

    public function catagory_edit()
    {
        return view('content.catagory.edit');
    }

    public function warehouse()
    {
        return view('content.inventory.warehouse');
    }

    public function receivedorders()
    {
        return view('content.inventory.receivedorders');
    }

    public function order_list()
    {
        return view('content.order.list');
    }

    public function order_cart()
    {
        return view('content.order.cart');
    }

    public function order_checkout()
    {
        return view('content.order.checkout');
    }

    public function purchases_list()
    {
        return view('content.purchases.list');
    }

    public function purchases_order()
    {
        return view('content.purchases.order');
    }

    public function purchases_return()
    {
        return view('content.purchases.return');
    }

    public function attributes_create()
    {
        return view('content.attributes.create');
    }

    public function attributes_list()
    {
        return view('content.attributes.list');
    }

    public function attributes_edit()
    {
        return view('content.attributes.edit');
    }

    public function invoices_create()
    {
        return view('content.invoices.create');
    }

    public function invoices_list()
    {
        return view('content.invoices.list');
    }

    public function invoices_details()
    {
        return view('content.invoices.details');
    }

    public function profile_profile()
    {
        return view('content.profile.profile');
    }

    public function roles_create()
    {
        return view('content.roles.create');
    }

    public function roles_list()
    {
        return view('content.roles.list');
    }

    public function roles_edit()
    {
        return view('content.roles.edit');
    }
    
    
}
