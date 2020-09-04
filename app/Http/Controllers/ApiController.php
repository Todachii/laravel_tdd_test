<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CustomerService;

class ApiController extends Controller
{
    public function getCustomers(CustomerService $customer_service)
    {
        return response()->json($customer_service->getCustomers());
    }

    public function postCustomers(Request $request, CustomerService $customer_service)
    {
        $this->validate(
            $request,
            ['name' => 'required']
        );
        $customer_service->addCustomer($request->json('name'));
    }

    public function putCustomers(Request $request)
    {
    }

    public function deleteCustomers(Request $request)
    {
    }

    public function getReports()
    {
        return response()->json(\App\Report::query()->get());
    }

    public function postReports(Request $request)
    {
    }

    public function putReports(Request $request)
    {
    }

    public function deleteReports(Request $request)
    {
    }
}
