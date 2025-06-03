<?php

namespace App\Http\Controllers\Attendance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use MehediJaman\LaravelZkteco\LaravelZkteco;

class BiometricController extends Controller
{
    public function device_ip()
    {
        if (session()->exists('dip')) {
            $deviceip = session('dip');
        } else {
            session()->put('dip', '203.17.65.230');
            $deviceip = '203.17.65.230';
        }
        return $deviceip;
    }

    public function device_setip(Request $request)
    {

        session()->put('dip', $request->deviceip);
        Session::flash('success', 'Device IP updated successfully.');
        return redirect()->back();
    }

    public function device_information()
    {

        // if (function_exists('socket_create')) {
        //     dd("Sockets extension is enabled.");
        // } else {
        //     dd("Sockets extension is not enabled.");
        // }
        $deviceip = $this->device_ip();
        $zk = new LaravelZkteco($deviceip, 4370);

        $zk->connect();
        // $zk->disableDevice();

        $data = [
            'deviceip'           => $deviceip,
            'deviceVersion'      => $zk->version(),
            'deviceOSVersion'    => $zk->osVersion(),
            'devicePlatform'     => $zk->platform(),
            'devicefmVersion'    => $zk->fmVersion(),
            'deviceworkCode'     => $zk->workCode(),
            'devicessr'          => $zk->ssr(),
            'devicepinWidth'     => $zk->pinWidth(),
            'deviceserialNumber' => $zk->serialNumber(),
            'devicedeviceName'   => $zk->deviceName(),
            'devicegetTime'      => $zk->getTime()
        ];
        return view('admin.pages.attendance.device-information', $data);
    }

    public function device_attendance_data()
    {
        set_time_limit(120);
        ini_set('max_execution_time', 120);
        $deviceip = $this->device_ip();
        $zk = new LaravelZkteco($deviceip, 4370);
        $zk->connect();
        $zk->enableDevice();

        // $attendances = $zk->getAttendance(3);
        $singleattendances = $zk->getSingleAttendance(1, 106);

        dd($singleattendances);
    }
}
