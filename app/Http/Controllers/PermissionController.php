<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        return Permission::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $permission = Permission::create($validated);
        return response()->json($permission, 201);
    }

    public function show(Permission $permission)
    {
        return $permission;
    }

    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $permission->update($validated);
        return response()->json($permission, 200);
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return response()->json(['message' => 'Permission deleted successfully'], 200);
    }
}
