<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\User;

class UserController extends Controller
{
    protected $pagePath = 'backend.pages.';

    public function index(Request $request)
    {
        $criteria = $request->get('search');
        if ($criteria) {
            $usersData = User::where('name', 'like', '%' . $criteria . '%')
                ->orWhere('email', 'like', '%' . $criteria . '%')
                ->orWhere('gender', 'like', '%' . $criteria . '%')
                ->get();
            return view($this->pagePath . 'users.index', compact('usersData'));
        } else {
            $userId = auth()->user()->id;
            $usersData = User::where('id', '!=', $userId)->get();
            return view($this->pagePath . 'users.index', compact('usersData'));
        }
    }

    private function deleteFile($userId)
    {
        $user = User::findOrFail($userId);
        $filePath = public_path($user->image);
        if (file_exists($filePath) && is_file($filePath)) {
            unlink($filePath);
            return true;
        } else {
            return true;
        }


    }

    public function account(Request $request)
    {
        if ($request->isMethod('get')) {
            $user = auth()->user();
            return view($this->pagePath . 'users.account', compact('user'));
        }

        if ($request->isMethod('post')) {
            $user = auth()->user();
            $user->name = $request->name;
            $user->gender = $request->gender;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $fileName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/users/');
                if ($this->deleteFile($user->id) && $file->move($uploadPath, $fileName)) {
                    $user->image = "uploads/users/" . $fileName;
                } else {
                    return redirect()->back()->with('error', 'Image upload failed');
                }
            }
            $user->save();
            return redirect()->back()->with('success', 'User account updated successfully');
        }
    }

    public function status(Request $request)
    {
        if ($request->isMethod('post')) {
            $id = $request->criteria;
            $user = User::findOrFail($id);
            if ($user->role == 'user') {
                $user->role = 'admin';
            } else {
                $user->role = 'user';
            }
            $user->save();
            return redirect()->back()->with('success', 'User status updated successfully');
        } else {
            return redirect()->back()->with('error', 'Invalid request');
        }

    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        if ($this->deleteFile($user->id) && $user->delete()) {
            return redirect()->back()->with('success', 'User deleted successfully');
        } else {
            return redirect()->back()->with('error', 'User delete failed');
        }

    }
}
