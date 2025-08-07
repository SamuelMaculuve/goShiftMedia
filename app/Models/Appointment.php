<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\GoogleCalendar\Event;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'start',
        'end',
        'meeting_link',
        'event_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//    protected static function booted(): void
//    {
//        static::deleting(function ($appointment) {
//            if ($appointment->event_id) {
//                $event = Event::find($appointment->event_id);
//                if ($event) {
//                    $event->delete();
//                }
//            }
//        });
//    }
}
