<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */
/**
 * Pterodactyl - Traduzido PT-BR
 * Traduzido pelo PatrickHG7
 * Discord: PatrickHG7#5249
 * Qualquer bug reporte para o patrick
 */

return [
    'notices' => [
        'created' => 'Um novo nest, :name, foi criado com sucesso.',
        'deleted' => 'Excluído com sucesso o nest solicitado do painel.',
        'updated' => 'Atualizou com sucesso as opções de configuração do nest.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Importou com sucesso este egg e suas variáveis ​​associadas.',
            'updated_via_import' => 'Este egg foi atualizado usando o arquivo fornecido.',
            'deleted' => 'Excluído com sucesso o egg solicitado do painel.',
            'updated' => 'A configuração do egg foi atualizada com sucesso.',
            'script_updated' => 'O script de instalação do egg foi atualizado e será executado sempre que os servidores forem instalados.',
            'egg_created' => 'Um novo egg foi posto com sucesso. Você precisará reiniciar todos os daemons em execução para aplicar este novo egg.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'A variável ":variable" foi excluído e não estará mais disponível para os servidores depois de reconstruído.',
            'variable_updated' => 'A variável ":variable" Tem sido atualizado. Você precisará reconstruir todos os servidores usando esta variável para aplicar as mudanças.',
            'variable_created' => 'Nova variável foi criada com sucesso e atribuída a este egg.',
        ],
    ],
];
