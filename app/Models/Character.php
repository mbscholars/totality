<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

class Character extends Model
{
    use HasFactory;

    protected $guarded =[];


    public function occupation() : HasOne
    {
        return $this->hasOne(Occupation::class, 'character_id', 'id');
    }

    static function filterSeason(int $category) : Collection
    {
        return  self::join('character_categories', 'character_categories.character_id', 'characters.id')
                ->where('character_categories.category_id', $category)
                ->select('characters.*')->limit(16)->get();
    }

    public function setCharacterCategories(string $csv_categories) : self
    {
        $category_list = explode(',',  $csv_categories);

        
        foreach ($category_list as $category) {

            if(empty($category)){ continue ; }

            $this->category()->firstOrCreate([
                'category_id' => Category::firstOrCreate(['name' => trim($category)])->id
            ]);
        }

        return $this;
    }

    public function category() : HasMany
    {
        return $this->hasMany(CharacterCategory::class, 'character_id', 'id');
    }

    public function getPlay()
    {
        $featured = CharacterCategory::select('category_id')->where('character_id', $this->id)->get();
        return Category::whereIn('id', $featured)->get();
    }


    

}
