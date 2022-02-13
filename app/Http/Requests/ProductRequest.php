<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'descripcion' => 'required',
            'visibilidad' => 'required',
            'cantidad' => 'required',
            'category_id' => 'required',
            'precio_base' => 'required',
            'impuestos' => 'required',
            'category_id' => 'required',
            'descuento' => 'required',
            'prod-img' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'descripcion.required' => 'La descripcion es obligatoria',
            'visibilidad.required' => 'La visibilidad es obligatoria',
            'cantidad.required' => 'La cantidad es obligatoria',
            'category_id.required' => 'La categoria es obligatoria',
            'precio_base.required' => 'El precio_base es obligatorio',
            'impuestos.required' => 'Los impuestos son obligatorios',
            'descuento.required' => 'El descuento es obligatorio',
            'prod-img.required' => 'La imagen es obligatoria',
        ];
    }
    /* protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();

        throw new HttpResponseException(
            response()->json(['errors' => $errors], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    } */
    /* public function response(array $errors)
    {
        if ($this->expectsJson()) {
            return new JsonResponse($errors, 422);
        }
        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);
    } */
}
