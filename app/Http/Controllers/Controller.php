<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use View;
use App;
use Mpdf\Mpdf;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        return View::make('index');
    }

    public function getTemplate()
    {
        $today = Carbon::today();
        $owner = (object)[
            'name' => 'Adam',
            'jobtitle' => 'Smith'
        ];
        $approver = (object)[
            'name' => 'Jack',
            'jobtitle' => 'Wood'
        ];
        $reviewer = (object)[
            'name' => 'James',
            'jobtitle' => 'Bond'
        ];
        $interval = '1 year';
        $audience = 'Bob';
        $name = 'Danny';

        return View::make('template', compact('today', 'owner', 'approver', 'reviewer', 'interval', 'audience', 'name'));
    }

    public function formSubmit(Request $request)
    {
        $input = $request->all();

        $today = Carbon::today();
        $owner = (object)[
            'name' => $input['owner_name'],
            'jobtitle' => $input['owner_title'],
        ];
        $approver = (object)[
            'name' => $input['approver_name'],
            'jobtitle' => $input['approver_title'],
        ];
        $reviewer = (object)[
            'name' => $input['reviewer_name'],
            'jobtitle' => $input['reviewer_title'],
        ];
        $interval = $input['interval'];
        $audience = $input['audience'];
        $name = $input['name'];

        return View::make('editor', compact('today', 'owner', 'approver', 'reviewer', 'interval', 'audience', 'name'));
    }

    public function createPDF(Request $request)
    {
        $input = $request->all();

        $mpdf = new Mpdf();
        $mpdf->WriteHTML($input['pdf-html']);
        $mpdf->Output('doc.pdf', 'D');
    }
}
