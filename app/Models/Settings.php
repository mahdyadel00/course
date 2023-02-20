<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = array('title','description','logo' ,'image' , 'main_image' ,'address','email','phone','start_from', 'end_at','facebook_link','twitter_link','instagram_link','dribble_link' , 'vimeo_link' , 'behance_link');


}
