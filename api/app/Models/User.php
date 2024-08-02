<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Community;

/**
 * Userテーブル
 *
 * @property integer $id
 * @property string $last_name
 * @property string $last_name_kana
 * @property string $first_name
 * @property string $first_name_kana
 * @property string $address
 * @property string $sub_address
 * @property integer $community_id
 * @property string $email
 * @property \Illuminate\Support\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 *
 * @property Community $community
 */

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function community(): BelongsTo
    {
        return $this->belongsTo(Community::class);
    }
}
