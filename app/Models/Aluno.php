<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'curso', 'email'];

    public static function porCurso($curso)
    {
        return self::where('curso', $curso)->get();
    }

    public static function porNome($palavra)
    {
        return self::where('nome', 'like', '%' . $palavra . '%')->get();
    }

    public static function recentes()
    {
        return self::where('created_at', '>=', now()->subDays(7))->get();
    }

    public static function quantidade()
    {
        return self::count();
    }

    public function curso()
    {
    return $this->belongsTo(Curso::class);
    }
    public function user()
{
    return $this->belongsTo(User::class);
}

}