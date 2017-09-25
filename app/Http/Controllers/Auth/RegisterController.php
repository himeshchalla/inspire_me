<?php

namespace App\Http\Controllers\Auth;

use DB;
use Validator;
use App\Services\UserService;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use \DateTime;
use \DateInterval;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->middleware('guest');
        $this->service = $userService;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $min_adult_birthdate_obj = new \DateTime();
        $min_adult_birthdate_obj->sub(new DateInterval('P18Y'));
        $min_adult_birthdate = $min_adult_birthdate_obj->format('Y-m-d H:i:s');
        $current_date = new \DateTime();
        $current_year = date('Y');
        $validation_rules = [
            'name'              => 'required|string|max:255',
            'surname'           => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:cms_users,email',
            'password'          => 'required|string|min:6|confirmed',
            'photo'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'work_start_year'   => 'nullable|numeric|min:1900|max:'.$current_year,
            'birthdate'         => 'nullable|date|before_or_equal:$min_adult_birthdate',
            'country'           => 'nullable|alpha',
            'city'              => 'nullable|alpha',
            'current_company'   => 'nullable|string',
            'user_personal_message' => 'nullable|alpha_num|max:500',
        ];
//         $validation_messages = [
//             'before_or_equal'         => 'You must be adult and have age more than 18 years',
//             'work_start_year'   => 'Year must be between 1900 and '.$current_year,
//         ];
        return Validator::make($data, $validation_rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data, Request $request = null)
    {
        $new_user = User::create([
            'name'                  => $data['name'],
            'surname'               => $data['surname'],
            'email'                 => $data['email'],
            'password'              => bcrypt($data['password']),
//            'photo'                 => $file_store_path,
            'work_start_year'       => $data['work_start_year'],
            'birthdate'             => $data['birthdate'],
            'country'               => $data['country'],
            'city'                  => $data['city'],
            'current_company'       => $data['current_company'],
            'user_personal_message' => $data['user_personal_message'],
        ]);
        
        if($new_user->id > 0) {
            $file_store_path = null;
            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $file_store_path = $request->photo->store('uploads/'.$new_user->id);
                $new_user_update_status = $new_user->update(['photo' => $file_store_path,]);
            }
        }
        
        DB::transaction(function() use ($data, $new_user) {
            return $this->service->create($new_user, $data['password']);
        });
        return $new_user;
    }
    
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
    
        event(new Registered($user = $this->create($request->all(), $request)));
    
        //$this->guard()->login($user);

//         return $this->registered($request, $user)
//         ?: redirect($this->redirectPath());
        
        return redirect($this->redirectPath());
    }
}
