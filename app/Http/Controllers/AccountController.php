<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function readAccounts(Request $request)
    {
        $accounts = DB::table('accounts')->where(
            'username', 'LIKE', '%' . $request->search . '%')->get();
        return view('account.read-accounts', ['accounts' => $accounts]);
//        SELECT * FROM accounts WHERE username LIKE %$search%
    }


    public function createFrom()
    {
        return view('account.create-account');
    }

    public function create(Request $request)
    {
        $data = array(
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        );
        DB::table('accounts')->insert($data);
//        INSERT INTO accounts VALUES ($username, $password, $email)


        return redirect('read');
    }

    public function updateFrom(Request $request)
    {
//        SELECT * FROM accounts WHERE id = $id
        $account = DB::table('accounts')->find($request->id);
        return view('account.update-account', compact('account'));
    }

    public function update(Request $request)
    {

        DB::table('accounts')
            ->where('id', $request->id)
            ->update([
                'username' => $request->username,
                'password' => $request->password,
                'email' => $request->email

            ]);
//        UPDATE accounts SET username = $username, password = $password, email = $email, WHERE id = $id

        return redirect('read');
    }

    public function delete(Request $request)
    {
//        DELETE FROM accounts WHERE id = $id
        DB::table('accounts')->where('id', '=', $request->id)->delete();
        return redirect('read');

    }


}
