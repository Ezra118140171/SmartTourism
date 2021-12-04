<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class StoreVehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kd_kendaraan' => ['required','max:255','unique:vehicle,kd_kendaraan'],
            'nama_kendaraan' => ['required','max:255',],
            'status' => ['required', 'in:Tersedia,Perbaikan']
        ];
    }

    public function messages()
    {
        return[
            'kd_kendaraan.required' => 'Mohon form diisi',
            'kd_kendaraan.unique' => 'kode kendaraan sudah ada',
            'nama_kendaraan.required' => 'Mohon form diisi',
            'status.required' => 'Mohon pilih salah satu',
        ];
    }
}
