<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\OngoingProgram;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mendapatkan data dengan cara find auth
        // $x       = OngoingProgram::latest()->where('user_id', $authuser->id)->find(auth()->user()->id);

        $authuser = auth()->user();
        $ongoing = OngoingProgram::latest()->where('user_id', $authuser->id)->get();
        $datecarbon = [];

        foreach ($ongoing as $program) {
            $datecarbon[] = Carbon::parse($program->date)->isoFormat('dddd, D MMMM Y');
        }

        return view('dashboard.user.index', [
            'posts' => $authuser,
            'title' => 'Profile',
            'datecarbon' => $datecarbon,
            'collections'  => $ongoing
        ]);
    }

    public function detail($id)
    {
        $authuser = auth()->user();
        $userid = OngoingProgram::where('user_id', $authuser->id)->find($id);
        $datepurchased = Carbon::parse($userid->created_at)->isoFormat('dddd, D MMMM Y | HH:mm');
        $datecarbon = Carbon::parse($userid->date)->isoFormat('dddd, D MMMM Y');

        return view('dashboard.user.details', [
            'posts' => auth()->user(),
            'title' => 'Details',
            'datecarbon' => $datecarbon,
            'datepurchased' => $datepurchased,
            'data' => OngoingProgram::find($id)
        ]);
    }

    public function upload(Request $request)
    {
        return response()->json(['success'=>'Foto profil sukses diupload!', 'image'=>$request->image]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        return view('dashboard.user.edit', [
            'title' => 'Edit Profile',
            'posts' => auth()->user($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_profile(Request $request, string $id)
    {
        dd($request);
    }
    public function update_email(Request $request, string $id)
    {
        $data = User::find($id);
        $validateData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:255',
        ]);

        $check = Hash::check($request->password, $data->password);

        if ($check) {
            $data->email = $validateData['email'];
            $data->save();

            return back()->with('update-success', 'Selamat, update data berhasil');
        } else {
            return back()->with('update-failed', 'Update data gagal!');
        }
    }
    public function update_password(Request $request, string $id)
    {
        $data = User::find($id);
        $validateData = $request->validate([
            'old_password' => 'required|min:8|max:255',
            'new_password' => 'required|min:8|max:255',
            'confirmation_password' => 'required|min:8|max:255',
        ]);

        $check = Hash::check($request->old_password, $data->password);
        if ($check) {
            if ($request->new_password == $request->confirmation_password) {
                $hashed = Hash::make($request->new_password);
                $data->password = $hashed;
                $data->save();

                return back()->with('update-success', 'Selamat, update data berhasil');
            } else {
                return back()->with('update-failed', 'Update data gagal!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
