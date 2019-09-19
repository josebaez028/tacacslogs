<?php

return [
    'userManagement' => [
        'title'          => 'Gestión de usuarios',
        'title_singular' => 'Gestión de usuarios',
    ],
    'permission'     => [
        'title'          => 'Permisos',
        'title_singular' => 'Permisos',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'registro'       => [
        'title'          => 'Registros',
        'title_singular' => 'Registro',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'fecha'              => 'Fecha',
            'fecha_helper'       => '',
            'hora'               => 'Hora',
            'hora_helper'        => '',
            'origen'             => 'Origen',
            'origen_helper'      => '',
            'destino'            => 'Destino',
            'destino_helper'     => '',
            'duracion'           => 'Duracion',
            'duracion_helper'    => '',
            'codigo'             => 'Codigo',
            'codigo_helper'      => '',
            'fecha_larga'        => 'Fecha Larga',
            'fecha_larga_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'contacto'       => [
        'title'          => 'Contactos',
        'title_singular' => 'Contacto',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'nombre'            => 'Nombre',
            'nombre_helper'     => '',
            'telefono'          => 'Telefono',
            'telefono_helper'   => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
];
