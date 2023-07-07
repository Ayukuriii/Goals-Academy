<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\OngoingProgram;
use App\Models\ProgramService;
use App\Models\ProgramSession;
use App\Models\Tutor;
use App\Models\TutorNotes;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $datas = OngoingProgram::where('links', '=', null)->count();
        // dd($datas);
        return view('dashboard.admin.index', [
            'title' => 'Admin',
            'datas' => OngoingProgram::all(),
            'emptylink' => OngoingProgram::where('links', '=', null)->count()
        ]);
    }

    public function bimbingan()
    {
        // $tutors = Tutor::with('user')->get();
        return view('dashboard.admin.bimbingan.bimbingan', [
            'title' => 'Admin',
            // 'tutors' => $tutors,
            'datas' => OngoingProgram::where('program_status', 0)->with('tutor.user')->get()
        ]);
    }
    public function riwayat_bimbingan()
    {
        return view('dashboard.admin.bimbingan.riwayat-bimbingan', [
            'title' => 'Admin',
            'datas' => OngoingProgram::where('program_status', 1)->get()
        ]);
    }
    public function show_bimbingan(string $id)
    {
        return view('dashboard.admin.bimbingan.edit-jadwal', [
            'title' => 'Admin',
            'program_session' => ProgramSession::all(),
            'tutor_data' => Tutor::all(),
            'program_services' => ProgramService::all(),
            'data' => OngoingProgram::find($id)
        ]);
    }
    public function update_bimbingan(Request $request, string $id)
    {
        $data = OngoingProgram::findOrFail($id);
        $data->fill($request->only([
            'date',
            'program_session_id',
            'program_services_id',
            'tutor_id',
            'location',
            'links'
        ]));
        $data->save();
        return redirect('/admin/bimbingan');
    }
    public function detail_bimbingan(string $id)
    {
        return view('dashboard.admin.bimbingan.detail-bimbingan', [
            'title' => 'Admin',
            'data' => OngoingProgram::find($id)
        ]);
    }
    public function edit_bimbingan(Request $request, string $id)
    {
        $data = TutorNotes::find($id);
        $data->fill($request->only([
            'body',
            'file'
        ]));
        $data->save();
        return redirect('/admin/bimbingan');
    }

    // section list user
    public function list_user()
    {
        return view('dashboard.admin.list_user.list_user', [
            'title' => 'Admin',
            'datas' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.list_user.tambah_user', [
            'title' => 'Admin'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'university' => 'required',
            'major' => 'required',
            'password' => 'required',
            'user_level' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        $user = User::create($validateData);

        if ($validateData['user_level'] === 'tutor') {
            Tutor::create([
                'user_id' => $user->id
            ]);
        }
        return redirect()->route('admin.list_user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.admin.list_user.edit_user', [
            'title' => 'Admin',
            'data' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::findOrFail($id);
        $request['password'] = Hash::make($request['password']);

        // Check if the role has changed from 'tutor' to 'user'
        $oldRole = $data['user_level'];
        $newRole = $request['user_level'];

        $data->fill($request->except([
            '_token',
            '_method'
        ]));
        $data->save();

        if ($oldRole === 'tutor' && $newRole === 'user') {
            // Delete the tutor record associated with the user
            Tutor::where('user_id', $data->id)->delete();
        } elseif ($oldRole !== 'tutor' && $newRole === 'tutor') {
            // Create a new tutor record for the user
            Tutor::create([
                'user_id' => $data->id
            ]);
        }

        return redirect('/admin/list_user');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/admin/list_user');
    }
}
