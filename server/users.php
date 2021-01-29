<?php
/**
 * Pterodactyl - Traduzido PT-BR
 * Traduzido pelo PatrickHG7
 * Discord: PatrickHG7#5249
 * Qualquer bug reporte para o patrick
 */

return [
    'permissions' => [
        'websocket_*' => 'Permite acesso ao websocket para este servidor.',
        'control_console' => 'Permite que o usuário envie dados para o console do servidor.',
        'control_start' => 'Permite que o usuário inicie a instância do servidor.',
        'control_stop' => 'Permite que o usuário pare a instância do servidor.',
        'control_restart' => 'Permite que o usuário reinicie a instância do servidor.',
        'control_kill' => 'Permite que o usuário mate a instância do servidor.',
        'user_create' => 'Permite ao usuário criar novas contas de usuário para o servidor.',
        'user_read' => 'Permite que o usuário visualize usuários associados a este servidor.',
        'user_update' => 'Permite ao usuário modificar outros usuários associados a este servidor.',
        'user_delete' => 'Permite que o usuário exclua outros usuários associados a este servidor.',
        'file_create' => 'Permite ao usuário criar novos arquivos e diretórios.',
        'file_read' => 'Permite ao usuário ver os arquivos e pastas associados a esta instância do servidor, bem como visualizar seus conteúdos.',
        'file_update' => 'Permite ao usuário atualizar arquivos e pastas associados ao servidor.',
        'file_delete' => 'Permite que o usuário exclua arquivos e diretórios.',
        'file_archive' => 'Permite ao usuário criar arquivos de arquivos e descomprimir arquivos existentes.',
        'file_sftp' => 'Permite que o usuário execute as ações de arquivo acima usando um cliente SFTP.',
        'allocation_read' => 'Permite o acesso às páginas de gerenciamento de alocação do servidor.',
        'allocation_update' => 'Permite ao usuário fazer modificações nas alocações do servidor.',
        'database_create' => 'Permite a permissão do usuário para criar um novo banco de dados para o servidor.',
        'database_read' => 'Permite a permissão do usuário para ver os bancos de dados do servidor.',
        'database_update' => 'Permite que um usuário faça modificações em um banco de dados. Se o usuário não tiver a permissão "Ver senha" também não será capaz de modificar a senha.',
        'database_delete' => 'Permite a um usuário permissão para excluir uma instância de banco de dados.',
        'database_view_password' => 'Permite a um usuário a permissão para ver uma senha de banco de dados no sistema.',
        'schedule_create' => 'Permite que um usuário crie uma nova programação para o servidor.',
        'schedule_read' => 'Permite a um usuário a permissão para ver as programações de um servidor.',
        'schedule_update' => 'Permite que um usuário faça modificações em uma programação de servidor existente.',
        'schedule_delete' => 'Permite que um usuário exclua uma programação para o servidor.',
    ],
];
