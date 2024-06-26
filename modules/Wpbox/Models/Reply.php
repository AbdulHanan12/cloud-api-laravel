<?php

namespace Modules\Wpbox\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Scopes\CompanyScope;
use Modules\Contacts\Models\Contact;
use PDO;

use function Ramsey\Uuid\v1;

class Reply extends Model
{
   // use SoftDeletes;
    
    protected $table = 'replies';
    public $guarded = [];

    public function shouldWeUseIt($receivedMessage,Contact $contact){
        $receivedMessage=" ".strtolower($receivedMessage);
        $message="";
        if($this->type==2){
            //Exact match
            if($receivedMessage==$this->trigger){
                $message=$this->text;
                $contact->sendMessage($this->text,false);
            }
        }else if($this->type==3){
            //Contains
            if(stripos($receivedMessage,$this->trigger)!=false){
                $message=$this->text;
            }
            
        }
        
        //Change message
        if($message!=""){
            $this->increment('used', 1);
            $this->update();


            $pattern = '/{{\s*([^}]+)\s*}}/';
            preg_match_all($pattern, $message, $matches);
            $variables = $matches[1];
            foreach ($variables as $key => $variable) {
                if($variable=="name"){
                    $message=str_replace("{{".$variable."}}",$contact->name,$message);
                }else if($variable=="phone"){
                    $message=str_replace("{{".$variable."}}",$contact->phone,$message);
                }else{
                    //Field
                    $val=$contact->fields->where('name',$variable)->first()->pivot->value;
                    $message=str_replace("{{".$variable."}}",$val,$message);
                }
            }
            
            $contact->sendMessage($message,false);
           
        }

        
    }

    protected static function booted(){
        static::addGlobalScope(new CompanyScope);

        static::creating(function ($model){
           $company_id=session('company_id',null);
            if($company_id){
                $model->company_id=$company_id;
            }
        });
    }
}
