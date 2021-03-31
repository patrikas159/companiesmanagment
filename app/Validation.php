<?php
namespace CompanyApp;
class Validation {
    private static $errors=[];
    public static function validate($data){
        self::validateName($data['name']);
        self::validateCode($data['code']);
        self::validateVatCode($data['vatCode']);
        self::validateAddress($data['address']);
        self::validatePhone($data['phone']);
        self::validateEmail($data['email']);
        self::validateActivity($data['activities']);
        self::validateManager($data['manager']);
        return self::$errors;
    }
    public static function validateName($name){
        $validName=preg_match('/^[\w\d ,.]{1,255}$/',$name);
        if(empty($name)){
            Validation::$errors['name']="Privalomas laukas";
        } else if(!$validName){
            Validation::$errors['name']="Daugiausia 255 simboliu";
        } else {
            Validation::$errors['name']="";
        }
    }
    public static function validateCode($code){
        $validCode=preg_match('/^[0-9]{7,9}$/',$code);
        if(empty($code)){
            Validation::$errors['code']="Privalomas laukas";
        } else if(!$validCode){
            Validation::$errors['code']="Koda turi sudaryti 7-9 simboliu";
        } else {
            Validation::$errors['code']="";
        }
    }
    public static function validateVatCode($vatCode){
        $validVatCode=preg_match('/^[0-9]{9}$/',$vatCode);
        if(empty($vatCode)){
            Validation::$errors['vatCode']="Privalomas laukas";
        } else if(!$validVatCode){
            Validation::$errors['vatCode']="Vat kodas turi tureti 9 simbolius";
        } else {
            Validation::$errors['vatCode']="";
        }
    }
    public static function validateAddress($address){
        if(empty($address)){
            Validation::$errors['address']="Privalomas laukas";
        } else {
            Validation::$errors['address']="";
        }
    }
    public static function validatePhone($phone){
        $validPhone=preg_match('/^[+][0-9]{11}$/',$phone);
        if(empty($phone)){
            Validation::$errors['phone']="Privalomas laukas";
        } else if(!$validPhone){
            Validation::$errors['phone']="Netinkamas numerio formatas";
        } else {
            Validation::$errors['phone']="";
        }
    }
    public static function validateEmail($email){
        if(empty($email)){
            Validation::$errors['email']="Privalomas laukas";
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            Validation::$errors['email']="Netinkamas email formatas";
        } else {
            Validation::$errors['email']="";
        }
    }
    public static function validateActivity($activity){
        $validActivity=preg_match('/^[A-Za-z\\- \']+$/',$activity);
        if(empty($activity)){
            Validation::$errors['activities']="Privalomas laukas";
        } else if(!$validActivity){
            Validation::$errors['activities']="Irasas neatitinka formato";
        } else {
            Validation::$errors['activities']="";
        }
    }
    public static function validateManager($manager){
        $validManager=preg_match('/^[A-Za-z\\- \']+$/',$manager);
        if(empty($manager)){
            Validation::$errors['manager']="Privalomas laukas";
        } else if(!$validManager){
            Validation::$errors['manager']="Irasas neatitinka formato";
        } else {
            Validation::$errors['manager']="";
        }
    }
}