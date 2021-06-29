<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Project;

class LineNotificationController extends Controller
{
    public function index()
    {
        $dateAlert = date("Y-m-d", strtotime('+7 days'));
        $projects = Project::with('customer')->where('enddate', $dateAlert)->get();

        if(isset($projects)) {
            foreach($projects as $project) {
                $this->lineNotify($project->name, $project->customer->name, 
                                    $project->customer->company_info, $project->customer->mobile, 
                                    $project->totalamt, $project->enddate
                                );
            }
        }

        return response()->noContent(200);
    }

    private function lineNotify($name, $c_name, $c_info, $c_mobile, $totalamt, $enddate)
    {
        $url        = 'https://notify-api.line.me/api/notify';
        $token      = 'WSgOvjxGcxChUatJ567684OqbGoEpOlmGbFreRNIaZ5';
        $headers    = [
                        'Content-Type: application/x-www-form-urlencoded',
                        'Authorization: Bearer '.$token
                    ];
        $fields     = 'message=แจ้งเตือนรอบบิล'. PHP_EOL .'รอบบิลวันที่ : '. $enddate .' '. PHP_EOL .
                        'โปรเจค : '. $name .' '. PHP_EOL .
                        'ลูกค้า : '. $c_name .' - '. $c_info. ' '. PHP_EOL .
                        'เบอร์โทร : '. $c_mobile .' '. PHP_EOL .
                        'ราคา : '. $totalamt;

        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url);
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $ch );
        curl_close( $ch );

        var_dump($result);
        $result = json_decode($result,TRUE);
    }
}
