<?php
/**
 * Pterodactyl - Traduzido PT-BR
 * Traduzido pelo PatrickHG7
 * Discord: PatrickHG7#5249
 * Qualquer bug reporte para o patrick
 */

return [
    'daemon_connection_failed' => 'Houve uma exceção ao tentar se comunicar com o daemon, resultando em um HTTP/:code código de resposta. Esta exceção foi registrada.',
    'node' => [
        'servers_attached' => 'Um node não deve ter servidores vinculados a ele para ser excluído.',
        'daemon_off_config_updated' => 'A configuração do daemon <strong>tem sido atualizado</strong>, no entanto, foi encontrado um erro ao tentar atualizar automaticamente o arquivo de configuração no Daemon. Você precisará atualizar manualmente o arquivo de configuração (config.yml) para o daemon para aplicar essas mudanças.',
    ],
    'allocations' => [
        'server_using' => 'Um servidor está atualmente atribuído a esta alocação. Uma alocação só pode ser excluída se nenhum servidor estiver atualmente atribuído.',
        'too_many_ports' => 'Adicionar mais de 1000 portas em um único intervalo de uma vez não é compatível.',
        'invalid_mapping' => 'O mapeamento fornecido para :port era inválido e não pôde ser processado.',
        'cidr_out_of_range' => 'A notação CIDR só permite máscaras entre /25 e /32.',
        'port_out_of_range' => 'As portas em uma alocação devem ser maiores que 1024 e menores ou iguais a 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Um Nest com servidores ativos anexados a ele não pode ser excluído do Painel.',
        'egg' => [
            'delete_has_servers' => 'Um egg com servidores ativos anexados a ele não pode ser excluído do painel.',
            'invalid_copy_id' => 'O egg selecionado para copiar um script não existe ou está copiando um script próprio.',
            'must_be_child' => 'A diretiva "Copiar configurações de" para este Egg deve ser uma opção filha para o Nest selecionado.',
            'has_children' => 'Este egg é o pai de um ou mais eggs. Exclua esses eggs antes de excluir este egg.',
        ],
        'variables' => [
            'env_not_unique' => 'A variável de ambiente :name deve ser exclusivo para este egg.',
            'reserved_name' => 'A variável de ambiente :name está protegido e não pode ser atribuído a uma variável.',
            'bad_validation_rule' => 'A regra de validação ":rule" não é uma regra válida para este aplicativo.',
        ],
        'importer' => [
            'json_error' => 'Ocorreu um erro ao tentar analisar o arquivo JSON: :error.',
            'file_error' => 'O arquivo JSON fornecido não era válido.',
            'invalid_json_provided' => 'O arquivo JSON fornecido não está em um formato que possa ser reconhecido.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Editar sua própria conta de subusuário não é permitido.',
        'user_is_owner' => 'Você não pode adicionar o proprietário do servidor como um subusuário para este servidor.',
        'subuser_exists' => 'Um usuário com esse endereço de e-mail já foi atribuído como subusuário para este servidor.',
    ],
    'databases' => [
        'delete_has_databases' => 'Não é possível excluir um servidor host de banco de dados que possui bancos de dados ativos vinculados a ele.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'O intervalo máximo de tempo para uma tarefa em cadeia é de 15 minutos.',
    ],
    'locations' => [
        'has_nodes' => 'Não é possível excluir um local que possui nós ativos anexados a ele.',
    ],
    'users' => [
        'node_revocation_failed' => 'Falha ao revogar chaves em <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No nodes que satisfazem os requisitos especificados para implantação automática podem ser encontrados.',
        'no_viable_allocations' => 'Nenhuma alocação que satisfaça os requisitos de implantação automática foi encontrada.',
    ],
    'api' => [
        'resource_not_found' => 'O recurso solicitado não existe neste servidor.',
    ],
];
