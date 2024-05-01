<?php
namespace App\Traits;
use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait ImageTrait
{
    /**
     * Define a polymorphic relation to images.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function images(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
