<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CRM\Leeds;
use App\Models\Project\ProjectCategory;
use App\Models\CRM\Meeting;
use App\Models\CRM\Measurement;

class SuccessLeedsPanelController extends Controller
{
    public function successLeedsPanel($id)
    {
        $leed = Leeds::find($id);
        return view('CRM.successLeeds.profile', ['leed'=>$leed]);
    }
    public function addMeeting($id)
    {
        $leed = Leeds::find($id);
        $categories = ProjectCategory::orderBy('id', 'desc')->get();
        return view('CRM.successLeeds.addMeeting', ['leed'=>$leed, 'categories'=>$categories]);
    }
    public function createMeeting(Request $request, $id)
    {
        $leed = Leeds::find($id);
        $meeting = new Meeting;
        $meeting->leedsId = $leed->id;
        $meeting->meetingDateAndTime = $request->meetingDateAndTime;
        $meeting->phoneNo = $request->phoneNo;
        $meeting->address = $request->address;
        $meeting->projectCategoryId = $request->projectCategoryId;
        $meeting->detail = $request->detail;
        $meeting->clientComments = $request->clientComments;
        $meeting->userId = Auth()->user()->id;
        $meeting->save();
        return redirect::route('all-meeting', ['id'=>$leed->id])->with('message', 'New Meeting Scheduled Successfully');
    }
    public function allMeeting($id)
    {
        $leed = Leeds::find($id);
        $meetings = Meeting::where('leedsId', $leed->id)->get();
        return view('CRM.successLeeds.allMeeting', ['leed'=>$leed, 'meetings'=>$meetings]);
    }
    public function addMeasurement($id)
    {
        $leed = Leeds::find($id);
        $measures = Measurement::all()->where('leedsId',$leed->id);
        return view('CRM.successLeeds.addMeasurement', ['leed'=>$leed, 'measures'=>$measures]);
    }
    public function createMeasurement(Request $request, $id)
    {
        $measurement= new Measurement();
        $this->validate($request, [
            'files' => 'required',
            'files.*' => 'mimes:doc,pdf,docx,zip,jpg,jpeg,gif,xls,png'
        ]);
        $files = [];
        if($request->hasfile('files'))
        {
            foreach($request->file('files') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('measure-files'), $name);
                $files[] = $name;
            }
        }
        $leed = Leeds::find($id);
        $measurement->files = json_encode($files);
        $measurement->leedsId = $leed->id;
        $measurement->save();
        return view('CRM.successLeeds.addMeasurement', ['leed'=>$leed])->with('message', 'New Files Added Successfully');
    }
    public function deleteMeasurement($index, $id)
    {
        $file = Measurement::find($id);
        $path = public_path().'/measure-files/';
//        if (file_exists(public_path('measure-file/'.$file->name)))
//        {
//            unlink(public_path('measure-files/'.$file->name));
//        }
        Storage::delete($path.$file->files);
        $filesD = json_decode($file->files);
        array_splice($filesD, $index, 1);
        Measurement::where('id', $id)->update(['files'=>json_encode($filesD)]);
        return redirect()->back()->with('message', 'File Removed successfully');
    }
}
