<?php

namespace App\Http\Controllers;

use \http\Env\Response;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class LighthouseReportController extends Controller
{
    /**
     * @param  Request  $request
     * @return Response
     */
    public function all(Request $request){
        $connection = DB::table('reports');

        $reports = $connection->get();

        $this->addData('reports',$reports);
        $this->addMessage('success','All your Reports.');

        return $this->getResponse();
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function id(Request $request, int $id){
        $shop = DB::table('reports')
            ->where('id','=',$id);

        $count = $report->count();

        if($count === 1){
            $this->addData('report',$report->first());
        }
        else{
            $this->addMessage('success','Report doesnt exists.');
        }

        return $this->getResponse();
    }
}
