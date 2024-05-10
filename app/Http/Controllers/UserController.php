<?php

namespace App\Http\Controllers;

use App\Events\UserAccountCreated;
use App\Events\UserAccountUpdated;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Services\InterestService;
use App\Services\LanguageService;
use App\Services\UserInterestService;
use App\Services\UserService;
use Illuminate\Support\Str;

class UserController extends BaseController
{
    public function __construct(
        protected UserService $userService,
        protected LanguageService $languageService,
        protected InterestService $interestService,
        protected UserInterestService $userInterestService
    ) {
        $this->service = $userService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->service->getAll();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $languages = $this->languageService->getLanguagesForDropdown();
        $interests = $this->interestService->getInterestsForDropdown();

        return view('users.create', compact('languages', 'interests'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        try {
            $createData = [
                'name' => $request->name,
                'surname' => $request->surname,
                'south_african_id' => $request->south_african_id,
                'mobile_number' => $request->mobile_number,
                'email' => $request->email,
                'birth_date' => $request->birth_date,
                'language_id' => $request->language_id,
                'password' => $request->password
            ];

            $user = $this->service->create($createData);

            if ($user) {
                $interestIds = $request->get('interest_ids');
                $this->userInterestService->saveUserInterests($user->id, $interestIds);
            }

            event(new UserAccountCreated($user->email));

            return redirect()->route('users.index')->with('success', 'User created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $languages = $this->languageService->getLanguagesForDropdown();
        $interests = $this->interestService->getInterestsForDropdown();

        $user = $this->service->getById($id);
        $userInterestIds = $this->userInterestService->getUserInterests($user->id);

        return view('users.show', compact('user', 'userInterestIds', 'languages', 'interests'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $languages = $this->languageService->getLanguagesForDropdown();
        $interests = $this->interestService->getInterestsForDropdown();

        $user = $this->service->getById($id);
        $userInterestIds = $this->userInterestService->getUserInterests($user->id);

        return view('users.edit', compact('user', 'userInterestIds', 'languages', 'interests'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        try {
            $updateData = [
                'name' => $request->name,
                'surname' => $request->surname,
                'south_african_id' => $request->south_african_id,
                'mobile_number' => $request->mobile_number,
                'email' => $request->email,
                'birth_date' => $request->birth_date,
                'language_id' => $request->language_id
            ];

            $user = $this->service->update($user->id, $updateData);

            if ($user) {
                $interestIds = $request->get('interest_ids');
                $this->userInterestService->saveUserInterests($user->id, $interestIds);
            }

            event(new UserAccountUpdated($user->email));

            return redirect()->route('users.index')->with('success', 'User updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = $this->service->getById($id);

            if (Str::contains($user->email, "admin")) {
                return redirect()->back()->with('error', "Cannot delete an admin user");
            }

            $this->service->delete($id);

            return redirect()->route('users.index')->with('success', 'User deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
