<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Notifications;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    //notifications
    public function index()
    {
        $notifications = DB::table('notifications')->orderBy('id', 'desc')->get();
        return view('notifications/index', compact('notifications'));
    }
    public function notifications_add()
    {
        return view('notifications/notifications_add');
    }

    public function notifications_store(Request $request)
    {
        $validatedData = $request->validate([
            "user_upload_id" => 'required',
            "type" => 'required',
            "notify_to" => 'required',
            "title" => 'required',
            "message" => 'required',
            "is_read" => 'required',
            ]);

        $notifications = new Notifications();

        $notifications->user_upload_id = $request->user_upload_id;
        $notifications->type = $request->type;
        $notifications->notify_to = $request->notify_to;
        $notifications->title = $request->title;
        $notifications->message = $request->message;
        $notifications->is_read = $request->is_read;
        $notifications->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

    public function notifications_delete($id)
    {

            $artist = DB::table('notifications')->where('id', $id);
            $artist->delete();
            return redirect()->back()->with(["success" => "Artist and image deleted successfully."]);
    }


    public function notifications_edit($id)
    {
        $notifications = DB::table("notifications")->where("id", $id)->first();
        return view("notifications/edit", compact("notifications"));
    }

    public function notifications_update(Request $request)
    {
        $notifications = Notifications::findOrFail($request->id);

        $notifications->user_upload_id = $request->user_upload_id;
        $notifications->type = $request->type;
        $notifications->notify_to = $request->notify_to;
        $notifications->title = $request->title;
        $notifications->message = $request->message;
        $notifications->is_read = $request->is_read;
        $notifications->save();
        return redirect()->back()->with(["success" => 'Data has been successfully saved.']);
    }

}
