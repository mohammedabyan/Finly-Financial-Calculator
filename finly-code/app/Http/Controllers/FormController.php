<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Handle the form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handleForm(Request $request)
    {
       
        // Access form data using the $request object
        $sales = $request->input('Sales');
        $assets = $request->input('Assets');
        $inventory = $request->input('Inventory');

        // Access form data from the Expenses card
        $cogs = $request->input('COGS');
        $liabilities = $request->input('Liabilities');
        $operatingExpenses = $request->input('operatingExpenses');
        
        /*
        $validatedData = $request->validate([
            'Sales' => 'required|numeric|min:0',
            'Assets' => 'required|numeric|min:0',
            'Inventory' => 'required|numeric|min:0',
            'COGS' => 'required|numeric|min:0',
            'Liabilities' => 'required|numeric|min:0',
            'operatingExpenses' => 'required|numeric|min:0',
        ]);

        */
        // If validation passes, you can process the data
        //$message = "Form submitted successfully! Here are the details:\n";
        //$message .= "Sales: {$validatedData['Sales']}, Assets: {$validatedData['Assets']}, Inventory: {$validatedData['Inventory']}\n";
        //$message .= "COGS: {$validatedData['COGS']}, Liabilities: {$validatedData['Liabilities']}, Operating Expenses: {$validatedData['operatingExpenses']}\n";

        //return response()->json(['message' => $message]);
        $message = "Form submitted successfully! Here are the details:\n";
        $message .= "Sales: $sales, Assets: $assets, Inventory: $inventory\n";
        $message .= "COGS: $cogs, Liabilities: $liabilities, Operating Expenses: $operatingExpenses\n";

        return response()->json(['message' => $message]);

    }
}
