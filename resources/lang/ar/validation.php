<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول الـ :attribute .',
    'accepted_if' => 'يجب قبول الـ :attribute عندما :other يكون :value.',
    'active_url' => 'الـ :attribute غير صالح.',
    'after' => 'يجب أن يكون الـ :attribute تاريخاً بعد :date.',
    'after_or_equal' => 'يجب أن يكون الـ :attribute تاريخًا بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي الـ :attribute فقط على حروف.',
    'alpha_dash' => 'يجب أن يحتوي الـ :attribute فقط على حروف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'يجب أن يحتوي الـ :attribute فقط على حروف وأرقام.',
    'array' => 'يجب أن يكون الـ :attribute مصفوفة.',
    'before' => 'يجب أن يكون الـ :attribute تاريخًا قبل :date.',
    'gt' => [
        'array' => 'يجب أن يحتوي الـ :attribute على عناصر أكثر من :value.',
        'file' => 'يجب أن يكون حجم الـ :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون الـ :attribute أكبر من :value.',
        'string' => 'يجب أن يكون طول الـ :attribute أكبر من :value حرفًا.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي الـ :attribute على :value عنصرًا على الأقل.',
        'file' => 'يجب أن يكون حجم الـ :attribute أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون الـ :attribute أكبر من أو يساوي :value.',
        'string' => 'يجب أن يكون طول الـ :attribute أكبر من أو يساوي :value حرفًا.',
    ],
    'image' => 'يجب أن يكون الـ :attribute صورة.',
    'in' => 'الـ :attribute المحدد غير صالح.',
    'in_array' => 'حقل الـ :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون الـ :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون الـ :attribute عنوان IP صحيحًا.',
    'ipv4' => 'يجب أن يكون الـ :attribute عنوان IPv4 صحيحًا.',
    'ipv6' => 'يجب أن يكون الـ :attribute عنوان IPv6 صحيحًا.',
    'json' => 'يجب أن يكون الـ :attribute نصًا JSON صحيحًا.',
    'lt' => [
        'array' => 'يجب أن يحتوي :attribute على عناصر أقل من :value.',
        'file' => 'يجب أن يكون :attribute أقل من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أقل من :value.',
        'string' => 'يجب أن يكون :attribute أقل من :value حرفاً.',
    ],
    'lte' => [
        'array' => 'يجب ألا يحتوي :attribute على أكثر من :value عنصر.',
        'file' => 'يجب أن يكون :attribute أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي :value.',
        'string' => 'يجب أن يكون :attribute أقل من أو يساوي :value حرفاً.',
    ],
    'mac_address' => 'يجب أن يكون :attribute عنوان MAC صحيح.',
    'max' => [
        'array' => 'يجب ألا يحتوي :attribute على أكثر من :max عنصر.',
        'file' => 'يجب أن لا يتجاوز حجم :attribute :max كيلوبايت.',
        'numeric' => 'يجب ألا يتجاوز :attribute :max.',
        'string' => 'يجب ألا يتجاوز طول :attribute :max حرفاً.',
    ],
    'max_digits' => 'يجب ألا يحتوي :attribute على أكثر من :max خانة رقمية.',
    'mimes' => 'يجب أن يكون :attribute من نوع الملف: :values.',
    'mimetypes' => 'يجب أن يكون :attribute من نوع الملف: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي :attribute على الأقل على :min عنصر.',
        'file' => 'يجب أن يكون حجم :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
        'string' => 'يجب أن يكون :attribute على الأقل :min حرفاً.',
    ],
    'min_digits' => 'يجب أن يحتوي :attribute على الأقل على :min خانة رقمية.',
    'multiple_of' => 'يجب أن يكون :attribute مضاعفاً لـ :value.',
    'not_in' => 'تم اختيار :attribute المحدد غير صحيح.',
    'not_regex' => 'صيغة :attribute غير صالحة.',
    'numeric' => 'يجب أن يكون :attribute رقمًا.',
    'password' => [
        'letters' => 'يجب أن يحتوي :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي :attribute على حرف كبير وحرف صغير على الأقل.',
        'numbers' => 'يجب أن يحتوي :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'تم تسريب :attribute المعطى في قاعدة بيانات. يرجى اختيار :attribute مختلف.',
    ],
    'present' => 'يجب توفير حقل :attribute.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'حقل :attribute محظور عندما :other يساوي :value.',
    'prohibited_unless' => 'حقل :attribute محظور إلا إذا كان :other في :values.',
    'prohibits' => 'حقل :attribute يمنع توفر :other.',
    'regex' => 'صيغة :attribute غير صالحة.',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'يجب أن يحتوي حقل :attribute على القيم :values.',
    'required_if' => 'حقل :attribute مطلوب عندما يساوي :other :value.',
    'required_if_accepted' => 'حقل :attribute مطلوب عندما يتم قبول :other.',
    'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other في :values.',
    'required_with' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'حقل :attribute مطلوب عندما لا تكون :values موجودة.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا يكون أي من :values موجودًا.',
    'same' => 'يجب أن يتطابق :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي :attribute على :size عنصرًا.',
        'file' => 'يجب أن يكون حجم :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute قيمة رقمية بحجم :size.',
        'string' => 'يجب أن يكون طول :attribute :size حرفًا.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون :attribute نصًا.',
    'timezone' => 'يجب أن يكون :attribute منطقة زمنية صحيحة.',
    'unique' => 'تم استخدام :attribute من قبل.',
    'uploaded' => 'فشل تحميل :attribute.',
    'url' => 'يجب أن يكون :attribute عنوان URL صحيحًا.',
    'uuid' => 'يجب أن يكون :attribute UUID صحيحًا.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'title' => 'العنوان',
        'sku' => 'الرمز التعريفي',
        'quantity' => 'الكمية',
        'wheight' => 'الوزن',
        'short_description' => 'الوصف المختصر',
        'description' => 'الوصف',
        'price' => 'السعر',
        'cost' => 'التكلفة',
        'discount' => 'الخصم',
        'free_shipping' => 'الشحن المجاني',
        'is_active' => 'تفعيل',
        'category_id' => 'التصنيف',
        'username' => 'اسم المستخدم',
        'password' => 'كلمة المرور',
        'email' => 'البريد الإلكتروني',
        'phone' => 'رقم الهاتف',
        'store_link' => 'رابط المتجر',
        'store_name' => 'اسم المتجر',
        'new_password' => 'كلمة المرور الجديدة',
        'new_password_confirmation' => 'تأكيد كلمة المرور الجديدة',
        'parent_id' => 'التصنيف الأب',
        'name' => 'الاسم',
        'birth_date' => 'تاريخ الميلاد',
        'gender' => 'الجنس',
        'description' => 'الوصف',
        'city_id' => 'المدينة',
        'vat_value' => 'قيمة الضريبة المضافة',
        'store_desc' => 'وصف المتجر',
        'number' => 'الرقم',
        'token' => 'الرمز',
        'image' => 'الصورة الرئيسية',
        'sub_images' => 'الصور الفرعية',
    ],

];
