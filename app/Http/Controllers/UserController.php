<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Repositories\Interface\UserRepositoryInterface;
use App\Services\UserAuthenticationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $userRepository, $userAuthentication;
    public function __construct(UserRepositoryInterface $userRepository, UserAuthenticationService $userAuthentication)
    {
        $this->userRepository = $userRepository;
        $this->userAuthentication = $userAuthentication;
    }
    /**
     * Login Form Display
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function loginFormDisplay(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }

    /**
     * Registration Form Display
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function
    signupFormDisplay(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('register');
    }

    public function login(LoginFormRequest $request): \Illuminate\Http\RedirectResponse
    {
        return $this->userAuthentication->authenticate($request->all())
            ? redirect()->intended(route('admin-dashboard'))
            : redirect()->back()->with('message', 'Invalid credentials!!');
    }

    public function register(RegisterFormRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->userRepository->create($request->all());

            DB::commit();
            return redirect()->back()->with('message', "User Registered Successfully.");
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
