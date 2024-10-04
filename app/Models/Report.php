<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Report extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public static function scopeFindReportsBySentence($query, $sentence)
    {
        return $query->join('categories', 'categories.id', 'reports.category_id')
                ->where('reports.status', 'active')
                ->whereAny([
                    'reports.title',
                    'reports.description',
                    'categories.name',
                ], 'like', '%'.$sentence.'%')
                ->select('reports.*');
    }
}
