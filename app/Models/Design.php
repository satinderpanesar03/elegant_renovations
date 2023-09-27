<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const Legel_Basement = 1;
    const General_Contracting = 2;
    const Driveway_Walking = 3;
    const Flooring = 4;
    const Sliding = 5;
    const Paint_Works = 6;

    const Concrete_Works = 7;

    const  Decks_Fencing = 8;

    const  Landscaping_Patio = 9;

    const  Trim_Finish_Works = 10;

    const  Doors_Window_Installation = 11;

    const  Interior_Exterior_Designing = 12;

    const  Framing_Drywall_Works = 13;

    const  Custom_CLoset__Tv_Units = 14;

    const  Cabinets_Bathroom = 15;

    const  New_Remodelling_Kicthen = 16;

    public function gallery(){
        return $this->hasMany(Gallery::class, 'type', 'id');
    }






}
