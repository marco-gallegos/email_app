<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\EmailRequest;

use Illuminate\Support\Facades\Validator;

use App\Models\EmailModel;

use Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(EmailModel::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response =[
            "email" => true,
            "data" => true,
        ];

        $validator = Validator::make($request->all(),[
            "nombre" => "required",
            "telefono" => "required|numeric",
            "email" => "required|email",
            "asunto"=> "required",
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }else{
            
            $info = $request->all();

            $to_name = $info["nombre"];
            $to_email = $info["email"];
            $datarender = ["name"=>"{$info["nombre"]} {$info["telefono"]}", "body" => 'Esta en una notificacion via API'];
            
            // solo para no tener error en tiempo de ejecucion
            try {
                Mail::send('emails.mail', $datarender, function($message) use ($to_name, $to_email, $info) {
                    $message->to($to_email, $to_name)->subject($info["asunto"]);
                    $message->from('ma.galle.loae@gmail.com','Test Mail');}
                );
            } catch (\Exception $e) {
                $response["email"] = false;
            }

            $info["email_enviado"] = $response["email"];

            $data = EmailModel::create(
                $info
            );
            $response["data"] = $data;
        }

        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
