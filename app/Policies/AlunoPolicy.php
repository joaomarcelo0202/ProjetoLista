<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    /**
     * Somente Admin pode criar Aluno.
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Admin e Professor podem editar Aluno.
     */
    public function update(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin' || $user->role === 'professor';
    }

    /**
     * Somente Admin pode excluir Aluno.
     */
    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin';
    }
}