<?php

namespace App\Http\Controllers;
use App\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\User;
use App\Response\Response;
use App\Http\Requests\UserStoreRequest;
class UserController extends Controller
{
    private $userRepository;
    public $user;
    public $response;
   public function __construct(UserRepositoryInterface $userRepository,Response $response)
   {
       $this->userRepository = $userRepository;
       $this->response = $response;
   }

   public function index()
   {
       $users = $this->userRepository->all();

       return $users;
   }
   public function store(UserStoreRequest $request)
   {
    $validated = $request->validated();
    $users = $this->userRepository->create($request->all());

    return $users;
   }

   public function find($id)
   {
       $user = $this->userRepository->getUser($id);
       return $this->response->dataResponse(1,$user,'Users');
   }
}
