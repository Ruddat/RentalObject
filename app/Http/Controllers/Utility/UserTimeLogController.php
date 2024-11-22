<?php

namespace App\Http\Controllers\Utility;

use Illuminate\Http\Request;
use App\Models\SysUserTimeLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class UserTimeLogController extends Controller
{
    public function logTime(Request $request)
    {
        Log::info('LogTime Request received', $request->all()); // Debugging

        $user = Auth::check() ? Auth::user() : null;

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $data = $request->validate([
            'page_url' => 'required|string',
            'time_spent' => 'required|integer|min:1',
        ]);

        // Zeit hinzufügen oder aktualisieren
        $log = SysUserTimeLog::updateOrCreate(
            [
                'user_id' => $user->id,
                'page_url' => $data['page_url'],
            ],
            [
                'time_spent' => \DB::raw('time_spent + ' . $data['time_spent']),
            ]
        );

        return response()->json(['message' => 'Time logged successfully!', 'log' => $log]);
    }
}
