<?php
/**
 * Pterodactyl - Traduzido PT-BR
 * Traduzido pelo PatrickHG7
 * Discord: PatrickHG7#5249
 * Qualquer bug reporte para o patrick
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Linhas de linguagem de validação
    |--------------------------------------------------------------------------
    |
    | As seguintes linhas de idioma contêm as mensagens de erro padrão usadas por
    | a classe validadora. Algumas dessas regras têm várias versões, como
    | como as regras de tamanho. Sinta-se à vontade para ajustar cada uma dessas mensagens aqui.
    |
    */

    'accepted' => 'O :attribute deve ser aceito.',
    'active_url' => 'O :attribute não é um URL válido.',
    'after' => 'O :attribute deve ser uma data depois :date.',
    'after_or_equal' => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O :attribute pode conter apenas letras.',
    'alpha_dash' => 'O :attribute pode conter apenas letras, números e travessões.',
    'alpha_num' => 'O :attribute pode conter apenas letras e números.',
    'array' => 'O :attribute deve ser um array.',
    'before' => 'O :attribute deve ser uma data antes :date.',
    'before_or_equal' => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute deve estar entre :min and :max.',
        'file' => 'O :attribute deve estar entre :min and :max kilobytes.',
        'string' => 'O :attribute deve estar entre :min and :max caracteres.',
        'array' => 'O :attribute deve estar entre :min and :max items.',
    ],
    'boolean' => 'O :attribute campo deve ser true ou false.',
    'confirmed' => 'O :attribute a confirmação não corresponde.',
    'date' => 'O :attribute não é uma data válida.',
    'date_format' => 'O :attribute não corresponde ao formato :format.',
    'different' => 'O :attribute e :other deve ser diferente.',
    'digits' => 'O :attribute devemos ser :digits digitos.',
    'digits_between' => 'O :attribute deve estar entre :min and :max digits.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O :attribute campo tem um valor duplicado.',
    'email' => 'O :attribute Deve ser um endereço de e-mail válido.',
    'exists' => 'O selecionado :attribute é inválido.',
    'file' => 'O :attribute deve ser um arquivo.',
    'filled' => 'O :attribute campo é obrigatório.',
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O selecionado :attribute é inválido.',
    'in_array' => 'O :attribute campo não existe em :other.',
    'integer' => 'O :attribute deve ser um inteiro.',
    'ip' => 'O :attribute deve ser um endereço IP válido.',
    'json' => 'O :attribute deve ser uma string JSON válida.',
    'max' => [
        'numeric' => 'O :attribute não pode ser maior que :max.',
        'file' => 'O :attribute não pode ser maior que :max kilobytes.',
        'string' => 'O :attribute não pode ser maior que :max caracteres.',
        'array' => 'O :attribute não pode ter mais que :max items.',
    ],
    'mimes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um arquivo de tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'file' => 'O :attribute deve ser pelo menos :min kilobytes.',
        'string' => 'O :attribute deve ser pelo menos :min caracteres.',
        'array' => 'O :attribute deve ter pelo menos :min items.',
    ],
    'not_in' => 'O selecionado :attribute é inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'present' => 'O :attribute campo deve estar presente.',
    'regex' => 'O :attribute formato é inválido.',
    'required' => 'O :attribute campo é obrigatório.',
    'required_if' => 'O :attribute campo é obrigatório quando :other é :value.',
    'required_unless' => 'O :attribute campo é obrigatório a menos :other é em :values.',
    'required_with' => 'O :attribute campo é obrigatório quando :values não está presente.',
    'required_with_all' => 'O :attribute campo é obrigatório quando :values não está presente.',
    'required_without' => 'O :attribute campo é obrigatório quando :values não está presente.',
    'required_without_all' => 'O :attribute campo é obrigatório quando nenhum :values estão presentes.',
    'same' => 'O :attribute e :other deve combinar.',
    'size' => [
        'numeric' => 'O :attribute devemos ser :size.',
        'file' => 'O :attribute devemos ser :size kilobytes.',
        'string' => 'O :attribute devemos ser :size caracteres.',
        'array' => 'O :attribute deve conter :size items.',
    ],
    'string' => 'O :attribute deve ser uma string.',
    'timezone' => 'O :attribute deve ser uma zona válida.',
    'unique' => 'O :attribute já foi tomada.',
    'uploaded' => 'O :attribute falha ao carregar.',
    'url' => 'O :attribute formato é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Atributos de validação personalizados
    |--------------------------------------------------------------------------
    |
    | As seguintes linhas de linguagem são usadas para trocar os marcadores de posição de atributos
    | com algo mais fácil de ler, como endereço de e-mail.
    | de "e-mail". Isso simplesmente nos ajuda a tornar as mensagens um pouco mais claras.
    |
    */

    'attributes' => [],

    // Lógica de validação interna para pterodáctilo
    'internal' => [
        'variable_value' => ':env variável',
        'invalid_password' => 'A senha fornecida é inválida para esta conta.',
    ],
];
