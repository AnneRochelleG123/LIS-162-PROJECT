<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ResourceRequest; // Add this if ResourceRequest is in the same namespace
use App\Models\ServiceRequest; // Add this if referencing the same model explicitly


class Request extends Model
{
    use HasFactory;

    protected $table = 'requests'; // Explicitly specify the table name

    protected $fillable = [
        'user_id',
        'request_type',
        'status',
        'date_time_submitted',
    ];
    
    public function resourceRequest()
    {
        return $this->hasOne(ResourceRequest::class, 'request_id');
    }
    
    public function serviceRequest()
    {
        return $this->hasOne(ServiceRequest::class, 'request_id');
    }
 }
