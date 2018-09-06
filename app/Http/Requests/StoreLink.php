<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreLink extends FormRequest
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
     * [Override] バリデーション失敗時の処理
     *
     * @param Validator $validator
     * @throw HttpResponseException
     *
     * @return void
     */
    protected function failedValidation( Validator $validator )
    {
        // レスポンスで返したい値を入れる
        $response['data']    = [];
        $response['status']  = 'NG';
        $response['summary'] = 'Failed validation.';
        $response['errors']  = $validator->errors()->toArray();

        throw new HttpResponseException(
            response()->json($response, 422)
        );
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inputTitle'       => 'bail|required|string|max:30',
            'inputUrl'         => 'bail|required|active_url',
            'inputDescription' => 'bail|required|string|max:100',
            'inputTags'        => 'bail|required',
            'inputName'        => 'bail|required|string|max:20',
        ];
    }

    /**
     * ruleに合わなかった場合のエラー文
     *
     * @return array
     */
    public function messages()
    {
        return [
            'inputTitle.required' => 'リンク名を入力してください',
            'inputTitle.string'   => 'リンク名を文字列で入力してください',
            'inputTitle.max'      => 'リンク名は30文字以下で入力してください',

            'inputUrl.required'   => 'URLを入力してください',
            'inputUrl.active_url' => '有効なURLを入力してください',

            'inputDescription.required' => 'Linkの説明を入力してください',
            'inputDescription.string'   => 'Linkの説明を文字列で入力してください',
            'inputDescription.max'      => 'Linkの説明は100文字以下で入力してください',

            'inputTags.required' => 'タグを入力してください',

            'inputName.required' => 'ニックネームを入力してください',
            'inputName.string'   => 'ニックネームを文字列で入力してください',
            'inputName.max'      => 'ニックネームを20文字以下で入力してください',
        ];
    }
}
