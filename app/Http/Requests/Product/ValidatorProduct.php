<?php
declare(strict_types=1);

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Entity\Product\Product;

/**
 * Summary of ValidatorProduct
 *  author Bogusław Trojański
 */
class ValidatorProduct extends FormRequest
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
    public function rules(): array
    {
        $availabilities = Product::getAllAvailability();

        return [
                 'name' => 'required|min:4|max:255',
                 'price' => 'required|integer',
                 'availability' => ['required', Rule::in($availabilities),],
        ];
    }
}
