<?php
namespace MS\EmailList;

use Illuminate\Validation\ValidationException;
use MS\EmailList\Repository\Interfaces\EmailListRepositoryInterface;

class EmailList
{

    private $emailListRepo;

    public function __construct(EmailListRepositoryInterface $emailListRepo)
    {
        $this->emailListRepo = $emailListRepo;
    }

    public function index()
    {
        return request()->isJson() ? response()->json($this->emailListRepo->paginate(1)) : $this->emailListRepo->paginate(1);
    }

    public function create($email)
    {
        try {
            $validator = \Validator::make(['email' => $email], [
                'email' => 'required|email|unique:ms_email_list,email',
            ]);

            if ($validator->fails()) {
                throw ValidationException::withMessages($validator->messages()->getMessages());
                // return request()->isJson() ? response()->json($validator->messages(), Response::HTTP_UNPROCESSABLE_ENTITY) : $validator->messages();
            }

            if ($validator->passes()) {

                return $this->emailListRepo->create(['email' => $email]);
            }
        } catch (ValidationException $e) {
            throw ValidationException::withMessages($e->validator->messages()->getMessages());
        }
    }

}
