# Email List 
> Sample of using Repository pattern 
---------- 
## Get started 

Laravel vertions 9.*

Install the package

~~~php  
composer require mahmoudsabry/email-list
~~~  

Once the package installed successfully, It is autoloaded to the laravel core

Create your Controller 

~~~php  
<?php

namespace App\Http\Controllers;

use MS\EmailList\EmailList;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use MS\EmailList\Repository\Interfaces\EmailListRepositoryInterface;

class EmailListControllers extends Controller
{

    private $emailList;
    public function __construct(EmailListRepositoryInterface $interface)
    {
        $this->emailList = new EmailList($interface);
    }

    function index(){
       return $this->emailList->index();
    }

    function create(){
        try{
        return $this->emailList->create(request('email'));
        } catch(ValidationException $e)
        {
            return redirect()
            ->back()
            ->withErrors($e->validator)
            ->withInput();
        }
    }

}
~~~  
