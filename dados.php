<?php
$organizacoes = [
    [
        'nome' => 'Instituto Esperança Brasil',
        'cnpj' => '12.345.678/0001-90',
        'categoria' => 'OSCIP',
        'estado' => 'SP',
        'cidade' => 'São Paulo',
        'status' => 'Ativa',
        'certificacoes' => 'CEBAS'
    ],
    [
        'nome' => 'Fundação Verde Futuro',
        'cnpj' => '98.765.432/0001-10',
        'categoria' => 'Fundação',
        'estado' => 'BA',
        'cidade' => 'Salvador',
        'status' => 'Inativa',
        'certificacoes' => 'Utilidade Pública'
    ],
    [
        'nome' => 'Associação Mãos Abertas',
        'cnpj' => '33.111.222/0001-55',
        'categoria' => 'Entidade Beneficente',
        'estado' => 'PR',
        'cidade' => 'Curitiba',
        'status' => 'Ativa',
        'certificacoes' => 'CNES'
    ],
    // Organização em Ponta Grossa adicionada
    [
        'nome' => 'ONG Ponta Grossa Solidária',
        'cnpj' => '11.222.333/0001-44',
        'categoria' => 'Entidade Beneficente',
        'estado' => 'PR',
        'cidade' => 'Ponta Grossa',
        'status' => 'Ativa',
        'certificacoes' => 'CEBAS, Transparência'
    ],
];

// Carrega cadastros persistidos (data/organizacoes.json) e mescla
$jsonFile = __DIR__ . '/data/organizacoes.json';
if (file_exists($jsonFile)) {
    $json = file_get_contents($jsonFile);
    $extra = json_decode($json, true);
    if (is_array($extra)) {
        $organizacoes = array_merge($organizacoes, $extra);
    }
}
?>
