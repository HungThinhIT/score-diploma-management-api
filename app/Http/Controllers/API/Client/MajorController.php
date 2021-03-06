<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Major\AssignSubjectRequest;
use App\Http\Requests\API\Major\CreateMajorRequest;
use App\Http\Requests\API\Major\DeleteMajorRequest;
use App\Http\Requests\API\Major\UpdateMajorRequest;
use App\Major;
use App\Subject;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('view', Major::class);
        $orgId = $request->user()->org_id;
        $major = Major::with(['classes', 'subjects'])->where('org_id', $orgId)->paginate($request->input('perpage'));
        return response()->json([
            'success' => true,
            'message' => 'Get list majors successfully!',
            'majors'  => $major
        ]);
    }

    public function create(CreateMajorRequest $request)
    {
        $this->authorize('create', Major::class); // TODO: Enable this
        $major = Major::create([
            'org_id' => $request->user()->org_id,
            'major_name' => $request->input('major_name'),
            'major_code' => $request->input('major_code')
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Create major '.$request->input('major_name').' successfully!',
            'major'  => $major
        ], 201);
    }

    public function update(UpdateMajorRequest $request)
    {
        $payload = array_filter($request->only('major_name', 'major_code'), 'strlen');
        $major = Major::findOrFail($request->input('major_id'));
        $this->authorize('update',  $major);
        $isUpdated = $major->update($payload);
        if($isUpdated)
            return response()->json([
                'success' => true,
                'message' => 'Update major successfully.',
                'major' => Major::findOrFail($request->input('major_id'))
            ], 200);
        return response()->json([
            'success' => false,
            'message' => 'Update major failed.',
        ], 200);
    }

    public function delete(DeleteMajorRequest $request)
    {
        $major = Major::findOrFail($request->input('major_id'));
        $this->authorize('delete', $major);
        $major->delete();
        return response()->json([
            'success' => true,
            'message' => 'Deleted major successfully.',
        ], 200);
    }

    public function assignSubject(AssignSubjectRequest $request)
    {
        $subjects = $request->input('subjects');
        $majorId = $request->input('major_id');

        $major = Major::findOrFail($majorId);
        $this->authorize('assign', $major);
        if(sizeof($subjects) > 0)
            $this->authorize('assign', [Subject::class, $subjects]);

        $major->subjects()->sync($subjects
        );
        return response()->json([
            'success' => true,
            'message' => 'Assign your subject(s) to '.$major->major_name.' successfully.',
            'major'   => $major
        ]);
    }
}
